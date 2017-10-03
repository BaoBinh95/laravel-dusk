<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo Javascript</title>
</head>
<body>
    <div>
        <p id="id_cua_toi">Hello world</p>
        <ul>
		  	<li>Coffee</li>
		  	<li>Tea</li>
		</ul>
		<ul>
		  	<li>Milk</li>
		  	<li>Orange</li>
		</ul>
    </div>
    <script type="text/javascript">
	    var element = document.getElementById('id_cua_toi');
	    var elementbytag = document.getElementsByTagName('ul').item('li');
	    console.log(elementbytag.getElementsByTagName('li')[0]);
    </script>
</body>
</html>