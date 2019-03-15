<?php
require_once('db.php');
$about_name = $_POST['about_name'];
$about_name1 = $_POST['about_name1'];
$about_detail = $_POST['about_detail'];



if (!empty($_FILES['about_photo']['name'])){
  $uploaded_image = $_FILES['about_photo'];
  $afterexplode = explode('.', $uploaded_image['name']);
  $extension = $afterexplode[1];
  $allowed_format = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
  if(in_array($extension, $allowed_format)){
    if($uploaded_image['size'] <= 5000000){
      $query_string2 = "INSERT INTO about(about_name, about_name1, about_detail) VALUES ('$about_name', '$about_name1', '$about_detail')";
      mysqli_query($db_connection, $query_string2);
      $id = mysqli_insert_id($db_connection);
      $newfilename = $id.'.'.$extension;
      $newpicturelocation = 'aboutpicture/'.$newfilename;
      move_uploaded_file($uploaded_image['tmp_name'], $newpicturelocation);
      $query_forpicture = "UPDATE about SET about_photo = '$newfilename' WHERE id = $id";
      mysqli_query($db_connection, $query_forpicture);
      header('location: addabout.php');

    }
    else{
      echo "You cant upload a file more than 5 MB";
    }
  }
  else{
    echo "This format is not allowed";
  }

}
else{
  $query_string2 = "INSERT INTO about(about_name, about_name1, about_detail) VALUES ('$about_name','$about_name1','$about_detail')";
  mysqli_query($db_connection, $query_string2);
  header('location: addabout.php');
}


?>
