<form action="/form/p_kicker_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Lead-in kicker</legend>
    <p>
<!--       <label class='title' for='kicker'>Lead-in kicker:</label> -->
      <textarea name="kicker" id="kicker_text" rows="8" cols="40"></textarea>
    </p>
    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
