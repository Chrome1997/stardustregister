<?php 
$connn = pg_connect("host=192.168.1.195 dbname=FFAccount user=postgres password=nanix1997 port=5432"); 
$login = isset($_POST['login']) ? $_POST['login'] : ''; 
$passs = isset($_POST['passs']) ? $_POST['passs'] : ''; 
$passcript = md5 ($passs);
$Error = 0;
$login_username_check = pg_query("SELECT username FROM accounts WHERE username='$login'"); 
$username_check = pg_num_rows($login_username_check);
if (empty($login) || empty($passs)) {
    echo "login or Pass enpty.";  $Error=1;
    $find_empty = array($login,$passs);
    $i=0;
    }
	
elseif (($username_check > 0)){ 
    echo "<center><h1>Please correct the following errors: <br />"; 
      if ($username_check > 0){ 
        echo "Your login has already been used in our database!<br /></center></h1>"; 
         $Error=1;
    } 
}
elseif ($passs != $passs) {
    echo "<center><h1>The passwords you entered are not identical. <br>Enter the same password in the 2 fields.</center></h1>";  $Error=1;
}
if ($Error!=1){
$id_last = pg_query ("SELECT id FROM accounts ORDER BY id DESC");
$id_result = pg_fetch_array ($id_last);
$id_last = $id_result["id"] +1 ;
//echo "$id_last";
$sql = pg_query("INSERT INTO accounts (id,username,password) VALUES ('$id_last','$login','$passs')");
$connn = pg_connect("host=192.168.1.195 dbname=FFMember user=postgres password=nanix1997 port=5432");
$sql2 = pg_query ("INSERT INTO tb_user (mid,password,pwd) VALUES ('$login','$passs','$passcript')");
if ($sql == TRUE)
{
	echo"sucess!";
}
else
{
	echo"Failed";
}
}
?>