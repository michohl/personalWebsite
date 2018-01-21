<?php
echo '<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">

        <!-- Search -->
            <section id="search" class="alt">
                <form method="post" action="search.php">
                    <input type="text" name="query" id="query" placeholder="Search" />
                </form>
            </section>

        <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href="index.php">Homepage</a></li>
                    <li>
                        <span class="opener">Freshman Year</span>
                        <ul>
                            <li><a href="cs1510.php">Intro to Computing</a></li>
                            <li><a href="cs1520.php">Data Structures</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="opener">Sophmore Year</span>
                        <ul>
                            <li><a href="cs1410.php">Computer Organization</a></li>
                            <li><a href="cs2530.php">Intermediate Computing</a></li>
                            <li><a href="cs3150.php">Information Storage & Retrieval</a></li>
                            <li><a href="cs3430.php">Operating Systems</a></li>
                        </ul>
                        <li>
                            <span class="opener">Junior Year</span>
                            <ul>
                                <li><a href="construction.php">Databases</a></li>
                                <li><a href="construction.php">Networking</a></li>
                                <li><a href="construction.php">User Interface & Design</a></li>
                            </ul>
                        </li>
                        <li>
                            <span class="opener">Personal Projects</span>
                            <ul>
                                <li><a href="nextSemester.php">Next Semester Data</a></li>
                                <li><a href="construction.php">Who is In</a></li>
                            </ul>
                        </li>
                    <li><a href="about.php">About This Site</a></li>
                </ul>
            </nav>

        <!-- Section -->
            <section>
                <header class="major">
                    <h2>Get in touch</h2>
                </header>
                <ul class="contact">
                    <li class="fa-envelope-o"><a href="mailto:Me@MichaelTimmer.me">Me@MichaelTimmer.me</a></li>
                </ul>
            </section>

        <!-- Footer -->
            <footer id="footer">
                <p class="copyright">&copy; Michael Timmer. All rights reserved. Template from: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
            </footer>

    </div>
</div>'
?>