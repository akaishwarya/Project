<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/92547711d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Aisu Hotel</title>

</head>
<style>
    body {
        margin: 0%;
        padding: 0%;
        background-repeat: no-repeat;
        font-family: sans-serif;
    }

    header {
        background-color: white;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center; 
        padding: 15px 0px;  
    }

    nav a{
        font-size: 20px;
        padding-left: 49px;
    }
    
    var {
        font-size: 35px;
        font-weight: bold;
        padding-right: 600px;
    }
    
    a {
        padding-left: 20px;
        text-decoration: none;
        text-align: center;
        color: black;
        transition: 0.2s;
    }
    nav a:hover{
        color:#dfa974;
    }

    h1 {
        color: white;
    }

    p {
        color: white;
    }

    .hotel {
        margin-left: 55px;
        margin-top: 75px;

    }

    .hotel a {
        text-decoration: none;
        font-size: 15px;
        color: white;
        border: 1px solid #DFA974;
        padding: 10px;
        margin-top: 10px;
        transition: 0.6s;

    }

    .hotel a:hover {
        color: black;
        background-color: #DFA974;
    }

    h1 {
        font-size: 55px;
    }

    p {
        font-size: 20px;
        font-weight: 400;
    }

    .about {

        padding-top: 190px;
        margin-top: 250px;
        display: flex;
        justify-content: space-around;

    }

    .about em {
        font-size: 28px;
        font-weight: 100;
        padding-bottom: 30px;
    }

    .aboutone {
        text-align: center;
        margin-right: 20px;
        margin-left: 30px;
    }

    .aboutone a {
        text-align: none;
        font-size: 15px;
        border-bottom: 3px solid #DFA974;
        color: black;
        margin-top: 10px;
        transition: 0.6s;
        padding: 10px;
    }

    .aboutone a:hover {
        color: #DFA974;
    }

    .aboutone pre {

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 500px;

        padding-top: 3px;
    }

    .abouttwo {
        justify-content: center;
        margin-right: 30px;

    }

    .abouttwo img {
        height: 380px;
        width: 250px;
        margin: 18px;

    }

    .comimge {
        padding-top: 60px;
    }

    .sertitle {
        text-align: center;
    }

    .serhead h1 {
        color: black;
        font-weight: 100px;
        font-family: garamond, serif;
    }

    .mainservices {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;

    }

    .services i {
        font-size: 30px;
    }

    .services {
        margin: 20px;
        width: 320px;
        padding: 30px;
        display: inline-block;
        transition: 0.6s;
    }

    .services:hover {
        background-color: rgb(187, 96, 32);

    }

    .sertitle {
        margin-top: 100px;
        cursor: pointer;
    }

    .totalroomdetails {
        display: flex;
        margin-top: 40px;
    }

    .main-container {
        margin: 0px 10px;
        position: relative;
        width: 24%;
        /*margin:20px;*/
    }

    .image {
        width: 310px;
        height: 550px;

        display: block;

    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        color: white;
        height: 250px;
        text-align: center;
        transition: 0.6s;
        list-style: none;
        line-height: 50px;
        overflow: hidden;
    }

    .main-container:hover .overlay {
        height: 100%;
    }

    .overlay h1 {
        margin-top: 100px;
        font-size: 40px;
        font-weight: 300;
    }

    .overlay span {
        font-size: 35px;
        color: #91561b;
    }

    .roomdetails {
        display: flex;
        justify-content: space-evenly;
        font-size: 18px;
        gap: 40px;
    }

    .overlay a {
        text-decoration: none;
        color: white;
        border: 2px solid #DFA974;
        margin: 10px;
        font-size: 15px;
        transition: 0.3s;
        padding: 15px;

    }

    .overlay a:hover {
        background-color: #DFA974;
        color: white;
    }

    .main-comment {
        margin-top: 200px;
        text-align: center;
    }

    .subcomment h1 {
        color: black;
        font-weight: 300;
    }

    .subcomment pre {
        font-size: 15px;
        font-weight: 200;
    }

    .event {
        margin-top: 200px;
        text-align: center;
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
        margin-top: 20px;
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
        margin: 0px 10px;
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

    .imgthree {
        height: 480px;
        width: 720px;
        display: block;
        border-radius: 5px;
        margin-top: 15px;

    }

    .bimg1cont span {
        background-color: #DFA974;
        color: white;
        padding: 8px;
        font-size: 12px;
        text-transform: uppercase;
    }

    .bimg1cont p {
        letter-spacing: 2px;
        font-weight: 800;

    }

    .bimg1cont h2 {
        font-size: 25px;
        font-family: italic;
        margin-bottom: 0%;
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

    .footerone p {
        border-radius: 50% solid white;


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

<body background="images/hero1.jpg" width="" height="1400px">
    <div class="container">
        <div class="header">
            <header>
                <nav>
                    <var>Aisu.</var><a href="#">Home</a><a href="room.php">Rooms</a>
                    <a href="about.php">About Us</a><a href="news.php">News</a><a href="contact.php">Contact</a>
                </nav>
            </header>
        </div>
        <div class="center">
            <div class="hotel">
                <pre>
        <h1>Aisu A Luxury
Hotel</h1><p>Here are the best hotel booking sites, including recommendations for 
international travel and for finding low-priced hotel rooms.</p>
</pre><a href="room.php">BOOKING NOW</a>
            </div>
        </div>


        <div class="about">
            <div class="aboutone">
                <cite>ABOUT US</cite>
                <pre>
        <em>INTERCONTINENTAL LA 
        WESTLAKE HOTEL</em> <br> <br>
        Aisu.com is a leading online accommodation site.We're
     passionate about travel.Every day,We inspire and reach millions 
    of travelers across 90 local websites in 41 languages.

            So when it comes to booking the perfect hotel, vacation rental,resort,
            apartment,guest house,or tree house,we've got you covered.
        </pre>
                <a href="#">READ MORE</a>

            </div>
            <div class="abouttwo">
                <img src="images/about-1.jpg" alt="about-1">
                <img src="images/about-2.jpg" alt="about-1">


            </div>
        </div>
        <div class="sertitle"><cite>WHAT WE DO</cite>
            <div class="serhead">
                <h1>Discover Our Services</h1>
            </div>

            <div class="mainservices">
                <div class="services">
                    <i class="fas fa-plane"></i>
                    <h3>Travel Plan</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse? Hic sapiente maxime fugit eveniet
                    recusandae aperiam! Cum.
                </div>
                <div class="services">
                    <img src="">
                    <i class="fas fa-utensils"></i>
                    <h3>Catering services</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse? Hic sapiente maxime fugit eveniet
                    recusandae aperiam! Cum.
                </div>
                <div class="services">
                    <img src="">
                    <i class="fas fa-bed"></i>
                    <h3>Babysitting</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse? Hic sapiente maxime fugit eveniet
                    recusandae aperiam! cum.
                </div>
                <div class="services">
                    <img src="">
                    <i class="fas fa-tshirt"></i>
                    <h3>Laundry</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse? Hic sapiente maxime fugit eveniet
                    recusandae aperiam! Cum.
                </div>
                <div class="services">
                    <img src="">
                    <i class="fas fa-clock"></i>
                    <h3>Hire Driver</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse? Hic sapiente maxime fugit eveniet
                    recusandae aperiam! Cum.
                </div>
                <div class="services">
                    <img src="">
                    <i class="fas fa-cocktail"></i>
                    <h3>Bar & Drink</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In, esse? Hic sapiente maxime fugit eveniet
                    recusandae aperiam! Cum.

                </div>
            </div>
        </div>
    </div>
    <div class="totalroomdetails">


        <div class="main-container">
            <img src="images/gallery-3.jpg" alt="" srcset="" height="550px" width="313px" class="image">
            <div class="overlay">
                <h1>Double Room</h1>
                <p><span>199$</span>pernight</p>
                <div class="roomdetails">
                    <div class="rode1">
                        <p1>Size:</p1>
                        <p1>Capacity:</p1>
                        <p1>Beds:</p1>
                        <p1>Service:</p1>
                    </div>
                    <div class="rode2">
                        <p1>30Ft</p1>
                        <p1>Max Person 5</p1>
                        <p1>Kings Beds</p1>
                        <p1>Wifi,Teleivision <br>Bathroom</p1>
                    </div>
                </div>
                <a href="room.php" type="button">More Details</a>
            </div>
        </div>
        <div class="main-container">
            <img src="images/gallery-1.jpg" alt="" srcset="" class="image" height="550px" width="313px">
            <div class="overlay">
                <h1>Premium King</h1>
                <p><span>159$</span>pernight</p>
                <div class="roomdetails">
                    <div class="rode1">
                        <p1>Size:</p1>
                        <p1>Capacity:</p1>
                        <p1>Beds:</p1>
                        <p1>Service:</p1>
                    </div>
                    <div class="rode2">
                        <p1>30Ft</p1>
                        <p1>Max Person 5</p1>
                        <p1>Kings Beds</p1>
                        <p1>Wifi,Teleivision <br>Bathroom</p1>
                    </div>
                </div>
                <a href="room.php" type="button">More Details</a>
            </div>
        </div>
        <div class="main-container">
            <img src="images/blog-6.jpg" alt="" srcset="" height="550px" width="313px" class="image">
            <div class="overlay">
                <h1>Deluxe Room</h1>
                <p><span>198$</span>pernight</p>
                <div class="roomdetails">
                    <div class="rode1">
                        <p1>Size:</p1>
                        <p1>Capacity:</p1>
                        <p1>Beds:</p1>
                        <p1>Service:</p1>
                    </div>
                    <div class="rode2">
                        <p1>30Ft</p1>
                        <p1>Max Person 5</p1>
                        <p1>Kings Beds</p1>
                        <p1>Wifi,Teleivision <br>Bathroom</p1>
                    </div>
                </div>
                <a href="room.php" type="button">More Details</a>
            </div>
        </div>

        <div class="main-container">
            <img src="images/gallery-4.jpg" alt="" srcset="" height="550px" width="313px" class="image">
            <div class="overlay">
                <h1>Family Room</h1>
                <p><span>299$</span>pernight</p>
                <div class="roomdetails">
                    <div class="rode1">
                        <p1>Size:</p1>
                        <p1>Capacity:</p1>
                        <p1>Beds:</p1>
                        <p1>Service:</p1>
                    </div>
                    <div class="rode2">
                        <p1>30Ft</p1>
                        <p1>Max Person 5</p1>
                        <p1>Kings Beds</p1>
                        <p1>Wifi,Teleivision <br>Bathroom</p1>
                    </div>
                </div>
                <a href="room.php" type="button">More Details</a>
            </div>

        </div>
    </div>
    <div class="main-comment">
        <div class="subcomment">
            <cite>TESTMONIALS</cite>
            <h1>What Customers Say?</h1>
            <pre>After a Construction Project took longer than expected.my husband,my daughter and i 
 needed a place to stay for a few nights. As a Chicago resident,we know a lot about our 
  city,neighborhood and the types of housing options available and abosolutely love our
 vacation at Aisu Hotel.
                </pre>
            <i class="fas fa-star" style="color: #FFD43B;"></i>
            <i class="fas fa-star" style="color: #FFD43B;"></i>
            <i class="fas fa-star" style="color: #FFD43B;"></i>
            <i class="fas fa-star" style="color: #FFD43B;"></i>
            <i class="fas fa-star-half-alt" style="color:#FFD43B;"></i>
            <city>-Alexander Vasquez</city>
            <br> <img src="images/testimonial-logo.png" alt="" srcset="" class="comimge">
        </div>
    </div>
    <div class="event">
        <cite>HOTEL NEWS</cite>
        <h2>Our Blog & Event</h2>
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

            <div class="bimg2">
                <img src="images/blog-wide.jpg" alt="" srcset="" class="imgthree">
                <div class="bimg1cont">

                    <p><span>Event</span></p>
                    <h2>Trip To Iqaluit In Nunavut A Canadian Arctic City</h2>
                    <p><i>19TH MAY,2019</i></p>
                </div>
            </div>
            <div class="bimg1">
                <img src="images/blog-10.jpg" alt="" srcset="" class="img">
                <div class="bimg1cont">

                    <p><span>TRAVEL</span></p>
                    <h2>Traveling To Barcelona</h2>
                    <p><i>19TH MAY,2019</i></p>
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

    </div>

    </div>
</body>

</html>