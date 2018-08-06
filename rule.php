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
			<a class="item" href="game.php">Game</a>
			<a class="item" href="upload.php">Upload</a>
			<div class="active item">Rule</div>
		</div>
	</div>
	<div class="ui container">
		<div class="ui segment">
			<div class="ui dividing header">游戏规则</div>
			<div class="ui bulleted list">
				<div class="item">控制一条蛇与其他AI蛇进行对战</div>
				<div class="item">画面中橙色的蛇是你的，红色的蛇是AI，蛇头用绿色框框标出...圆形的东西是食物</div>
				<div class="item">蛇不允许原地回头，只可向左右转向</div>
				<div class="item">当蛇头碰到食物即可吃下食物并得1分，每得10分蛇长度加1</div>
				<div class="item">蛇头允许碰到自己的蛇身，但碰到其他蛇的蛇身，立刻死亡</div>
				<div class="item">当两蛇头相碰，同时死亡</div>
				<div class="item">当蛇头撞墙，立刻死亡，墙没有坐标，走至地图外即撞墙</div>
				<div class="item">当你的蛇已死亡，游戏结束，此时得分最高的蛇获胜</div>
			</div>
			<div class="ui dividing header">数据规则</div>
			<div class="ui bulleted list">
				<div class="item">上传文件进行对战，文件命名格式为"学号.c"，必须使用C文件进行上传且使用学号作为文件名</div>
				<div class="item">地图以左上角为(0,0)坐标点，其右侧坐标为(0,1)，下侧坐标为(1,0)，以此类推</div>
				<div class="item"><img class="ui small rounded image" src="pic2.png" alt=""></div>
				<div class="item">C程序接受输入为长1200的数组，代表地图的情况，数组前40个为第一行情况，依此类推</div>
				<div class="item">C程序输出为一个整型数字，代表当前决定的方向，0为左，1为上，2为右，3为下</div>
				<div class="item">
					<div class="item">数组中数字的含义</div>
					<div class="list">
						<div class="item">0: 空</div>
						<div class="item">-x: 价值为x的事物</div>
						<div class="item" style="color:red">学号第四位+学号后三位: 你的蛇头，例如2012202634对应蛇头为2634</div>
						<div class="item">学号: 你的蛇身</div>
					</div>
				</div>
			</div>
			<div class="ui dividing header">注意</div>
			<div class="ui bulleted list">
				<div class="item">平台仍有不少错误及细节问题需要调试，请耐心等待...</div>
				<div class="item">请保证你的程序在100ms以内可以返回结果，否则会超时</div>
				<div class="item">请保证你的程序给出正确的返回值（0-3），其他返回值会报错</div>
				<div class="item">使用浏览器控制台可以看到每个时刻的地图，通过查看网络请求可以看到服务器端的返回值</div>
				<div class="item">如果新的AI编译错误会继续使用旧的...</div>
			</div>
			<div class="ui dividing header">示例代码</div>
			<div class="ui fluid rounded image"><img src="pic1.png" alt=""></div>
		</div>
	</div>
	<script type="text/javascript" src="jquery-3.2.0.min.js"></script>
	<script type="text/javascript" src="game.js" ></script>
</body>
</html>