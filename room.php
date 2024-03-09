<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/v4-shims.min.css">

    <title>Document</title>
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


    .main-rooms {
        text-align: center;
    }

    .rooms span {
        color: gray;
    }

    .details {
        display: flex;
    }

    .detailsone {
        color: gray;
    }

    .detailstwo {
        margin-left: 60px;
        color: gray;
    }

    img {
        height: 300px;
        width: 400px;
    }

    .box span {
        color: #d47c23;
        font-size: 30px;
        font-weight: 300px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .box a {
        border-bottom: 2px solid sandybrown;
        padding: 2px;
        margin-left: 10px;

    }

    .box {
        margin: 15px;
        border-width: 1px;
        width: 400px;
        display: inline-block;
        border-color: whitesmoke;
        border-style: solid;
        text-align: left;
        height: 640px;
    }

    .button {
        margin-top: 50px;
    }

    .one {
        border-width: 1px;
        display: inline;
        border-color: rgb(212, 211, 211);
        border-style: solid;
        text-align: center;
        padding: 4px;
        cursor: pointer;
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
        width: 30px;
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


    @$checkin = $_POST['in'];
    @$checkout = $_POST['out'];
    @$g = $_POST['guest'];
    @$room = $_POST['room'];

    $con = mysqli_connect("localhost", "root", "", "hotelbooking");
    $sql = "INSERT INTO registerdetails(checkin,checkout,guest,rooms)
    value( '$checkin','$checkout','$g','$room' )";

    $r = mysqli_query($con, $sql);


    ?>

    <div class="container">
        <div class="header">
            <header>
                <nav>
                    <var>Aisu.</var><a href="index.php" style="padding-left: 450px;">Home</a>
                    <a href="#">Rooms</a><a href="about.php">About Us</a><a href="news.php">News</a>
                    <a href="contact.php">Contact</a>
                </nav>
            </header>
        </div>

        <div class="main-rooms">
            <div class="rooms">
                <h1>Our Rooms</h1>
                <h4>HOME > <span>Rooms</span></h4>
            </div>
            <div class="subroom">
                <div class="box">
                    <img src="images/gallery-3.jpg" alt="" srcset="" class="img">
                    <h2>Premium King Room</h2>
                    <span>159$</span>/Pernight
                    <div class="details">
                        <div class="detailsone">
                            <p>Size: </p>
                            <p> Capacity: </p>
                            <p>Bad: </p>
                            <p>Services: </p>
                        </div>
                        <div class="detailstwo">
                            <p>30 ft</p>
                            <p>Max person 3</p>
                            <p>King Bed</p>
                            <p>Wifi,Television,</p>
                            <p>Bathroom...</p>
                        </div>
                    </div>
                    <a href="hotelform.php">Reserve</a>

                </div>
                <div class="box">
                    <img src="images/gallery-4.jpg" alt="" srcset="" class="img">
                    <h2>Deluxe Room</h2>
                    <span>159$</span>/Pernight
                    <div class="details">
                        <div class="detailsone">
                            <p>Size: </p>
                            <p> Capacity: </p>
                            <p>Bad: </p>
                            <p>Services: </p>
                        </div>
                        <div class="detailstwo">
                            <p>30 ft</p>
                            <p>Max person 5</p>
                            <p>King Bed</p>
                            <p>Wifi,Television,</p>
                            <p>Bathroom...</p>
                        </div>
                    </div>
                    <a href="hotelform.php">Reserve</a>
                </div>
                <div class="box">
                    <img src="images/gallery-1.jpg" alt="" srcset="" class="img">
                    <h2>Double Room</h2>
                    <span>159$</span>/Pernight
                    <div class="details">
                        <div class="detailsone">
                            <p>Size: </p>
                            <p> Capacity: </p>
                            <p>Bad: </p>
                            <p>Services: </p>
                        </div>
                        <div class="detailstwo">
                            <p>30 ft</p>
                            <p>Max person 2</p>
                            <p>King Bed</p>
                            <p>Wifi,Television,</p>
                            <p>Bathroom...</p>
                        </div>
                    </div>
                    <a href="hotelform.php">Reserve</a>
                </div>
                <div class="box">
                    <img src="images/blog-wide.jpg" alt="" srcset="" class="img">
                    <h2>Luxury Room</h2>
                    <span>159$</span>/Pernight
                    <div class="details">
                        <div class="detailsone">
                            <p>Size: </p>
                            <p> Capacity: </p>
                            <p>Bad: </p>
                            <p>Services: </p>
                        </div>
                        <div class="detailstwo">
                            <p>30 ft</p>
                            <p>Max person 1</p>
                            <p>King Bed</p>
                            <p>Wifi,Television,</p>
                            <p>Bathroom...</p>
                        </div>
                    </div>
                    <a href="hotelform.php">Reserve</a>
                </div>
                <div class="box">
                    <img src="images/blog-1.jpg" alt="" srcset="" class="img">
                    <h2>Room With View</h2>
                    <span>159$</span>/Pernight
                    <div class="details">
                        <div class="detailsone">
                            <p>Size: </p>
                            <p> Capacity: </p>
                            <p>Bad: </p>
                            <p>Services: </p>
                        </div>
                        <div class="detailstwo">
                            <p>30 ft</p>
                            <p>Max person 1</p>
                            <p>King Bed</p>
                            <p>Wifi,Television,</p>
                            <p>Bathroom...</p>
                        </div>
                    </div>
                    <a href="hotelform.php">Reserve</a>
                </div>

                <div class="box">
                    <img src="images/room-5.jpg" alt="" srcset="" class="img">
                    <h2>Small View</h2>
                    <span>159$</span>/Pernight
                    <div class="details">
                        <div class="detailsone">
                            <p>Size: </p>
                            <p> Capacity: </p>
                            <p>Bad: </p>
                            <p>Services: </p>
                        </div>
                        <div class="detailstwo">
                            <p>30 ft</p>
                            <p>Max person 2</p>
                            <p>King Bed</p>
                            <p>Wifi,Television,</p>
                            <p>Bathroom...</p>
                        </div>
                    </div>
                    <a href="hotelform.php">Reserve</a>
                </div>

            </div>
            <div class="button">
                <div class="subbutton">
                    <div class="one"><a href="#">1</a></div>
                    <div class="one"><a href="#">2</a></div>
                    <div class="one"><a href="#">Next-></a></div>
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
                    <div class="fcheck">
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


</body>

</html>