<html>

<head>

	<title>Example</title>

	<style type="text/css">


		#left,
		#right {
			height: 100%;
			min-height: 100%;
		}
		#wrapper {
			margin: 0 auto; overflow: hidden; width: 960px; // width optional }
		#left {
			background: yellow; float: left; width: 360px; // width optional but recommended }
		#right {
			background: grey;
			margin-left: 360px;
		// must agree with previous width }
	</style>
</head>


<body>
<div id="wrapper">
	<div id="left">
		Left
	</div>

	<div id="right"></div>
</div>
</body>

</html>