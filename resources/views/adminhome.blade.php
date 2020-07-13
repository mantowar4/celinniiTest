@extends('adminpanel',['title'=>'Панель администратора'])

@section('create')
    <!---
    <div class="card-group">
        @foreach($news as $new)
            <div class="card-deck col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $new->news_img ?? asset('img/default-img.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$new->news_short_title}}</h5>
                        <a href="{{ route('news.show', ['id' => $new->news_id, app()->getLocale()]) }}"
                           class="btn btn-info my-2 my-sm-0">Подробнее</a>
                        <a href="{{ route('news.edit', ['id' => $new->news_id, app()->getLocale()]) }}"
                           class="btn btn-success my-2 my-sm-0">Редактировать</a>
                        <form action="{{route('news.delete',['id'=>$new->news_id])}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить" class="btn btn-danger my-2 my-sm-0">
                        </form>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Created {{$new->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach($posts as $post)
            <div class="card-deck col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $post->post_img ?? asset('img/default-img.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->post_short_title}}</h5>
                        <a href="{{ route('articles.show', ['id' => $post->post_id, app()->getLocale()]) }}"
                           class="btn btn-info my-2 my-sm-0">Подробнее</a>
                        <a href="{{ route('articles.edit', ['id' => $post->post_id, app()->getLocale()]) }}"
                           class="btn btn-success my-2 my-sm-0">Редактировать</a>
                        <form action="{{route('articles.delete',['id'=>$post->post_id])}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить" class="btn btn-danger my-2 my-sm-0">
                        </form>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Created {{$post->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach($engins as $engin)
            <div class="card-deck col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $engin->engin_img ?? asset('img/default-img.jpg')}}"
                         alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$engin->engin_short_title}}</h5>
                        <a href="{{ route('engin.show', ['id' => $engin->engin_id, app()->getLocale()]) }}"
                           class="btn btn-info my-2 my-sm-0">Подробнее</a>
                        <a href="{{ route('engin.edit', ['id' => $engin->engin_id, app()->getLocale()]) }}"
                           class="btn btn-success my-2 my-sm-0">Редактировать</a>
                        <form action="{{route('engin.delete',['id'=>$engin->engin_id, app()->getLocale()])}}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить" class="btn btn-danger my-2 my-sm-0">
                        </form>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Created {{$engin->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
--->
    <!---
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#news">Новости</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#posts">Статьи</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#engins">Разработки</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="news">
            <div class="card-group">
                @foreach($news as $new)
        <div class="card-deck col-lg-4">
            <div class="card">
                <img class="card-img-top" src="{{ $new->news_img ?? asset('img/default-img.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$new->news_short_title}}</h5>
                                <a href="{{ route('news.show', ['id' => $new->news_id, app()->getLocale()]) }}"
                                   class="btn btn-info my-2 my-sm-0">Подробнее</a>
                                <a href="{{ route('news.edit', ['id' => $new->news_id, app()->getLocale()]) }}"
                                   class="btn btn-success my-2 my-sm-0">Редактировать</a>
                                <form action="{{route('news.delete',['id'=>$new->news_id])}}"
                                      method="post">
                                    @csrf
        @method('DELETE')
            <input type="submit" value="Удалить" class="btn btn-danger my-2 my-sm-0">
        </form>
    </div>
    <div class="card-footer">
        <small class="text-muted">Created {{$new->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane fade" id="posts">
        <div class="card-group">
@foreach($posts as $post)
        <div class="card-deck col-lg-4">
            <div class="card">
                <img class="card-img-top" src="{{ $post->post_img ?? asset('img/default-img.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->post_short_title}}</h5>
                                <a href="{{ route('articles.show', ['id' => $post->post_id, app()->getLocale()]) }}"
                                   class="btn btn-info my-2 my-sm-0">Подробнее</a>
                                <a href="{{ route('articles.edit', ['id' => $post->post_id, app()->getLocale()]) }}"
                                   class="btn btn-success my-2 my-sm-0">Редактировать</a>
                                <form action="{{route('articles.delete',['id'=>$post->post_id])}}"
                                      method="post">
                                    @csrf
        @method('DELETE')
            <input type="submit" value="Удалить" class="btn btn-danger my-2 my-sm-0">
        </form>
    </div>
    <div class="card-footer">
        <small class="text-muted">Created {{$post->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane fade" id="engins">
        <div class="card-group">
@foreach($engins as $engin)
        <div class="card-deck col-lg-4">
            <div class="card">
                <img class="card-img-top" src="{{ $engin->engin_img ?? asset('img/default-img.jpg')}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$engin->engin_short_title}}</h5>
                                <a href="{{ route('engin.show', ['id' => $engin->engin_id, app()->getLocale()]) }}"
                                   class="btn btn-info my-2 my-sm-0">Подробнее</a>
                                <a href="{{ route('engin.edit', ['id' => $engin->engin_id, app()->getLocale()]) }}"
                                   class="btn btn-success my-2 my-sm-0">Редактировать</a>
                                <form action="{{route('engin.delete',['id'=>$engin->engin_id, app()->getLocale()])}}"
                                      method="post">
                                    @csrf
        @method('DELETE')
            <input type="submit" value="Удалить" class="btn btn-danger my-2 my-sm-0">
        </form>
    </div>
    <div class="card-footer">
        <small class="text-muted">Created {{$engin->created_at}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>
--->

@endsection
