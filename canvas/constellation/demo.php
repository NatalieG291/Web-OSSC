<html>
	<head>
		<style type="text/css">
			body {
				margin:0;
				padding:0;
			}
			#particle-canvas {
				width:100%;
				height:100%;
			}
		</style>
	</head>
	<body>
		<div id="particle-canvas"></div>
		<script type="text/javascript" src="particle.js"></script>
		<script type="text/javascript">
			var canvasDiv = document.getElementById('particle-canvas');
			var options = {
				particleColor: '#18bcf2',
				interactive: false,
				speed: 'medium',
				density: 'high'
			};
			var particleCanvas = new ParticleNetwork(canvasDiv, options);
		</script>
	</body>
</html>