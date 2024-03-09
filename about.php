<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

    nav a{
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

    .main-about {
        margin-top: 70px;
    }

    .mainabout {
        display: flex;
        margin-top: 80px;

    }

    .about {
        text-align: center;
    }

    .aboutone {
        margin-left: 100px;
    }

    .aboutone pre {
        color: gray;
        font-size: 15px;
    }

    .about span {
        color: gray;
    }

    .abouttwo {
        margin-left: 180px;
    }

    .center {
        position: relative;
        display: flex;
        justify-content: center;
        margin-top: 150px;
    }

    .contantone {
        position: absolute;
        bottom: 3px;
        left: 15px;
        right: 0;
        width: 100%;
        color: rgb(253, 251, 251);
        height: 100px;
        text-align: center;
        transition: 0.6s;
        list-style: none;
        line-height: 20px;
        overflow: hidden;
    }

    .one {
        position: relative;
        margin: 0 5px;
    }

    .img {
        height: 450px;
        width: 350px;
        margin: 10px 10px;
    }

    .text {
        text-align: center;
        margin-top: 150px;
    }

    .text p {
        font-size: 45px;
        margin-top: 2px;

    }

    .text h5 {
        color: rgb(196, 136, 57);

    }

    .gallerybody {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        padding: 20px;
        gap: 20px;

    }

    .gallery1 {
        position: relative;
        margin-bottom: 20px;
    }

    .g1 {
        display: block;
        width: 580px;
        height: 300px;
        border-radius: 4px;
        object-fit: cover;
    }

    .g1cont {
        width: 580px;
        height: 300px;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgb(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0;
        transition: 0.3s;
    }

    .g1cont p {
        font-size: 25px;
        color: white;
    }

    .g1cont:hover {
        opacity: 1;
    }

    .gall2 {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .gallery2 {
        position: relative;
    }

    .g2 {
        display: block;
        border-radius: 4px;
        margin-top: 15px;
    }

    .g2cont {
        width: 279px;
        height: 279px;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgb(0, 0, 0, 0.6);

        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0;
        margin-top: 15px;

    }

    .g2cont p {
        font-size: 25px;
        color: white;
    }

    .g2cont:hover {
        opacity: 1;
    }

    .gallery3 {
        position: relative;
    }

    .g3 {
        display: block;
        width: 480px;
        height: 620px;
        object-fit: cover;
        border-radius: 4px;
    }

    .g3cont {
        width: 480px;
        height: 620px;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgb(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0;
        transition: 0.3s;
    }

    .g3cont p {
        font-size: 25px;
        color: white;
    }

    .g3cont:hover {
        opacity: 3;
    }

    .Services {
        margin-top: 100px;

    }

    iframe {
        height: 680px;
        width: 1340px;
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
    <?php

    @$nameone = $_POST['user'];
    @$emailone = $_POST['email'];
    @$message = $_POST['messages'];


    $con = mysqli_connect("localhost", "root", "", "hotelbooking");
    $sql = "INSERT INTO feedback(name,email,message)
 value( '$nameone','$emailone','$message' )";

    $r = mysqli_query($con, $sql);
    ?>

    <div class="container">
        <div class="header">
            <header>
                <nav>
                    <var>Aisu.</var><a href="index.php" style="padding-left: 450px;">Home</a>
                    <a href="room.php">Rooms</a><a href="#">About Us</a><a href="news.php">News</a>
                    <a href="contact.php">Contact</a>
                </nav>
            </header>
        </div>
        <div class="main-about">
            <div class="about">
                <h1>About Us</h1>
                <p>HOME > <span>About Us</span></p>
            </div>
        </div>
        <div class="mainabout">

            <div class="aboutone">
                <h1>Welcome To Aisu.</h1>
                <pre>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut ullam 
architecto facere atqu beatae nesciunt minima modi,Lorem ipsum dolor
sit amet consectetur adipisicing elit. Officia,veniam quas corporis
doloremque ad dicta aliquid.</pre>


            </div>
            <div class="abouttwo">
                <p><i class="fas fa-check" style="color:rgb(240, 172, 112);"></i>20% Off On Accommodation.</p>
                <p><i class="fas fa-check" style="color:rgb(240, 172, 112);"></i>Complimentary Daily Breakfast.</p>
                <p><i class="fas fa-check " style="color:rgb(240, 172, 112);"></i>3 pcs Laundry Per Day.</p>
                <p><i class="fas fa-check " style="color:rgb(240, 172, 112);"></i> Free Wifi.</p>
                <p><i class="fas fa-check " style="color:rgb(240, 172, 112);"></i>Discount 20% On F & B.</p>



            </div>
        </div>
        <div class="center">
            <div class="one">
                <img src="images/about-2.jpg" alt="" srcset="" class="img">
                <div class="contantone">
                    <h2>Restaurants Services</h2>
                </div>
            </div>
            <div class="one">
                <img src="images/about-1.jpg" alt="" srcset="" class="img">
                <div class="contantone">
                    <h2>Travel Camping</h2>
                </div>
            </div>
            <div class="one">
                <img src="images/blog-1.jpg" alt="" srcset="" class="img">
                <div class="contantone">
                    <h2>Event & Party</h2>
                </div>
            </div>
        </div>
        <div class="Services">
            <div class="sub-services">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/EzKkl64rRbM?si=52y82BSyiDK79pjb"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        </div>

        <div class="main-gallery">
            <div class="text">
                <h5>OUR GALLERY</h5>
                <p>Discover Our Work</p>
            </div>
            <div class="gallerybody">
                <div class="gallerycontainer">
                    <div class="gallery1">
                        <img src="images/gallery-1.jpg" alt="" srcset="" class="g1">
                        <div class="g1cont">
                            <p>Room Luxury</p>
                        </div>
                    </div>
                    <div class="gall2">
                        <div class="gallery2">
                            <img src="images/gallery-3.jpg" alt="" srcset="" class="g2">
                            <div class="g2cont">
                                <p>Room Luxury</p>
                            </div>
                        </div>
                        <div class="gallery2">
                            <img src="images/gallery-4.jpg" alt="" srcset="" class="g2">
                            <div class="g2cont">
                                <p>Room Luxury</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery3">
                    <img src="images/gallery-2.jpg" alt="" srcset="" class="g3">
                    <div class="g3cont">
                        <p>Room Luxury</p>
                    </div>
                </div>
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