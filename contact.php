<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">

    <title>Aisu Hotel</title>

</head>
<style>
    body {
        margin: 0%;
        padding: 0%;
        font-family: sans-serif;

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


    .Main-container {
        display: flex;
        justify-content: space-evenly;
        margin-top: 100px;
    }

    .Contact pre {
        color: gray;
    }

    .one {
        color: gray;
    }

    .subcontact {
        display: flex;
    }

    .main-form {
        display: flex;
    }

    .form {
        justify-content: left;

    }

    textarea {
        width: 90%;
        outline: none;
        font-size: 16px;
        height: 150px;
        padding: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
        text-align: left;
        justify-content: end;
        color: gray;
    }

    .subform {
        height: 15px;
        width: 80%;
        color: gray;
        outline: none;
        font-size: 16px;
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
        margin-right: 15px;
    }

    .inputtwo {
        margin-left: 40px;
    }

    .button {

        height: 25px;
        color: white;
        outline: none;
        font-size: 16px;
        padding: 25px;


    }

    .two {
        margin-left: 18px;
    }

    .con {
        display: flex;

    }

    iframe {
        width: 890px;
        margin-left: 280px;
        margin-top: 80px;
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
                    <a href="room.php">Rooms</a><a href="about.php">About Us</a>
                    <a href="news.php">News</a><a href="#">Contact</a>
                </nav>
            </header>
        </div>
        <div class="Main-container">
            <div class="Contact">
                <h1>Contact Info</h1>
                <pre>Lorem ipsum dolor sit amet consectetur adipisicing elit.
Laudantium minus iure vitae sed possimus aut aspernatur
cupiditate magni dolor quidem.</pre>
                <div class="subcontact">
                    <div class="one">
                        <p> Address:</p>
                        <p> Phone:</p>
                        <p> Email:</p>
                        <p> Fax:</p>
                    </div>
                    <div class="two">
                        <p> 856 Cordia Extension Apt.356,lake,US </p>
                        <p> (12)345 67890</p>
                        <p> info.colorlib@gmail.com</p>
                        <p>+(12)345 67890</p>
                    </div>
                    <div></div>
                </div>
            </div>
            <div class="form">
                <div class="main-form">
                    <div class="con">

                        <div class="inputone">
                            <form action="about.php" method="post">
                                <input type="text" name="user" placeholder="Your Name" class="subform" required="">
                        </div>
                        <div class="inputone">
                            <input type="text" name="email" placeholder="Your Email" class="subform" required="">

                        </div>
                    </div>
                </div>
                <div class="sub-form">
                    <textarea name="messages" placeholder="Your Message" id="" cols="30" rows="10"
                        required=""> </textarea>

                </div>

                <div class="button">
                    <a href="index.html"><input type="submit" value="SUBMIT NOW" style="height: 35px;width:40%;color: white;
   border-color: sandybrown;background-color: sandybrown; 
   "></a>
                </div>


            </div>
            </form>
        </div>
    </div>


    <div class="frame">


        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30774488.413952988!2d60.98323666185806!3d19.68487159609673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1707918868607!5m2!1sen!2sin"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
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