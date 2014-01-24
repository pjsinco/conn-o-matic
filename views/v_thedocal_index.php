<div class="container">
  
    <div class="col-md-8 col-md-offset-2 jumbotron col-lg" id='edit_cal'>
      <h1><em>The DO</em><br><small>Editorial Calendar</small></h1>
    </div> <!-- end jumbotron -->

  
  <div class="row marketing">
    <div class="col-md-8 col-md-offset-2">
      <?php foreach ($articles_by_month as $month => $articles): ?>
      <h3><?=$month ?> <small>2014</small><span class='text-info pull-right'></span></h3>
        <div class="panel-group" id='accordion'>
          <?php foreach ($articles as $article): ?>
          <div class='panel panel-primary'>
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle='collapse' data-parent='#accordion' href="#collapse-<?=$article['id']?>">
                  <?=$article['title']?>
                </a>
              </h4>
            </div> <!-- end panel-heading -->
            <div id="collapse-<?=$article['id']?>" class='panel-collapse collapse in'>
              <div class="panel-body">
                <?=$article['blurb']?> 
<!--                 <dl> -->
<!--                   <dt>Author</dt> -->
<!--                   <dd><?=$article['author']?></dd> -->
<!--                 </dl> -->
                <ul class="list-inline">
                  <li class='text-default pull-left'><strong>Author:</strong> <?=$article['author']?></li>
                  <li class='text-default pull-right'><strong>Editor:</strong> <?=$article['editor']?></li>
                </ul>

              </div> <!-- end panel-body -->
            </div> <!-- end collapse-# -->
          </div> <!-- end panel-default -->
          <?php endforeach; ?>
        </div> <!-- end panel-group -->
        <?php endforeach; ?>
    </div> <!-- end col-lg-12 -->
  </div> <!-- end row -->
</div> <!-- end container -->
