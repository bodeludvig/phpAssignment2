<?php 

//------------------------- ADD DOG -----------------------------
if (isset($_POST["submitAdd"])) {
    $newDog = array(
        "name" => $_POST["nameAdd"],
        "breed" => $_POST["breedAdd"],
        "age" => $_POST["ageAdd"],
        "notes" => $_POST["notesAdd"]
    );
    //CHECKING IF THERE IS AN ARRAY IN DB.JSON, IF NOT CREAT AN ARRAY
    if (filesize("../db.json") == 0) {
        $firstDog = array($newDog);

        $dataToSave = $firstDog;
    } else {
        $json = json_decode(file_get_contents("../db.json"), true);
        array_push($json["dogs"], $newDog);
        $dataToSave = $json;
    }
    if (!file_put_contents("../db.json", json_encode($dataToSave, JSON_PRETTY_PRINT), LOCK_EX)) {
        /* $error = "Error saving dog, please try again"; */
    } else {
        header("Location: ../list.php");
        /* $success = "Dog has been saved to the database!"; */  
    }
}
    
?>
