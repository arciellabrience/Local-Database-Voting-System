<html>

<title>Receipt</title>
<link rel="icon" href="icon.png">

	<body>
		<h2>Voter's Receipt: </h2>		
		<?php 
			//Connects to the DB1 Database
			$sqlConnect = mysqli_connect('localhost', 'root', '');
			if(!$sqlConnect) 
			{
				die("Failed to connect. ".mysqli_error());
			}
			
			//Connects to the VoterDetails table
			$dbConnect = mysqli_select_db($sqlConnect, 'LBYCPG2_Project');
			if(!$dbConnect)
			{
				die("Failed to connect to the database. ".mysqli_error());
			}

			?>

			<?php
			//Displays User Vote Receipt
			$getVote = mysqli_query($sqlConnect, "SELECT * FROM Receipts WHERE VoterName = '" . $_POST['VoterName'] . "'");
			if($v = mysqli_fetch_array($getVote))
			{

			    echo "<style>

body {
            /*position: relative;
            background-size: 100%;
            /*background-repeat: no-repeat;*/
            /*padding-left: 10px;*/
            /*overflow: scroll;*/

            /*animation: move 10s ease infinite;
            transform: translate3d(0, 0, 0);*/
           background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
           overflow: hidden;
           /*background-image: url('shot3.jpeg');*/
           /*position: relative;
                background-image: url('ph flag.png');
                background-position: 250px -250px;
           
            /*background-image: linear-gradient(to right, red , yellow);*/
            /*height: 100vh*/
        }


                   .table {
            table-layout: fixed;
            width: 100%;
            border-style:solid;
            border-width:2px;
            border-color: gray;
            /*background-color: black;
            color: white;*/
        }
        
        </style>";

			    ?>

				<table class=table align='center' border='1' table-responsive>
							<tr>
								<caption>Receipt Details</caption>
								<th>Voter Name</th>
								<th>Date of Voting</th>
								<th>President</th>
								<th>Vice President</th>
							</tr>
						    <tr>
								<td><?php echo $v['VoterName']?></td>
								<td><?php echo $v['Date']?></td>
								<td><?php echo $v['President']?></td>
								<td><?php echo $v['VicePresident']?></td>
						    </tr>

			<?php } ?>
                </table>

        <?php
			echo "<br><a href='login.html'> Log out </a>";
			mysqli_close($sqlConnect);
		?>
		<br>
		
	</body>
</html>