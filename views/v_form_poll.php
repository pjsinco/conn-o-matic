<form action="/form/p_poll_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Feedback request</legend>
    <p>
      <label for="poll_head">Feedback request headline</label><br>
      <input type="text" name="poll_head" id="poll_head_text"/>
    </p>
    <p>
      <label for="poll_q">&lt;p&gt;Feedback request text&lt;/p&gt;</label><br>
      <textarea cols='30' rows='5' name="poll_q" id="poll_q_text" required></textarea><br>

      <label for="poll_link">Feedback link</label><br>
      <input type='text' name="poll_link" id="poll_link_text" required><br>

      <input class='btn' type="submit" value="Set">
      <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
