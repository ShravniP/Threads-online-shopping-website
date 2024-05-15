
<?php

include("config.php"); // Include file where $conn is defined
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="myntra clone/html/newlogo2.png" type="image/icon type">
    <title>Thread</title>
</head>

<body>
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
        <div class="mainlogo"><a href="home.php"><img src="newlogo.png"></a></div>
        <div class="mobile_sidebar">
            <div class="profile_div">

                <li onclick="closesidebar()"><a href="#"><span class="material-symbols-outlined " id="close_icon">
                            close
                        </span></a></li>
            </div>
            <div class="menu_side">
                <ul class="sidebar">

                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                    <li><a href="#">men</a></li>
                </ul>
            </div>
            <div class="other_services">other services</div>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#">MEN</a>
                    <hr style="width: 100%; color: red; display: flex; height: 2px;">
                    <div class="men_dropdown">
                        <div class="men_dropmenu">
                            <h5>Top Wear</h5>
                            <ul>
                                <li><a href="collection.php">T-Shirt</a></li>
                                <li><a href="collection.php">Casual Shirt</a></li>
                                <li><a href="collection.php">Formal shirt</a></li>
                                <li><a href="collection.php">Swratshirt</a></li>
                                <li><a href="collection.php">Sweaters</a></li>
                                <li><a href="collection.php">Jackets</a></li>
                                <li><a href="collection.php">Blazers & Coats</a></li>
                                <li><a href="collection.php">Suits</a></li>
                                <li><a href="collection.php">Rain jacketss</a></li>
                            </ul>
                            <br>
                            <span></span>
                            <h5>Indian & Festive Wear</h5>
                            <ul>
                                <li><a href="collection.php">Jackets</a></li>
                                <li><a href="collection.php">Blazers & Coats</a></li>
                                <li><a href="collection.php">Suits</a></li>
                                <li><a href="collection.php">Rain jacketss</a></li>
                            </ul>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Bottom Wear</h5>
                            <ul>
                                <li><a href="collection.php">Jeans</a></li>
                                <li><a href="collection.php">Casual Trousers</a></li>
                                <li><a href="collection.php"> Formal Trousers</a></li>
                                <li><a href="collection.php">Shorts</a></li>
                                <li><a href="collection.php">Track Pants & Joggers</a></li>
                            </ul>
                            <br>
                            <span class="span2"></span>
                            <h5>Innerwear & Sleepwear</h5>
                            <ul>
                                <li><a href="collection.php">Briefs & Trunks</a></li>
                                <li><a href="collection.php">Boxers</a></li>
                                <li><a href="collection.php">Vests</a></li>
                                <li><a href="collection.php">Sleepwear & Loungewear</a></li>
                                <li><a href="collection.php">Thermals</a></li>
                            </ul>
                            <h5>Plus Size</h5>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Foot wear</h5>
                            <ul>
                                <li><a href="#">Casual Shoes</a></li>
                                <li><a href="#"> Sports Shoes</a></li>
                                <li><a href="#"> Formal Shoes</a></li>
                                <li><a href="#">Sneakers</a></li>
                                <li><a href="#">Sandals & Floaters</a></li>
                                <li><a href="#">Flip Flops</a></li>
                                <li><a href="#">Socks</a></li>
                            </ul>
                            <span class="span3"></span>
                            <br>
                            <h5>Personal Care & Grooming</h5>

                            <h5>Sun Glasses & Frames</h5>

                            <h5>Watches</h5>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Sports & Active Wear</h5>
                            <ul>
                                <li><a href="#">Sports Shoes</a></li>
                                <li><a href="#">Sports Sandals</a></li>
                                <li><a href="#">Active T-Shirts</a></li>
                                <li><a href="#">Track Pants & Shorts</a></li>
                                <li><a href="#">Tracksuits</a></li>
                                <li><a href="#">Jackets & Sweatshirts</a></li>
                                <li><a href="#">Sports & Accessories</a></li>
                                <li><a href="#">Swimwear</a></li>
                            </ul>
                            <span class="span4"></span>
                            <br>
                            <h5>Gadgets</h5>
                            <ul>
                                <li><a href="#">Smart Wearables</a></li>
                                <li><a href="#">Fitness Gadgets</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Speakers</a></li>
                            </ul>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Fashion Accessories</h5>
                            <ul>
                                <li><a href="#">Wallets</a></li>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">Perfumnes & Body Mists</a></li>
                                <li><a href="#">Trimmers</a></li>
                                <li><a href="#">Deodrants</a></li>
                                <li><a href="#">Ties,Cufflinks & Pocket Squares</a></li>
                                <li><a href="#">Accessory Gift Sets</a></li>
                                <li><a href="#">Caps & Hats</a></li>
                                <li><a href="#">Mufflers,Scarves & Gloves</a></li>
                                <li><a href="#">Phone Cases</a></li>
                                <li><a href="#">Rings & wristwear</a></li>
                                <li><a href="#">Halmets</a></li>
                            </ul>
                            <h5>Bags & Backpacks</h5>

                            <h5>Luggages & Trolleys</h5>
                        </div>
                    </div>


                </li>
                <li><a href="#">WOMEN</a>
                    <div class="men_dropdown">
                        <div class="men_dropmenu">
                            <h5>Indian & Fusion Wear</h5>
                            <ul>
                                <li><a href="collection2.php">Kurtas & Suits</a></li>
                                <li><a href="collection2.php"> Kurtis, Tunics & Tops</a></li>
                                <li><a href="collection2.php"> Sarees</a></li>
                                <li><a href="collection2.php"> Ethnic Wear</a></li>
                                <li><a href="collection2.php"> Leggings, Salwars & Churidars</a></li>
                                <li><a href="collection2.php"> Skirts & Palazzos</a></li>
                                <li><a href="collection2.php"> Dress Materials</a></li>
                                <li><a href="collection2.php">Lehenga Cholis</a></li>
                                <li><a href="collection2.php">Dupattas & Shawls</a></li>
                                <li><a href="collection2.php">Jackets</a></li>
                            </ul>
                            <br>
                            <span></span>
                            <h5>Belts, Scarves & More</h5>
                            <h5> Watches & Wearables</h5>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Western Wear</h5>
                            <ul>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Tshirts</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Trousers & Capris</a></li>
                                <li><a href="#"> Shorts & Skirts</a></li>
                                <li><a href="#">Co-ords</a></li>
                                <li><a href="#">Playsuits</a></li>
                                <li><a href="#">Jumpsuits</a></li>
                                <li><a href="#">Shrugs</a></li>
                                <li><a href="#">Sweaters & Sweatshirts</a></li>
                                <li><a href="#"> Jackets & Coats</a></li>
                                <li><a href="#">Blazers & Waistcoats</a></li>
                            </ul>
                            <br>
                            <h5>Plus Size</h5>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Maternity</h5>
                            <h5>Sunglassws & Frames</h5>
                            <h5>Footwear</h5>
                            <ul>
                                <li><a href="#">Flats</a></li>
                                <li><a href="#">Casual Shoes</a></li>
                                <li><a href="#">Heels</a></li>
                                <li><a href="#">Boots</a></li>
                                <li><a href="#">Sports Shoes & Floaters</a></li>
                            </ul>
                            <span class="span3"></span>
                            <br>
                            <h5>Sports & Active Wear</h5>
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Footwear</a></li>
                                <li><a href="#">Sports Accessories</a></li>
                                <li><a href="#">Sports Equipment</a></li>
                            </ul>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Lingerie & Sleepwear</h5>
                            <ul>
                                <li><a href="#">Bra</a></li>
                                <li><a href="#">Brief</a></li>
                                <li><a href="#">Shapewear</a></li>
                                <li><a href="#">Sleepwear & Loungwear</a></li>
                                <li><a href="#">Swimwear</a></li>
                                <li><a href="#">Camisoles & Thermals</a></li>
                            </ul>
                            <span class="span4"></span>
                            <br>
                            <h5>Beauty & Personal Care</h5>
                            <ul>
                                <li><a href="#">Makeup</a></li>
                                <li><a href="#">Skincare</a></li>
                                <li><a href="#">Perminum Beauty</a></li>
                                <li><a href="#">Lipsticks</a></li>
                                <li><a href="#">Fragrances</a></li>
                            </ul>
                        </div>
                        <div class="men_dropmenu">
                            <h5>Gadgets</h5>
                            <ul>
                                <li><a href="#">Smart Wearables</a></li>
                                <li><a href="#">Fitness Gadgets</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Speakers</a></li>
                            </ul>
                            <h5>Jewellery</h5>
                            <ul>
                                <li><a href="#">Fashion Jewellery</a></li>
                                <li><a href="#">Fine Jewellery</a></li>
                                <li><a href="#">Earings</a></li>
                            </ul>
                            <br>
                            <h5>Backpacks</h5>
                            <br>
                            <h5>Handbags,Bags & Wallets</h5>
                            <br>
                            <h5>Luggages & Trolleys</h5>
                        </div>
                    </div>
                </li>
                <li><a href="#">KIDS</a></li>
                <li><a href="#">HOME & LIVING</a></li>
                <li><a href="#">BEAUTY</a></li>
                <li><a href="#">STUDIO</a><sup>NEW</sup></li>
            </ul>

        </div>

        <div class="searchbox">
            <span class="material-symbols-outlined search_icon">search</span><input
                placeholder="Search for products, brands and more" class="input_bar">
        </div>
        <div class="loginbox">
            <div class="actioncontainer">
                <span name="login_man" class="material-symbols-outlined action_icon">person</span>
                <span name="login_man_name" class="action_name">Profile</span>
                <div class="profile_dropdown">
                    <div class="login_img_box">
                        <img src="myntra clone\html\user_logo.jpg">
                    </div>
                    <div class="login_person_name">
                    <h6>Welcome</h6>
                    <?php
                    
                    //echo $_SESSION['email'];
                    echo $_SESSION['fname']." ";
                    echo $_SESSION['lname'];
                    ?>
                    </div>
                    <div class="sign_out_button">
                        <a href="#">LOGOUT</a>
                    </div>
                </div>
            </div>
            <div name="mobile_searchbox_name" class="mobile_searchbox actioncontainer">
                <span class="material-symbols-outlined action_icon">search</span>
            </div>

          
        </div>
    </header>
    <section class="heading_of_cart">
    <h1>Your Cart Items</h1>
        </section>
    
    <section class="wish_section">
    <?php
    // Check if the cart is empty
    if(empty($_SESSION['cart'])) {
        echo "<p style='font-wieght:600 '>Your Cart is Empty</p>";
    } else 
    ?>
        <div class="table_div">
            <style>
                table,
                th, 
                td {
                    border-bottom: 2px solid #ddd;
                    border-collapse: collapse;
                    text-align:center;
                }

                th,
                td {
                    padding: 20px;
                }
                .quantity_number{
                    text-align:center;
                }
                .btn_for_remove_item{
                    width:25px;
                    height:25px;
                    background:white;
                    transition:0.3s;
                    border-radius:50px;
                    text-align:center;
                    border:2px solid black;
                    padding-bottom:3px;
                }
                .btn_for_remove_item:hover{
                    background:red;
                    color:white;
                    border:2px solid white;
                }
            </style>
            <table style="width: 100%;">
            <thead >
            </thead>
            <tbody>
            <tr>
                        <th style="width: 2%; border-bottom: 2px solid #ddd; border-top: 2px solid #ddd;">Serial No.</th>
                        <th style="width: 30%;   border-bottom: 2px solid #ddd; border-top: 2px solid #ddd;">Item Name</th>
                        <th style="  border-bottom: 2px solid #ddd; border-top: 2px solid #ddd;">Item Price</th>
                        <th style="  border-bottom: 2px solid #ddd; border-top: 2px solid #ddd;">Quantity</th>
                        <th style="  border-bottom: 2px solid #ddd; border-top: 2px solid #ddd;"></th>
                    </tr>
                <?php
                $total=0;
                if(isset($_SESSION['cart']))
                {
                    foreach($_SESSION['cart'] as $key => $value)
                    {
                        $total=$total+$value['Price'];
                        echo"
                        
                        <tr>
                            <td>1</td>
                            <td>$value[Item_Name]</td>
                            <td>$value[Price]</td>
                            <td><input class='quantity_number' type='number' value='$value[Quantity]' min='1' max='10'</td>
                            <td>
                            <form action='manage_cart.php' method='POST'>
                            <button name='Remove_Item' class='btn_for_remove_item'>X</button>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </form>
                            </td>
                        </tr>
                            ";
                    }
                }
                    

                ?>
               
               
            </tbody>
            </table>
        </div>
                <div class="total_cost">
                    
                    <div class="cost">
                    <h3>Total:</h3>
                    <h4><?php echo"$total"; ?></h4>
            </div>
                <span></span>
                <div class="pay_check_box" >
                    <form action="order_process.php" method="POST">
                    <br>
                <input type="checkbox" id="cash" required><label for="cash"> Cash on delivery</label><br>
                <!-- <input type="checkbox" id="cash" required><label for="cash"> Online payment </label> -->
                <br><br>
                <button class="payment_button" style="vertical-align:middle"><span class="payment_button_span">PROCED TO ORDER </span></button>
            </form>
                </div>
                </div>
    </section>