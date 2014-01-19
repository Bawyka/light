<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="key, words" />
<meta name="author" content="Bawyka Taras" />
<link type="text/css" rel="stylesheet" href="public/css/style.css" media="all" />
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<script type="text/javascript" src="public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(function(){

	var l_on = true;
		
	$('#switcher').css({
		left: '50%',
		marginLeft: '-'+184/2+'px',
		top: '10%'
	});

	$('#switcher').click(function(){
	
		if (l_on==true) {
		
			$('#s').attr("src","public/img/off.png");
			
			$('#light').animate({
				
				opacity: 0.7
			
			},1000);
			
			l_on = false;
		
		} else {
		
			$('#s').attr("src","public/img/on.png");
		
			$('#light').animate({
				
				opacity: 0.1
			
			},1000);
		
			l_on = true;
		
		}
	
	});
	
});
</script>
<title> Switch </title>
<style>
* { margin: 0; padding: 0; }
html,body { width: 100%; height: 100%; background: #fff; }
#switcher { position: absolute; }
#light { width: 100%; height: 100%; background: #000; position: absolute; opacity: 0.1 }
#s { position: absolute; z-index: 99999; }
</style>
</head>
<body>
<div id="wrapper">

<div id="light"></div>

	<div id="switcher">
		<img id="s" src="public/img/on.png" style="cursor:pointer">
	</div>

</div>
</body>
</html>