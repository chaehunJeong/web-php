<?php
	function print_title() {
		if(isset($_GET['id'])) {
			echo $_GET['id'];
		} else {
			echo "WelCome";
		}
	}
	function print_description() {
		if(isset($_GET['id'])) {
			$basename = basename($_GET['id']);
			echo htmlspecialchars( file_get_contents("data/".$base));
		}else {
			echo "hello php";
		}
	}
	function print_list() {
		$list = scandir('./data');

		for($i = 0; $i < count($list); $i++) {
			if($list[$i] != '.' && $list[$i] !== '..') {
					echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
			}
		}
	}
 ?>
