<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    /*
    * Get total questions
    */
        
    $query = "SELECT * FROM `questions`";
        
    //Get Result 
    $result = $conn->query($query) or die($conn->error.__LINE__);
    $total = $result->num_rows;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>QUizzer</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <header>
            <div class="container">
                <h1>PHP Quizzer</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>You're Done!</h2>
                <p>Congrats! You have completed the test.</p>
                <p>Final Score: <?php echo $_SESSION['score']; ?> out of <?php echo $total; ?></p>
                <a href="question.php?n=1" class="start">Take Again</a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2018, PHP Quizzer
            </div>
        </footer>
    </body>
</html>
<?php session_destroy(); ?>