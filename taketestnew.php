
<?php
include("connection.php");
include("functions.php");
include("controller.php");

// Initialize the session
session_start();

//$logged_in_user = check_login($con);
// Check if user is logged in - NOTE- UNCOMMENT THIS LATER
if(!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();

}



// <!-- Create a connection to the MySQL database -->
$conn = mysqli_connect("localhost", "root", "", "cognitare");

// <!-- Define the number of questions to retrieve -->
// $num_questions = 24;
$categories = array("realistic", "investigative", "artistic", "social", "enterprising", "conventional");
$num_questions_per_category = 4;
$selected_questions = array();
foreach ($categories as $category) {
    $sql = "SELECT * FROM `q_" . $category . "` ORDER BY RAND() LIMIT " . $num_questions_per_category;
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $selected_questions[] = $row;
    }
}
// Shuffle the selected questions
shuffle($selected_questions);

// Display the selected questions
foreach ($selected_questions as $question) {
    echo $question['question'] . "<br>";
}

// $questions = array(
//     1 => 'q_realistic',
//     2 => 'q_investigative',
//     3 => 'q_artistic',
//     4 => 'q_social',
//     5 => 'q_enterprising',
//     6 => 'q_conventional',
//     7 => 'q_realistic',
//     8 => 'q_investigative',
//     9 => 'q_artistic',
//     10 => 'q_social',
//     11 => 'q_enterprising',
//     12 => 'q_conventional',
//     13 => 'q_realistic',
//     14 => 'q_investigative',
//     15 => 'q_artistic',
//     16 => 'q_social',
//     17 => 'q_enterprising',
//     18 => 'q_conventional',
//     19 => 'q_realistic',
//     20 => 'q_investigative',
//     21 => 'q_artistic',
//     22 => 'q_social',
//     23 => 'q_enterprising',
//     24 => 'q_conventional'
// );


// // Initialize an array to hold the selected questions
// $selected_questions = array();


// // Query the database to get a random question from the q_realistic table
// $r_question_query = mysqli_query($con, "SELECT * FROM q_realistic ORDER BY RAND() LIMIT 1");
// $r_question = mysqli_fetch_assoc($r_question_query);


// // Query the database to get a random question from the q_investigative table
// $i_question_query = mysqli_query($con, "SELECT * FROM q_investigative ORDER BY RAND() LIMIT 1");
// $i_question = mysqli_fetch_assoc($i_question_query);


// // Query the database to get a random question from the q_artistic table
// $a_question_query = mysqli_query($con, "SELECT * FROM q_artistic ORDER BY RAND() LIMIT 1");
// $a_question = mysqli_fetch_assoc($a_question_query);


// // Query the database to get a random question from the q_social table
// $s_question_query = mysqli_query($con, "SELECT * FROM q_social ORDER BY RAND() LIMIT 1");
// $s_question = mysqli_fetch_assoc($s_question_query);


// // Query the database to get a random question from the q_enterprising table
// $e_question_query = mysqli_query($con, "SELECT * FROM q_enterprising ORDER BY RAND() LIMIT 1");
// $e_question = mysqli_fetch_assoc($e_question_query);


// // Query the database to get a random question from the q_conventional table
// $c_question_query = mysqli_query($con, "SELECT * FROM q_conventional ORDER BY RAND() LIMIT 1");
// $c_question = mysqli_fetch_assoc($c_question_query);

// ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/holland.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="riasec-test.js"></script> -->
</head>

<body>
    <h4>TO TAKE THE HOLLAND CODE CAREER QUIZ, MARK YOUR INTEREST IN EACH ACTIVITY SHOWN. DO NOT WORRY ABOUT WHETHER YOU HAVE THE SKILLS OR TRAINING TO DO AN ACTIVITY, OR HOW MUCH MONEY YOU MIGHT MAKE. SIMPLY THINK ABOUT WHETHER YOU WOULD ENJOY DOING IT OR NOT.</h4>
   
      <div class="container">
        <div class="overlay"></div> <!-- This is the overlay div for the background color -->
        <div class="content">
            <form id="riasec-test">
                <p>1.) <?php echo $r_question['question']; ?>p>
                <label>
                    <input type="radio" name="q1" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q1" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q1" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q1" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q1" value="1">
                    Strongly Dislike
                </label>
        
                <p>2.)<?php echo $i_question['question']; ?></p>
                <label>
                    <input type="radio" name="q2" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q2" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q2" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q2" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q2" value="1">
                    Strongly Dislike
                </label>
        
                <p>3.) <?php echo $a_question['question']; ?></p>
                <label>
                    <input type="radio" name="q3" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q3" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q3" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q3" value="2">
                    Dislike
                </label>
                2 <label>
                    <input type="radio" name="q3" value="1">
                    Strongly Dislike
                </label>
                <p>4.)<?php echo $s_question['question']; ?></p>
                <label>
                    <input type="radio" name="q4" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q4" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q4" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q4" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q4" value="1">
                    Strongly Dislike
                </label>
                <p>5.)<?php echo $e_question['question']; ?></p>
                <label>
                    <input type="radio" name="q5" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q5" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q5" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q5" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q5" value="1">
                    Strongly Dislike
                </label>
                <p>6.)<?php echo $c_question['question']; ?></p>
                <label>
                    <input type="radio" name="q6" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q6" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q6" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q6" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q6" value="1">
                    Strongly Dislike
                </label>
                <p>7.)<?php echo $r_question['question']; ?>
                </p>
                <label>
                    <input type="radio" name="q7" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q7" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q7" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q7" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q7" value="1">
                    Strongly Dislike
                </label>
                <p>8.) <?php echo $i_question['question']; ?>
                </p>
                <label>
                    <input type="radio" name="q8" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q8" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q8" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q8" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q8" value="1">
                    Strongly Dislike
                </label>
                <p>9.) <?php echo $a_question['question']; ?>
                </p>
                <label>
                    <input type="radio" name="q9" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q9" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q9" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q9" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q9" value="1">
                    Strongly Dislike
                </label>
                <p>10.)<?php echo $s_question['question']; ?>
                </p>
                <label>
                    <input type="radio" name="q10" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q10" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q10" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q10" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q10" value="1">
                    Strongly Dislike
                </label>
                <p>11.) <?php echo $e_question['question']; ?>
                </p>
                <label>
                    <input type="radio" name="q11" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q11" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q11" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q11" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q11" value="1">
                    Strongly Dislike
                </label>
                <p>12.) <?php echo $c_question['question']; ?>
                </p>
                <label>
                    <input type="radio" name="q12" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q12" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q12" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q12" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q12" value="1">
                    Strongly Dislike
                </label>
                <p>13.) <?php echo $r_question['question']; ?>
                </p>
                <label>
                    <input type="radio" name="q13" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q13" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q13" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q13" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q13" value="1">
                    Strongly Dislike
                </label>
                <p>14.)<?php echo $i_question['question']; ?></p>
                <label>
                    <input type="radio" name="q14" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q14" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q14" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q14" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q14" value="1">
                    Strongly Dislike
                </label>
                <p>15.)<?php echo $a_question['question']; ?></p>
                <label>
                    <input type="radio" name="q15" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q15" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q15" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q15" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q15" value="1">
                    Strongly Dislike
                </label>
                <p>16.)<?php echo $s_question['question']; ?></p>
                <label>
                    <input type="radio" name="q16" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q16" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q16" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q16" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q16" value="1">
                    Strongly Dislike
                </label>
                <p>17.)<?php echo $e_question['question']; ?></p>
                <label>
                    <input type="radio" name="q17" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q17" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q17" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q17" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q17" value="1">
                    Strongly Dislike
                </label>
                <p>18.)<?php echo $c_question['question']; ?></p>
                <label>
                    <input type="radio" name="q18" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q18" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q18" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q18" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q18" value="1">
                    Strongly Dislike
                </label>
                <p>19.)<?php echo $r_question['question']; ?></p>
                <label>
                    <input type="radio" name="q19" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q19" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q19" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q19" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q19" value="1">
                    Strongly Dislike
                </label>
                <p>20.)<?php echo $i_question['question']; ?> </p>
                <label>
                    <input type="radio" name="q20" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q20" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q20" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q20" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q20" value="1">
                    Strongly Dislike
                </label>
                <p>21.)<?php echo $a_question['question']; ?></p>
                <label>
                    <input type="radio" name="q21" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q21" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q21" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q21" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q21" value="1">
                    Strongly Dislike
                </label>
                <p>22.)<?php echo $s_question['question']; ?></p>
                <label>
                    <input type="radio" name="q22" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q22" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q22" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q22" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q22" value="1">
                    Strongly Dislike
                </label>
                <p>23.)<?php echo $e_question['question']; ?></p>
                <label>
                    <input type="radio" name="q23" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q23" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q23" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q23" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q23" value="1">
                    Strongly Dislike
                </label>
                <p>24.)<?php echo $c_question['question']; ?></p>
                <label>
                    <input type="radio" name="q24" value="5">
                    Strongly Like
                </label>
                <label>
                    <input type="radio" name="q24" value="4">
                    Like
                </label>
                <label>
                    <input type="radio" name="q24" value="3">
                    Neutral
                </label>
                <label>
                    <input type="radio" name="q24" value="2">
                    Dislike
                </label>
                <label>
                    <input type="radio" name="q24" value="1">
                    Strongly Dislike
                </label>
                <button id="submit-btn" type="submit">Submit</button>
              </form>
          <!-- Your content goes here -->
        </div>
      </div>
      
      

   
    <div><canvas id="myCanvas" width="0" height="0"></canvas></div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        
    // Get the form element by its ID
    const form = document.getElementById('riasec-test');
    
    // Listen for the form to be submitted
    form.addEventListener('submit', (event) => {
        // Prevent the form from actually submitting
        event.preventDefault();
    
        // Get the values of each answer
        const q1 = parseInt(form.elements.q1.value);
        const q2 = parseInt(form.elements.q2.value);
        const q3 = parseInt(form.elements.q3.value);
        const q4 = parseInt(form.elements.q4.value);
        const q5 = parseInt(form.elements.q5.value);
        const q6 = parseInt(form.elements.q6.value);
        const q7 = parseInt(form.elements.q7.value);
        const q8 = parseInt(form.elements.q8.value);
        const q9 = parseInt(form.elements.q9.value);
        const q10 = parseInt(form.elements.q10.value);
        const q11 = parseInt(form.elements.q11.value);
        const q12 = parseInt(form.elements.q12.value);
        const q13 = parseInt(form.elements.q13.value);
        const q14 = parseInt(form.elements.q14.value);
        const q15 = parseInt(form.elements.q15.value);
        const q16 = parseInt(form.elements.q16.value);
        const q17 = parseInt(form.elements.q17.value);
        const q18 = parseInt(form.elements.q18.value);
        const q19 = parseInt(form.elements.q19.value);
        const q20 = parseInt(form.elements.q20.value);
        const q21 = parseInt(form.elements.q21.value);
        const q22 = parseInt(form.elements.q22.value);
        const q23 = parseInt(form.elements.q23.value);
        const q24 = parseInt(form.elements.q24.value);
    
    
        // Calculate the scores for each of the six RIASEC categories
        const realistic = (q1 + q7 + q14 + q22) / 4;
        const investigative = (q2 + q11 + q18 + q21) / 4;
        const artistic = (q3 + q8 + q17 + q23) / 4;
        const social = (q4 + q12 + q13 + q20) / 4;
        const enterprising = (q5 + q10 + q16 + q19) / 4;
        const conventional = (q6 + q9 +q15 + q24) / 4;
        abc()
    
        // Create a bar chart using Chart.js
        function abc() {
            const canvas = document.getElementById("myCanvas");
            var ctx = canvas.getContext("2d");
            if (canvas) {
                ctx = canvas.getContext('2d');
                const chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Realistic', 'Investigative', 'Artistic', 'Social', 'Enterprising', 'Conventional'],
                        datasets: [{
                            label: 'RIASEC Scores',
                            data: [realistic, investigative, artistic, social, enterprising, conventional],
                            backgroundColor: [
                                'rgba(255, 99, 132, )',
                                'rgba(54, 162, 235, )',
                                'rgba(255, 206, 86, )',
                                'rgba(75, 192, 192, )',
                                'rgba(153, 102, 255,)',
                                'rgba(255, 159, 64, )'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]















































                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                })
            }
        };
    });
    
    </script>
    <h4>The first three personality types having the highest scores make up your Holland's code.</h4>
 
   

    <?php include("footer.php")?>