<?php require_once('php/connection.php')?>
<?php require_once('php/selector.php')?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">

    <title>RocketTest</title>
</head>
<body>
    <section id="appointment" class="appointment noneBurger">
        <img src="img/blackClose.png" onclick="closeAppoint()" class="blackClose" alt="close">
        <form action="php/sendEmail.php" method="POST">
            <label for="FIO_input">Как к вам обращаться? (ФИО)</label>
            <input name="FIO" placeholder="Иванов Иван Иванович" required id="FIO_input" type="text">
            <label for="phone_input">Ваш номер телефона?</label>
            <input name="Phone" placeholder="+7(863) 000 00 00" required id="phone_input" type="text">
            <label for="email_input">Ваша электронная почта?</label>
            <input name="Email" placeholder="vashapochta@mail.ru" required id="email_input" type="email">
            <label for="offer_input">Название желаемой услуги?</label>
            <input name="Offer" placeholder="Проверка зрения" required id="offer_input" type="text">
            <button class="btn1" type="submit">Отправить</button>
        </form>
    </section>
    <!-- Навигационная панель -->
    <nav>
        <!-- Верхняя часть навбара -->
        <div>
            <!-- Лого и адрес -->
            <div class="nav_left">
                <div class="burger displayNone showMin768">
                    <img src="img/openBurger.png"  id="openBurger" class="burger"alt="burger" onclick="openBurger()">
                    <img src="img/closeBurger.png" id="closeBurger" class="burger noneBurger" onclick="closeBurger()" alt="closeBurger">
                </div>
                <img src="img/logo.png" alt="LOGO">
                <div class="showMin768 displayNone" style="text-align: right;">
                    <h5 style="margin-left: 0px;">+7(863) 000 00 00</h5>
                    <h6>Ростов-на-Дону</h6>
                </div>
                <div class="noneMax768">
                    <h5><img src="img/where.png" alt="icon"> Ростов-на-Дону</h5>
                    <h6>ул. Ленина, 2Б</h6>
                </div>
            </div>
            <!-- Телефон и кнопка записи  -->
            <div class="nav_right noneMax768">
                <img src="img/whts.png" alt="whatsup">
                <h6>+7(863) 000 00 00</h6>
                <button onclick="doAppointment()">Записаться на прием</button>
            </div>

        </div>
        <!-- Ссылки -->
        <div class="noneMax768">
            <a href="#">О клинике</a>
            <a href="#">Услуги</a>
            <a href="#">Специалисты</a>
            <a href="#">Цены</a>
            <a href="#">Контакты</a>
        </div>
        <!-- Меню для планшетов и телефонов -->
        <div id="menu" class="noneBurger">
            <a href="#">О клинике</a>
            <a href="#">Услуги</a>
            <a href="#">Специалисты</a>
            <a href="#">Цены</a>
            <a href="#">Контакты</a>
            <button onclick="doAppointment()">Записаться на прием</button>
        </div>
    </nav>

    <!-- Первый блок с информацией-->
    <section class="infoBlock">
        <!-- Левая часть -->
        <div class="infoBlock_left">
            <div>
                <h1>Многопрофильная  клиника для детей и взрослых</h1>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            </div>
        </div>
        <!-- Правая  часть -->
        <div class="infoBlock_right">
           <img src="img/room.png" alt="">
        </div>
    </section>
    <!-- Второй блок.  Слайдер  -->

    <section class="offersList">
        <div class="offersList_card">
            <div class="offersList_card_Info">
                <h3 id="title" style="word-wrap: break-word;"><?php echo $res[$PostsNum][1]?></h3>
                <h4 id="forWho"><?php echo $res[$PostsNum][2]?></h4>
                <ul>
                    <li><h6 id="option1"><?php echo $res[$PostsNum][3]?></h6></li>
                    <li><h6 id="option2"><?php echo $res[$PostsNum][4]?></h6></li>
                    <li><h6 id="option3"><?php echo $res[$PostsNum][5]?></h6></li>
                    <li><h6 id="option4"><?php echo $res[$PostsNum][6]?></h6></li>
                </ul>

                <h4  class="offersList_cost"><span id="newCost"><?php echo $res[$PostsNum][7]?></span>₽ <span id="oldCost" class="span1"><?php echo $res[$PostsNum][8]?></span><span class="span1">₽</span> </h4>

                <div>
                    <button class="btn1">Записаться</button> 
                    <button class="btn2">Подробнее</button>
                </div>

            </div>
            <img src="img/doctor.png" alt="Доктор">
        </div>
        <div class="offersList_pagination">
            <img src="img/left.png" alt="left"  onclick="doLeft()">
            <p><span id="PostsNum"><?php echo $PostsNum + 1 ?></span><span class="span2">/</span><span id="PostCount" class="span2"><?php echo $allPostsNum?></span></p>
            <img src="img/right.png" alt="right"  onclick="doRight()">
        </div>
    </section>
    <!-- Футер с логом и ссылками -->
    <footer>
      <img src="img/logo2.png" alt="LOGO">
        <div>
            <a href="#">О клинике</a>
            <a href="#">Услуги</a>
            <a href="#">Специалисты</a>
            <a href="#">Цены</a>
            <a href="#">Контакты</a>
        </div>
        <div class="footer_soc">
            <a href="#"><img src="img/inst.png" alt="inst"></a>
            <a href="#"><img src="img/whts.png" alt="whatsup"></a>
            <a href="#"><img src="img/telegram.png" alt="telegram"></a>
        </div>
    </footer>
    <script src="https://unpkg.com/imask"></script>
</body>
</html>

<script>
    var a = <?php echo $json ?>
    
    function doLeft(){
        let PostsNum = document.getElementById("PostsNum");
        let text = PostsNum.innerHTML; 
        if(parseInt(text)>1){
            let plusStep = parseInt(text)-1;
            console.log(plusStep);
            PostsNum.innerHTML = plusStep
          
            document.getElementById("title").innerHTML = a[plusStep-1][1];
            document.getElementById("forWho").innerHTML = a[plusStep-1][2];

            document.getElementById("option1").innerHTML = a[plusStep-1][3];
            document.getElementById("option2").innerHTML = a[plusStep-1][4];
            document.getElementById("option3").innerHTML = a[plusStep-1][5];
            document.getElementById("option4").innerHTML = a[plusStep-1][6];

            document.getElementById("newCost").innerHTML = a[plusStep-1][7];
            document.getElementById("oldCost").innerHTML = a[plusStep-1][8];
        }
       
       
    }
    function doRight(){
        let PostsNum = document.getElementById("PostsNum");
        let text = PostsNum.innerHTML; 

        let PostCount = document.getElementById("PostCount");
        let text2 = PostCount.innerHTML; 

        if(parseInt(text2)>parseInt(text)){
            let plusStep = parseInt(text)+1;
            PostsNum.innerHTML = plusStep

            document.getElementById("title").innerHTML = a[plusStep-1][1];
            document.getElementById("forWho").innerHTML = a[plusStep-1][2];

            document.getElementById("option1").innerHTML = a[plusStep-1][3];
            document.getElementById("option2").innerHTML = a[plusStep-1][4];
            document.getElementById("option3").innerHTML = a[plusStep-1][5];
            document.getElementById("option4").innerHTML = a[plusStep-1][6];

            document.getElementById("newCost").innerHTML = a[plusStep-1][7];
            document.getElementById("oldCost").innerHTML = a[plusStep-1][8];
        }

    }

    function openBurger(){

        document.getElementById("openBurger").classList = "noneBurger"
        document.getElementById("menu").classList = ""
        document.getElementById("closeBurger").classList = ""
    }
    function closeBurger(){

        document.getElementById("openBurger").classList = ""
        document.getElementById("menu").classList = "noneBurger"
        document.getElementById("closeBurger").classList = "noneBurger"
    }
    function doAppointment(){
        document.getElementById("appointment").classList= "appointment"
    }
    function closeAppoint(){
        document.getElementById("appointment").classList = "appointment noneBurger"
    }

    var element = document.getElementById('phone_input');
    var maskOptions = {
    mask: '+{7}(000)000-00-00',
    lazy: false
    };
    var mask = IMask(element, maskOptions);

</script>
