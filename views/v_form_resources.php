<form action="/form/p_resources_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Resources to Reference</legend>
<!--       <label class='title' for='kicker'>Resources to Reference</label> -->
<!--       <textarea name="resources" id="resources_text" rows="24" cols="60"></textarea> -->
      
    <div id="res_wrapper">
      <div id="res">
        <label for='resource'>Resource</label><br>
        <input type="text" name="resource" required><br>
        <label for='link'>Link</label><br>
        <input type="text" name="link" required><br>
      </div>
    </div>

    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
