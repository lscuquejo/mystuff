<html>

	<head>
	
		<title>Hello world</title>
		
		<meta charset="utf-8" />
      	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-sacele=1" />

	</head>

	<body>
		<center>
	
		<p><h1><em>Hello <?php
		if (!$_GET['vname'])
			{ echo "Guest"; } 
		    else
 		   { echo $_GET['vname']; }
	   
	   ?>! <br> This is my very first webpage</em></h1></p>
		
		<br>
		
		<form name='merda'>
		  Please enter your name:<input type="text" name="vname">
		  <input type="submit">
		</form>
		
		<p><h3><u>A few facts about the world we live in </h3></u></p>
		
		<p>Earth is the third planet fromthe Sun and the 
		only object in the Universe 
		known to harbor life. According to 
		radiometric dating and other sources of evidence, 
		Earth formed over 4 billion years</p> 

		<iframe width="560" height="315" src="https://www.youtube.com/embed/CFrP6QfbC2g" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</center>
		<br><br>
		
		<hr>
		
		<ul>
		
		<p><h2>About the Earth<p></h1>
		
			<li>Volume 1.08321×1012 km3</li>
			
			<li>Surface area 510072000 km2</li>
			
			<li>Mass 5.97237×1024 kg</li>
			
			<li>Escape velocity 11.186 km/s</li>
			
		</ul>
		
		<hr>
		
		<ol>
			
		<p><h2>Top 3 Earth facts</h2></p>
			
			<li>The Earth's rotations is gradually slowing.</li>
			
			<li>A year isn't exactly 365 days, and the Earth doesn't take 24 hours to rotate.</li>
			
			<li>70% of the earth's surface is water, and only one third of its fresh water is unfrozen.</li>
			
		</ol>
		
		<hr>
		
		<center>
		
		<table>
		
		<thead>
		
		<tr>
		
			<th>Name</th>
			
			<th>Radius</th>
			
			<th>Average</th>
			
			<th>temperature</th>
			
		</tr>
		
		</thead>
		
		<tbody>
		
		<tr>
		
			<td>Mars</td>
			<td>3,390km</td>
			<td>-55 ºC</td>

		
		</tr>
		
		<tr>
		
			<td>Venus</td>
			<td>6,052km</td>
			<td>460 ºC</td>
	
		
		</tr>
		
		</tbody>
		
		</table>
		
		<hr>
		
		<p>wanna know more about me?</p>
		
		<p><a href="https://www.facebook.com/leonardo.soarescuquejo" target="_NEW"><input type="submit" value="Click to know me!"></p>
	
		<p><font color="blue">All what I found was in this website<br>Just click down here</p>
		
		<p><a href="https://en.wikipedia.org/wiki/Earth"> <img src="wiki.jpg"></p>
	
	
	</center>
	
	</body>

</html>