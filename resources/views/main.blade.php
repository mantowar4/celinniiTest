@extends('layouts.layout')

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
                <li><i class="ri-check-double-line"></i>прикладные и опытно-конструкторские работы в отраслях
                    растениеводства и животноводства
                </li>
                <li><i class="ri-check-double-line"></i>разработка и реализация методов формирования оптимальных
                    структур
                    и составов технологических
                    комплексов машин и правил эффективного их использования в зональных условиях
                </li>
                <li><i class="ri-check-double-line"></i>разработка и внедрение ресурсосберегающих технологий и
                    технических средств для
                    сельскохозяйственного производства
                </li>
                <li><i class="ri-check-double-line"></i>создание и мелкосерийное производство сельскохозяйственных
                    машин, орудий и оборудования
                </li>
                <li><i class="ri-check-double-line"></i>проведение сертификационных, приемочных и других видов испытаний
                    новой зарубежной и отечественной сельскохозяйственной техники и ее адаптация к
                    почвенно-климатическим условиям региона
                </li>
                <li><i class="ri-check-double-line"></i>разработка стандартов, нормативных документов на методы
                    испытаний сельскохозяйственной техники
                </li>
                <li><i class="ri-check-double-line"></i>повышение квалификации инженерных кадров АПК
                </li>
            </ul>
        </div>
        <h3 class="heading-large" style="text-align: center;">Научно-производственная база</h3>
        <div>
            <p style="text-align: center;">
                Структурными подразделениями института являются:
            </p>
        </div>
        <div class="row">
            <div class="col-md-5 order-1 order-md-2">
                <img src="http://celinnii.kz/images/f2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1 Checklist">
                <ul>
                    <li><i class="ri-check-double-line"></i>пять научных лабораторий
                    </li>
                    <li><i class="ri-check-double-line"></i>конструкторское бюро
                    </li>
                    <li><i class="ri-check-double-line"></i>лаборатория испытаний и сертификации техники
                    </li>
                    <li><i class="ri-check-double-line"></i>научно-техническая библиотека с патентным фондом
                    </li>
                    <li><i class="ri-check-double-line"></i>экспериментальное производство
                    </li>
                    <li><i class="ri-check-double-line"></i>автотракторный парк
                    </li>
                </ul>
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
                <img src="http://celinnii.kz/images/stt.gif" class="img-fluid" alt="">
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
