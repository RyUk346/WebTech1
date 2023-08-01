<?php
session_start();
require_once '../model/model.php';

  
  if (isset($_POST["submit"])){
    $data['name'] = $_POST['name'];
    $data['details'] = $_POST['details'];
    $data['latitude'] = $_POST['latitude'];
    $data['longitude'] = $_POST['longitude'];
   

    if (isset($_POST['display'])) {
            $data['display'] = 1;
        } else {
            $data['display'] = 0;
        }

        if (setLocation($data)) {
            echo 'New report successfully registered!!';
            $name='';
            $details='';
            $latitude='';
            $longitude='';

            header("Location: ../view/Crime.php");
            if(isset($_POST["submit"]))  {
                echo 'New report successfully registered!!';
                          }
            
        }

  }
?>