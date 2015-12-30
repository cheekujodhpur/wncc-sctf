<?php
if(!isset($_SESSION['user']))
    $name = "Guest";
else
    $name = $_SESSION['name'];
?>
<p>
Welcome <?php echo $name; ?>
</p>
