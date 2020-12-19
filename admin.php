<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Welcome To Admin Page </h1>
    <table border='2'>
    <tr>
    <th>Username</th>
    <th>Password</th>
    <th>Role</th>
    <th>Delete</th>
    </tr>

    <?php
    session_start();
    if(isset($_POST['delete'])){
        $key1=$_POST['key'];
       unset($_SESSION['multi'][$key1]);
    }
    if(isset($_POST["delete1"])){
        $key2=$_POST["key"];
        unset($_SESSION['multi'][$key2]);
    }
    
    foreach($_SESSION['multi'] as $key =>$value){
        echo "<tr>";
        echo "<td>{$value['name']}</td>";
        echo "<td>{$value['pass']}</td>";
        echo "<td>{$value['role']}</td>";
        echo "<td><a href='delete.php?key=$key'>delete</a></td>";
        echo "<td><form method='post'>
         <input type='text' name='key'>
         <input type='submit' name='delete' value='Delete2'>
        </form>
        </td>";
        echo "<td><form method='post'>
        <input type='hidden' name='key' value='$key'>
        <input type='submit' name='delete1' value='Delete3'>
       </form>
       </td>";

    }
    $_SESSION["user"]=rand();
    
    ?>
</body>
</html>