<form action="/form/p_main_body_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Main body</legend>
    <p>
      <label for="headline">&lt;h1&gt;Headline&lt;/h1&gt;</label><br>
      <textarea class='codemirror' width='900' name="headline" id="headline_text" required></textarea><br>
    </p>
    <p>
      <label for="main_body">&lt;p&gt;Main body text&lt;/p&gt;</label><br>
      <textarea name="main_body" class='codemirror' id="main_body_text" rows="25" cols="60" required></textarea><br>
      <input class='btn' type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
    </p>
  </fieldset>
</form>
