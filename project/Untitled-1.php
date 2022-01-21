<form action="#" method="POST">
    <input type="text" name="thing">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
    $sum = 0;
    $processed = str_replace(" ", "", strtolower($_POST['thing']));
    for ($i = 0; $i < strlen($processed); $i++) {
        $sum += ord($processed[$i]) - 96;
    }
    echo $sum;
}
?>