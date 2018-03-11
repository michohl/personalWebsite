<!DOCTYPE html>
<html lang="en">
<head>
  <title>Michael Riesberg-Timmer's Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/navbar.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <script>
    //This first function call creates the initial table where all classes show
    $(document).ready(function(){
      semester = document.getElementById('mySelect').value;
      name = document.getElementById('className').value;

      $.ajax({ url: 'https://michaeltimmer.me/Functions/retrieveClasses.php',
        data: {semester: semester, name: name},
        type: 'POST',
        success: function(output) {
        $("#searchResults").html(output);
        }
      });
    });

    //This function updates table as keys are pressed.
    $(function(){
      $("#className").keyup(function(){
        semester = document.getElementById('mySelect').value;
        name = document.getElementById('className').value;

        $.ajax({ url: 'https://michaeltimmer.me/Functions/retrieveClasses.php',
         data: {semester: semester, name: name},
         type: 'POST',
         success: function(output) {
          $("#searchResults").html(output);
          }
        });
      })
    });
  </script>

  <body>
    <?php require_once('../Functions/navbar.php');?>

    <!-- Page Header -->
    <div class="jumbotron text-center">
        <h1>Next Semester Information</h1>
    </div>
    <!-- CODE STUFF HERE -->
    <div class="text-center" id="userInput">
      <form>
      Select a semester to view:
      <select name="mySelect" id="mySelect" onchange="test(this.value)">
          <option value = "">Both</option>
          <option value = "Fall">Fall</option>
          <option value = "Spring">Spring</option>
        </select>
        
        <label for="className" style="margin-left: 2%;">Class Name: </label>
        <input type="text" id="className"/>
      </form>
    
      <div id="searchResults" style="margin-top: 4%; margin-left: 9%;"></div>
      
    </div>

  </body>
  
</html>



