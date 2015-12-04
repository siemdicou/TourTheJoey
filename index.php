
<?php 
	include 'config/config.php';
	require_once 'includes/database.php';
	include 'views/head.php';
	include 'views/sub-nav.html';
	include 'views/header.php';
	include 'views/padgination.php';
?>
<div id="wrapper">

	<div id="content">
	<?php

        $page = (empty($_GET['page'])) ? '' : $_GET['page'];
        $id = (empty($_GET['id'])) ? '' : $_GET['id'];
        switch($page){
            case 'top':
                include'views/top100.php';
         	break;
         	case 'detail':
                include'views/detail.php';
         	break;

         	default:
         		// include 'views/home.php';
         	break;	
         	};

			
		 ?>

	</div>

	<div id="sidebar">
		<?php
			include 'views/body-sidebar.php';
		 ?>

	 </div>
</div>
<?php
	include 'views/footer.php';
?>


