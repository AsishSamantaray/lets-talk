<!-- <?php include 'db.php'; ?> -->


<!-- <?php
    $query = "SELECT * FROM talks ORDER BY id DESC";
    $results = mysqli_query($con, $query);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>LET'S TALK</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
        var auto_refresh = setInterval(
            function ()
            {
            $('#talks').load('showall.php').fadeIn("slow");
            }, 2000); // refresh every 10000 milliseconds
    </script>
 
    <title>Document</title>
</head>
<body>
    <div class="container" id="cont">
        <div class="card bg-dark text-white">
            <h2 class="card-header">LET'S TALK!</h2>
           <div class="card-body">
               <div id="talks">
                    <ul class="list-group">
                    <?php include 'showall.php'; ?>
                    </ul>
               </div>
           

            <form action="process.php"  method="POST">
                <?php if(isset($_GET['error'])) : ?>
                    <div class="error">
                        <?php echo $_GET['error']?>
                    </div>
                <?php endif; ?>
                
                <div class="form-inline" id="f">
                    <input type="text" name="user" placeholder="Enter your name.." class="form-control mb-2  mr-sm-2" id="f1">
                    <input type="text" name="message" placeholder="Enter a message.. "class="form-control mb-2 mr-sm-2" id="f2">
                    <br>    
                </div>                
                <input type="submit" value="Send.." class="btn btn-success" name="submit" id="bt">
            </form>
           </div>
        </div>
        
    </div>
</body>
</html>