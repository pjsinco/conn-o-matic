<form action="/form/p_kicker_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Kicker</legend>
    <label class='title' for='kicker'>&lt;p&gt;Kicker&lt;/p&gt;</label><br>
    <textarea name="kicker" id="kicker_text" rows="12" cols="40" required></textarea><br>
    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
