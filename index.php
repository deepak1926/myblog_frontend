<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog Website</title>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSOUT CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT(MONTSERRAT) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,800;1,900&family=Poppins:ital@1&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav_container">
            <a href="index.html" class="nav_logo">Deepak</a>
            <ul class="nav_items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="signin.html">Sign In</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open_nav-btn" title="menu"><i class="uil uil-bars"></i></button>
            <button id="close_nav-btn" title="close"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- =======================END OF NAV========================= -->


    <section class="featured">
        <div class="container featured_container">
            <div class="post_thumbnail">
                <img src="./images/blog1.jpg" alt="">
            </div>
            <div class="post_info">
                <a href="category-posts.html" class="category_button">Wild Life</a>
                <h2 class="post_title"><a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Earum.</a></h2>
                <p class="post_body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis eligendi beatae
                    deleniti animi saepe assumenda sequi, adipisci recusandae corrupti aspernatur dicta quod fugit
                    consequatur ducimus excepturi, magni optio magnam quaerat.</p>
                <div class="post_author">
                    <div class="post_author-avatar"><img src="./images/avatar2.jpg" alt=""></div>
                    <div class="post_author-info">
                        <h5>By: Jane Doe</h5>
                        <small>March 01,2023 - 07:23</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================END OF FEATURED======================= -->

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog2.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="category-posts.html" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar4.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>



    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog3.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar5.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog4.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar6.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog5.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar7.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog6.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar8.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog7.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar9.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog8.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar10.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog9.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar11.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./images/blog10.jpg" alt="">
                </div>
                <div class="post_info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title"><a href="post.html">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Provident?</a></h3>
                    <p class="post_body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, distinctio. Recusandae nisi
                        dolor, neque quisquam doloribus corporis quas animi maxime ab dicta corrupti.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/avatar12.jpg" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: John Mills</h5>
                            <small>March 3, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- =============================END OF POST========================== -->


    <section class="category_buttons">
        <div class="container category_buttons-container">
            <a href="" class="category_button">Art</a>
            <a href="" class="category_button">Wild Life</a>
            <a href="" class="category_button">Travel</a>
            <a href="" class="category_button">Science & Technology</a>
            <a href="" class="category_button">Food</a>
            <a href="" class="category_button">Music</a>
        </div>
    </section>
<!-- =============================END OF CATEGORY========================== -->
<footer>
    <div class="footer_socials">
        <a href="https://www.youtube.com" target="_blank" title="youtube" rel="noopener"><i class="uil uil-youtube"></i></a>
        <a href="https://www.facebook.com" target="_blank" title="facebook" rel="noopener"><i class="uil uil-facebook-f"></i></a>
        <a href="https://www.instagram.com" target="_blank" title="instagram" rel="noopener"><i class="uil uil-instagram-alt"></i></a>
        <a href="https://www.linkedin.com" target="_blank" title="linkedin" rel="noopener"><i class="uil uil-linkedin"></i></a>
        <a href="https://www.twitter.com" target="_blank" title="twitter" rel="noopener"><i class="uil uil-twitter"></i></a>
        
    </div>
    <div class="container footer_container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Art</a></li>
                <li><a href="">Wild Life</a></li>
                <li><a href="">Travel</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Science & Technology</a></li>
                <li><a href="">Food</a></li>
            </ul>
        </article>
        <article>
            <h4>Support</h4>
            <ul>
                <li><a href="">Online Support</a></li>
                <li><a href="">Call Numbers</a></li>
                <li><a href="">Emails</a></li>
                <li><a href="">Social Support</a></li>
                <li><a href="">Location</a></li>
            </ul>
        </article>
        <article>
            <h4>Blog</h4>
            <ul>
                <li><a href="">Safety</a></li>
                <li><a href="">Repair</a></li>
                <li><a href="">Recent</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Categories</a></li>
            </ul>
        </article>
        <article>
            <h4>Permalinks</h4>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </article>
    </div>
    <div class="footer_copyright">
        <small>Copyright &COPY; 2023 Deepak Satankar</small>
    </div>
</footer>
<!-- =============================END OF FOOTER========================== -->
<script src="./main.js"></script>
</body>

</html>