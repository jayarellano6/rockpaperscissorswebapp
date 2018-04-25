<html>
	<head>
		<title>Rock Paper Scissors</title>
		<link rel="stylesheet" type="text/css" href="rps.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	
	<body onload="init()">
		<h1 id="rockpaperscissors">Rock, Paper, Scissors</h1>
		<div id="gameWindow">
			<div id="btnGo" onclick="play()">
				GO
			</div>

			<div id="playerPanel">
				<h2>Player</h2>
				<img id="imgPlayer" src="images/question.png">
				<br><br>
				<div id="btnRock" class="iconButton" onclick="selectRock()">
					<img src="images/rock.png">
					<br>Rock
				</div>
				<div id="btnPaper" class="iconButton" onclick="selectPaper()">
					<img src="images/paper.png">
					<br>Paper
				</div>
				<div id="btnScissors" class="iconButton" onclick="selectScissors()">
					<img src="images/scissors.png">
					<br>Scissors
				</div>
			</div>

			<div id="computerPanel">
				<h2>Computer</h2>
				<img id="imgComputer" src="images/question.png">
				<br><br>
				<div id="lblRock" class="iconLabel">
					<img src="images/rock.png">
					<br>Rock
				</div>
				<div id="lblPaper" class="iconLabel">
					<img src="images/paper.png">
					<br>Paper
				</div>
				<div id="lblScissors" class="iconLabel">
					<img src="images/scissors.png">
					<br>Scissors
				</div>
			</div>

			
		</div>
		<h1 id="win">YOU WIN!</h1>
		<h1 id="lose">YOU LOSE!</h1>
		<h1 id="tie">TIE</h1>
		<script language="javascript" type="text/javascript">
			var imgPlayer;
			var btnRock;
			var btnPaper;
			var imgComputer;
			var btnScissors;
			var btnGo;
			
			function init(){
				imgPlayer = document.getElementById("imgPlayer");
				imgComputer = document.getElementById("imgComputer");
				btnRock = document.getElementById("btnRock");
				btnPaper = document.getElementById("btnPaper");
				btnScissors = document.getElementById("btnScissors");
			}
				
			function selectRock(){
				// alert('rock');
				imgPlayer.src = "images/rock.png";
				// $("#imgPlayer").attr("src", "images/rock.png");
			}
			
			function selectPaper(){
				// alert('paper');
				imgPlayer.src = "images/paper.png";
				// $("#imgPlayer").attr("src", "images/paper.png");
			}
			
			function selectScissors(){
				// alert('scissors');
				imgPlayer.src = "images/scissors.png";
				// $("#imgPlayer").attr("src", "images/scissors.png");
			}
			
			function play(){
				var picker = ["images/rock.png", "images/paper.png", "images/scissors.png"];
				if($("#imgPlayer").attr("src") == "images/question.png"){
					$("#imgPlayer").attr("src", picker[Math.floor(Math.random() * 2)])
					// imgPlayer.src = picker[Math.floor(Math.random() * 2)];  
				}
				imgComputer.src = picker[Math.floor(Math.random() * 3)];
				
				if($("#imgPlayer").attr("src") == "images/rock.png" && $("#imgComputer").attr("src") == "images/paper.png"){
					$("#lose").show();
					$("#lose").css("color", "red");
					$("#win").hide();
					$("#tie").hide();
					// alert("you lose!");
				}
				if($("#imgPlayer").attr("src") == "images/rock.png" && $("#imgComputer").attr("src") == "images/scissors.png"){
					$("#win").show();
					$("#win").css("color", "green");
					$("#lose").hide();
					$("#tie").hide();
					// alert("you win!");
				}
				if($("#imgPlayer").attr("src") == "images/paper.png" && $("#imgComputer").attr("src") == "images/rock.png"){
					$("#win").show();
					$("#win").css("color", "green");
					$("#lose").hide();
					$("#tie").hide();
					// alert("you win!");
				}
				if($("#imgPlayer").attr("src") == "images/paper.png" && $("#imgComputer").attr("src") == "images/scissors.png"){
					$("#lose").show();
					$("#lose").css("color", "red");
					$("#win").hide();
					$("#tie").hide();
					// alert("you lose!");
				}
				if($("#imgPlayer").attr("src") == "images/scissors.png" && $("#imgComputer").attr("src") == "images/rock.png"){
					$("#lose").show();
					$("#lose").css("color", "red");
					$("#win").hide();
					$("#tie").hide();
					// alert("you lose!");
				}
				if($("#imgPlayer").attr("src") == "images/scissors.png" && $("#imgComputer").attr("src") == "images/paper.png"){
					$("#win").show();
					$("#win").css("color", "green");
					$("#lose").hide();
					$("#tie").hide();
					// alert("you win!");
				}
				if($("#imgPlayer").attr("src") == "images/scissors.png" && $("#imgComputer").attr("src") == "images/scissors.png"){
					$("#tie").show();
					$("#lose").hide();
					$("#win").hide();
					// alert("TIE");
				}
				if($("#imgPlayer").attr("src") == "images/paper.png" && $("#imgComputer").attr("src") == "images/paper.png"){
					$("#tie").show();
					$("#lose").hide();
					$("#win").hide();
					// alert("TIE");
				}
				if($("#imgPlayer").attr("src") == "images/rock.png" && $("#imgComputer").attr("src") == "images/rock.png"){
					$("#tie").show();
					$("#lose").hide();
					$("#win").hide();
					// alert("TIE");
				}
				
			}
			

		</script>
		
	</body>
</html>

