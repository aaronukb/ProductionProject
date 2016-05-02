<?php 
session_start();
include("classes/Db.php");
include("classes/Product.php");
include("classes/User.php");
?>
<header>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    
    <link rel="stylesheet" href="assets/css/style.css">
</header>
<div id="page-wrapper">
  <div class="graphs">
    <div>   
    </div>
     <section>
            <?php
                if (isset($_GET['action']) && !empty($_GET['action'])) {
                    $file = "files/" . $_GET['action'] . ".php";
                    if (file_exists($file)) {
                        include($file);
                    } else {
                        include("files/adminlogin.php");
                    }
                } else {
                    include("files/adminlogin.php");
                }
                ?>
            </section>
            <footer>              
            </footer>      
    </div>
  </div>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>