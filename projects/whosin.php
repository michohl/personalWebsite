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
        <h1>Who's In?</h1>
        <h2>Day is currently: <?php echo date("l"); ?> </h2>
        <h2>Time is currently: <?php echo date("g:i a"); ?> </h2>
        <h4>Legend:</h4>
        <h4>Green Light = currently in office</h4>
        <h4>Yellow Light = No office hours available</h4>
        <h4>Red Light = Not currently in office</h4>
    </div>
    <?php
        //ini_set('display_errors', '1');
        
        //echo '<div id="profContainer">';

        //Establish connection to database and query for all profs
        require_once('../admin/config.php');
        $conn = new mysqli($loc,$user,$pass,$db);
        $profs = $conn->query("select Name,imagePath,schedule from Professors");
        while($row = $profs->fetch_assoc()){
            //Begin the div for this prof
            //echo '<div class="profDiv">';

            //Grab the profs office hours for the current day only
            $query = "select start,end from " . date("l") . " where prof='" . $row["Name"] . "'";
            $schedule = $conn->query($query);

            if($schedule === False){
                break;
            }
            //Add all office hour sessions to an array so we can compare to them later
            while($scheduleRow = $schedule->fetch_assoc()){
                $daySchedule[] = array($scheduleRow["start"],$scheduleRow["end"]);
            }

            //Display name and a link to the prof's schedule
            echo "Name: " . $row["Name"] . "<br/>";
            if($row["schedule"] != ""){
                echo "<a href = '" . $row["schedule"] . "'>Official Schedule</a><br/><br/>";
            }
            else{
                echo "This professor has no listed office hours <br/><br/>";
            }
            
            //Display prof's image if one exists
            if(file_exists($row["imagePath"])){
                echo '<img src="' . $row["imagePath"] . '" height="202" width="274">';
            }
            else{
                echo '<img src="assets/images/professors/NA.jpg" height="202" width="274">';
            }

            if($row["schedule"] != ""){
                //Here we actually decide if the prof is in the office or not
                $now = date("g:ia");
                $breakFlag = False;
                foreach($daySchedule as $session){
                    /*
                    If the current time is greater than the session start time
                    and less than the end time then the professor should be 
                    in their office.
                    */
                    $start = ($now > $session[0]);
                    $end = ($now < $session[1]);
                    if($start && $end){
                        echo '<img src="assets/images/professors/green.png">';
                        $breakFlag = True;
                    }
                }
                /*
                Getting here means that the professor has 
                office hours today but it's not at the current time 
                */
                if($breakFlag == False){
                    echo '<img src="assets/images/professors/red.png">';
                }
                
            }
            else{
                //Professor doesn't have office hours
                echo '<img src="assets/images/professors/yellow.png">';
            }

            echo "<br/><br/>";
            //This variable needs to be unset because otherwise the next
            //professor you look at will use the previous professors schedule if they don't have their own.
            unset($daySchedule);

            //End div for this prof
            //echo "</div>";
        }

        //echo "</div>";
        ?>
  </body>
  
</html>