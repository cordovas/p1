<?php
$quotes = [
    1 => 'Outside is pure energy and colorless substance. All of the rest happens through the mechanism of our senses. Our eyes see just a small fraction of the light in the world. It is a trick to make a colored world, which does not exist outside of human beings. - Albert Hofmann ',

    2 => 'The price of anything is the amount of life you exchange for it. -Henry David Thoreau',

    3 => 'There have been so many times I have seen a man wanting to weep but instead beat his heart until it was unconscious. — Nayyirah Waheed'
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hello World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>
    <h1>Steve Cordova</h1>
    <img src="images/0.jpeg" alt="">
    <h2> About Me </h2>
    <p>My name is Steve and I'm from Newark, NJ. I'm currently a UX designer at Audible. I'm interested in doing more design with code and thought this was a good first step. I'm excited about the class and excited to work with all of you!</p>
    <h2>Random Quote</h2>
    <blockquote><?php echo $quotes[rand(1,3)];?></blockquote>
    
</body>
</html>

