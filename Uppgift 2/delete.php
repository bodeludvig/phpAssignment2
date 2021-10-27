<?php
$json = file_get_contents("db.json");
$data = json_decode($json, true);

if (isset($_SESSION["isSignedIn"])) {
    $diff = array_diff($data["dogs"]);
} else {
    header("Location: profile.php");
    echo "<p>You have to be signed in first!<a href='sign-in.php'>Sign in</a></p>";
}

/* TEST LOGIN, FUNGERAR EJ
if (isset($_SESSION["username"])) {
    $diff = array_diff($data["dogs"]);
} else {
    header("Location: profile.php");
    echo "<p>You have to be signed in first!<a href='sign-in.php'>Sign in</a></p>";
} */

?>