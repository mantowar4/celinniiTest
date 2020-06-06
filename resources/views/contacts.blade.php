@extends('layouts.layout')

@section('content')

    <main role="main">
        <h3 class="heading-large" style="text-align: center;">Свяжитесь с нами</h3>
        <div class="row">
            <div class="col-sm-7">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2655a536cb73c58dbb236906eaecc6ac427fedb527d891245d53392f9d955828&amp;width=400&amp;height=300&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
            <div class="col-sm-5" id="contact2">
                <h3>Наши контакты</h3>
                <hr align="left" width="50%">
                <h4 class="pt-2">Адрес:</h4>
                <i class="ri-map-pin-2-line" style="color:#000"></i> 110011, Республика Казахстан, г.Костанай, пр.Абая,
                34<br>
                <h4 class="pt-2">Телефоны:</h4>
                <h5 class="pt-2">Директор:</h5>
                <i class="ri-phone-line" style="color:#000"></i> <a href="tel:+"> 8 (7142) 55-81-46 </a><br>
            </div>
        </div>
    </main>

@endsection
