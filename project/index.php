<?php $title = "Sign Up";
require_once 'include/header.php';
require_once 'db/dbconnection.php';
$result = $crud->getProfession();
?>


<form action="signupsuccess.php" method="post">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>
    <div class="mb-3">
        <label for="country" class="form-label">Country</label>
        <input type="text" class="form-control" name="country" id="country">
    </div>
    <div class="mb-3">
        <select class="form-select" name="pro" aria-label="Difault select example">
            <option selected>Profession</option>
            <?PHP while ($values = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $values['profession_id']; ?>"><?php echo $values['Profession']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
        <div id="emailHelp" class="form-text text-mute">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="Pass" name="pass">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



<?php require_once 'include/footer.php'; ?>