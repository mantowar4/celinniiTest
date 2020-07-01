@extends('adminpanel')

@section('create')
    <form action="{{route('engin.store',app()->getLocale())}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Добавить запись в 'разработки'</h3>
        <div class="form-group">
            <p>Заголовок</p>
            <input name="title" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <p>Текст разработки</p>
            <textarea name="description" rows="10" class="form-control" id="textbox" required>
            </textarea>
        </div>
        <div class="form-group">
            <p>Ссылка на видео</p>
            <input name="link" type="text" class="form-control">
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
