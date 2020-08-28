<?php
/**
 * Class WebPAge is used to output the HTML\CSS page.
 */
class Webpage
{
    public $title = 'Welcome to ElectricScooters.com';
    public $description = 'Electric Scooters.com has the widest collections of scooters 
  and bicycles ,new ,used in Montreal';
    public $author = 'Jayesh Uttam';
    public $lang = 'en-CA';
    public $icon = 'my-icon.jpg';
    public $css = 'css\styless.css';
    /// public $content = '<h2>Welcome to Electric scooters.com </h2>';
    public $content = '';

    /**
     * the constructor.
     */
    public function __construct()
    {
    }

    public function render()
    {
        ?>
<!DOCTYpe html>
<html lang="<?=$this->lang; ?>">

<head>
    <meta charset="utf-8">
    <title><?=$this->title; ?>
    </title>
    <meta name='description' value="<?=$this->description; ?>">
    <meta name="author" value="<?=$this->author; ?>">
    <link rel="icon" href="<?=$this->icon; ?>" type="image/jpeg">
    <link rel="stylesheet" href="css/styless.css">
</head>

<body>
    <header>
        <h1> THIS IS THE HEADER</h1>
    </header>
    <nav>
        <h1>THIS IS THE NAV BAR</h1>
    </nav>
    <main>
        <?="$this->content"; ?>
    </main>
</body>

</html>

<?php
die(); //Stop program
    }
}
