<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>

@extends('layouts.app')

@section('content')

    <div class="container">

        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-7">
                <h1>Мы на карте</h1>
                <div style="overflow:hidden;width: 560px;position: relative;"><iframe width="560" height="440" src="https://maps.google.com/maps?width=560&amp;height=440&amp;hl=en&amp;q=Vulitsa%20Chkalava%2036%2C%20Minsk%2C%20Belarus+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/fr/">https://embedgooglemaps.com/fr/</a> & <a href="https://iamsterdamcard.it">http://iamsterdamcard.it/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
            </div>
            <div class="col-md-5">



                <h1>Добро пожаловать!</h1>
                Клиника Неболит оказывает широкий спектр платных медицинских услуг.
                Все цены согласованы с Министерством здравоохранения Республики Беларусь.

                Приём осуществляют профессора и доценты клиники Неболит по специальностям: педиатрия, гинекология, кардиология, онкология, неврология,
                оториноларингология, офтальмология, сосудистая хирургия, терапия, аллергология и иммунология, травматология и ортопедия, урология,
                гематология, гастроэнтерология, ревматология, эндокринология.

                Любой пациент может попасть на прием к профессору или доценту по предварительной записи по телефону или из личного кабинета.



                </div>





            <div class="container text-center">
                <h1 class="h1 mt-5 mb-1">Наши специалисты</h1>




                <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-blockw-50" src="img/resize1.jpg" a>
                            <div class="carousel-caption ">
                                <h8>ПОДОЛИНСКАЯ НАТАЛЬЯ АЛЕКСАНДРОВНА</h8>
                                <p>Врач-терапевт.Магистр медицинских наук</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-blockw-50" src="img/res2.jpg" >
                            <div class="carousel-caption ">
                                <h8>ВАРГАНОВ ВАСИЛИЙ ВАСИЛЬЕВИЧ</h8>
                                <p>Заведующий стоматологическим отделением,<br/> высшая квалификационная категория</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-blockw-50" src="img/res3.jpg" >
                            <div class="carousel-caption ">
                                <h8>КОВАЛЁВА ТАТЬЯНА ДЕМЬЯНОВНА</h8>
                                <p>Врач-стоматолог-хирург,<br/> первая квалификационная категория</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-blockw-50" src="img/res4.jpg" >
                            <div class="carousel-caption ">
                                <h8>ЖУКОВ ВЛАДИМИР ИВАНОВИЧ</h8>
                                <p>Врач-проктолог консультативно-поликлинического отделения. Высшая квалификационная категория. </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-blockw-50" src="img/res5.jpg" >
                            <div class="carousel-caption ">
                                <h8>ПОДОЛИНСКАЯ НАТАЛЬЯ АЛЕКСАНДРОВНА</h8>
                                <p>Врач-терапевт.Магистр медицинских наук</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-blockw-50" src="img/res6.jpg" >
                            <div class="carousel-caption ">
                                <h8>ПОДОЛИНСКАЯ НАТАЛЬЯ АЛЕКСАНДРОВНА</h8>
                                <p>Врач-терапевт.Магистр медицинских наук</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br/>
                <br/>
                <br/>


            </div>

            <div class="col-md-4">
                <ion-icon  name="call" style=" font-size: 64px; margin: 28px; color:#227DC7; ">
                </ion-icon>
                <h4 style="border-bottom: 2px solid #227DC7; font-weight: normal; padding-bottom: 5px; padding-right:50px; ">ТЕЛЕФОНЫ</h4><br/>

                <p>Регистратура</p>

                <p>пн−пт: 08:00−16:00, сб, вс — выходные</p>
                <p style="color: #227DC7;">+375 (212) 63-32-55</p>
                <p style="color: #227DC7;">+375 (212) 63-32-88</p>
                <p style="color: #227DC7;">+375 (33) 324-16-44</p>

                <p>Стоматология:</p>
                <p style="color: #227DC7;">+375 (212) 63-32-55</p>
                <p style="color: #227DC7;">+375 33 317-94-18</p>
                <p style="color: #227DC7;">+375 29 218-09-90</p>


            </div>
            <div class="col-md-4">
                <ion-icon name="pin" style=" font-size: 64px; margin: 28px; margin-left: 140px; color:#227DC7;">
                </ion-icon>
                <h4 style="border-bottom: 2px solid #227DC7; font-weight: normal; padding-bottom: 5px; padding-left:110px; ">НАШ АДРЕС</h4><br/>

                <p align="center">Минск, ул. Владимира Зеленского, 20</p>
                <p align="center">Время работы клиники:</p>
                <p align="center" style="color: #227DC7;">Пн–пт: 08:00–19:00</p>
                <p align="center">Время работы аптеки:</p>
                <p align="center" style="color: #227DC7;">Пн–пт: 08:30–16:30 (Сб, вс: выходные)</p>

            </div>
            <div class="col-md-4">
                <ion-icon name="mail" style=" font-size: 64px; margin: 28px;margin-left: 200px; color:#227DC7; ">
                </ion-icon>
                <h4 style="border-bottom: 2px solid #227DC7; font-weight: normal; padding-bottom: 5px; padding-left:110px; ">ЭЛЕКТРОННАЯ ПОЧТА</h4><br/>
                <p align="right">Мы будем рады ответить на Ваш вопрос!</p>
                <p align="right" style="color: #227DC7;">klinikanebolit@gmail.com</p>


            </div>

        </div>
@endsection

