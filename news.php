<?php 

    session_start();
    require_once 'menubar.html';
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stream</title>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="news_css.css">

</head>

<body class="bg">

    <section class="body-container">
        <div class="bc-menu">
            <h3>หมวดหมู่สินค้า</h3>
            <ul>
                <li><a href="#">บัตรเติมเงิน/บัตรเติมเกม</a></li>
                <li><a href="#">คีย์เกม/ไอเทมในเกม</a></li>
                <li><a href="#">ไอดีเกม มือถือ/PC</a></li>
                <li><a href="#">โปรแกรม</a></li>
            </ul>
        </div>


        <div class="bc-show">
            <a href="https://www.beartai.com/review/games/912461" class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/godofwar.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>God of War</h5>
            </a>

            <a href="https://www.gamefever.co/%E0%B8%A3%E0%B8%B5%E0%B8%A7%E0%B8%B4%E0%B8%A7-Dying-Light-2-Stay-Human" class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/Dying Light 2 Stay Human.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>Dying Light 2 Stay Human</h5>
            </a>

            <a href="https://www.gamingdose.com/review/elden-ring/" class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/ELDEN RING.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>ELDEN RING</h5>
            </a>

            <a href="https://www.4gamers.co.th/news/detail/3232/party-animals-heartrocker-hrk-review-games-free-demo-on-steam-download" class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/Party Animals.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>Party Animals</h5>
            </a>

            <a href="https://www.beartai.com/news/game-news/1076115" class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/Hollow Knight.jpg">
                </div>
                <p>[News] เกมใหม่</p>
                <h5>Hollow Knight: Silksong</h5>
            </a>

            <a href="https://www.compgamer.com/mainpage/166728" class="bc-show-items">
                <div class="bc-show-items-img">
                    <img src="img/The King of Fighters XV.jpg">
                </div>
                <p>[Review] รีวิวเกม</p>
                <h5>The King of Fighters XV</h5>
            </a>
        </div>
    </section>



    <footer>

        <div class="footer-content">
            <h3>code game sama</h3>
            <p>ขอบคุณสำหรับการสั่งซื้อ เราจะปรับปรุงให้ดียิ่งขึ้นไปอีก
                ก่อนจากกันไปอย่าลืมฝากติดตามและข่าวสารผ่าน<br>Fanpage : Arthip Sama Shop - รับเติมเกม Steam ราคาถูก
                <br>ด้วยนะครับ ขอบคุณคร้าบบบ
            </p>

            <ul class="socials">
                <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li> <a href="#"><i class="fa fa-youtube"></i></a></li>
                <li> <a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <p>copyright &copy;2022 codeArthipSama. designed by <span>ArthipSama</span></p>
        </div>
    </footer>

    <a class="btn-top" href="#"> <i class="fa-solid fa-arrow-up"></i> </a>
</body>

</html>