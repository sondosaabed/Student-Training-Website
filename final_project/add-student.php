<?php include "parts/_header.php" ?>
<main>
    <h2>Add Student</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <table>
            <tr>
                <td>
                    <label for="photo">Personal Photo:</label>
                </td>
                <td>
                    <input name="photo" id="photo" type="file" value="Browese">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">Name:</label>
                </td>
                <td>
                    <input name="name" id="name" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="city">City:</label>
                </td>
                <td>
                    <select>
                        <option name="city" selected>Select City</option>
                        <option name="city">Al-Bireh</option>
                        <option name="city">Hebron</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input name="email" id="email" type="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Tel:</label>
                </td>
                <td>
                    <input name="phone" id="phone" type="tel">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="uni">University:</label>
                </td>
                <td>
                    <input name="uni" id="uni" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="major">Major:</label>
                </td>
                <td>
                    <input name="major" id="major" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="projects">Projects:</label>
                </td>
                <td>
                    <textarea name="projects" id="projects"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="intrests">Intrests:</label>
                </td>
                <td>
                    <textarea name="intrests" id="intrests"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="Add Student">
        <input type="reset" value="Clear">
    </form>
    <a href="students.php">Cancel and return to Students List</a>
</main>
<aside>
    <h2>Help</h2>
    <p>
        Add your student details including projects and interests so that companies can select you...
    </p>
</aside>
<?php include "parts/_footer.php" ?>
<?php
session_start();
include "parts/_db.php";
if(ISSET($_POST['submit'])){
    if($_POST['name'] != "" || $_POST['email'] != "" || $_POST['phone'] != ""){
        try{
            $photo = $_POST['photo'];
            $name = $_POST['name'];
            $city = $_POST['city'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $uni = $_POST['uni'];
            $major = $_POST['major'];
            $projects = $_POST['projects'];
            $intrests = $_POST['intrests'];
            $sql = "INSERT INTO `Student` VALUES ('', '$photo','$name', '$city', '$email', '$phone', '$uni', '$major', '$projects', '$intrests')";
            $conn->exec($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conn = null;
        header('location:index.php');
    }else{
        header('location:index.php?error=required_feilds');
    }
}
?>