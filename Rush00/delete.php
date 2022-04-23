<?php
	session_start();
    $data = unserialize(file_get_contents("./private/passwd.csv"));
    foreach ($data as $key => $user)
	{
        if ($user['login'] == $_SESSION['loggued_on_user'])
        {
            unset($data[$key]);
            unset($_SESSION['loggued_on_user']);
        }
    }
    file_put_contents("./private/passwd.csv", serialize($data));
	header('Location: index.php');
?>