<?php

$stdNo=$_POST['studentnumber'];
$lstnm=$_POST['lastname'];
$frstnm=$_POST['firstname'];
$mddl=$_POST['middleinitial'];
$gndr=$_POST['gender'];
$crs=$_POST['course'];

$quiz1=$_POST['q1'];
$quiz2=$_POST['q2'];
$assignment=$_POST['ass'];
$major=$_POST['exam'];


echo "<b>Student Number:</b> ". $stdNo;
echo "<br><b>Last Name:</b> ".$lstnm;
echo "<br><b>First Name:</b> ".$frstnm;
echo "<br><b>Middle Initial:</b> ".$mddl;
echo "<br><b>Gender:</b> ".$gndr;
echo "<br><b>Course:</b> ".$crs;


$averagequiz = ($quiz1 + $quiz2) / 2;
$quizgrade = ($averagequiz / 50) * 100;
$assignment_grade = ($assignment / 20) * 100;
$majorexamgrade = ($major / 100) * 100;
$finalgrade = ($quizgrade + $assignment_grade + $majorexamgrade) / 3;

echo "<br><br>Your grade is " . $finalgrade . "<br>";
if ($finalgrade >= 75) {
    echo "<b>You passed!</b>";
} 
else {
    echo "<b>You failed!</b>";
}
?>
<html>
<body>
    <br><button><a href="grade-ui.html">Compute Again</a></button>
</body>
</html>
    




