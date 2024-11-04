<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Group 2</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/letter-g.png" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">Group 2</span>
                    <span class="profession">Web developers</span>
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="home.php">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="project.php">
                        <i class='bx bx-code icon'></i>
                        <span class="text nav-text">Projects</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="edit.php">
                        <i class='bx bx-edit icon'></i>
                        <span class="text nav-text">Edit</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="update.php">
                        <i class='bx bxs-edit icon'></i>
                        <span class="text nav-text">Update</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="about_us.php">
                        <i class='bx bx-user icon'></i>
                        <span class="text nav-text">About Us</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="contact_us.php">
                        <i class='bx bxs-contact icon'></i>
                        <span class="text nav-text">Contact Us</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                    <i class='bx bxs-moon icon moon' ></i>
                    <i class='bx bxs-sun icon sun' ></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </li>
        </div>
    </div>
</nav>
<section class="home">
    <dic class="text">Dashboard</dic>
</section>
    <script src="javascript/script.js"></script>
</body>
</html>