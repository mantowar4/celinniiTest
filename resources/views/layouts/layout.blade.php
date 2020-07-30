<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <script async src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script async src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/orgChart.css')}}">
    <link rel="stylesheet" href="{{asset('remixicon/fonts/remixicon.css')}}">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-menu collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('main.index',app()->getLocale()) }}">{{__('layouttext.mainlink')}}<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{route('news.index', app()->getLocale())}}">{{__('layouttext.newslink')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{route('articles.index', app()->getLocale())}}">{{__('layouttext.articleslink')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{route('engin.index', app()->getLocale())}}">{{__('layouttext.enginslink')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="{{route('org.show',['id'=>8, app()->getLocale()])}}">{{__('layouttext.testinglink')}}</a>
                </li>
                <li class="nav-item dropdown dmenu">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        {{__('layouttext.aboutlink')}}
                    </a>
                    <div class="dropdown-menu sm-menu">
                        <a class="dropdown-item"
                           href="{{route('working.index', app()->getLocale())}}">{{__('layouttext.workinglink')}}</a>
                        <a class="dropdown-item"
                           href="{{route('history.index', app()->getLocale())}}">{{__('layouttext.historylink')}}</a>
                        <a class="dropdown-item"
                           href="{{route('org.index', app()->getLocale())}}">{{__('layouttext.struclink')}}</a>
                        <a class="dropdown-item"
                           href="{{route('management.index', app()->getLocale())}}">{{__('layouttext.managerslink')}}</a>
                        <a class="dropdown-item"
                           href="{{route('contacts.index', app()->getLocale())}}">{{__('layouttext.contactlink')}}</a>
                    </div>
                </li>
            </ul>
            <div>
                <form class="search" action="{{route('posts.search', app()->getLocale())}}">
                    <input name="search" type="search" class="searchTerm" placeholder="{{__('layouttext.search')}}"
                           required>
                    <button type="submit" class="searchButton">
                        <i class="ri-search-line" style="color: gray"></i>
                    </button>
                </form>
            </div>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="mailto:celinnii@mail.ru"><i class="sn ri-mail-line"
                                                                                               aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i
                            class="sn ri-instagram-line"
                            aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i
                            class="sn ri-youtube-line" aria-hidden="true"></i></a>
                </li>
                @foreach (config('app.available_locales') as $locale)
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('lang.change',$locale) }}"
                           @if (app()->getLocale() == $locale) style="font-weight: bold; text-decoration: underline" @endif>{{ strtoupper($locale) }}</a>
                    </li>
                @endforeach
            </ul>
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
                    <li class="nav-item"><a class="nav-link active side-nav-link" data-toggle="tab" href="#home"
                                            role="tab">{{__('layouttext.newslink')}}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link side-nav-link" data-toggle="tab" href="#profile"
                                            role="tab">{{__('layouttext.articleslink')}}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link side-nav-link" data-toggle="tab" href="#messages"
                                            role="tab">{{__('layouttext.enginslink')}}</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content sidebar-tabing" id="nav-tabContent">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        @if(empty($lastnews[0]))

                        @else
                            <div class="media">
                                <a href="{{ route('news.show', [app()->getLocale(), 'id' => $lastnews[0]->news_id]) }}">
                                    <img
                                        class="d-flex mr-3"
                                        src="{{ $lastnews[0]->news_img ?? asset('img/default-img.jpg')}}"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('news.show', ['id' => $lastnews[0]->news_id, app()->getLocale()]) }}">{{$lastnews[0]->news_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>
                        @endif
                        @if(empty($lastnews[1]))

                        @else
                            <div class="media"><a
                                    href="{{ route('news.show', [app()->getLocale(), 'id' => $lastnews[1]->news_id]) }}">
                                    <img
                                        class="d-flex mr-3"
                                        src="{{ $lastnews[1]->news_img ?? asset('img/default-img.jpg')}}"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('news.show', [app()->getLocale(), 'id' => $lastnews[1]->news_id]) }}">{{$lastnews[1]->news_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>
                        @endif
                        @if(empty($lastnews[2]))

                        @else
                            <div class="media">
                                <a href="{{ route('news.show',[app()->getLocale(), 'id' => $lastnews[2]->news_id]) }}">
                                    <img
                                        class="d-flex mr-3"
                                        src="{{$lastnews[2]->news_img ?? asset('img/default-img.jpg')}}"
                                        alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('news.show',[app()->getLocale(), 'id' => $lastnews[2]->news_id]) }}">{{$lastnews[2]->news_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                        @if(empty($lastposts[0]))

                        @else
                            <div class="media"><a
                                    href="{{ route('articles.show', ['id' => $lastposts[0]->post_id, app()->getLocale()]) }}">
                                    <img class="d-flex mr-3"
                                         src="{{$lastposts[0]->post_img ?? asset('img/default-img.jpg')}}"
                                         alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('articles.show', ['id' => $lastposts[0]->post_id, app()->getLocale()]) }}">{{$lastposts[0]->post_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>
                        @endif
                        @if(empty($lastposts[1]))

                        @else
                            <div class="media"><a
                                    href="{{ route('articles.show', ['id' => $lastposts[1]->post_id, app()->getLocale()]) }}">
                                    <img class="d-flex mr-3"
                                         src="{{$lastposts[1]->post_img ?? asset('img/default-img.jpg')}}"
                                         alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('articles.show', ['id' => $lastposts[1]->post_id, app()->getLocale()]) }}">{{$lastposts[1]->post_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>
                        @endif
                        @if(empty($lastposts[2]))

                        @else
                            <div class="media"><a
                                    href="{{ route('articles.show', ['id' => $lastposts[2]->post_id, app()->getLocale()]) }}">
                                    <img class="d-flex mr-3"
                                         src="{{$lastposts[2]->post_img ?? asset('img/default-img.jpg')}}"
                                         alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('articles.show', ['id' => $lastposts[2]->post_id, app()->getLocale()]) }}">{{$lastposts[2]->post_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                        @if(empty($lastengins[0]))

                        @else
                            <div class="media"><a
                                    href="{{ route('engin.show', ['id' => $lastengins[0]->engin_id, app()->getLocale()]) }}">
                                    <img class="d-flex mr-3"
                                         src="{{$lastengins[0]->engin_img ?? asset('img/default-img.jpg')}}"
                                         alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('engin.show', ['id' => $lastengins[0]->engin_id, app()->getLocale()]) }}">{{$lastengins[0]->engin_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>
                        @endif
                        @if(empty($lastengins[1]))

                        @else
                            <div class="media"><a
                                    href="{{ route('engin.show', ['id' => $lastengins[1]->engin_id, app()->getLocale()]) }}">
                                    <img class="d-flex mr-3"
                                         src="{{$lastengins[1]->engin_img ?? asset('img/default-img.jpg')}}"
                                         alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('engin.show', ['id' => $lastengins[1]->engin_id, app()->getLocale()]) }}">{{$lastengins[1]->engin_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>
                        @endif
                        @if(empty($lastengins[2]))

                        @else
                            <div class="media"><a
                                    href="{{ route('engin.show', ['id' => $lastengins[2]->engin_id, app()->getLocale()]) }}">
                                    <img class="d-flex mr-3"
                                         src="{{$lastengins[2]->engin_img ?? asset('img/default-img.jpg')}}"
                                         alt="Generic placeholder image"></a>
                                <div class="media-body">
                                    <div class="news-title">
                                        <h2 class="title-small"><a
                                                href="{{ route('engin.show', ['id' => $lastengins[2]->engin_id, app()->getLocale()]) }}">{{$lastengins[2]->engin_short_title}}</a>
                                        </h2>
                                    </div>
                                    <div class="news-auther"><span class="time">1h ago</span></div>
                                </div>
                            </div>

                        @endif
                    </div>
                </div>
                <!---
                <div class="video-sec">
                    <h4 class="heading-small">{{__('layouttext.videolink')}}</h4>
                    <div class="video-block">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zpOULjyy-n8?rel=0"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                --->
            </aside>
        </div>
    </section>

    <!---
        --->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row">


                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="https://www.gov.kz/memleket/entities/moa?lang=ru" target="_blank"><img
                            src="{{asset('img/gerb.png')}}" class="img-fluid"
                            alt="Министерство сельского хозяйства"></a>
                </div>
                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="http://nasec.kz/ru" target="_blank"><img src="{{asset('img/nasecLogo.png')}}"
                                                                      class="img-fluid" alt="НАО «НАНОЦ»"></a>
                </div>
                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a href="http://www.spcae.kz" target="_blank"><img src="{{asset('img/spcaeLogo.png')}}"
                                                                       class="img-fluid" alt="ТОО «НПЦ агроинженерии»"></a>
                </div>
                <!--
                                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                                </div>

                                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                                </div>

                                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                                </div>

                                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                                </div>
                -->
            </div>

        </div>
    </section>
    <section>
        <div class="row">
            <footer class="container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 footer-about wow fadeInUp animated"
                                 style="visibility: visible; animation-name: fadeInUp;">
                                <h3>{{__('layouttext.about')}}</h3>
                                <p>
                                    {{__('layouttext.aboutcentr')}}
                                </p>
                                <p>© 2012-2020 Celinnii.kz</p>
                                <div class="row">
                                    <div class="col footer-social">
                                        <a href="mailto:celinnii@mail.ru"><i class="ri-mail-line" style="font-size:30px"></i></a>
                                        <a href="#"><i class="ri-instagram-line" style="font-size:30px"></i></a>
                                        <a href="#"><i class="ri-youtube-line" style="font-size:30px"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown animated"
                                 style="visibility: visible; animation-name: fadeInDown;">
                                <h3>{{__('layouttext.contactlink')}}</h3>
                                <p><i class="sn ri-map-pin-2-line"></i> {{__('layouttext.adress')}}</p>
                                <p><i class="sn ri-phone-line"></i> <a href="tel:+">+7 (7142) 55-81-46</a></p>
                                <p><i class="sn ri-mail-line"></i> Email: <a
                                        href="mailto:celinnii@mail.ru">celinnii@mail.ru</a>
                                </p>
                            </div>
                            <div class="col-md-4 footer-links wow fadeInUp animated"
                                 style="visibility: visible; animation-name: fadeInUp;">
                                <div class="row">
                                    <div class="col">
                                        <h3>{{__('layouttext.navlink')}}</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><a class="scroll-link"
                                              href="{{route('main.index', app()->getLocale())}}">{{__('layouttext.mainlink')}}</a>
                                        </p>
                                        <p>
                                            <a href="{{route('news.index', app()->getLocale())}}">{{__('layouttext.newslink')}}</a>
                                        </p>
                                        <p>
                                            <a href="{{route('articles.index', app()->getLocale())}}">{{__('layouttext.articleslink')}}</a>
                                        </p>
                                        <p>
                                            <a href="{{route('engin.index', app()->getLocale())}}">{{__('layouttext.enginslink')}}</a>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <a href="{{route('org.index', app()->getLocale())}}">{{__('layouttext.struclink')}}</a>
                                        </p>
                                        <p>
                                            <a href="{{route('management.index', app()->getLocale())}}">{{__('layouttext.managerslink')}}</a>
                                        </p>
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
    </section>
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

