  
<?php
session_start();
if ($_POST['login'] == 'admin' && $_POST['parol'] == 'qwerty') 
{ $_SESSION['auth'] = '1';
} elseif ($_POST['login'] !== 'admin' || $_POST['parol'] !== 'qwerty') {
	print '<br>Wrong user name or password<br>';
}
if (isset($_GET['logout'])) {
	unset($_SESSION['auth']); session_destroy();
}
?>

<html>
<body>
<?php
if (isset($_SESSION['auth'])) {print 'Welcome, <a href="autoriz.php?logout">Exit</a>';
 }
 else {?>
 <form action="autoriz.php" method="post">
    <span>"login"</span><br>
        <input type="text" name="login" required><br>
        <span>"password"</span><br>
        <input type="password" name="parol" required><br>
        <input type="submit" value="submit">
   </form>
 <?php 
       }?>


<br></body></html>

 