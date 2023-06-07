<?php

// Please add your logic here

$json_data = @file_get_contents("./dataset/users.json");

if ($json_data === false){
    echo "users.json file not found";
}
else {
    $users = json_decode($json_data, true);

    echo ("
        <table>
            <caption><h2>Users</h2></caption>
            <tr>
                <th> Name </th>
                <th> Username </th>
                <th> Email </th>
                <th> Address </th>
                <th> Phone </th>
                <th> Company </th>
                <th>  </th>
            </tr>
        ");

    if(count($users) != 0){
        foreach($users as $user){
            echo ("
            <tr>
                <td> ".$user['name']." </td>
                <td> ".$user['username']." </td>
                <td> ".$user['email']." </td>
                <td> ".$user['address']['street'].", ".$user['address']['zipcode']." ".$user['address']['city']." </td>
                <td> ".$user['phone']." </td>
                <td> ".$user['company']['name']." </td>
                <td> <form action='./partials/removeUser.php' method='post'><button type='submit' class='remove' name='removeButton' value='".$user['id']."'>REMOVE USER</button></form> </td>
            </tr>
            ");
        }
    }
    echo "</table>";
}

?>