<?php  echo Debug::dump($articles);?>
<div class="row">
  <h3><?=$month?><small><?=$year?></small></h3>
  <div class="panel-group" id='accordion'>
    <?php foreach ($articles as $article): ?>
    <div class='panel panel-default'>
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle='collapse' data-parent='#accordion' href="#collapse-<?=$article['id']?>">
            <?=$article['title']?>
          </a>
        </h4>
      </div> <!-- end panel-heading -->
      <div id="collapse-<?=$article['id']?>" class='panel-collapse collapse in'>
        <div class="panel-body">
          <?=$article['blurb']?> <span class='pull-right'><?=$article['author']?></span>
        </div> <!-- end panel-body -->
      </div> <!-- end collapse-1 -->
    </div> <!-- end panel-default -->
    <?php endforeach; ?>
  </div> <!-- end panel-group -->
</div> <!-- end row -->
