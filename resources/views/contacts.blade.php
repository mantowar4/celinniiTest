@extends('layouts.layout', ['title'=>'Контакты'])

@section('content')

    <main role="main">
        <h3 class="heading-large" style="text-align: center;">Свяжитесь с нами</h3>
        <div class="row">
            <div class="col-sm-5" id="contact2">
                <h3>Наши контакты</h3>
                <hr align="left" width="50%">
                <h4 class="pt-2">Адрес:</h4>
                <i class="ri-map-pin-2-line" style="color:#000"></i> 110011, Республика Казахстан, г.Костанай, пр.Абая,
                34<br>
                <h4 class="pt-2">Телефоны:</h4>
                <h5 class="pt-2">Директор:</h5>
                <i class="ri-phone-line" style="color:#000"></i> <a href="tel:+"> 8 (7142) 55-81-46 </a><br>
                <h5 class="pt-2">Учёный секретарь:</h5>
                <i class="ri-phone-line" style="color:#000"></i> <a href="tel:+"> 8 (7142) 55-81-50 </a><br>
                <h5 class="pt-2">Бухгалтерия:</h5>
                <i class="ri-phone-line" style="color:#000"></i> <a href="tel:+"> 8 (7142) 55-81-45 </a><br>
                <h5 class="pt-2">Гл. экономист:</h5>
                <i class="ri-phone-line" style="color:#000"></i> <a href="tel:+"> 8 (7142) 55-81-50 </a><br>
                <h5 class="pt-2">Гл. инженер:</h5>
                <i class="ri-phone-line" style="color:#000"></i> <a href="tel:+"> 8 (7142) 55-81-45 </a><br>
                <h5 class="pt-2">Вахта:</h5>
                <i class="ri-phone-line" style="color:#000"></i> <a href="tel:+"> 8 (7142) 55-81-51 </a><br>
            </div>
            <div class="col-sm-7"><h4 class="pt-2">Почта:</h4>
                <i class="sn ri-mail-line" style="color:#000"></i> <a href="mailto:celinnii@mail.ru">
                    celinnii@mail.ru </a><br>
                <i class="sn ri-mail-line" style="color:#000"></i> <a href="mailto:celinnii@rambler.ru">
                    celinnii@rambler.ru </a><br>
                <h4 class="pt-2">Контакты информационно-консультационного центра:</h4>
                <i class="sn ri-mail-line" style="color:#000"></i> <a href="mailto:celinagro@mail.ru">
                    celinagro@mail.ru </a><br>
                <i class="ri-phone-line" style="color:#000"></i> <a href="tel:+"> 8 (7142) 55-81-49 </a><br>
                <i class="ri-user-line" style="color:#000"></i> Алексенцев Константин Иванович <br>
                <div style="margin-top: 1rem; margin-bottom: 1rem;">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2655a536cb73c58dbb236906eaecc6ac427fedb527d891245d53392f9d955828&amp;width=400&amp;height=300&amp;lang=ru_RU&amp;scroll=false"></script>
                </div>
            </div>
        </div>
    </main>

@endsection
