@extends('adminpanel', ['title'=>'Новая разработка'])

@section('create')
    <form action="{{route('engin.store',app()->getLocale())}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Добавить запись в 'разработки'</h3>
        <div class="form-group">
            <p>Заголовок</p>
            <input name="title" type="text" class="form-control" value="{{ old('title') ?? $engin->engin_title ?? '' }}">
        </div>
        <div class="form-group">
            <p>Текст разработки</p>
            <textarea name="description" rows="10" class="form-control" id="textbox">
                {{ old('description') ?? $engin->engin_description ?? '' }}
            </textarea>
        </div>
        <div class="form-group">
            <p>Ссылка на видео</p>
            <input name="link" type="text" class="form-control" value="{{ old('link') ?? $engin->engin_video_link ?? '' }}">
        </div>
        <div class="form-group">
            <p>Изображение - заголовок</p>
            <input name="img" type="file">
        </div>
        <input type="submit" value="Добавить в разработки" class="btn btn-outline-info">
    </form>
    <script type="text/javascript">
        var editor = textboxio.replace('#textbox');
    </script>
@endsection
