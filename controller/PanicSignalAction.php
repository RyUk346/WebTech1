<?php
session_start();
require_once '../model/model.php';

  
  if (isset($_POST["submit"])){
    $data['category'] = $_POST['category'];
    $data['volunteer'] = $_POST['volunteer'];
    $data['latitude'] = $_POST['latitude'];
    $data['longitude'] = $_POST['longitude'];
   

    if (isset($_POST['display'])) {
            $data['display'] = 1;
        } else {
            $data['display'] = 0;
        }

        if (setLocationPanSig($data)) {
            echo 'New report successfully registered!!';
            $category='';
            $volunteer='';
            $latitude='';
            $longitude='';

            header("Location: ../view/PanicSignal.php");
            if(isset($_POST["submit"]))  {
                echo 'New report successfully registered!!';
                          }
            
        }

  }
?>