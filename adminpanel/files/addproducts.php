<header>
  <?php 
  include("includes/header.php");
  ?>
</header>
<?php
include ("controller/product_controller.php");
?>
<div id="page-wrapper">
    <div class="graphs">
        <script type="text/javascript"src="assets/ckeditor/ckeditor.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <legend class="text-center header">Add Product</legend>
        <form  id="addproducts" enctype="multipart/form-data"  action="" method="post" class="form-horizontal">
            <div><h4 class="text-center"><?php echo $errmsz; ?><h4></div>
            <fieldset>
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-1">
                        Product Name:<br>
                        <input class="form-control" name="productname" type="text" placeholder="Product Name" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-1">
                        Brand:<br>
                        <input class="form-control" name="brand" type="text" placeholder="Brand">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-1">
                        Price:<br>
                        <input class="form-control"   name="price" type="text" placeholder="Price" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        Description:<br>
                        <br> <textarea name="description" cols="80" rows="5" class="ckeditor" id="ckeditor"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        Product image: <input type="file" name="avatar" required />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg" name="addproducts" value="addproducts" >Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

