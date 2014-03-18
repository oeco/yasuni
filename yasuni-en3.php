<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5" style="background-position: 0px 0px;">

    <h1 class="title slideno">Biodiversity</h1>

</div><!--End Slide 3 -->

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#en-slide4'),
    opts = {
        offset: '100%'
    };
 
    $('#en-slide4').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-en4.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="en-slide4"></div>

