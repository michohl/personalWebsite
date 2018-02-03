<?php
echo '
    <!-- Header -->
    <nav class="navbar navbar-custom">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="/">MichaelTimmer.me</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Freshman
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/classes/cs1510.php">Intro to Computing</a></li>
                        <li><a href="/classes/cs1520.php">Data Structures</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sophmore
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/classes/cs1410.php">Computer Organization</a></li>
                        <li><a href="/classes/cs2530.php">Intermediate Computing</a></li>
                        <li><a href="/classes/cs3150.php">Information Storage & Retrieval</a></li>
                        <li><a href="/classes/cs3430.php">Operating Systems</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Junior
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/classes/cs3140.php">Databases</a></li>
                        <li><a href="/classes/cs3470.php">Networking</a></li>
                        <li><a href="/classes/cs3540.php">PLP</a></li>
                        <li><a href="/classes/cs3730.php">Project Management</a></li>
                        <li><a href="/classes/cs4410.php">System Security</a></li>
                        <li><a href="/classes/cs3120.php">User Interface & Design</a></li>
                    </ul>
                    </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Personal Projects
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://github.com/michohl">My Github</a></li>
                        <li><a href="/projects/nextSemester.php">Next Semester</a></li>
                        <li><a href="/projects/whosin.php">Who\'s In</a></li>
                    </ul>
                </li>     
                <li class="active"><a href="/about.php">About</a></li>                                                                  
              </ul>
              <form class="navbar-form navbar-right" action="/construction.php">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
              </form>
            </div>
          </nav>';
?>