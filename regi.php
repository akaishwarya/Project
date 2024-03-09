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


    .Wholecontent {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 5px solid #dfa974;
        border-radius: 20px;
        padding: 30px;
        margin: 20px;
    }

    .cont1 h1 {
        font-size: 35px;
        text-align: center;
    }

    .cont1 b {
        font-size: 25px;
        font-weight: 300;
    }

    .cont2 {
        font-size: 20px;
        width: 750px;
        text-align: center;
    }

    .but button {
        border: 2px solid #dfa974;
        background-color: transparent;
        padding: 10px 0px;
        padding-right: 15px;
        font-size: 15px;
        transition: 0.2s;
    }

    .but button:hover {
        background-color: #dfa974;
    }

    .footer-footer {
        background: #303957;
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

    @$name = $_POST['name'];
    @$address = $_POST['addr'];
    @$phone = $_POST['phone'];
    @$email = $_POST['email'];
    @$checkindate = $_POST['checkindate'];
    @$checkintime = $_POST['checkintime'];
    @$checkoutdate = $_POST['checkoutdate'];
    @$checkouttime = $_POST['checkouttime'];
    $con = mysqli_connect("localhost", "root", "", "hotelbooking");
    $sql = "INSERT INTO bookingdetails(name,address,phoneno,email,indate,intime,outdate,outtime)
 value( '$name','$address','$phone','$email','$checkindate','$checkintime','$checkoutdate','$checkouttime')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<div class='container'>
        <div class='header'>
            <header>
                <nav>
                    <var>Aisu.</var><a href='index.php' style='padding-left: 450px;'>Home</a><a href='room.php'>Rooms</a>
                    <a href='about.php'>About Us</a><a href='news.php'>News</a><a href='contact.php'>Contact</a>
                </nav>
            </header>
        </div>
        <section>
            <div class='Wholecontent'>
                <div class='cont1'>
                    <h1>Conragulation</h1>
                    <b>Your Rooms has Booked Successfully <i class='fas fa-check' style='color:Green;'></i></b>
                </div>
                <div class='cont2'>
                    <p>Thank you for booking at <b>Aisu Luxury Hotel</b>, {$name}! Your reservation is confirmed And
                        Your {$checkindate} to {$checkindate}. Your Phone number is {$phone}. We can't wait to welcome
                        you!</p>
                </div>
                <div class='but'>
                    <button><a href='index.php'>Go To Home page</a></button>
                </div>
            </div>
            <div class='footer-footer'>

                <div class='footer'>
                    <div class='footerone'>
                        <h2>Aisu.</h2>
                        <p>We inspire and reac millions of travelers</p>
                        <p>across 90 local websites</p>
                        <img src='images/icons8-whatsapp-48.png' alt='' srcset='' class='iconsima'>
                        <img src='images/icons8-facebook-48.png' alt='' srcset='' class='iconsima'>
                        <img src='images/icons8-youtube-94.png' alt='' srcset='' class='iconsima'>
                        <img src='images/icons8-twitter-48.png' alt='' srcset='' class='iconsima'>
                        <img src='images/icons8-instagram-48.png' alt='' srcset='' class='iconsima'>

                    </div>
                    <div class='footerone'>
                        <h3>CONTACT US</h3>
                        <p>(12)345 67890</p>
                        <p> info.colorlib@gmail.com</p>
                        <p>856 Cordia Extension Apt.356,Lake,</p>
                        <p>United State </p>
                        </p>
                    </div>
                    <div class='footerone'>
                        <h3>NEW LATEST</h3>
                        <p>Get the latest updates and offers</p>
                        <div class='fcheck'>
                            <div class='mainicon'>
                                <div class='submail'>
                                    <input type='email' value='Email' class='femail'>
                                </div>
                                <div class='subicon'> <img src='images/icons8-telegram-50 (1).png' class='iconsimag'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>";

    } else {
        echo "error";
    }
    ?>

</body>

</html>