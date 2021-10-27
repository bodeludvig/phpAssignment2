<?php
    include_once "includes/header.php";
    if (!isset($_SESSION["isSignedIn"])) {
        header("Location: /index.php");
        exit();
    }
    /* TEST LOGIN, FUNGERAR EJ
    if (!isset($_SESSION["username"])) {
        header("Location: /index.php");
        exit();
    } */
?>
<table class="contentListTable">
    <tr>
        <th>Name</th>
        <th>Breed</th>
        <th>Age</th>
        <th>Notes</th>
        <th>Remove dog</th>
    </tr>
    <?php

        $data = file_get_contents("db.json");
        $data = json_decode($data, true);
        
        echo "<pre>";
        echo var_dump($_SESSION["userdetails"]);
        echo "</pre>";
        echo var_dump(session_status());

        /* if (isset($_SESSION["userdetails"]) && $_SESSION["userdetails"] == true) { */
            
            foreach ($data["users"] as $user) {

                if ($_SESSION["userdetails"] !== true) {
                    
                    foreach ($data["dogs"] as $row) {
                        echo "<tr>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["breed"] . "</td>";
                        echo "<td>" . $row["age"] . "</td>";
                        echo "<td>" . $row["notes"] . "</td>";
                        echo "<td><a href=''>Delete</a></td>";
                        echo "</tr>";
                    }

                }

            }
        /* } */
    ?>
</table>
<?php
    include_once "includes/footer.php";
?>