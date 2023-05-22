
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning.org</title>
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff&family=Lobster&family=Ubuntu:wght@500&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

    <!-- Start navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Leaning</a>
            <span class="navbar-text pl-2">Learn and Implement</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav custom-nav pl-1">
                    <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
                    <li class="nav-item custom-nav-item"><a href="payment.php" class="nav-link">Payment Status</a></li>
                    <?php
                    session_start();
                    if(isset($_SESSION['is_login']))
                    {
                        echo '<li class="nav-item custom-nav-item"><a href="Student/profile.php" class="nav-link">My Profile</a></li>
                        <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
                    }
                    else{
                        echo '  <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">Login</a></li>
                        <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Signup</a></li>';
                    }
                    
                    ?>
                    
                  
                    <li class="nav-item custom-nav-item"><a href="feedback.php" class="nav-link">Feedback</a></li>
                    <li class="nav-item custom-nav-item"><a href="cont.php" class="nav-link">Contact</a></li>

                </ul>
                
            </div>
            <div class="text-right">
            <?php
                   
                    if(isset($_SESSION['is_login']))
                    {
                        echo '<a href="#" class="btn btn-primary">';
                      echo $_SESSION['lemail'];
                        echo '</a>';
                    }
                    else{
                        echo '   <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#exampleModal3">Admin</a>';
                    }
                    
                    ?>
          

            </div>
        </div>
    </nav>