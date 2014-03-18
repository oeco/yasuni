<div class="slide" id="slide1" data-slide="1">

    <div class="video">
    <iframe src="//player.vimeo.com/video/86927294?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

  <script type="text/javascript">
    $(document).ready(function() {

    $trigger = $('#en-slide2'),
    opts = {
        offset: '100%'
    };
 
    $('#en-slide2').waypoint(function(event, direction) {
        $trigger.waypoint('destroy');
        $.get('yasuni-en2.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="en-slide2"></div>

</div><!--End Slide 1-->
