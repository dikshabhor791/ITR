
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eLEARNING</title>
    <link rel="icon" href="./applicationimg/logo.jpg" type="image/jpg">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link  rel="stylesheet" href="p.css">
   
    <link rel="stylesheet" href="coursemain.css">
   
   
</head>
<body>
<?php 
  include('connection.php');
?>
  <!-- NAVBAR CODE -->

 
  <nav class="navbarmain">
     
     <div class="logo"><a href="main.php">
        <img src="./applicationimg/logo.jpg" style="height:auto; width: 90px; margin:0px 25px 0px 25px; "></a>
     </div>
   
    <ul id="navbarMenu">
     
        <li><a href="main.php" class="active">Home</a></li>
        <li><a href="About.php"target="_blank">About Us</a></li>
        <li><a href="coursemain.php"target="_blank">Courses</a></li>
        <li><a href="Notes.php"target="_blank">Notes</a></li>    
       <li><a href="login.php"target="_blank">Logout</a></li>
    </ul>
    
 </nav>

    
       <!--Main section-->

      <div class="mainsection">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center ">
          <h1>Learn  Free Programming Courses </h1>
          <a href="coursemain.html" class="btn btn-default btn-lg"> Start Learning</a>
        </div>
       </div> 


      <!-- main section 2 -->
       <div class="mainsection2">
       <div class="container my-5">
          <p class="headingcourse"> Our Programming Language Courses</p>
        <div class="row">
           <div class="col-md-4 col-sm-6">
              <div class="course-card">
                <div class="course-header">
                  <h3 class="course-title">HTML </h3>
                </div>
                <hr>
                  <a href="https://youtu.be/ESnrn1kAD4E?si=3QJiY-0XMPPgm3jZ" target="_blank"><img src="./applicationimg/mhtmltuto.jpg" alt=" img-rounded CSS Programming" class="course-img"></a>
          
                <div class="course-footer">
            
                  <p class="course-description">Learn the fundamentals of HTML and create structured web pages.</p>
                    <div class="btn-group1">
                      <a href="https://youtu.be/BsDoLVMnmZs?si=RqE_b04Mzkp7_lZb" target="_blank"><button class="coursebtn">Start Course</button></a>
                      <a href="./AllQuizFolder/HtmlQuizFolder/Quiz.html"><button class="Quizbtn">Start Quiz</button></a>
                    </div>
                </div>
              </div>
            </div>

            <!-- CSs section -->
      <div class="col-md-4 col-sm-6">
        <div class="course-card">
          <div class="course-header">
            <h3 class="course-title">CSS</h3>
          </div>
          <hr>
            <a href="https://youtu.be/ESnrn1kAD4E?si=3QJiY-0XMPPgm3jZ" target="_blank"><img src="./applicationimg/mcsstuto.jpg" alt=" img-rounded CSS Programming" class="course-img"></a>
          <div class="course-footer">
            
            <p class="course-description">Master the basics of CSS and design beautiful, responsive web pages.</p>
              <div class="btn-group1">
                 <a href="https://youtu.be/ESnrn1kAD4E?si=3QJiY-0XMPPgm3jZ" target="_blank"><button class="coursebtn">Start Course</button></a>
                 <a href="./AllQuizFolder/CssQuizFolder/CssQuiz.html"><button class="Quizbtn">Start Quiz</button></a>
              </div>
           </div>
         </div>
      </div>

      <!-- javascript section -->
      <div class="col-md-4 col-sm-6">
        <div class="course-card">
          <div class="course-header">
            <h3 class="course-title">JavaScript </h3>
          </div>
          <hr>
           <a href="https://youtu.be/VlPiVmYuoqw?si=NJb0X3-5xZVwE6IY" target="_blank"><img src="./applicationimg/Screenshot c.png" alt="Java Programming" class="img-rounded course-img"></a>
          <div class="course-footer">
           
            <p class="course-description">Explore JavaScript, the language of build dynamic web applications.</p>
            <div class="btn-group1">
              <a href="https://youtu.be/VlPiVmYuoqw?si=NJb0X3-5xZVwE6IY" target="_blank"><button class="coursebtn">Start Course</button></a>
              <a href="./AllQuizFolder/JavaScriptQuizFolder/JSQuiz.html"><button class="Quizbtn">Start Quiz</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap section -->
      <div class="col-md-4 col-sm-6">
        <div class="course-card">
          <div class="course-header">
            <h3 class="course-title">Bootstrap</h3>
          </div>
          <hr>
          <a href="https://youtu.be/vpAJ0s5S2t0?si=RgLoJe8kbZAG7lo8" target="_blank"><img src="./applicationimg/boostrap1.jpg" alt="Java Programming" class=" course-img"></a>
          <div class="course-footer">
           
            <p class="course-description">Bootstrap is the most popular CSS Framework for developing responsive .</p>
            <div class="btn-group1">
              <a href="https://youtu.be/vpAJ0s5S2t0?si=RgLoJe8kbZAG7lo8" target="_blank"><button class="coursebtn">Start Course</button></a>
              <a href="./AllQuizFolder/BootStrapQuizFolder/BootQuiz.html"><button class="Quizbtn">Start Quiz</button></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Java Section -->
      <div class="col-md-4 col-sm-6">
        <div class="course-card">
          <div class="course-header">
            <h3 class="course-title">Java </h3>
          </div>
          <hr>
          <a href="https://youtu.be/UmnCZ7-9yDY?si=MVCdz_gKYm37qfwy" target="_blank"><img src="./applicationimg/javatuto.jpg" alt="Java Programming" class=" img-rounded course-img"></a><div class="course-footer">
            
            <p class="course-description">Master Java programming with in-depth concepts and hands-on practice.</p>
            <div class="btn-group1">
              <a href="https://youtu.be/UmnCZ7-9yDY?si=MVCdz_gKYm37qfwy" target="_blank"><button class="coursebtn">Start Course</button></a>
              <a href="./AllQuizFolder/JavaQuizFolder/JavaQuiz.html"><button class="Quizbtn">Start Quiz</button></a>
            </div>
          </div>
        </div>
      </div>
     
      <!-- J-Query Section -->
      <div class="col-md-4 col-sm-6">
        <div class="course-card">
          <div class="course-header">
            <h3 class="course-title">jQuery </h3>
            
          </div>
          <hr>
          <a href="https://youtu.be/YFlx1C8XwR0?si=dAn7mlfqpL3ye87o" target="_blank"><img src="./applicationimg/j-query.jpg" alt="Java Programming" class="img-rounded course-img"></a>
          <div class="course-footer">
            <p class="course-description">Learn jQuery and simplify your  JavaScript development with powerful tools.</p>
            <div class="btn-group1">
              <a href="https://youtu.be/YFlx1C8XwR0?si=dAn7mlfqpL3ye87o" target="_blank"><button class="coursebtn">Start Course</button></a>
              <a href="./AllQuizFolder/jQueryQuizFolder/jQueryQuiz.html"><button class="Quizbtn">Start Quiz</button></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

            <div class="col-12 text-center">
						    <a href="coursemain.html" target="_blank"><button style="margin : 20px; height:50px; width:200px; background-color:rgba(255,223,223,0.2); font-size:20px; font-weight:700; border:2px solid black; border-radius:10px;">Show All Courses</button></a>
						</div>
  </div>
  </div>


  </div>

      
        
      
    
      
<!-- myfooter -->


<footer>
  <div class="footer-main">
<div class="footer-container">
   
      <div class="footer1">
       
        <p class="footer-pe"><i class="fas fa-book"></i> E-LEARNING</p>
        <p class="p1">Where eduction meets real-world needs</p>
      </div>

          <div class="empty-footer"> </div>

         <!-- Quick Links -->
      <div class="footer2">
        <p class="footer-p">Quick Links</p>
          <ul style="list-style-type: none;">
         
             <li><a href="contact.php"target="_blank">&#x27A2; &nbsp; Contact Us</a></li>
             <li><a href="term&condition.html">&#x27A2; &nbsp; Term & Conditions</a></li>
             <li><a href="FAQs&help.html">&#x27A2; &nbsp; FAQs & Help</a></li>
              </ul>
      </div>

            <div class="empty-footer"> </div>

          <!-- Helpful Links -->
      <div class="footer3">
        <p class="footer-p">Helpful Links</p>
        <ul style="list-style-type: none;">
             <li><a href="helpcenter.html" >&#x27A2; &nbsp; Help Center</a></li>
             <li><a href="contact.php">&#x27A2;  &nbsp; Ask Questions</a></li>
             <li><a href="privacy&policy.html">&#x27A2; &nbsp; privacy policy</a></li>
         
         </ul>
       </div>

           <div class="empty-footer"> </div>

           <!-- Gallery-->
      <div class="footer4">
        <p class="footer-pe">Gallery</p>

          <div class="footer-img">
             <img src="./applicationimg/fimg1.jpg">
             <img src="./applicationimg/fimg2.jpg">
             <img src="./applicationimg/fimg3.jpg">
          </div>

           <div class="footer-img">
             <img src="./applicationimg/fimg4.jpg">
             <img src="./applicationimg/fimg5.jpg">
             <img src="./applicationimg/fimg6.jpg">
          </div>
       </div>
  </div>
 </div>
 <hr>
<div class="footer5">
   <div class="footer-links">
     <div class="socialicons">
         <a href="#"><i class="fa-brands fa-twitter"></i></a>
         <a href="#"><i class="fa-brands fa-facebook"></i></a>
         <a href="#"><i class="fa-brands fa-instagram"></i></a>
         <a href="#"><i class="fa-brands fa-google-plus"></i></a>
     </div>
    <div class="footernav">
      <ul style="list-style-type: none; display: flex; align-items: center; justify-content: center;">
         <li><a href="main.php"target="_blank">Home</a></li>
         <li><a href="About.php"target="_blank">About Us</a></li>
         <li><a href="coursemain.php"target="_blank">Courses</a></li>
         <li><a href="contact.php"target="_blank">Contact Us</a></li>
       </ul>
     </div>
     <div class="footerButton" >
      <p>Copyright &copy;2024;Designed by <span class="designer">Our Team</span></p>
     </div>
   </div>  
 </div>
</div>
</div>
</div>



</footer>



  <script src="https://kit.fontawesome.com/f8ela90484.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>
</html>   


