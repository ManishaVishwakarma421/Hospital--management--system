<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>









<!doctype html>
<html lang="en">
  <head>
    <title>Hospital Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet"  href="style.css" >
</head>
  <body>
    <h1>HELLO DEAR</h1>
<hr>
<!-- header section starts  -->

<header class="header">

  <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>WC</strong>medical </a>

  <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#doctors">doctors</a>
      <a href="#appointment">appointment</a>
      <a href="#review">review</a>
      <a href="#blogs">blogs</a>
  </nav>

  <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

  <div class="image">
      <img src="image/home-img.svg" alt="">
  </div>

  <div class="content">
      <h3>we take care of your healthy life</h3>
      <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
      <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
  </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

  <div class="icons">
      <i class="fas fa-user-md"></i>
      <h3>150+</h3>
      <p>doctors at work</p>
  </div>

  <div class="icons">
      <i class="fas fa-users"></i>
      <h3>1030+</h3>
      <p>satisfied patients</p>
  </div>

  <div class="icons">
      <i class="fas fa-procedures"></i>
      <h3>490+</h3>
      <p>bed facility</p>
  </div>

  <div class="icons">
      <i class="fas fa-hospital"></i>
      <h3>70+</h3>
      <p>available hospitals</p>
  </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

  <h1 class="heading"> <span>about</span> us </h1>

  <div class="row">

      <div class="image">
          <img src="image/about-img.svg" alt="">
      </div>

      <div class="content">
          <h3>take the world's best quality treatment</h3>
          <p>Here, All type of Doctors are available in the hospital .Specialty doctors have training in a specific area of medicine. This allows them to treat complex health problems that primary care doctors may not be able to.</p>
          <p>Hospital beds are carefully designed to provide the patients with a wholesome recovery and healing environment while paying great attention to their comfort, stability, as well as safety.</p>
          <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

  </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

  <h1 class="heading"> our <span>services</span> </h1>

  <div class="box-container">

      <div class="box">
          <i class="fas fa-notes-medical"></i>
          <h3>free checkups</h3>
          <p>Regular health check-ups are a must for every individual. Both, young and elderly should undergo health checkups to keep a complete check on their health.</p>
          <a href="https://www.insurancedekho.com/health-insurance/articles/everything" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
          <i class="fas fa-ambulance"></i>
          <h3>24/7 ambulance</h3>
          <p>24*7 network is available to patients, healthcare workers, hospitals, testing labs and government bodies through the helpline number, 8899889952.</p>
          <a href="https://parivaar.org/247-ambulance-services1" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
          <i class="fas fa-user-md"></i>
          <h3>expert doctors</h3>
          <p>Specialty doctors have training in a specific area of medicine. This allows them to treat complex health problems that primary care doctors may not be able to.</p>
          <a href="https://www.medicalnewstoday.com/articles/types-of-doctors#specialists" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
          <i class="fas fa-pills"></i>
          <h3>medicines</h3>
          <p>Detailed and accurate information is provided on over 24,000 prescription and over-the-counter medicines for both consumers and healthcare professionals.</p>
          <a href="https://www.drugs.com/drug_information.html" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
          <i class="fas fa-procedures"></i>
          <h3>bed facility</h3>
          <p>Hospital beds are carefully designed to provide the patients with a wholesome recovery and healing environment while paying great attention to their comfort, stability, as well as safety.</p>
          <a href="https://looksgud.com/blog/15-types-of-bed-in-hospital" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

      <div class="box">
          <i class="fas fa-heartbeat"></i>
          <h3>total care</h3>
          <p>From routine physicals and seasonal allergies, to sick visits and wellness monitoring, our family medicine providers are ready to be your partner in health. </p>
          <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
      </div>

  </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

  <h1 class="heading"> our <span>doctors</span> </h1>

  <div class="box-container">

      <div class="box">
          <img src="image/doc-1.jpg" alt="">
          <h3>Dr Mayuree Wakre</h3>
          <span><b>M.S (Ortho)</b></span>
          <div class="share">
          <p> <span>Consulting Orthopaedic Surgen
          Arthroscopist & Join Replacement SPL..</span></p>
          </div>
      </div>

      <div class="box">
          <img src="image/doc-2.jpg" alt="">
          <h3>Dr Vijay Jagasia</h3>
          <span><b>M.D (Bom)</b></span>
          <div class="share">
          <p>  <span> Consulting Gastroenrologist<
        Hepatologist & Endoscopist </span></p>
          </div>
      </div>

      <div class="box">
          <img src="image/doc-3.jpg" alt="">
          <h3>Dr Geeta Panjabi</h3>
          <span><b>M.B ,D.G.O.</b></span>
          <div class="share">
         
            <p>  <span>Consulting Obstetrician & Gynaecologist </span></p>
            
          
          </div>
      </div>

      <div class="box">
          <img src="image/doc-4.jpg" alt="">
          <h3>Dr Asha Ahuja</h3>
          <span><b> M.D. (Mumbai)</b></span>
          <div class="share">
         <p><span> Consulting Physician Cardiologist & Diabetologist

</span></p> 
          </div>
      </div>

      <div class="box">
          <img src="image/doc-5.jpg" alt="">
          <h3>Dr Rakesh Lalla</h3>
          <span><b> M.D.D.M. (Mumbai)</b></span>
          <div class="share">
          <p><span> Consulting Neurologist</span></p>
          </div>
      </div>

      <div class="box">
          <img src="image/doc-6.jpg" alt="">
          <h3>Dr Suhas</h3>
          <span><b>MBBS (Mumbai)</b></span>
          <div class="share">
          <p><span> Consulting Skin & Hair Spl..</span></p>
          </div>
      </div>
      <div class="box">
          <img src="image/doc-7.jpg" alt="">
          <h3>Dr Ruchita </h3>
          <span><b>MBBS (Mumbai)</b></span>
          <div class="share">
          <p><span> Consulting  Dermitology Spl..</span></p>
              
          </div>
      </div>
      <div class="box">
          <img src="image/doc-8.jpg" alt="">
          <h3>Dr Raja</h3>
          <span><b>M.D.(E.N.T.)</b></span>
          <div class="share">
          <p><span> Consulting E.N.T. Spl..</span></p>
          </div>
      </div>
      <div class="box">
          <img src="image/doc-9.jpg" alt="">
          <h3>Dr Ahuja</h3>
          <span><b>MBBS</b></span>
          <div class="share">
          <p><span> Consulting Neurologist Spl..</span></p>
         
          </div>
      </div>

  </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

  <h1 class="heading"> <span>appointment</span> now </h1>    

  <div class="row">

      <div class="image">
          <img src="image/appointment-img.svg" alt="">
      </div>

      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <?php
          if(isset($message)) {
              foreach($message as $message) {
              echo'<p class ="message">'.$message.'</p>';
          }
          }
      ?>
    
          <h3>make appointment</h3>
          <input type="text"name="name" placeholder="your name" class="box">
          <input type="number"name="number" placeholder="your number" class="box">
          <input type="email"name="email" placeholder="your email" class="box">
          <input type="date"name="date" class="box">
          <input type="submit" name="submit" value="appointment now" class="btn">
      </form>

  </div>

</section>

<!-- appointmenting section ends -->

<!-- review section starts  -->

<section class="review" id="review">
  
  <h1 class="heading"> client's <span>review</span> </h1>

  <div class="box-container">

      <div class="box">
          <img src="image/OIP1.jpg" alt="">
          <h3>win coder</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
      </div>

      <div class="box">
          <img src="image/OIP2.jpg" alt="">
          <h3>win coder</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
      </div>

      <div class="box">
          <img src="image/OIP3.jpg" alt="">
          <h3>win coder</h3>
          <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
          </div>
          <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
      </div>

  </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

  <h1 class="heading"> our <span>blogs</span> </h1>

  <div class="box-container">

      <div class="box">
          <div class="image">
              <img src="image/blog-1.jpg" alt="">
          </div>
          <div class="content">
              <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by win coder </a>
              </div>
              <h3>blog title win coder goes here</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
              <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
      </div>

      <div class="box">
          <div class="image">
              <img src="image/blog-2.jpg" alt="">
          </div>
          <div class="content">
              <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by win coder </a>
              </div>
              <h3>blog title win coder goes here</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
              <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
      </div>

      <div class="box">
          <div class="image">
              <img src="image/blog-3.jpg" alt="">
          </div>
          <div class="content">
              <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by win coder </a>
              </div>
              <h3>blog title win coder goes here</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
              <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
      </div>
      <div class="box">
          <div class="image">
              <img src="image/blog-4.jpg" alt="">
          </div>
          <div class="content">
              <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by win coder </a>
              </div>
              <h3>blog title win coder goes here</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
              <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
      </div>
      <div class="box">
          <div class="image">
              <img src="image/blog-5.jpg" alt="">
          </div>
          <div class="content">
              <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by win coder </a>
              </div>
              <h3>blog title win coder goes here</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
              <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
      </div>
      <div class="box">
          <div class="image">
              <img src="image/blog-6.jpg" alt="">
          </div>
          <div class="content">
              <div class="icon">
                  <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                  <a href="#"> <i class="fas fa-user"></i> by win coder </a>
              </div>
              <h3>blog title win coder goes here</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
              <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
          </div>
      </div>

  </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>quick links</h3>
          <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
          <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
          <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
          <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
          <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
          <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
          <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
      </div>

      <div class="box">
          <h3>our services</h3>
          <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
          <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
      </div>

      <div class="box">
          <h3>appointment info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
          <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
          <a href="#"> <i class="fas fa-envelope"></i> wincoder9@gmail.com </a>
          <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> sylhet, bangladesh </a>
      </div>

      <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
      </div>

  </div>

  <div class="credit"> created by <span>win coder</span> | all rights reserved </div>

</section>

<!-- footer section ends -->
    


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="main.js"></script>  
</body>
</html>