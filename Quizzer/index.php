<?php include 'database.php'; ?>
<?php
/*
* Get Number of Total Questions
*/
    $query = "SELECT * FROM questions";
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
                <h2>Test your PHP knowledge</h2>
                <p>This is a multiple choice quiz to test your knowledge of PHP</p>
                <ul>
                    <li><strong>Number of questions: </strong><?php echo $total; ?></li>
                    <li><strong>Type: </strong>Multiple Choice</li>
                    <li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
                </ul>
                <a href="question.php?n=1" class="start">Start Quiz</a>
            </div>
        </main>
        <footer>
            <div class="container">
                Copyright &copy; 2018, PHP Quizzer
            </div>
        </footer>
    </body>
</html>