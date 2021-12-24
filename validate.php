<html>

<title>Validation</title>
<link rel="icon" href="icon.png">

	<body>
<!--		<h2>Vote Confirmation: </h2>		-->
		<?php 
			//Establishes connection with MySQL
			$sqlConnect = mysqli_connect('localhost', 'root', '');
			if(!$sqlConnect)
			{
				die("Failed to connect to the database. ".mysqli_error());
			}	

			//Connects to the corresponding database
			$dbConnect = mysqli_select_db($sqlConnect, 'LBYCPG2_Project');
			if(!$dbConnect)
			{
				die("Failed to connect to the database. ".mysqli_error());
			}
			
			$voteStatus = mysqli_query($sqlConnect, "SELECT * FROM Voters WHERE Name = '". $_POST['VoterName'] ."'");
			if($SR = mysqli_fetch_array($voteStatus))
			{
				//Adjusts main page content on user voting status
				if($SR['Status'] == "Not Voted")
				{
					//Creates the multi-query to save information to multiple databases
					$voteReceipt = "INSERT INTO Receipts(VoteNum, VoterName, President, VicePresident, Date)
					VALUES('', '".$_POST['VoterName']."', '".$_POST['PresVote']."', '".$_POST['ViceVote']."', NOW());
					UPDATE Candidates
					SET Votes = Votes + 1
					WHERE Name = '".$_POST['PresVote']."' OR Name = '".$_POST['ViceVote']."';
					UPDATE Voters
					SET Status = 'Has Voted'
					WHERE Name = '".$_POST['VoterName']."'";
					$result = mysqli_multi_query($sqlConnect, $voteReceipt);
				}
			}
			
//			echo "<div class='valid'>
//                    <h1 style='font-family: Impact; font-size: 50px; align-content: center'>Vote Successfully Submitted!</h1>
//                </div>";
			echo "
                    
                    <style>
                    
                    body {
                        background-image: linear-gradient(to right, red , yellow);
                    }
                        .btn {
                        position: absolute;
                        transform: translate(-50%, -50%);
                        left: 50%;
                        top: 50%;
            display: block;
            padding: 20px;
            font-family: 'Roboto';
            -webkit-appearance: none;
            outline: 0;
            border: 0;
            color: white;
            background: #ABA194;
            transition: 0.3s;
        }

        .btn:hover {
            background: #ABA194;
            filter: brightness(90%);
             /*background: darken(#ABA194, 5%);*/
        }
                    </style>
                    
                    <div class='valid'>
                    <h1 style='font-family: Impact; font-size: 50px; align-content: center; position: absolute; right: 430px; top: 250px'>Vote Successfully Submitted!</h1>
                </div>
                    
<form action = 'receipt.php' method = 'post' />
				<input type = 'hidden', name = 'VoterName', value = '". $_POST['VoterName'] ."'>
				<input type = 'hidden', name = 'PresVote', value = '". $_POST['PresVote'] ."'>
				<input type = 'hidden', name = 'ViceVote', value = '". $_POST['ViceVote'] ."'>
                <button class='btn' type='submit' name='vote' value='View your Receipt here'>View your receipt here</button>
				</form>";
//        				<input type='submit' name='vote' value='View your Receipt here'/>
			mysqli_close($sqlConnect);
		?>
		<br>
		<br>		
		
	</body>
</html>