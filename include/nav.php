<?php
      $urlHost = "http://localhost:8000";

      $textNav = array(
                        0 => "Home",
                        1 => "Categories",
                        2 => "Products",
                        3 => "Inscription",
                        4 => "Connexion",
                        5 => "Deconnexion",
      );

      $urlNav = array(
                       0 => "/index.php",
                       1 => "/front/category/index.php",
                       2 => "/front/product/index.php",
                       3 => "/include/inscription.php",
                       4 => "/include/connexion.php",
                       5 => "/include/deconnexion.php",
      ); 

      // echo $_SERVER['PHP_SELF'];

      for ($i=0; $i < count($urlNav) ; $i++) { 
        $coloredNav[$i]="";
      }
      
      $clickedNav=array_search($_SERVER['PHP_SELF'],$urlNav);

      $coloredNav[$clickedNav]="bg-primary text-white active";
      
      $countItems=0;
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <ul class="navbar-nav">

          <?php
              for ($i=0; $i < count($textNav) ; $i++) {               
          ?>
            <li class="nav-item">
              <a class="nav-link <?=$coloredNav[$i]?>" href="<?= $urlHost.$urlNav[$i]?>"><?=$textNav[$i]?></a>
            </li>
          <?php
              }
          ?>

        </ul>        
    </div>   
    <a class="btn"  href="panier.php"><i class="fa-solid fa-cart-shopping"></i>Panier(<?=$countItems?>)</a>
  </div>
</nav>