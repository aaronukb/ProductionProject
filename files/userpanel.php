<?php
if (empty($_SESSION['first_name'])) {
    @header('Location: userlogin.php');
      echo "<script type= 'text/javascript'>
      alert('You must login to access this page.');
      </script>";
    echo '<script type="text/javascript">' . "\n"; 
    echo 'window.location="http://localhost/Projectsite/index.php?action=userlogin";'; 
    echo '</script>';
    exit;
}
<?php
$id = $_SESSION['id'];
$user = new User();
$udetail = $user->edit($id);
?>

<div class="container">
	<h2>Welcome <?=$_SESSION['first_name'];?>!!!</h2>
	<h3>Here are your details.</h3>
</div>
<div class="container">

<?php if (isset($_SESSION['success'])) {
  echo $_SESSION['success'];
} ?>      


<div class="row">
  <div class="col-md-6">
    <h3>Your Profile</h3> 
    <div class="table-responsive">
      <table class="table"  style="border-radius: 50px;border: 2px solid #337AB7;">
        <tr>
          <td>First Name : <td><?php echo $udetail[0]['first_name'];?></td></td>
        </tr>
        <tr>
          <td>Last Name : <td><?php echo $udetail[0]['last_name'];?></td></td>
        </tr>
        <tr>
          <td>Email : <td><?php echo $udetail[0]['email'];?></td>
        </tr>
        <tr>
          <td>Address : <td><?php echo $udetail[0]['address'];?></td>
        </tr>
        <tr>
          <td>Contact : <td><?php echo $udetail[0]['contact'];?></td>
        </tr>
      </table>
      <a href="index.php?action=editprofile">
        <button class="btn btn-primary" >Edit Profile</button></a>
      </div>
    </div>
  </div><br>


  <?php
  unset($_SESSION['success']);
  ?>
