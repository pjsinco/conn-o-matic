<form action="/form/p_lead_in_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Lead-in</legend>
      <p>
        <label class='title' for='lead_in'>Lead-in:</label>
        <textarea name="lead_in" id="lead_in" rows="8" cols="40"></textarea>
      </p>
      <input type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
