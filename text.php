<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Content with Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hidden {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity  ease-out, transform 1s ease-out;
        }
        .visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div id="animatedContent" class="hidden text-center bg-white p-5 rounded shadow-lg">
        <h1 class="text-primary">Welcome!</h1>
        <p class="text-muted">This is an animated content section that fades in and slides up.</p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let content = document.getElementById("animatedContent");
            setTimeout(() => {
                content.classList.add("visible");
            }, 500);
        });
    </script>

</body>
</html>
