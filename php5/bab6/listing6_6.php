<?php
	function jumpTopage($page)
	{
		if (!headers_sent()){
			header("location:$page");
			exit();
		}else{
			echo "<mete http-equiv=refresh
					content=0;url=listing6_5.php>";
					exit();
		}
	}
	$hal = "listing6_5.php";
	jumpTopage($hal);
	
?>