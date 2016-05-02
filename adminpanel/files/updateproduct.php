<?php
include("includes/header.php");
$id = $_GET['id'];
  $product = new Product();
    $pdetail = $product->edit($id);
?>
<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3>Update Product :: <?php echo $pdetail[0]['productname'];?></h3>
            <form id="update" action="index.php?action=controller&id=<?php echo $pdetail[0]['id'];?>" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Product Name:</label>
                        <input class="form-control" name="productname" required type="text" value="<?php echo $pdetail[0]['productname']; ?>">
                    </div>
                    <div class="control-group">
                        <label class="control-label">Brand:</label>
                        <input class="form-control" name="brand" required type="text" value="<?php echo $pdetail[0]['brand']; ?>">
                    </div>
                    <div class="control-group">
                        <label class="control-label">Price</label>
                        <input class="form-control" name="price" required type="text" value="<?php echo $pdetail[0]['price']; ?>">
                    </div>
                    <div class="control-group">
                        <label class="control-label">Description:</label>
                        <input class="form-control" name="description" required type="text" value="<?php echo $pdetail[0]['description']; ?>">
                    </div>
                     <div class="control-group">
                    </div>
                </br>
                <button type="submit" class="btn btn-primary btn-lg" name="update" value="update">Update</button>
            </fieldset>
        </form>
    </div>
</div>
