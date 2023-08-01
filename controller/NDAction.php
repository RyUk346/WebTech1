<?php
session_start();
require_once '../model/model.php';

  
  if (isset($_POST["submit"])){
    $data['category'] = $_POST['category'];
    $data['details'] = $_POST['details'];
    $data['latitude'] = $_POST['latitude'];
    $data['longitude'] = $_POST['longitude'];
   

    if (isset($_POST['display'])) {
            $data['display'] = 1;
        } else {
            $data['display'] = 0;
        }

        if (setLocationND($data)) {
            echo 'New report successfully registered!!';
            $category='';
            $details='';
            $latitude='';
            $longitude='';

            header("Location: ../view/ND.php");
            if(isset($_POST["submit"]))  {
                echo 'New report successfully registered!!';
                          }
            
        }

  }
?>