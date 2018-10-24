<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style/style.css">
</head>

<body>

    <?php 
    require_once("destinations.php");
    ?>

    <nav class="navigation">
        <div class="navbarLine">
            <div class="ze"></div>
            <ul class="navbar">
                <li><a href="#"><strong>Начало</strong></a>
                </li>
                <li><a href="#"><strong>Изчисли</strong></a>
                </li>
                <li><a href="#"><strong>ZOE</strong></a>
                </li>
                <li><a href="#"><strong>Оферта</strong></a>
                </li>
            </ul>
            <div class="logo"></div>
        </div>
        <div class="navbarImg">
            <p>До европейските стoлици с <br>Renault ZOE</p>
            <img></div>
    </nav>

    <div class="mapHolder">
        <div class="mapTitle">
            <p>Изчисли колко зареждания са нужни, за да стигнеш до 27-те европейски столици с <br>Renault ZOE
            </p>
            <div class="mapInfo">
                <div class="map"><img src="imgs/sofia.png" class="destinationDot"></div>
                <div class="mapSide">
                    <p>
                        Разстояние от София до:</p>
                    <select name="cityFilter" class="lista">
      <option value="0" readonly>ДЕСТИНАЦИЯ</option>
            <option value="1" class="izbor" data-category="Амстердам"> Амстердам</option>
 <option value="2" class="izbor" data-category="Атина"> Атина</option>
 <option value="3" class="izbor" data-category="Берлин"> Берлин</option>
 <option value="4" class="izbor" data-category="Братислава"> Братислава</option>
 <option value="5" class="izbor" data-category="Брюксел "> Брюксел </option>
 <option value="6" class="izbor" data-category="Будапеща "> Будапеща </option>
 <option value="7" class="izbor" data-category="Букурещ"> Букурещ</option>
 <option value="8" class="izbor" data-category="Валета"> Валета</option>
 <option value="9" class="izbor" data-category="Варшава "> Варшава </option>
 <option value="10" class="izbor" data-category="Виена "> Виена </option>
 <option value="11" class="izbor" data-category="Вилнюс "> Вилнюс </option>
 <option value="12" class="izbor" data-category="Дъблин"> Дъблин</option>
 <option value="13" class="izbor" data-category="Загреб"> Загреб</option>
 <option value="14" class="izbor" data-category="Копенхаген"> Копенхаген</option>
 <option value="15" class="izbor" data-category="Лисабон"> Лисабон</option>
 <option value="16" class="izbor" data-category="Лондон "> Лондон </option>
 <option value="17" class="izbor" data-category="Любляна"> Любляна</option>
 <option value="18" class="izbor" data-category="Люксембург"> Люксембург</option>
 <option value="19" class="izbor" data-category="Мадрид "> Мадрид </option>
 <option value="20" class="izbor" data-category="Никозия"> Никозия</option>
 <option value="21" class="izbor" data-category="Париж "> Париж </option>
 <option value="22" class="izbor" data-category="Прага "> Прага </option>
 <option value="23" class="izbor" data-category="Рига"> Рига</option>
 <option value="24" class="izbor" data-category="Рим  "> Рим  </option>
 <option value="25" class="izbor" data-category="Стокхолм "> Стокхолм </option>
 <option value="26" class="izbor" data-category="Талин"> Талин</option>
 <option value="27" class="izbor" data-category="Хелзинки "> Хелзинки </option>
                    </select>
                    <div class="exportForm">
                        <!--                <h4>0000 KM</h4>

                    <button class="calc">КАЛКУЛИРАЙ</button>
                          <div class="calcInfo hidden">
                          <h3><strong>ДО ГРАДДДДДДД С:</strong></h3>
                          <h3>МАЛКО ЗАРЕЖДАНИЯ</h3>
                          <h3>НЕКВИ КИНТИ</h3>
                          <h3>0 ВРЕДНИ ЕМИСИИ</h3>
                          
                          <p>
                          * Цената е калкулирана на база дневна тарифа лв./кВтч за снабдяване с електрическа енергия и лв./кВтч за разпределение на електрическа енергия на ЧЕЗ България към декември 2017. Изчисленията са на база пробег на Renault ZOE – 400 км по NEDC.
</p>
                              </div>
-->


                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("test4.php");?>
    <!--    <div class="regForm">
        <input type="text" name="name" placeholder="ИМЕ" required class="inputs">
        <input type="text" name="job" placeholder="ПРОФЕСИЯ" required class="inputs">
        <input type="text" name="family" placeholder="ФАМИЛИЯ" required class="inputs">
        <input type="text" name="car" placeholder="КАКЪВ АВТОМОБИЛ КАРАТЕ" required class="inputs">
        <input type="email" name="email" placeholder="ИМЕЙЛ" required class="inputs">
        <button>РЕГИСТРИРАЙ</button>
</div>-->
    <div class="parentinfostack">
        <h2>Renault ZOE</h2>
         <hr class="filler4">
        <div class="infostack">
            <div class="infoElement leftText">
                <h3 class="h3-1">ПРОБЕГ <br>400 КМ</h3>
                <p>Оборудван с новата батерия Z.E. 40: ZOE е с най-дългият пробег от всички масови електромобили. Като пионер в областта на изцяло електрическата мобилност и №1 производител на електрически автомобили в Европа, Renault ускорява своята иновационна програма. Оборудван с новата батерия Z.E. 40, Renault ZOE вече предлага рекорден пробег от 400 км, което е два пъти повече от пробега, който моделът предлагаше при дебюта си. Новата батерия отстранява последната психологична бариера, която стои на пътя на покупката на електрически автомобил, тъй като потребителите на ZOE вече могат да пътуват по-далеч и да се наслаждават на по-голямо разнообразие от пътувания, без да се тревожат за зареждане. Това прави почивките извън града през уикенда реална възможност.
                </p>
            </div>
            <div class="infoElement rightPic1"></div>
            <div class="infoElement leftPic1"></div>
            <div class="infoElement rightText">
                <h3 class="h3-2">ЛЕСНО <br>И БЪРЗО <br> ЗАРЕЖДАНЕ</h3>
                <p>Скоростта на зареждане на батерията Z.E. 40 е идентична с тази на стандартната батерия, следователно запълването не отнема много време. Например, само 30 минути средно са необходими, за да се зареди батерията за изминаване на допълнителни 80 км, когато тя бъде включена към една от многото обществени зарядни станции в Европа. Благодарение на зарядното устройство Cameleon®, ZOE може да се зарежда навсякъде: у дома, на публична зарядна станция, в търговски център или на работното ви място.
                </p>
            </div>
            <div class="infoElement leftText">
                <h3 class="h3-3">УДОВОЛСТВИЕ <br>ОТ ШОФИРАНЕТО</h3>
                <p>Със своите компактни и изваяни форми, Renault ZOE e създаден за движение. Свързан във всеки смисъл на думата, този модерен електрически автомобил ще направи революционна промяна във вашия живот. Оборудван с 7’’ екран, гласови команди, следене на автономията и програмируемо зареждане. Предлага се с електрически сгъваеми странични огледала и нови алуминиеви джанти в два цвята и диаметър 16 инча. В кабината е добавен допълнителен финес, най-вече благодарение на новата черна тапицерия и различните материали в кабината.
                </p>
            </div>
            <div class="infoElement rightPic2"></div>
            <div class="infoElement leftPic2"></div>
            <div class="infoElement rightText">
                <h3 class="h3-4">БЕЗ ШУМ И<br>БЕЗ ВРЕДНИ <br>ЕМИСИИ</h3>
                <p>100% eлектрически. Тих, но не и скучен.
                </p>
            </div>
            <div class="infoBack"></div>
        </div>
    </div>

    <div class="offer">
        <h2>ОФЕРТА</h2>
         <hr class="filler4">
        <div class="offerField">
            <div class="offerBox offerText">
                <h4>Финансов лизинг с месечна вноска<br> от 590 лева с ДДС. И избор от 3<br> зареждащи подаръка.</h4>
                <button class="offerButton">ИЗЧИСЛИ</button>
                <p>Офертата е валидна за бизнес клиенти. Средната месечна вноска от 590 лева с ДДС е изчислена на база период 60 месеца, 2,28% лихвен процент, 20% първоначална стойност и\ 30% остатъчна стойност.
                </p>
            </div>
            <div class="offerBox">
                <img src="/imgs/zoe_bott.png">
            </div>
        </div>
    


    <footer class="footer">
        <p>Renault 2018</p>
        <div>
            <i class="fa fa-facebook-f fa-2x fa-inverse"></i>
            <i class="fa fa-twitter fa-2x fa-inverse"></i>
        </div>
    </footer>









    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src=".\\script\script.js" type="text/javascript"></script>
    <!--    <script src="script2.js" type="text/javascript"></script>-->
</body>

</html>
