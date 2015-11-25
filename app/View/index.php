<div class="page-container clearfix" id="content" role="main">

    <!-- =========== begin #begin ============= -->
    <div class="feature-section feature-odd make-page-height" id="begin">

        <!-- =========== begin .the-couple-content =========== -->

        <div class="container the-couple-content">
            <h1 class="the-couple-name text-center">Exiftool Gallery</h1><br>
            <!-- begin .row for the couple -->
            <section class="row text-center the-couple-row">

                <div class="col-lg-4">
                    <div class="the-couple-image-holder">
                            <span class="the-couple-mask" aria-hidden="true">
                                <!--this mask background image changes per color specified in the body tag -->
                            </span>
                        <img class="the-couple-image" src="assets/images/logo.jpg" alt="Couple Name"/>
                    </div>
                    <!-- /end .the-couple-image-holder -->
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6 the-couple-text-wrapper">
                    <h1 class="the-couple-name">Images & Metadatas</h1>
                    <!-- uses the-couple-name fittext.js -->
                    <p class="text-uppercase the-couple-statement">December 15, 2015</p>
                    <!-- uses the-couple-state fittext.js -->
                </div>
                <!-- /end col-lg-6 -->
            </section>
            <!-- /end .row for the couple -->
        </div>
        <!-- /end .container.the-couple-content -->
    </div>
    <!-- =========== /end #begin ============= -->

    <!-- ========== divider EVEN ============== -->
    <div class="divider divider-even" aria-hidden="true">
        <!-- divider element EVEN -->
    </div>

    <!-- =========== begin #about ============= -->
    <section class="feature-section make-page-height feature-even" id="about">
        <div class="container vertical-align-middle">
            <h2 class="theme-title">About Images</h2>

            <div class="row break-480px text-center">
                <ul class="row row-masonry simple-gallery pop-gallery">
                    <?php
                    foreach($images as $image){

                        //exec("exiftool -a -g -json " . $current["url"]."> data/".$current["name"].".json", $my_array);

                        //echo \App\Controller\ImagesController::render('imageDetails', compact('image'));

                        echo '<li class="col-xs-10 col-md-8">' .
                            '<a href="#"' .
                            'data-slide="slide"' .
                            'data-target="#details"'.
                            'class="color-inherit-link"' .
                            'role="button" aria-controls="#details"'.
                            'aria-expanded="false">' .
                            '<div class="center-block col-sm-12 clickedimage">
                                    <img id="'.$image.'" style="width:400px;height:150px" src=' . $image . ' alt=' . $image . ' class="img-circle img-responsive">
                                   <!-- <div>' . $image . '</div>-->
                                </div>' .
                            '</a></li>';
                    }


                    ?>
                </ul>
            </div>
            <!-- /end .row -->
        </div>
        <!-- /end .container this section-->
    </section>


    <!-- =========== /end #about ============= -->

    <!-- ========== divider ODD ============== -->
    <div class="divider divider-odd">
        <!-- divider element ODD -->
    </div>

    <!-- =========== begin #our-story ============= -->
    <section class="feature-section feature-odd" id="upload">
        <div class="container">
            <h2 class="theme-title">New Image</h2>
<form action="app/Controller/upload.php" method="post" enctype="multipart/form-data">
<input id="input-21" type="file" accept="image/*" class="file" name="fileToUpload">
</form>
<script>
$(document).on('ready', function() {
    $("#input-21").fileinput({
        previewFileType: "image",
        browseClass: "btn btn-success",
        browseLabel: "Pick Image",
        removeClass: "btn btn-danger",
        removeLabel: "Delete",
        removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
        uploadClass: "btn btn-info upload",
        uploadLabel: "Upload",
        uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
    });
$(".fileinput-upload").click(function(){
	alert("click")
	$("#input-21").addClass("file-loading");
	$("#input-21").removeClass("file");

});
});
</script>

            <form action="app/Controller/upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
            <div id="form"></div>
        </div>
        <!-- /end .container this section-->
    </section>
    <!-- ========== /end #our-story ============== -->

    <!-- ========== divider EVEN ============== -->
    <div class="divider divider-even" aria-hidden="true">
        <!-- divider element EVEN -->
    </div>

    <!-- ========== begin #gallery ============== -->
    <section class="feature-section feature-even" id="gallery">
        <div class="container">
            <h2 class="theme-title">Photos Gallery</h2>
            <!-- <ul class="sort">
                 <li class="active"><a href="#" data-filter="*">All</a></li>
                 <li><a href="#" data-filter=".travel">Travel</a></li>
                 <li><a href="#" data-filter=".misc">Misc.</a></li>
                 <li><a href="#" data-filter=".couple">Couple</a></li>
                 <li><a href="#" data-filter=".wedding">Wedding</a></li>
             </ul>-->
            <ul class="row row-masonry simple-gallery pop-gallery">
                <li class="grid-sizer"></li>
                <!-- required for fluid masonry layout -->
                <li class="gutter-sizer"></li>
                <!-- required for fluid masonry layout -->
                <?php
                foreach($images as $image){
                    echo '<li class="img-treatment">' .
                        '<a class="pop-gallery-img popup-indicator" href=' . $image .
                        '><img src=' . $image . ' alt=' . $image . ' />' .
                        '</a> ' .
                        '</li>';
                }
                ?>
                <!-- /end .row.row-masonry simple-gallery pop-gallery -->
            </ul>
        </div>
        <!-- /end .container this section-->
    </section>
    <!-- ========== /end #gallery ============== -->

    <!-- ========== divider ODD ============== -->
    <div class="divider divider-odd" aria-hidden="true">
        <!-- divider element ODD -->
    </div>

    <!-- ========== begin #gifts ============== -->
    <section class="feature-section make-page-height feature-odd text-center" id="gifts">
        <div class="container vertical-align-middle">
            <h2 class="theme-title">Gift Registries</h2>

            <p class="feature-section-intro-text">Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                Donec eu libero sit amet quam egestas semper. </p>
            <ul class="wedding-registry">
                <!-- put the urls to each registry, remove the ones you don't want, add ones you do want -->
                <li><a href="http://www.potterybarn.com/registry/"><img
                            src="assets/couple-images/registry-logos/pottery-barn.png" alt="pottery barn"/></a></li>
                <li><a href="http://goo.gl/FMxHWr"><img src="assets/couple-images/registry-logos/bed-bath-beyond.png"
                                                        alt="bed bath and beyond"/></a></li>
                <li><a href="http://www.kohls.com/upgrade/gift_registry/kohlsgrw_home.jsp"><img
                            src="assets/couple-images/registry-logos/kohls.png" alt="kohls"/></a></li>
                <li><a href="https://www.amazon.com/gp/wedding/homepage"><img
                            src="assets/couple-images/registry-logos/amazon.png" alt="amazon"/></a></li>
                <li><a href="http://www.crateandbarrel.com/gift-registry/"><img
                            src="assets/couple-images/registry-logos/crate-barrel.png" alt="crate and barrel"/></a></li>
            </ul>
        </div>
        <!-- /end .container this section-->
    </section>
    <!-- ========== /end #gifts ============== -->

    <!-- ========== divider EVEN ============== -->
    <div class="divider divider-even" aria-hidden="true">
        <!-- divider element EVEN -->
    </div>

    <!-- ========== begin #rsvp ============== -->
    <section class="feature-section make-page-height feature-even" id="rsvp">
        <div class="container vertical-align-middle text-center">
            <h3 class="theme-title">Celebrate with Us</h3>

            <p class="feature-section-intro-text">
                Katherine and Christopher request the pleasure of your company at the celebration of our union,
                Saturday, the fourteenth of November, two thousand and sixteen at seven o’clock in the evening.
            </p>

            <div class="row ceremony-reception-row">
                <div class="col-sm-4 col-sm-push-4">
                    <p>
                        <!-- begin .rsvp-button :: it opens the #rsvp-panel -->
                        <a href="#"
                           data-slide="slide"
                           data-target="#rsvp-panel"
                           class="rsvp-button"
                           role="button"
                           aria-expanded="false"
                        >
                            <!-- spans required for the fade effect -->
                            <span></span>
                            <span></span>
                        </a>
                        <!-- /end .rsvp-button -->
                    </p>
                </div>
                <!-- /end .col-sm-4 -->
                <div class="col-sm-4 col-sm-pull-4 ceremony-col">
                    <h3 class="no-margin-bottom">
                        Ceremony
                    </h3>

                    <p>
                        <strong>Humanist Hall</strong><br>
                        2016 411 28th Street<br>
                        Oakland, CA 94609
                        <br>
                    </p>
                </div>
                <!-- /end .col-sm-4 -->
                <div class="col-sm-4 reception-col">
                    <h3 class="no-margin-bottom">
                        Reception
                    </h3>

                    <p>
                        <strong>Just Dance Ballroom</strong><br>
                        2500 Embarcadero<br>
                        Oakland, CA 94606
                    </p>
                </div>
                <!-- /end .col-sm-4 -->
            </div>
            <!-- /end .row -->
        </div>
        <!-- /end .container for #rsvp-->
    </section>
    <!-- ========== /end #rsvp ============== -->

    <!-- ========== divider ODD ============== -->
    <div class="divider divider-odd" aria-hidden="true">
        <!-- divider element ODD -->
    </div>

    <!-- ========== begin #contact ============== -->
    <section class="feature-section feature-odd make-page-height" id="contact">
        <div class="container vertical-align-middle">
            <h3 class="theme-title">Get in Touch</h3>

            <p class="feature-section-intro-text">Please contact us at 727-555-3022 or email us at <a
                    href="mailto:emailgoeshere@domain.com" class="link-underline color-inherit-link">kc@gmail.com</a>
            </p>
            <ul class="list-inline text-center color-inherit-link social-contact-list">
                <li><a href="#" class="ti ti-twitter"><span class="sr-only">Follow Us on Twitter</span></a></li>
                <li><a href="#" class="ti ti-facebook"><span class="sr-only">Follow Us on Facebook</span></a></li>
                <li><a href="#" class="ti ti-instagram"><span class="sr-only">Follow Us on Instagram</span></a></li>
                <li><a href="#" class="ti ti-pinterest"><span class="sr-only">Follow Us on Pinterest</span></a></li>
            </ul>
        </div>
        <!-- /end .container for #contact-->
    </section>
    <!-- ========== end #contact ============== -->


    <!-- ========== divider-last-even LAST following a .feature-odd ============== -->
    <div class="divider divider-last-even" aria-hidden="true">
        <!-- divider element LAST -->
    </div>


</div>
<!-- =========================== /end .page-container =========================== -->


<!-- ================== begin slide-panels containing the content for about for each partner and the RSVP form  ================= -->

<div class="slide-panel-parent">
    <!-- .slide-panel-parent goes around all the panels -->

    <!-- ========== BEGIN MAP ONLY CONTENTS ============== -->
    <!-- ===================================================
        Enter the location in the div below exactly as formated
        =================================================== -->
    <div id="location" class="hide">411 28th Street, Oakland, CA 94609-3602</div>
    <!-- ===================================================
        Change the content in the Google Map Info Notice Box :: see below
        =================================================== -->
    <div class="hide">
        <div id="info-content">
            <div id="siteNotice"></div>
            <!-- ========== Change Title ============== -->
            <h3 id="firstHeading" class="theme-title">Ceremony</h3>

            <div id="bodyContent" class="text-center">
                <!-- ========== Change Paragraph content INCLUDING THE LINK map url ============== -->
                <p>
                    Saturday, November 14, 2016 at 7 pm at Humanist Hall 2016 411 28th Street, Oakland, CA 94609.
                </p>

                <p>
                    <a class="btn btn-sm btn-primary" href="https://goo.gl/maps/ZCV0P" target="_blank"
                       title="Google Maps opens in a new tab/window">Directions/Map</a>
                </p>
            </div>
            <!-- /end #bodyContent the id used by Google Maps -->
        </div>
        <!-- /end #info-content -->
    </div>
    <!-- /end .hide -->
    <!-- ========== /end #Info Notice box ============== -->
    <!-- ========== END MAP ONLY CONTENTS ============== -->


    <!-- ========== begin #rsvp-panel containing the form (contents for map in the html above) ============== -->
    <div class="slide-panel" id="rsvp-panel">
        <a href="#" class="close ti ti-close">
            <!--themify icon font for close icon -->
        </a>

        <div class="container">
            <h3 class="theme-title">Join Us...</h3>

            <div id="spinner">
                <!-- this loads when the form is validated and submitted -->
            </div>
            <div id="success">
                <!-- this content is written via the php script upon success -->
            </div>
            <div id="error">
                <!-- this content is written via the php script upon error -->
            </div>
            <form id="rsvpform" name="rsvpform" method="post" novalidate>
                <fieldset>
                    <legend class="sr-only">RSVP Form</legend>
                    <div class="row break-480px">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="name">Name
                                    <span class="required ti ti-shine ">
                                    </span>
                                </label>
                                <input type="text" name="name" class="form-control form-control-lg" id="name"
                                       placeholder="your first and last name" value="" required>
                            </div>
                            <!-- /end .form-group -->
                        </div>
                        <!-- /end .col-xs-6 nested -->
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="email">Email
                                    <span class="required ti ti-shine ">
                                    </span>
                                </label>
                                <input type="email" id="email" class="form-control form-control-lg" name="email"
                                       placeholder="enter your email" value="" required>
                            </div>
                            <!-- /end .form-group -->
                        </div>
                        <!-- /end .col-xs-6 nested -->
                    </div>
                    <!-- /end .row nested -->
                    <div class="row break-480px">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="guests">Guests
                                    <span class="required ti ti-shine ">
                                    </span>
                                </label>
                                <input type="number" id="guests" class="form-control form-control-lg" name="guests"
                                       placeholder="how many guests?" value="" required>
                            </div>
                            <!-- /end .form-group -->
                        </div>
                        <!-- /end .col-xs-3 nested -->
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label for="attending">Attending <span class="required ti ti-shine "></span></label>
                                <select class="form-control form-control-lg" name="attending" id="attending"
                                        required="">
                                    <option value="">Event(s)</option>
                                    <option value="Both Ceremony & Reception">Wedding Ceremony & Reception</option>
                                    <option value="Wedding Ceremony only">Wedding Ceremony</option>
                                    <option value="Wedding Reception only">Wedding Reception</option>
                                </select>
                            </div>
                            <!-- /end .form-group -->
                        </div>
                        <!-- /end .col-xs-4 nested -->
                        <div class="col-xs-5">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control form-control-lg" name="phone" id="phone"
                                       placeholder="your phone number" value="">
                            </div>
                            <!-- /end .form-group -->
                        </div>
                        <!-- /end .col-xs-5 nested -->
                    </div>
                    <!-- /end .row nested -->
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control form-control-lg"
                                  placeholder="Message goes here (optional)"></textarea>
                    </div>
                    <!-- /end .form-group -->
                    <div class="form-group">
                        <label for="answer">The color of the sky is... (lowercase answer)
                            <span class="required ti ti-shine ">
                            </span>
                        </label>
                        <input type="text" class="form-control form-control-lg" name="answer" id="answer"
                               placeholder="answer" value="" required>
                    </div>
                    <!-- /end .form-group -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">RSVP</button>
                </fieldset>
            </form>
        </div>
        <!--/ end .container -->
        <!-- MAP GOES HERE -->
        <div id="map-container">
            <!-- map goes here -->
        </div>
        <!-- slide back to the top of the panel  -->
        <a href="#" class="go-to-top scroll-panel-top"><span class="ti ti-arrow-up"></span></a>
    </div>
    <!-- ========== /end #rsvp-panel ============== -->

</div>
<!-- /end .slide-down-parent -->
<!-- =============================== /end all slide-panels  ================================== -->


<!-- =============================== responsive viewports  ================================== -->
<div class="iframe-wrapper" id="iframe-load">
    <a href="#" class="close ti ti-close">
        <!--themify icon font for close icon -->
    </a>

    <div id="iframe-content"></div>
</div>
<!-- /end .iframe-wrapper -->


<!-- .go-to-top  -->
<a href="#begin" class="go-to-top scroll" id="document-top">
    <span class="ti ti-arrow-up"></span>
</a>
<!-- /end .go-to-top -->
<div id="details" class="slide-panel">

</div>
