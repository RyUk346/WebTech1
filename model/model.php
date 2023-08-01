<?php 

require_once 'db_connect.php';

function registerUser($data){
    $conn = db_conn();
    $selectQuery = "INSERT into reg (Name, Email, Username, Password, Gender, dob, ppic_abs_path)
VALUES (:name, :email, :username, :password, :gender, :dob, :ppic_abs_path)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
            ':ppic_abs_path' => $data['ppic_abs_path']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function registerCrime($data){
    $conn = db_conn();
    $selectQuery = "INSERT into GeneralDiaryCrime (details, location)
VALUES (:details, :location)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':details' => $data['details'],
            ':location' => $data['location']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function registerAbuse($data){
    $conn = db_conn();
    $selectQuery = "INSERT into GeneralDiaryCFAbuse (category, details, location)
VALUES (:category, :details, :location)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':category' => $data['category'],
            ':details' => $data['details'],
            ':location' => $data['location']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}





function setLocation($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO GeneralDiaryCrime (name, details, latitude,longitude) VALUES(:name, :details, :latitude, :longitude)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':details' => $data['details'],
            ':latitude' => $data['latitude'],
            ':longitude' => $data['longitude']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function setLocationCFA($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO generaldiarycfabuse(category, details, latitude,longitude) VALUES(:category, :details, :latitude, :longitude)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':category' => $data['category'],
            ':details' => $data['details'],
            ':latitude' => $data['latitude'],
            ':longitude' => $data['longitude']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function setLocationND($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO generaldiarynd(category, details, latitude,longitude) VALUES(:category, :details, :latitude, :longitude)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':category' => $data['category'],
            ':details' => $data['details'],
            ':latitude' => $data['latitude'],
            ':longitude' => $data['longitude']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function setLocationCI($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO generaldiaryci(category, details, latitude,longitude) VALUES(:category, :details, :latitude, :longitude)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':category' => $data['category'],
            ':details' => $data['details'],
            ':latitude' => $data['latitude'],
            ':longitude' => $data['longitude']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function setLocationECS($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO generaldiaryecs(category, details, latitude, longitude) VALUES(:category, :details, :latitude, :longitude)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':category' => $data['category'],
            ':details' => $data['details'],
            ':latitude' => $data['latitude'],
            ':longitude' => $data['longitude']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function setLocationPanSig($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO generaldiarypansig(category, volunteer, latitude, longitude) VALUES(:category, :volunteer, :latitude, :longitude)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':category' => $data['category'],
            ':volunteer' => $data['volunteer'],
            ':latitude' => $data['latitude'],
            ':longitude' => $data['longitude']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function setLocationSuspectRegistry($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO generaldiarysusreg(suspectname, crimetype, age, numberr, address) VALUES(:suspectname, :crimetype, :age, :numberr, :address)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':suspectname' => $data['suspectname'],
            ':crimetype' => $data['crimetype'],
            ':age'      =>$data['age'],
            ':numberr'  =>$data['numberr'],
            ':address' => $data['address']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function setLocationResSer($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO generaldiaryresser(rescue, volunteer, location, latitude, longitude) VALUES(:rescue, :volunteer, :location, :latitude, :longitude)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':rescue' => $data['rescue'],
            ':volunteer' => $data['volunteer'],
            ':location'      =>$data['location'],
            ':latitude'  =>$data['latitude'],
            ':longitude' => $data['longitude']

        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

   
function getUser($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM reg where Username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}


function getUserByEmail($email){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM reg where Email = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}


function updateUser($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE reg set Name = ?, Email = ?, Gender = ?, dob = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['gender'], $data['dob'], $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function updatePassword($username, $newPassword){
    $conn = db_conn();
    $selectQuery = "UPDATE reg set Password = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $newPassword, $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function updateProfilePictureAbsPath($username, $absPath){
    $conn = db_conn();
    $selectQuery = "UPDATE reg set ppic_abs_path = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $absPath, $username
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}