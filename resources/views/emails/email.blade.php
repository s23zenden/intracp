<?php
    //get the first name
    $name = Input::get('name');
    $email = Input::get ('email');
    $subject = Input::get ('subject');
    $message = Input::get ('message');
    $date_time = date("F j, Y, g:i a");
    $userIpAddress = Request::getClientIp();
?>

<h1>We been contacted by.... </h1>

<p>
     Name: {{$name}}
     Email address: {{$email}}
     Subject: {{$subject}}
     Message: {{$message}}
     Date: {{$date_time}}
     User IP address: {{$userIpAddress}}

</p>