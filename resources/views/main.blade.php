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
                <img src="{{asset('img/Коллаж2.jpg')}}" class="img-fluid rounded" alt="НПЦ Агроинженерии фото">
            </div>
            <div class="col-md-7 order-2 order-md-1 Checklist align-self-center">
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
            <p class="text-justify">
                {{__('mainpage.text1')}}
            </p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="{{asset('img/Холл-первый-этаж2.jpg')}}" class="img-fluid" alt="НПЦ Агроинженерии Холл">
            </div>
            <div class="col-md-7">
                <p class="text-justify">
                    {{__('mainpage.text2')}}
                </p>
            </div>
        </div>
        <div>
            <p class="text-justify">
                {{__('mainpage.text3')}}
            </p>
        </div>
        <div>
            <p class="text-justify">
                {{__('mainpage.text4')}}
            </p>
        </div>
        <!-- /END THE FEATURETTES -->
    </main>

@endsection
