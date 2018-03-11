<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once('../admin/config.php');
    require_once('simple_html_dom.php');

    $conn = mysqli_connect($loc, $user, $pass, $db2);
    $html = file_get_html('http://cs.uni.edu/courses.php');


    $classNumbers = Array();
    $classNames = Array();
    $classHours = Array();
    $classDescription = Array();
    $classTerms = Array();
    $classPres = Array();

    foreach($html->find('a') as $element){
        if(strpos($element->name, 'cs') !== false){
            //Class Number
            array_push($classNumbers,($element->name));
        }      
    }

    
    foreach($html->find('b') as $element){
        if(strpos($element, ".") !== false){
            //echo substr($element, strpos($element, ".")+1, strlen($element)) . "<br/>";
            array_push($classNames, substr($element, strpos($element, ".")+1));
        }
        
    }

    foreach($html->find('p') as $element){
        if(strpos($element, "CS") !== false){
            array_push($classHours, substr($element, strpos($element, "-- ")+3, 1) . "<br/>");
            $newString = substr($element, strpos($element, "<br/>")+5);
            if(strpos($newString, "Prerequisite(s):") !== false){
                //Description
                array_push($classDescription, substr($newString, 0, strpos($newString, "Prerequisite(s):")));

                //Prerequisites
                $newString = substr($newString, strpos($newString, "Prerequisite(s):"));
                if(strpos($newString, " (Offered") !== false){
                    array_push($classPres, substr($newString, 0, strpos($newString, " (Offered")));
                }
                else{
                    array_push($classPres, substr($newString, 0, strpos($newString, " (Variable")));
                }

                //Terms
                $newString = substr($newString, strpos($newString, ". (")+3);
                $newString = substr($newString,0, strpos($newString, "  </p>")-1) . "<br/>";
                if(strpos($newString, "Offered ") !== false){
                    array_push($classTerms, substr($newString, strpos($newString, "Offered ")+8));
                }
                else{
                    array_push($classTerms, $newString);
                }
            }
            else{
                //Description
                array_push($classDescription, substr($newString, 0, strpos($newString, "(Offered")));

                //Terms
                $newString = substr($newString, strpos($newString, ". (")+3);
                $newString = substr($newString,0, strpos($newString, "  </p>")-1) . "<br/>";
                if(strpos($newString, "Offered ") !== false){
                    array_push($classTerms, substr($newString, strpos($newString, "Offered ")+8));
                }
                else{
                    array_push($classTerms, $newString);
                }
            }
        }
    }

    $conn->begin_transaction();
    for($i=0;$i< sizeof($classNumbers);$i++){
        echo "INSERT INTO classes(Number, Name, Hours, Description) VALUES('{$classNumbers[$i]}','{$classNames[$i]}',{$classHours[$i]},'{$classDescription[$i]}')";       
        $conn->query("INSERT INTO classes(Number, Name, Hours, Description) VALUES('{$classNumbers[$i]}','{$classNames[$i]}',{$classHours[$i]},'{$classDescription[$i]}')");
    }
    $conn->commit();

    $conn->close();
?>