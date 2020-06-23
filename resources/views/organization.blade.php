@extends('layouts.layout')

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
                                        <div class="nodecontent"><a href="{{route('org.show',['id'=>1])}}">Лаборатория механизированных технологий</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent"><a href="{{route('org.show',['id'=>2])}}">Лаборатория разработки комбинированных орудий</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent"><a href="{{route('org.show',['id'=>3])}}">Лаборатория механизации послеуборочной обработки зерна</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent"><a href="{{route('org.show',['id'=>4])}}">Лаборатория использования машинно-тракторного парка</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent"><a href="{{route('org.show',['id'=>5])}}">Лаборатория механизации возделывания и уборки кормовых культур</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent"><a href="{{route('org.show',['id'=>6])}}">Конструкторное бюро</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent"><a href="{{route('org.show',['id'=>7])}}">Лаборатория механизации обработки почвы</a></div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent"><a href="{{route('org.show',['id'=>8])}}">Центр испытания и сертификации сельскохозяйственной техники</a></div>
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
