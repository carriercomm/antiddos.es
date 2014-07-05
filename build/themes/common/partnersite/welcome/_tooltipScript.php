<script type="text/javascript">
$(document).ready(function() {
  $(".question").each(function() {
    $(this).simpletip({
    content: $(this).attr('tip'),
    position: 'top',
    offset: [0,-5]
    })});
});
</script>
