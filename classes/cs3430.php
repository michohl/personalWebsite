<!DOCTYPE html>
<html lang="en">
<head>
  <title>Michael Riesberg-Timmer's Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/classes.css">
  <link rel="stylesheet" href="/css/navbar.css">
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body>
    <?php require_once('../Functions/navbar.php');?>

    <!-- Page Header -->
    <div class="jumbotron text-center">
        <h1>Operating Systems</h1>
        <p>Discussed operating systems with a focus on threading and CPU scheduling</p>
    </div>

    <!-- Homeworks & Projects -->
    <div>
        <table class="table table-responsive center-block" style='width: 40%'>
            <thead>
                <tr>
                    <th>Number</th>
                    <th>File Name</th>
                    <th>Description</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>myshell</td>
                    <td>Emulate a unix shell that runs entered commands via a fork</td>
                    <td><a href="http://www.michaeltimmer.me/SophmoreYear/cs3430/myshell.zip">Download</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>dinphil</td>
                    <td>Solve the <a href = "https://en.wikipedia.org/wiki/Dining_philosophers_problem" style="color:blue">dining philosopher's problem</a></td>
                    <td><a href="http://www.michaeltimmer.me/SophmoreYear/cs3430/dinphil.zip">Download</a></td>
                </tr> 
                <tr>
                    <td>3</td>
                    <td>fsparser</td>
                    <td>Take FAT img as input then print out the file structure of that file</td>
                    <td><a href="http://www.michaeltimmer.me/SophmoreYear/cs3430/fsparser.zip">Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
  </body>
  
</html>