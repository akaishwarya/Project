<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0%;
        padding: 0%;
        font-family: 'sans-serif';

    }

    header {
        background-color: white;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px 0px;
        box-shadow: 0 0 15px rgb(82, 81, 81);
    }

    nav a {
        font-size: 20px;
        padding-left: 49px;
    }
    

    var {
        font-size: 35px;
        font-weight: bold;
        padding-right: 100px;
    }

    a {
        padding-left: 20px;
        text-decoration: none;
        text-align: center;
        color: black;
    }
    nav a:hover{
        color:#dfa974;
    }


    .event {
        margin-top: 100px;
        text-align: center;
    }

    .event span {
        color: gray;
    }

    .blogimage1 {
        justify-content: center;
        display: flex;
        flex-wrap: wrap;
    }

    .blogimage2 {
        /* justify-content: ; */
        display: flex;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .bimg1cont {
        position: absolute;
        bottom: 3px;
        left: 15px;
        right: 0;
        width: 100%;
        color: white;
        height: 150px;
        text-align: left;
        transition: 0.6s;
        list-style: none;
        line-height: 20px;
        overflow: hidden;

    }

    cite {
        color: rgb(167, 90, 36);
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 18px;
        letter-spacing: 1px;
    }

    .bimg1 {
        margin: 5px 15px;
        position: relative;
        width: 26%;
    }

    .bimg2 {
        margin: 0px 10px;
        position: relative;

    }

    .img {
        height: 480px;
        width: 350px;
        display: block;
        border-radius: 5px;
        margin-top: 15px;

    }

    .bimg1cont span {
        color: white;
        padding: 6px;
        background-color: sandybrown;

    }





    .footer-footer {
        background: #303957;


        margin-top: 150px;
    }

    .footer {
        display: flex;
        padding-bottom: 60px;
        color: white;
        margin-top: 60px;
        justify-content: space-evenly;


    }

    .footer h3 {
        color: #DFA974;
        font-weight: 300px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: medium;
    }

    .footerone {
        text-align: left;
        margin-top: 10px
    }

    .footerone h2 {
        color: white;
        font-size: 35px;
        font-weight: 250px;
    }

    .footertwo {
        padding-top: 35px;
        text-align: left;
    }

    .footerthree {
        padding-top: 35px;
        text-align: left;
    }

    .footer p {
        font-size: 15px;
        font-weight: 190px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .iconsima {
        height: 30px;

    }

    .femail {
        background-color: gray;
        outline: none;
        height: 20px;
        border: 1px solid gray;
        color: white;
        padding: 8px;

    }

    .iconsimag {
        height: 38px;
        width: 37px;
    }

    .mainicon {
        display: flex;
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <header>
                <nav>
                    <var>Aisu.</var><a href="index.php" style="padding-left: 450px;">Home</a>
                    <a href="room.php">Rooms</a><a href="about.php">About Us</a><a href="#">News</a>
                    <a href="contact.php">Contact</a>
                </nav>
            </header>
        </div>
        <div class="event">
            <h1>Blog</h1>
            <h4>HOME > <span>Blog Grid</span></h4>
            <div class="blogimage1">
                <div class="bimg1">
                    <img src="images/blog-1.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>TRAVEL TRIP</span></p>
                        <h2>Tremblant In Canada</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
                <div class="bimg1">
                    <img src="images/blog-2.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>CAMPING</span></p>
                        <h2>Choosing A static Caravan</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
                <div class="bimg1">
                    <img src="images/blog-3.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>Event</span></p>
                        <h2>Copper Canyon</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
                <div class="bimg1">
                    <img src="images/blog-4.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>TRIVAGO</span></p>
                        <h2>Tremblant In Canada</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
                <div class="bimg1">
                    <img src="images/blog-5.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>CAMPING</span></p>
                        <h2>Choosing A static Caravan</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
                <div class="bimg1">
                    <img src="images/blog-6.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>TRAVEL TRIP</span></p>
                        <h2>Copper Canyon</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
                <div class="bimg1">
                    <img src="images/blog-7.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>TRAVEL TRIP</span></p>
                        <h2>Tremblant In Canada</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
                <div class="bimg1">
                    <img src="images/blog-8.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>EVENT & TRAVEL</span></p>
                        <h2>Choosing A static Caravan</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
                <div class="bimg1">
                    <img src="images/blog-9.jpg" alt="" srcset="" class="img">
                    <div class="bimg1cont">

                        <p><span>CAMPING</span></p>
                        <h2>Copper Canyon</h2>
                        <p><i>19TH MAY,2019</i></p>
                    </div>
                </div>
            </div>






            <div class="footer-footer">

                <div class="footer">
                    <div class="footerone">
                        <h2>Aisu.</h2>
                        <p>We inspire and reac millions of travelers</p>
                        <p>across 90 local websites</p>
                        <img src="images/icons8-whatsapp-48.png" alt="" srcset="" class="iconsima">
                        <img src="images/icons8-facebook-48.png" alt="" srcset="" class="iconsima">
                        <img src="images/icons8-youtube-94.png" alt="" srcset="" class="iconsima">
                        <img src="images/icons8-twitter-48.png" alt="" srcset="" class="iconsima">
                        <img src="images/icons8-instagram-48.png" alt="" srcset="" class="iconsima">

                    </div>
                    <div class="footerone">
                        <h3>CONTACT US</h3>
                        <p>(12)345 67890</p>
                        <p> info.colorlib@gmail.com</p>
                        <p>856 Cordia Extension Apt.356,Lake,</p>
                        <p>United State </p>
                        </p>
                    </div>
                    <div class="footerone">
                        <h3>NEW LATEST</h3>
                        <p>Get the latest updates and offers</p>
                        <div class="mainicon">
                            <div class="submail">
                                <input type="email" value="Email" class="femail">
                            </div>
                            <div class="subicon"> <img src="images/icons8-telegram-50 (1).png" class="iconsimag">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


</body>

</html>