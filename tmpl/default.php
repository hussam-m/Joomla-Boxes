<?php
// No direct access
defined('_JEXEC') or die;?>
<?php echo $hello; ?>
<h1>Testing Boxes</h1>

<div class="row-fluid boxes">
  <div class="span4">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-1-title', '')?></h3>
        <p><?=$params->get('box-1-content', '')?></p>
        <a href="<?=$params->get('box-1-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-1-link-label', '')?></a>
      </div>
    </div>
  </div>
  <div class="span4">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-2-title', '')?></h3>
        <p><?=$params->get('box-2-content', '')?></p>
        <a href="<?=$params->get('box-2-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-2-link-label', '')?></a>
      </div>
    </div>
  </div>
  <div class="span4">
    <div class="thumbnail">
      <div class="caption">
        <h3><?=$params->get('box-3-title', '')?></h3>
        <p><?=$params->get('box-3-content', '')?></p>
        <a href="<?=$params->get('box-3-link-url', '')?>" class="btn btn-primary" role="button"><?=$params->get('box-3-link-label', '')?></a>
      </div>
    </div>
  </div>
</div>
