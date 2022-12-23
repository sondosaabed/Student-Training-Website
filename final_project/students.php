<?php include "parts/_header.php" ?>
<main>
    <h2>Students List</h2>
    <form method="GET" action="<?php echo $_SERVER ['PHP_SELF']; ?>">
        <label for="major">Student Study Major:</label>
        <input type="text" id="major">
        <label for="city">City:</label>
        <select>
            <option selected>Select City</option>
            <option>Al-Bireh</option>
            <option>Hebron</option>
        </selecet>
        <input type="submit" value="search">
    </form>
    <table id="students">
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>City</th>
            <th>University</th>
            <th>Major</th>
        </tr>
        <tr>
            <td><img alt="profile" src="images/students/F2.png"/></td>
            <td><a href="student.php">Sondos Aabed</a></td>
            <td>Al-Bireh</td>
            <td>Birzeit University</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td><img alt="profile" src="images/students/F1.png"/></td>
            <td><a href="student.php">Suad Hussien</a></td>
            <td>Rammalah</td>
            <td>Al-Quds Open University</td>
            <td>Political Science</td>
        </tr>
        <tr>
            <td><img alt="profile" src="images/students/M2.png"/></td>
            <td><a href="student.php">Mahmoud Fatafta</a></td>
            <td>Hebron</td>
            <td>Plestine Polytechnic University</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td><img alt="profile" src="images/students/M1.png"/></td>
            <td><a href="student.php">Abed Abu Adas</a></td>
            <td>Jafa</td>
            <td>Birzeit University</td>
            <td>Litrature and Art</td>
        </tr>
    </table>
    <a href="add-student.php">Add Student</a>
</main>
<aside>
    <h2>Distinguished Students</h2>
    <p>
        Student Ali Ahmad from Birzeit is very special and he is looking for training in Computer Science...
    </p>
</aside>
<?php include "parts/_footer.php" ?>