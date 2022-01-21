<?php
$title = "Sign Up";
require_once 'include/header.php';
require_once "./db/dbconnection.php";

if (isset($_POST['submit'])) {
    if (!strrpos($_SERVER['REQUEST_URI'], "viewoneperson")) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $dob = $_POST['dob'];
        $country = $_POST['country'];
        $profession = $_POST['pro'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $isSuccess = $crud->InsertPeople($firstName, $lastName, date("Y-m-d", strtotime($dob)), $country, $profession, $email, $pass);

        if ($isSuccess) {
            echo '<h1 class="text-success text-center">Signed up Successfully!</h1>';
            $id_to_profession = $crud->getprofession_name($profession)->fetch(PDO::FETCH_ASSOC);
            $profession = $id_to_profession['Profession'];
        } else {
            echo '<h1 class="text-danger text-center">Error Occured!</h1>';
        }
    }
} else {
    $result = $crud->getoneuser($_GET['findbyemail']);
    $r = $result->fetch(PDO::FETCH_ASSOC);
    $firstName = $r['firstname'];
    $lastName = $r['lastname'];
    $dob = $r['dateofbirth'];
    $country = $r['Country'];
    $id_to_profession = $crud->getprofession_name($r['Profession_id'])->fetch(PDO::FETCH_ASSOC);
    $profession = $id_to_profession['Profession'];
    $email = $r['emailaddress'];
}

?>
<div class="card div-center" style="width: 20rem; margin: auto; margin-top: 60px">
    <div class="card-body">
        <h5 class="card-title"><?php echo $firstName . " " . $lastName ?></h5>
        <p class="card-text"><?php echo $profession ?></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Date of Birth: <?php echo DAte("M-d-Y", strtotime($dob)) ?></li>
        <li class="list-group-item">Country: <?php echo $country ?></li>
        <li class="list-group-item">Email Address: <?php echo $email ?></li>
    </ul>
</div>

<?php require_once 'include/footer.php'; ?>