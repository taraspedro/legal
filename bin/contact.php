 <?php
   if(empty($_POST['name'])   ||    
   empty($_POST['email'])  ||
   empty($_POST['message']))    
  {     
       echo "No arguments Provided!";   return false;    
  } 
     
  $name = $_POST['name']; 
  $email_address = $_POST['email']; 
  $message = $_POST['message'];      
 
 // create email body and send it    
 $to = 'tpetryk@ukr.net, tpetryk3@gmail.com'; 
 // put your email 
 $email_subject = "Джміль отримав повідомлення від:  $name"; $email_body = "You have received a new message. \n\n".                 
                   " Here are the details:\n \nName: $name \n ".                  
                   "Email: $email_address\n Message: \n $message"; 
 $headers = "From: LvivExpert\n"; 
 $headers .= "Reply-To: $email_address";     
 
 mail($to,$email_subject,$email_body,$headers); return true;    
?>