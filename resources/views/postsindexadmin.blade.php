@extends('adminpanel', ['title'=>'Разработки'])

@section('create')
    <div class="container">

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
                            <form action="{{route('articles.delete',['id'=>$post->post_id, app()->getLocale()])}}"
                                  method="post" class="del-btn">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Удалить" class="btn btn-danger my-2 my-sm-0">
                            </form>
                        </div>
                        <div class="card-footer">
                            <div>
                                <small
                                    class="text-muted">Создано {{\Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</small>
                            </div>
                            <div>
                                <small
                                    class="text-muted">Последние
                                    изменения {{\Carbon\Carbon::parse($post->updated_at)->format('d.m.Y')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="links">{{ $posts->links() }}</div>
    </div>
@endsection
