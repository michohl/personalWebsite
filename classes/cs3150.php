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
        <h1>Information Storage & Retrieval</h1>
        <p>Information Storage and Retrieval went into detail about looking at collections of documents and deciding how to organize and return the most relevant options based on user queries. These assignments are programmed in python 2.7</p>
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
                    <td>isr-prog1</td>
                    <td>Create a global dictionary of words contained in every specified file then congregate them into a duplicate exclusive list that is sorted in alphabetical order.</td>
                    <td><a href="http://www.michaeltimmer.me/SophmoreYear/cs3150/isrProg.zip">Download</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>isr-prog2</td>
                    <td>Use porters stemming to create a postings list</td>
                    <td><a href="http://www.michaeltimmer.me/SophmoreYear/cs3150/isrProg2.zip">Download</a></td>
                </tr> 
                <tr>
                    <td>3</td>
                    <td>isr_final</td>
                    <td>Let user type query then return top 20 results from Shakespeare plays</td>
                    <td><a href="http://www.michaeltimmer.me/SophmoreYear/cs3150/isr_final.zip">Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
  </body>
  
</html>