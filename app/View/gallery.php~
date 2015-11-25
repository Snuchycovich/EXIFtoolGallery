        <div class="container">
            <h2>Related images on Flickr</h2>

            <ul>
                <?php
                foreach($images as $photo){
                    echo '<li>' .
                        '<a class="flicker_img" href="https://www.flickr.com/photos/' .$photo["owner"]. '/' .$photo["id"]. '" target="_blank"><img class="file-preview-image" src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '_t.jpg"></a>'.
                        '</li>';
                }
                ?>
</ul>
</div>
