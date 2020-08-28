<?php
$title = 'wlecome in mywebsite.com';
$descrition = 'we have many more ';
$author = 'Manjit singh';
$lang = 'en-CA';
$icon = 'my_icon.jpg';
public function render
?>

<!DOCTYPE html>
<html lang="<?=$lang; ?>">

<head>
    <meta charset="utf-8">
    <title><?=title; ?>
    </title>
    <meta name="description" value="<?=$description; ?>">
    <link rel="icon" href="<?=$icon; ?>">
    <link rel="stylesheet" href="global.css">
</head>

<body>
    <header>hi header</header>
    <main>content</main>
    <footer>this is footer</footer>

    *-
</body>

</html>