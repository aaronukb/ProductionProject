<?php if (!isset($_SESSION['id'])): 
     echo'<script>alert("You must login to access cart page.");</script>';
          echo '<script type="text/javascript">' . "\n"; 
          echo 'window.location="http://localhost/Projectsite/index.php?action=userlogin";';
          echo '</script>'; 
          ?>
<?php endif;?>
<?php
     $db    = new db();
     $carts = $db->cartDetail();
?>
<div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Basket</li>
                    </ul>
                </div>
                <div class="col-md-9" id="basket">
                    <div class="box"> 
                        <h1>Shopping cart</h1>                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                           <th>Quantity</th>
                                            <th colspan="2">Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php 
                                            $sum = 0;
                                             foreach($carts as $cart) {
                                                  $carty = $db->selectCart($id = $cart['productid']);
                                                  
                                        ?>                                        
                                        <tr>
                                            <td>                                               
                                                    <img src="adminpanel/uploads/products/<?php echo $carty[0]['image']; ?>">
                                            </td>
                                            <td></td>
                                            <td><?php echo $carty[0]['productname']; ?>
                                            </td>
                                            <td><?php echo $carty[0]['price']; ?></td>
                                           <form method="post" action="index.php?action=basket_update">
                                            <input type="hidden" value="<?=$cart['cart_id'];?>" name="id[]">
                                            <td>
                                               <input type="number" value="<?php echo $cart['quantity']; ?>" name="quan[]">
                                            </td>
                                            <td><?php echo $total =  $carty[0]['price'] * $cart['quantity']; ?></td>
                                            <td></td>
                                            <td><a href="index.php?action=delete_cart"><i class="fa fa-trash-o"></i></a> <input type="submit" value="Edit">
                                            </td>
                                             </form>
                                        </tr>
                                        <?php $sum = $sum + $total; } ?>                                   
                                </table>
                            </div>
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="index.php?action=home" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">                                    
                                   <a href="index.php?action=checkout"> <button type="submit" class="btn">Proceed to checkout <i class="fa fa-chevron-right"></i></a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Your amount to be payable is calculated below</p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th><?='NPR.' . $sum;?></th>
                                    </tr>                                    
                                    <tr class="total">
                                        <td>Total</td>
                                        <th><?='NPR.' . $sum;?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>