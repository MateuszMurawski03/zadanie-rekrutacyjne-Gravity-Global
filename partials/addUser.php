<?php 
$jsonFile = "../dataset/users.json";
$json_data = @file_get_contents($jsonFile);
$usersArray = json_decode($json_data, true);

$userName = $_POST['newName'];
$userUsername = $_POST['newUsername'];
$userEmail = $_POST['newEmail'];
$userCity = $_POST['newCity'];
$userStreet = $_POST['newStreet'];
$userZipcode = $_POST['newZipcode'];
$userPhone = $_POST['newPhone'];
$userCompanyName = $_POST['newCompanyName'];
$newUserId = generateUniqueId($usersArray);

if (!empty($userName) && !empty($userUsername) && !empty($userEmail) && !empty($userCity) && !empty($userStreet) && !empty($userZipcode) && !empty($userPhone) && !empty($userCompanyName)) {
    if (isUserIdUnique($usersArray, $newUserId)) {

        $newUser = [
            "id" => $newUserId,
            "name" => $userName,
            "username" => $userUsername,
            "email" => $userEmail,
            "address" => [
                "street" => $userStreet,
                "city" => $userCity,
                "zipcode" => $userZipcode
            ],
            "phone" => $userPhone,
            "company" => [
                "name" => $userCompanyName
            ]
        ];

        $usersArray[] = $newUser;

        $updatedJsonData = json_encode($usersArray, JSON_PRETTY_PRINT);

        file_put_contents($jsonFile, $updatedJsonData);
    }
}

function generateUniqueId($usersArray)
{
    $id = 1;
    foreach ($usersArray as $user) {
        if ($user['id'] >= $id) {
            $id = $user['id'] + 1;
        }
    }
    return $id;
}

function isUserIdUnique($usersArray, $newUserId)
{
    foreach ($usersArray as $user) {
        if ($user['id'] === $newUserId) {
            return false;
        }
    }
    return true;
}

header("location:../index.php");
?>