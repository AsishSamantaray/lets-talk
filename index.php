<?php include 'db.php'; ?>

<?php
    $query = "SELECT * FROM talks";
    $results = mysqli_query($con, $query);
    // Check if any data available..
    /*
    if(mysqli_num_rows($results) > 0) {
        while($row = mysqli_fetch_assoc($results)) {
            echo($row['time']." - <strong>".$row['user']."</strong>: ".$row['message'] );
        } 
    }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LET'S TALK</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
 
    <title>Document</title>
</head>
<body>
    <div class="container" id="cont">
        <div class="card bg-dark text-white">
            <h2 class="card-header">LET'S TALK!</h2>
           <div class="card-body">
               <div id="talks">
                    <ul class="list-group">
                        <?php while($row = mysqli_fetch_assoc($results)) : ?>
                        <li class="list-group-item"><span id="time"><?php echo $row['time']?></span> - <strong><?php echo $row['user']?>:</strong> <?php echo $row['message']?></li>
                        <?php endwhile ?>                    
                    </ul>
               </div>
           

            <form action="process.php"  method="POST">
                <div class="form-inline" id="f">
                    <input type="text" placeholder="Enter your name.." class="form-control mb-2  mr-sm-2" id="f1">
                    <input type="text" placeholder="Enter a message.. "class="form-control mb-2 mr-sm-2" id="f2">
                    <br>    
                </div>                
                <input type="submit" value="Send.." class="btn btn-success" name="submit" id="bt">
            </form>
           </div>
        </div>
        
    </div>
</body>
</html>