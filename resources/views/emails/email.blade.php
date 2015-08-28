<?php
    //get the date
    $date_time = date("F j, Y, g:i a");
?>

<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
    <body>
        <h2>Info Email</h2>
        <div>
            <p><strong>Name: </strong>{{ $name}}</p>
        </div>
        <div>
            <p><strong>Email: </strong>{{ $email}}</p>
        </div>
        <div>
            <p><strong>Subject: </strong>{{ $subject}}</p>
        </div>
        <div>
            <p><strong>Date: </strong>{{ $date_time}}</p>
        </div>
        <div>
            <h4>Message</h4>
            {{ $mail}}
        </div>
    </body>
</html>