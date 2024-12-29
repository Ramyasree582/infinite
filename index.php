<?php
session_start();

// Check if the user is logged in
// if(!isset($_SESSION['username'])) {
//     // Redirect to the login page if the user is not logged in
//     header("Location: login.php");
//     exit;
// }

// Get the username from the session
// $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>The  Infinite Road</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <!-- Font Awesome icons (free version) -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Start Travelling</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#projects">Places</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/project/register.php">Register</a></li>
                    <!-- Add the Sign Up link below -->
                    <?php
                        if(isset($_SESSION["username"])){
                            $usname=$_SESSION['username'];
                            echo "<li class='nav-item'><a class='nav-link' href='bucketlist.php'>bucketlist</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='profile.php'>$usname</a></li>";
                            echo "<li class='nav-item'>
            <form action='' method='POST' style='display:inline;'>
                <button type='submit' name='logout' class='btn btn-danger' style='background-color: transparent; border: none; color: inherit; padding: 0; cursor: pointer;'>Logout</button>
            </form>
          </li>";
          if (isset($_POST['logout'])) {
            session_unset();  // Clear session variables
            session_destroy();  // Destroy the session
            header("Location: index.php");  // Redirect to index.php
            exit;
        }
                                }else{
                    ?>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/project/login.php" class="signup">Sign Up</a></li>
                    <?php
                        }
                    ?>
        

                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">The Infinite Road</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Embark on a journey where the road never ends.</h2>
                    <!-- Post Feed Button with Link -->
                    <a href="post.php" class="btn btn-primary btn-floating">
                        <i class="fas fa-plus"></i> Post Feed
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Feelings with finite feelings of us, is infinity</h2>
                    <p class="text-white-50">
                        Travelling is never a matter of money but the courage.</br>
                        Find the best here and join with finites.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="assets/img/okayle.jpg" alt="...">
        </div>
    </section>

    <!-- Projects -->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row -->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/pexel.jpg" alt="..."></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Shoreline</h4>
                        <p class="text-black-50 mb-0">Travel Infinity is a website for the people where they can explore there own explorations. </p>
                    </div>
                </div>
            </div>
            <!-- Project One Row -->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/goa.jpg" alt="..."></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Goa </h4>
                                <p class="mb-0 text-white-50">Life is always better at the beach.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row -->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/kerala.jpg" alt="..."></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Kerala</h4>
                                <p class="mb-0 text-white-50">God's own country.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- project three row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/mysore.jpg" alt="..."></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Mysore </h4>
                                <p class="mb-0 text-white-50">Our heritage your destination.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--project four row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/ladakh.jpg" alt="..."></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Ladakh</h4>
                                <p class="mb-0 text-white-50">Lost in the timeless beauty of Leh Ladakh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--project five row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/manali.jpg" alt="..."></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Manali </h4>
                                <p class="mb-0 text-white-50">Adventure meets serenity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--project 6 row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/kanyakumari.jpg" alt="..."></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Kanyakumari</h4>
                                <p class="mb-0 text-white-50">The land of three seas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Bootstrap core JS and other scripts -->
    <!-- Your existing script imports -->

</body>
</html>