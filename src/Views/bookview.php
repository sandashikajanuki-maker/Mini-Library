<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

    <div class="container my-5">

        <div class="row mb-5 pb-5 border-bottom">
            <div class="col-md-4 col-lg-3 text-center">
                <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                    <?php
                    if (isset($_POST["find"])) {
                        $id = $_POST["id"];
                        require_once '';

                        $bookController = new BookController();
                        $book = $bookController->getBookByID($sNo);

                        if ($book) {
                            echo "<p><img src='" . $book['coverimg'] . "' class='card-img-top' alt='...'></p>";
                        }
                    }
                    ?>
                    <div class="card-body bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <span class="text-muted ms-1 small">Rating</span>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            <button class="btn btn-dark flex-grow-1 rounded-pill py-2">Borrow</button>
                            <button class="btn btn-outline-danger rounded-circle">
                                <i class="bi bi-heart-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-lg-9 mt-4 mt-md-0">
                <h1 class="fw-bold">Book Name</h1>
                <p class="text-secondary fs-5">Author Name</p>

                <div class="mt-4">
                    <p><strong><i class="bi bi-grid"></i> Category:</strong> <span class="text-muted">Fiction,
                            Adventure</span></p>
                    <hr class="text-muted opacity-25">
                    <h5 class="fw-bold mt-4">Description</h5>
                    <p class="text-muted lh-lg">
                        This is a placeholder for your description paragraph. It follows your sketch's layout
                        by providing a clean, readable space for the book's synopsis. Use PHP to echo
                        your database content here.
                    </p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold">Your Interests...</h4>
            <a href="#" class="text-decoration-none text-dark fw-semibold">View All <i
                    class="bi bi-chevron-double-right"></i></a>
        </div>

        <div class="row row-cols-2 row-cols-md-4 g-4">
            <?php

            for ($i = 0; $i < 4; $i++):
                ?>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-3 bg-white">
                        <img src="https://via.placeholder.com/150x200" class="card-img-top rounded-3" alt="Interest Cover">
                        <div class="card-body px-0 pb-0">
                            <button class="btn btn-outline-dark w-100 rounded-pill mt-2">Borrow</button>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

    </div>

    <script src="public/assests/js/bootstrap.bundle.min.js"></script>
</body>

</html>