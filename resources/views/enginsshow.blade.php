@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$engin->engin_title}}</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="card-subtitle">{{$engin->engin_short_title}}</h5>
                        <img class="card-img-top" src="{{ $engin->engin_img ?? asset('img/default-img.jpg')}}" alt="Card image cap">
                        <p class="card-text text-center">
                            {!! $engin->engin_description !!}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Created {{$engin->created_at}}</small>
                        <a href="{{route('engin.index')}}" class="btn btn-outline-success my-2 my-sm-0">Отобразить все новости.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection