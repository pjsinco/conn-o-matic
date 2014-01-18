<form action="/form/p_main_body_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Main body</legend>
    <p>
      <label for="headline">Headline:</label><br>
      <textarea class='text ui-widget-content ui-corner-all' width='900' name="headline" cols='50' rows='4' id="headline_text" required></textarea><br>
    </p>
    <p>
      <label for="main_body">Main body text:</label><br>
      <textarea name="main_body" id="main_body_text" rows="25" cols="60" required></textarea><br>
      <input class='btn' type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
    </p>
  </fieldset>
</form>
