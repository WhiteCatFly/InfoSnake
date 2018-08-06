<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Snake</title>
	<link rel="stylesheet" type="text/css" href="semantic.min.css">
	<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
	<div class="ui menu">
		<div class="ui container">
		<div class="header item">Snake</div>
		<div class="active item">Game</div>
		<a class="item" href="upload.php">Upload</a>
		<a class="item" href="rule.php">Rule</a>
		<div class="right menu">
			<div class="item">
				<?php echo $_SESSION['username']; ?>		
			</div>
			<a href="signout.php" class="item">退出</a>
		</div>
		</div>
	</div>
	<?php 
		$username = $_SESSION['username'];
		if(is_null($username)) {
			?>
				<div class="ui middle aligned center aligned grid" style="height:100%">
					<div class="left aligned column" style="max-width: 450px;">
						<div class="ui negative message">
							<div class="header">错误</div>
							<p>记得登录呀...
							<br/>
							<a href="index.html">返回</a>
							</p>
						</div>
					</div>
				</div>
			<?php
		}
		else {
	?>
	<div class="ui container">
		<div class="ui segment">
			<div class="ui grid">
				<div class="twelve wide column">
					<canvas id="canvas" height="606" width="806"></canvas>
				</div>
				<div class="four wide column">
					<div class="ui grid">
						<div class="row">
							<form class="ui form" id="chooseform">
								<div class="ui dividing header">文件列表</div>
								<div class="field" id="fixlist">
									<div class="ui list" id="filelist">
										<div class="item">
											<div class="ui checkbox"></div>
										</div>
									</div>
								</div>
								<div class="ui button" onclick="checkChoice()">确认</div>
								<input type="hidden" value="" id="student_id">
							</form>
						</div>
						<div class="row">
							<div class="ui statistic">
								<div class="label">Time</div>
								<div class="value" id="time">0</div>
							</div>
						</div>
						<div class="row">
							<div class="ui three column stackable padded color grid" id="note"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<script type="text/javascript" src="jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="semantic.min.js"></script>
	<script type="text/javascript" src="game.js"></script>
</body>
</html>