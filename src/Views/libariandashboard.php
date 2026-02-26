<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #FCFDFD;
            color: #334155;
            overflow-x: hidden;
        }

        /* Button Styling */
        .btn-primary-custom {
            background-color: #6B8E61;
            border: none;
            color: white;
            transition: 0.3s;
        }

        .btn-primary-custom:hover {
            background-color: #5a7a52;
            color: white;
            transform: translateY(-1px);
        }

        /* Card Styling */
        .stat-card {
            background-color: #FFFFFF;
            border: 1px solid #E2E8F0 !important;
            border-radius: 12px;
            transition: 0.3s;
        }

        .stat-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        /* Tab Styling */
        .custom-tab {
            border: none !important;
            color: #4A6741 !important;
            font-weight: 500;
            padding: 8px 16px !important;
            background: transparent !important;
            position: relative;
        }

        .custom-tab.active {
            color: #6B8E61 !important;
        }

        .custom-tab.active::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #6B8E61;
            border-radius: 3px 3px 0 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-0">Welcome! Admin</h3>
                <small class="text-muted">FEB 26, 2026 | Thursday</small>
            </div>
            <button class="btn btn-primary-custom px-4 py-2 rounded-pill shadow-sm">
                <i class="bi bi-plus-lg me-1"></i> New Entry
            </button>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card stat-card p-3 shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="p-3 rounded-3 me-3" style="background-color: #F8FAF9;">
                            <i class="bi bi-book text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Total Books</p>
                            <h4 class="fw-bold mb-0" style="color: #4A6741;">12,450</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3 shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="p-3 rounded-3 me-3" style="background-color: #F8FAF9;">
                            <i class="bi bi-journal-check text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Borrowed</p>
                            <h4 class="fw-bold mb-0" style="color: #4A6741;">680</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3 shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="p-3 rounded-3 me-3" style="background-color: #FEE2E2;">
                            <i class="bi bi-exclamation-triangle text-danger" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Overdue</p>
                            <h4 class="fw-bold mb-0 text-danger">24</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3 shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="p-3 rounded-3 me-3" style="background-color: #F8FAF9;">
                            <i class="bi bi-people text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Members</p>
                            <h4 class="fw-bold mb-0" style="color: #4A6741;">15,000</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <h5 class="fw-bold mb-3" style="color: #4A6741;">Quick Actions</h5>
            <ul class="nav nav-tabs border-0 mb-2" id="quickActionTabs" role="tablist"
                style="border-bottom: 1px solid #E2E8F0 !important;">
                <li class="nav-item shadow-none">
                    <button class="nav-link active custom-tab" id="overview-tab" data-bs-toggle="tab"
                        data-bs-target="#overview" type="button">Overview</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link custom-tab" id="add-book-tab" data-bs-toggle="tab"
                        data-bs-target="#add-book" type="button">Add New Book</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link custom-tab" id="register-member-tab" data-bs-toggle="tab"
                        data-bs-target="#register" type="button">Register Member</button>
                </li>
            </ul>

                

                

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>