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
        <div class="mainlogo"><a href="home.html"><img src="newlogo.png"></a></div>
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
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">Casual Trousers</a></li>
                                <li><a href="#"> Formal Trousers</a></li>
                                <li><a href="#">Shorts</a></li>
                                <li><a href="#">Track Pants & Joggers</a></li>
                            </ul>
                            <br>
                            <span class="span2"></span>
                            <h5>Innerwear & Sleepwear</h5>
                            <ul>
                                <li><a href="#">Briefs & Trunks</a></li>
                                <li><a href="#">Boxers</a></li>
                                <li><a href="#">Vests</a></li>
                                <li><a href="#">Sleepwear & Loungewear</a></li>
                                <li><a href="#">Thermals</a></li>
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
                        <img src="myntra clone/html/user_logo.jpg"><br>
                        
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
                        <a href="logout.php">LOGOUT</a>

<!-- Rest of your login page code -->                
                    </div>
            
                </div>
            </div>
            
            <div name="mobile_searchbox_name" class="mobile_searchbox actioncontainer">
                <span class="material-symbols-outlined action_icon">search</span>
            </div>
            <div class="actioncontainer">
                <span class="material-symbols-outlined action_icon">favorite</span>
                <a href="wishlist.php"><span class="action_name">Wishlist</span></a>
                
            </div>
            <div class="actioncontainer">
                <span class="material-symbols-outlined action_icon">local_mall</span>
                <a href="wishlist.php"><span class="action_name">Bag</span></a>
            </div>
        </div>
    </header>
    <main>
        <div class="main_slide">
            <img src="myntra clone/html/main_page_img1.webp" class="slide" alt="photo1">
            <img src="myntra clone/html/main_page_img2.webp" class="slide" alt="photo2">
            <img src="myntra clone/html/mian_page_img3.webp" class="slide" alt="photo3">
            <img src="myntra clone/html/main_page_img4.webp" class="slide" alt="photo4">
            <img src="myntra clone/html/main_page_img5.webp" class="slide" alt="photo5">
            <img src="myntra clone/html/main_page_img6.webp" class="slide" alt="photo6">
            <img src="myntra clone/html/main_page_img7.webp" class="slide" alt="photo7">
        </div>

        <script src="main.js"></script>
    </main>
    <div class="img_scroll_button">
        <button onclick="goprev()" class="prev_button">


        </button>
        <button onclick="gonext()" class="next_button">

        </button>
    </div>
    <div class="banner_title">
        <h4>medal worthy Brands to Bag</h4>
    </div>
    <div class="banner_images">
        <img src="myntra clone/html/1648ee4f-e9d5-4359-a44c-54b54888fbbb1706246651743-BB-_Arrow_-_More_Min_50.webp">
        <img
            src="myntra clone/html/23aebb8f-0bd6-400f-ae02-01cb67d02f511706246652131-Workwear_Styles_Min_50-_allen_solly-_Park_Avenue.webp">
        <img
            src="myntra clone/html/-3502-4e1f-863a-714e8faa87251706246651887-Mens_Ethnic_Styles_Min_65_Off-_Sojanya-_Deyaan_-_More.webp">
        <img src="myntra clone/html/88999e11-dc4e-4dd4-9d5d-20faeecba8b41706605527001-image_png_395922624.webp">
        <img src="myntra clone/html/a838b81f-f261-4275-960d-217395a087f71706605548982-image_png546226546.webp">
        <img src="myntra clone/html/20263bb3-2299-4fd5-b19e-b99be0c345431706605569241-image_png1988876747.webp">
    </div>
    <div class="banner3">
        <img src="myntra clone/html/7fa88863-9515-4688-a21e-d33783c92fe01706788473061-Shop-by-category-----2.webp">
    </div>
    <div class="category_div1">
        <img src="myntra clone/html/category1.webp">
        <img src="myntra clone/html/category2.webp">
        <img src="myntra clone/html/category3.webp">
        <img src="myntra clone/html/category4.jpg">
        <img src="myntra clone/html/category5.webp">
        <img src="myntra clone/html/category6.webp">
    </div>

    <div class="category_div1">
        <img src="myntra clone/html/category11.jpg">
        <img src="myntra clone/html/category12.webp">
        <img src="myntra clone/html/category13.jpg">
        <img src="myntra clone/html/category14.webp">
        <img src="myntra clone/html/category14.webp">
        <img src="myntra clone/html/category16.webp">
    </div>
    <div class="category_div1">
        <img src="myntra clone/html/category21.webp">
        <img src="myntra clone/html/category22.jpg">
        <img src="myntra clone/html/category23.jpg">
        <img src="myntra clone/html/category24.webp">
        <img src="myntra clone/html/category25.webp">
        <img src="myntra clone/html/category26.webp">
    </div>
    <div class="category_div1">
        <img src="myntra clone/html/category31.webp">
        <img src="myntra clone/html/category32.webp">
        <img src="myntra clone/html/category33.webp">
        <img src="myntra clone/html/category34.webp">
        <img src="myntra clone/html/category35.jpg">
        <img src="myntra clone/html/category36.webp">
    </div>
    <div class="category_div2">
        <img src="myntra clone/html/category41.webp">
        <img src="myntra clone/html/category42.jpg">
        <img src="myntra clone/html/category43.webp">
    </div>
    <div class="app_banner">
        <img src="myntra clone/html/download_app_banner.webp">
    </div>
    <div class="genericinfo">
        <div class="generic1">
            <div class="shopilinks">
                <h6>ONLINE SHOPPING</h6><br>
                <ul>
                    <a href="#">Men</a>
                    <a href="#">Women</a>
                    <a href="#">Kids</a>
                    <a href="#">Home & Living</a>
                    <a href="#">Beauty</a>
                    <a href="#">Gift Cards</a>
                    <a href="#">Myntra Insider</a>
                </ul>
                <br>
                <h6>USEFUL LINKS</h6><br>
                <ul>
                    <a href="#">Blog</a>
                    <a href="#">Careers</a>
                    <a href="#">Site Map</a>
                    <a href="#">Corporate Information</a>
                    <a href="#">Whitehat</a>
                    <a href="#">Cleartrip</a>
                </ul>

            </div>
            <div class="customerpolicies">
                <h6>CUSTOMER POLICIES</h6><br>
                <ul>
                    <a href="#">Contact Us</a>
                    <a href="#">FAQ</a>
                    <a href="#">T&C</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Track Orders</a>
                    <a href="#">Shipping</a>
                    <a href="#">Cancellation</a>
                    <a href="#">Returns</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Grievance Officer</a>

                </ul>
            </div>
            <div class="appexperience">
                <h6>EXPERIENCE MYNTRA APP MOBILE</h6><br>
                <img src="myntra clone/html/google_play_banner.png">
                <img src="myntra clone/html/apple_store_banner.png">
            </div>
            <div class="ginfotitle">
                <img src="myntra clone/html/screenshoot.png">
            </div>
           
        </div>
        
    </div>
    <div class="footerss">
        <img src="myntra clone/html/footerss.png">
    </div>
    <script>
        window.addEventListener("load", function () {
            const body = document.querySelector("body");
            setTimeout(function () {
                body.classList.add("loaded");
            }, 2000); // Wait for 2 seconds before hiding the loading screen
        });
    </script>
</body>

</html>