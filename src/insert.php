
<?php include'connection.php';  ?>

<?php
$filename=$_FILES['image']['name'];
$location='images/'.$filename;
$title=$_POST['title'];
$description=$_POST['description'];
$country=$_POST['country'];
$sql="INSERT INTO job(title, description, image, country)
VALUE('$title ', '$description', '$filename', '$country');";


if (move_uploaded_file($_FILES['image']['tmp_name'], $location)){
    echo' file upladed sucessfully ';
}
    else{
        echo ' error uploading file ';
    }


if(mysqli_query($con, $sql))
{
    echo'it has been done sucessfully';
}
else{
    echo'it is very bad try again';
}



?>