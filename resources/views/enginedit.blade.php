@extends('adminpanel', ['title'=>"Редактирование разработки $engin->engine_title"])

@section('create')
    <form action="{{route('engin.update', ['id'=>$engin->engin_id,app()->getLocale()])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Редактировать запись в 'Разработки'</h3>
        <div class="form-group">
            <p>Заголовок</p>
            <input name="title" type="text" class="form-control" value="{{$engin->engin_title}}" required>
        </div>
        <div class="form-group">
            <p>Текст разработки</p>
            <textarea name="description" rows="10" class="form-control" id="textbox" required>
                {{$engin->engin_description}}
            </textarea>
        </div>
        <div class="form-group">
            <p>Ссылка на видео</p>
            <input name="link" type="text" class="form-control" value="{{$engin->engin_video_link}}" required>
        </div>
        <div class="form-group">
            <p>Изображение - заголовок</p>
            <input name="img" type="file">
        </div>
        <input type="submit" value="Редактировать разработку" class="btn btn-outline-info">
    </form>
    <script type="text/javascript">
        var editor = textboxio.replace('#textbox');
    </script>
@endsection
