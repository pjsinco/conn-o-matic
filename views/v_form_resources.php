<form action="/form/p_resources_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Resources to Reference</legend>
<!--       <label class='title' for='kicker'>Resources to Reference</label> -->
<!--       <textarea name="resources" id="resources_text" rows="24" cols="60"></textarea> -->
      
    <div id="res_wrapper">
      <div id="res1">
        <label for='resource1'>Resource</label><br>
        <input type="text" name="resource1" required><br>
        <label for='link1'>Link</label><br>
        <input type="text" name="link1" required><br>
      </div>
    </div>
    <button type="button">Add resource</button>

    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
