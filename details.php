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
			
				$id = $_GET['id'];
			
				$sql = "SELECT * FROM tasks WHERE id = :id";
				$statement = $db->prepare($sql);
				$statement->bindValue(':id', $id);
				$success = $statement->execute();
				$result = $statement->fetch();
				$statement->closeCursor();
				
				if($result)
				{
					echo '<h1>'.$result['title'].'</h1>';
					echo '<b>Date:</b> '.date('m/j/Y - h:i A', strtotime($result['date']) ).'<br>';
					echo '<b>Location:</b> '.$result['location'].'<br>';
					echo '<b>People Needed:</b> '.$result['people_needed'].'<br>';
					echo '<b>Materials Needed:</b> '.$result['materials_needed'].'<br><br>';
					echo '<p>'.$result['description'].'</p>';
					
				}

			?>
				<p>The following users have signed up:</p>
			<?php		
					$task_id = $_GET['id'];
					
				$sql = "SELECT users.username, user_task.task_id FROM users INNER JOIN user_task ON users.id=user_task.user_id WHERE user_task.task_id = $task_id ORDER BY users.username";
					$statement = $db->prepare($sql);
					$success = $statement->execute();
					$results = $statement->fetchAll();
					foreach ($results as $result)
					
					//in the loop outputting the volunteers
					if( $result['username'] == $_SESSION['username'] )
				{
					$is_enrolled = 1;
				}
					
				{
					echo $result['username'].'<br>';
				}
				
				//If user is logged in
				if(isset($_SESSION['id']))
				{
					?>
					<form action="details_processor.php" method="post">
						<input type="hidden" name="task_id" value="<?php echo $_GET['id']; ?>
						<input type="hidden" name="enrolled" value="0">  <!-- TODO: Set to 1 if this user already volunteered for this project -->
						<input type="submit" value="Volunteer">
					</form>
					<?php
					
				}
			?>
		</main>
	</body>
</html>

