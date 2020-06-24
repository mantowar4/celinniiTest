@extends('layouts.layout')

@section('content')

    <main role="main">
        @if($id==1)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-md-6">
                                <h4 class="mb-0 text-truncated">Бобков Сергей Иванович</h4>
                                <p class="lead">Заведующий, кандидат технических наук</p>
                                <div class="Checklist">
                                    <h6 class="mb-0 text-truncated">Направление исследований:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Разработка системы технологий и машин
                                            для механизации растениеводства Северного Казахстана
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Обоснование типажа тракторов,
                                            оптимизация структуры и состава машинно-тракторного парка, разработка
                                            типовых норм выработки и расхода топлива на механизацию полевых работ в
                                            растениеводстве Северного Казахстана
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Разработка рекомендаций для
                                            сельхозпредприятий по рациональному использованию техники.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 text-center">
                                <img src="{{asset('img/bob.jpg')}}" alt="Бобков Сергей Иванович"
                                     class="mx-auto rounded-sm img-fluid">
                            </div>
                            <!--/col-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/card-block-->
                </div>
            </div>
        @elseif ($id==2)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-md-6">
                                <h4 class="mb-0 text-truncated">Дерепаскин Алексей Иванович</h4>
                                <p class="lead">Заведующий, доктор технических наук</p>
                                <div class="Checklist">
                                    <h6 class="mb-0 text-truncated">Лаборатория занимается:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Проблемами механизации технологических
                                            процессов обработки почвы
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Ведет разработку высокопроизводительных
                                            комбинированных машин для обработки почвы
                                            и разделки пласта трав, послойного внесения
                                            удобрений обеспечивающих качественное и эффективное выполнение
                                            технологического процесса.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 text-center">
                                <img src="{{asset('img/derep.jpg')}}" alt="Дерепаскин Алексей Иванович"
                                     class="mx-auto rounded-sm img-fluid">
                            </div>
                            <!--/col-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/card-block-->
                </div>
            </div>
        @elseif ($id==3)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-md-6">
                                <h4 class="mb-0 text-truncated">Семибаламут Александр Викторович</h4>
                                <p class="lead">Заведующий, кандидат технических наук</p>
                                <div class="Checklist">
                                    <h6 class="mb-0 text-truncated">В функции лаборатории механизации послеуборочной
                                        обработки зерна входит:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Разработка высокоэффективной и
                                            производительной зерноочистительной техники, обеспечивающей качественное
                                            выполнение технологического процесса очистки при минимальных затратах
                                            энергии и средств.
                                        </li>
                                    </ul>
                                    <h6 class="mb-0 text-truncated">Основное направление исследований:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Повышение эффективности и
                                            совершенствование технологии очистки зернового вороха, снижение
                                            энергоемкости процесса.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 text-center">
                                <img src="{{asset('img/semb.jpg')}}" alt="Семибаламут Александр Викторович"
                                     class="mx-auto rounded-sm img-fluid">
                            </div>
                            <!--/col-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/card-block-->
                </div>
            </div>
        @elseif ($id==4)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-md-6">
                                <h4 class="mb-0 text-truncated">Иванченко Павел Григорьевич</h4>
                                <p class="lead">Заведующий, кандидат технических наук</p>
                                <div class="Checklist">
                                    <h6 class="mb-0 text-truncated">Лаборатория занимается разработкой:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Нормативов потребности в технических
                                            средствах для механизации растениеводства Северного Казахстана
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Нормативов расхода топлива на
                                            механизированные работы в растениеводстве Северного Казахстана для техники
                                            стран ближнего и дальнего зарубежья
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Системы машин для уборки зерновых
                                            культур (прицепных валковых жаток,
                                            широкозахватных жаток для прямого комбайнирования к комбайнам «Енисей-1200»
                                            и «Дон-1500», измельчителей-разбрасывателей соломы к комбайнам «Енисей-1200»
                                            и «Дон-1500», загрузчиков зерна и т.д.).
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 text-center">
                                <img src="{{asset('img/pg.gif')}}" alt="Иванченко Павел Григорьевич"
                                     class="mx-auto rounded-sm img-fluid">
                            </div>
                            <!--/col-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/card-block-->
                </div>
            </div>
        @elseif ($id==5)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-md-6">
                                <h4 class="mb-0 text-truncated">Полищук Юрий Владимирович</h4>
                                <p class="lead">Заведующий, кандидат технических наук</p>
                                <div class="Checklist">
                                    <h6 class="mb-0 text-truncated">Лаборатория занимается:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Проблемами коренного и поверхностного
                                            улучшения травостоев уборки грубых кормов, механизации технологических
                                            процессов обработки почвы, подсева семян трав и уборки сена
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Ведет разработку высокопроизводительных
                                            комбинированных машин для обработки почвы, подсева семян трав и уборки сена
                                            обеспечивающих качественное и эффективное выполнение технологического
                                            процесса.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 text-center">
                                <img src="{{asset('img/pol.jpg')}}" alt="Полищук Юрий Владимирович"
                                     class="mx-auto rounded-sm img-fluid">
                            </div>
                            <!--/col-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/card-block-->
                </div>
            </div>
        @elseif ($id==6)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-md-6">
                                <h4 class="mb-0 text-truncated">Морозов Николай Михайлович</h4>
                                <p class="lead">Заведующий</p>
                                <div class="Checklist">
                                    <h6 class="mb-0 text-truncated">Лаборатория занимается:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Разработкой чертёжно-технической
                                            документации для изготовления полевых машин согласно технического задания
                                            научных подразделений и личного опыта. Охвачены такие направления как
                                            разработка орудий различных тяговых классов для основной и поверхностной
                                            обработки почвы, в прицепных и навесных вариантах использования
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Также проектируются машины для обработки
                                            средних и тяжелых почв под посадку овощных культур. В направлении
                                            кормозаготовки освоены почвообрабатывающие машины для подсева трав и
                                            подборщики-погрузчики сена
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Для уборочного периода полевых работ
                                            лаборатория разрабатывает измельчители и разбрасыватели соломы к
                                            зерноуборочным комбайнам как средства мульчирования почвы. Ведётся
                                            модернизация и адаптация отдельных узлов серийных полевых машин для
                                            последующего их переоборудования.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 text-center">
                                <img src="{{asset('img/morz.jpg')}}" alt="Морозов Николай Михайлович"
                                     class="mx-auto rounded-sm img-fluid">
                            </div>
                            <!--/col-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/card-block-->
                </div>
            </div>
        @elseif ($id==7)
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-8 col-md-6">
                                <h4 class="mb-0 text-truncated">Курач Александр Александрович</h4>
                                <p class="lead">Заведующий, кандидат технических наук</p>
                                <div class="Checklist">
                                    <h6 class="mb-0 text-truncated">Лаборатория механизации обработки почвы и посева
                                        зерновых культур занимается:</h6>
                                    <ul>
                                        <li><i class="ri-check-double-line"></i>Выполнением прикладных
                                            научно-исследовательских и опытно-конструкторских работ по совершенствованию
                                            и разработке машин и орудий для механизации процессов поверхностной
                                            обработки почвы и посева зерновых культур
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Пропагандой и внедрением разработок в
                                            сельскохозяйственное производство
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Распространением информации о новинках
                                            техники
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Испытаниями новой посевной и
                                            почвообрабатывающей техники, поступающей в страну из-за рубежа
                                        </li>
                                        <li><i class="ri-check-double-line"></i>Повышением квалификации специалистов
                                            сельского хозяйства.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-6 text-center">
                                <img src="{{asset('img/kur.jpg')}}" alt="Курач Александр Александрович"
                                     class="mx-auto rounded-sm img-fluid">
                            </div>
                            <!--/col-->
                        </div>
                        <!--/row-->
                    </div>
                    <!--/card-block-->
                </div>
            </div>
        @elseif ($id==8)
            <div class="row">
                <div class="col-3">
                    <img src="{{asset('img/11.jpg')}}" class="img-fluid">
                </div>
                <div class="col-6" style="margin: auto">
                    <h6 class="mb-0 text-truncated text-center ml-auto mt-auto">ИСПЫТАТЕЛЬНАЯ ЛАБОРАТОРИЯ КОСТАНАЙСКОГО
                        ФИЛИАЛА
                        «ТОО НАУЧНО-ПРОИЗВОДСТВЕННЫЙ ЦЕНТР АГРОИНЖЕНЕРИИ»</h6>
                </div>
                <div class="col-3">
                    <img src="{{asset('img/222.jpg')}}" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="Checklist" style="text-align:center;">
                        <h6 class="mb-0 text-truncated">Лаборатория проводит сертификационные испытания машин
                            для сельского и лесного хозяйства, машин общего и специального назначения, автомобилей, а
                            так же
                            другие виды испытаний:</h6>
                        <ul style="display:inline-table;">
                            <li><i class="ri-check-double-line"></i>предварительные;
                            </li>
                            <li><i class="ri-check-double-line"></i>приемочные;
                            </li>
                            <li><i class="ri-check-double-line"></i>типовые;
                            </li>
                            <li><i class="ri-check-double-line"></i>периодические;
                            </li>
                            <li><i class="ri-check-double-line"></i>квалификационные;
                            </li>
                            <li><i class="ri-check-double-line"></i>инспекционные.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-4">
                    <a data-fancybox="gallery" href="{{asset('img/atRus.jpg')}}"><img src="{{asset('img/atRus.jpg')}}"
                                                                                      class="img-fluid"></a>
                </div>
            </div>
            <p style="text-align: center">
                Аккредитована в системе аккредитации Республики Казахстан
                на соответствие требованиям СТ РК ИСО/ МЭК 17025-2009
                «Общие требования к компетентности испытательных и калибровочных лабораторий» и включена в
                межгосударственный реестр испытательных лабораторий стран Таможенного Союза с правом работы по
                требованиям технических регламентов
                ТР ТС 010/2011 «О безопасности машин и оборудования», а также
                ТР РК «Требования к безопасности автотранспортных средств»,
                ТР РК «Требования к безопасности сельскохозяйственных и лесозаготовительных тракторов, прицепов и машин,
                аттестат аккредитации № KZ. И.11.0130 от 7 марта 2017 года.
            </p>
            <div>
                <h3 style="text-align: center">Область аккредитации испытательной лаборатории</h3>
                <div class="Checklist">
                    <h4 class="mb-0 text-truncated" style="text-align: center">Машины для сельского и лесного
                        хозяйства:</h4>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Тракторы;
                        </li>
                        <li><i class="ri-check-double-line"></i>Машины для сельского и лесного хозяйства, используемые
                            для подготовки или культивации почвы: плуги, бороны, рыхлители, культиваторы, полольники и
                            мотыги, почвофрезы, сеялки, сажалки и машины рассадопосадочные, разбрасыватели и
                            распределители органических и минеральных удобрений, прочие;
                        </li>
                        <li><i class="ri-check-double-line"></i>Машины уборочные: косилки, грабли боковые и
                            сеноворошилки, пресс-подборщики, картофелекопатели и картофелеуборочные машины, машины
                            свекловичные ботворезные и машины свеклоуборочные, комбайны зерноуборочные и
                            силосоуборочные;
                        </li>
                        <li><i class="ri-check-double-line"></i>Прицепы и полуприцепы самозагружающиеся или
                            саморазгружающиеся, используемые в сельском хозяйстве;
                        </li>
                        <li><i class="ri-check-double-line"></i>Машины для сельского и лесного хозяйства прочие: машины
                            и механизмы для приготовления кормов для животных, оборудование для птицеводства; инкубаторы
                            и брудеры.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="Checklist">
                    <h4 class="mb-0 text-truncated" style="text-align: center">Машины общего назначения:</h4>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Двигатели и турбины, кроме двигателей авиационных,
                            автомобильных и мотоциклетных;
                        </li>
                        <li><i class="ri-check-double-line"></i>Оборудование подъемно-транспортное.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="Checklist">
                    <h4 class="mb-0 text-truncated" style="text-align: center">Оборудование специального назначения
                        прочее:</h4>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Машины для горнодобывающей промышленности, разработки
                            карьеров и строительства: машины и оборудование прочие для передвижения материалов,
                            калибровки, выравнивания,
                            скреперных работ, экскавации, трамбовки, уплотнения или выемки породы, минералов или руд
                            (включая бульдозеры, экскаваторы одноковшовые механические и катки дорожные);
                        </li>
                        <li><i class="ri-check-double-line"></i>Машины прочие для выемки, трамбования или уплотнения
                            грунта, машины для общественных работ, строительства и аналогичных работ; снегоочистители;
                        </li>
                        <li><i class="ri-check-double-line"></i>Оборудование для обработки продуктов пищевых, напитков и
                            изделий табачных;
                        </li>
                        <li><i class="ri-check-double-line"></i>Машины для очистки, сортировки или калибровки семян,
                            зерна или культур бобовых сухих.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="Checklist">
                    <h4 class="mb-0 text-truncated" style="text-align: center">Автомобили</h4>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Двигатели внутреннего сгорания для автомобилей;
                        </li>
                        <li><i class="ri-check-double-line"></i>Автомобили легковые пассажирские;
                        </li>
                        <li><i class="ri-check-double-line"></i>Автобусы;
                        </li>
                        <li><i class="ri-check-double-line"></i>Автомобили грузовые;
                        </li>
                        <li><i class="ri-check-double-line"></i>Автомобили специальные и специализированные:, автокраны,
                            автобуровые, транспортные средства пожарные, автобетономешалки, прочие;
                        </li>
                        Прицепы и полуприцепы, контейнеры.
                        <li><i class="ri-check-double-line"></i>Прицепы и полуприцепы, контейнеры.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-columns">
                <div class="card">
                    <a data-fancybox="gallery" href="{{asset('img/1w.jpg')}}">
                        <img class="img-fluid" src="{{asset('img/1w.jpg')}}" alt="..." class="img-fluid">
                    </a>
                </div>
                <div class="card">
                    <a data-fancybox="gallery" href="{{asset('img/2w.jpg')}}">
                        <img class="img-fluid" src="{{asset('img/2w.jpg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="card">
                    <a data-fancybox="gallery" href="{{asset('img/3w.jpg')}}">
                        <img class="img-fluid" src="{{asset('img/3w.jpg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="card">
                    <a data-fancybox="gallery" href="{{asset('img/4w.jpg')}}">
                        <img class="img-fluid" src="{{asset('img/4w.jpg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="card">
                    <a data-fancybox="gallery" href="{{asset('img/5w.jpg')}}">
                        <img class="img-fluid" src="{{asset('img/5w.jpg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="card">
                    <a data-fancybox="gallery" href="{{asset('img/6w.jpg')}}">
                        <img class="img-fluid" src="{{asset('img/6w.jpg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="card">
                    <a data-fancybox="gallery" href="{{asset('img/7w.jpg')}}">
                        <img class="img-fluid" src="{{asset('img/7w.jpg')}}" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="card">
                    <a data-fancybox="gallery" href="{{asset('img/8w.jpg')}}">
                        <img class="img-fluid" src="{{asset('img/8w.jpg')}}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <p style="text-align: center">
                За девятнадцать лет работы испытательной лаборатории проведены приемочные, периодические и
                сертификационные испытания более четырехсот семидесяти образцов сельскохозяйственной техники и
                оборудования, тракторов, зерно и кормоуборочных комбайнов, грузовых и легковых автомобилей
                отечественного производства и производителей ближнего и дальнего зарубежья.
                Проведение испытаний позволяет производителям техники произвести адаптацию машин к
                почвенно-климатическим условиям Северного Казахстана, что обеспечивает повышение их
                конкурентоспособности. Еще одно из преимуществ – реклама продукции в регионе.
            </p>
            <p style="text-align: center">
                Перечень сельскохозяйственной техники, прошедшей испытания
                представлен <a href="{{asset('docs/ispitaniya.pdf')}}" >здесь</a>
            </p>
        @endif
    </main>

@endsection
