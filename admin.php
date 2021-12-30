<?php
    require_once('episurv.php')
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $msg ='';
    $sql = "select * from reportform;";
    $result = $cxn -> query($sql);
    if($result->num_rows > 0){
        while($bigi = $result->fetch_assoc()){
            $dblocation = $bigi['location'];
            $dbage = $bigi['age'];
            $dbtribe = $bigi['tribe'];
            $dbgender = $bigi['gender'];
            $dbsymptomsStart = $bigi['symptomsStart'];
            $dbemail = $bigi['email'];
            $dbsymptoms = $bigi['symptoms'];
            $dbtraveler = $bigi['traveller'];
        echo $dblocation, '&nbsp','&nbsp','&nbsp','&nbsp', $dbage,'&nbsp','&nbsp','&nbsp','&nbsp', $dbtribe,'&nbsp','&nbsp','&nbsp','&nbsp', $dbgender,'&nbsp','&nbsp','&nbsp','&nbsp', $dbsymptomsStart,'&nbsp','&nbsp','&nbsp','&nbsp', $dbemail,'&nbsp','&nbsp','&nbsp','&nbsp', $dbsymptoms,'&nbsp','&nbsp','&nbsp','&nbsp', $dbtraveler . '<br><br><br>';
          
        }
    }else{
        $msg = 'No one registered yet keep grinding bro!';
    }
    
    ?>
    <div><?php echo $msg ?></div>
    
</body>
</html>
<!-- location, 
age, 
tribe,
 gender,
  symptomsStart,
   email,
    symptoms,
 traveller -->