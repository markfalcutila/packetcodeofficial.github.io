<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="fontawesome/all.min.css">
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
     integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
     integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body data-spy="scroll" data-target="#navbarSupportedContent">
    <header>
    <nav class="navbar navbar-expand-lg fixed-top shadow mb-4">
        <a class="navbar-brand" href="#">HOTEL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          
        <span class="line"></span> 
        <span class="line"></span> 
        <span class="line" style="margin-bottom: 0;"></span>
    
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#room">Rooms</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <button class="btn btn-success text-light" type="submit">Boook Now</button>
        </div>
    </nav>

    <div class="mid">
        <div class="hero text-center">
            <h2 class="text-light display-4 font-weight-bold">Hotel Resort</h2>
            <p class="text-light mx-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium  
                lorem is a good language</p>
            
        </div>
    </div> 

    <section class="booking" >
        <div class="container">
            <div class="form row shadow p-3 bg-white rounded">
                
                <div class="form-group col-lg-3 col-md-12 col-12">
                    <span class="form-label">Check In</span>
                    <input class="form-control" type="date" require="">
                </div>
                <div class="form-group col-lg-3 col-md-12 col-12">
                    <span class="form-label">Check Out</span>
                    <input class="form-control" type="date" require="">
                </div>
                <div class="form-group col-lg-3 col-md-12 col-12">
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-12 col-12">
                            <span class="form-label">Room Type</span>
                            <select class="form-control" name="" id="">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4+</option>
                            </select>
                            <span class="select-arrow"></span>
                        </div>
                    <div class="form-group col-lg-6 col-md-12 col-12">
                        <span class="form-label">Guest</span>
                        <select class="form-control" name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4+</option>
                        </select>
                        <span class="select-arrow"></span>
                    </div>
                </div>
                </div>
                <button class="col-lg-3 col-md-3 col-12 submit-btn ">Check Availability</button>
            </div>
        </div>

    </section>
</header>
    <section id="about" class="about py-5 mt-5">
        <div class="row align-items-center container my-5 mx-auto">
            <div class="text col-lg-6 col-md-6 col-12 w-50 pt-5 pb-5">
                <h6>ABOUT US</h6>
                <h2>A Luxuries Hotel with Nature</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis, nostrum nihil voluptas quisquam 
                    laborum omnis dolorem eligendi natus facilis eveniet rem enim molestiae laudantium? Incidunt
                     repellendus itaque sequi voluptatem commodi.</p>
                     <a href="#">Learn More</a>
            </div>
            <div class="img col-lg-3 col-md-3 col-6 w-50 pb-5">
                <img class="img-fluid" src="image/8.png" alt="">
            </div>
            <div class="img col-lg-3 col-md-3 col-6 w-50 pt-5 pb-5">
                <img class="img-fluid" src="image/9.png" alt="">
            </div>
        </div>

    </section>
    
    <section id="service" class="service  py-5">
        <div class="col mx-auto align-items-center my-5">
            <div class="heading text-center pt-5 pb-5">
                <p class="font-weight-bold"style="color:#dfa974;">WHAT WE DO</p>
                <h2 class="font-weight-bold">Discover Our Services</h2>
            </div>
            <div class="row mx-auto justify-content-center align-items-center text-center container">
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                    <h2 class="" style="color: #dfa974;"><i class="fas fa-wifi"></i></h2>
                    <h5 class="font-weight-bold pt-4">Free Wifi</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>    
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                     <h2 class="" style="color: #dfa974;"><i class="fas fa-swimming-pool"></i></h2>
                    <h5 class="font-weight-bold pt-4">Swimming Pool</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>    
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                    <h2 class="" style="color: #dfa974;"><i class="fas fa-mug-hot"></i></h2>
                    <h5 class="font-weight-bold pt-4">Coffee Maker </h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>    
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                    <h2 class="" style="color: #dfa974;"><i class="fas fa-cocktail"></i></h2>
                    <h5 class="font-weight-bold pt-4">Bar & Wine </h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>    
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                    <h2 class="" style="color: #dfa974;"><i class="fas fa-tv"></i></h2>
                    <h5 class="font-weight-bold pt-4">TV HD </h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>    
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2">
                    <h2 class="" style="color: #dfa974;"><i class="fas fa-utensils"></i></h2>
                    <h5 class="font-weight-bold pt-4">Restaurant</h5>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>    
                </div>
            </div>
        </div>
    </section>

    
    <section id="room" class="room  py-5">
        <div class="col mx-auto align-items-center my-5">
            <div class="heading text-center pt-5 pb-5">
                <p class="font-weight-bold"style="color:#dfa974;">OUR ROOM</p>
                <h2 class="font-weight-bold">Rooms & Suites</h2>
            </div>
            <div class="row mx-auto justify-content-center align-items-center text-center container-fluid">
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2 shadow p-3 mb-5 bg-white rounded text-left">
                    <img class="img-fluid"src="image/18.jfif" alt="">
                    <p class="mb-0 pt-5" style="color:#dfa974;"> 
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </p>
                    <h5 class="font-weight-bold pt-4">Deluxe Room</h5>
                    <p>
                        <span style="font-size:15px;">$</span>
                        <span class="font-weight-bold" style="font-size:22px;">160</span>
                        <span style="font-size:15px;">/per night</span>
                    </p>
                    <div class="details ">
                        <p>Adults: <span>1</span></p>   
                        <p>Cateories: <span>Single</span></p> 
                        <p>Size: <span>20m</span></p>  
                        <p>Bed Type: <span>Single</span></p>  
                    </div>
                    
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2 shadow p-3 mb-5 bg-white rounded text-left">
                    <img class="img-fluid"src="image/17.jfif" alt="">
                    <p class="mb-0 pt-5" style="color:#dfa974;"> 
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </p>
                    <h5 class="font-weight-bold pt-4">Deluxe Room</h5>
                    <p>
                        <span style="font-size:15px;">$</span>
                        <span class="font-weight-bold" style="font-size:22px;">160</span>
                        <span style="font-size:15px;">/per night</span>
                    </p>
                    <div class="details ">
                        <p>Adults: <span>1</span></p>   
                        <p>Cateories: <span>Single</span></p> 
                        <p>Size: <span>20m</span></p>  
                        <p>Bed Type: <span>Single</span></p>  
                    </div>
                    
                </div>
                <div class="one col-lg-3 col-md-3 col-12 w-25 m-2 shadow p-3 mb-5 bg-white rounded text-left">
                    <img class="img-fluid"src="image/18.jfif" alt="">
                    <p class="mb-0 pt-5" style="color:#dfa974;"> 
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                    </p>
                    <h5 class="font-weight-bold pt-4">Deluxe Room</h5>
                    <p>
                        <span style="font-size:15px;">$</span>
                        <span class="font-weight-bold" style="font-size:22px;">160</span>
                        <span style="font-size:15px;">/per night</span>
                    </p>
                    <div class="details ">
                        <p>Adults: <span>1</span></p>   
                        <p>Cateories: <span>Single</span></p> 
                        <p>Size: <span>20m</span></p>  
                        <p>Bed Type: <span>Single</span></p>  
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="bg2">
        <div class="container pt-5 pd-5">
            <div class="row">
                <div class="row d-flex justify-content-center mx-auto">
                    <p class="mx-auto mt-5">WHY CHOOSE US</p>
                    <h2 class="text-light display-4 font-weight-bold">Quality accomodation that exceeds the Expectations</h2>
                    <a href="#" class="mb-5 mx-auto text-light">Book Now</a>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="contact  py-5">
            <div class="heading text-center pt-5">
                        <p class="font-weight-bold"style="color:#dfa974;">OUR CONTACT</p>
                        <h2 class="font-weight-bold">Contact Us</h2>
            </div>

            <div class="row align-items-center container my-5 mx-auto">
                <div class="col-lg-7 col-md-6 col-12 pt-5 pb-5">
                    <h2 class="">Message Us</h2>
                    <div class="form-group col-lg-6 col-md-6 col-12 mr-5 mt-5">
                            <input type="text" class="form-control px-3 py-3" placeholder="Your Name :">
                            <input type="text" class="form-control px-3 py-3" placeholder="Email :">              
                            <input type="text" class="form-control px-3 py-3" placeholder="Subject:">   
                            <textarea class=" px-3 py-3 "name="" id="" cols="30" rows="2" placeholder="Your Message:"></textarea>
                            <input type="submit" value="Submit Message" class="btn btn-primary py-3 px-5">
                    </div>
                </div>
                <div class="img col-lg-5 col-md-3 col-12 pb-5">
                     <div class="mapouter"><div class="gmap_canvas"><iframe width="479" height="473" id="gmap_canvas" src="https://maps.google.com/maps?q=makati&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:473px;width:479px;}
                    </style><a href="https://www.embedgooglemap.net">embed google map wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:473px;width:479px;}</style></div></div>
                </div>
            </div>
    </section> 
    <section>
        
    <div class="container mt-5 mb-5">
            <div class="heading text-center  pb-5">
                        <p class="font-weight-bold"style="color:#dfa974;">TESTIMONIAL</p>
                        <h2 class="font-weight-bold">Happy Guest</h2>
            </div>
           
            <div class="owl-carousel owl-theme">
                <div class="item ml-2 mr-2">
                    <div class="card shadow p-2 mb-5 bg-white rounded">
                        <img src="image/img.jfif" alt="">
                        <div class="card-body">
                            <p class="card-text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui provident maiores recusandae, 
                            reprehenderit praesentium iure rem, perspiciatis nesciunt, 
                            </p>
                            <p class="text-center">-Jean Smith</p>
                        </div>
                    </div>
                </div>
                <div class="item ml-2 mr-2">
                    <div class="card shadow p-2 mb-5 bg-white rounded">
                        <img src="image/img2.jfif" alt="">
                        <div class="card-body">
                            <p class="card-text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui provident maiores recusandae, 
                            reprehenderit praesentium iure rem, perspiciatis nesciunt, 
                            </p>
                            <p class="text-center">-Jean Smith</p>
                        </div>
                    </div>
                </div>
                <div class="item ml-2 mr-2">
                    <div class="card shadow p-2 mb-5 bg-white rounded">
                        <img src="image/img3.jfif" alt="">
                        <div class="card-body">
                            <p class="card-text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui provident maiores recusandae, 
                            reprehenderit praesentium iure rem, perspiciatis nesciunt, 
                            </p>
                            <p class="text-center">-Jean Smith</p>
                        </div>
                    </div>
                </div>
                <div class="item ml-2 mr-2">
                    <div class="card shadow p-2 mb-5 bg-white rounded">
                        <img src="image/img4.jfif" alt="">
                        <div class="card-body">
                            <p class="card-text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui provident maiores recusandae, 
                            reprehenderit praesentium iure rem, perspiciatis nesciunt, 
                            </p>
                            <p class="text-center">-Jean Smith</p>
                        </div>
                    </div>
                </div>
                <div class="item ml-2 mr-2">
                    <div class="card shadow p-2 mb-5 bg-white rounded">
                        <img src="image/img5.jfif" alt="">
                        <div class="card-body">
                            <p class="card-text">
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui provident maiores recusandae, 
                            reprehenderit praesentium iure rem, perspiciatis nesciunt, 
                            </p>
                            <p class="text-center">-Jean Smith</p>
                        </div>
                    </div>
            </div>
    </div>
    </section>

     

  
    
    <div class="footer">
        <div class="container">
            <div class="row mb-5 ">
                <div class="col-lg-3 mb-3">
                    <h3 class="footer-logo">
                        <span style="color:#E9AD28;"><i class="fas fa-map-marker-alt"></i></span> 
                        HOTEL</h3>
                        
                    <h1 class="footer-contact">(123)456-78-91096</h1>
                    <p>Maybunga, Pasig City</p>
                    <p>medinamark201@gmail.com</p>
                    <div class="contact-logo">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fabs fa-envelope"></i></a>
                    </div>    
                </div>
                <div class="col-lg-3 mb-3">
                    <h3 class="heading-section">ABOUT US</h3>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis repellat voluptas,
                        natus voluptate aliquid dolor sit veniam porro. Nihil eaque quibusdam, 
                        dolorem reprehenderit blanditiis corporis natus ab esse facilis ex!</p>
                </div>
                <div class="col-lg-2 mb-3">
                    <h3 class="heading-section">LINKS</h3>
                    <ul class="mb-5 links-section">
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#rooms">Rooms</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Conctact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <h3 class="heading-section">SUBSCRIBE</h3>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis repellat voluptas, </p>
                    <div class="footer-form">
                        <div class="row">
                            <input type="text" placeholder= "Your Email Here" class="col-lg-7">
                            <button type="submit" class="col-lg-5">Subscribe</button>
                        </div>   
                    </div>
                </div>

            </div>
        </div>
        
    </div>

    

  


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>               
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
            loop:true,
            items:4,
            margin:10,
            autoplay:false,
            autoplayHoverPause:true,
            autoplayTimeout:1000,
            nav:true,
            dots:true,
            responsive:{
                0:{
                    items:1,
                    dots:false
                },
                480:{
                    items:2,
                    dots:true
                },
                780:{
                    items:3,
                    dots:true
                },
                1000:{
                    items:4,
                    dots:true
                }
                
            }
        })
    </script>
</body>
</html>