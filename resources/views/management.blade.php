@extends('layouts.layout', ['title'=>'Руководство'])

@section('content')

    <main role="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-8 col-md-6">
                                    <h4 class="mb-0 text-truncated">Астафьев Владимир Леонидович</h4>
                                    <p class="lead">Директор Костанайского филиала «НПЦ агроинженерии»</p>
                                    <div class="Checklist">
                                        <ul>
                                            <li><i class="ri-check-double-line"></i>кандидат технических наук, (1989)
                                            </li>
                                            <li><i class="ri-check-double-line"></i>доктор технических наук, (2003)
                                            </li>
                                            <li><i class="ri-check-double-line"></i>лстарший научный сотрудник, (1992)
                                            </li>
                                            <li><i class="ri-check-double-line"></i>профессор, (2007)
                                            </li>
                                            <li><i class="ri-check-double-line"></i>член-корреспондент (1998) Казахской АСХН
                                            </li>
                                            <li><i class="ri-check-double-line"></i>академик (2009) Академии сельскохозяйственных наук РК.
                                            </li>
                                            <li><i class="ri-phone-line"></i><a href="tel:+">+7 (7142) 55-81-46</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-6 text-center">
                                    <img src="{{asset('img/shef.jpg')}}" alt="" class="mx-auto rounded-sm img-fluid">
                                </div>
                                <!--/col-->
                            </div>
                            <!--/row-->
                        </div>
                        <!--/card-block-->
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-8 col-md-6">
                                    <h4 class="mb-0 text-truncated">Бинюков Юрий Викторович</h4>
                                    <p class="lead">Заместитель Директора Костанайского филиала «НПЦ агроинженерии»</p>
                                    <div class="Checklist">
                                        <ul>
                                            <li><i class="ri-check-double-line"></i>кандидат технических наук, (2010)
                                            </li>
                                            <li><i class="ri-phone-line"></i><a href="tel:+">+7 (7142) 55-81-46</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-6 text-center">
                                    <img src="{{asset('img/zam.jpg')}}" alt="" class="mx-auto rounded-sm img-fluid">
                                </div>
                                <!--/col-->
                            </div>
                            <!--/row-->
                        </div>
                        <!--/card-block-->
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-8 col-md-6">
                                    <h4 class="mb-0 text-truncated">Мусин Владимир Васильевич</h4>
                                    <p class="lead">Главный инженер Костанайского филиала «НПЦ агроинженерии»</p>
                                    <div class="Checklist">
                                        <ul>
                                            <li><i class="ri-phone-line"></i><a href="tel:+">+7 (7142) 55-81-46</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 col-md-6 text-center">
                                    <img src="{{asset('img/in.jpg')}}" alt="" class="mx-auto rounded-sm img-fluid">
                                </div>
                                <!--/col-->
                            </div>
                            <!--/row-->
                        </div>
                        <!--/card-block-->
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
