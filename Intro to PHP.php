<?php

/*******w******** 
    
    Name: Jiale Cao
    Date: May 15
    Description: Assignment 1

 ****************/

$config = [

    'gallery_name' => 'Gary Gallery',

    'unsplash_categories' => ['Film', 'Archival', 'Animals', 'People', 'Spirituality', 'Sports'],

    'local_images' => ['brock-wegner', 'bruno-van-der-kraan', 'lala-azizli', 'tomas-malik'],

    'images-info' => [
        'brock-wegner' => ['Brock Wegner', 'https://unsplash.com/@isthatbrock'],
        'bruno-van-der-kraan' => ['Bruno van der Kraan', 'https://unsplash.com/@brunovdkraan'],
        'lala-azizli' => ['Lala Azizli', 'https://unsplash.com/@lazizli'],
        'tomas-malik' => ['Tomas Malik', 'https://unsplash.com/@malcoo']
    ]

];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Assignment 1</title>
</head>

<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->

    <div class="wrapper">
        <h1 class="title"><?php echo $config['gallery_name']; ?></h1>
        <div class="img-list">
            <?php foreach ($config['unsplash_categories'] as $category) : ?>
                <div class="img-item">
                    <h2><?php echo $category; ?></h2>
                    <img src="https://source.unsplash.com/300x200/?<?php echo $category; ?>" alt="<?php echo $category; ?> image">
                </div>
            <?php endforeach; ?>
        </div>
        <h1 class="title"><?php echo count($config['local_images']); ?> Large Images</h1>
        <div class="local-img-list">
            <?php foreach ($config['local_images'] as $image) : ?>
                <div>
                    <img src="images/<?php echo $image; ?>.jpg" alt="<?php echo $image; ?>">
                    <?php
                    $photographer_info = $config['images-info'][$image];
                    ?>
                    <h2><a href="<?php echo $photographer_info[1]; ?>"><?php echo $photographer_info[0]; ?></a></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>