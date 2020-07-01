@extends('adminpanel')

@section('create')
    <form action="{{route('news.update', ['id'=>$new->news_id,app()->getLocale()])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Редактировать запись в 'Новости'</h3>
        <div class="form-group">
            <p>Заголовок</p>
            <input name="title" type="text" class="form-control" value="{{$new->news_title}}" required>
        </div>
        <div class="form-group">
            <p>Текст новости</p>
            <textarea name="description" rows="10" class="form-control" id="textbox" required>
                {{$new->news_description}}
            </textarea>
        </div>
        <div class="form-group">
            <p>Изображение - заголовок</p>
            <input name="img" type="file">
        </div>
        <input type="submit" value="Редактировать новость" class="btn btn-outline-info">
    </form>
    <script type="text/javascript">
        var editor = textboxio.replace('#textbox');
    </script>
@endsection
