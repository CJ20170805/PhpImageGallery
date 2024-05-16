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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/luminous-basic.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/luminous-lightbox/2.0.1/Luminous.min.js"></script>
 
</head>

<body>
    <!-- Remember that alternative syntax is good and html inside php is bad -->

    <div class="wrapper">
        <h1 class="title"><?php echo $config['gallery_name']; ?></h1>
        <div class="img-list">
            <?php foreach ($config['local_images'] as $image) : ?>
                <div class="img-item">
                    <h2><?php echo $image; ?></h2>
                    <a href="images/<?php echo $image; ?>.jpg">
                    <img src="images/<?php echo $image; ?>_thumbnail.jpg" alt="<?php echo $image; ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
<script>
   new LuminousGallery(document.querySelectorAll(".img-item a"));
</script>


</html>