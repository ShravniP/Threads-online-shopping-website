<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style7.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="myntra clone/html/newlogo2.png" type="image/icon type">
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


        <div name="mobile_searchbox_name" class="mobile_searchbox actioncontainer">
            <span class="material-symbols-outlined action_icon">search</span>
        </div>


        </div>
    </header>
    <section class="address_form">
        <div class="address_form_section">
           
              
            <form action="confirm.html" method="POST">
            <div class="container">
                <h1>Shipping</h1>
                <p>Please enter your shipping details.</p>
                <hr />
                <div class="form">

                    <div class="fields fields--2">
                        <label class="field">
                            <span class="field__label" for="first_name">First name</span>
                            <input class="field__input" type="text" id="first_name" name="first_name"    required />
                        </label>
                        <label class="field">
                            <span class="field__label" for="last_name">Last name</span>
                            <input class="field__input" type="text" id="last_name" name="last_name"  required />
                        </label>
                    </div>
                    <label class="field">
                        <span class="field__label" for="address">Address</span>
                        <input class="field__input" type="text" id="address" name="address" required />
                    </label>
                    <label class="field">
                        <span class="field__label" for="country">Country</span>
                        <select class="field__input" id="country" name="country" required>
                            <option value=""> Select a country</option>
                            <option value="China">China</option>
                            <option value="India">India</option>
                            <option value="United States">United States</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Russia">Russia</option>
                        </select>
                    </label>
                    <div class="fields fields--3">
                        <label class="field">
                            <span class="field__label" for="state">State</span>
                            <select class="field__input" id="state" name="state" required>
                                <option value="">Select a state</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                            </select>
                        </label>
                        <label class="field">
                            <span class="field__label" for="city">City</span>
                            <input class="field__input" type="text" id="city" name="city" required />
                        </label>
                        <label class="field">
                            <span class="field__label" for="zip_code">Zip code</span>
                            <input class="field__input" type="text" id="zip_code" name="zip_code" required />
                        </label>
                    </div>
                </div>
                <hr>
                <input class="button45" type="submit" value="Continue" name="Continue"><br>
            </div>
        </form>
        </div>
        <img src="fasion_women_of_delivery_form.avif">

    </section>
</body>

</html>