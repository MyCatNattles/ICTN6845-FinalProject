<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Volunteer tasks</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" rel="stylesheet">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<header>
			<img src="helpinghands.png" alt="Helping Hands">
		</header>
		<nav>
			<?php require_once 'inc/nav.php'; ?>
		</nav>
		<main>
			<?php
				require_once('inc/db_connect.php');
			
				if(isset($_SESSION['id']))
				{
					$user_id = $_SESSION['id'];
					$task_id = $_POST['task_id'];
					$enrolled = $_POST['enrolled'];
				}
				else
				{
					echo 'Error: No user logged in';
				}
			?>	
					
			<?php
			
			//If $enrolled == 1, then the user is removing themselves. Else, the user is signing up.

			if ($enrolled == 1) {
			
			try {

				// sql to delete a record
				$sql = "DELETE FROM user_task WHERE user_id= $user_id";

				// use exec() because no results are returned
				$db->exec($sql);
				echo "Sorry to see you go!";
				}
			catch(PDOException $e)
				{
				echo $sql . "<br>" . $e->getMessage();
				}

			$db = null;
			
			} else {
			
			try {
				$sql = "INSERT INTO user_task (user_id, task_id)
				VALUES ('$user_id', '$task_id')";
			// use exec() because no results are returned
				$db->exec($sql);
				echo "Thanks for signing up!";
		}
			catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
			$db = null;

		}
			
			?>
			
		</main>
	</body>
</html>

