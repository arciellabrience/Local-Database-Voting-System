<html>

<link rel='icon' href='icon.png'>

	<body>
<!--		<h2>Main Page: </h2>-->
			
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
						
			//Links main page to specific user account
			$voteStatus = mysqli_query($sqlConnect, "SELECT Voters.Status, Voters.Name, UserAccounts.Username, UserAccounts.AccType FROM Voters JOIN UserAccounts ON UserAccounts.Username = '" . $_POST['Username'] . "' AND Voters.ID = UserAccounts.ID");
			if($SR = mysqli_fetch_array($voteStatus))
			{

				$nm = $SR['Name'];
				//Adjusts main page content on user voting status
				if($SR['Status'] == "Not Voted")
				{
					//Displays the Candidates Available for Voting
					echo "List of Candidates for President: <br>";
					$candidates = mysqli_query($sqlConnect, "SELECT * FROM Candidates WHERE Position = 'President'");
					while($pos = mysqli_fetch_array($candidates))
					{
						echo $pos['Name']. " (" . $pos['Gender'] . ") - " . $pos['Age'] . " years old from " . $pos['Partylist'] ." Partylist<br>";
					}
					echo "<br>List of Candidates for Vice President: <br>";
					$candidates = mysqli_query($sqlConnect, "SELECT * FROM Candidates WHERE Position = 'Vice President'");
					while($pos = mysqli_fetch_array($candidates))
					{
						echo $pos['Name']. " (" . $pos['Gender'] . ") - " . $pos['Age'] . " years old from " . $pos['Partylist'] ." Partylist<br>";
					}
					
					//Section for Voting
					$presVote = mysqli_query($sqlConnect, "SELECT * FROM Candidates WHERE Position = 'President'");
					echo "<form action = 'validate.php' method = 'post' />
							<h3>Vote here</h3>
							<input type = 'hidden', name = 'VoterName', value = '". $nm ."'>
							Select President: <br>";
					while($vote = mysqli_fetch_array($presVote))
					{
						echo "

<title>Voter Page</title>

'<meta name='viewport' content='width=device-width, initial-scale=1'>

<style>
                    body {
                        margin:0;
                        padding:0;
                        /*overflow-x:hidden;*/
                        /*background-image: linear-gradient(to right, red , yellow);*/
                        /*overflow: scroll; */
                        overflow-y: auto;
                        height: 100px;
                        position: relative;
                        background-image: url('ph flag.png');
                background-position: 250px -250px;
            }

.content {
                        position: relative;
                        bottom: 0;
                        background: rgb(0, 0, 0); /* Fallback color */
                        background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                        color: #f1f1f1;
                        width: 100%;
                    }

            .content:hover {
                        background-color: white;
                color: red;
            }

            * {
                        column-gap: 40px;
                box-sizing: border-box;
            }

            .candidates {
                        /*background: rgba(255, 255, 255, 0.5);*/
                        /*top: -500px;*/
                        /*bottom: 50px;*/

                        background-color: black;
                color: white;
                position: relative;
                top: -130px;
                right: -200px;
                width: 70%;
            }

            .random {
                        background-color: black;
                color: white;
                position: relative;

                background: rgb(0, 0, 0); /* Fallback color */
                background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
                color: #f1f1f1;
                width: 100%;
                /*justify-content: center;*/
                /*align-content: center;*/
            }

            .candidates:hover {

                        background-color: black;
                color: white;
            }
            
            * {box-sizing: border-box}

            /* Container needed to position the overlay. Adjust the width as needed */
            .vsClass {
                        /*position: relative;*/

                        position: relative;
                        width: 50%;
                        max-width: 300px;
            }

            /* Make the image to responsive */
            .vsImage {
                        /*position: relative;*/
                        /*width: 450px;*/
                        /*display: block;*/
                        position: absolute;
                        top: -150px;
                display: block;
                width: 450px;
                height: auto;
            }

            /* The overlay effect - lays on top of the container and over the image */
            .vsLabel {
                        /*position: absolute;*/
                        /*bottom: 0;*/
                        /*background: rgb(0, 0, 0);*/
                        /*background: rgba(0, 0, 0, 0.5); !* Black see-through *!*/
                        /*color: #f1f1f1;*/
                        /*width: 31.9%;*/
                        /*transition: .5s ease;*/
                        /*opacity:0;*/
                        /*color: white;*/
                        /*font-size: 20px;*/
                        /*padding: 20px;*/
                        /*text-align: center;*/

                        position: relative;
                        bottom: -32px;
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.5); /* Black see-through */
                color: #f1f1f1;
                width: 450px;
                transition: .5s ease;
                opacity:0;
                color: white;
                font-size: 20px;
                padding: 20px;
                text-align: center;
            }

            /* When you mouse over the container, fade in the overlay title */
            .vsClass:hover .vsLabel {
                        opacity: 1;
                    }

            /* Container needed to position the overlay. Adjust the width as needed */
            .mpClass {
                        /*position: relative;*/

                        position: relative;
                        width: 50%;
                        max-width: 300px;
            }

            /* Make the image to responsive */
            .mpImage {
                        /*position: relative;*/
                        /*width: 450px;*/
                        /*display: block;*/
                        /*right: -480px;*/
                        /*top: -245px;*/

                        /*display: block;*/
                        /*width: 100%;*/
                        /*height: auto;*/

                        position: absolute;
                        top: -213px;
                right: -630px;
                display: block;
                width: 450px;
                height: auto;
            }

            /* The overlay effect - lays on top of the container and over the image */
            .mpLabel {
                        /*position: absolute;*/
                        /*bottom: 0;*/
                        /*background: rgb(0, 0, 0);*/
                        /*background: rgba(0, 0, 0, 0.5); !* Black see-through *!*/
                        /*color: #f1f1f1;*/
                        /*right: 500px;*/
                        /*width: 31.9%;*/
                        /*transition: .5s ease;*/
                        /*opacity:0;*/
                        /*color: white;*/
                        /*font-size: 20px;*/
                        /*padding: 20px;*/
                        /*text-align: center;*/

                        position: absolute;
                        bottom: -32px;
                right: -630px;
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.5); /* Black see-through */
                color: #f1f1f1;
                width: 450px;
                transition: .5s ease;
                opacity:0;
                color: white;
                font-size: 20px;
                padding: 20px;
                text-align: center;
            }

            /* When you mouse over the container, fade in the overlay title */
            .mpClass:hover .mpLabel {
                        opacity: 1;
                    }

            /* Container needed to position the overlay. Adjust the width as needed */
            .lrClass {
                        /*position: relative;*/

                        position: relative;
                        width: 50%;
                        max-width: 300px;
            }

            /* Make the image to responsive */
            .lrImage {
                        /*position: relative;*/
                        /*width: 450px;*/
                        /*display: block;*/
                        /*right: -957px;*/
                        /*top: -490px;*/

                        position: absolute;
                        top: -213px;
                right: -1110px;
                display: block;
                width: 450px;
                height: auto;
            }

            /* The overlay effect - lays on top of the container and over the image */
            .lrLabel {
                        position: absolute;
                        bottom: -32px;
                right: -1110px;
                background: rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.5); /* Black see-through */
                color: #f1f1f1;
                width: 450px;
                transition: .5s ease;
                opacity:0;
                color: white;
                font-size: 20px;
                padding: 20px;
                text-align: center;
            }

            /* When you mouse over the container, fade in the overlay title */
            .lrClass:hover .lrLabel {
                        opacity: 1;
                    }
</style>


<div class='content' style='font-family: Impact; text-align: center; font-size: 100px; top: -55px'>
                <center><b><p>2022 PHILIPPINE ELECTIONS</p></b></center>
            </div>

            <div class='candidates' style='font-family: Impact; text-align: center; font-size: 80px'>
                <center><b><p>PRESIDENTIAL CANDIDATES</p></b></center>
            </div>

            <div class='presisClass'>
                <div class='vsClass'>
                    <img src='vico.jpeg' class='vsImage''>
                    <div class='vsLabel'>Vico Sotto</div>
                </div>

                <div class='mpClass'>
                    <img src='leni.jpeg' class='mpImage'>
                    <div class='mpLabel'>Leni Robredo</div>
                </div>

                <div class='lrClass'>
                    <img src='manny.jpeg' class='lrImage'>
                    <div class='lrLabel'>Manny Pacquiao</div>
                </div>
            </div>


								<label>
									<input type='radio' name='PresVote' value='" . $vote['Name'] . "' required>
									" . $vote['Name'] . "
								</label>
							<br>";
							
					}
					echo "<br>Select Vice President<br>";
					$viceVote = mysqli_query($sqlConnect, "SELECT * FROM Candidates WHERE Position = 'Vice President'");
					while($vote = mysqli_fetch_array($viceVote))
					{
						echo "								
								<label>
									<input type='radio' name='ViceVote' value='" . $vote['Name'] . "' required>
									" . $vote['Name'] . "
								</label>
							<br>";	
							
					}
					
					echo "<input type='submit' name='vote' value='Submit Vote'/>
						</form>";
					
				}
				
				else
				{
					//Submit a hidden form containing voter name
					echo "You have already voted<br>";
					echo "<form action = 'receipt.php' method = 'post' />
						<input type = 'hidden', name = 'VoterName', value = '". $nm ."'>
						<input type='submit' name='vote' value='View your Receipt here'/>
						</form>";						
				}
			}
			else
			{
				//Checks if the user is an admin
				$checkAdmin = mysqli_query($sqlConnect, "SELECT * FROM UserAccounts WHERE Username = '" . $_POST['Username'] . "' AND AccType = 'Admin'");
				if($admin = mysqli_fetch_array($checkAdmin)) 
				{
					//Shows a database of all accounts
//					echo "<table>
//							<tr>
//								<caption>User Database</caption>
//								<th>Username</th>
//								<th>Password</th>
//								<th>Account Type</th>
//							</tr>";

                    echo "
<title>Admin</title>

<style>

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
        
        .logout {
            position: relative;
            top: -600px;
            /*right: 20%;*/
        }

        </style>
        
        <p style='font-family: Impact; position: relative; right: -410px; top: 40px; font-size: 100px'>ADMIN ACCESS</p>"; ?>

                    <table class=table align='center' border='1' table-responsive>
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Account Type</th>
                            </tr>
                        </thead>


                    <?php
					$users = mysqli_query($sqlConnect, "SELECT * FROM UserAccounts");
					while($account = mysqli_fetch_array($users))
					{
					    ?>
<!--						$un = $account['Username'];-->
<!--						$pw = $account['Password'];-->
<!--						$tp = $account['AccType'];-->
<!--//						echo "<tr>-->
<!--//								<td>" . $un . "</td>-->
<!--//								<td>" . $pw . "</td>-->
<!--//								<td>" . $tp ."</td>-->
<!--//							  </tr>";-->
                        <tr>
						<td><center><?php echo $account['Username']; ?></center></td>
                            <td><center><?php echo $account['Password']; ?><center></td>
                            <td><center><?php echo $account['AccType']; ?><center></td>
						</tr>

<!--						/*echo $un . "----------" . $pw . "--------" . $tp . "<br>";-->
					<?php
					}
					?>
                    </table>
<?php
//                    </table>
//                    <br>";
//					echo "</table><br>";
					
					//Displays a table of users that have voted in the system
					echo "<table class=table align='center' border='1' table-responsive>
                            <br></br>
							<tr>
								<caption style='font-family: Athelas; font-size: 50px'>Confirmed Voters</caption>
								<th>Name</th>
								<th>Age</th>
								<th>Gender</th>
								<th>City</th>
							</tr>";
					?>

					<?php
					$hasVoted = mysqli_query($sqlConnect, "SELECT * FROM Voters WHERE Status = 'Has Voted'");
					while($voter = mysqli_fetch_array($hasVoted))
					{
					    ?>

<!--						$nm = $voter['Name'];-->
<!--						$ag = $voter['Age'];-->
<!--						$gn = $voter['Gender'];-->
<!--						$ct = $voter['City'];-->
                                <tr>
								<td><center><?php echo $voter['Name']?><center></td>
								<td><center><?php echo $voter['Age']?><center></td>
								<td><center><?php echo $voter['Gender']?><center></td>
								<td><center><?php echo $voter['City']?><center></td>
							  </tr>
                    <?php
					}
					/*echo "</table>";*/
					
					//Displays a table of votes for president candidates
					$result = mysqli_query($sqlConnect, "SELECT SUM(Votes) FROM Candidates WHERE Position = 'President'");
					$var = mysqli_fetch_assoc($result);
					$totalVotes = $var['SUM(Votes)'];
					echo "<br>";
					
					echo "<table class=table align='center' border='1' table-responsive>
                            <br></br>
							<tr>
								<caption style='font-family: Athelas; font-size: 50px'>President Vote Statistics</caption>
								<th>Name</th>
								<th>Partylist</th>
								<th>Number of Votes</th>
							</tr>";
					?>

                    <?php
					$presVotes = mysqli_query($sqlConnect, "SELECT * FROM Candidates WHERE Position = 'President'");
					while($candidateVotes = mysqli_fetch_array($presVotes)) 
					{
					    ?>
<!--//						$nm = $candidateVotes['Name'];-->
<!--//						$prt = $candidateVotes['Partylist'];-->
<!--//						$per = round(($candidateVotes['Votes']/$totalVotes) * 100, 2);-->
						<tr>
								<td><center><?php echo $candidateVotes['Name']?><center></td>
								<td><center><?php echo $candidateVotes['Partylist']?><center></td>
                                <td><?php echo $candidateVotes['Votes']?><?php echo  '('?><?php echo round(($candidateVotes['Votes']/$totalVotes) * 100, 2)?> <?php echo '%)'?></td>
                        </tr>
<!--						//echo $nm . "-----" . $pos . "---" . $prt . "---" . $per . "%" . "<br>";-->
                    <?php 
					}
					/*echo "</table>";*/
					
					//Displays a table of votes for vice president candidates
					$result = mysqli_query($sqlConnect, "SELECT SUM(Votes) FROM Candidates WHERE Position = 'Vice President'");
					$var = mysqli_fetch_assoc($result);
					$totalVotes = $var['SUM(Votes)'];
					echo "<br>";
					
					echo "<table class=table align='center' border='1' table-responsive>
                           <br></br>
							<tr>
								<caption style='font-family: Athelas; font-size: 50px'>Vice President Vote Statistics</caption>
								<th>Name</th>
								<th>Partylist</th>
								<th>Number of Votes</th>
							</tr>";

					?>

                    <?php
					$viceVotes = mysqli_query($sqlConnect, "SELECT * FROM Candidates WHERE Position = 'Vice President'");
					while($candidateVotes = mysqli_fetch_array($viceVotes)) 
					{
					    ?>

<!--						$nm = $candidateVotes['Name'];-->
<!--						$prt = $candidateVotes['Partylist'];-->
<!--						$per = round(($candidateVotes['Votes']/$totalVotes) * 100, 2);-->
						<tr>
								<td><?php echo $candidateVotes['Name']?></td>
								<td><?php echo $candidateVotes['Partylist']?></td>
								<td><?php echo $candidateVotes['Votes']?><?php echo '('?> <?php echo round(($candidateVotes['Votes']/$totalVotes) * 100, 2)?><?php echo '%)'?></td>
							  </tr>
                    <?php
					}
//					</table>
					
				}
				
				//Handles an invalid login attempt
				else echo "<h3>Error: Login credentials invalid (Account does not exist)</h3>";
			}
			
			echo "<div class='logout'>
                    <p style='font-family: Athelas; font-size: 20px; position: absolute; right: 10px'><a href='login.html'> Log out </a></p>
                    </div>";
			
			mysqli_close($sqlConnect);
		?>
		<br>
		<br>		
		
	</body>
</html>