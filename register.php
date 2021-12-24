<html>

<title>Register</title>
<link rel="icon" href="icon.png">

    <head>

        <!-- gives the browser instructions on how to control the page's dimension and scaling -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>

            body {

                height: 100%;
                background-position: center;
                /*position: relative;*/
                background-image: url("shot3.jpeg");
                /*background-size: 100%;*/
                background-size: cover;
                /*position: relative;*/
                /*background-image: url("shot3.jpeg");*/
                /*!*background-size: 100%;*!*/
                /*background-size: cover;*/
                /*overflow: hidden;*/
                /*background-repeat: no-repeat;*/
                /*padding-left: 10px;*/
                /*overflow: scroll;*/

                /*animation: move 10s ease infinite;*/
                /*transform: translate3d(0, 0, 0);*/
                /*background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);*/
                /*height: 100vh*/
            }


            /*menu bar*/
            .topNav {
                background-color: yellow;
                overflow: hidden;
                border-radius: 5px;
                left: 5px;
            }

            .topNav a {
                float: right;
                padding: 20px 16px;
                text-align: center;
                text-decoration: none;
                font-size: 20px;
                font-family: "Verdana";
            }

            .topNav a:visited {
                color: blue;
            }

            .topNav a:hover {
                background-color: white;
                color: red;
            }

            /*.topNav a:visited {*/
            /*    color: blue;*/
            /*}*/

            .topNav a.active {
                background-color: lightgrey;
                color: black;
            }

            .topNav b {
                /*float: left;*/
                /*padding: 14px 16px;*/
                /*text-align: center;*/
                /*font-size: 20px;*/
                /*font-family: "Courier New";*/

                float: left;
                padding: 20px 16px;
                text-align: center;
                text-decoration: none;
                font-size: 20px;
                font-family: "Verdana";
            }

            #countdown {
                position: relative;
                top: 7.5px;
                float: left;
                /*padding: 5px;*/
                padding: 14px 16px;
                text-align: center;
                font-size: 20px;
                font-family: "Courier New";
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

            /* Create three equal columns that floats next to each other */
            .column {
                display: block;
                align-items: center;
                justify-content: center;
                /*margin: 0 auto;*/
                left: 50px;
                top: -80px;
                position: relative;
                float: left;
                width: 30%;
                /*height: 80%;*/
                padding: 10px;
                margin: 6px;
                height: 300px; /* Should be removed. Only for demonstration */
            }

            /* Clear floats after the columns */
            .row:after {
                /*column-gap: 40px;*/
                content: "";
                display: table;
                clear: both;
            }

            .column1Row1 {
                position: relative;
                bottom: 20px;
                left: 7px;
                font-family: Georgia;
                display: block;
            }

            .column1Row1:hover {
                color: black;
            }

            .column1Row2 {
                position: absolute;
                bottom: 172px;
                left: 20px;
                font-size: 12px;
                font-family: "Lucida Grande";
                display: block;
                color: lightgray;
            }

            .column2Row1 {
                text-align: center;
                position: relative;
                top: -20px;
            }

            .column3Row1 {
                position: relative;
                bottom: 20px;
                font-family: Georgia;
            }

            .column3Row2 {
                position: absolute;
                bottom: 195px;
                left: 10px;
                font-size: 12px;
                font-family: "Lucida Grande";
                display: block;
                color: lightgray;
            }

            .row a:visited {
                color: yellow;
            }

            .column1Image {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 65%;
            }

            .column2Image {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 55%;
            }

            .column3Image {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 77%;
            }

            .botNav {
                position: absolute;
                background-color: #254578;
                overflow: hidden;
                border-radius: 5px;
                /*bottom: 1px;*/
                width: 100%;
                /*top: 648px;*/
                top: 730px;
                /*top: 740px;*/
                /*top: 648px;*/
            }

            .botNav a {
                float: right;
                padding: 20px 16px;
                text-align: center;
                text-decoration: none;
                font-size: 20px;
                font-family: "Verdana";
                color: white;
            }

            .hashtag {
                position: absolute;
                /*top: 648px;*/
                /*top: 740px;*/
                top: 730px;
                /*top: 648px;*/
                float: right;
                padding: 20px 16px;
                text-align: center;
                text-decoration: none;
                font-size: 20px;
                font-family: "Verdana";
                color: white;
            }

            .user {
                position: absolute;
                top: 140px;
                right: 510px;
                /*width: 90%;*/
                width: 100%;
                /*max-width: 340px;*/
                max-width: 400px;
                margin: 10vh auto;
            }

            .form {
                margin-top: 33px;
                border-radius: 6px;
                overflow: hidden;
                opacity: 0;
                transform: translate3d(0, 500px, 0);
                animation: arrive 500ms ease-in-out 0.9s forwards;
            }

            .form--no {
                animation: NO 1s ease-in-out;
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }

            .form__input {
                display: block;
                width: 100%;
                padding: 20px;
                font-family: "Roboto";
                -webkit-appearance: none;
                border: 0;
                outline: 0;
                transition: 0.3s;
            }

            .form__input:focus {
                filter: brightness(90%);
                /*background: darken(#fff, 3%);*/
                background: #fff;
            }

            .radio {
                display: block;
                width: 100%;
                padding: 20px;
                font-family: "Roboto";
                -webkit-appearance: none;
                border: 0;
                outline: 0;
                transition: 0.3s;

                /*filter: brightness(90%);*/
                /*background: darken(#fff, 3%);*/
                background: #fff;
            }

            /*.radio:focus {*/
            /*    filter: brightness(90%);*/
            /*    !*background: darken(#fff, 3%);*!*/
            /*    background: #fff;*/
            /*}*/

            .btn {
                display: block;
                width: 100%;
                padding: 20px;
                font-family: "Roboto";
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


            @keyframes NO {
                from, to {
                    -webkit-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
                }

                10%, 30%, 50%, 70%, 90% {
                    -webkit-transform: translate3d(-10px, 0, 0);
                    transform: translate3d(-10px, 0, 0);
                }

                20%, 40%, 60%, 80% {
                    -webkit-transform: translate3d(10px, 0, 0);
                    transform: translate3d(10px, 0, 0);
                }
            }

            @keyframes arrive {
                0% {
                    opacity: 0;
                    transform: translate3d(0, 50px, 0);
                }

                100% {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                }
            }

            @keyframes move {
                0% {
                    background-position: 0 0
                }

                50% {
                    background-position: 100% 0
                }

                100% {
                    background-position: 0 0
                }
            }

            .validate {
                position: relative;
                top: 287px;
                left: 950px;
            }

        </style>

    </head>
    </head>

	<body>

    <div class='user'>
        <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post" class="form">
        <input type="text" placeholder="Username" class="form__input" name="Username" required/>
        <input type="password" placeholder="Password" class="form__input" name="Password" required/>
        <input type="password" placeholder="Confirm Password" class="form__input" name="Confirm" required/>
        <input type="text" placeholder="Full Name" class="form__input" name="Name" required/>
        <input type="text" placeholder="Age" class="form__input" name="Age" required/>

        <!--    Select Gender: <br>-->
        <div class="radio">
            <label style="color: black; font-family: Roboto">
                Select Gender:
            </label>

            <label style="color: gray; font-family: Roboto">
                <input type="radio" name="Gender" value="Male" required>
                Male
            </label>
            <label style="color: gray; font-family: Roboto">
                <input type="radio" name="Gender" value="Female">
                Female
            </label>
        </div>

        <input type="text" placeholder="City" class="form__input" name="City" /> <br>
        <button class="btn" type="submit" name="submit" value="Register">Register</button>
        </form>
    </div>

    <div style="position: absolute; left: 250px; top: -11px">
        <b><p id="countdown" align="left"></p></b>
    </div>

    <div class="topNav">
        <a class="active" href="registration.html">Register</a>
        <a href="login.html">Log In</a>
        <a href="vps.html">Vice Presidents</a>
        <a href="presis.html">Presidents</a>
        <a href="home.html">Home</a>

        <div class="topLeft">
            <b>VOTING STARTS IN:</b>
        </div>
    </div>

    <div class="content" style="font-family: Impact; text-align: center; font-size: 100px; top: -55px">
        <center><b><p>2022 PHILIPPINE ELECTIONS</p></b></center>
    </div>

    <div class="botNav">
        <a>Contact Us at GOV.PH</a>
    </div>

    <div class="hashtag">
        <a>#MagpaRehistroKa</a>
    </div>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("May 9, 2022 12:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);

        const button = document.querySelector('.btn')
        const form   = document.querySelector('.form')

        button.addEventListener('click', function() {
            form.classList.add('form--no')
        });
    </script>
		
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
		
		if(isset($_POST['submit'])) {
			if(!empty($_POST['Username'] and $_POST['Password'] and $_POST['Name'] and $_POST['Age']) and $_POST['Gender'] and $_POST['City']) {
				if($_POST['Password'] == $_POST['Confirm'])
				{
					$login = mysqli_query($sqlConnect, "SELECT * FROM UserAccounts WHERE Username = '".$_POST['Username']."'");
					if(mysqli_fetch_array($login)) {
						echo "<h3>Error: Username already used. Try a different one.</h3>";
					}
					else {
						$addUser = "INSERT INTO UserAccounts(ID, Username, Password, AccType)
						VALUES('', '".$_POST['Username']."', '".$_POST['Password']."', 'Voter');
						INSERT INTO Voters(ID, Name, Age, Gender, City, Status)
						VALUES('', '".$_POST['Name']."', '".$_POST['Age']."', '".$_POST['Gender']."', '".$_POST['City']."', 'Not Voted')";
						mysqli_multi_query($sqlConnect, $addUser);
						echo "<div class='validate'>
Account successfully created. Log in <a href = 'login.html'>Here.</a>
</div>";
					}
				}
				else
				{
//					echo "<h3>Error: Passwords do not match. Try again</h3>";
                    echo "<div class='validate'>
Error: Passwords do not match. Try again
</div>";
				}
			}
		}
		mysqli_close($sqlConnect);
		?>
	</body>
</html>