<?php
include 'includes/db.inc.php';
?>
<!DOCTYPE html>
  <html>
  <head>
  <title></title>
  </head>
<body>

<form action="includes/signup.inc.php" method="POST">
  <input type="number" name="track_id" placeholder="Track ID">
  <br>
  <input type="text" name="title" placeholder="Name">
<br>
  <input type="number" name="genre_id" placeholder="Genre">
<br>
  <input type="number" name="album_id" placeholder="Album">
<br>
  <input type="number" name="len" placeholder="Length">
<br>
  <input type="number" name="rating" placeholder="Rating">
<br>
  <input type="number" name="count" placeholder="Count">
<br>
  <button type="submit" name="submit">Add Track to Database!</button>
  </form>
</body>
</html>
