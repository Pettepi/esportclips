<?php
require_once ("view/navi.php");
?>
<!-- LOGIN MODALI TÄSSÄ TOISTAISEKSI -->

<?php
require_once ("view/modal.php");
?>

<header>Popular streams in <?php echo $_GET['clipsearch']; ?></header>
<div>
<ul id="tulokset">

</ul>
</div>


<?php
require_once ("view/clips.php");
?>


<?php
require_once ("view/footer_search.php");
?>