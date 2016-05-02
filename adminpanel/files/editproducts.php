<header>
  <?php 
             include("includes/header.php");
  ?>
</header>
<div class="row">
  <div class="col-md-10"> 
    <legend class="text-center header">Products List</legend>
    <?php
    $product = new Product();
    $lists = $product->lists();
    ?>
    <table class="table">
      <tr style="background-color:orange;">
        <th>Product Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Description</th> 
        <th>Update</th>
        <th>Delete</th>
      </tr>
      <?php foreach ($lists as $product): ?>
      <tr style="background-color:#FFFFFF;">
       <td><?php echo $product['productname']; ?></td>
       <td><?php echo $product['brand']; ?></td>
       <td><?php echo $product['price']; ?></td>
       <td><?php echo $product['description']; ?></td>
       <td>
        <div class="btn-group btn-small">
          <a href="?action=updateproduct&id=<?php echo $product['id']; ?>">
            <button class="btn btn-primary" type="submit">Update</button></a>
          </div>
        </td> 
        <td>
          <div class="btn-group btn-small">
            <a href="?action=deleteproduct&id=<?php echo $product['id']; ?>">
              <button class="btn btn-primary" type="submit">Delete</button></a>
            </div>
          </td> 
        <?php endforeach; ?>
      </tr>
    </table>
 </div>
</div>
</div>
</div>