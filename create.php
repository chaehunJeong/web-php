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
			echo file_get_contents("data/".$_GET['id']);
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
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			<?php
			print_title();
			 ?>
		</title>
	</head>
	<body>
			<h1><a href="index.php">WEB</a></h1>
			<ol>
			  <?php
				print_list();
				 ?>
			 </ol>
			 <a href="create.php">create</a>
			 <form action="create_process.php" method="post">
			 	<p>
					<input type="text" name="title" placeholder="Title">
				</p>
				<p>
					<textarea name="description"></textarea>
				</p>
				<p>
					<input type="submit">
				</p>
			 </form>
			<h2>
				<?php
				print_title();
				 ?>
			</h2>
			<?php
			print_description();
			 ?>
	</body>
</html>
