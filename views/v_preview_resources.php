<h4 style="margin-top: 0px; margin-right: 20px; margin-bottom: 0px; margin-left: 20px; font-size: 13px;">Resources to Reference</h4>
  <ul id='resources_list' style="font-size: 13px; color: #333333; line-height: 17px; margin-top: 0px; margin-right: 20px;">
    <?php foreach ($res as $value): ?> 
      <li class='selectable'><a id="res-<?=$value['id']?>" href="<?=$value['res_link']?>" title="<?=$value['res']?>" style="color: #111f43"><?=$value['res']?></a></li>
    <?php endforeach; ?>
  </ul>
  <p class="emph" style="font-size: 13px; color: #913a20; line-height: 17px; margin-top: 0px; margin-right: 20px; margin-bottom: 10px; margin-left: 20px; padding-bottom: 25px;">Additional resources you find helpful? Other helpful tips for peer reviewers/authors? <a href="mailto:circulation@osteopathic.org?Subject=Connections%20feedback" style="color: #111f43;">Let us know</a>&mdash;we want to hear from you!</p>
