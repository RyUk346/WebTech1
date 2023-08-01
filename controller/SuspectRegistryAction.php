<?php
session_start();
require_once '../model/model.php';

  
  if (isset($_POST["submit"])){
    $data['suspectname'] = $_POST['suspectname'];
    $data['crimetype'] = $_POST['crimetype'];
    $data['age'] = $_POST['age'];
    $data['numberr'] = $_POST['numberr'];
    $data['address'] = $_POST['address'];
   
   

    if (isset($_POST['display'])) {
            $data['display'] = 1;
        } else {
            $data['display'] = 0;
        }

        if (setLocationSuspectRegistry($data)) {
            echo 'New report successfully registered!!';
            $suspectname='';
            $crimetype='';
            $age='';
            $numberr='';
            $address='';
            

            header("Location: ../view/SuspectRegistry.php");
            if(isset($_POST["submit"]))  {
                echo 'New report successfully registered!!';
                          }
            
        }

  }
?>