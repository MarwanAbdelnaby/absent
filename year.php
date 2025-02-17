<?php
?><!DOCTYPE html>
<html>
    <head>
        <title>Student Info</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="icon" href= "images/logo.jpg"/>
        <link rel="stylesheet" href= "css/all.min.css"/>
        <link rel="stylesheet" href= "css/fontawesome.min.css"/>
        <link rel="stylesheet" href= "css/bootstrap.min.css"/>
        <link rel="stylesheet" href= "css/style.css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <span class="navbar-brand">Logo</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-nav" aria-controls="app-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="app-nav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php">Student Count</a></li>
                    <li class="nav-item"><a class="nav-link" href="year.php?year=1">First Year</a></li>
                    <li class="nav-item"><a class="nav-link" href="year.php?year=2">Second Year</a></li>
                    <li class="nav-item"><a class="nav-link" href="year.php?year=3">Third Year</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">User</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li class="open"><a class="dropdown-item" href="php/logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <h1 class='text-center'>Student Info</h1>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered text-center main-table">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Student Number</td>
                            <td>Parrent Number</td>
                            <td>SignIn Date</td>
                            <td>1st Day</td>
                            <td>2nd Day</td>
                            <td>3rd Day</td>
                            <td>4th Day</td>
                            <td>5th Day</td>
                            <td>6th Day</td>
                            <td>7th Day</td>
                            <td>Control</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require "php/viewstudent.php";
                        getstudents ($_GET['year']);
                        ?>
                    </tbody>

                </table>
            </div>
            <a href="new.php?year=<?php echo $_GET['year']?>" class="btn btn-primary">New Student</a>
        </div>
        <div class="footer">
            
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>