<?php

$videiUrl = 'https://www.youtube.com/watch?v=cQ18EenCoV8';

$convetedUrl = str_replace('watch?v=', 'embed/', $videiUrl);

?>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color:#000 !important;">

            <!-- Modal Header -->

            <div class="ml-5">
                <button type="button" class="modal-title close" data-dismiss="modal"
                    style="border-radius: 50%; color:#fff; height:40px; width:40px; outline:none; border:none;">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">


                <iframe width="760" height="315" src="<?php echo $convetedUrl; ?>" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>

            </div>

        </div>
    </div>
</div>
