<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Static Navigation - SB Admin</title>
    <link href="/myportfolio/css/styles.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/myportfolio/index" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">My Portfolio</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/myportfolio/index" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/myportfolio/projects" class="nav-link">Projects</a></li>
            <li class="nav-item"><a href="/myportfolio/users/login" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="/myportfolio/contact" class="nav-link">Contact</a></li>
        </ul>
    </header>

</div>


<?php echo $content_for_layout; ?>
</body>
</html>

