<?php
$title = "View People";
require_once "./include/header.php";
require_once "./db/dbconnection.php";
$result = $crud->getPeople();

?>

<table class="table">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Country</th>
        <th>Email Address</th>
        <th>Profession</th>
        <th>Actions</th>
    </tr>

    <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <th><?php echo $r['People_id']; ?></th>
            <th><?php echo $r['firstname']; ?></th>
            <th><?php echo $r['lastname']; ?></th>
            <th><?php echo $r['dateofbirth']; ?></th>
            <th><?php echo $r['Country']; ?></th>
            <th><?php echo $r['emailaddress']; ?></th>
            <th><?php
                $profession_name = $crud->getprofession_name((int)$r['Profession_id'])->fetch(PDO::FETCH_ASSOC);
                echo $profession_name['Profession'];
                ?>
            </th>
            <th><a href="viewoneperson.php?findbyemail=<?php echo $r['lastname'] ?>&get_user=<?php unset($_GET['get_user']) ?>" class="btn btn-primary">View</a></th>
        </tr>
    <?php } ?>
</table>

<?php
require_once "./include/footer.php";
?>