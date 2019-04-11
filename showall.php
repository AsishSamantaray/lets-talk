<?php
    include 'db.php';
    // include 'index.php';
    $query = "SELECT * FROM talks ORDER BY id DESC";
    $results = mysqli_query($con, $query);
    while($row = mysqli_fetch_assoc($results)) {
        $time = $row['time'];
        $user = $row['user'];
        $message = $row['message'];
        echo '<li class="list-group-item"><span id="time">'.$time.'</span> - <strong>'.$user.':</strong>'.$message.'</li>';

    }
?>
    