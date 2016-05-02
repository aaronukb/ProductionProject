   <?php
   $product = new Product();
   $check = $product->listlg();
   ?>
<div class="container">
    <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php?action=home">Home</a>
                        </li>
                        <li>Mobile</li>
                        <li>LG</li>
                    </ul>
                </div>
            </div>
<div class="container">
    <div class="col-lg-12 text-center">
               <ul class="breadcrumb"><h3>LG Products</h3></ul>
           </div>
   
            <div class="col-lg-12">
               <ul class="breadcrumb">  
        <div class="row">
            <?php foreach ($check as $chk) :?>
            <div class="col-md-4 portfolio-item">
                <a href="index.php?action=detail&id=<?php echo $chk['id']; ?>">
                    <img class="img-responsive" style="height:300px;width:100%;"src="adminpanel/uploads/products/<?php echo $chk['image'];?>" alt="">
                </a>
                <h3>
                    <a href="index.php?action=detail&id=<?php echo $chk['id']; ?>"><?php echo $chk['productname']; ?></a>
                </h3>
                <p><?php echo $chk['description']; ?></p>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</ul>
</div>