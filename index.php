<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/navsidebar.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>LMS Home Page</title>
</head>

<body>

    <nav class="navbar">
        <div class="nav-left col-lg-4 ms-3">
            <button id="toggle-btn"><i class="bi bi-layout-sidebar-inset"></i></button>
            <span class="brand">LibManage<strong>Pro</strong></span>
        </div>
        <div class="col-lg-4 me-3 d-flex justify-content-end align-items-end">
            <input class="form-control me-2 rounded-4" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success rounded-4" type="submit">Search</button>
        </div>

        <!-- <div class="user-profile"> -->
        <!-- </div> -->
    </nav>

    <div class="container-fluid">
        <aside class="sidebar" id="sidebar">
            <ul class="nav-list d-flex flex-column">
                <li class="rounded-4 active"><a href="#"><i class="bi bi-ui-checks-grid"></i><span class="side">Dashboard</span></a></li>
                <li class="rounded-4"><a href="#"><i class="bi bi-person-vcard-fill"></i><span class="side">Role Promotion</span></a></li>
                <li class="rounded-4"><a href="#"><i class="bi bi-people-fill"></i><span class="side">Manage Members</span></a></li>
                <li class="rounded-4"><a href="#"><i class="bi bi-people-fill"></i><span class="side">Staff Management</span></a></li>
                <li class="rounded-4 d-flex align-items-start mb-auto"><a href="#"><i class="bi bi-cash-stack"></i><span class="side">Fines & Payments</span></a></li>
                <li class="rounded-4 d-flex align-items-end mt-auto"><a href="#"><i class="bi bi-gear-fill"></i><span class="side">Settings</span></a></li>
                <li class="rounded-4"><a href="#"><i class="bi bi-box-arrow-right"></i><span class="side">Logout</span></a></li>
            </ul>
        </aside>

        <main class="content" id="main-content">
            <?php include 'src/Views/libariandashboard.php' ?>
        </main>

    </div>

    <script src="public/assets/js/navsidebar.js"></script>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>