<?php
include 'includes/db.inc.php';

$sql = "select * from track;";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
  <html>
    <title>Track List</title>
  <body>

    <table width="1000" border="1" cellpadding="1" cellspacing="1">
    <tr>
    <th>Track ID </th>
    <th>Name </th>
    <th>Genre </th>
    <th>Album </th>
    <th>Length </th>
    <th>Rating </th>
    <th>count </th>
    </tr>
<?php
  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
 ?>
      <tr>
        <td><?php echo $row['track_id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['genre_id']; ?></td>
        <td><?php echo $row['album_id']; ?></td>
        <td><?php echo $row['len']; ?></td>
        <td><?php echo $row['rating']; ?></td>
        <td><?php echo $row['count']; ?></td>
</tr>
<?php
    }
}
  else
{
 ?>
 <tr>
 <th colspan="7">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html>
