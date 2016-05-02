<header>
  <?php 
      include("includes/header.php");
   ?>
</header> 
<div class="row">
  <div class="col-md-10">
        <script type="text/javascript"src="assets/ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <legend class="text-center header">User List</legend>
<?php
$user = new User();
$lists = $user->lists();
?>
<table class="table">
    <tr style="background-color:orange;">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Address</th> 
        <th>Contact</th>
        <th>Delete</th>                  
    </tr>
    <?php foreach ($lists as $user): ?>
        <tr style="background-color:#FFFFFF;">            
             <td><?php echo $user['first_name']; ?></td>
         	 <td><?php echo $user['last_name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['address']; ?></td>
             <td><?php echo $user['contact']; ?></td>           
			<td>
                <div class="btn-group btn-small">
                    <a href="?action=deleteuser&id=<?php echo $user['id']; ?>">
                        <button class="btn btn-primary" type="submit">Delete</button></a>
                        </div>
            </td> 
               <?php endforeach; ?>
 </tr>
 </table>        
</div>
</div>