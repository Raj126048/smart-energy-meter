<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport" content=
"width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="wave.css">
	<title>Animation of Sine Wave</title>
	<script src=
"https://cdn.jsdelivr.net/npm/p5@1.2.0/lib/p5.js">
	</script>
	
</head>

<body>
<div class="navbar">
        <nav>
            <ul>
                <li><a href="website.php">Home</a></li>
                <li><a href="status.html">Status</a></li>
                <li><a href="">Contacts</a></li>
                <li><a href="">Wave</a></li>
                <li><a href="index.html">Logout</a></li>
            </ul>
        </nav>
        </div>

    <div class="container">
        <div class="box"></div>
            <script>
                let xspacing = 10;	
                let w;			
		let theta = 0.0;	
		let amplitude = 75.0;
		let period = 500.0;
		let dx;			
		let yvalues;

		function setup() {
			canvas=createCanvas(1000, 550);
            canvas.position(200,50);
			w = width + 16;
			dx = (TWO_PI / period) * xspacing;
			yvalues = new Array(floor(w / xspacing));
		}

		function draw() {
			background(255,255,255);
			calcWave();
			renderWave();
		}

		function calcWave() {
			theta += 0.02;

			let x = theta;
			for (let i = 0; i < yvalues.length; i++) {
				yvalues[i] = sin(x) * amplitude;
				x += dx;
			}
		}

		function renderWave() {
			noStroke();
			fill(255, 50, 50);
			for (let x = 0; x < yvalues.length; x++) {
				ellipse(x * xspacing, height
						/ 2 + yvalues[x], 16, 16);
			}
		}
		
		
	        </script>
        
    </div>
</body>
</html>
