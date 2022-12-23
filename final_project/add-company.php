<?php include "parts/_header.php" ?>
<main>
    <h2>Add Company</h2>
    <form method="POST" action="process.php">
        <table>
            <tr>
                <td>
                    <label for="logo">Logo:</label>
                </td>
                <td>
                    <input id="logo" type="file" value="Browese">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="name">Name:</label>
                </td>
                <td>
                    <input id="name" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="city">City:</label>
                </td>
                <td>
                    <select>
                        <option selected>Select City</option>
                        <option>Al-Bireh</option>
                        <option>Hebron</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>
                <td>
                    <input id="email" type="email">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Tel:</label>
                </td>
                <td>
                    <input id="phone" type="tel">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="uni">Positions Count:</label>
                </td>
                <td>
                    <input id="uni" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="positions">Positions Details:</label>
                </td>
                <td>
                    <textarea id="positions"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="Add Company">
        <input type="reset" value="Clear">
    </form>
    <a href="companies.php">Cancel and return to Companies List</a>
</main>
<aside>
    <h2>Help</h2>
    <p>
        Add company and positions details so that students can find you...
    </p>
</aside>
<?php include "parts/_footer.php" ?>

