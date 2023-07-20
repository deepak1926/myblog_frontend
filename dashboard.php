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

    <section class="dashboard">
        <div class="container dashboard_container">
            <button class="sidebar_toggle" id="show_sidebar-btn"><i class="uil uil-angle-right-b"></i></button>
            <button class="sidebar_toggle" id="hide_sidebar-btn"><i class="uil uil-angle-left-b"></i></button>

            <aside>
                <ul>
                    <li><a href="add-post.html"><i class="uil uil-pen"></i>
                            <h5>Add Post</h5>
                        </a></li>
                    <li><a href="dashboard.html" class="active"><i class="uil uil-postcard"></i>
                            <h5>Manage Posts</h5>
                        </a></li>

                    <li><a href="add-user.html"><i class="uil uil-user-plus"></i>
                            <h5>Add User</h5>
                        </a></li>
                    <li><a href="manage-users.html"><i class="uil uil-users-alt"></i>
                            <h5>Manage Users</h5>
                        </a></li>
                    <li><a href="add-category.html"><i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a></li>
                    <li><a href="manage-categories.html"><i class="uil uil-list-ul"></i>
                            <h5>Manage Categories</h5>
                        </a></li>

                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>

                        </tr>
                        <tr>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>

                        </tr>
                        <tr>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>

                        </tr>
                        <tr>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>Wild Life</td>
                            <td><a href="edit-post.html" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>

                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>
    <footer>
        <div class="footer_socials">
            <a href="https://www.youtube.com" target="_blank" title="youtube" rel="noopener"><i
                    class="uil uil-youtube"></i></a>
            <a href="https://www.facebook.com" target="_blank" title="facebook" rel="noopener"><i
                    class="uil uil-facebook-f"></i></a>
            <a href="https://www.instagram.com" target="_blank" title="instagram" rel="noopener"><i
                    class="uil uil-instagram-alt"></i></a>
            <a href="https://www.linkedin.com" target="_blank" title="linkedin" rel="noopener"><i
                    class="uil uil-linkedin"></i></a>
            <a href="https://www.twitter.com" target="_blank" title="twitter" rel="noopener"><i
                    class="uil uil-twitter"></i></a>

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