@extends('layouts.layout', ['title'=>"$post->post_title"])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$post->post_title}}</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-subtitle">{{$post->post_short_title}}</h5>
                        <img class="card-img-top" src="{{ $post->post_img ?? asset('img/default-img.jpg')}}" alt="Card image cap">
                        <p class="card-text text-center">
                            {!! $post->post_description !!}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Создано {{$post->created_at->format('d.m.Y')}}</small>
                        <a href="{{route('news.index',app()->getLocale())}}" class="btn btn-outline-success my-2 my-sm-0">Отобразить все новости.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
