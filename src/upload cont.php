<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploadimg</title>
    <link rel="stylesheet" href="uloading.css">
</head>
<body>
    
      <div class="container">
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

     <div class="posting">
        <h1>Post A legit job</h1>
        <form action="insert.php" method="post" enctype="multipart/form-data">
          
            <div class="desing-input">
                Job title:  <br>
                <input id="jobTitle"   type="text" name="title"  placeholder="enter your job title">
            </div>
       Descriptions of job: <br>
       <textarea  id="message"  name="description"  placeholder="write job descriptions detalis; include job location, country, company name or organisation and other revelents details  " cols="47px" rows="15px"></textarea>
       <div class="desing-input">
        country: <br>
        <input id="country" type="text" name="country"   value="country:">
       </div>
       <div>
        Image: <br>
        <input type="file" id="picture"  name="image"  > <br>
       </div>
      
       <!-- <input type="color"> <br> -->
  <div>
    Date: <br>
    <input type="date"  id="date"  name="date">
  </div>
<div style="width: 200px; height: 50px;">
  <!-- <input  style="width: 150px; height: 40px; background-color: green; color: white; border: hidden; " type="button" value="upload"> -->
    <button onclick="posting()" style="width: 150px; height: 40px;">Publish</button>
</div>
        </form>
     </div>
    </div>
  
<!-- <script>
    function posting(){
const jobTitle=document.getElementById('jobTitle').value;
const message=document.getElementById('message').value;
const picture=document.getElementById('picture').value;
const video=document.getElementById('video').value;
const date=document.getElementById('date').value;
localStorage.setItem("Job_title",jobTitle);
localStorage.setItem("message",message);
localStorage.setItem("picture",picture);
localStorage.setItem("video",video);
localStorage.setItem("date",date);




    }
</script> -->



</body>
</html>