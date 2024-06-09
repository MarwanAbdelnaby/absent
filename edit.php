

<?php
require "php/database.php";
require "php/absencecheck.php";
$id = $_GET["id"];
$query = mysqli_query($connection,"SELECT * FROM `students` WHERE `id` = $id");
while ($row = mysqli_fetch_array(($query))){


?><!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
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
        <h1 class="text-center">Edit Student</h1>
        <div class="container">
            <form class="form-horizontal" action="php/studentedit.php?id=<?php echo $id ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>"/>

                <!-- Name Field -->
                <div class="form-group">
                    <label>Name</label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Student Name" disabled value="<?php echo $row["name"] ?>" />
                    </div>
                </div>

                <!-- Student Number Field -->
                <div class="form-group">
                    <label>Student Number <span style="font-size: small;color:gray">0<?php echo $row["snumber"] ?></span></label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="studentnumber" class="form-control form-control-lg" placeholder="" required/>
                    </div>
                </div>  

                <!-- Parrent Number Field -->
                <div class="form-group">
                    <label>Parent Number <span style="font-size: small;color:gray">0<?php echo $row["pnumber"] ?></span></label>
                    <div class="col-sm-10 col-md-6 password">
                        <input type="text" name="parrentnumber" class="form-control form-control-lg"placeholder="" required/>
                    </div>
                </div>  

                <!-- 1st Degree Field -->
                <div class="form-group">
                    <label>1st Day <span style="font-size: small;color:gray"><?php absencecheck($row['1st']) ?></span></label>
                    <div class="col-sm-10 col-md-6">
                        <input type="number" name="firstdegree" class="form-control form-control-lg" min="0" max="1"/>
                    </div>
                </div>  

                <!-- 2nd Degree Field -->
                <div class="form-group">
                    <label>2nd Day <span style="font-size: small;color:gray"><?php absencecheck($row['2nd']) ?></span></label>
                    <div class="col-sm-10 col-md-6">
                        <input type="number" name="seconddegree" class="form-control form-control-lg" min="0" max="1"/>
                    </div>
                </div>  
                <!-- 3rd Degree Field -->
                <div class="form-group">
                    <label>3rd Day <span style="font-size: small;color:gray"><?php absencecheck($row['3rd']) ?></span></label>
                    <div class="col-sm-10 col-md-6">
                        <input type="number" name="thirddegree" class="form-control form-control-lg" min="0" max="1"/>
                    </div>
                </div>  
                <!-- 4th Degree Field -->
                <div class="form-group">
                    <label>4th Day <span style="font-size: small;color:gray"><?php absencecheck($row['4th']) ?></span></label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="fourthdegree" class="form-control form-control-lg" min="0" max="1"/>
                    </div>
                </div>  
                <!-- 5th Degree Field -->
                <div class="form-group">
                    <label>5th Day <span style="font-size: small;color:gray"><?php absencecheck($row['5th']) ?></span></label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="fifthdegree" class="form-control form-control-lg" min="0" max="1"/>
                    </div>
                </div>  
                <!-- 6th Degree Field -->
                <div class="form-group">
                    <label>6th Day <span style="font-size: small;color:gray"><?php absencecheck($row['6th']) ?></span></label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="sithdegree" class="form-control form-control-lg" min="0" max="1"/>
                    </div>
                </div>  
                <!-- 7th Degree Field -->
                <div class="form-group">
                    <label>7th Day <span style="font-size: small;color:gray"><?php absencecheck($row['7th']) ?></span></label>
                    <div class="col-sm-10 col-md-6">
                        <input type="text" name="seventhdegree" class="form-control form-control-lg" min="0" max="1"/>
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Save" class="btn btn-primary btn-lg" />
                    </div>
                </div>  
            </form>
        </div>
        <div class="footer">
            
        </div>
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
<?php } ?>