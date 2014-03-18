<div class="slide" id="slide11" data-slide="11" data-stellar-background-ratio="0.5" style="background-position: 0px 0px;">

<div class="wrapper">
    
    <h1 class="title">Petroleum</h1>

</div>

<script type="text/javascript">
    $(document).ready(function() {
    $trigger = $('#en-slide12'),
    opts = {
        offset: '100%'
    };
 
    $('#en-slide12').waypoint(function(event, direction) {
        $trigger.waypoint('remove');
        $.get('yasuni-en12.php', function(data) {
            $('#container').append(data);
            $trigger.waypoint(opts);
        });
    }, opts);
});
</script>

<div id="en-slide12"></div>

</div><!--End Slide 11 -->

