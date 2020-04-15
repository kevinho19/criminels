<?php $title = 'accueil';?>
<?php ob_start();?>

<form action="controllers" method="post"></form>

<?php $content = ob_get_clean();
require ('views/templates/base.php');?>