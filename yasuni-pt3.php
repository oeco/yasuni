<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5" style="background-position: 0px 0px;">

    <h1 class="title slideno">Biodiversidade</h1>

</div><!--End Slide 3 -->

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#pt-slide4'),
    opts = {
        offset: '100%'
    };
 
    $('#pt-slide4').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-pt4.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="pt-slide4"></div>

