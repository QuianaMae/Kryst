<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$data['name']?> - <?=$data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?=$data['name']?></a></h1>
      <h2>I'm an <span><?=$data['title']?></span> student from <?=$data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#projects">Projects</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <div class="social-links">

        <?php   
          if($data['facebook']){
        ?>
            <a href="<?=$data["facebook"]?>" target="" class="facebook"><i class="bi bi-facebook" ></i></a>
        <?php
          }
        ?>

        <?php   
          if($data['instagram']){
        ?>
            <a href="<?=$data["instagram"]?>" target="" class="instagram"><i class="bi bi-instagram"></i></a>
        <?php
          }
        ?>

      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/imgs/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <p class="fst-italic">
            <?=$data['slogan']?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?=$data['age']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Sex:</strong> <span><a style="color: white;" href="<?=$data['sex']?>" target="_blank"><?=$data['sex']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span><a style="color: white;" href="<?=$data['status']?>" target="_blank"><?=$data['status']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['birthday']))?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a style="color: white;" href="tel:<?=$data['phone']?>"><?=$data['phone']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?=$data['city']?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a style="color: white;" href="tel:<?=$data['phone']?>"><?=$data['phone']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email #1:</strong> <span><a style="color: white;" href="mailto:<?=$data['email #1']?>"><?=$data['email #1']?></a></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email #2:</strong> <span><a style="color: white;" href="mailto:<?=$data['email #2']?>"><?=$data['email #2']?></a></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!-- End About Me -->

  </section><!-- End About Section -->

  <!-- ======= Education Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

    <div class="section-title">
        <h2>Eudcational Attainment</h2>
        <p>Check My Educational Attainment</p>
      </div>
      
      <div class="resume-item">
        <h4>Kindergarten</h4>
        <h5>San Roque, Elementary School</h5>
        <p>Barangay San Roque, Zamboanga City</p>
        <p><em>2010 - 2011</em></p>
      </div>

      <div class="resume-item">
        <h4>Elementary</h4>
        <h5>San Roque, Elementary School</h5>
        <p>San Roque, Zamboanga City</p>
        <p><em>2011 - 2017</em></p>
      </div>

      <div class="resume-item">
        <h4>Junior High School</h4>
        <h5>Southcom National High School</h5>
        <p>Calarian, Zamboanga City</p>
        <p><em>2017 - 2021</em></p>
      </div>
      
      <div class="resume-item">
        <h4>Senior High School</h4>
        <h5>Southcom National High School</h5>
        <p>Calarian, Zamboanga City</p>
        <p><em>2021 - 2023</em></p>
      </div>
      
      <div class="resume-item">
        <h4>College</h4>
        <h5>Western Mindanao State University</h5>
        <p>Baliwasan Road, Zamboanga City</p>
        <p><em>2023 - PRESENT</em></p>
      </div>
    </div>
  </div>
</div>

  </section><!-- End Education Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$data['address']?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
            
              <?php   
                if($data['facebook']){
              ?>
                  <a href="<?=$data["facebook"]?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <?php
                }
              ?>

              <?php   
                if($data['instagram']){
              ?>
                  <a href="<?=$data["instagram"]?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <?php
                }
              ?>

        
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$data['email #1']?></p>
            <p><?=$data['email #2']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$data['phone']?></p>
          </div>
        </div>
      </div>
      <?php
        if(isset($_POST['send_message'])){
          global $con;
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
        }
      ?>
      <form action="#" method="post" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>