<?php
session_start();
require_once '../model/model.php';

  
  if (isset($_POST["submit"])){
    $data['rescue'] = $_POST['rescue'];
    $data['volunteer'] = $_POST['volunteer'];
    $data['location'] = $_POST['location'];
    $data['latitude'] = $_POST['latitude'];
    $data['longitude'] = $_POST['longitude'];
   

    if (isset($_POST['display'])) {
            $data['display'] = 1;
        } else {
            $data['display'] = 0;
        }

        if (setLocationResSer($data)) {
            echo 'New report successfully registered!!';
            $rescue='';
            $volunteer='';
            $location='';
            $latitude='';
            $longitude='';

            header("Location: ../view/RescueService.php");
            if(isset($_POST["submit"]))  {
                echo 'New report successfully registered!!';
                          }
            
        }

  }
?>