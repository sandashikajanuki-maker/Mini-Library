document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('ratingInput');

    // --- 1. Star Rating Logic ---
    // This makes your stars clickable and updates the hidden input
    stars.forEach(star => {
        star.addEventListener('click', function () {
            const value = this.getAttribute('data-value');
            ratingInput.value = value;

            // Visual update: Fill stars up to the clicked one
            stars.forEach(s => {
                if (s.getAttribute('data-value') <= value) {
                    s.classList.replace('bi-star', 'bi-star-fill');
                    s.classList.remove('text-muted');
                } else {
                    s.classList.replace('bi-star-fill', 'bi-star');
                    s.classList.add('text-muted');
                }
            });
        });
    });

    // --- 2. Form Validation Logic ---
    form.addEventListener('submit', function (event) {
        let isValid = true;
        let errorMessage = "";

        // Get values
        const bookName = document.getElementById('bookname').value.trim();
        const author = document.getElementById('author').value.trim();
        const category = document.getElementById('category').value;
        const fileInput = document.getElementById('coverimg');
        const file = fileInput.files[0];

        // Validation Rules
        if (bookName.length < 2) {
            errorMessage += "- Please enter a valid Book Title.\n";
            isValid = false;
        }

        if (author.length < 3) {
            errorMessage += "- Author name is too short.\n";
            isValid = false;
        }

        if (category === "Choose Category..." || !category) {
            errorMessage += "- Please select a Category.\n";
            isValid = false;
        }

        // Image Validation (Size & Type)
        if (file) {
            const fileSize = file.size / 1024 / 1024; // Convert to MB
            const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

            if (!allowedExtensions.exec(fileInput.value)) {
                errorMessage += "- Only JPG and PNG images are allowed.\n";
                isValid = false;
            }

            if (fileSize > 16) {
                errorMessage += "- Image size must be less than 16MB.\n";
                isValid = false;
            }
        }

        // If something is wrong, stop the form from submitting
        if (!isValid) {
            event.preventDefault();
            alert("Oops! Please fix the following:\n\n" + errorMessage);
        }
    });
});