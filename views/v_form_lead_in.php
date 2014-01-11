<form action="/form/p_lead_in/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Lead-in</legend>
    <p>
      <label class='title' for='lead-in'>Lead-in:</label>
      <textarea name="lead-in" id="lead-in" rows="8" cols="40"></textarea>
    </p>
    <p>
      <label class='title' for='kicker'>Lead-in kicker:</label>
      <textarea name="kicker" id="kicker" rows="8" cols="40"></textarea>
      <input type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
    </p>
  </fieldset>
</form>
<?=$preview;?>
