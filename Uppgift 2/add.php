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

<form action="includes/functions.php" method="post" class="signInForm">
    <h2>Add a dog to the database</h2>
    <input type="text" name="nameAdd" placeholder="Name">
    <input type="text" name="breedAdd" placeholder="Breed">
    <input type="number" name="ageAdd" placeholder="Age">
    <input type="text" name="notesAdd" placeholder="Notes">
    <button type="submit" name="submitAdd">Save</button>

    <!-- VARFÖR FUNKAR INTE DESSA?!
         <p class="error"><?php echo $error ?></p>
    <p class="success"><?php echo $success ?></p> -->
</form>
<?php
    
    include_once "includes/footer.php";
?>

