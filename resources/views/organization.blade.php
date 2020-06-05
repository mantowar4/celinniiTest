@extends('layouts.layout')

@section('content')

    <main role="main">
        <h3 class="heading-large" style="text-align: center;">Организационная структура Костанайского филиала ТОО «НПЦ
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
                                    <li class="leaf">
                                        <div class="nodecontent">Лаборатория механизированных технологий</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Лаборатория разработки комбинированных орудий</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Лаборатория механизации послеуборочной обработки зерна</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Лаборатория использования машинно-тракторного парка</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Лаборатория механизации возделывания и уборки кормовых культур</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Лаборатория конструирования полевых машин</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Лаборатория конструирования стацмонарных машин и оборудования</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Лаборатория механизации обработки почвы</div>
                                    </li>
                                    <li class="leaf">
                                        <div class="nodecontent">Центр испытания и сертификации сельскохозяйственной техники</div>
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
