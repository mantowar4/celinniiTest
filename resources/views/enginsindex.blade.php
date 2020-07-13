@extends('layouts.layout', ['title'=>'Разработки'])

@section('content')
    <div class="container">
        @if(isset($_GET['search']))
            @if(count($news)>0)
                <h2>Результаты поиска по запросу "<?=$_GET['search']?>" </h2>
                <p class="lead">Всего найдено {{count($news)}} записей</p>
            @else
                <h2>По запросу "<?=$_GET['search']?>" ничего не найдено.</h2>
                <a href="{{route('news.index',app()->getLocale())}}" class="btn btn-outline-success my-2 my-sm-0">Отобразить все новости.</a>
            @endif
        @endif

        <div class="card-group">
            @foreach($engins as $engin)
                <div class="card-deck col-lg-6">
                    <div class="card">
                        <img class="card-img-top" src="{{ $engin->engin_img ?? asset('img/default-img.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$engin->engin_short_title}}</h5>
                            <a href="{{ route('engin.show', ['id' => $engin->engin_id,app()->getLocale()]) }}" class="btn btn-info my-2 my-sm-0">Подробнее</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Created {{$engin->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @if(!isset($_GET['search']))
    <div class="links">{{ $engins->links() }}</div>
    @endif
    </div>
@endsection
