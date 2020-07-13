<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script src="{{asset('js/textboxio.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/orgChart.css')}}">
    <link rel="stylesheet" href="{{asset('remixicon/fonts/remixicon.css')}}">

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<nav class="navbar navbar-expand-sm   navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @guest
            <div class="navbar-menu collapse navbar-collapse" id="navbarTogglerDemo03">

                <!-- Authentication Links -->
                <ul class="navbar-nav ml-auto">
                    @foreach (config('app.available_locales') as $locale)
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), $locale) }}"
                               @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('main.index',app()->getLocale()) }}">{{ __('Вернуться на сайт') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login',app()->getLocale()) }}">{{ __('Войти') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('register',app()->getLocale()) }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    @else
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('main.index',app()->getLocale())}}">Главная<span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown dmenu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Создать
                                </a>
                                <div class="dropdown-menu sm-menu">
                                    <a class="dropdown-item"
                                       href="{{route('news.create',app()->getLocale())}}">Новость</a>
                                    <a class="dropdown-item"
                                       href="{{route('articles.create',app()->getLocale())}}">Статью</a>
                                    <a class="dropdown-item"
                                       href="{{route('engin.create',app()->getLocale())}}">Разработку</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Обновить испытания</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('news.admin.index')}}">Список новостей</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('posts.admin.index')}}">Список статей</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('engins.admin.index')}}">Список разработок</a>
                            </li>
                        </ul>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout',app()->getLocale()) }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Выйти') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                </ul>
            </div>
    </div>
</nav>
<div class="container">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @yield('create')
    @endguest

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    $('.test').click(function () {
        var sectionTo = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(sectionTo).offset().top
        }, 1000);
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.navbar-light .dmenu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    });
</script>
</body>
</html>

