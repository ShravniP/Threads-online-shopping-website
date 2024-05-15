<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="myntra clone/html/newlogo2.png" type="image/icon type">
    <title>collection</title>
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
                                <li><a href="#">Kurtas & Suits</a></li>
                                <li><a href="#"> Kurtis, Tunics & Tops</a></li>
                                <li><a href="#"> Sarees</a></li>
                                <li><a href="#"> Ethnic Wear</a></li>
                                <li><a href="#"> Leggings, Salwars & Churidars</a></li>
                                <li><a href="#"> Skirts & Palazzos</a></li>
                                <li><a href="#"> Dress Materials</a></li>
                                <li><a href="#">Lehenga Cholis</a></li>
                                <li><a href="#">Dupattas & Shawls</a></li>
                                <li><a href="#">Jackets</a></li>
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
                <div class="profile_dropdown"></div>
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
                <span class="action_name">Bag</span>
            </div>
        </div>
    </header>

    <section class="collection_cards">

        <div class="card_row1">

            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/women1.webp">
                </div>
                <div class="card_price_div">
                    <h3>Libas</h3>
                    <label>Blue  Kurti Set</label>
                    <h5>RS.1499</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Libas">
                            <input type="hidden" name="Price" value="1499">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/women2.webp">
                </div>
                <div class="card_price_div">
                    <h3>Rashi</h3>
                    <label>Pure Cotton Kurti Set </label>
                    <h5>RS.1749</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Rashi">
                            <input type="hidden" name="Price" value="1749">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/women3.webp">

                </div>
                <div class="card_price_div">
                    <h3>SOCH</h3>
                    <label>Red kurti set</label>
                    <h5>RS.1499</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="SOCH">
                            <input type="hidden" name="Price" value="399">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/women4.webp">
                </div>
                <div class="card_price_div">
                    <h3>Libas</h3>
                    <label>Black Embroidery kurti</label>
                    <h5>RS.999</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Libas">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </section>




<!-- section2 -->




     <section class="collection_cards2">
        <div class="card_row1">
            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/women5.webp">
                </div>
                <div class="card_price_div">
                    <h3>Indo Era</h3>
                    <label>Embroidered Kurti Set</label>
                    <h5>RS.2,llrr44299</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Indo Era">
                            <input type="hidden" name="Price" value="2,299">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/women6.jpg">
                </div>
                <div class="card_price_div">
                    <h3>Anouk</h3>
                    <label>Pure Cotton kurti</label>
                    <h5>RS.799</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="Anouk">
                            <input type="hidden" name="Price" value="799">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/women7.webp">

                </div>
                <div class="card_price_div">
                    <h3>AHIKA</h3>
                    <label>Design kurti set</label>
                    <h5>RS.999</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="AHIKA">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/women8.webp">
                </div>
                <div class="card_price_div">
                    <h3>INDO ERA</h3>
                    <label>Design kurti set</label>
                    <h5>RS.1279</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="INDO ERA">
                            <input type="hidden" name="Price" value="799">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 





    <!-- section3 -->





    <section class="collection_cards2">
        <div class="card_row1">
            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/women9.webp">
                </div>
                <div class="card_price_div">
                    <h3>COTTON KING</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.1599</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="COTTON KING">
                            <input type="hidden" name="Price" value="1599">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/women10.jpg">
                </div>
                <div class="card_price_div">
                    <h3>AHIKA</h3>
                    <label>Design kurti set</label>
                    <h5>RS.999</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="AHIKA">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/women11.webp">

                </div>
                <div class="card_price_div">
                    <h3>LIBAS</h3>
                    <label>Cotton Design Kurta Set</label>
                    <h5>RS.998</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="LIBAS">
                            <input type="hidden" name="Price" value="998">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/women12.webp">
                </div>
                <div class="card_price_div">
                    <h3>GLOBUS</h3>
                    <label>Printed kurta with Trousers</label>
                    <h5>RS.1624</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="GLOBUS">
                            <input type="hidden" name="Price" value="1,624">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 



    <!-- SECTION 4 -->



    <section class="collection_cards2">
        <div class="card_row1">
            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/women13.webp">
                </div>
                <div class="card_price_div">
                    <h3>LIBAS</h3>
                    <label>Cotton Kurta Set</label>
                    <h5>RS.1,099</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="LIBAS">
                            <input type="hidden" name="Price" value="1,099">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/women14.webp">
                </div>
                <div class="card_price_div">
                    <h3>ANANYA</h3>
                    <label>Printed Kurta Set with Trousers</label>
                    <h5>RS.1,239</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="ANANYA">
                            <input type="hidden" name="Price" value="1,239">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/women15.webp">

                </div>
                <div class="card_price_div">
                    <h3>KALINI</h3>
                    <label>Kurta with Trousers & Dupatta</label>
                    <h5>RS.999</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="KALINI">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/women16.webp">
                </div>
                <div class="card_price_div">
                    <h3>VISHUDH</h3>
                    <label>Kurta set with printed dupatta</label>
                    <h5>RS.1,115</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="VISHUDH">
                            <input type="hidden" name="Price" value="1,115">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 




    <!-- SECTION 5 -->



    <section class="collection_cards2">
        <div class="card_row1">
            <div class="card1">
                <div class="card_img">
                    <img src="myntra clone/html/women17.webp">
                </div>
                <div class="card_price_div">
                    <h3>RADOO</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.399</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="SUNNY">
                            <input type="hidden" name="Price" value="399">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card2">
                <div class="card_img">
                    <img src="myntra clone/html/women18.webp">
                </div>
                <div class="card_price_div">
                    <h3>KING FIT</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.999</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="MOON LIGHT">
                            <input type="hidden" name="Price" value="999">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card3">
                <div class="card_img">
                    <img src="myntra clone/html/women19.webp">

                </div>
                <div class="card_price_div">
                    <h3>RICHLOOK</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.679</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button"><button type="submit" class="btn btn-info" name="add_to_cart">Add to
                                Wishlist</button>
                            <input type="hidden" name="Item_Name" value="RICHLOOK">
                            <input type="hidden" name="Price" value="679">
                        </div>
                    </form>
                </div>
            </div>


            <div class="card4">
                <div class="card_img">
                    <img src="myntra clone/html/women20.webp">
                </div>
                <div class="card_price_div">
                    <h3>FIT PRO</h3>
                    <label>Pure Cotton shirt</label>
                    <h5>RS.459</h5>
                    <form action="manage_cart.php" method="POST">
                        <div class="card_button">
                            <button type="submit" class="btn btn-info" name="add_to_cart">Add to Wishlist</button>
                            <input type="hidden" name="Item_Name" value="FIT PRO">
                            <input type="hidden" name="Price" value="459">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 
    <!-- <div class="clothescollection">
                <img src="myntra clone/html/clothe1.webp">
                <img src="myntra clone/html/clothe2.webp">
                <img src="myntra clone/html/clothe3.webp">
                <img src="myntra clone/html/clothe4.webp">
                <img src="myntra clone/html/clothe5.webp">
                <img src="myntra clone/html/clothe6.webp">
                <img src="myntra clone/html/clothe7.webp">
                <img src="myntra clone/html/clothe8.webp">
                <img src="myntra clone/html/clothe1.webp">
                <img src="myntra clone/html/men1.webp">
                <img src="myntra clone/html/men2.webp">
                <img src="myntra clone/html/men3.webp">
                <img src="myntra clone/html/men4.webp">
                <img src="myntra clone/html/men5.webp">
                <img src="myntra clone/html/men6.webp">
                <img src="myntra clone/html/men7.webp">
                <img src="myntra clone/html/men8.webp">
                <img src="myntra clone/html/men9.webp">
                <img src="myntra clone/html/men10.webp">
                <img src="myntra clone/html/men11.webp">
                <img src="myntra clone/html/men12.webp">
                

            </div> -->

</body>

</html>