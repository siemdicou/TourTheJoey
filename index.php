
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
        $current_day = (empty($_GET['current_day'])) ? '' : $_GET['current_day'];
        $id = (empty($_GET['id'])) ? '' : $_GET['id'];
         // $id = (empty($_GET['id'])) ? '' : $_GET['id'];
        
        // $current_id = (empty($_GET['current_id'])) ? '' : $_GET['current_id'];
        switch($page){
            case 'top':
                include'views/top100.php';
         	break;

         	case 'detail':
                require 'logic/detail-model.php';
                include'views/detail.php';
         	break;

            case 'prijsvraag':
                require 'logic/prijsvraag-model.php';
                include'views/prijsvraag.php';
            break;

            case 'daily':
                include'views/daily.php';
            break;

         	case 'insert_comment':
         		require 'logic/insertcomment.php';
         		header('location:index.php?page=detail&id='.$id.'');
         		break;	
         	default:
         		include 'views/home.php';
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


