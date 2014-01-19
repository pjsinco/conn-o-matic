<form action="/form/p_poll_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Online poll</legend>
    <p>
      <label for="poll_q">&lt;p&gt;Poll question&lt;/p&gt;</label><br>
      <textarea cols='30' rows='5' name="poll_q" id="poll_q_text" required></textarea><br>
      <label for="poll_link">Poll link</label><br>
      <input type='text' name="poll_link" id="poll_link_text" required></textarea><br>
      <input class='btn' type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
