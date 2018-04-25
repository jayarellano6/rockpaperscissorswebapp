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

