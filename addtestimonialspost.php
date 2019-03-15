<?php
require_once('db.php');
$testimonials_name = $_POST['testimonials_name'];
$testimonials_detail = $_POST['testimonials_detail'];


if (!empty($_FILES['testimonials_photo']['name'])){
  $uploaded_image = $_FILES['testimonials_photo'];
  $afterexplode = explode('.', $uploaded_image['name']);
  $extension = $afterexplode[1];
  $allowed_format = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
  if(in_array($extension, $allowed_format)){
    if($uploaded_image['size'] <= 5000000){
      $query_string2 = "INSERT INTO testimonials(testimonials_name, testimonials_detail) VALUES ('$testimonials_name','$testimonials_detail')";
      mysqli_query($db_connection, $query_string2);
      $id = mysqli_insert_id($db_connection);
      $newfilename = $id.'.'.$extension;
      $newpicturelocation = 'testimonialpicture/'.$newfilename;
      move_uploaded_file($uploaded_image['tmp_name'], $newpicturelocation);
      $query_forpicture = "UPDATE testimonials SET testimonials_photo = '$newfilename' WHERE id = $id";
      mysqli_query($db_connection, $query_forpicture);
      header('location: addtestimonials.php');

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
  $query_string2 = "INSERT INTO testimonials(testimonials_name, testimonials_detail) VALUES ('$testimonials_name','$testimonials_detail')";
  mysqli_query($db_connection, $query_string2);
  header('location: addtestimonials.php');
}


?>
