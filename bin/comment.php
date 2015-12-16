<?php
$db = mysql_connect("localhost", "root", "");
    mysql_select_db("lenews", $db);
 
    if(!isset($_GET['id'])) {
        $_GET['id'] = 1;
    }
 
   $row = mysql_fetch_array(mysql_query("SELECT title FROM articles WHERE id='{$_POST['modal_info']}'", $db));    
   if(empty($_POST['name'])   ||    
   empty($_POST['email'])  ||
   empty($_POST['message']))    
  {     
       echo "No arguments Provided!";   return false;    
  } 
     
  $name = $_POST['name']; 
  $email_address = $_POST['email']; 
  $message = $_POST['message'];
  $title = implode(',',$row);
  //$title = $_POST['modal_info'];
 
 // create email body and send it    
 $to = 'tpetryk@ukr.net, tpetryk3@gmail.com'; 
 // put your email 
 $email_subject = "Джміль отримав повідомлення від:  $name"; 
 $email_body = "You have received a new message. \n\n".                 
                   " Here are the details:\n \nName: $name \n ".
                   " Here are the details:\n \nTitle: $title \n ".
                   "Email: $email_address\n Message: \n $message"; 
 $headers = "From: LvivExpert\n"; 
 $headers .= "Reply-To: $email_address";     
 
 mail($to,$email_subject,$email_body,$headers); return true;    
?>