<?php
     include("config.php");
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
   
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
        <script>
            function showsidebar() {
                const sidebar = document.querySelector('.mobile_sidebar')
                sidebar.style.transform = 'translateX(0%)'
                sidebar.style.transition = 'all 0.2s linear'
            }
            function closesidebar() {
                const sidebar = document.querySelector('.mobile_sidebar')

                sidebar.style.transform = 'translateX(-100%)'
            }
        </script>
        <div class="mainlogo"><a href="index.html"><img src="newlogo.png"></a></div>
       
       
       
       
           
           
          
        </div>
    </header>
    <section class="register_section">
    <div class="shopping_girl_img">
        <img src="fasion_women_of_delivery_form.avif">
    </div>
    <div class="register_form">
        <div class="inner_form">
    <form action="send_email.php" method="POST">
    <img src="myntra clone/html/newlogo2.png"><br>
    <input type="text" name="fname" placeholder="First Name" required><br>
    <input type="text" name="lname" placeholder="Last Name" required><br>
    <input type="email" name="email" placeholder="Email Address" required><br>
    <!-- <input type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="password must cantain at least one number and one uppper case and one lowercase letter and 8 characters"required><br> -->
    <!-- <input type="password" name="cpassword" placeholder="Confirm Password" required><br> -->
    <input type="int" name="pnumber" placeholder="Phone Number" pattern="[0-9]{10}" title="Phone Number must contain 10 digits." required><br>
    <input type="submit" value="Register" name="register"><br>
    <h4>Already have an account?<a href="Index.php">login</a></h4>
    </form>
        </div>
    </div>
    
</section>
<script>
        window.addEventListener("load", function () {
            const body = document.querySelector("body");
            setTimeout(function () {
                body.classList.add("loaded");
            }, 2000); // Wait for 2 seconds before hiding the loading screen
        });
    </script>
</body>
<style>
    *{
    margin: 0;
    padding: 0;
    font-family: Assistant,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}
.loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(255, 255, 255);
            /* Fully dark background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            /* Ensure it's above all other content */
        }

        .loader img {
            width: 50px; /* Set the width of your loader image */
            height: 50px; /* Set the height of your loader image */
            animation: spin 2s linear infinite; /* Rotate for 2 seconds */
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Hide loader when content is loaded */
        body.loaded .loader-wrapper {
            display: none;
        }

header{
    position: fixed;
    align-items: center;
    display: flex;
    height: 80px;
    width: 100%;
    z-index: 99;
    background-color: rgb(255, 255, 255);
    justify-content: space-evenly;
    box-shadow: 0 8px 18px 0 rgba(0,0,0,.05);
}
.register_form img{
            width:15%;
            height:auto;
        }
.register_section{
    width:100%;
    height:90vh;
    background:;
    display:flex;
    justify-content:center;
}
.register_form{
    width:40%;
    height:75vh;
    background:;
    box-shadow: 0 8px 18px 0 rgba(0,0,0,.05);
    display:flex;
    justify-content:center;
    align-items:center;
}
.inner_form{
    width:90%;
    height:auto;
    background:;
}
input[type="text"], input[type="password"] , input[type="email"],input[type="int"]{
    width: 70%;
    padding: 10px;
    margin-top: 5px;
    border:none;
    border-bottom: 3px solid silver;
  }
input[type="submit"] {
    width: 35%;
    padding: 10px;
    margin-top: 20px;
    background-color: #ca3c6b;
    color: rgb(255, 255, 255);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.5s;
  }
  
  input[type="submit"]:hover {
    background-color: #000000;
    color: white;
  }

form{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;
}
.shopping_girl_img{
        width:35%;
        height:auto;
        
    padding-left:10px;

    }
    .shopping_girl_img img{
        width:75%;
        height:auto;
    }
    
.mainlogo img{
    width: 100%;
    height: 38px;
   
}
.mainlogo{
    padding-left: 20px;
}





.mobile_navbar_logo{
    display: none;
    cursor: pointer;
}

.mobile_searchbox{
    display: none;
}








.navbar{
    position: relative;
    display: flex;
    justify-content: space-between;
    min-width: 500px;
   
}
.navbar ul a{
    font-family: Assistant,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
    text-decoration: none;
    color: #282c3f;
    font-size: 12.5px;
    letter-spacing: .3px;
    text-transform: uppercase;
    font-weight: 700;
    transition: all 0.2s ease;
}
.navbar li > sup{
    color:#ff3f6c;
    top: -.1rem;
    font-size: 52%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
    text-transform: uppercase;
    font-weight: 650;
}
.navbar ul li{
    list-style: none;
    display: flex;
    float: left;
    padding: 15px;
}
.navbar a:hover{
    color: red;
}



.men_dropdown{
    display: flex;
    position: absolute;
    background:#ffffff;
    top: 134%;
    left: 0;
    visibility: hidden;
    opacity: 0;
    height: 480px;
    width:200%;
    box-shadow: 0px 0px 1px;
    transition: 0.5s;
}
.navbar>ul>li:hover .men_dropdown{
    opacity: 1;
    visibility: visible;
}
.men_dropmenu h5{
    margin-bottom: 8%;
}
.men_dropdown ul{
    display:flex;
    flex-direction: column;
}
.navbar ul ul li{
    padding: 3px;
}
.men_dropdown h5{
    color: #fb5672;
}
.men_dropdown ul a{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: 100px;
    color: #777777;
    font-size: 11px;
    line-height: 19px;
    transition: 0.0s;
}
.men_dropdown ul a:hover{
    font-size: 12px;
    color: rgb(0, 0, 0);
}
.men_dropmenu{
    width: 25%;
    height: 50rem;
    margin: 25px;
    flex-wrap: 3px;
}
.men_dropmenu span{
    position: absolute;
    top: 60%;
    width: 13%;
    background: rgba(149, 149, 149, 0.435);
    height: 1px;
}
.men_dropmenu  .span2{
    position: absolute;
    top: 39%;
    width: 13%;
    background: rgba(149, 149, 149, 0.435);
    height: 1px;
}
.men_dropmenu  .span3{
    position: absolute;
    top: 50%;
    width: 13%;
    background: rgba(149, 149, 149, 0.435);
    height: 1px;
}
.men_dropmenu  .span4{
    position: absolute;
    top: 55%;
    width: 13%;
    background: rgba(149, 149, 149, 0.435);
    height: 1px;
}










.searchbar{
    height: 40px;
    min-width: 100px;
    display: flex;
    align-items: center;
}
.search_icon{
    box-sizing: content-box;
    height: 20px;
    padding: 10px;
    background-color: #f5f5f6;
    color: #282c3f;
    border-radius: 4px 0 0 4px;
}
.input_bar{
    width: 330px;
    display: inline-block;
    font-size: 14px;
    height: 20px;
    position: relative;
    top: -9px;
    line-height: 24px;
    color: #696e79;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    padding: 8px 10px 10px;
    margin: 0;
    outline: 0;
    border: 1px solid #f5f5f6;
    border-radius: 0 4px 4px 0;
    border-left: 0;
    background: #f5f5f6;
}




.loginbox{
    display: flex;
    align-items: center;
    min-width: 200px;
    justify-content: space-around;
    font-size: 12px;
    font-weight: 500;
    cursor: pointer;
}
.actioncontainer{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.actioncontainer[name="mobile_searchbox_name"]{
    display: none;
}
.actioncontainer a{
    text-decoration: none;
    color: black;
}

    .register_section{
        width:100%;
        height:100vh;
        display:flex;
        align-items:center;
    }
   
 

</style>

</html>