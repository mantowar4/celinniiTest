@extends('layouts.layout')

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
                            <?php
                            echo nl2br($post->post_description);
                            ?></p>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Created {{$post->created_at}}</small>
                        <a href="{{route('news.index')}}" class="btn btn-outline-success my-2 my-sm-0">Отобразить все новости.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
