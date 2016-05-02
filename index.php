<?php
session_start();
include("config/config.php");
include("autoload.php");
include("classes/Db.php");
?>
          <header>
              <?php 
              include("includes/header.php");
              ?>
          </header>    
          <div id="all">
       <section>
                <?php
                if (isset($_GET['action']) && !empty($_GET['action'])) {
                    $file = "files/" . $_GET['action'] . ".php";
                    if (file_exists($file)) {
                        include($file);
                    } else {
                        include("files/home.php");
                    }
                } else {
                    include("files/home.php");
                }
                ?>
            </section>           
          <footer>
              <?php 
              include("includes/footer.php");
              ?>
          </footer>
</body>
</html>