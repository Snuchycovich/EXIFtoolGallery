<?php
/**
 * Created by PhpStorm.
 * User: lahbib
 * Date: 17/11/2015
 * Time: 22:53
 */

require_once("../Controller/Flickr.php");
use App\Controller\Flickr;

        $Flickr = new Flickr('e9d736c6e88d3848b053cf70aa883080');
        $data = $Flickr->search(implode(" ",$_POST["q"]));
echo '<div class="row break-480px text-center"><ul class="row row-masonry simple-gallery pop-gallery">';
$images = $data['photos']['photo'];
require_once("gallery.php");
      /*  foreach ($data['photos']['photo'] as $photo) {
            /*
             * https://www.flickr.com/photos/{user-id}/{photo-id} - individual photo

                        echo '<li class="col-xs-10 col-md-8">' .
                            '<a href="https://www.flickr.com/photos/' .$photo["owner"]. '/' .$photo["id"]. '" target="_blank"><img class="img-circle img-responsive" src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '_t.jpg"></a>'.
                        '</li>';





        }

echo'</ul></div>';*/