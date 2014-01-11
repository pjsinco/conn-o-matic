<form action="/form/p_main_body/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Main body</legend>
    <p>
      <label class='title' for='lead-in'>Lead-in:</label>
      <textarea name="lead-in" id="lead-in" rows="8" cols="40" required></textarea>
    </p>
    <p>
      <label class='title' for='kicker'>Lead-in kicker:</label>
      <textarea name="kicker" id="kicker" rows="8" cols="40" required></textarea>
    </p>
    <p>
      <label for="headline">Headline:</label>
      <input type="text" name="headline" id="headline" required><br>
      <label for="main">Main body text:</label>
      <textarea name="main" id="main" rows="24" cols="40" required></textarea>
      <input type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
    </p>
  </fieldset>
</form>
<?=$preview;?>
