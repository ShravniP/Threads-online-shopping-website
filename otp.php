<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>
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
<body>
    <style>
        .body1{
            padding-top:3%;
            height:90vh;
            width:100%;
            display:flex;
            background:white;
            align-items:center;
            justify-content:center;
        }
        .otp_form{
            width:25%;
            height:60vh;
            border-radius:6%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            background:white;
            box-shadow: 0 10px 18px 0 rgba(0,0,0,.05);
        }
        .otp_form img{
            width:25%;
            height:auto;
        }
    
   
header{
    position: fixed;
    align-items: center;
    display: flex;
    height: 70px;
    width: 100%;
    z-index: 99;
    background-color: rgb(255, 255, 255);
    justify-content: space-evenly;
    box-shadow: 0 8px 18px 0 rgba(0,0,0,.05);
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
.button-1{
  background:#1AAB8A;
  color:#fff;
  border:none;
  position:relative;
  width:100px;
  height:30px;
  font-size:1.0em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
  padding-left:10%;
  margin-left:40px;
}
.button-1:hover{
  background:#fff;
  color:#1AAB8A;
}
.button-1:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
.button-1:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
.button-1:hover:before,button:hover:after{
  width:100%;
  transition:800ms ease all;
}
input{
    border-top:none;
    border-left:none;
    border-right:none;
    padding:10px;
    text-align:center;
}





        </style>
<div class="body1">
    <div class="otp_form">
        <img src="myntra clone/html/newlogo2.png">
        <h2>Verify Your OTP</h2>
    <form action="otp_verify.php" method="post">
    <input type="hidden" name="email" class="input_email" value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>">


        
        <input type="text" id="otp" name="otp"  required><br><br>

        <button type="submit" name="verify_otp" class="button-1">   Enter</button>
        
    </form>
</body>
</html>

