<?php
$db = mysqli_connect('localhost', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

//alter the movie table to include running time, cost and takings fields
$query = 'ALTER TABLE movie ADD COLUMN (
    movie_running_time TINYINT UNSIGNED NULL,
    movie_cost         DECIMAL(4,1)     NULL,
    movie_takings      DECIMAL(4,1)     NULL)';
mysqli_query($db, $query) or die (mysqli_error($db));

//insert new data into the movie table for each movie
$query = 'UPDATE movie SET
        movie_running_time = 101,
        movie_cost = 81,
        movie_takings = 242.6
    WHERE
        movie_id = 1';
mysqli_query($db, $query)  or die(mysqli_error($db));

$query = 'UPDATE movie SET
        movie_running_time = 89,
        movie_cost = 10,
        movie_takings = 10.8
    WHERE
        movie_id = 2';
mysqli_query($db, $query)  or die(mysqli_error($db));

$query = 'UPDATE movie SET
        movie_running_time = 134,
        movie_cost = 30,
        movie_takings = 50.2
    WHERE
        movie_id = 3';
mysqli_query($db, $query)  or die(mysqli_error($db));


$query = 'UPDATE movie SET
        movie_running_time = 164,
        movie_cost = 45,
        movie_takings = 33.2
    WHERE
        movie_id = 4';
mysqli_query($db, $query)  or die(mysqli_error($db));

$query = 'UPDATE movie SET
        movie_running_time = 124,
        movie_cost = 50,
        movie_takings = 63.2
    WHERE
        movie_id = 5';
mysqli_query($db, $query)  or die(mysqli_error($db));



$query = 'UPDATE movie SET
        movie_running_time = 154,
        movie_cost = 60,
        movie_takings = 23.2
    WHERE
        movie_id = 6';
mysqli_query($db, $query)  or die(mysqli_error($db));


echo 'Movie database successfully updated!';
?>
