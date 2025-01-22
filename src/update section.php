<?php include'connection.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updates</title>
    <link rel="stylesheet" href="update css.css">
    
    <script>
        function darkMode(){
     document.getElementById("container").style.background = "black";   
     document.getElementById("container").style.color = "white";   
     document.getElementById("navigation").style.background = "white";  
     document.getElementById("navigation").style.color = "white";
       darkMode.preventDefault(); 

        
}
function lightMode(){
      document.getElementById("container").style.background = "white";
     document.getElementById("container").style.color = "black";   
      LightMode.preventDefault(); 

     
}


    </script>
    </head>
<body id="container">
    
     <div id="containa"> 
        <div id="navigation">
            <h1 class="logo">Job</h1>
            <a style="margin-left: 50px;" href="index.php">Home</a>
         <a href="update section.php">jobs</a>
         <button class="head-btn"> <a href="upload cont.php">post</a></button>

            
            <div class="dark">
                <button style="background-color: lightcyan; color: black;" onclick="lightMode()">light-mode</button>
            <button style="background-color: black; color: white;" onclick="darkMode()">dark-mode</button>
            </div>
          

   <?php
   $sql="SELECT * FROM job";
   $all_post= mysqli_query($con, $sql);
   ?>



  
     
   
     
        </div>
        <h1 style="color: white;">Available posted jobs</h1>
    </div>


    <div class="general">

    <?php if(mysqli_num_rows($all_post)>0): ?>
   <?php foreach($all_post as $post): ?>

        <div class="postcard">
            
        <div id="title">
        <h2> <?=$post['title']?> <span id=""></span></h2>
        </div>
        <div id="message">
       <p> <?=$post['description']?></p>
        </div>
        <div id="picture">
        <img src="images/<?=$post['image']?>" alt="description image for the job" width="290px" height="290px" >

    </div>
        
        <div id="date">
        <p> <span>posted date</span> <?=$post['date']?></p>
        </div>
        <div style="width:200px; height:100px; margin-top:50px;" >
        <button>view more</button>
        </div>

    </div>




    <?php endforeach ?>
   <?php endif ?>
</div>










    <!-- <script>
            const params= (new URL(document.location)).searchParams;
            const jobTitle=params.get('jobTitle');
            const message=params.get('message');
            const picture=params.get('picture');
            const video=params.get('video');
            const date=params.get('date');
       
        document.getElementById('title').innerHTML=jobTitle;
        document.getElementById('message').innerHTML=message;
        document.getElementById('picture').innerHTML=picture;
        document.getElementById('video').innerHTML=video;
        document.getElementById('date').innerHTML=date;
    
    </script>    -->

</body>
</html>