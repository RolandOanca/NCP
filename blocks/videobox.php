	<div class="container videobox"> 
        <div class="up_container" id="stream_container"></div>
        <script src="https://vdlvry.com/videoboxes/universal_player/player.js"></script>
        <script>new UPManager("<?php echo $video_setup?>",<?php echo json_encode($video_config)?>);</script>
    </div>