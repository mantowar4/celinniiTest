@extends('layouts.layout', ['title'=>'Новости'])

@section('content')
    <div class="container">
        @if(isset($_GET['search']))
            @if(count($news)>0)
                <h2>Результаты поиска по запросу "<?=$_GET['search']?>" </h2>
                <p class="lead">Всего найдено {{count($news)+count($engins)+count($posts)}} записей</p>
            @else
                <h2>По запросу "<?=$_GET['search']?>" ничего не найдено.</h2>
                <a href="{{route('news.index',app()->getLocale())}}" class="btn btn-outline-success my-2 my-sm-0">Отобразить все
                    новости.</a>
                <a href="{{route('news.index',app()->getLocale())}}" class="btn btn-outline-success my-2 my-sm-0">Отобразить все
                    публикации.</a>
                <a href="{{route('news.index',app()->getLocale())}}" class="btn btn-outline-success my-2 my-sm-0">Отобразить все
                    разработки.</a>
            @endif
            <div class="card-group">
                @foreach($news as $new)
                    <div class="card-deck col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="{{ $new->news_img ?? asset('img/default-img.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$new->news_short_title}}</h5>
                                <a href="{{ route('news.show', ['id' => $new->news_id]) }}"
                                   class="btn btn-info my-2 my-sm-0">Подробнее</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Created {{$new->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if(!empty($engins))
                    @foreach($engins as $engin)
                        <div class="card-deck col-lg-6">
                            <div class="card">
                                <img class="card-img-top" src="{{ $engin->engin_img ?? asset('img/default-img.jpg')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$engin->engin_short_title}}</h5>
                                    <a href="{{ route('news.show', ['id' => $engin->engin_id,app()->getLocale()]) }}"
                                       class="btn btn-info my-2 my-sm-0">Подробнее</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Created {{$engin->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                @if(!empty($posts))
                    @foreach($posts as $post)
                        <div class="card-deck col-lg-6">
                            <div class="card">
                                <img class="card-img-top" src="{{ $post->post_img ?? asset('img/default-img.jpg')}}"
                                     alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$post->post_short_title}}</h5>
                                    <a href="{{ route('news.show', ['id' => $post->post_id,app()->getLocale()]) }}"
                                       class="btn btn-info my-2 my-sm-0">Подробнее</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Created {{$post->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @else
            <div class="card-group">
                @foreach($news as $new)
                    <div class="card-deck col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="{{ $new->news_img ?? asset('img/default-img.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$new->news_short_title}}</h5>
                                <a href="{{ route('news.show', ['id' => $new->news_id,app()->getLocale()]) }}"
                                   class="btn btn-info my-2 my-sm-0">Подробнее</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Created {{$new->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        @if(!isset($_GET['search']))
            <div class="pagination container">{{ $news->links() }}</div>
        @endif
    </div>
@endsection
