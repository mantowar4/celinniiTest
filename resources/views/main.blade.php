@extends('layouts.layout', ['title'=>'НПЦ Агроинженерии'])

@section('head')
    <section id="hero">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="col-md-12 ftco-animate fadeInUp ftco-animated" style="margin-top: 50px; margin-bottom: 50px;">
                <h2 class="subheading">Костанайский филиал</h2>
                <h1>ТОО Научно производственный центр агроинженерии</h1>
                <h2 class="subheading">Министерство сельского хозяйства Республики Казахстан</h2>
                <h2 class="subheading">НАО "Национальный аграрный научно-образовательный центр"</h2>
            </div>
            <a href="#about" class="test link btn-get-started animated fadeInUp">О нас
                <i class="ri-arrow-down-s-line"></i>
            </a>
            <!--<div class="row">
                <div class="col-lg-3 py-5">
                    <div class="services heading-section ftco-animate fadeInUp ftco-animated">
                        <h2 class="mb-4" style="font-size: 1.5rem">НПЦ Агроинженерии</h2>
                        <p>является филиалом ведущего научного учреждения Казахстана, решающем проблемы технического
                            обеспечения агропромышленного комплекса.</p>
                    </div>
                </div>
                <div class="col-lg-9 services-wrap px-4 pt-5">
                    <div class="row pt-md-3">
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-lawyer"></span>
                                </div>
                                <div class="text">
                                    <h3>Статьи</h3>
                                    <p>Мы постоянно публикуем научные труды на самые актуальные темы аграрного
                                        сектора.</p>
                                </div>
                                <a href="#" class="btn-custom d-flex align-items-center justify-content-center">Подробнее<i
                                        class="ri-arrow-right-s-line"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-lawyer"></span>
                                </div>
                                <div class="text">
                                    <h3>Разработки</h3>
                                    <p>Мы разрабатываем решения для аграрного сектора.</p>
                                </div>
                                <a href="#" class="btn-custom d-flex align-items-center justify-content-center">Подробнее<i
                                        class="ri-arrow-right-s-line"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-stretch">
                            <div class="services text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="flaticon-lawyer"></span>
                                </div>
                                <div class="text">
                                    <h3>Испытания</h3>
                                    <p>Мы единственные кто проводит акредетацию машин в костанайской области.</p>
                                </div>
                                <a href="#" class="btn-custom d-flex align-items-center justify-content-center">Подробнее<i
                                        class="ri-arrow-right-s-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </section>
@endsection

@section('content')

    <main role="main">
        <h3 class="heading-large" style="text-align: center;">Направление работы</h3>
        <div class="Checklist">
            <ul>
                <li><i class="ri-check-double-line"></i>{{__('mainpage.wbranch1')}}
                </li>
                <li><i class="ri-check-double-line"></i>{{__('mainpage.wbranch2')}}
                </li>
                <li><i class="ri-check-double-line"></i>{{__('mainpage.wbranch3')}}
                </li>
                <li><i class="ri-check-double-line"></i>{{__('mainpage.wbranch4')}}
                </li>
                <li><i class="ri-check-double-line"></i>{{__('mainpage.wbranch5')}}
                </li>
                <li><i class="ri-check-double-line"></i>{{__('mainpage.wbranch6')}}
                </li>
                <li><i class="ri-check-double-line"></i>{{__('mainpage.wbranch7')}}
                </li>
            </ul>
        </div>
        <h3 class="heading-large" style="text-align: center;">{{__('mainpage.scincebase')}}</h3>
        <div>
            <p style="text-align: center;">
                {{__('mainpage.struct')}}
            </p>
        </div>
        <div class="row">
            <div class="col-md-5 order-1 order-md-2">
                <img src="http://celinnii.kz/images/f2.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1 Checklist">
                <ul>
                    <li><i class="ri-check-double-line"></i>{{__('mainpage.struct1')}}
                    </li>
                    <li><i class="ri-check-double-line"></i>{{__('mainpage.struct2')}}
                    </li>
                    <li><i class="ri-check-double-line"></i>{{__('mainpage.struct3')}}
                    </li>
                    <li><i class="ri-check-double-line"></i>{{__('mainpage.struct4')}}
                    </li>
                    <li><i class="ri-check-double-line"></i>{{__('mainpage.struct5')}}
                    </li>
                    <li><i class="ri-check-double-line"></i>{{__('mainpage.struct6')}}
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <p style="text-align: center;">
                {{__('mainpage.text1')}}
            </p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="http://celinnii.kz/images/stt.gif" class="img-fluid" alt="">
            </div>
            <div class="col-md-7">
                <p class="font-italic">
                    {{__('mainpage.text2')}}
                </p>
            </div>
        </div>

        <!-- /END THE FEATURETTES -->
    </main>

@endsection
