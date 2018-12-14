<?php include 'database.php'; ?>
<?php 
    //Create select query
    $query = "SELECT * FROM shouts";
    $shouts = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>SHOUT IT!</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="container">
            <header>
                <h1>SHOUT IT! Shoutbox</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="shout"><span><?php echo $row['time']; ?> - </span><strong><?php echo $row['user']; ?></strong>: <?php echo $row['message']; ?> </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div id="input">
                <?php if(isset($_GET['error'])) : ?>
                    <div class="error"><?php echo $_GET['error'];  ?></div>
                <?php endif; ?>
                <form method="post" action="process.php">
                    <input type="text" name="user" placeholder="Enter Your Name"/>
                    <input type="text" name="message" placeholder="Enter A Message"/>
                    <br/>
                    <input type="submit" class="shout-btn" name="submit" value="Shout It Out"/>
                </form>
            </div>
        </div>
    </body>
</html> 