<?php
$firstname = $_POST['firstname'];
$midname = $_POST['midname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];

$mon = $_POST['mon'];
$day = $_POST['day'];
$year = $_POST['year'];
$ss = $_POST['ss'];
$course = $_POST['course'];
$add = $_POST['add'];



?>

<strong>You are now Registered</strong> <br />

<strong>Firstname</strong>: <?php echo $firstname ?> <br />
<strong>Middlename</strong>: <?php echo $midname ?> <br />
<strong>Surname</strong>: <?php echo $lastname ?> <br />
<strong>Gender</strong>: <?php echo $gender ?> <br />
Birthday: <br />
<strong>Month</strong>: <?php echo $mon ?> 
<strong> Day</strong>: <?php echo $day ?>
<strong> Year</strong>: <?php echo $year ?> <br />
<strong>Student Status</strong>: <?php echo $ss ?> <br />
<strong>Program</strong>: <?php echo $course ?> <br />
<strong>Address</strong>: <?php echo $add ?> <br />