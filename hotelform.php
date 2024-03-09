<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisu Hotel</title>
</head>
<style>
    body{
        margin: 0;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
        font-family: sans-serif;
        
    }
    .img{
        position: relative;
    }
    .overlay{
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            color:white;
            height: 350px;
            text-align: center;
            transition: 0.6s;
            list-style: none;
            line-height: 50px;
            overflow: hidden;    
        }
    .overlay h1{
            margin-top: 100px;
            font-size: 40px;
            font-weight: 300;
        }
        .title h1{
            text-align: center;
        }
        .container{
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 5px 10px black;
            margin: 30px;
            padding: 25px 30px;
        }
        .input{
            display:flex ;
            flex-wrap: wrap;
            justify-content: space-evenly;
            margin: 20px 10 12px 10;
        

        }
        .subinput{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            margin: 20px 10 12px 10;
            
        }
        .input .inputone{
            margin-bottom: 15px;
            width: calc(100% / 2 - 10px);

        }
        .subinput .inputone{
            margin-bottom: 15px;
            width: calc(100% / 2 - 10px);

        }
        .input span{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            padding-top: 5px;
        }
        input{
            height: 15px;
            width: 90%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
            

        }
        
            .button input{
            height: 100%;
            width: 95%;
            border-radius: 5px;
            border: none;
            color: #080808;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);

          }
          .button input:hover{
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);

        }
        
</style>
<body>
    <div class="container">
        <div class="img">
            <img src="images/hero1.jpg" alt="" srcset="" style="height: 450px;width: 100%;">
            <div class="overlay">
                <h1>Aisu Hotel</h1>
                </div>
        </div>
        <div class="mainform">
            <div class="title"><h1>Hotel Booking Form</h1></div>

            <div class="form">
                <form action="regi.php" method="post">
                <div class="input">
                    <div class="inputone">
                        <span>Full Name</span>
                        <input type="text" placeholder="Enter Your Full Name" name="name" required>
                    </div>
                    <div class="inputone">
                        <span>Address</span>
                        <input type="text" placeholder="Enter Your Address" name="addr" required>
                    </div>
                    <div class="inputone">
                        <span>Phone Number</span>
                        <input type="text" placeholder="Enter Your Phone Number" name="phone" required>
                    </div>
                    <div class="inputone">
                        <span>Email</span>
                        <input type="email" placeholder="Enter Your Email" name="email" required>
                    </div></div>
                    <div class="subinput">
                    <div class="inputone">
                        <span>Check-in Date</span>
                        <input type="date" name="checkindate" required>
                    </div>
                    <div class="inputone">
                        <span>Check-in Time</span>
                        <input type="time" name="checkintime" required>
                    </div>
                    <div class="inputone">
                        <span>Check-Out Date</span>
                        <input type="date" name="checkoutdate" required>
                    </div>
                    <div class="inputone" >
                        <span>Check-Out Time</span>
                        <input type="time" name="checkouttime" required>
                    </div>
                </div>
                </div>

             <div class="button">
                <input type="submit"  value="Submit" >
             </div>










                </form>
            </div>
        </div>
    </div>
</body>
</html>