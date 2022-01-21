<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Project - <?php echo $title ?></title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#dob").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-200:+0"
            });
        });
    </script>
</head>

<body>
    <style>
        .t {
            font-weight: 1000;
        }
    </style>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">People Man!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php
                        if (strrpos($_SERVER['REQUEST_URI'], "index")) {
                            echo '<a class="nav-link active t" aria-current="page" href="./index.php">Home</a>';
                        } else {
                            echo '<a class="nav-link" href="./index.php">Home</a>';
                        }

                        if (strrpos($_SERVER['REQUEST_URI'], "viewpeople")) {
                            echo '<a class="nav-link active t" aria-current="page" href="./viewpeople.php">View People</a>';
                        } else {
                            echo '<a class="nav-link" href="viewpeople.php">View People</a>';
                        }

                        if (strrpos($_SERVER['REQUEST_URI'], "viewoneperson")) {
                            echo '<a class="nav-link active t" aria-current="page" href="./viewoneperson.php">View Record</a>';
                        } else {
                            echo '<a class="nav-link" href="viewoneperson.php">View Record</a>';
                        }


                        ?>

                        <!--<a class="nav-link" href="#">Pricing</a> -->
                        <!-- <a class="nav-link disabled">Disabled</a> -->
                    </div>
                </div>
            </div>
        </nav>