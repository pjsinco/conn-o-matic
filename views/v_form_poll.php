<form action="/form/p_poll_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Online poll</legend>
    <p>
      <label for="poll_q">Poll question:</label>
      <input type="text" name="poll_q" id="poll_q_text"><br>
      <label for="poll_link">Poll link:</label>
      <input type="text" name="poll_link" id="poll_link_text">
      <input type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
