@extends('adminpanel', ['title'=>"Редактирование статьи $post->post_title"])

@section('create')
    <form action="{{route('articles.update', ['id'=>$post->post_id,app()->getLocale()])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Редактировать запись в 'Статьи'</h3>
        <div class="form-group">
            <p>Заголовок</p>
            <input name="title" type="text" class="form-control" value="{{ old('title') ?? $post->post_title ?? '' }}">
        </div>
        <div class="form-group">
            <p>Текст статьи</p>
            <textarea name="description" rows="10" class="form-control" id="textbox">
                {{ old('description') ?? $post->post_description ?? '' }}
            </textarea>
        </div>
        <div class="form-group">
            <p>Изображение - заголовок</p>
            <input name="img" type="file">
        </div>
        <input type="submit" value="Редактировать статью" class="btn btn-outline-info">
    </form>
    <script type="text/javascript">
        var editor = textboxio.replace('#textbox');
    </script>
@endsection
