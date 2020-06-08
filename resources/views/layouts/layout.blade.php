<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>НПЦ Агроинженерии</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/orgChart.css')}}">
    <link rel="stylesheet" href="{{asset('remixicon/fonts/remixicon.css')}}">

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!---
<nav class="container navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('main.index')}}" >Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('news.index')}}">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Публикации</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Разработки</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Тестирования</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    О нас
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Деятельность</a>
                    <a class="dropdown-item" href="#">История</a>
                    <a class="dropdown-item" href="#">Структура</a>
                    <a class="dropdown-item" href="#">Руководство</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Контакты</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{route('posts.search')}}">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
--->
<!---
<section class="top-nav">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="exCollapsingNavbar2">
                <ul class="nav navbar-nav ">
                    <li class="nav-item active"><a class="nav-link" href="{{route('main.index')}}">Главная <span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('news.index')}}">Новости</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Публикации</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Разработки</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Испытания</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Контакты</a></li>
                </ul>
                <form class="ml-auto form-inline my-2 my-lg-0" action="{{route('posts.search')}}">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Поиск..."
                           aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>
            </div>
        </div>
    </nav>
</section>--->
<nav class="navbar navbar-expand-sm   navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-menu collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('main.index')}}">Главная<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('news.index')}}">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Публикации</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('engin.index')}}">Разработки</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Испытания</a>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        О нас
                    </a>
                    <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item" href="{{route('working.index')}}">Деятельность</a>
                        <a class="dropdown-item" href="{{route('history.index')}}">История</a>
                        <a class="dropdown-item" href="{{route('org.index')}}">Структура</a>
                        <a class="dropdown-item" href="#">Руководство</a>
                        <a class="dropdown-item" href="{{route('contacts.index')}}">Контакты</a>
                    </div>
                </li>
            </ul>
            <div>
                <form class="search" action="{{route('posts.search')}}">
                    <input name="search" type="search" class="searchTerm" placeholder="Поиск...">
                    <button type="submit" class="searchButton">
                        <i class="ri-search-line" style="color: gray"></i>
                    </button>
                </form>
            </div>
            <div class="social-part">
                <a href="#"><i class="sn ri-mail-line" aria-hidden="true"></i></a>
                <a href="#"><i class="sn ri-facebook-line" aria-hidden="true"></i></a>
                <a href="#"><i class="sn ri-twitter-line" aria-hidden="true"></i></a>
                <a href="#"><i class="sn ri-instagram-line" aria-hidden="true"></i></a>
                <a href="#"><i class="sn ri-youtube-line" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</nav>
@yield('head')
<div class="container">
<section class="section-01" id="about">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                @yield('content')
            </div>
            <aside class="col-lg-4 side-bar col-md-12">
                <ul class="nav nav-tabs" role="tablist" id="myTab">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home"
                                            role="tab">Новости</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" role="tab">Статьи</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages"
                                            role="tab">Разработки</a>
                    </li>
                </ul>                          <!-- Tab panes -->
                <div class="tab-content sidebar-tabing" id="nav-tabContent">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{ $lastnews[0]->news_img ?? asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a
                                            href="{{ route('news.show', ['id' => $lastnews[0]->news_id]) }}">{{$lastnews[0]->news_title}}</a>
                                    </h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{ $lastnews[1]->news_img ?? asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a
                                            href="{{ route('news.show', ['id' => $lastnews[1]->news_id]) }}">{{$lastnews[1]->news_title}}</a>
                                    </h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{$lastnews[2]->news_img ?? asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a
                                            href="{{ route('news.show', ['id' => $lastnews[2]->news_id]) }}">{{$lastnews[2]->news_title}}</a>
                                    </h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">Key Republicans sign letter warning against
                                            candidate</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a>
                                    </h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">Obamacare Appears to Be Making People
                                            Healthier</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">Key Republicans sign letter warning against
                                            candidate</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">‘S.N.L.’ to Lose Two Longtime Cast Members</a>
                                    </h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                        <div class="media"><a href="#"> <img class="d-flex mr-3"
                                                             src="/{{asset('img/default-img.jpg')}}"
                                                             alt="Generic placeholder image"></a>
                            <div class="media-body">
                                <div class="news-title">
                                    <h2 class="title-small"><a href="#">Key Republicans sign letter warning against
                                            candidate</a></h2>
                                </div>
                                <div class="news-auther"><span class="time">1h ago</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-sec">
                    <h4 class="heading-small">Видиопрезентация</h4>
                    <div class="video-block">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
</section>

<!---
    --->

    <div class="row">
        <footer class="container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 footer-about wow fadeInUp animated"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <h3>О центре</h3>
                            <p>
                                Научно-производственный центр Агроинженерии. Костанайский филиал.
                            </p>
                            <p>© 2012-2020 Celinnii.kz</p>
                            <div class="row">
                                <div class="col footer-social">
                                    <a href="#"><i class="ri-facebook-fill" style="font-size:30px"></i></a>
                                    <a href="#"><i class="ri-twitter-fill" style="font-size:30px"></i></a>
                                    <a href="#"><i class="ri-google-fill" style="font-size:30px"></i></a>
                                    <a href="#"><i class="ri-instagram-fill" style="font-size:30px"></i></a>
                                    <a href="#"><i class="ri-pinterest-fill" style="font-size:30px"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown animated"
                             style="visibility: visible; animation-name: fadeInDown;">
                            <h3>Контакты</h3>
                            <p><i class="fas fa-map-marker-alt"></i> Адрес: Абая 32</p>
                            <p><i class="fas fa-phone"></i> Телефон: (777) 777 77 77</p>
                            <p><i class="fas fa-envelope"></i> Email: <a
                                    href="mailto:hello@domain.com">hello@domain.com</a>
                            </p>
                            <p><i class="fab fa-skype"></i> Skype: you_online</p>
                        </div>
                        <div class="col-md-4 footer-links wow fadeInUp animated"
                             style="visibility: visible; animation-name: fadeInUp;">
                            <div class="row">
                                <div class="col">
                                    <h3>Links</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><a class="scroll-link" href="#top-content">Главная</a></p>
                                    <p><a href="#">Испытания</a></p>
                                    <p><a href="#">Публикации</a></p>
                                    <p><a href="#">Разработки</a></p>
                                </div>
                                <div class="col-md-6">
                                    <p><a href="#">Структура</a></p>
                                    <p><a href="#">Руководство</a></p>
                                    <p><a href="#">О нас</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">

                </div>
            </div>
        </footer>
    </div>
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

