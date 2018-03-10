<?php
  /*
  Notes:
  1) Capital letters ruin everything.
  */
  $cwd = scandir(dirname(__FILE__));
  foreach($cwd as $key => $value){
    if(substr($value,-4)==".php"){
      $temp = substr($value,0,-4);
      echo "<p>{$temp}</p>";
      $fileType="php";
    }
    elseif(substr($value,-5)==".html"){
      $temp = substr($value,0,-5);
      echo "<p>{$temp}</p>";
      $fileType="html";
    }
    else{
      $temp = $value;
      echo "<p>{$value}</p>";
      $fileType = "unknown";
    }

    if(strtolower($_POST["query"]) == strtolower($temp)){
      if($fileType=="php"){
        //header("location:./{$temp}.php");
        header("location:./classes/{$value}");
      }
      elseif($fileType=="html"){
        header("location:./classes/{$temp}.html");
      }
      else{
        header("location:./classes/{$_POST["query"]}");
      }
    }
  }
  $posPHP = $_POST["query"].".php";
  $postHTML = $_POST["query"].".html";
  if(!file_exists($posPHP) && !file_exists($postHTML)){
    header("location:./failedSearch.html");
  }
?>