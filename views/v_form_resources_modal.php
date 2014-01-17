<form action="/form/p_resources_modal/<?=$id?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Resource</legend>
<!--       <label class='title' for='kicker'>Resources to Reference</label> -->
<!--       <textarea name="resources" id="resources_text" rows="24" cols="60"></textarea> -->
      
    <button class='btn' value='edit' name='action' type="submit">
      Edit
    </button><br><br>

    <button class='btn' value='create' name='action' type="submit">
      Create
    </button><br><br>

    <button class='btn' value='delete' name='action' type="submit">
      Delete
    </button><br><br>


<!--     <input class='btn' type="submit" value="Set"> -->
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
