<div class="slide" id="slide9" data-slide="9" data-stellar-background-ratio="0.2" style="background-position: 0px 0px;">

<div class="wrapper">
    
    <h1 class="title">Carreteras</h1>

</div>

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#es-slide10'),
    opts = {
        offset: '100%'
    };
 
    $('#es-slide10').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-es10.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="es-slide10"></div>

</div><!--End Slide 9-->