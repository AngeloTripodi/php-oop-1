<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Movie</title>
</head>

<body>

    <?php
    class Movie
    {


        public $title;
        public $year;
        public $coverImage;
        public $actors;

        public function __construct($_title, $_year, $_coverImage, $_actors)
        {
            $this->title = $_title;
            $this->year = $_year;
            $this->coverImage = $_coverImage;
            $this->actors = $_actors;
        }

        public function getActors()
        {
            return $this->actors;
        }
    }

    $Spiderman = new Movie('Spiderman', 2002, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.ebay.it%2Fitm%2F294993298977&psig=AOvVaw0p-qTb4e9nqSRih2f4uHfz&ust=1675526611359000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCPC23JXd-fwCFQAAAAAdAAAAABAV', ['actor_1' => 'Spiderman', 'actor_2' => 'Moglie Spiderman', 'actor_3' => 'Zia Spiderman', 'actor_4' => 'Nonna Spiderman']);
    $Batman = new Movie('Batman', 2022, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.emp-online.it%2Fp%2Fthe-batman---comic-cover%2F518546.html&psig=AOvVaw3Qy30KMXXRmrYI9TeQZW9H&ust=1675526697453000&source=images&cd=vfe&ved=0CAwQjRxqFwoTCICC4L7d-fwCFQAAAAAdAAAAABAE', ['actor_1' => 'Batman', 'actor_2' => 'Moglie Batman', 'actor_3' => 'Zia Batman']);

    $Spiderman->title = 'Spiderman 2';

    ?>

    <pre>
       <?php
        var_dump($Spiderman, $Batman);
        var_dump($Batman->getActors());
        ?>
    </pre>
</body>

</html>