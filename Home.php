<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>



    <style>
        .username {
            font-size: 2rem;
            /* Adjust font size as needed */
            color: #00e6e6;
            /* Neon blue color */
            font-weight: bold;
            text-shadow: 0 0 2px #00e6e6;
            display: flex;
            align-items: center;
            gap: 8px;
        }
    </style>

</head>

<body>
    <!-- header section starts  -->

    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo">
            <i class="fas fa-paper-plane"></i>Travel Genie
        </a>

        <nav class="navbar">
            <ul>
                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="#">home</a></li>
                <li><a data-aos="zoom-in-left" data-aos-delay="600" href="#">destination &raquo</a>
                    <ul>
                        <li><a data-aos="zoom-in-left" data-aos-delay="300" href="#home">Char Dham &raquo</a>
                            <ul>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="Badrinath.html">Badrinath Temple</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="Dwarka.html">Dwarka Temple</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="Rameshwaram.html">Rameshwaram Temple</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="Puri.html">Jagannath Temple</a></li>
                            </ul>
                        </li>
                        <li><a data-aos="zoom-in-left" data-aos-delay="300" href="#home">Famous Temples &raquo</a>
                            <ul>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="Vaishno Devi.html">Vaishno Devi Temple</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="Somnath.html">Somnath Jyotirlinga</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="Ranakpur.html">Ranakpur Temple</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="#destination">Haridwar And Hrishikesh</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="#destination">Kashi Vishwanath</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="#destination">Kedarnath Temple</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="#destination">Venkateshwara Temple</a></li>
                                <li><a data-aos="zoom-in-left" data-aos-delay="300" href="#destination">Surya Mandir</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a data-aos="zoom-in-left" data-aos-delay="900" href="Gallery.html">gallery</a></li>
                <li><a data-aos="zoom-in-left" data-aos-delay="750" href="Contactus.html">Contact Us</a></li>
            </ul>
        </nav>

        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            // Display username with icon if logged in
            echo '<span data-aos="zoom-in-left" data-aos-delay="1300" class="username"><i class="fas fa-user"></i> ' . htmlspecialchars($_SESSION['username']) . '</span>';
        } else {
            // Display Login / Sign-up button if not logged in
            echo '<a data-aos="zoom-in-left" data-aos-delay="1300" href="login.php" class="btn"><i class="fas fa-sign-in-alt"></i> Login / Sign-up</a>';
        }
        ?>
    </header>



    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="content">
            <span data-aos="fade-up" data-aos-delay="150">Make your next trip awesome</span>
            <h3 data-aos="fade-up" data-aos-delay="300">Travel Genie</h3>
            <p data-aos="fade-up" data-aos-delay="450">Travel makes one modest, you see what a tiny place you occupy in
                the World !</p>
            <a data-aos="fade-up" data-aos-delay="600" href="#" class="btn">book now</a>
        </div>
        </div>
    </section>

    <!-- home section ends -->

    <!-- booking form section starts  -->

    <section class="book-form" id="book-form">

        <form action="">
            <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">
                <span>where to?</span>
                <input type="text" placeholder="place name" value="">
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">
                <span>when?</span>
                <input type="date" value="">
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">
                <span>how many?</span>
                <input type="number" placeholder="number of travelers" value="">
            </div>
            <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="find now" class="btn">
        </form>

    </section>

    <!-- booking form section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <div class="video-container" data-aos="fade-right" data-aos-delay="100">
            <video src="images/Badrinath.mp4" muted autoplay loop class="video"></video>
            <div class="controls">
                <span class="control-btn" data-src="images/Badrinath.mp4"></span>
                <span class="control-btn" data-src="images/Ramanathaswam.mp4"></span>
                <span class="control-btn" data-src="images/Puri.mp4"></span>
            </div>
        </div>

        <div class="content" data-aos="fade-left" data-aos-delay="600">
            <h3>Temples are an expression of God's love</h3>
            <p>Prayer is work. The experiences of many children of God demonstrate that it accomplishes far more than
                does any other form of work. It is also warfare, for it is one of the weapons in fighting the enemy.
                However, only prayer in the spirit
                is genuinely effectual.
            </p>
            <a href="#" class="btn">About Us</a>
        </div>

    </section>

    <!-- about section ends -->

    <!-- destination section starts  -->

    <section class="destination" id="destination">

        <div class="heading">
            <span>India's most visites</span>
            <h1>Temples</h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/vaishno devi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Vaishno Devi Temple<br> (Jammu Kashmir)</h3>
                    <p>Dedicated to Adi Shakti. It is perched on the mighty Trikuta Hill in Jammu.</p>
                    <a href="Vaishno Devi.html">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/amarnath.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Amarnath Dham<br> (Srinagar)</h3>
                    <p>This dham is more like a cave and is famous for the lingam that sculpts spontaneously every year
                    </p>
                    <a href="#">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/golden temple.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Golden Temple<br> (Amritsar)</h3>
                    <p>Sri Harmandir Sahib, The Golden temple is the most popular Gurudwaras of the Sikhs. </p>
                    <a href="#">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <div class="image">
                    <img src="images/haridwar.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Haridwar and Hrishikesh</h3>
                    <p>Both the places are on the banks of the river Ganga and therefore an important place of
                        pilgrimage.</p>
                    <a href="#">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="750">
                <div class="image">
                    <img src="images/venkateswara.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Venkateshwara Temple</h3>
                    <p>One of the most revered religious places to visit in South India is this holy shrine of Lord
                        Venkateshwara in Tirumala hills.</p>
                    <a href="#">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="900">
                <div class="image">
                    <img src="images/kashi.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kashi Vishwanath<br> (Vanarsi)</h3>
                    <p>Kashi Vishwanath is one of the twelve Jyotirlingas. The temple is so old that it is mentioned in
                        the Skanda Purana.</p>
                    <a href="#">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="1150">
                <div class="image">
                    <img src="images/kedarnath.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Kedarnath <br> (Uttrakhand)</h3>
                    <p>The holy place is in Skanda Purana where Lord Shiva is said to release water from his hair which
                        formed the river Ganga.</p>
                    <a href="#">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="1300">
                <div class="image">
                    <img src="images/surya.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Surya Mandir <br> Odisha</h3>
                    <p>The masterpiece of Indian architecture, Sun Temple is the epitome of exquisite architecture and
                        unmatched spirituality. </p>
                    <a href="#">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="1300">
                <div class="image">
                    <img src="images/somnath.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Somnath Jyotirlinga<br> Gujarat</h3>
                    <p>Reckoned to be the first Dwadash Jyotirlinga of Lord Shiva, Somnath Jyotirlinga in Gujarat holds
                        an important place in India. </p>
                    <a href="Somnath.html">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
            <div class="box" data-aos="fade-up" data-aos-delay="1300">
                <div class="image">
                    <img src="images/ranakpur.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Ranakpur Temple<br> Rajasthan</h3>
                    <p>The Ranakpur temple is one of the oldest Jain temples in India and thus holds a lot of importance
                        for devotees.</p>
                    <a href="Ranakpur.html">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

        </div>

    </section>
    <!-- Char Dham Section-->
    <section class="destination" id="destination">

        <div class="heading">
            <span>The four associated places of the </span>
            <h1>CHAR DHAM</h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/badrinath-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>BADRINATH</h3>
                    <p>Dedicated to Lord Vishnu, the Badrinath Temple is one of the most important pilgrimage sites in
                        India.</p>
                    <a href="Badrinath.html">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/Dwakra.jpg" alt="">
                </div>
                <div class="content">
                    <h3>DWARKADHISHA </h3>
                    <p>a Pushtimarg temple, it follows the guidelines and rituals created by Vallabhacharya and
                        Vitheleshnath.</p>
                    <a href="Dwarka.html">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <div class="image">
                    <img src="images/puri-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3> PURI JAGANNATH TEMPLE</h3>
                    <p>Adi Shankaracharya designated Lord Jagannath temple in Puri as one of the Char Dham for
                        pilgrimages in India.</p>
                    <a href="Puri.html">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="750">
                <div class="image">
                    <img src="images/rameshwaram.jpg" alt="">
                </div>
                <div class="content">
                    <h3>RAMESHWARAM TEMPLE</h3>
                    <p>Rameshwaram Temple is renowned for being a part of one of the twelve Jyotirlingas of Lord Shiva
                        in India.</p>
                    <a href="Rameshwaram.html">Visit <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- destination section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <div class="heading">
            <span>our services</span>
            <h1>countless expericences</h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
                <i class="fas fa-globe"></i>
                <h3>worldwide</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
                <i class="fas fa-utensils"></i>
                <h3>food & drinks</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
                <i class="fas fa-wallet"></i>
                <h3>affordable price</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
            </div>

            <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
                <i class="fas fa-headset"></i>
                <h3>24/7 support</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam, cumque.</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">

        <div class="heading">
            <span>blogs & posts</span>
            <h1>untold stories</h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/blog_image-1.jpg" alt="">
                </div>
                <div class="content">
                    <a href="https://www.makemytrip.com/tripideas/blog/things-to-do-in-srisailam" target="_blank"
                        class="link">Here's Your Itinerary for a Perfect Weekend in Srisailam</a>
                    <p>In the mood for a vacation but short on leaves? Plan a weekend getaway to Srisailam</p>
                    <div class="icon">
                        <a href="https://www.makemytrip.com/tripideas/blog/things-to-do-in-srisailam"><i
                                class="fas fa-clock"></i> 21st may, 2021</a>
                        <a href="https://www.makemytrip.com/tripideas/blog/things-to-do-in-srisailam"><i
                                class="fas fa-user"></i> by admin</a>
                    </div>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/kedarnath.jpg" alt="">
                </div>
                <div class="content">
                    <a href="https://www.makemytrip.com/tripideas/blog/kedarnath-pilgrimage" target="_blank"
                        class="link">Kedarnath: A Comprehensive Pilgrimage Guide</a>
                    <p>Kedarnath exudes an air of divine mysticism, in the heart of the Himalayas! </p>
                    <div class="icon ">
                        <a href="https://www.makemytrip.com/tripideas/blog/kedarnath-pilgrimage"><i
                                class="fas fa-clock "></i> 29nd june, 2021</a>
                        <a href="https://www.makemytrip.com/tripideas/blog/kedarnath-pilgrimage"><i
                                class="fas fa-user "></i> by admin</a>
                    </div>
                </div>
            </div>

            <div class="box " data-aos="fade-up " data-aos-delay="450 ">
                <div class="image ">
                    <img src="images/blog_image-3.jpg " alt=" ">
                </div>
                <div class="content ">
                    <a href="https://www.makemytrip.com/tripideas/blog/unakoti-rock-sculptures " target="_blank "
                        class="link ">Mesmerizing Rock Sculptures of Unakoti in Tripura</a>
                    <p>Unakoti is a group of rock-cut sculptures which has been fascinating travellers around the world
                        for centuries. </p>
                    <div class="icon ">
                        <a href="https://www.makemytrip.com/tripideas/blog/unakoti-rock-sculptures  "><i
                                class="fas fa-clock "></i> 19th nov, 2021</a>
                        <a href="https://www.makemytrip.com/tripideas/blog/unakoti-rock-sculptures "><i
                                class="fas fa-user "></i> by admin</a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->
    <br><br>
    <!-- banner section starts  -->

    <div class="banner ">

        <div class="content " data-aos="zoom-in-up " data-aos-delay="300 ">
            <span>start your adventures</span>
            <h3>Let's Explore Incredible "INDIA "</h3>
            <p>“In India, it is a religion that forms the very core of the national heart. It is the backbone - the
                bed-rock - the foundation upon which the national edifice has been built. The traditional Indian mind
                has been for centuries, and still is,
                first religious, and then everything else.”</p>
            <a href="#book-form " class="btn ">book now</a>
        </div>

    </div>

    <!-- banner section ends -->

    <!-- footer section starts  -->

    <section class="footer " id="footer ">

        <div class="box-container ">

            <div class="box " data-aos="fade-up " data-aos-delay="150 ">
                <h3>Destinations</h3>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i>Vaishno Devi Temple</a>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i>Amarnath Dham</a>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i>Golden Temple</a>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i>Haridwar And Hrishikesh</a>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i>Kashi Vishwanath</a>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i>Kedarnath Temple</a>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i>Venkateshwara Temple</a>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i>Surya Mandir</a>
                <a href="Somnath.html" class="links "> <i class="fas fa-arrow-right "></i>Somnath Jyotirlinga</a>
                <a href="Ranakpur.html" class="links "> <i class="fas fa-arrow-right "></i>Ranakpur Temple</a>
            </div>

            <div class="box " data-aos="fade-up " data-aos-delay="300 ">
                <h3>Char Dham</h3>
                <a href="Badrinath.html " class="links "> <i class="fas fa-arrow-right "></i>Badrinath</a>
                <a href="Dwarka.html " class="links "> <i class="fas fa-arrow-right "></i>Dwarka Temple</a>
                <a href="Puri.html " class="links "> <i class="fas fa-arrow-right "></i>Jagannath Puri</a>
                <a href="Rameshwaram.html " class="links "> <i class="fas fa-arrow-right "></i>Ramanathaswam</a>
            </div>

            <div class="box " data-aos="fade-up " data-aos-delay="300 ">
                <h3>quick links</h3>
                <a href="Home.php " class="links "> <i class="fas fa-arrow-right "></i> home </a>
                <a href="# " class="links "> <i class="fas fa-arrow-right "></i> destination </a>
                <a href="Gallery.html " class="links "> <i class="fas fa-arrow-right "></i> gallery </a>
            </div>

            <div class="box " data-aos="fade-up " data-aos-delay="450 ">
                <h3>contact info</h3>
                <p> <i class="fas fa-map "></i> Vidisha (M.P.), india </p>
                <p> <i class="fas fa-envelope "></i>abcd@gmail.com </p>
                <p> <i class="fas fa-clock "></i> 7:00am - 10:00pm </p>
            </div>

            <div class="box " data-aos="fade-up " data-aos-delay="600 ">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action=" ">
                    <input type="email " name=" " placeholder="enter your email " class="email " id=" ">
                    <input type="submit " value="subscribe " class="btn ">
                </form>
            </div>

        </div>

    </section>
    <!-- footer section ends -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js "></script>

    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>

</body>

</html>