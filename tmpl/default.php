<?php
// No direct access
defined('_JEXEC') or die;
$numberOfBoxes = $params->get('numberOfBoxes', '');
$layout = $params->get('layout', '');
$headerColor = $params->get('header-color', '');
if($layout == "horizontal")
  $span = "span".(12/$numberOfBoxes);
else{
    $span = "span12";
    $beforeBox = '<div class="row-fluid">';
    $afterBox = '</div>';
}
?>
<style>
.boxes h3{
  <?=($headerColor!='')? "color:".$headerColor.";":'';?>
}
</style>

<div class="row-fluid boxes">

  <?=$beforeBox?>
  <div class="<?=$span?>">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-1-title', '')?></h3>
        <p><?=$params->get('box-1-content', '')?></p>
        <?php if($params->get('box-1-link-url', '')!='' && $params->get('box-1-link-type', '')!='none'): ?>
          <?php if($params->get('box-1-link-type', '')=='url'): ?>
            <a href="<?=$params->get('box-1-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-1-link-label', '')?></a>
          <?php elseif($params->get('box-1-link-type', '')=='article'): ?>
            <a href="index.php/component/content/article?id=<?=$params->get('box-1-link-article', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-1-link-label', '')?></a>
          <?php endif; ?>
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
        <?php if($params->get('box-2-link-url', '')!='' && $params->get('box-2-link-type', '')!='none'): ?>
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
        <?php if($params->get('box-3-link-url', '')!='' && $params->get('box-3-link-type', '')!='none'): ?>
          <a href="<?=$params->get('box-3-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-3-link-label', '')?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?=$afterBox?>
  <?php endif;  ?>

</div>
