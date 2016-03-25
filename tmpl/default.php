<?php
// No direct access
defined('_JEXEC') or die;
$numberOfBoxes = $params->get('numberOfBoxes', '');
$layout = $params->get('layout', '');
if($layout == "horizontal")
  $span = "span".(12/$numberOfBoxes);
else{
    $span = "span12";
    $beforeBox = '<div class="row-fluid">';
    $afterBox = '</div>';
}
?>

<div class="row-fluid boxes">

  <?=$beforeBox?>
  <div class="<?=$span?>">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-1-title', '')?></h3>
        <p><?=$params->get('box-1-content', '')?></p>
        <?php if($params->get('box-1-link-url', '')!=''): ?>
          <a href="<?=$params->get('box-1-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-1-link-label', '')?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?=$afterBox?>

  <?php if($numberOfBoxes > 1 ): ?>
  <?=$beforeBox?>
  <div class="<?=$span?>">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-2-title', '')?></h3>
        <p><?=$params->get('box-2-content', '')?></p>
        <?php if($params->get('box-2-link-url', '')!=''): ?>
          <a href="<?=$params->get('box-2-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-2-link-label', '')?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?=$afterBox?>
  <?php endif;  ?>

  <?php if($numberOfBoxes > 2 ): ?>
  <?=$beforeBox?>
  <div class="<?=$span?>">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-3-title', '')?></h3>
        <p><?=$params->get('box-3-content', '')?></p>
        <?php if($params->get('box-3-link-url', '')!=''): ?>
          <a href="<?=$params->get('box-3-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-3-link-label', '')?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?=$afterBox?>
  <?php endif;  ?>

</div>
