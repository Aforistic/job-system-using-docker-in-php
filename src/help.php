<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help</title>
    <link rel="stylesheet" href="help.css">
  
</head>
<body>
    <div class="contain">
        <div class="nav">
      <div class="navigation">
          <h1 class="logo">Job</h1>
          <a style="margin-left: 50px;" href="index.php">Home</a>
          <a href="update section.php">jobs</a>
          <a href="developer contact.php">Contact</a>
          <a href="help.php">Help</a>
          <button class="head-btn"> <a href="upload cont.php">post</a></button>
      </div>
      </div>
   <div class="help">
    <div class="questions">
        <h1>Get help about how to use our system.</h1>
        <h3>The are some of the most frequently asks questions from clients to get a quickest understanding about how the job management system work. If you don't understanding how to use the job management system, here is our guide for you to get your clarifications.</h3>
     <h1>FAQ</h1>
     <ol type="1">
     <button class="accordion"><li><dt>what is Job management system?</dt></li></button>
<div class="panel">
   <dd>job mangement system is  a sytem that creat amd manages jobs between the empoyer and the job seekers by asigning the job seekers with latest job updates and permitting the employer to post job.</dd>
  </dl>
</div>

<button class="accordion"> <li><dt>What is this job management  system all about?</dt></li></button>
<div class="panel">
  <dd>This job mangement system is all about creating an interface that allows an employer to post legit verified jobs and allow the job seekers to get  in touch with employer.</dd>
</div>

<button class="accordion"> <li><dt>Can you contact employer directly from their jobs posted?</dt></li></button>
<div class="panel">
  <dd>Yes, you can cantact an employer immediately from thier posted details </dd>
</div>

<button class="accordion"> <li><dt style="margin-bottom: 10px;">Can this job mangement system provide a workspace online for task to be carriesd out directely?</dt></li></button>
<div class="panel">
  <dd>Not yet,  this sytem, it is parts of our future plans.
  </dd>
</div>

<button class="accordion"><li><dt>Do every countries have the right to utilise this system?</dt></li></button>
<div class="panel">
  <dd>Yes, of couse!. No countries is excluded from using this system.</dd>
</div>


</ol> 
     <!-- <ol type="1">
      <dl>
       <li><dt>what is Job management system?</dt></li>
       <dd>job mangement system is  a sytem that creat amd manages jobs between the empoyer and the job seekers by asigning the job seekers with latest job updates and permitting the employer to post job.</dd>
      </dl>
      <li><dt>What is this job management  system all about?</dt></li>
      <dd>This job mangement system is all about creating an interface that allows an employer to post legit verified jobs and allow the job seekers to get  in touch with employer.</dd>
       <li><dt>How do i creat an account in this job management system?</dt></li>
       <ul style="color: black; font-size: medium;">
        <li><dd>To creat an account you to click on register and select the type of account you wish to creat first </dd></li>
    <li><dd>Lastly, you then fill the form with the valide required deatails.</dd></li>   
    </ul>
    <li><dt>Can you contact employer directly from their jobs posted?</dt></li>
    <dd>Yes, you can cantact an employer immediately from thier posted details </dd>
    <li><dt>What is required to register as an employer?</dt></li>    
    <dd>you just need a valide registration details that can be proven that you own a company, organisation, institutes, teams, and personal management for yourself.</dd>
    <li><dt>Can this job mangement system provide a workspace online for task to be carriesd out directely?</dt></li>
    <dd>Not yet, very soon it will be implemented to in this sytem, it is parts of our future plans.
    </dd>
</ol> -->
    </div>
   </div>

   <div class="containB">
    <div class="footer">
      <div class="tit">
        <h1>jobs</h1>
        <p>copywrite@job</p>
        <p>The leading job listing service for designers, developers, and professionals</p>
      </div>
      <div class="tit">
        <h4>post a job</h4>
        <p><a href="#">management</a></p>
        <p><a href="#">others</a></p>
      </div>
      <div class="tit">
        <h4>find a job</h4>
        <p><a href="#">full-time</a></p>
        <p><a href="#">recruit-job</a></p>
      </div>
      <div class="tit">
        <h4>About us</h4>
        <p><a href="#">contact us</a></p>
        <p><a href="#">FAQ</a></p>
      </div>
    </div>
    </div>

    </div>
        





    
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
      </script>
</body>
</html>