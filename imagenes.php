<?php
require_once 'vendor/autoload.php';

use Intervention\Image\ImageManager;

// create image manager with desired driver
$manager = new ImageManager(
    new Intervention\Image\Drivers\Gd\Driver()
);

// open an image file
$image = $manager->read('imagenes/foto.jpg');

// resize image instance
$image->resize(height: 300, width:600);

// insert a watermark
//$image->place('images/watermark.png');

// encode edited image
$encoded = $image->toJpg();

// save encoded image
$encoded->save('imagenes/example.jpg');