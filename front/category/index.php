<?php
$title ="Index Category";
ob_start();
?>
   <h1>Ici Index Category Front</h1>
 


<?php $content = ob_get_clean(); ?>

<?php $role=0;//$role= array(0 => Visitor, 1 => Admin, 2 => Seller)?>
<?php $varSell="Sell";$varData="Data";?>
<?php require_once 'C:\caisse191124\layout.php'?>




