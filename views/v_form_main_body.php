<form action="/form/p_main_body_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Main body</legend>
    <p>
      <label for="main_body">Main body text:</label>
      <textarea name="main_body" id="main_body_text" rows="24" cols="40"></textarea>
      <input type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
    </p>
  </fieldset>
</form>
