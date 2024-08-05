<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Taxi Booking</title>
    <link rel="stylesheet" href="CabBookingCSS.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="shortcut icon" href="CabRide_logo.png" type="img/x-icon">
</head>
<body>
    <?php
    if(!empty($_POST["send"]))
    {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $plocation = $_POST['plocation'];
    $dlocation = $_POST['dlocation'];
    $persons = $_POST['persons'];
    $toEmail = "vishnuvijayj4@gmail.com";
    

    $mailHeaders = "Name : " . $name . 
    "\r\n Pickup : " . $plocation . 
    "\r\n Drop : " . $dlocation .  
    "\r\n persons : " . $persons . 
    "\r\n Date : " . $date . 
    "\r\n Time : " . $plocation . "\r\n";

    if(mail($toEmail,$name,$mailHeaders))
    {
        $message = " Booking Success";
    }

    }
    ?>




    <div class="main-container">
        <div class="background-text">
            <h2>book your comfortable journey</h2>
        </div>
        <header class="header">
            <a href="#" id="logo"><img src="logo.jpg" width="120px" height="120px" style="border: 3px solid black; border-radius: 60px; box-shadow: 2px 2px 20px white;"></a>
            <nav class="navbar">
                <a href="#">home</a>
                <a href="#">Booking</a>
                <a href="#">support</a>
                <a href="#">contact</a>
                <a href="#">about</a>
            </nav>
            <a href="#" id="menu-bars" class="fas fa-bars"></a>
        </header>
    </div><hr><hr>
    <div class="home-container">
        <div class="home-content">
            <div class="inner-content">
                <h3>Pathmavathy Travels best in city</h3>
                <h2>trust SVS cab services</h2>
                <p><b>To travel with the lowest fares choose SVS Call Taxi services. For a faster travel experience we have Share Express on some fixed routes. Choose your ride and Enjoy your Journey!</b></p>
                <a href="#" class="booknow">book now</a>
            </div>
            <div class="inner-content">
                
                <div class="contact-form">
                    <div class="summa"><br>
                    <div class="form-heading">
                        <h1>book your cab</h1>
                    </div>
                    <div class="form-fields">
                        <form method="post" name="emailcontact">
                            <input type="text" placeholder="name" name="name" id="name">
                            <input type="number" placeholder="phone" name="number" id="number">
                            <input type="text" placeholder="date" name="date" id="date">
                            <input type="text" placeholder="when" name="time" id="time">
                            <input type="text" placeholder="pickup location" name="plocation" id="plocation">
                            <input type="text" placeholder="drop location" name="dlocation" id="dlocation">
                            <input type="number" placeholder="Number of Travellers" name="persons" id="persons"><br><br>
                            <!-- <a href="connection.php" class="search-cabs"><b>Submit</b></a> -->
                             <input type="submit" name="send" value="submit">
                             <?php if(!empty($message)){? >
                            <div class="success">
                                <strong><?php echo $message ?></strong>
                             </div>
                             <?php }>
                        </form>    
                    </div>
                    <div class="search-cabs">
                        
                    </div><br>
                    </div>
                </div>
                
            </div>
        </div>
    </div><hr><hr>


    <div class="fast-booking">
        <h1 class="fast-heading">we do best</h1>
        <h2>than you wish</h2>
        <div class="inner-fast">
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-rupee-sign"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>cab for every pocket</h1>
                    <p><b>From Sedans and SUVs to Luxury cars for special occasions, we have cabs to suit every pocket. You can also go cashless and travel easy.</b></p>
                </div>
            </div>
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-shield-alt"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>Secure and Safer Rides</h1>
                    <p><b>Verified drivers, an emergency alert button, and live ride tracking are some of the features that we have in place to ensure you a safe travel experience.</b></p>
                </div>
            </div>
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-car"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>share and express</h1>
                    <p><b>travel with the lowest fares choose SVS Call Taxi services. For a faster travel experience we have Share Express on some fixed routes. Choose your ride and Enjoy your Journey!</b></p>
                </div>
            </div>
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-music"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>in cab entertainment</h1>
                    <p><b>Play music, watch videos and a lot more with CityRide Play! Also stay connected even if you are travelling through poor network areas with our free Wi-fi facility.</b></p>
                </div>
            </div>
        </div>
    </div><hr><hr>


    <div class="main-tariff">
        <h1>our rides</h1>
        <div class="inner-tariff">
            <div class="tariff-container">
                <div class="inner-box1">
                    <img src="suzukisedan.jpeg" alt="" width="175" height="89">
                    <h2>Sedan</h2>
                    <h3>Start Rs.13 for each kilometers</h3>
                    <p>A comfortable AC hatchback that becomes your everyday dependable ride. An economical option for daily ride.</p>
                    <h3>Small fares for short rides</h3>
                    
                </div>
            </div>
            <div class="tariff-container">
                <div class="inner-box2">
                    <img src="innovasuv.jpeg" alt="" width="230">
                    <h2>SUV</h2>
                    <h3>Start Rs.18 for each kilometers</h3>
                    <p>SUV cars all too familiar ride for all Travellers, more comfortable and more spaces. A convient way to travel everyday with more facility.</p>
                    <h3 class="yellow-section">Long drive for more Travellers!</h3>
                    
                </div>
            </div>
            <div class="tariff-container">
                <div class="inner-box3">
                    <img src="luxury.jpeg" alt="" width="210">
                    <h2>Luxury</h2>
                    <h3>Start Rs.24 for each kilometers</h3>
                    <p>Luxury cars with free Wi-fi and top drivers for a comfortable journey with room for everyone including that extra.</p>
                    <h3>Perfect for weekend family getaways</h3>
                    
                </div>
            </div>
        </div>
    </div><hr><hr>


    <div class="some-faqs">
        <h1>cabs booking FAQs</h1>
        <div class="main-faqs">
            <div class="faqs">
                <div class="ques">
                    <h2>What kind of cabs you can book from CarRide?</h2>
                </div>
                <div class="ans">
                    <p>You can book following kinds of cabs from SVS Cabs: Airport cabs and intercity cabs / outstation cabs. You can book outstation cabs for both one-way transfers & round-trip transfers.</p>
                </div>
            </div>
            <div class="faqs">
                <div class="ques">
                    <h2>How can I book cheap cabs online?</h2>
                </div>
                <div class="ans">
                    <p>SVS Cabs helps you with online cab booking at the best prices, comparatively much lower than the local vendors. Also you can use promo codes and offers on the SVS Cab service website & app on online cab booking to get extra discounts.</p>
                </div>
            </div>
            <div class="faqs">
                <div class="ques">
                    <h2>What are the advantages of online taxi booking?</h2>
                </div>
                <div class="ans">
                    <p>Online taxi booking not only helps you with best prices but also helps you with the convenience of paying through multiple payment options (like Debit Card, Credit Card, etc..) You can easily compare prices and choose various categories of cabs like Hatchback cars, Sedan and SUV.</p>
                </div>
            </div>
            <div class="faqs">
                <div class="ques">
                    <h2>What are the popular outstation cab booking routes?</h2>
                </div>
                <div class="ans">
                    <p>Some of the popular outstation cab booking routes are Chennai to Mumbai cabs, Chennai to Bangalore cabs, Kaniyakumari to Chennai cabs, Pondicherry to Chennai cabs, Villupuram to kerala cabs, Bangalore to Villupuram cabs, Pondicherry to Thiruvannamalai cabs, etc.. and also all routes are available.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="CabBookingscript.js"></script>
</body>
</html>