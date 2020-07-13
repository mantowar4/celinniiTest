@extends('layouts.layout', ['title'=>'Структура'])

@section('content')

    <main role="main">
        <h3 class="heading-large" style="text-align: center;">Организационная структура <br> Костанайского филиала ТОО
            «НПЦ
            агроинженерии»</h3>
        <zk>
            <div xmlns="xhtml" class="centered">
                <ul class="orgchart">
                    <li class="root">
                        <div class="nodecontent">Директор</div>
                        <ul>
                            <li class="vertical">
                                <div class="nodecontent">Заместитель директора по науке</div>
                                <ul>
                                <!--
                                @foreach($organization as $org)
                                        <li class="leaf">
                                            <div class="nodecontent"><a href="{{route('org.show', ['id' => $org->org_id])}}">{{$org->org_title}}</a></div>
                                        </li>
                                @endforeach
                                    -->
                                    <li class="leaf">
                                        <div class="nodecontent node-link"><a href="{{route('org.show',['id'=>1,app()->getLocale()])}}">Лаборатория механизированных технологий</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent node-link"><a href="{{route('org.show',['id'=>2,app()->getLocale()])}}">Лаборатория разработки комбинированных орудий</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent node-link"><a href="{{route('org.show',['id'=>3,app()->getLocale()])}}">Лаборатория механизации послеуборочной обработки зерна</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent node-link"><a href="{{route('org.show',['id'=>4,app()->getLocale()])}}">Лаборатория использования машинно-тракторного парка</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent node-link"><a href="{{route('org.show',['id'=>5,app()->getLocale()])}}">Лаборатория механизации возделывания и уборки кормовых культур</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent node-link"><a href="{{route('org.show',['id'=>6,app()->getLocale()])}}">Конструкторное бюро</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent node-link"><a href="{{route('org.show',['id'=>7,app()->getLocale()])}}">Лаборатория механизации обработки почвы</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent node-link"><a href="{{route('org.show',['id'=>8,app()->getLocale()])}}">Центр испытания и сертификации сельскохозяйственной техники</a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="leaf">
                                <div class="nodecontent">Ученый секретарь</div>
                            </li>
                            <li class="leaf">
                                <div class="nodecontent">Административно - хозяйственный отдел</div>
                            </li>
                            <li class="vertical">
                                <div class="nodecontent">Главный инженер</div>
                                <ul>
                                    <li class="leaf">
                                        <div class="nodecontent">Отдел экспериментального производства</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Отдел автотракторного обеспечения</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Сектор внедрения научных разработок</div>
                                    </li>
                                </ul>
                            </li>
                            <li class="leaf">
                                <div class="nodecontent">Отдел финансового планирования бухгалтерского учета</div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </zk>
    </main>

@endsection
