<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Green Leaf Tours</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font/fonts.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "css/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
    </head>
    <body>
        <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.html" class = "site-brand">
                    Green&nbsp;Leaf<span>&nbsp;Tours</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "../../Webpage/src/index1.php" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#package" class = "nav-link">Tours</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#" class = "nav-link">Achievements</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "about.php" class = "nav-link">About Us</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "../contact.html" class = "nav-link">Contact</a>
                        </li>
                      
                        <li class="nav-item">
        <a href="logout2.php" ><button class="btnlogout-popup">Logout</button></a>
    </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex">
            <div class = "container1">
                <div class = "header-title">
                    <h1>About Us</h1>
                    <p> Welcome to Sri Lanka, where tropical beauty, rich heritage, and warm smiles await your unforgettable journey.</p>
                </div>
                
            </div>
        </header>
        <!-- header -->
        <div class="about-content">
            <p>At Green Leaf Hotels, Sri Lanka, we take pride in offering an unrivaled experience of hospitality, where every guest is treated like family. Our story began almost 10 years ago when our founder, driven by the values of respect, care, and compassion, built Green Leaf on the foundation of family values.
            
                Our tropical island is not just a paradise but a place we call home. It is a land brimming with untold stories and enchanted wonders, waiting to be discovered by you. As you step into each of our luxurious hotels and villas, you will be embraced by the warmth and charm that sets us apart.
                
                Our properties are thoughtfully located, whether hidden amidst the mystique of historical cities, nestle<span id="dots">...</span><span id="more"> in rustic villages, perched high up in the mountains, or pampered by the breathtaking sunsets of the Indian Ocean. Wherever you find yourself in Sri Lanka, our doors are always open to welcome you.
                
                Over the centuries, the world has graced our shores, forging a beautiful relationship that holds a special place in our hearts. As our guest, you will not only be welcomed but also embraced as a friend, and when you leave, you will do so as a part of our family. Our commitment to Sri Lankan hospitality ensures that you receive warm smiles and heartfelt care throughout your stay.
                
                At Green Leaf Hotels, we invite you to embark on a journey that goes beyond luxury accommodation. Immerse yourself in the vibrant culture, indulge in culinary delights, explore ancient ruins, experience wildlife adventures, or simply relax amidst breathtaking natural landscapes. Our team of dedicated professionals is always ready to curate unforgettable experiences tailored to your preferences.
                
                Whether you seek adventure, relaxation, or a blend of both, Green Leaf Hotels offers the perfect sanctuary to create lasting memories. We are honored to share the magic of our tropical land with you and look forward to meeting you as a member of our family.
                
                Welcome to Green Leaf Hotels, the home of Sri Lankan hospitality.</span></p>
                
                <button onclick="myFunction()" id="myBtn">Read more</button>
                <script>
                    function myFunction() {
                      var dots = document.getElementById("dots");
                      var moreText = document.getElementById("more");
                      var btnText = document.getElementById("myBtn");
                    
                      if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        btnText.innerHTML = "Read more"; 
                        moreText.style.display = "none";
                      } else {
                        dots.style.display = "none";
                        btnText.innerHTML = "Read less"; 
                        moreText.style.display = "inline";
                      }
                    }
                    </script>
                    
       



        <!-- video section -->
        <section id = "video">
            <div class = "video-wrapper flex" >
                <video loop preload="true" autoplay muted>
                    <source src = "videos/video-section.mp4" type = "video/mp4">
                </video>
            </div>
        </section>
        <!-- end of video section -->

        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a  class = "site-brand">
                        Green Leaf<span>&nbsp;Tours</span>
                    </a>
                    <p class = "text">Thank you for choosing our tour guide services. Explore Sri Lanka with our knowledgeable guides, and experience the wonders of this enchanting island through personalized itineraries, insider tips, and unforgettable memories. Happy travels!</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "">Sigiriya</a></li>
                        <li><a href = "">Nine Arches Bridge</a></li>
                        <li><a href = "">Galle Fort</a></li>
                        <li><a href = "">Bentota Beach</a></li>
                        <li><a href = "">Udawalawa National Park</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe Us</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "js/script.js"></script>
        
    </body>
</html>