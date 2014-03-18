<div class="slide" id="slide9" data-slide="9" data-stellar-background-ratio="0.2" style="background-position: 0px 0px;">

<div class="wrapper">
    
    <h1 class="title">Roads</h1>

</div>

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#en-slide10'),
    opts = {
        offset: '100%'
    };
 
    $('#en-slide10').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-en10.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="en-slide10"></div>

</div><!--End Slide 9-->