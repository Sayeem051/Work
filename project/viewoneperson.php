<?php
$title = "Person Details";
require_once "./include/header.php";
if (isset($_GET['findbyemail'])) {
    require "./signupsuccess.php";
    return;
}
?>
<label for="inputPassword5" class="form-label">Enter Any Substring:</label>
<form action="signupsuccess.php" method="GET">
    <input type="text" id="get_user_info" name="findbyemail" class="form-control">
    <button class="btn btn-primary btn-block" name="get_user">Search this User</button>
</form>