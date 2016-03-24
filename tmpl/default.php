<?php
// No direct access
defined('_JEXEC') or die;
$numberOfBoxes = $params->get('numberOfBoxes', '');
$span = "span".(12/$numberOfBoxes);
?>

<div class="row-fluid boxes">
  <div class="<?=$span?>">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-1-title', '')?></h3>
        <p><?=$params->get('box-1-content', '')?></p>
        <a href="<?=$params->get('box-1-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-1-link-label', '')?></a>
      </div>
    </div>
  </div>
  <?php if($numberOfBoxes > 1 ): ?>
  <div class="<?=$span?>">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-2-title', '')?></h3>
        <p><?=$params->get('box-2-content', '')?></p>
        <a href="<?=$params->get('box-2-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-2-link-label', '')?></a>
      </div>
    </div>
  </div>
  <?php endif;  ?>
  <?php if($numberOfBoxes > 2 ): ?>
  <div class="<?=$span?>">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-3-title', '')?></h3>
        <p><?=$params->get('box-3-content', '')?></p>
        <a href="<?=$params->get('box-3-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-3-link-label', '')?></a>
      </div>
    </div>
  </div>
  <?php endif;  ?>
</div>
