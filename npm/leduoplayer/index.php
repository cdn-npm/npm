<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="renderer" content="webkit"/>
	<meta name="referrer" content="never">
	<meta http-equiv="Access-Control-Allow-Origin" content="*" />
	<meta http-equiv="X-UA-Compatible" content="IE=11"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <title>dplayer - 4.0.1</title>
    <link rel="stylesheet" href="/leduoplayer/css/leduoplayer.css?24">
	<script src="https://cdn.ldy.jx.cn/npm/leduoplayer/js/jquery.min.js?1"></script>
	<script>
	if (top === self) {  
		location.href = "/404.html"; 
	}
	</script>
	<script>
		function IsPC(){ var userAgentInfo = navigator.userAgent; var Agents = ["Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod"]; var flag = true; for (var v = 0; v < Agents.length; v++) { if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; } } return flag;};
	</script>
	<script src="https://cdn.ldy.jx.cn/npm/leduoplayer/js/des.js"></script> 
	<script src="https://cdn.ldy.jx.cn/npm/leduoplayer/js/layer.js?2322233311"></script>
    <script src="https://cdn.ldy.jx.cn/npm/leduoplayer/js/leduoplayer.js?a23331223463312111"></script>
    <script src="https://cdn.ldy.jx.cn/npm/leduoplayer/js/setting.js?a1002111"></script>     
	
    <?php
	include("../wp-api/ifr-th.php");
	$gvid = $_GET['type'] ? urldecode($_GET['url']) : $_GET['url'];
	$next=$_GET['next'] ? $_GET['next'] : '';
	$gvid=check($gvid);
    if (strpos($gvid, 'm3u8')) {
        echo '<script src="https://cdn.ldy.jx.cn/npm/leduoplayer/js/hls.min.js"></script>'; 
    } elseif (strpos($gvid, 'flv')) {
        echo '<script src="https://cdn.ldy.jx.cn/npm/leduoplayer/js/flv.min.js"></script>'; 
    }
	$imgArr = array(
		'https://img13.360buyimg.com/ddimg/jfs/t1/181563/24/15139/8192/60f793a7E47dc8798/296ba7fa90316256.jpg',
		'https://img13.360buyimg.com/ddimg/jfs/t1/185643/6/14890/7324/60f793a7E4a08cccb/1af10828792dfd1c.jpg',
		'https://img11.360buyimg.com/ddimg/jfs/t1/40505/31/16697/10887/60f793a7E4e15f8fd/aaa5b5c071fd79c5.jpg',
		'https://img12.360buyimg.com/ddimg/jfs/t1/189898/28/14113/7188/60f793a7Ea18b64b4/951f1a05f3972c96.jpg',
		'https://img12.360buyimg.com/ddimg/jfs/t1/174035/1/20585/10041/60f793a7Ea2ef41eb/20ce0fd31c07bb93.jpg',
		'https://img13.360buyimg.com/ddimg/jfs/t1/187173/36/14607/15032/60fb61fbE0e672651/8a32fb0eaf786678.jpg',
		'https://img12.360buyimg.com/ddimg/jfs/t1/177049/37/15555/17794/60fb62ebE6661780b/d5f9a88c0a814e51.jpg',
	);
	$img = $imgArr[array_rand($imgArr, 1)];
    ?>
</head>
 <style>
	 #loading-box .video-panel-blur-image{
		width: 110%;
		height: 110%;
		background-image: url('<?php echo $img;?>');
		background-color: #000;
		background-size: cover;
		background-position: 50%;
		display: block;
		position: absolute;
		left: -5%;
		top: -5%;
		-webkit-filter: blur(35px);
		-moz-filter: blur(35px);
		-ms-filter: blur(35px);
		filter: blur(35px);
	}
	.leduoplayer-full-icon span svg,
	.leduoplayer-fulloff-icon span svg {
		display: none;
	}

	.leduoplayer-full-icon span,
	.leduoplayer-fulloff-icon span {
		background-size: contain !important;
		float: left;
		width: 22px;
		height: 22px;
	}

	.leduoplayer-full-icon span {
		background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAAFVBMVEVHcEz///////////////////////+3ygHaAAAAB3RSTlMA5rQXY96EAg8J5AAAAGpJREFUOMtjYBi0gEVVUFAQwgQyghxg4syKgsgSgkIGUAkmQVQJQQWohCO6hAhUQlFQGdlGI0EhKCtQ0ABZgllQlAGmHdWRcP6ASowC4sHgjEGcCU5RFEcSRUvUovBEjTMb4Mw4OLPa4AMAHcsNt71WZ5kAAAAASUVORK5CYII=") center no-repeat;
	}

	.leduoplayer-fulloff-icon span {
		background: url("data:image/png;base64,UklGRngBAABXRUJQVlA4TGwBAAAvL8ALEJVActxGktT//3QAU7bT3aeZW07Csy+IgBsAgCHpjAps277rwkYXNiP73g5t+z+zzamDgdtITjKz9HJ3wPCH/TwStmVX8pAXBMDMZGZmaC+Oik/n9DXmgRkDyD7H2My4qHEJBHc5RucJv+AlMhPdItWo1pNjJLlDKjNQe+HXaJI1zLFBZqFvkN2zjTWOi1rb+CT5zniamVgwN8i+x+8ZOwlzjUK7hG09IpMRjTilJb1UM6V8IWfgvE+pPgK7EM8j8C1Ut4fTx518/suj74WQZBz/ZV4Umiif77LoK+CkHH3e+x7y17D238NSQhUsM4/AJ1Kx11sf0kuUtidILiM8ASc08TtdClx/0ne8zgEz0Lujb71WzmRDdUoXuLC/zrHT9bc2cGGarJGTxmOD/lelmZrfyuHkUyOS0rOZ8yZCo5RrnMb0bP5Hkj3VmAnp2f1PJduqQbfgXgV2r/F4zqHal//cW8bbzyRt") center no-repeat;
	}

	#loading-box {background: #000!important;}

	#vod-title {
		overflow: unset;
		width: 285px;
		white-space: normal;
		color: #fb7299;
	}

	#vod-title e {
		padding: 2px;
	}

	.layui-layer-dialog {
		text-align: center;
		font-size: 16px;
		padding-bottom: 10px;
	}

	.layui-layer-btn.layui-layer-btn- {
		padding: 15px 5px !important;
		text-align: center;
	}

	.layui-layer-btn a {
		font-size: 12px;
		padding: 0 11px !important;
	}

	.layui-layer-btn a:hover {
		border-color: #3097fd !important;
		background-color: #3097fd !important;
		color: #fff !important;
	}

	.leduoplayer-controller .leduoplayer-icons .leduoplayer-toggle input+label.checked:after {
		left: 17px;
	}

	.leduoplayer-setting-jlast:hover #jumptime,
	.leduoplayer-setting-jfrist:hover #fristtime {
		display: block;
		outline-style: none
	}

	#player_pause .tip {
		color: #f4f4f4;
		position: absolute;
		font-size: 14px;
		background-color: hsla(0, 0%, 0%, 0.42);
		padding: 2px 4px;
		margin: 4px;
		border-radius: 3px;
		right: 0;
	}

	#player_pause {
		position: absolute;
		z-index: 9999;
		top: 50%;
		left: 50%;
		border-radius: 5px;
		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		max-width: 80%;
		max-height: 80%;
	}

	#player_pause img {
		width: 100%;
		height: 100%;
	}

	#jumptime::-webkit-input-placeholder,
	#fristtime::-webkit-input-placeholder {
		color: #ddd;
		opacity: .5;
		border: 0;
	}

	#jumptime::-moz-placeholder {
		color: #ddd;
	}

	#jumptime:-ms-input-placeholder {
		color: #ddd;
	}

	#jumptime,
	#fristtime {
		width: 50px;
		border: 0;
		background-color: #414141;
		font-size: 12px;
		padding: 3px 3px 3px 3px;
		margin: 2px;
		border-radius: 12px;
		color: #fff;
		position: absolute;
		left: 5px;
		top: 3px;
		display: none;
		text-align: center;
	}

	#link {
		display: inline-block;
		width: 100px;
		height: 35px;
		line-height: 35px;
		text-align: center;
		font-size: 14px;
		border-radius: 22px;
		margin: 0px 10px;
		color: #fff;
		overflow: hidden;
		box-shadow: 0px 2px 3px rgba(0, 0, 0, .3);
		background: #3097fd;
		position: absolute;
		z-index: 9999;
		top: 20px;
		right: 35px;
	}

	#close c {
		float: left;
		display: none;
	}

	.dmlink,
	.playlink,
	.palycon {
		float: left;
		width: 400px;
	}

	#link3-error {
		display: none;
	}
	#stats{position:fixed;top:5px;left:10px;font-size:12px;color:#fdfdfd;z-index:2147483647;text-shadow:1px 1px 1px #000, 1px 1px 1px #000;opacity: 0.3;} 
</style>
<body>
    <div id="player"></div>
    <div id="ADplayer"></div>
    <div id="ADtip"></div>
	<div id="stats"></div>
    <script>
        var up = {
            "usernum": "<?php include("tj.php"); ?>", //在线人数
            "mylink": "/wp-api/ifr.php?vid=", //播放器路径，用于下一集   
            "diyid": [0, '游客', 1] //自定义弹幕id
        }
        var config = {
            "api": '/dmku/index.php', //弹幕接口
            "av": '<?php echo ($_GET['av']); ?>', //B站弹幕id 45520296
            "url": "<?php echo ($gvid); ?>", //视频链接
            "id": "<?php if(strstr($gvid,"?")){ echo (base64_encode($gvid));}else{echo ($gvid);}?>", //视频id
            "sid": "<?php echo ($_GET['sid']); ?>", //集数id
            "pic": "<?php echo ($_GET['pic']); ?>", //视频封面
            "title": "<?php echo ($_GET['name']); ?>", //视频标题
            "next": "<?php echo $next ?>", //下一集链接
            "user": '<?php echo ($_GET['user']); ?>', //用户名
            "group": "<?php echo ($_GET['group']); ?>" //用户组
        }
        leduo.start()  
    </script>
	<div style="display:none">
		<script src="https://s13.cnzz.com/z_stat.php?id=1280209047&web_id=1280209047" language="JavaScript"></script>
	</div>
</body>
</html>