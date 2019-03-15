<?php
require_once('db.php');
$service_name1 = $_POST['service_name1'];
$service_detail1 = $_POST['service_detail1'];


if (!empty($_FILES['service_photo1']['name'])){
  $uploaded_image = $_FILES['service_photo1'];
  $afterexplode = explode('.', $uploaded_image['name']);
  $extension = $afterexplode[1];
  $allowed_format = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
  if(in_array($extension, $allowed_format)){
    if($uploaded_image['size'] <= 5000000){
      $query_string2 = "INSERT INTO services1(service_name1, service_detail1) VALUES ('$service_name1','$service_detail1')";
      mysqli_query($db_connection, $query_string2);
      $id = mysqli_insert_id($db_connection);
      $newfilename = $id.'.'.$extension;
      $newpicturelocation = 'servicepicture1/'.$newfilename;
      move_uploaded_file($uploaded_image['tmp_name'], $newpicturelocation);
      $query_forpicture = "UPDATE services1 SET service_photo1 = '$newfilename' WHERE id = $id";
      mysqli_query($db_connection, $query_forpicture);
      header('location: addservice1.php');

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
  $query_string2 = "INSERT INTO services1(service_name1, service_detail1) VALUES ('$service_name1','$service_detail1')";
  mysqli_query($db_connection, $query_string2);
  header('location: addservice1.php');
}


?>
