<?php
session_start();
include('includes/config.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Student Login</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    
</head>
<style>
  *{
    font-family: sans-serif;
  }
  
  .card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
  }
  .card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
  }
  .card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
  }
  .card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
  }

  .label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
  }

  .card-product .price-old {
    color: #999;
  }
  .navbar-brand > img {
    display: block;
    position: relative;
    top: -10px;
}
figure {
   border: 1px solid #ccc;
}
figure:hover {
   box-shadow: 1px 1px 5px #ccc;
   transform: scale(1.1);
   transition-duration: 1s;
}

</style>
<style>
    /* Styling for the slide container */
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    /* Styling for the slide image */
    .slide-image {
    margin-left: -262px;
    width: 110em;
    
}

    /* Styling for the text overlay */
    .text {
        position: absolute;
    bottom: 220px;
    width: 61%;
    background-color: rgba(255, 255, 255, 0.8);
    color: #000;
    padding: 10px 25px;
    box-sizing: border-box;
    text-align: center;
    margin-left: 203px;
    height: 241px;
}
.image-container {
    
    max-width: 100%;
}
.image-wrapper {
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% - (1.5rem * (var(--per-view) - 1))) / var(--per-view));
    grid-gap: 1.5rem;
    position: relative;
    left: 0;
    transition: .3s;
}
.image-wrapper > * {
    aspect-ratio: 4 / 3;
}


/* IMAGE */
</style>

<body style="overflow-x: hidden;">
<div class="navbar navbar-inverse set-radius-zero"   style = "height: 76px; background-color: #fff; border-color: transparent; box-shadow: 1px 1px 13px #a9a5a5;">
   <div class="container-fluid">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#" style=" font-size:35px; line-height:3px; ">
                   <!-- STUDY MATE
                   <br><br> -->
                   <img src="../image/log2.jpeg" width="150" >
                  
                </a>
            </div>
          
            <div class="right-div">
                <div class="navbar-collapse collapse px-0">
                    <ul id="menu-top" class="nav navbar-nav" style="    text-decoration: dashed;">
                        <li class=""><a href="page1.php">Home</a></li>
                        <li class=""><a href="../index.php"> User Login</a></li>
                        <li class=""><a href="index.php"> Admin Login</a></li>
                        
                    </ul>
                </div>
            </div>
        
        </div>
        </div>
        
 <!--? slider Area Start-->
 
<div class="slideshow-container">
    <div class="slide">
        <img src="../image/bb_cleanup.jpg" class="slide-image" alt="Slide 1">
        <!-- <div class="text">
            <h2>Leaning Platform</h2><br>
            <p style="    font-size: 19px;"> Build skills with courses, certificates, and degrees <br>online from world-class universities and companies.</p>
        </div> -->
    </div>
</div>

 <!-- ? services-area -->
<br>
  
                <div class="container">
<h3> Popular Courses </h3>
<br>
   <div class="container">
      <div class="row">

           <div class="image-container">
               <div class="image-wrapper">
     <div>
    <figure class="card card-product">
       <div class="img-wrap"><img src="https://wallpapercave.com/wp/wp7250222.jpg"width="370" height="370"></div>
        <figcaption class="info-wrap">
             <h4 class="title">Java</h4>
             <p class="desc">Java is an object-oriented programming language that produces software for multiple platforms. When a programmer writes a Java application.</p>
     
        </figcaption>
        <div class="bottom-wrap">
           <a href="home.php" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="1000" data-id="1">Enroll Now</a> 
               <div class="price-wrap h5">
                 <span class="price-new">₹1000</span> <del class="price-old">₹1200</del>
               </div> <!-- price-wrap.// -->
         </div> <!-- bottom-wrap.// -->
    </figure> 
    </div>


    <div>
    <figure class="card card-product">
         <div class="img-wrap"><img src="../image/python.jpg" width="370" height="370"> </div>
          <figcaption class="info-wrap">
              <h4 class="title">Python</h4>
              <p class="desc">Python is a computer programming language often used to build websites and software, automate tasks, and conduct data analysis.</p>
      
           </figcaption>
         <div class="bottom-wrap">
           <a href="home.php" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/vvjghg.png" data-amount="1280" data-id="2">Enroll Now</a> 
                 <div class="price-wrap h5">
                  <span class="price-new">₹1280</span> <del class="price-old">₹1400</del>
               </div> <!-- price-wrap.// -->
              </div> <!-- bottom-wrap.// -->
    </figure>   
    </div>



    <div>
    <figure class="card card-product">
          <div class="img-wrap"><img src="//www.tutsmake.com/wp-content/uploads/2019/03/jhgjhgjg.jpg" width="370" height="370"></div>
            <figcaption class="info-wrap">
            <h4 class="title">C Programming</h4>
              <p class="desc">In this C Tutorial, you’ll learn all C programming basic to advanced concepts like variables, arrays, pointers, strings, loops, etc. </p>
      
            </figcaption>
           <div class="bottom-wrap">
              <a href="home.php" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/jhgjhgjg.jpg" data-amount="1500" data-id="3">Enroll Now</a> 
               <div class="price-wrap h5">
                  <span class="price-new">₹1500</span> <del class="price-old">₹1980</del>
              </div> <!-- price-wrap.// -->
           </div> <!-- bottom-wrap.// -->
    </figure>   
   </div>


 <div>
 <figure class="card card-product">
  <div class="img-wrap"><img src="./image/html.png" width="300" height="300"> </div>
  <figcaption class="info-wrap">
      <h4 class="title">Html</h4>
      <p class="desc">Python is a computer programming language often used to build websites and software, automate tasks, and conduct data analysis.</p>
      
  </figcaption>
  <div class="bottom-wrap">
      <a href="home.php" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/vvjghg.png" data-amount="1280" data-id="2">Enroll Now</a> 
      <div class="price-wrap h5">
        <span class="price-new">₹1280</span> <del class="price-old">₹1400</del>
      </div> <!-- price-wrap.// -->
  </div> <!-- bottom-wrap.// -->
 </figure> 
 </div>
   
  </div> 
</div>



</div> <!-- row.// -->

</div> 
<!--container.//-->
 
  
  <br><br>
  
           
<?php include('includes/footer.php')?>
  
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <script>
        const imageWrapper = document.querySelector('.image-wrapper')
const imageItems = document.querySelectorAll('.image-wrapper > *')
const imageLength = imageItems.length
const perView = 3
let totalScroll = 0
const delay = 1000

imageWrapper.style.setProperty('--per-view', perView)
for(let i = 0; i < perView; i++) {
  imageWrapper.insertAdjacentHTML('beforeend', imageItems[i].outerHTML)
}

let autoScroll = setInterval(scrolling, delay)

function scrolling() {
  totalScroll++
  if(totalScroll == imageLength + 1) {
    clearInterval(autoScroll)
    totalScroll = 1
    imageWrapper.style.transition = '0s'
    imageWrapper.style.left = '0'
    autoScroll = setInterval(scrolling, delay)
  }
  const widthEl = document.querySelector('.image-wrapper > :first-child').offsetWidth + 24
  imageWrapper.style.left = `-${totalScroll * widthEl}px`
  imageWrapper.style.transition = '.3s'
}
        </script>
   <br>
  
</body>
</html>