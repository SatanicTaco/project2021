<!DOCTYPE html>
<html>
  <head>
    <title>main</title>
  </head>
<body>

  <h1>Welcome to the Monitored Pet Feeding System</h1>

  <h2>Set water/food level</h2>
    <form action="/action_page.php">
      <label for="lname">Water level:</label><br>
      <input type="radio" id="half" name="water" value="half">
      <label for="half">Half</label><br>
      <input type="radio" id="full" name="water" value="full">
      <label for="full">Full</label><br><br>
      <label for="lname">Food level:</label><br>
      <input type="text" id="lname" name="lname"><br><br>
      <input type="submit" value="Set">
    </form>

</body>
</html>
