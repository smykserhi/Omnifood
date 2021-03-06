<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">                                                                       <!-- Установка кодтровки -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">                       <!-- настройка queries на разные расширения экрана-->   
        <meta name="description" content="Omnifood is super halthy food delivery in san fransisco" > <!-- описаниеи для поискового робота google -->
        <link type="text/css" rel="stylesheet" href="webres/scc/normalize.css">
        <link rel="stylesheet" type="text/css" href="webres/scc/grid.css"> 
        <link rel="stylesheet" type="text/css" href="webres/scc/animate.css">
        <link type="text/css" rel ="stylesheet" href="resourses/css/stile.css">
        <link type="text/css" rel ="stylesheet" href="resourses/css/queries.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <title>Omnifood</title>
        <link rel="apple-touch-icon" sizes="180x180" href="webres/favcicons/apple-touch-icon.png"> <!--это все для загрузки рахличных иконок-->
        <link rel="icon" type="image/png" sizes="32x32" href="webres/favcicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="webres/favcicons/favicon-16x16.png">
        <link rel="manifest" href="webres/favcicons/site.webmanifest">
        <link rel="mask-icon" href="webres/favcicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="webres/favcicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="webres/favcicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
        <header> 
            <nav >
                <div >
                    <img src="resourses/img/logo-white.png" class="logo" alt="logo">
                    <img src="resourses/img/logo.png" class="logo-black" alt="logo">
                    <ul class="navi_list js--navi-list">
                        <li class="js-Delivery"><a href="#Delivery"> Food delivery</a> </li>
                        <li class="js--How-It-Works"><a href="#How-it-works">How it works</a> </li>
                        <li class="js--Coties"><a href="#Sities">Our cities</a> </li>
                        <li class="js--Sing-up"><a href="#Section-form">Sign up</a> </li>
                    </ul>
                    <i  class="js-nav-i">
                        <a class="apps js--apps" ><ion-icon name="apps" ></ion-icon></a>
                        <a class="close js--close"><ion-icon name="close"></ion-icon></a>
                    </i>

                </div>
            </nav>
            <div class="main-sighn" >
                <h1>Goodbye junk food.<br> Hello super healthy meals</h1>
                <a class="btm btm-1 js--plan-btm" href="#">I’m hungry </a>
                <a class="btm btm-2 js--First-Section" href="#">Show me more</a>            
            </div>        
        </header>
        
        <section class="Section-One js--Section-One" id="Delivery">
            <div class="row">
                
                <h2> Get food fast — not fast food </h2>
                <p class="Long-Copy">Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
                </p>           
            </div>
            <div class="row js--wp1">
              
                <div class="col span-1-of-4 box">
                      <ion-icon name="flask" class="logo2"></ion-icon>
                    <h3>Up to 365 days/year</h3>
                    <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>            
                    </div>
            
            
                <div class="col span-1-of-4 box">
                      <ion-icon name="egg" class="logo2"></ion-icon> 
                    <h3>Ready in 20 minutes</h3>
                    <p>NYou're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>            
                
                </div>
                <div class="col span-1-of-4 box">
                      <ion-icon name="football" class="logo2"></ion-icon>
                    <h3>100% organic</h3>
                    <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>            
                </div>
                <div class="col span-1-of-4 box">
                      <ion-icon name="finger-print" class="logo2"></ion-icon>
                    <h3>Order anything</h3>
                    <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>            
                </div>
            </div>
        
        
        </section>
        <div class = "section-meals js--Section-Meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photos">
                        <img src="resourses/img/1.jpg" alt="Korean bibimbap with egg and vegetables">                     
                    </figure>
                </li>
                <li>
                    <figure class="meal-photos">
                        <img src="resourses/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">                     
                    </figure>
                </li>
                <li>
                    <figure class="meal-photos">
                        <img src="resourses/img/3.jpg" alt="Chicken breast steak with vegetables">                     
                    </figure>
                </li>
                <li>
                    <figure class="meal-photos">
                        <img src="resourses/img/4.jpg" alt="Autumn pumpkin soup">                     
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photos">
                        <img src="resourses/img/5.jpg" alt="Paleo beef steak with vegetables">                     
                    </figure>
                </li>
                <li>
                    <figure class="meal-photos">
                        <img src="resourses/img/6.jpg" alt=" Healthy baguette with egg and vegetables">                     
                    </figure>
                </li>
                <li>
                    <figure class="meal-photos">
                        <img src="resourses/img/7.jpg" alt="Burger with cheddar and bacon">                     
                    </figure>
                </li>
                <li>
                    <figure class="meal-photos">
                        <img src="resourses/img/8.jpg" alt="Granola with cherries and strawberries">                     
                    </figure>
                </li>
            </ul>
        </div>
        <section class="section-steps clearfix js--How-it-works" id="How-it-works">
            <div class="row sec3">
                <h2>How it works - Simple as 1, 2, 3</h2>
            </div> 
            <div class="row">
                <div class="col span-1-of-2 steps-box js--wp2">
                    <img src="resourses/img/app-iPhone.png" alt="Omnifood app" class="app-screan">
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="work-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="work-step">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="work-step">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>
                    <a href="#" class="btn-app"><img src="resourses/img/download-app.svg" alt="appStore btm"></a>
                    <a href="#" class="btn-app"><img src="resourses/img/download-app-android.png" alt=" Googl play btm"></a>
                </div>
            </div>
        </section>
        <section class="section-cities clearfix js--Sities" id="Sities">
            <div class="row">
                <h2>We're currently in these cities</h2>
            </div> 
            <div class="row sitimg" >
                <div class="col span-1-of-4 sityimg">
                    <img src="resourses/img/lisbon-3.jpg" alt="Lisbom image">
                </div>
                <div class="col span-1-of-4 sityimg">
                    <img src="resourses/img/berlin.jpg" alt="Berlin image">
                </div>
                <div class="col span-1-of-4 sityimg">
                    <img src="resourses/img/london.jpg" alt="London image">
                </div>
                <div class="col span-1-of-4 sityimg">
                    <img src="resourses/img/san-francisco.jpg" alt="San-Francisko image">
                </div>                    
            </div>  
            <div class="row">
                <div class="col span-1-of-4 city-text">
                    <div >
                        <h3>Lisbon</h3>                        
                        <ion-icon name="happy" class="smile"></ion-icon> 1600+ happy eaters<br>
                        <ion-icon name="star-half" class="star"></ion-icon> 60+ top chefs <br>
                        <ion-icon name="logo-twitter" class="twit"></ion-icon><a href="#">@omnifood_lx<br></a>
                        
                    </div>                
                </div>
                <div class="col span-1-of-4 city-text">
                    <div class="p">
                        <h3>Berlin</h3>
                        <ion-icon name="happy" class="smile"></ion-icon> 2300+ happy eaters<br>
                        <ion-icon name="star-half" class="star"></ion-icon>110+ top chefs<br>
                        <ion-icon name="logo-twitter" class="twit"></ion-icon><a href="#">@omnifood_berlin<br></a>
                    </div>                
                </div>
                <div class="col span-1-of-4 city-text">
                    <div >
                        <h3>London</h3>
                        <ion-icon name="happy" class="smile"></ion-icon>1200+ happy eaters<br>
                        <ion-icon name="star-half" class="star"></ion-icon>50+ top chefs<br>
                        <ion-icon name="logo-twitter" class="twit"></ion-icon> <a href="#"> @omnifood_london<br></a>
                    </div>                
                </div>
                <div class="col span-1-of-4 city-text">
                    <div>
                        <h3>San Francisco</h3>
                        <ion-icon name="happy" class="smile"></ion-icon>3700+ happy eaters<br>
                        <ion-icon name="star-half" class="star"></ion-icon>160+ top chefs<br>
                        <ion-icon name="logo-twitter" class="twit"></ion-icon><a href="#">@omnifood_sf<br></a>
                    </div>                
                </div>
            </div>
        </section>
        <section class="customer-testimonials">
            
            <div class="row">
                <h2> Our customers can't live without us</h2>
            </div> 
            <div>
                <div class="col span-1-of-3">
                    <blockquote>
                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                        <cite class="image-cus"><img src="resourses/img/customer-1.jpg" alt="customer-1">Alberto Duncan</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                        <cite class="image-cus"><img src="resourses/img/customer-2.jpg" alt="customer-2">Joana Silva</cite>
                    </blockquote>
                </div>
                <div class="col span-1-of-3">
                    <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                       <cite class="image-cus"><img src="resourses/img/customer-3.jpg" alt="customer-3">Milton Chapman</cite>
                    </blockquote>
                </div>
            </div>
        
        </section>
        <section class="section-plans js-Section-Plans">
            <div class="row">
                <h2>Start eating healthy today</h2>
            </div>
            <div class="row">
                
                    <div class="col span-1-of-3">
                        <div class="price-Coloms">
                            <div class="plan-name"><h3>Premium</h3></div>
                            <p class="price-plane">399$ <span>per month</span></p>
                            <ul class="list-plane">
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>That’s only 13.30$ per meal</li>
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>1 meal every day</li>
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>Order 24/7</li>
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>Access to newest creations</li>
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>Free delivery</li>
                                <li class="bbb js--wp3"><a class="btm btm-1" href="#">Sing up now </a></li>
                            </ul>
                    </div>
                    </div>
                
                
                    <div class="col span-1-of-3">
                        <div class="price-Coloms">
                            <div class="plan-name"><h3>Pro</h3></div>
                            <p class="price-plane">149$ <span>per month</span></p>
                            <ul class="list-plane">
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>That’s only 14.90$ per meal</li>
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>1 meal 10 days/month</li>
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>Order 24/7</li>
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>Access to newest creations</li>
                                <li><ion-icon name="checkmark-circle-outline"></ion-icon>Free delivery</li>
                                <li class="bbb"><a class="btm btm-2" href="#">Sing up now </a></li>
                            </ul>

                        </div>
                    </div>
               
                
                    <div class="col span-1-of-3">
                        <div class="price-Coloms">
                            <div class="plan-name"><h3>Starter</h3></div>
                            <p class="price-plane">19$ <span> per meal</span></p>
                            <ul class="list-plane">
                                <li><ion-icon name="close"></ion-icon></li>
                                <li><ion-icon  class="si" name="checkmark-circle-outline"></ion-icon>1 meal</li>
                                <li><ion-icon  class="si" name="checkmark-circle-outline"></ion-icon>Order from 8 am to 12 pm</li>
                                <li><ion-icon name="close"></ion-icon></li>
                                <li><ion-icon class="si" name="checkmark-circle-outline"></ion-icon>Free delivery</li>
                                <li class="bbb"><a class="btm btm-2 btm-plane" href="#">Sing up now </a></li>
                            </ul>
                        </div>
                    </div>
               
            </div>
        </section>
        <section class="section-form js--Section-form" id="Section-form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row" id="form">
                <form method="post" action="mailer.php" class="contact-form">   <!-- script which execute when aplay send buttom-->
                    <div class="row">
                        <?hph
                        if($_GET['seccess'] == 1){
                            echo "<div class=\"form-messages success\">Thank you! Your message has been sent </div>"
                        }
                        if($_GET['seccess'] == -1){
                            echo "<div class=\"form-messages error\">TSomthing went wrong! Pleace try again </div>"
                        }
                        ?>       
                        
                          
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                           <select name="find-us" id="find-us">
                                <option value="frends">Frends</option>
                               <option value="google" selected >Google</option>
                               <option value="ad">Advertisment</option>
                               <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label> <!-- Символ " "  -->
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it">

                        </div>
                    </div>
                </form>
            </div>
            
        </section>
        <footer class="Footer-section js-Footer-Section">
            <div class="row">                
                    <div class="col span-1-of-2">
                        <ul class="footer-nav">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">iOS App</a></li>
                            <li><a href="#">Android App</a></li>
                        </ul>
                    </div>
                
                
                    <div class="col span-1-of-2">
                        <ul class="social-links">
                            <li><a href="#"><ion-icon name="logo-facebook" id="logo-facebook"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-twitter" id="logo-twitter"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-googleplus" id="logo-googleplus"></ion-icon></a></li>
                            <li><a href="#"><ion-icon name="logo-instagram" id="logo-instagram"></ion-icon></a></li>
                        </ul>
                    </div>            
            </div> 
            <div class="row">
                <p>
                    Copyright &copy; 2015 by Omnifood. All right recerved
                </p>
            
            </div>
        </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond@0.9.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="webres/js/jquery.waypoints.min.js"></script>
    <script src="resourses/js/script.js"></script>
    
    </body>
</html>
<!--
-->