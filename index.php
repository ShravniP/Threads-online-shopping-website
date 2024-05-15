<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_index.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thread login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader">
            <img src="myntra clone/html/newlogo2.png" alt="Loader"> <!-- Replace with your loader image -->
        </div>
    </div>

    <header>
        <div class="mobile_navbar_logo">
            <li onclick="showsidebar()"><a href="#"> <span class="material-symbols-outlined">
                        menu
                    </span></a></li>

            <h4>Myntra</h4>
        </div>

        <div class="mainlogo"><a href="index.html"><img src="newlogo.png"></a></div>
        <div class="mobile_sidebar">
            <div class="profile_div">

                <li onclick="closesidebar()"><a href="#"><span class="material-symbols-outlined " id="close_icon">
                            close
                        </span></a></li>
            </div>
            <div class="menu_side">
                <ul class="sidebar">

                    <li><a href="#">men</a></li>
                    <li><a href="#">women</a></li>
                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                </ul>
            </div>
            <div class="other_services">other services</div>
        </div>

    </header>

    <form action="loginemail.php" method="POST" class="loginform">
        <img src="shopping_girl.png">
        <div class="logininterface">
            <div class="loglogo">
                <a href="home.html"><img src="myntra clone/html/newlogo2.png"></a>
            </div>
            <div class="loghead">
                <h2>login</h2>
            </div>
            <div class="loginput">
                <input type="text" id="email username" name="email" placeholder="Enter email"><br>
            </div>
            <div class="logsubmit">
                <input type="submit" value="SEND OTP" name="sendotp" onclick="sendUsername()">
            </div><br>
            <h4>Don't have an account?<a href="register.php">Register</a></h4>
        </div>
    </form>

    <script>
        function sendUsername() {
            var username = document.getElementById("username").value;
            $.ajax({
                type: "POST",
                url: "home.php",
                data: { username: username },
                success: function (response) {
                    $('#result').html(response);
                }
            });
        }
    </script>
    <script>
        window.addEventListener("load", function () {
            const body = document.querySelector("body");
            setTimeout(function () {
                body.classList.add("loaded");
                $('.loginform').addClass('slide');
            }, 2000); // Wait for 2 seconds before hiding the loading screen
        });
    </script>

</body>

</html>
