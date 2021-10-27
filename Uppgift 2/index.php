<?php
    include_once "includes/header.php";
?>

<div class="contentMain">
    <?php
    //----- SKRIVER UT OLIKA MEDDELANDEN OM PERSONEN ÄR INLOGGAD ELLER INTE-----
        if (isset($_SESSION["isSignedIn"])) {
            //LÄGG TILL NAMN I VÄLKOMSTEN OM DU HINNER!!!
        echo "<h1 class='indexH1'>Welcome  to IDDb</h1>";
        echo "<p class='indexP'>"; 
            echo "You can view the list of the dogs <a href='list.php'>here</a>";
        echo "</p>";
        } else {
            echo "<h1 class='indexH1'>Welcome to IDDb</h1>";
        echo "<p class='indexP'>";
            echo "You can <a href='sign-in.php'>Sign In</a>"; 
            echo " or view the list of the dogs <a href='list.php'>here</a>";;
        echo "</p>";
        }
    ?>
</div>

<?php
    include_once "includes/footer.php";
?>