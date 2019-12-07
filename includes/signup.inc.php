<?php

include 'includes/db.inc.php';

$track_id = $_POST['track_id'];
$title = $_POST['title'];
$genre_id = $_POST['genre_id'];
$album_id = $_POST['album_id'];
$len = $_POST['len'];
$rating = $_POST['rating'];
$count = $_POST['count'];

    $sql = "insert into track (track_id, title, genre_id, album_id, len, rating, count) values('$track_id', '$title', '$genre_id', '$album_id', '$len', '$rating', '$count');";
    mysqli_query($conn, $sql);

    header("Location: ../signup.php?signup=success");
