<!DOCTYPE html>
<html lang="hr">
    <head>
        <title>Vjezba</title>
    </head>
    <body>
        <form method="POST" action="">
            <label style="display: block;">Vrijednost a:</label>
            <input type="number" name="a">
            <label style="display: block;">Vrijednost b:</label>
            <input type="number" name="b">
            <button type="submit" name="posalji" style="display: block;">Pošalji</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["posalji"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = (3 * $a - $b) / 2;
            echo "<p>Vrijednost c: $c<p>";
        }
        ?>
    </body>
</html>
