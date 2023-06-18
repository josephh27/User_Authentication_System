<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import font family -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Import icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap for grid form -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/admin-style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="#" class="logo nav-item">
                    <img src="images/university_logo.png" alt="">
                    <span class="nav-item">Admin</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <i class="fas fa-user nav-icon"></i>
                    <span >Student</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <i class="fa-solid fa-chalkboard-user nav-icon"></i>
                    <span>Faculty</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                <i class="fa-solid fa-book-bookmark nav-icon"></i>
                    <span>Courses</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <i class="fa-solid fa-folder-open nav-icon"></i>
                    <span>Section</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <i class="fa-solid fa-calendar-days nav-icon"></i>
                    <span>Schedule</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                <i class="fa-solid fa-users-gear nav-icon"></i>
                    <span>Accounts</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <i class="fa-solid fa-sliders nav-icon"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <i class="fa-solid fa-right-from-bracket nav-icon"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="admin-wrapper">
        <div class="header">
            <div class="searchBox">
                <input class="searchInput" type="text" name="" placeholder="Search for Student ID">
                <button class="searchButton" href="">
                    <i class="material-icons">
                        search
                    </i>
                </button>
            </div>
            <div class="admin-profile">
                <i class="fa-solid fa-user-tie nav-icon"></i>
                <p id="admin-name">ADMIN1</p>
            </div>
        </div>
        <div class="tab-content">
            <h1>Student Database</h1>
            <div class="database-buttons">
                <button>Add Student</button>
                <button>Remove Student</button>
                <button>Edit Student</button>
            </div>
            <div class="record-table">
                <?php 
                    include 'classes/dbh.classes.php';
                    include 'classes/student/student-retrieve.php';
                    $data = new studentData();
                    $result = $data->retrieveData();
                    $count = 1;
                    while ($row=$result->fetch(PDO::FETCH_BOTH)) {
                        ?>
                        <div><?php echo htmlentities($count) ?></div>
                        <div><?php echo htmlentities($row['student_id']) ?></div>
                        <div><?php echo htmlentities($row['first_name']) ?></div>
                        <div><?php echo htmlentities($row['last_name']) ?></div>
                        <div><?php echo htmlentities($row['email']) ?></div>
                        <div><?php echo htmlentities($row['birth_date']) ?></div>
                        <div><?php echo htmlentities($row['gender']) ?></div>
                        <?php $count += 1; 
                    } ?> 
            </div>
        </div>
        <form class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <label for="">First Name</label>
                    <input type="text" id="first-name" name="first-name" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="">Last Name</label>
                    <input type="text" id="last-name" name="last-name" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="civil-status">Civil Status</label>
                    <select name="civil-status" id="civil-status" class="form-control">
                        <option value="">Single</option>
                        <option value="">Married</option>
                        <option value="">Separated</option>
                        <option value="">Widowed</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="">Male</option>
                        <option value="">Female</option>
                    </select>
                </div>
            </div>
            <div>
                <div class="col-md-3"></div> 
                <div class="col-md-4"></div>
                <div class="col-md-3"></div>
                <div class="col-md-1"></div>
            </div>
            <div>

            </div>

        </form>
    </div>
</body>
</html>