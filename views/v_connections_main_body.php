<form action="/connections/p_main_body/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Main body</legend>
    <p>
      <label for="headline">Headline:</label>
      <input type="text" name="headline" id="headline"><br>
      <label for="main">Main body text:</label>
      <textarea name="main" id="main" rows="8" cols="40"></textarea>
      <input type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
    </p>
  </fieldset>
</form>
