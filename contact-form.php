<?php 

       
        // Get all the data from form and store them into a variable 

         $to = 'your-email@email.com';  // Insert a valid email address in where you want to recieve the contact form messages 
         $subject = $_POST['subject'];  // Subject of your form
         $message = $_POST['message']; // Message of your form
         $message .="<br> From:". $_POST['email']; // Email address of sender
         $message .="<br> Phone:". $_POST['contact_no'];  // Contact number of the sender 
         
         
         // Lets do the sending now
         
         $header = $_POST['email'];
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
             // Success message if the mail sent successfully 
             
            echo "Message sent successfully...";
         }else {
             // Failed message if the mail is not sent. 
             
            echo "Message could not be sent...";
         }
         
         