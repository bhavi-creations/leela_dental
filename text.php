<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Content with Links</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Initial Hidden State */
        .hidden {
            opacity: 0;
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        /* Fade In Right */
        .fade-in-right {
            transform: translateX(50px);
        }

        /* Fade In Left */
        .fade-in-left {
            transform: translateX(-50px);
        }

        /* Zoom In */
        .zoom-in {
            transform: scale(0.5);
        }

        /* Zoom Out */
        .zoom-out {
            transform: scale(1.5);
        }

        /* Make Content Visible */
        .visible {
            opacity: 1;
            transform: translateX(0) scale(1);
        }

        /* Link Styling */
        .custom-link {
            text-decoration: none;
            font-weight: bold;
            color: #007bff;
            transition: color 0.3s ease-in-out;
        }

        .custom-link:hover {
            color: #ff5733;
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-light d-flex flex-column align-items-center justify-content-center vh-100">

    <!-- Fade In Left Animation -->
    <div id="fadeInLeft" class="hidden fade-in-left text-center bg-white p-4 mb-3 rounded shadow-lg">
        <h2 class="text-primary">Fade In Left</h2>
        <p class="text-muted">This content slides in from the left.</p>
        <a href="https://www.example.com" target="_blank" class="custom-link">Visit Example</a>
    </div>

    <!-- Fade In Right Animation -->
    <div id="fadeInRight" class="hidden fade-in-right text-center bg-white p-4 mb-3 rounded shadow-lg">
        <h2 class="text-danger">Fade In Right</h2>
        <p class="text-muted">This content slides in from the right.</p>
        <a href="https://www.google.com" target="_blank" class="custom-link">Go to Google</a>
    </div>

    <!-- Zoom In Animation -->
    <div id="zoomIn" class="hidden zoom-in text-center bg-white p-4 mb-3 rounded shadow-lg">
        <h2 class="text-success">Zoom In</h2>
        <p class="text-muted">This content zooms in.</p>
        <a href="https://www.github.com" target="_blank" class="custom-link">Go to GitHub</a>
    </div>

    <!-- Zoom Out Animation -->
    <div id="zoomOut" class="hidden zoom-out text-center bg-white p-4 rounded shadow-lg">
        <h2 class="text-warning">Zoom Out</h2>
</div></body></html>