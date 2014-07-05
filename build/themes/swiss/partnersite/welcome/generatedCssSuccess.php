body {
  <?php if($color): ?>
  background-color: <?php echo $color ?>;
  <?php endif ?>
  <?php if($path): ?>
  background-image: url('<?php echo $path ?>');
  <?php endif ?>
}
