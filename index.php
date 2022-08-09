<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Customer</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<style>
  .ba{
    background-image:linear-gradient(to bottom, rgba(251, 250, 252, 0.4), rgba(251, 250, 252,0.4)),url(./images/pexels-anna-shvets-3876566.jpg); 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
  }

.slider{
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center bottom;
    background: fixed;
    width: 100%;
    height:100vh;
    animation-name: slide;
    animation:slide 15s infinite;
}
@keyframes slide{

    0%{
        background-image:  linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0,0.4)),url(./images/num12.jpg);
    
    }
    50%{
        background-image: linear-gradient(to bottom,rgba(0, 0, 0, 0.7), rgba(0, 0, 0,0.4)),url(./images/num9.jpg);
    }
    100%{
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0,0.6)),url(./images/num11.jpg);
    }
   
}
li a{
  font-size: 1.5rem;
}
.principal{
    left:50%;
    top:50%;
    transform: translate(-50%,-50%);
    position:absolute;
    color: white;
    font-size: 2.5rem;
    width: 35%;
}
.bg{
  background-color: white;
    border: 1px solid #444;
    padding: 2rem 1rem;
    border: none;
    border-radius: 1rem 1rem;
    box-shadow: 0.05rem 0rem 0.08rem 0rem rgb(255, 255, 255);
    transition: 0.5s;
}

.bor{
  border: none;
  background-color: white;
}
button{
font-weight: bolder;
font-size:1.1rem;
padding:0.3rem 0.7rem;
border-radius:2rem;
color: white;
background-color: rgb(74, 74, 74);
border: none;

}
.slider p{
font-size: 2.8rem;
}
@media only screen and (max-width: 540px){
.slider p{
  font-size:1.8rem;
}

}
@media only screen and (max-width: 810px){
.slider p{
  font-size: 2.2rem;
}

}
</style>




</head>
<body>
    <div class="container-fluid slider">
        <div class="row  font d-flex p-3 text-center ">
            <div class="col-md-2 col-sm-12">
                <h2 style="color:white; font-size: 3.2rem;font-family: 'Josefin Sans', sans-serif;">NiRj</h2>
            </div>
            <div class="col-md-7 col-sm-12 ">
                
            </div>
            <div class="col-md-3 col-sm-12 ">
            <ul>
            <li><a href="signln.php">SignIn</a> </li>
                <li><a href="signup.php">Signup</a>
                </li>
                </ul>
            </div>
        </div>
        
            <div class="principal text-center">
               
           <p style="font-weight:bold;">Safest way possible to reach your products to the destination.</p>
           
    
        </div>
    </div>
   <div class="ba">
    <div class="container pt-5 text-center">
        <h1 style="font-weight:bolder;">About</h1>
        <div class="row bg mt-5">
           
            <div class="col-md-6 col-sm-12">
<img src="./images/num3.jpg" alt="nothing" style="border-radius:1.2rem;">
            </div>
            <div class="col-md-6 col-sm-12">
                <h1>NiRj</h1>
                <p style="font-family: 'Roboto Condensed', sans-serif;"> Provides a safest way to reach the customer’s products to their destination or deliver products 
                    to the customers and ensure the safety of the customer’s product.It tries to make sure the products are protected during transport and tries to maximize the delivery speed.
                    The main motive is to develop a customer-centric contigency plan,to reduce the day to day work hectic by automating all the manual work of courier related 
                    organizations into computer based work,to keep track of all the companies that uses courier services daily or most frequently,to help different samll business agencies to reach their products to their customers safely and to make an affordable situation so that all classes of people can take this service.
 

                </p>
        </div>
    </div>
    </div>
    <div class="container text-center pt-5 mt-3" id="service">
        <div class="row pt-5" >
            <h1 style="font-weight:bolder;">Services</h1>
            <div class="col-md-3 col-sm-12 mt-5 pt-4 bor">
<img src="./images/boxes.svg" alt="nothing" style="width:15%">
<p style="font-size:1.6rem;">Parcel Delivery</p>
<p style="font-family: 'Roboto Condensed', sans-serif;">We ensure proper packaging of customer's product and make sure that the product is handed without any damage and at the right place</p>
            </div>
            <div class="col-md-3 col-sm-12 mt-5 pt-4 bor">
<img src="./images/delivery-cart-cart-svgrepo-com.svg" alt="nothing" style="width:15%">
<p style="font-size:1.6rem;">Bulk Shipment</p>
<p style="font-family: 'Roboto Condensed', sans-serif;">The benefit is the ability to ship oversized goods without breaking them down into smaller shipments</p>
            </div>
            <div class="col-md-3 col-sm-12 mt-5 pt-4 bor">
                <img src="./images/hiring.svg" alt="nothing" style="width:15%">
                <p style="font-size:1.6rem;">Hiring</p>
                <p style="font-family: 'Roboto Condensed', sans-serif;">We provide hiring facility for the people who are wiling to be a part of this service.We will offer a limited post  in different place</p>
            </div>
            <div class="col-md-3 col-sm-12 mt-5 pt-4 bor">
                <img src="./images/cash-on-delivery.svg" alt="nothing" style="width:15%">
                <p style="font-size:1.6rem;">Cash on Delivery</p>
                <p style="font-family: 'Roboto Condensed', sans-serif;">We provide cash on delivery service.After confirming the product ,the customer will give the cash.</p>
            </div>
            
        </div>
    </div>
    <br>
    <br>
    <br>
  <hr>
<div class="container mt-5 pt-5 text-center">
        <h1 style="font-weight:bolder;">Latest Updates</h1>
        <div id="slide-container" class="slid mt-5">
            <div class="sli">
                    <img src="./images/num1.jpg" alt="nothing">
            </div>
            <div class="sli">
                    <img src="./images/num10.jpg" alt="nothing">
            </div>
            <div class="sli">
                    <img src="./images/num5.jpg" alt="nothing">
            </div>
            <div class="sli">
                    <img src="./images/num6.jpg" alt="nothing">
            </div>
            <div class="sli">
                    <img src="./images/num7.jpg" alt="nothing">
            </div>
            <div class="sli">
                <img src="./images/num13.jpg" alt="nothing">
        </div>
        <div class="sli">
            <img src="./images/num14.jpg" alt="nothing">
    </div>
    <div class="sli">
        <img src="./images/num15.jpg" alt="nothing">
</div>
<div class="sli">
        <img src="./images/num18.jpg" alt="nothing">
</div>
        </div>
        
        
        <div class="overlay"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
  <hr>
    <div class="container p-5 mt-5 text-center font">
        <h1 style="font-weight:bolder;">Questions</h1>
        <div class="accordion accordion-flush pt-5" id="accordionFlushExample">
            <div class="accordion-item p-3">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  What kind of service do  provide Nijx?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Parcel delivery and Bulk shipment.</div>
              </div>
            </div>
            <div class="accordion-item p-3">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Area Coverage of Nijx?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Depends on the amount of riders</div>
              </div>
            </div>
            <div class="accordion-item p-3">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed font" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                 Max time to reach the destination?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">2/3 days..</div>
              </div>
            </div>
          </div>
    </div>
    </div>
    <div class="container-fluid text-center BG-BLACK ">
        <div class="row p-3">
        <div class="col-md-4 col-sm-12 p-4">
          <h1>NiRj</h1>
          <br><br>
          <p style="font-size:1rem">Experice New features with us<br> and have safe service</p>
         
        </div>
            <div class="col-md-4 col-sm-12 pt-5">
                
               <p><a href="index.php" style="text-decoration:none; list-style:none;color:white">HOME</a></p>
               <P><a href="#service" style="text-decoration:none; list-style:none;color:white">SERVICES</a></P>
              
               <P><a href="Terms.php" style="text-decoration:none; color:white;">Terms & Conditions</a></P>
               

            </div>
            <div class="col-md-4 col-sm-12 pt-5">
                
              <P ><a href="contact.php" style="text-decoration:none; list-style:none;color:white">Contact Us</a></P>  
              <P><a href="know.php" style="text-decoration:none; list-style:none;color:white">ABOUT US</P></a>
              <i class="fa fa-facebook-square" aria-hidden="true"></i>
               <i class="fa fa-twitter fa-lg"></i>
               <i class="fa fa-github fa-lg"></i>
               <i class="fa fa-instagram fa-lg"></i>
            </div>
           
        </div>
        <p style="text-align:center; padding-bottom: 0.5rem;">© 2021. ALL RIGHTS RESERVED.</p>
    </div>
    <script src="./js/back.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/accordian.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>