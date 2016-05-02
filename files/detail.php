<?php
   $id    = isset($_GET['id']) ? $_GET['id'] : '';
   $db    = new Db();
   $query = "SELECT * FROM product WHERE id ='$id'";
   $check = $db->select($query);
   $pd   = array();
   foreach ($check as $chk) {    
    $prg['id']        = $chk['id'];
    $prg['pdname']      = $chk['productname'];    
    $prg['pdbrand']   = $chk['brand'];
    $prg['pdprice'] = $chk['price'];
    $prg['pdimage']     = $chk['image'];
    $prg['pddescription']      = $chk['description'];    
}
$_SESSION['pdview'][] = $pd;
?>
<div id="all">
    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php?action=home">Home</a>
                    </li>
                    <li><a href="index.php?action=home">Recently Added Products</a>
                    </li>
                    <li><?php echo $chk['productname']; ?></li>
                </ul>
            </div>
            <div class="col-md-3">
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    Laptops <span class="badge pull-right"></span>
                                    <ul>
                                        <li><a href="index.php?action=apple">Apple</a>
                                        </li>
                                        <li><a href="index.php?action=dell">Dell</a>
                                        </li>
                                        <li><a href="index.php?action=hp">HP</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>Mobile  <span class="badge pull-right"></span>
                                    <ul>
                                        <li><a href="index.php?action=apple">Apple</a>
                                        </li>
                                        <li><a href="index.php?action=samsung">Samsung</a>
                                        </li>
                                        <li><a href="index.php?action=lg">LG</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>Tablets  <span class="badge pull-right"></span>
                                    <ul>
                                        <li><a href="index.php?action=apple">Apple</a>
                                        </li>
                                        <li><a href="index.php?action=samsung">Samsung</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>              
                </div>
                <div class="col-md-9">
                    <?php foreach ($check as $ch) :?>
                    <div class="row" id="productMain">
                        <div class="col-sm-6">                            
                            <div id="mainImage">
                                <img alt="blog" style="height:500px;width:100%;" src="adminpanel/uploads/products/<?php echo $chk['image'];?> ">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?php echo $chk['productname']; ?></h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details</a>
                                </p>
                                <p class="price">NPR.<?php echo $chk['price']; ?></p>
                                <p class="text-center buttons">
                                    <a href="index.php?action=basket&id=<?=$_GET['id'];?>" id = "add_cart" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a> 
                                </p>
                                <div class="box" id="details">
                                    <p>
                                        <h4>Product details</h4>
                                        <p><?php echo $chk['description']; ?></p>                                     
                                   </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        