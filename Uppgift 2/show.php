<?php
    include_once "includes/header.php";
?>

<div class="contentMain">
    <?php
        $data = file_get_contents("db.json");
        $data = json_decode($data, true);
        
        if (isset($_GET["id"])) {
            $id = $_GET["id"];

            if (in_array($id, [1, 2])) {
                if ($id == "1") {
                    echo $data["dogs"];
                } elseif ($id == "2") {
                    echo $data["dogs"];
                }
            }
        } else {
            echo "No";
        }
    ?>
</div>

<?php
    include_once "includes/footer.php";
?>