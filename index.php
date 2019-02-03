<!DOCTYPE html>
<html>
    <head>
        <title>MR-T's Portfolio</title>
    </head>

    <body>
        <?php require_once('Functions/navbar.php'); ?>

        <section>
            <h2 style="font-family: 'Cinzel', serif" class="center">Where to Find Me?</h2>
            <div class="center">
                <a href="https://github.com/michohl"> <i class="fab fa-github fa-7x" aria-hidden="true"></i> </a>
                <a href="https://linkedin.com/in/michohl"> <i class="fab fa-linkedin-in fa-7x" aria-hidden="true"></i> </a>
                <a href="https://gitlab.com/michohl"> <i class="fab fa-gitlab fa-7x" aria-hidden="true"></i> </a>
                <a href="mailto:me@michaeltimmer.me"> <i class="fas fa-envelope fa-7x" aria-hidden="true"></i> </a>
            </div>
            <div class="container" style="padding-top: 30px">
                <div class="divider"></div>
            </div>
        </section>

        <section>
            <h2 style="font-family: 'Cinzel', serif" class="center">TL;DR?</h2>

            <p class="flow-text center">You can check out my R&#233;sum&#233; <a style="color:blue" href="resume.php">here.</a></p>
            
            <div class="container" style="padding-bottom: 30px">
                <div class="divider"></div>
            </div>
        </section>

        <section>
            <h2 style="font-family: 'Cinzel', serif" class="center">Education</h2>

            <div class="container">
                <p class="flow-text center">
                    I studied for my BA in Computer Science at the University of Northern Iowa and graduated in the Spring of 2019.
                    During my studies some of the most important classes to me were System Security, Databases, Networking, Project Management, and Operating Systems.
                </p>
            </div>
            
            <div class="container" style="padding-bottom: 30px">
                <div class="divider"></div>
            </div>
        </section>

        <section>
            <h2 style="font-family: 'Cinzel', serif" class="center">Work Experience</h2>

            <div class="container">
                <p class="flow-text center">
                    I have worked as an IT Technician for the University of Northern Iowa's Curris Business Building for one year now. 
                    While this is not your typical Software Engineering job it has given me opportunities to use my skills learned from Computer Science
                    to make some quality of life improvements for the department.
                </p>
                <p class="flow-text center">
                    Most of this boils down to simple scripting.
                    However I have had the wonderful opportunity of working on two major projects that are better suited for showing my development abilities including 
                    a web based inventory management system and a web based checkout system to monitor laptop and projector checkouts.                    
                </p>
            </div>
            
            <div class="container" style="padding-bottom: 30px">
                <div class="divider"></div>
            </div>
        </section>

        <section>
            <h2 style="font-family: 'Cinzel', serif" class="center">Projects</h2>

            <div class="container">
                <div class="row">
                    <h3 class="center">Panther Spice &#8231; <a href="https://github.com/michohl/pantherSpice"><i class="fab fa-github-square"></i></a></h3>
                    <div class="col s12 m5">
                        <div class="card-panel white">
                        <span class="black-text">
                            Panther Spice was a browser plugin I developed to enhance UNI's class search function. It would take any professor's name
                            from the results and append a link to their RateMyProfessor page and display their score alongside it. 
                        </span>
                        <div class="row">
                            <p class="flow-text black-text">Technology Used:</p>
                            <span class="new badge left" data-badge-caption="MySQL"></span>
                            <span class="new badge left" data-badge-caption="Javascript / JQuery"></span>
                            <span class="new badge left" data-badge-caption="PHP"></span>
                        </div>
                        </div>
                    </div>
                    <img class="materialboxed" src="assets/img/pantherSpice1.png" style="height:70vh;width:58%">
                </div>
                <div class="row">
                    <h3 class="center">Next Semester Info &#8231; <a href="https://github.com/michohl/NextSemesterInfo"><i class="fab fa-github-square"></i></a></h3>
                    <div class="col s12 m5">
                        <div class="card-panel white">
                        <span class="black-text">
                            This project is a redesign to <a href="http://cs.uni.edu/courses.php" style="color:blue">UNI's Computer Science Course List</a>. 
                            I took the courses from their list and by storing it in my own database 
                            I am able to perform a lookup on each key stroke in the search bar. 
                            This provides the currently available information in a more digestable 
                            fashion while being easier to search.
                        </span>
                        <div class="row">
                            <p class="flow-text black-text">Technology Used:</p>
                            <span class="new badge left" data-badge-caption="MySQL"></span>
                            <span class="new badge left" data-badge-caption="PHP"></span>
                        </div>
                        </div>
                    </div>
                    <img class="materialboxed" src="https://user-images.githubusercontent.com/24578662/40287161-06ff58a8-5c71-11e8-8459-b8e5c006877a.png" style="height:100%;width:58%">
                </div>
                <div class="row">
                    <h3 class="center">CBA Equipment Checkout &#8231; <a href="https://github.com/michohl/equipmentCheckout"><i class="fab fa-github-square"></i></a></h3>
                    <div class="col s12 m5">
                        <div class="card-panel white">
                        <span class="black-text">
                            This website is a tool used by the CBA Information Technology department at UNI. It creates a way for the employees manage all of the 
                            equipment that they allow to be checked out by students and faculty. 
                        </span>
                        <div class="row">
                            <p class="flow-text black-text">Technology Used:</p>
                            <span class="new badge left" data-badge-caption="MySQL"></span>
                            <span class="new badge left" data-badge-caption="PHP"></span>
                            <span class="new badge left" data-badge-caption="Code Igniter"></span>
                        </div>
                        </div>
                    </div>
                    <img class="materialboxed" src="assets/img/cba_checkout.png" style="height:100%;width:58%">
                </div>                            
            </div>
            
            <div class="container" style="padding-bottom: 10px">
                <div class="divider"></div>
            </div>
        </section>
        
        <footer class="page-footer grey">
            <div class="container" style="padding-bottom: 40px">
                <div class="center">
                    <ul>
                        <li><a href="about.php">About</a></li>
                        <li><a href="https://github.com/michohl/personalWebsite">This Page's Github</a></li>
                        <li></li>
                    </ul>                
                </div>
            </div>
        </footer>

        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded',function(){
                var elems = document.querySelectorAll('.materialboxed');
                var instances = M.Materialbox.init(elems,{});
            });
        </script>
    </body>
</html>
