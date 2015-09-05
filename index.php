
<html lang="en">

	<?php
	// Include the class on your page somewhere
	include('challonge.class.php');

	// Create a new instance of the API wrapper. Pass your API key into the constructor
	// You can view/generate your API key on the 'Password / API Key' tab of your account settings page.
	$c = new ChallongeAPI(UbJNZTBSuXZcPWZ4BqTW3OPMSPUGtt7cuZYWL5kr);
	
	//Conntect to db
	$conn =  new mysqli('ec2-54-80-189-22.compute-1.amazonaws.com', 'people_user', 'pass', 'people', '');
	
	// check connection 
	if (mysqli_connect_errno()) 
	{
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	mysqli_select_db("people");
	
	//get tourny id somehow
	
	$tournament_id = 827414;

	//get all players in tourny
	
	// Get all participants
	// http://challonge.com/api/tournaments/:tournament/participants
	$tournament_id = 827414;
	$participants = $c->getParticipants($tournament_id);
	//print_r( $participants);
	
	
	foreach ($participants as $item) 
	{
		//nothing works
		//check people for name
		$temp = 'Abate';
		$statement = $conn->prepare("SELECT `elo` FROM `people` WHERE `name` = ?");
		$statement->bind_param('s', $temp);
		$statement->execute();
		$statement->bind_result($elo);
		$statement->fetch();
		echo $elo;
		
        echo $query;  
		/*if ($stmt = mysqli_prepare("SELECT COUNT(*) FROM people WHERE name=?")) 
		{
			$stmt->bind_param("ss", $item->name);
			$stmt->execute();
			$stmt->bind_result($count);
			echo $count;
			$stmt->fetch();
			$stmt->close();
			
		}*/
		
		//insert new users
		
		
		/*if($count == 0)
		{
			echo $count;
			echo $item->name;
			mysqli_query($conn, "INSERT INTO people(`name`, `elo`) VALUES ($item->name, 1000)");
		}*/
		
		//Add the current user with id and elo attached to an array
		
		
		/*print_r((string) $item->name );
		echo ' ';
		print_r((string) $item->id );
		echo '<br/>';*/
	}

	echo '<br/>';

	// Get all matches
	// http://challonge.com/api/tournaments/:tournament/matches
	$tournament_id = 827414;
	$parmas = array();
	$matches = $c->getMatches($tournament_id, $params);
	//print_r( $matches);
	foreach ($matches as $item) 
	{
		
	   /*print_r( $item );
	   echo '<br/>';
	   print_r((int) $item->{'loser-id'} );
	   echo ' ';
	   print_r((int) $item->{'winner-id'} );*/
	}
	$conn->close();
	?>

<head>
	<meta charset="utf-8">
	<title>AutoELO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="css/bootstrap.css" rel="stylesheet">

	<style type="text/css">
	
		body 
		{
			padding-top: 60px;
			padding-bottom: 40px;
		}
		
		.centered
		{
			text-align:center;
		}
				
	</style>


</head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">

				<a class="brand" href="#">AutoELO</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>

				</div>
			</div>
		</div>
    </div>

    <div class="container">
		<div class="hero-unit">
			<div class="centered">
				<h1>AutoELO</h1>
			
				<p>Look at all this ELO</p>
				<p><a id="expand" align="center" class="btn btn-primary btn-large" onclick="expand();">Post</a></p>
			</div>
		</div>
		
		<div class="table table-striped" align="center">
			<table>
				<thead>
					<tr>
						<th>Player</th>
						<th>ELO</th>

					</tr>
				</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>

				</tr>
			</tbody>
			
				<tr> 
					<td></td> 
					<td></td> 
				</tr> 

</table>
		</div>
		
		<hr>

		<footer>
			<p>GraphiteZeppelin</p>
		</footer>
    </div> 

   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/functions.js"></script>


  

</body></html>

