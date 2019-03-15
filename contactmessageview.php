<?php
session_start();
require_once('includes/header.php');
require_once('db.php');
if(!isset($_SESSION['login_ok'])){
header('location: login.php');
}
$query_string ="SELECT * FROM contact_message";
$db_return = mysqli_query($db_connection, $query_string);

?>


<div class="col-md-12">
  <h3>View all Message
    <a href="deleteall.php" class="btn btn-danger">Delete All</a>
    <a href="markasreadall.php" class="btn btn-info">Mark All as Read</a>
    <hr>
  </h3>
  <table class="table table-bordered" id="allmessage">
    <thead>
      <td>Sl. No.</td>
      <td>Guest_Name</td>
      <td>Guest_Email</td>
      <td>Guest_Message</td>
      <td>Action</td>
    </thead>
    <?php
    $counter = 1;
    foreach ($db_return as $contact_message){

    ?>
    <tr>
    <?php
    if($contact_message['status'] == 1){
    ?>
    <style="background-color:#b2beb5";>
    <?php
    }
    ?>

      <td><?=$counter?></td>
      <td><?=$contact_message['guest_name']?></td>
      <td><?=$contact_message['guest_email']?></td>
      <td><?=$contact_message['guest_message']?></td>
      <td>
        <?php
        if($contact_message['status'] == 1){
        ?>
        <a href="markasread.php?id=<?=$contact_message['id']?>" class="btn btn-info">Mark as Read</a>
        <?php
        }
        ?>
        <button class="btn btn-danger delete_message" value="deletemessage.php?id=<?=$contact_message['id']?>">Delete</button>
      </td>
    </tr>
    <?php
    $counter++;
    }
    ?>
  </table>
</div>

<?php
 require_once('includes/footer.php');
?>

<script type="text/javascript">

$(document).ready(function(){
  $('#allmessage').DataTable();
  $('.delete_message').click(function(){

    var redirected_link = $(this).val();
    swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    window.location.href = redirected_link;
  }
})

  });
});

</script>
