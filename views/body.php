
<div id="wrapper">

	<div id="content">
		<?php

        $page = (empty($_GET['page'])) ? '' : $_GET['page'];

        switch($page){
            case 'top':
                include'top100.php';
         	break;
//            case prijsvraag:
//                include'';
//                break;
//            case ppp:
//                include'';
//                break;
//            case pp:
//                include'';
//                break;
        }
			include 'views/body-content.php';

			
		 ?>

	</div>

	<div id="sidebar">
		<?php

			include 'views/body-sidebar.php';
		 ?>

	 </div>
</div>