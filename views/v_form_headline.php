<form action="/form/p_headline_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Headline</legend>
    <p>
      <label for="headline">Headline:</label>
      <input type="text" name="headline" id="headline_text"><br>
    </p>
    <input type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
