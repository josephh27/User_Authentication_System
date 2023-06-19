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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
                <input class="searchInput" type="text" name="text" placeholder="Search for Student ID">
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
                <button type="button" id="add-student"  type="button" data-bs-toggle="modal" data-bs-target="#student-modal">Add</button>
                <button type="button">Remove</button>
                <button type="button">Edit</button>
            </div>
            <div class="record-table">
                <div class="table-header col1">#</div>
                <div class="table-header col2">Student Number</div>
                <div class="table-header col3">Full Name</div>
                <div class="table-header col4">Action</div>
                <?php 
                    include 'classes/dbh.classes.php';
                    include 'classes/student/student-retrieve.php';
                    $data = new studentData();
                    $result = $data->retrieveData();
                    $count = 1;
                    while ($row=$result->fetch(PDO::FETCH_BOTH)) {
                        ?>
                        <div class="col1"><?php echo htmlentities($count) ?></div>
                        <div class="col2"><?php echo htmlentities($row['student_id']) ?></div>
                        <div class="col3"><?php echo htmlentities($row['first_name']). " " . htmlentities($row['last_name']) ?></div>
                        <div class="col4"></div>
                        <?php $count += 1; 
                    } ?> 
            </div>
        </div>
    </div>
    <div class="modal" id="student-modal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form class="container-fluid" id="student-form-container">
            <h5>Student Details</h5>
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
                    <select type="select" name="civil-status" id="civil-status" class="form-control">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="sex">Sex</label>
                    <select type="select" name="sex" id="sex" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="student-id">Student No.</label>
                    <input type="text" id="student-id" name="student-id" class="form-control">
                </div> 
                <div class="col-md-3">
                    <label for="cellphone-no">Cellphone Number</label>
                    <input type="text" name="cellphone=no" id="cellphone-no" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="email">Email</label>
                    <input type="text" name="cellphone=no" id="cellphone-no" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="religion">Religion</label>
                    <select type="select" name="religion" id="religion" class="form-control">
                        <option value="Roman Catholic">Roman Catholic</option>
                        <option value="Islam">Islam</option>
                        <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
                        <option value="Born Again Christian">Born Again Christian</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
            </div>
            <hr>
            <h5>Student Address</h5>
            <div class="row">
                <div class="col-md-4">
                    <label for="house-number">House Number</label>
                    <input type="text" name="house-number" id="house-number" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="street">Street</label>
                    <input type="text" name="street" id="street" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="lot/block">Lot/Block</label>
                    <input type="text" name="lot/block" id="lot/block" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="region">Region</label>
                    <select type="select" name="region" id="region" class="form-control"></select>
                </div>
                <div class="col-md-4">
                    <label for="province">Province</label>
                    <select type="select" name="province" id="province" class="form-control"></select>
                </div>
                <div class="col-md-4">
                    <label for="municipality">Municipality</label>
                    <select type="select" name="municipality" id="municipality" class="form-control"></select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="barangay">Barangay</label>
                    <select type="select" name="barangay" id="barangay" class="form-control"></select>
                </div>
                <div class="col-md-4">
                    <label for="country">Country</label>
                    <select type="select" name="country" id="country" class="form-control"></select>
                </div>
                <div class="col-md-4">
                    <label for="postal-code">Postal Code</label>
                    <select type="select" name="postal-code" id="postal-code" class="form-control"></select>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="js/admintab.js"></script>
</body>
</html>