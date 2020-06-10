<?php

function escape($html) {
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

try  {

        require "./config.php";

        $connection = new PDO($dsn, $username, $password, $options);

        $sql = "SELECT * FROM users";


        $statement = $connection->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();
} catch(PDOException $error) {
   echo $sql . "<br>" . $error->getMessage();
}
?>

<?php if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo escape($row["id"]); ?></td>
                    <td><?php echo escape($row["firstname"]); ?></td>
                    <td><?php echo escape($row["lastname"]); ?></td>
                    <td><?php echo escape($row["email"]); ?></td>
                    <td><?php echo escape($row["age"]); ?></td>
                </tr>
    <?php } ?>
    </tbody>
</table>
<?php } else {
        echo "Ejecute install.php";
} ?> 
