<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script> 
                alert("Inicia sesion");
                window.location = "../../index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive</title>

    <!-- css -->
    <link rel="stylesheet" href="../style/styles.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!---Swiper Slider Link------>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>
    <!-------S Nav bar------>
    <nav>
        <div class="container nav-container">
            <div class="logo">
                <h3>Social<span>Book</span></h3>
            </div>
            <div class="serch-bar">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="Serch For Creators">
            </div>
            <div class="add-post">
                <label for="add-post" class="btn btn-primary">Add Post</label>
                <div class="profile-picture" id="my-profile-picture">
                    <img src="../img/perfil2.jpg" alt="">
                </div>
            </div>
        </div>
    </nav>
    <!-------E Nav bar------>

    <!-------S Main Section------>
    <main>
        <div class="container main-container">
            
            <!--------- S Main left ------>
            <div class="main-left">
                <!--------S Profile---------->
                <a href="" class="profile">
                    <div class="profile-picture" id="my-profile-picture">
                        <img src="../img/perfil2.jpg" alt="">
                    </div>
                    <div class="profile-handle">
                        <h4>Beg Joker</h4>
                        <p class="text-gry">
                            @santibece
                        </p>
                    </div>                    
                </a>
                <!---------E Profile--------->

                <!-----------S Aside bar--------------->
                <aside>

                    <a class="menu-item active">
                        <span><img src="../img/svg/home-icon-silhouette.svg" alt=""></span> <h3>Home</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="../img/svg/home-icon-silhouette.svg" alt=""></span> <h3>Explore</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="../img/svg/home-icon-silhouette.svg" alt=""></span>
                        <small class="notfy-counter">7+</small> 
                        <h3>Notifications</h3>

                        <!-------S Notification box----------->
                        <div class="notification-box">
                            <div>
                                <div class="profile-picture">
                                    <img src="../img/svg/home-icon-silhouette.svg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Maria Lily</b> accepted your friend request
                                    <small class="text-gry">1 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="../img/svg/home-icon-silhouette.svg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Jhon Evan</b> commented your post
                                    <small class="text-gry">2 hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="../img/svg/home-icon-silhouette.svg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Emaliy Benjamin</b> liked your on post
                                    <small class="text-gry">just now</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="../img/svg/home-icon-silhouette.svg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Mark Trump</b> and <b> 10 other </b> liked on your post
                                    <small class="text-gry">today</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="../img/svg/home-icon-silhouette.svg" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Evrahim Alli</b> and <b> 5 other </b> commented on your post
                                    <small class="text-gry">3 Days Ago</small>
                                </div>
                            </div>
                        </div>
                        <!-------E Notification box----------->
                    </a>

                    <a class="menu-item">
                        <span><img src="../img/svg/home-icon-silhouette.svg" alt=""></span>
                        <small class="notfy-counter">3</small> 
                        <h3>Message</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="../img/svg/home-icon-silhouette.svg" alt=""></span> <h3>Book Marks</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="../img/svg/home-icon-silhouette.svg" alt=""></span> <h3>Analytics</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="../img/svg/home-icon-silhouette.svg" alt=""></span> <h3>Theme</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="../img/svg/home-icon-silhouette.svg" alt=""></span> <h3>Settings</h3>
                    </a>

                    <!--------Add post bar-------->
                    <label for="add-post" class="btn btn-primary btn-lg">Create A Post</label>

                </aside>
                <!-----------E Aside bar--------------->
            </div>
            <!--------- E Main left ------>

            <!--=========== S Main middle ============-->
            <div class="main-middle">
                <!--------E Stories--------->
                <div class="stories">
                    <div class="stories-wrapper swiper mySwiper">
                        <div class="stories-wrapper">
                            <div class="story swiper-slide">
                                <img src="" alt="">
                                <div class="profile-picture" id="my-profile-picture">
                                    <img src="../img/perfil2.jpg" alt="">
                                </div>
                                <div class="add-story">
                                    <i class="fa fa-add" id="upload"></i>
                                    <p>Add Your Story</p>
                                </div>
                            </div>
                            <div class="story swiper-slide">
                                <img src="../img/perfil.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="../img/perfil2.jpg" alt="">
                                </div>
                                <p>Evrahim Alli</p>
                            </div>
                            <div class="story swiper-slide">
                                <img src="../img/perfil.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="../img/perfil2.jpg" alt="">
                                </div>
                                <p>Lana White</p>
                            </div>
                            <div class="story swiper-slide">
                                <img src="../img/perfil.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="../img/perfil2.jpg" alt="">
                                </div>
                                <p>Furkan Syal</p>
                            </div>
                            <div class="story swiper-slide">
                                <img src="../img/perfil.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="../img/perfil2.jpg" alt="">
                                </div>
                                <p>Alexa Lisa</p>
                            </div>
                            <div class="story swiper-slide">
                                <img src="../img/perfil.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="../img/perfil2.jpg" alt="">
                                </div>
                                <p>Will Lens</p>
                            </div>
                            <div class="story swiper-slide">
                                <img src="../img/perfil.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="../img/perfil2.jpg" alt="">
                                </div>
                                <p>Anny Walkers</p>
                            </div>
                            <div class="story swiper-slide">
                                <img src="../img/perfil.jpg" alt="">
                                <div class="profile-picture">
                                    <img src="../img/perfil2.jpg" alt="">
                                </div>
                                <p>Will Lens</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--------Post Input--------->
                <form class="add-post">
                    <div class="profile-picture" id="my-profile-picture">
                        <img src="../img/perfil2.jpg" alt="">
                    </div>
                    <input type="text" placeholder="What's on your mind ?" id="add-post">
                    <input type="submit" value="post" class="btn btn-primary">
                </form>
            </div>
            <!--=========== E Main middle ============-->

            <!--------- S Main right ------>
            <div class="main-right">
                
            </div>
            <!--------- E Main right ------>

        </div>
    </main>
    <!-------E Main Section------>

    <!-- Para despues
    <h1>Welcome to my world, </ Quitar slach ?php echo $_SESSION['nombre']; ?>!</h1>
    <a href="../../php/cerrar_sesion.php">Cerrar sesion</a> -->

    <!------- Swiper JS --------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!------- JS --------->
    <script src="../style/scriptb.js"></script>
</body>
</html>