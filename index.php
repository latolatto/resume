<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazime Toshi </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Brush+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet"/>
  </head>
<body>
  <div class="grid-container">
    <nav class="grid1 navbar navbar-expand-lg" aria-label="Tenth navbar example">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse  justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav" >
            <li class="nav-item">
              <a class="nav-link activated" id="nav-item" aria-current="page" href="#one">About me </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#two"id="nav-item">Technical skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#three"id="nav-item">Projects</a>
            </li>
            <li class="nav-item " >
              <a class="nav-link" href="#four"id="nav-item">Background</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="#five"id="nav-item">Contact me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="rreshti1 entry " id="one">
      <img class="cat" src="./assets/cat.png" alt="cat" />
      <h1>Hi there</h1>
      <h2 style="text-align: center;">Welcome to my resume website</h2>
      <img class="profile-img" src="./assets/laz.png" alt="Laz's profile photo"/>
      <h5 class="intro-title" style="text-align: center;margin-bottom:50px;">I'm Laz,a motivated freshly graduated student eager to step foot in the web development career path.</h5>
    </div>
    <div class="grid2 skills skills-title" id="two" style="font-family: 'Nanum Brush Script', cursive;font-size:3rem;text-align: center;">Technical skills</div>
    <div class="grid2 technical d-flex gap-5 justify-content-center "id="two">
      <span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">
       <img class="rounded-circle me-1"width="35" height="35"src="./assets/html.png" alt="">HTML
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-secondary-emphasis bg-secondary-subtle border border-secondary-subtle rounded-pill">
        <img class="rounded-circle me-1" width="35" height="35" src="./assets/css.png" alt="">CSS
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-success-emphasis bg-success-subtle border border-success-subtle rounded-pill">
        <img class="rounded-circle me-1" width="35" height="35" src="./assets/bootstrap.png" alt="">Bootstrap
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-pill">
        <img class="rounded-circle me-1" width="35" height="35" src="./assets/js.png" alt="">Javascript
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-warning-emphasis bg1 border border-warning-subtle rounded-pill">
        <img class="rounded-circle me-1" width="35" height="35" src="./assets/jquery.png" alt="">jQuery
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-info-emphasis b2 border rounded-pill">
        <img class="rounded-circle me-1" width="35" height="35" src="./assets/node.png" alt="">Node.js
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-dark-emphasis bg3 border  rounded-pill">
        <img class="rounded-circle me-1" width="40" height="35" src="./assets/express.png" alt="">Express.js
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-dark-emphasis bg4 border  rounded-pill">
        <img class="rounded-circle me-1" width="35" height="35" src="./assets/php.png" alt="">PHP
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-dark-emphasis bg-dark-subtle border border-dark-subtle rounded-pill">
        <img class="rounded-circle me-1" width="35" height="35" src="./assets/sql.png" alt="">SQL
      </span>
      <span class="badge d-flex align-items-center p-1 pe-2 text-dark-emphasis bg5 border  rounded-pill">
        <img class="rounded-circle me-1" width="35" height="35"src="./assets/mysql.png" alt="">MySQL
      </span>
    </div>
    <div class="rreshti-carusel caruseli"id="three">
      <div class="projects-title"style="font-family: 'Nanum Brush Script', cursive;font-size:3rem;">My projects</div>
      <!--carusel-->
      <div id="carouselExampleCaptions" class="carousel slide ">
        <div class="flexbox-carusel " >
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active project-button" aria-current="true" style="z-index: auto;" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="project-button" style="z-index: auto;" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img  src="./assets/tindog.png" class="d-block w-100 carusel-img"  alt="Tindog">
              <div class="carousel-caption d-none d-md-block">
                <a href="./11.3 TinDog Project/index.html" target="_blank" style="z-index: auto;"><h5 class="a">Tindog Project</h5></a>
                <p class="projects">Tinder for dogs made using Bootstrap snipets and components</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="painting" src="./assets/painting.png"  class="d-block w-100" alt="Mondrian Project">
              <div class="carousel-caption d-none d-md-block">
                <a  href="./10.3 Mondrian Project/index.html" target="_blank" style="z-index: auto;"><h5 class="a">Mondrian Project</h5></a>
                <p class="projects">One of Piet Mondrian's paintings completed using CSS properties </p>
              </div>
            </div>
          </div> 
        </div>
        <button class="carousel-control-prev  " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="rreshti2kol1-flexbox1 " id="four" >
      <h4 class="background-title"style="font-family: 'Nanum Brush Script', cursive;font-size:2rem;margin-top:70px;padding-bottom:0;">Academic background</h4>
      <div class=" flex-11">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front" style="padding-top:30px;">
              <h3>Education</h3>
              <img src="./assets/education.png" alt="Education" style="width:40%;height:60%;">
            </div>
            <div class="flip-card-back" style="padding-top: 10%;">
              <p style="font-weight:700;">Master of Science in Business Information systems</p>
              <p style="font-size: 0.6rem;margin-bottom: 30px;">University of Tirana, Albania (2021-2023)</p>
              <p style="font-weight:700;">Bachelor's degree in Finance</p>
              <p style="font-size: 0.6rem;">University of Tirana, Albania : (2018-2021)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex-12">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front" style="padding-top:30px;">
              <h3  style="padding-bottom: 10px;">Trainings and certifications</h3>
              <img src="./assets/certificate.png" alt="Cerficate" style="width:35%;height:50%;">
            </div>
            <div class="flip-card-back"style="padding-top:3%;">
              <p style="font-weight:700;">Full Stack Web Development Bootcamp Student</p>
              <p style="font-size: 0.6rem;margin-bottom: 10px;">App Brewery (2023-present)</p>
              <p style="font-weight:700;">Albanian Machine Learning Workshop (AMLW)</p>
              <p style="font-size: 0.6rem;margin-bottom: 10px;">Artificial Intelligence Association of Albania(2023)</p>
              <p style="font-weight:700;">Huawei SFTF 2022 Program Student</p>
              <p style="font-size: 0.6rem;">Huawei(2022-2023)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="rreshti2kol2-flexbox2 " id="four ">
      <h4  class="background-h4" style="font-family: 'Nanum Brush Script', cursive;font-size:2rem;text-align:center;margin-top:70px;padding-bottom:0;">Professional history and recognitions</h4>
      <div class="flex-21">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front" style="padding-top:30px;">
              <h3 style="padding-bottom: 10px;">Work Experience</h3>
              <img src="./assets/work.png" alt="Work Experience" style="width:40%;height:50%;">
            </div>
            <div class="flip-card-back" style="padding-top: 10%;">
              <p style="font-weight:700;">Part-time Management & sales assistant</p>
              <p style="font-size: 0.6rem;margin-bottom: 30px;">Convenience store, Tirana(2016-2023)</p>
              <p style="font-weight:700;">Telemarketing operator</p>
              <p style="font-size: 0.6rem;">Tregi Marketing roup (Jul 2018 - Oct 2018)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="flex-22">
        <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front" style="padding-top:30px;">
              <h3 style="padding-bottom: 0;">Awards & achievements</h3>
              <img src="./assets/achievements.png" alt="Achievements" style="width:140px;height:130px;">
            </div>
            <div class="flip-card-back">
              <p style="font-weight:700;">Certificate of Excellence (Huawei,2022) </p>
              <p style="font-size: 0.6rem;margin-bottom: 30px;">For outstanding results during Huawei SFTF  Program, ranking within Top 5 highest  results student  in Europe</p>
              <p style="font-weight:700;">TOP European TECH4GOOD Team (Team Leader)  (Huawei, 2022)</p>
              <p style="font-size: 0.6rem;"> Outstanding work in the TECH4GOOD Global Competition .</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="rreshti4 rreshti4-container item"id="five" style="padding-bottom:0;margin-bottom:0;">
      <div style="grid-column: span 2;"><h4 style="text-align: center;font-weight: 600;padding-top: 45px;padding-bottom: 0;margin-bottom: 0;">Contact me </h4></div>
      <div class="forma">
       <!--form-->
       <form class="contact-form" method="POST" action=" " >
         <p style="font-size:0.8rem;">
         <?php
         require 'vendor/autoload.php';
         use PHPMailer\PHPMailer\PHPMailer;
         use PHPMailer\PHPMailer\Exception;
         if(isset($_POST["submit"])){
           $fname=$_POST["fname"];
           $email=$_POST["email"];
           $subject=$_POST["subject"];
           $message=$_POST["message"]; 
            if(!empty($email)){
             $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
             if (!preg_match($email_exp, $email)) {
             echo '<span style="color:red;">The email address you entered does not appear to be valid.</span><br>';   
             }
            }
            if(!empty($fname)){
             $name_exp = "/^[A-Za-z .'-]+$/";
             if (!preg_match($name_exp, $fname)) {
               echo '<span style="color:red;">The name you entered does not appear to be valid.</span><br>';
              }
            }
            if((empty($fname))&& (empty($email))&& (empty($subject))&& (empty($message))){
              echo '<span style="color:red;">Please fill out all the fields</span><br>';
            }elseif((!empty($fname))&& (!empty($email))&& (!empty($subject))&& (!empty($message))&&preg_match($email_exp, $email) &&preg_match($name_exp, $fname)){
               $mail = new PHPMailer(true);
               try {
                 //Server settings
                 $mail->SMTPDebug = 0; // Enable verbose debug output
                 $mail->isSMTP();
                 $mail->Host = 'smtp.gmail.com';
                 $mail->SMTPAuth = true;
                 $mail->Username = 'toshi.lazime@gmail.com'; // SMTP username
                 $mail->Password = 'vqop lgdm xate axsl'; // SMTP password
                 $mail->SMTPSecure = 'tls';
                 $mail->Port = 587;

                 //Recipients
                 $mail->setFrom($email, $fname);
                 $mail->addAddress('toshi.lazime@gmail.com', 'Laz');

                 //Content
                 $mail->isHTML(true);
                 $mail->Subject = "New form submission from website";
                 $mail->Body = "Name: $fname<br>Email: $email<br> Subject: $subject<br>Message: $message";
 
                 $mail->send();
                 echo "<script>alert('Message sent successfully!I will reply to your email shortly!');</script>";
                } catch (Exception $e) {
                   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                  }
              }
           }
        ?>
         <label class="label ">Your full name <span style="color:red; ">*</span></label> 
         <br>
         <input class="input-form fname" type="text" name="fname">
         <p style="font-size:0.2rem;"><br></p>
         <label class="label">Your email address <span style="color:red; ">*</span></label>
         <br>
         <input class="input-form"type="text" name="email">
         <p style="font-size:0.2rem;"><br></p>
         <label class="label">Subject<span style="color:red; ">*</span> </label>
         <br>
         <textarea class="input-form label"type="text" name="subject" style="width:100%;" rows="1" maxlength="200"></textarea>
         <p style="font-size:0.2rem;"><br></p>
         <label class="label">Message <span style="color:red; ">*</span></label>
         <br>
         <textarea class="input-form label"type="text" name="message" style="width:100%;" rows="4" maxlength="3000"></textarea>
         <p style="font-size:0.2rem;"><br></p>
         <input class="input-form" type="submit" name="submit" Value="Send" style="font-size:0.9rem;">
        </form>
      </div>
      <div class="contact-div"style="position:relative">
        <ul class="contact-ul">
         <li  class="contact"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16"> <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/> <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/></svg>  toshi.lazime@gmail.com</li>
         <li class="contact"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16"> <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg>  +355684284658</li>
        </ul>
        <div id="socials">
          <li class="socials"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
          </svg><a id="social-link" href="https://al.linkedin.com/in/lazime-toshi-529213208"> LinkedIn</a></li>
          <li class="socials"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
          </svg><a id="social-link"href="https://github.com/latolatto"> GitHub</a></li>
        </div>
        <div class="resume" style="z-index: 9;color:whitesmoke;">
          Download full detailed resume :
          <a style="z-index: 9;color:#7FC7D9;"href="./assets/LAZIME_TOSHI_CV(en).pdf" download="LAZIME_TOSHI_CV(en)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
          </svg> </a>
        </div>
      </div>
      <div style="grid-column: span 2;margin-bottom: 0;">
        <footer class="copyright ">
          © Lazime Toshi <span id="year" style="margin:0;padding:0;"></span>
        </footer>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>document.getElementById("year").innerHTML = new Date().getFullYear();</script>
  <script src="index.js"></script>
</body>
</html>
