<?php
// Lista alla hundar.

/* if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $json = file_get_contents("db.json");

    if ($json !== false) {
        $data = json_decode($json, true);
        $dogs = $data["dogs"];

        foreach ($dogs as $dog) {
            if ($dog["id"] == $id) {
                $foundDog = $dog;
            }
        }
    }
} */
?>

<?php
    include_once "includes/header.php";
?>
<table class="contentListTable">
    <tr>
        <th>Name</th>
        <th>Breed</th>
        <th>Age</th>
        <th>Notes</th>
        <th>Owner</th>
    </tr>
    <?php
        $data = file_get_contents("db.json");
        $data = json_decode($data, true);
        

        foreach ($data["dogs"] as $row) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["breed"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["notes"] . "</td>";

            //SKRIVER UT ALLA ÄGARE...
            foreach ($data["users"] as $row) {
                echo "<td>" . $row["username"] . "</td>";
            }

            
            echo "</tr>";
        }
    ?>
</table>

<?php
    include_once "includes/footer.php";







    //EXTRA TEST KOD
    /*FÖRSÖKER LISTA UT HUR JAG SKA HÄMTA ID'N OCH JÄMFÖRA DEM SÅ JAG KAN
        SKRIVA UT RÄTT ÄGARE PÅ RÄTT HUND*/
        /*
        $users = $data["users"];
        $dogs = $data["dogs"];
        if ($users["id"] == $dogs["id"]) {
            echo "Yes";
        } else {
            echo "No";
        } */
    //SKRIVER UT USER ARRAY NUMMER
            /* foreach ($data["users"] as $id => $value) {
                echo "<td>" . $id . "</td>";
            } */

            /* foreach ($data["users"] as $id => $value) {
                foreach ($id["id"] as $owners) {
                echo "<td>" . $owners . "</td>";
                }
            } */

            /* if ($data["users"] == $data["dogs"]) {
                foreach ($data["users"] as $row) {
                    echo "<td>" . $row["username"] . "</td>";
                }
            } */
        /* foreach ($data["users"] as $row) {
                if ($data["users"] && $data["dogs"]) {
                    $users = $data["users"];
                    $dogs = $data["dogs"];
                    if ($users["id"] == $dogs["id"]) {
                        echo "<td>" . $row["username"] . "</td>";
                    }
                }
            } */

            /* echo "<td>" . $row["id"] . "</td>"; */
?>