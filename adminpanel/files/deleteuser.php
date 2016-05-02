<?php
include("includes/header.php");?>
<?php
$id = $_GET['id'];
$user = new User();
$udetail = $user->delete($id);
?>
<em>Are you sure you want to delete?</em><br/><br/>
               
    <form id="delete" action="index.php?action=controller&id=<?php echo $udetail[0]['id'];?>" method="post" class="form-horizontal">                    
    <div class="form-group">
        <div class="col-sm-4">
    <p>
      First Name:<br>
      <input  class="form-control" required name="firstname" type="text" value="<?php echo $udetail[0]['first_name'];?>" >
      </p>
      </div></div>                
    <div class="form-group">
        <div class="col-sm-4">
        <p>
        Last Name:<br>
        <input class="form-control" name="lastname" required type="text" value="<?php echo $udetail[0]['last_name'];?>">
        </p></div></div>   
  <div class="form-group">
        <div class="col-sm-4">
  <p>
        Address:<br>
        <input  class="form-control" name="address" required type="text" value="<?php echo $udetail[0]['address'];?>">
        </p></div></div>
        <div class="form-group">
        <div class="col-sm-4">
  <p>
        Email:<br>
        <input  class="form-control" name="email" required type="text" value="<?php echo $udetail[0]['email'];?>">
        </p></div></div>                         
<div class="form-group">
  <div class="col-md-12 text-left">
    <button type="submit" class="btn btn-primary btn-lg" name="deleteuser" value="deleteuser" >Delete</button>
      </div>
    </div>
  </form>
</div>      
</div>
</div>