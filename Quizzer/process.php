<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
    //Check to see if score is set_error_handler
    if(!isset($_SESSION['score'])) {
        $_SESSION['score'] = 0;
    }

    if($_POST){
        $question_no = $_POST['number'];
        $selected_choice = $_POST['choice'];
        $next_question = $question_no + 1;
        
        /*
        * Get total questions
        */
        
        $query = "SELECT * FROM `questions`";
        
        //Get Result 
        $result = $conn->query($query) or die($conn->error.__LINE__);
        $total = $result->num_rows;
        
        /*
        * Get Correct Choice
        */
        
        $query = "SELECT * FROM `choices` WHERE question_number = $question_no AND is_correct = 1";
        
        //Get Result
        $result = $conn->query($query) or die($conn->error.__LINE__);
        
        //Get Row 
        $row = $result->fetch_assoc();
        
        //Set Correct Choice
        $correct_choice = $row['id'];
        
        //Compare
        if($correct_choice == $selected_choice) {
            //Answer is correct
            $_SESSION['score']++;
        }
        
        //Check if last question
        if($question_no == $total) {
            header("Location: final.php");
            exit();
        } else {
            header("Location: question.php?n=".$next_question);
        }
        
    }

?>