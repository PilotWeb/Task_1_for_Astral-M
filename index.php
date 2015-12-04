

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="forms.js"></script> <!-- Конфликтовал с js.js (Надо ставить выше)-->
    <script src="js/js.js"></script>
    <script src="js/modal.js"></script>
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        (function(){
            if (typeof carrotquest === 'undefined') {
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                s.src = '//cdn.carrotquest.io/api.min.js';
                var x = document.getElementsByTagName('head')[0]; x.appendChild(s);

                carrotquest = {}; window.carrotquestasync = []; carrotquest.settings = {};
                m = ['connect', 'identify', 'track', 'auth'];
                function Build(name, args){return function(){window.carrotquestasync.push(name, arguments);} }
                for (var i = 0; i < m.length; i++) carrotquest[m[i]] = Build(m[i]);
            }
        })();
        carrotquest.connect('1758-2e30ce1ab118168801855c0305e');
    </script>

</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-2 col-md-3 col-sm-3 col-xs-3 hidden-xs">
                    <a href="https://astralm.ru/"> <img src="images/logo.png" alt="logo"></a>
                </div>




                <div id="h-search" class="col-lg-7 col-md-5 col-sm-5 col-xs-5 hidden-xs" >
                    <form action="/search/index.php" id="h-search-form" name="search">
                        <input type="text" id="q" name="q"  value="" placeholder="Поиск по сайту">
                        <input type="submit" id="s" name="s"  value="">
                    </form>
                </div>

                <div class="h-contakt col-lg-3 col-md-4 col-sm-4 col-xs-4 hidden-xs">
                    <div class="h-phone">
                        <p>Телефон в Москве</p>
                        <p>+7 (499) 649-30-42</p>
                    </div>
                    <div class="h-phone">
                        <p>Техподдержка</p>
                        <p>8 (800) 700 86 68</p>
                    </div>
                    <div class="h-phone">
                        <a href="#" class="top-btn" id="top-btn">Заказать звонок</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="row">
        <div class="navbar navbar-inverse" id="menu">
            <div class="container">
                <div class="navbar-header">
                    <a href="https://astralm.ru/" class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs"><img src="images/logo-long.png" height="30" width="100" style="margin-top:-7px;"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="/products/">Продукты </a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/esignature/">Электронная подпись</a></li>
                                <li><a href="/products/report/">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/">1С-Отчетность</a></li>
                                <li><a href="/products/security/">Защита информации</a></li>
                                <li><a href="/products/alco/">Росалкоголь регулирование</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/">Сервис 1С-ЭТП</a></li>
                                <li><a href="/bg/">Банковская гарантия</a></li>
                                <li><a href="/sverka_nds/">Сверка НДС</a></li>
                                <li><a href="/1c-navigator/">1С:Бизнес-Навигатор</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/about/partnership/">Партнерам</a>
                        </li>
                        <li class="dropdown">
                            <a href="/news/">Новости</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/news/">Все новости</a></li>
                                <li><a href="/news/electronic-reports/">Электронная отчетность</a></li>
                                <li><a href="/news/certification_center/">Электронная подпись</a></li>
                                <li><a href="/news/astral-report/">1С-Отчетность</a></li>
                                <li><a href="/news/1c-report/">Астрал Отчет</a></li>
                                <li><a href="/news/buh-report/">Бухгалтерская отчетность</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/blog/">Блоги</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/blog/accountant_report/">Бухгалтерская отчетность</a></li>
                                <li><a href="/blog/electronic_reports/">Электронная отчетность</a></li>
                                <li><a href="/blog/astral_report/">Астрал Отчет</a></li>
                                <li><a href="/blog/1c-reports/">1С-Отчетность</a></li>
                                <li><a href="/blog/certification_center/">Электронная подпись</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/about/">О компании</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/about/">О компании</a></li>
                                <li><a href="/about/clients/">Бизнес-партнеры</a></li>
                                <li><a href="/about/reviews/">Отзывы клиентов</a></li>
                                <li><a href="/about/vacancy/">Вакансии</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/contacts/">Контакты</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--    END MENU    -->


  

    <div class="container">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div id="left-menu-ecp">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>1 test</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">2 test</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">3 test</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">4 test</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">4 test</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">5 test</a><br>
                </div>
                <div class="clear"></div>
            </div>
        </aside>











        <div class="open_menu hidden-lg hidden-md">
        </div>
        <aside id="aside-ecp" class="col-lg-3 col-md-3">
            <a class="ac_popap_close close_menu" href="#"></a>
            <div id="left-menu-ecp" class=" modal_menu">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>ЭЦП</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>ЭЦП для ЕГАИС</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>ВОПРОСЫ И ОТВЕТЫ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>ПРИМЕНЕНИЕ</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">Отчетность</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">Документооборот</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">Торги</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">Закупки</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">Личная подпись</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/ceny/"><span>ЦЕНЫ</span></a><br>
                    <a href="/esignature/ceny/tarify/">Тарифы</a><br>
                    <a href="/esignature/ceny/dopolnitelno/">Дополнительно</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/poryadok-polucheniya/"><span>ПОРЯДОК ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/mesta-polucheniya/"><span>МЕСТА ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/soprovozhdenie-torgov/"><span>СОПРОВОЖДЕНИЕ ТОРГОВ</span></a>
                    <a href=""></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/spisok-ploshchadok/"><span>СПИСОК ПЛОЩАДОК</span></a>
                </div>
                <div class="clear"></div>

            </div>
        </aside>

  <!-- #WORK AREA# -->
        <section id="right-content-usn" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <ul class="breadcrumb">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Электронная отчетность</a></li>
                <li><a href="#">Предоставление отчетности</a></li>
                <li><a href="#">Налоговый режим</a></li>
                <li class="active">УСН</li>
            </ul>
        <div class="usn-report">
            <h2 class="page-title">Отчетность при УСН </h2>
            <div class="right-content-usn-head">
                 <h4>Упрощенная система налогообложения</h4>
                 <p>
                     УСН – это специальный налоговый режим, позволяющий снизить налоговую нагрузку,
                     а также упростить ведение налогового и бухгалтерского учета субъектам малого бизнеса.
                 </p>
                 <p>
                     Отчетность УСН состоит из документации, сдаваемой в ИФНС, ФСС и ПФР.
                     Для разных видов отчетности законодательством установлены разные сроки ее сдачи в контролирующие органы. 
                 </p>
            </div>
            <div class="usn-for-year clearfix">
             <h5>Отчетность УСН за год включает в себя:</h5>
                <div class="col-md-6">
                    <ul>
                        <li>Декларацию по единому налогу;</li>
                        <li>Декларацию по транспортному налогу (в случае необходимости);</li>
                        <li>Декларацию по земельному налогу (в случае необходимости);</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Книгу доходов и расходов; </li>
                        <li>Сведения о среднесписочной численности работников; </li>
                        <li>Справки 2-НДФЛ на каждого из них (при их наличии в штате);</li>
                    </ul>
                </div>          
            </div>                     
            <div class="usn-types clearfix">            
                <p>
                    УСН для ИП позволяет облегчить процесс ведения учета и сдачи отчетности в контролирующие органы.
                    Отчетность ИП УСН в 2015 году можно подавать как в бумажном, так и в электронном виде. 
                </p>
            <div class="row">
                 <figure class="usn-types-item col-md-4 clearfix">
                 <div>
                    <img src="EO_TZ-7_images (1)/EO_TZ-7_images/EO_TZ-7_07.png" height="122" width="122" alt="">
                </div>
                    <figcaption>
                        <h4 class="types-title">Отчетность для ИП без работников</h4>
                        <p>Отчетность ИП УСН без работников в 2015 году не претерпела кардинальных изменений.
                         В настоящее время она включает в себя следующий пакет документов:</p>
                         <ul>
                             <li>декларация в ФНС;</li>
                             <li>ведение Книги учета доходов и расходов;</li>
                         </ul>
                         <p>Как и ранее, отчетность ИП на УСН без работников, предполагает заполнение Книги учета доходов и расходов.
                          Ее не нужно заверять в налоговой инспекции, но, несмотря на это, распечатанный,
                          пронумерованный и прошитый  экземпляр должен обязательно храниться у индивидуального предпринимателя.
                          </p>
                    </figcaption>
                 </figure>
                 <figure class="usn-types-item col-md-4  clearfix">
                 <div>
                    <img src="EO_TZ-7_images (1)/EO_TZ-7_images/EO_TZ-7_09.png" height="122" width="122" alt="">
                 </div>
                    <figcaption>
                        <h4 class="types-title">Отчетность для ИП со штатом работников</h4>
                        <p>В том случае, если предприниматель имеет штат наемных работников,
                         отчетность ИП на УСН дополняется следующей документацией:</p>
                         <ul>
                             <li>В Налоговую службу: сведения о среднесписочной численности работников,
                              справки по форме 2-НДФЛ на каждого трудоустроенного работника;</li>
                             <li> В ПФР: форма РВС-1 и формы персонифицированного учета;</li>
                             <li>В ФСС: форма 4-ФСС;</li>
                         </ul>                     
                    </figcaption>
                 </figure>
                 <figure class="usn-types-item col-md-4  clearfix">
                 <div>
                    <img src="EO_TZ-7_images (1)/EO_TZ-7_images/EO_TZ-7_11.png" height="122" width="122" alt="">
                 </div>   
                    <figcaption>
                        <h4 class="types-title">Отчетность для ООО</h4>
                        <p>Отчетность ООО УСН включает в себя следующие документы:</p>
                         <ul>
                             <li>Налоговая отчетность: декларация по единому упрощенному налогу,
                              справки по форме 2-НДФЛ на всех сотрудников организации,
                               среднесписочная численность работников;</li>
                             <li>Бухгалтерская отчетность:Книга учетов доходов и расходов,
                              баланс и отчет о финансовых результатах по упрощенной форме;</li>
                             <li>Отчетность в ПФР и ФСС: формы РВС-1 и 4-ФСС;</li>
                         </ul>                     
                    </figcaption>
                 </figure>
             </div>              
            </div>
            <div class="right-content-usn-foot hidden-xs star">
                 <p>
                     При принятии решения о необходимости приобретения специализированного программного обеспечения
                     для сдачи электронной отчетности, многих предпринимателей волнует вопрос – целесообразно ли
                     нести на УСН расходы на электронную отчетность? Ее применение позволяет снизить затраты на
                     содержание штата бухгалтеров, занимающихся формированием отчетности и ее личной передачей
                     в контролирующие органы, а также оптимизировать процесс документооборота в организации.
                  </p>
            </div>
            </div>
            <div class="el-usn-report">
            <div class="right-content-usn-head">
                 <h3>Электронная отчетность при УСН</h3>
                 <h4>Расходы на УСН по электронной отчетности</h4>
                 <p>Электронная отчетность при УСН может быть сдана следующими способами:</p>
                    <ul>
                        <li>Через интернет-сайт контролирующего органа;</li>
                        <li>С помощью специализированного программного обеспечения,
                         предоставляющего возможность передачи данных через телекоммуникационные каналы связи.</li>
                    </ul>
                 <p>
                    При данном налоговом режиме плательщик может самостоятельно выбрать объект налогообложения:
                    доходы или доходы минус понесенные на УСН расходы. Электронная отчетность позволяет составить
                    и отправить необходимую документацию независимо от установленного для каждой конкретной организации
                    объекта налогообложения.  
                 </p>
                 <p>Для того чтобы получить возможность сдачи отчетности через интернет, налогоплательщику необходимо:</p>
                 <ul>
                     <li>Приобрести электронную цифровую подпись;</li>
                     <li>Заключить с контролирующим органом соглашение об электронном документообороте.</li>
                 </ul>
            </div>

            <div class="el-usn-types">
                <h4 class="title text-center">Электронная отчетность при УСН</h4>
            <div class="row">
                 <figure class="el-usn-types-item col-md-3">
                     <div >
                       <img src="EO_TZ-7_images (1)/EO_TZ-7_images/EO_TZ-7_21.png" height="122" width="122" alt="">
                    </div>
                    <figcaption>
                        <h4>В ФНС</h4>
                        <p>Сдача налоговой отчетности при УСН осуществляется в установленные законом сроки 
                        (причем для сдачи электронной отчетности установлены несколько иные временные рамки, нежели для бумажной).
                        В ИФНС сдается не только налоговая, но и бухгалтерская отчетность,
                        а также сведения о среднесписочной численности работников.</p>                                          
                    </figcaption>
                 </figure> 
                 <figure class="el-usn-types-item col-md-3">
                    <div>
                       <img src="EO_TZ-7_images (1)/EO_TZ-7_images/EO_TZ-7_23.png" height="122" width="122" alt="">
                    </div>
                    <figcaption>
                        <h4>В ПФР</h4>
                        <p>Сдача отчетности в Пенсионный фонд в электронном виде осуществляется после заключения между ним
                        и организацией договора о предоставлении возможности электронного документооборота.
                        Если такой документ не будет оформлен, даже своевременно составленная и отправленная отчетность
                        будет считаться несданной.</p>                                          
                    </figcaption>
                 </figure>
                 <figure class="el-usn-types-item col-md-3">
                     <div>
                       <img src="EO_TZ-7_images (1)/EO_TZ-7_images/EO_TZ-7_25.png" height="122" width="122" alt="">
                     </div>
                    <figcaption>
                        <h4>В ФСС</h4>
                        <p>Отчетность в Фонд социального страхования является обязательной для всех организаций,
                        в штате которых есть наемные работники. Осуществить эту процедуру можно как с помощью
                        специализированного ПО, так и с использованием сервиса отправки отчетности,
                        размещенного на сайте контролирующего органа.</p>                                          
                    </figcaption>
                 </figure> 
                 <figure class="el-usn-types-item col-md-3">
                     <div>
                       <img src="EO_TZ-7_images (1)/EO_TZ-7_images/EO_TZ-7_25.png" height="122" width="122" alt="">
                     </div>
                    <figcaption>
                        <h4>В РОССТАТ</h4>
                        <p>Сдача отчетности в Росстат не является обязательной для всех организаций,
                        работающих с применением УСН. В том случае, если организация относится 
                        к числу малых или микропредприятий, сдавать отчетность в органы статистики
                        придется лишь в случае ее попадания в выборку, созданную контролирующим органом.</p>                                          
                    </figcaption>
                 </figure>
            </div>
            </div>
            <div class="right-content-usn-foot  hidden-xs inform">
                 <p>
                     Отчетность при УСН может подаваться как в электронном, так и в бумажном виде – законодатель
                     оставляет права выбора за налогоплательщиком. С помощью телекоммуникационных каналов связи
                     нужно подавать лишь сведения о страховых взносах (если в организации трудится более 25 человек)
                     и справки по форме 2-НДФЛ (если число сотрудников превышает 10). 
                 </p>
            </div>
            <div class="right-content-usn-foot hidden-xs warn">
                 <p>
                     В том случае, если в сданной отчетности будут найдены ошибки или неточности,
                     налогоплательщик будет уведомлен об этом факте. Если отчетность не будет
                     исправлена до наступления крайнего срока ее передачи в контролирующий орган,
                     то она будет считаться несданной. За нарушение сроков сдачи отчетной документации,
                     установленных действующим законодательством, налогоплательщику придется уплатить штраф,
                     размер которого зависит от количества несданных деклараций и отчетов.
                 </p>
            </div>
            <div class="more-info">
                <p>
                    Узнать более подробную информацию о порядке сдачи электронной отчетности,
                     и задать все возникшие вопросы можно, позвонив по телефону.
                     Специалисты компании «Калуга Астрал»предоставят подробную консультацию и
                     помогут с выбором подходящего для сдачи отчетности программного обеспечения.
                </p>
             </div>           
            </div>
              <button class="order" data-toggle="modal" data-target="#basicModal">Оставить заявку на заказ</button>
              <div class="modal fade" id="basicModal" tabindex="-1" role="dialog">
                 <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header text-center">
                          <img src="images/logoform.png" height="73" width="85" alt=""> 
                          <button class="close pull-right" type="button" data-dismiss="modal">x</button>                         
                          <h4 class="modal-title text-center" id="myModalLabel">Оставьте Ваши контактные данные
                          и наш консультант свяжется с Вами:</h4>                         
                      </div>
                    <div class="modal-body">
                      <form action="handler.php" class="order-form has-feedback" method="post">
                         <div id="fields"> 
                            <div class="form-group has-feedback">
                                <input type="text" name="name" required="required" placeholder="Имя"> 
                                <span class="glyphicon form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" name="surname" required="required" placeholder="Фамилия">
                                <span class="glyphicon form-control-feedback"></span> 
                            </div>
                            <div class="form-group has-feedback">
                                <input type="email" name="email" required="required" placeholder="Ваш e-mail"> 
                                <span class="glyphicon form-control-feedback"></span>
                            </div>                           
                         </div>        
                         </form>
                    </div>
                   <div class="modal-footer">
                    <input type="submit" id="submit" value="Отправить"/>                    
                </div>
              </div>
            </div>
            </div>
            <div class="alert-success hidden" id="success-alert">
              <h2 class="text-center">Спасибо, Ваши данные были успешно отправлены!</h2>            
            </div>            
        </section>
    
<!-- # END WORK AREA# -->

    </div>
    <!--    FOOTER    -->
    <footer id="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Основные разделы</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/products/" class="nav_link"Продукты</a></li>
                                <li><a href="/about/partnership/" class="nav_link">Партнерам</a></li>
                                <li><a href="/news/" class="nav_link">Новости</a></li>
                                <li><a href="/blog/" class="nav_link">Блоги</a></li>
                                <li><a href="/about/" class="nav_link">О компании</a></li>
                                <li><a href="/contacts/" class="nav_link">Контакты</a></li>
                                <li><a href="/privacy_security/" class="nav_link">Конфидициальность</a></li>
                                <li><a href="/feedback/" class="nav_link">Обратная связь</a></li>
                                <li><a href="/about/vacancy/" class="nav_link">Вакансии</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Продукты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/esignature/" class="nav_link">Электронная подпись</a></li>
                                <li><a href="/products/report/" class="nav_link">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/" class="nav_link">1С-Отчетность</a></li>
                                <li><a href="/products/security/" class="nav_link">Защита информации</a></li>
                                <li><a href="/products/alco/" class="nav_link">РАР</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/" class="nav_link">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/" class="nav_link">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/" class="nav_link">Сервис 1С-ЭТП</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Техническая поддержка</h4>
                        <nav class="footer_nav tp">
                            <ul>
                                <li>
                                    <div><span>«Астрал Отчет»</span><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет">+7 (495) 663-73-58, доб. 10</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет"><a href="mailto:#">support@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«1С Отчетность»</span><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность">+7 (495) 663-73-58, доб. 20</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность"><a href="mailto:#">1c@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«Электронные торги»</span><br/></div>
                                    <div><abbr title="Электронные торги">+7 (495) 663-73-58, доб. 11</abbr><br/></div>
                                </li>
                                <li>
                                    <div><span>Техподдержка</span><br/></div>
                                    <div><abbr title="Техподдержка">8 (800) 700-86-68</abbr><br/></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Контакты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li>
                                    <address id="add-phone">
                                        <b>Остались вопросы?</b><br>
                                        <abbr title="Телефон в Москве"><b>+7 (499) 649-30-42</b></abbr>
                                    </address>
                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">ООО «Астрал-М»</strong><br>
                                        111123, г. Москва, Шоссе Энтузиастов д. 56, стр. 32<br>
                                        офис 211 <br>
                                        <a href="mailto:#">moscow@astralnalog.ru</a>
                                    </address>

                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">Рабочие дни:</strong><br>
                                        Понедельник-Пятница<br>
                                        с 9:00 до 18:00<br>
                                    </address>
                                </li>
                                <li><a href="/contacts/">Все контакты</a></li>
                                <li><a href="/search/map.php">Карта сайта</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
        <!-- ARROW FIXED -->
        <div class="arrow_up_fix_none" id="arrow_up"></div>
        <!-- ARROW FIXED -->
        <div class="social">
            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Рабочие дни:</h5>
                <div class="f-social centered">
                    <p class="footer_span">Понедельник-Пятница<br></p>
                    <p class="footer_span">с 9:00 до 18:00</p>
                </div>
            </div>

            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Телефон</h5>
                <div class="f-social">
                    <abbr title="Phone"><b>+7 (499) 649-30-42</b></abbr>
                </div>
            </div>
            <br/>
            <h5 class="footer_link">Мы в социальных сетях</h5>
            <div class="f-social">
                <a href="http://vk.com/astralm" class="social_link social_link_vk" target="_blank">&nbsp;</a>
                <a href="http://facebook.com/astralmoscow" class="social_link social_link_fb" target="_blank">&nbsp;</a>
                <a href="http://twitter.com/MoscowAstral" class="social_link social_link_google" target="_blank">&nbsp;</a>
                <a href="http://www.youtube.com/channel/UCCzvlCiq1AlX_HiH31LXPvg/" class="social_link social_link_youtube" target="_blank">&nbsp;</a>
            </div>
        </div>
        <!-- <a href="#x" class="overlay" id="win1" style="opacity: 1;z-index: 1 !important;cursor: pointer;"></a> -->
    </footer>
























    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery-css-transform.min.js"></script>
    <script src="js/jquery-animate-css-rotate-scale.min.js"></script>
    <script src="js/jquery.quicksand.min.js"></script>

</body>
</html>