<img src="img/placeholder.jpg" id="padgination">
<div id="wrapper">
	<div id="content">
		<?php

        $page = (empty($_GET['page'])) ? '' : $_GET['page'];

        switch($page){
            case

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