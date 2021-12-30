<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Episurv</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class='header'>
        <h1>Report your symptoms</h1>
    </div>
    <form method="post">
        <p>Location</p>
        <input type="text" class='input' name='location'>
        <p>Age</p>
        <input type="text"  class='input' id='age' name='age'>
        <div id='invalid-slot'></div>
        <p>Ethnicity</p>
        <input type="text" class='input' name='tribe'>
        <p>select your gender</p> 
        <input type="checkbox" class='radio' name='gender' value='male'>male </input> <br><br>
        <input type="checkbox" class='radio' name='gender' value='female'>female </input><br><br>
        <hr><br>
        <p> when did you start noticing the symptoms</p>
        <input type="text"  class='input'placeholder='please select a date' name='symptompsStart'>
        <p>Email</p>
        <input type="text" class='input' name='email'>
        <p>Symptoms</p>
        <input type="text"  class='input'placeholder='please choose one or more symptoms' name='symptoms'>
        <p> have you travelled outside UK?</p>
        <input type="radio" class='checkbox' name='traveller' value='yes'>yes </input> <br><br>
        <input type="radio"class='checkbox' name='traveller' value='no'>no </input> <br><br>
        <input type="submit" id='submit' value='submit'>
    </form>
    <?php
    require_once('episurv.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $location = $_POST['location'];
        $age = $_POST['age'];
        $tribe = $_POST['tribe'];
        $gender = $_POST['gender'];
        $symptomsStart = $_POST['symptompsStart'];
        $email = $_POST['email'];
        $symptoms = $_POST['symptoms'];
        $traveller = $_POST['traveller'];

            //insert values into the table
        $sql = "INSERT into reportform(location, age, tribe, gender, symptomsStart, email, symptoms, traveller) VALUES('$location','$age', '$tribe','$gender','$symptomsStart','$email','$symptoms','$traveller')" or die('could not insert values');

            //Run the query
        $result = $cxn ->query($sql) or die('could not run the query');
    }
    ?>

    
    <script src='script.js'></script>
</body>
</html>