<!DOCTYPE html>
<html lang="en">
<head>
  <title>Michael Riesberg-Timmer's Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/circles.css">
  <link rel="stylesheet" href="/css/navbar.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body>
    <?php require_once('../Functions/navbar.php');?>

    <!-- Page Header -->
    <div class="jumbotron text-center">
        <h1>Next Semester Information</h1>
    </div>
    <!-- CODE STUFF HERE -->
    <form>
    Select a semester to view:
    <select name="mySelect" id="mySelect" onchange="test(this.value)">
        <option value = "0">Please make a selection</option>
        <option value = "1">Fall</option>
        <option value = "2">Spring</option>
        <option value = "3">Both</option>
    </select>

    </form>

    <div id="display_here"></div>

    <div id="page-wrapper">

    </header>
    </div>
    </section>

    <!--Using the XMLHttpRequest Object-->
    <!--https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest-->
    <button type="button" onclick="loadXMLDoc(document.getElementById('mySelect').value)">View Courses</button>
    <div id="demo">
    </div>

    <script>
    function loadXMLDoc(userChoice) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("demo").innerHTML =
    "<br>" + this.responseText;
    }
    };
    console.log(userChoice);
    if(userChoice === '1'){
    xhttp.open("GET", "NextSemester/fall.txt", true);
    }
    if(userChoice === '2'){
    xhttp.open("GET", "NextSemester/spring.txt", true);
    }
    if(userChoice === '3'){
    xhttp.open("GET", "NextSemester/both.txt", true);
    }
    xhttp.send();
    }
    </script>
  </body>
  
</html>



