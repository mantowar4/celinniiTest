@extends('layouts.layout')

@section('head')
    <section id="hero">
        <div class="hero-container aos-init aos-animate" data-aos="fade-up" >
            <h1>Welcome to Squad</h1>
            <h2>We are team of talanted designers making websites with Bootstrap</h2>
            <a href="#about" class="test btn-get-started"><i class="bx bx-chevrons-down"></i></a>
        </div>
    </section>
@endsection

@section('content')

    <main role="main">
        <h3 class="heading-large" style="text-align: center;">Направление работы</h3>
        <div class="Checklist">
            <ul>
                <li><i class="ri-check-double-line"></i>прикладные и опытно-конструкторские работы в отраслях
                    растениеводства и животноводства</li>
                <li><i class="ri-check-double-line"></i>разработка и реализация методов формирования оптимальных структур
                    и составов технологических
                    комплексов машин и правил эффективного их использования в зональных условиях
                </li>
                <li><i class="ri-check-double-line"></i>разработка и внедрение ресурсосберегающих технологий и
                    технических средств для
                    сельскохозяйственного производства
                </li>
            </ul>
        </div>
        <h3 class="heading-large" style="text-align: center;">Научно-производственная база</h3>

        <div class="row">
            <div class="col-md-5 order-1 order-md-2">
                <img src="{{asset('img/default-img.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <p style="text-align: center;">
                    Структурными подразделениями института являются шесть научных лабораторий, конструкторское
                    бюро, лаборатория испытаний и сертификации техники, единственная в Костанайской области
                    научно-техническая библиотека с патентным фондом, экспериментальное производство и
                    автотракторный парк.
                </p>
            </div>
        </div>
        <div>
            <p style="text-align: center;">
                В составе имеются необходимые структуры для организационного
                обеспечения научных исследований полного цикла – от проведения литературного и патентного
                поиска до внедрения в производство разработанных машин, орудий и оборудования. Занимаемая
                институтом площадь составляет 6,8 га, общая площадь зданий 22 тыс. м2.
            </p>
        </div>
        <div class="row">
            <div class="col-md-5">
                <img src="{{asset('img/default-img.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7">
                <p class="font-italic">
                    Количество работающих в институте составляет 100 человек, в том числе 20 научных
                    сотрудников, из них два доктора технических наук, шесть кандидатов технических наук, один
                    доктор PhD и десять магистров сельскохозяйственных наук. За годы работы института
                    разработаны свыше ста наименований машин и оборудования. На научные разработки получено в
                    общей сложности около 400 авторских свидетельств и патентов.
                </p>
            </div>
        </div>

        <!-- /END THE FEATURETTES -->
    </main>

@endsection
