<?php
include("includes/header.php");?>
<?php
$id = $_GET['id'];
$product = new Product();
$pdetail = $product->delete($id);
?>
<div class="container">
  <div class="row">
    <div>
<form id="delete" action="index.php?action=controller&id=<?php echo $pdetail[0]['id'];?>" method="post" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-4">
      <p>
        Product Name:<br>
        <input  class="form-control" required name="productname" type="text" value="<?php echo $pdetail[0]['productname'];?>" >
      </p>
    </div></div>
    <div class="form-group">
      <div class="col-sm-4">
        <p>
          Brand:<br>
          <input class="form-control" name="brand" required type="text" value="<?php echo $pdetail[0]['brand'];?>">
        </p></div></div>
        <div class="form-group">
          <div class="col-sm-4">
            <p>
              Price:<br>
              <input  class="form-control" name="price" required type="text" value="<?php echo $pdetail[0]['price'];?>">
            </p></div></div>
            <div class="form-group">
              <div class="col-sm-4">
                <p>
                  Description:<br>
                  <input  class="form-control" name="description" required type="text" value="<?php echo $pdetail[0]['description'];?>">
                </p></div></div>
                <div class="form-group">                  
                  <div class="col-md-10 text-left">
                    <em style="color:red">Are you sure you want to delete?</em><br/><br/>
                    <button type="submit" class="btn btn-primary btn-lg" name="delete" value="delete" >Delete</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>