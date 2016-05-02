
<?php

if (!isset($_SESSION['first_name'])) {
  header('location:index.php?action=userlogin');
}
?>
<?php
$id = $_SESSION['id'];
$user = new User();
$udetail = $user->edit($id);
?>

<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3>Update User Profile :: <?php echo $udetail[0]['first_name'];?></h3>
            <form id="update" action="index.php?action=controller&id=<?php echo $udetail[0]['id'];?>" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">First Name:</label>
                        <input class="form-control" name="first_name" required type="text" value="<?php echo $udetail[0]['first_name']; ?>">
                    </div>
                    <div class="control-group">
                        <label class="control-label">Last Name:</label>
                        <input class="form-control" name="last_name" required type="text" value="<?php echo $udetail[0]['last_name']; ?>">
                    </div>
                    <div class="control-group">
                        <label class="control-label">Password:</label>
                        <input class="form-control" name="password" required type="password" value="<?php echo $udetail[0]['password']; ?>">
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email:</label>
                        <input class="form-control" required name="email" type="text" value="<?php echo $udetail[0]['email']; ?>">
                    </div>
                    <div class="control-group">
                        <label class="control-label">Address:</label>
                        <input class="form-control" name="address" required type="text" value="<?php echo $udetail[0]['address']; ?>">
                    </div>
                    <div class="control-group">
                        <label class="control-label">Contact:</label>
                        <input class="form-control" name="contact" required type="text" value="<?php echo $udetail[0]['contact']; ?>">
                    </div>
                    <div class="control-group">
                    </div>
                </br>
                <button type="submit" class="btn btn-primary btn-lg" name="update" value="update">Update</button>
            </fieldset>
        </form>
    </div>
</div>

<?php unset($_SESSION[ 'success']); ?>