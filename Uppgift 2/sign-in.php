<?php
    include_once "includes/header.php";
?>

<form action="sign-in.php" method="post" class="signInForm">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Sign in</button>
</form>

<?php
//----------------- GETTING DATA FROM DB.JSON -------------------
$json = file_get_contents("db.json");
$data = json_decode($json, true);


//----------------- FUNCTION TO SEE IF THE USER EXISTS -------------------
function validUser($email, $password, $data) {
    foreach($data["users"] as $user) {
        if($user["email"] === $email && $user["password"] === $password) {
            $_SESSION["userdetails"] = $data["users"];
            return true;
        }
    }
}
//----------------- COLLECTING INFO IN INPUTS ---------------------------
if(isset($_POST["email"], $_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(validUser($email, $password, $data)) {
        $_SESSION["isSignedIn"] = true;
        header("Location: list.php");
        exit();
    } else {
        echo "<p class='signInP'>Wrong email or password, please try again!</p>";
    }
}

/* TEST LOGIN, FUNGERAR EJ
if (isset($_POST["email"], $_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (strpos($email, "@") !== false && strlen($password) > 3) {
        $founduser = null;

        foreach ($users as $user) {
            if ($user["email"] == $email && $user["password"] == $password) {
                $founduser = $user;
            }
        }

        if ($founduser !== null) {
            $_SESSION["username"] = $founduser["username"];
            $_SESSION["email"] = $founduser["email"];
            header("Location: / list.php");
            exit();
        } else {
            echo "<p class='signInP'>Wrong email or password, please try again!</p>";
        }
    }
} */

?>

<?php
    include_once "includes/footer.php";
?>

