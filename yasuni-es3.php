<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5" style="background-position: 0px 0px;">

    <h1 class="title slideno">Biodiversidad</h1>

</div><!--End Slide 3 -->

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#es-slide4'),
    opts = {
        offset: '100%'
    };
 
    $('#es-slide4').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-es4.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="es-slide4"></div>

