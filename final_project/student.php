<?php include "parts/_header.php" ?>
<main>
    <h2>Student 1 Name</h2>
    <img alt="ProfileImage" src="images/student.png" id="student-img"/>
    <dl>
        <dt>City:</dt>
        <dd>Jerusalem</dd>
        <dt>Email:</dt>
        <dd>stud1@gmail.com</dd>
        <dt>Tel:</dt>
        <dd>+972595969777</dd>
        <dt>Major:</dt>
        <dd>Computer Science</dd>
        <dt>Projects:</dt>
        <dd>Project 1: Some desription 1</dd>
        <dd>Project 2: Some desription 2</dd>
        <dt>Intrests:</dt>
        <dd>Software Engineering</dd>
        <dd>Web Development using PHP</dd>
    </dl>
    <a href="students.php">Back to students list</a> | 
    <a href="add-student.php">Edit</a>
</main>
<aside>
    <h2>Similar Students</h2>
    <p>
        A student or 2 students with same major
    </p>
</aside>
<?php include "parts/_footer.php" ?>