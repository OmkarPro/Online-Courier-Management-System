<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .d-block {
            width : 100% !important;
        }
        .slide {
            width : 100% !important;
            height : 100% !important;
            margin : 0px !important;
        }
        .navbar {
            background-color: rgb(202, 218, 174) !important;
        }

        html {
            scroll-behavior: smooth;
        }

        .about-us {
            width: 90%;
            padding: 20px;
            font-size: 30px;
            margin: auto;
            border-radius: 20px;
            box-shadow: 2px 2px 12px 5px black;
            background-color: rgba(229, 225, 157, 0.979);
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .about-us>h1 {
            color: brown;
            margin-top: 30px;
            margin-bottom: 30px;
            letter-spacing: 2px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        .about-us>p {
            /* line-height:1rem; */
            letter-spacing: 1.5px;
            font-family: cursive;
            font-size: 21px;
        }

        footer {
            width: 90%;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            letter-spacing: 2px;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 30px;
            line-height: 34px;
            background-color: wheat;
            margin-left: auto;
            margin-right: auto;
            border-radius: 12px;
            box-shadow: 2px 2px 12px 5px grey;
        }

        footer>img {
            width: 20px;
            height: 20px;
        }

        footer>h1 {
            text-align: center;
            color: black;
        }

        footer>h4 {
            word-spacing: 120px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">A1-Couriers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="userlogin.php">User Login</a>
                        <a class="dropdown-item" href="managerlogin.php">Manager Login</a> 
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item right">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/mask.jpg" alt="Second slide">
                <!-- <h1 class="slide-text">Your HEALTH is our first Priority</h1> -->
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/fastest.jpg" alt="First slide">
                <!-- <h1 class="slide-text">Fastest Courier</h1> -->
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/trustworth.jpg" alt="Third slide">
                <!-- <h1 class="slide-text">Most Trustworth Service</h1> -->
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="about-us" id="about">
        <h1 class="head">Why A1-Couriers Only??🤔</h1>
        <p>
        The A1 Courier Service provides pickup and delivery service six days a week. Our goal is to provide a faster, more cost effective delivery of packages to your clients.The A1 Courier Service can help standardize delivery times.
        </p>
        <br>
        <p>
        A1 Logistic is one of the leading Integrated Service Providers in the logistics. we have become company specializing express delivery service from delivery of documents and parcels to customer all over the world.We provide a wide range of services through air, sea and land routes. Our business philosophy is to offer the best value for money and as such we not only provide the International Courier Services but also the best advisory as well depending upon the requirements of the clients.Here at A1 Logistic we offer an array of services including logistics, freight forwarding, courier, warehousing, re-distribution, merchandise procurement support, import consolidation and express distribution.We specialize in reliable & cost effective International courier service into United Kingdom, United States of America & South Africa directly and rest of the world thru multi networks. whether you want to send a letter or highly urgent equipment you can rely on us to deliver any corner of The World.Air Courier Express - Door to Door Airport to Door Express Airport to Airport General Cargo Export Sea Freight Import Clearance & Deliverys Road Freight
        </p>
        <br>
        <p>
        We can be contacted at contact at couriertrack.in for website related queries.Please note that we are not related to any of the courier services in any way. Couriertrack.in is just an independent web application to help users to track their consignments online. For your queries contact to respective courier company customer care.Couriertrack.in is a quick and easy way to track your parcels though popular courier services in India. You can find details of each courier company at one place and track your parcels at the same place. All product and company names are trademarks™ or registered trademarks® of their respective holders. Use of them does not imply any affiliation with or endorsement by them.
        </p>
    </div>
    <footer class="cont" id="contact">
        <h1> Our Branches</h1><br>
        <h4>Mumbai Pune Chennai Bangalore New-Delhi</h4><br>
        <img src="img/email.jpg">
        E-mail : a1couriers@yahoomail.com / a1couriersservice@email.com<br><br>
        <img src="img/phone.png">
        Phone : +91-7777777777 / +91-6666666666<br><br>
        <img src="img/address.png">
        Address : 203 , 2nd Floor, E-Wing , Hiranandani Complex , Near Thane-Powai Road , Powai(w) , Powai , Mumbai-400001.
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>