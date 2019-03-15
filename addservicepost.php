<?php
require_once('db.php');
$service_name = $_POST['service_name'];
$service_detail = $_POST['service_detail'];


if (!empty($_FILES['service_photo']['name'])){
  $uploaded_image = $_FILES['service_photo'];
  $afterexplode = explode('.', $uploaded_image['name']);
  $extension = $afterexplode[1];
  $allowed_format = array('jpg', 'png', 'jpeg', 'JPG', 'PNG', 'JPEG');
  if(in_array($extension, $allowed_format)){
    if($uploaded_image['size'] <= 5000000){
      $query_string2 = "INSERT INTO services(service_name, service_detail) VALUES ('$service_name','$service_detail')";
      mysqli_query($db_connection, $query_string2);
      $id = mysqli_insert_id($db_connection);
      $newfilename = $id.'.'.$extension;
      $newpicturelocation = 'servicepicture/'.$newfilename;
      move_uploaded_file($uploaded_image['tmp_name'], $newpicturelocation);
      $query_forpicture = "UPDATE services SET service_photo = '$newfilename' WHERE id = $id";
      mysqli_query($db_connection, $query_forpicture);
      header('location: addservice.php');

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
  $query_string2 = "INSERT INTO services(service_name, service_detail) VALUES ('$service_name','$service_detail')";
  mysqli_query($db_connection, $query_string2);
  header('location: addservice.php');
}


?>
