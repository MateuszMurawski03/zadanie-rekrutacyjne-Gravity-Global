<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend/Full-stack recruitment task</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<header>
    <h1 class='starting-title'>
        Nice to see you! &#128075;
    </h1>
</header>

<main>
    <div class='usersTable'>
        <?php require_once './partials/main.php'; ?>
    </div>

    <div class='addUserForm'>
        <p>
            Add new user:
        </p>
        <form action="./partials/addUser.php" method="post">
            <input class="inputAddUser" type="text" name="newName" placeholder="Name"><br>
            <input class="inputAddUser" type="text" name="newUsername" placeholder="Username"><br>
            <input class="inputAddUser" type="email" name="newEmail" placeholder="Email"><br>
            <input class="inputAddUser" type="text" name="newCity" placeholder="City"><br>
            <input class="inputAddUser" type="text" name="newZipcode" placeholder="Zipcode"><br>
            <input class="inputAddUser" type="text" name="newStreet" placeholder="Street"><br>
            <input class="inputAddUser" type="tel" name="newPhone" placeholder="Phone number"><br>
            <input class="inputAddUser" type="text" name="newCompanyName" placeholder="Company name"><br>
            <input class="submitAddUser" type="submit" name="newSubmit" value="Add">
        </form>
    </div>
</main>

<footer>
    <p>
        Author: <a class='author' href="https://www.linkedin.com/in/mateuszmurawski03/">Mateusz Murawski</a>
    </p>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
