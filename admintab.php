<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/admin-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <div>HOTDOG</div>
                <div>NEWBIE</div>
                <div>SUPER MARIO BROS</div>
                <div>CDSKODKSK DSADKSA</div>
                <div>CDSKODKSK DSADKSA</div>
                <div>M</div>
            </div>
        </div>
    </div>
</body>
</html>