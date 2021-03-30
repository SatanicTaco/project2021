<!DOCTYPE html>
<html>
  <head>
    <title>main</title>
  </head>
<body>

  <h1>Welcome to the Monitored Pet Feeding System</h1>

  <h2>Set water/food level</h2>
    <form action="/action_page.php">
      <label for="waterlvl">Water level:</label><br>
      <input type="radio" id="half" name="water" value="1">
      <label for="half">Half</label><br>
      <input type="radio" id="full" name="water" value="2">
      <label for="full">Full</label><br><br>
      <label for="name">Food level: </label><br>
      <input type="text" name="foodlvl" id="foodlvl"> <br> <br>
      <input type="submit" value="Set">
    </form>

	<?php
	$val_array = array(0,0,0,0,0,0,0,0);
	//this php script generate the first page in function of the file
	for ( $i= 0; $i<8; $i++) {
		//set the pin's mode to output
		system("gpio mode ".$i." out");
	}

</body>
</html>
