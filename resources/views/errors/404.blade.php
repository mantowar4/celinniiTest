@extends('layouts.layout', ['title'=>'Страница не найдена'])

@section('content')
    <div class="container text-center" >
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>404</h1>
                </div>
                <h2>Упс! Страница не найдена</h2>
                <p>Извините, данная страница не существует, переименована или удалена.</p>
            </div>
        </div>
    </div>
@endsection
