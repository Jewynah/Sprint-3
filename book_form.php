<?php

   $connection = mysqli_connect('localhost','root','','bookdb');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $guests = $_POST['guests'];
      $cottage = $_POST['cottage'];
      $date = $_POST['date'];

      $request = " insert into book_form(name, phone, guests, cottage, date) values('$name','$phone','$guests','$cottage','$date')";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?> 