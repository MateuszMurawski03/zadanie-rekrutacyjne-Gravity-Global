<?php 
$jsonFile = "../dataset/users.json";
$json_data = @file_get_contents($jsonFile);
$usersArray = json_decode($json_data, true);

$removeUserId = $_POST['removeButton'];

$userIndex = findUserIndexById($usersArray, $removeUserId);

if ($userIndex !== -1) {
     array_splice($usersArray, $userIndex, 1);
     $updatedJsonData = json_encode($usersArray, JSON_PRETTY_PRINT);
     file_put_contents($jsonFile, $updatedJsonData);
}

function findUserIndexById($usersArray, $removeUserId) {
    foreach ($usersArray as $index => $user) {
        if ($user['id'] == $removeUserId) {
            return $index;
        }
    }
return -1;
}

header("location:../index.php");
?>