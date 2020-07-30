@extends('layouts.layout', ['title'=>"$new->news_title"])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$new->news_title}}</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-subtitle">{{$new->news_short_title}}</h5>
                        <img class="card-img-top" src="{{ $new->news_img ?? asset('img/default-img.jpg')}}" alt="Card image cap">
                        <p class="card-text text-center">
                            {!! $new->news_description !!}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Создано {{$new->created_at->format('d.m.Y')}}</small>
                        <a href="{{route('news.index',app()->getLocale())}}" class="btn btn-outline-success my-2 my-sm-0">Отобразить все новости.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
