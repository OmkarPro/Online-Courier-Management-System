<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("back.jpg");
        }

        h2 {
            width: 500px;
            /* margin-left: auto;
            margin-right: auto; */
            margin-top: 40px;
            text-transform: uppercase;
            text-decoration: underline;
        }

        /* Full-width input fields */
        input[type=text],
        input[type=password] {
            width: 86%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .special {
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 42px;
            width: 400px;
            margin-top: 30px;
            /* margin-left: 520px;*/
            margin-right: 130px;
        }

        .special-home {
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 40px;
            width: 400px;
            margin-top: 30px;
            /* margin-left: 520px; */
            margin-right: auto;
            background-color: orange;
        }

        .special-home>a {
            /* font-size:40px; */
            text-decoration: none;
            color: gray;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 20%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

         .eye {
          /* margin-right:10%; */
          /*position:absolute;*/
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <h2>Login To the Portal from Here</h2>

    <button class="special" name="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    <button class="special-home" style="width:auto;"><a href="index.php">Home</a></button>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="userinfo.php" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img/loginimage.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <i class="fa fa-envelope-o"> </i>
                <input type="text" placeholder="Enter Username" name="user_id" required>

                <label for="psw"><b>Password</b></label>
                <i class="fa fa-key"> </i>
                <input type="password" placeholder="Enter Password" name="Password" required>
                <span class="eye">
                <i class="fa fa-eye"> </i>
                <i class="fa fa-eye-slash"> </i>
              </span>
                <button type="submit">Login</button>
                Don't have an account <a href = "register.php">Register Here</a>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>
