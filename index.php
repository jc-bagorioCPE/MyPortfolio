<?php
	
	include "includes/topheader.php";
    include "includes/menu.php";
	
	if (isset($_GET['page'])){
		
		$page = $_GET['page'];
		
		switch ($page){
			case 'Features':
                include "includes/mainoverview.php";
                include "includes/maintitle.php";
                include "includes/maintitle2.php";
                include "includes/maintitle3.php";
                include "includes/maintitle4.php";
				break;
			case 'About':
				include "includes/mainoverview1.php";
                include "includes/abouts1.php";
				break;
			case 'Who am I':
                include "includes/WhoamI.php";
				break;
			case 'resume':
				 include "includes/resume.php";
				 break;
			case 'Talk2Me':
				 include "includes/letstalkform.php";
				 break;
		}
	} 
	else{
        include "includes/mainoverview.php";
        include "includes/maintitle.php";
        include "includes/maintitle2.php";
        include "includes/maintitle3.php";
        include "includes/maintitle4.php";
		include "includes/album.php";
		include "includes/pic.php";
	}
	
	include "includes/footer.php";
	
?>