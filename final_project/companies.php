<?php include "parts/_header.php" ?>
<main>
    <h2>Companies List</h2>
    <form method="GET" action="<?php echo $_SERVER ['PHP_SELF']; ?>">
        <label for="name">Company Name:</label>
        <input type="text" id="name">
        <label for="city">City:</label>
        <select>
            <option selected>Select City</option>
            <option>Al-Bireh</option>
            <option>Hebron</option>
        </selecet>
        <input type="submit" value="search">
    </form>
    <table id="companies">
        <tr>
            <th>Logo</th>
            <th>Name</th>
            <th>City</th>
            <th>Open Positions</th>
        </tr>
        <tr>
            <td><img alt="logo" src="images/companies/apiatech.png"/></td>
            <td><a href="company.php">ApiaTech</a></td>
            <td>Ramallah</td>
            <td>10</td>
        </tr>
        <tr>
            <td><img alt="logo" src="images/companies/Ooredo.jpg"/></td>
            <td><a href="company.php">Ooredo</a></td>
            <td>Rammalah</td>
            <td>7</td>
        </tr>
        <tr>
            <td><img alt="logo" src="images/companies/iconnect.jpg"/></td>
            <td><a href="company.php">iConnect</a></td>
            <td>Hebron</td>
            <td>6</td>
        </tr>
        <tr>
            <td><img alt="logo" src="images/companies/Jawwal.jpg"/></td>
            <td><a href="company.php">Jawwal</a></td>
            <td>Tulkarm</td>
            <td>3</td>
        </tr>
    </table>
    <a href="add-company.php">Add Company</a>
</main>
<aside>
    <h2>Jawwal</h2>
    <p>
        This is one of the bigest telecomunication companies on Palestine...
    </p>
</aside>
<?php include "parts/_footer.php" ?>

