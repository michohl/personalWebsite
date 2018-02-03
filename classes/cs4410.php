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
        <h1>System Security</h1>
        <p>Project course for the System's emphasis in UNI's CS program</p>
        <p>This class is split into both an offensive half where students learn hacking technqiues and a defensive half where students learn to secure networks and servers </p>
    </div>

    <!-- Homeworks & Projects -->
    <div class="table-responsive">
        <table class="table center-block" style='width: 40%'>
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
                    <td>Project 1</td>
                    <td>A wiki and presentation describing XSS (Cross-site scripting)</td>
                    <td><a href="http://www.michaeltimmer.me/JuniorYear/cs4410/HW01.zip">Download</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Project 2</td>
                    <td>Running OWASP and Kali Linux virtual machines go through WebGoat course.</td>
                    <td>N/A</td>
                    <!--<td><a href="http://www.michaeltimmer.me/JuniorYear/cs4410/HW02.zip">Download</a></td>-->
                </tr> 
            </tbody>
        </table>
    </div>
  </body>
  
</html>