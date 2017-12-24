<?php
session_start();

if(isset($_POST['username'])){
	$_SESSION['username']=$_POST['username'];
}

if(isset($_GET['logout'])){
	unset($_SESSION['username']);
	header('Location:chatindex.php');
}

?>
<html>
<head>
	<title>Producer's Chat Room</title> <button><a href="/viewrenderer_final/user/main"> Back to mainpage</a></button>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/chatstyle.css" />
	<script type="text/javascript" src="../../../chat/js/jquery-1.10.2.min.js" ></script>
</head>
<body>
<div class='header'>
	<h1>
		PRODUCER'S CHAT ROOM
		<?php   ?>
		<?php if(isset($_SESSION['username'])) { ?>
			<a class='logout' href="?logout">Logout</a>
		<?php } ?>
	</h1>

</div>

<div class='main'>
<?php //Check if the user is logged in or not ?>
<?php if(isset($_SESSION['username'])) { ?>
<div id='result'></div>
<div class='chatcontrols'>
	<form method="post" onsubmit="return submitchat();">
	<input type='text' name='chat' id='chatbox' autocomplete="off" placeholder="ENTER CHAT HERE" />
	<input type='submit' name='send' id='send' class='btn btn-send' value='Send' />
	<input type='button' name='clear' class='btn btn-clear' id='clear' value='X' title="Clear Chat" />
</form>
<script>
function submitchat(){
		if($('#chat').val()=='' || $('#chatbox').val()==' ') return false;
		$.ajax({
			url:'http://localhost/chat/chat',
			data:{chat:$('#chatbox').val(),ajaxsend:true},
			method:'post',
			success:function(data){
				$('#result').html(data);
				$('#chatbox').val('');
				document.getElementById('result').scrollTop=document.getElementById('result').scrollHeight; // Bring the scrollbar to bottom of the chat resultbox in case of long chatbox
			}
		})
		return false;
};

setInterval(function(){
	$.ajax({
			url:'http://localhost/chat/chat',
			data:{ajaxget:true},
			method:'post',
			success:function(data){
				$('#result').html(data);
			}
	})
},1000);

// Function to chat history
$(document).ready(function(){
	$('#clear').click(function(){
		if(!confirm('Are you sure you want to clear chat?'))
			return false;
		$.ajax({
			url:'http://localhost/chat/chat',
			data:{username:"<?php echo $_SESSION['username'] ?>",ajaxclear:true},
			method:'post',
			success:function(data){
				$('#result').html(data);
			}
		})
	})
})
</script>
<?php } else { ?>
<div class='userscreen'>
	<form method="post">
		<input type='text' class='input-user' placeholder="ENTER YOUR NAME HERE" name='username' />
		<input type='submit' class='btn btn-user' value='START CHAT' />
	</form>
</div>
<?php } ?>

</div>
</body>
</html>