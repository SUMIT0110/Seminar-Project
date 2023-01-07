<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   
      $Name = $_POST['Name'];
      $People = $_POST['People'];
      $date = $_POST['date'];
      $Message = $_POST['Message'];
     

      $request = " insert into book_form(Name, People, date, Message) values('$Name','$People','$date','$Message') ";
      mysqli_query($connection, $request);

      header('location:Home.php'); 

   

?>