<form action="/form/p_resources_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Resources to Reference</legend>
    <p>
<!--       <label class='title' for='kicker'>Resources to Reference</label> -->
      <textarea name="resources" id="resources_text" rows="24" cols="60"></textarea>
      
<!--       <label for='resource1'>Resource #1:</label> -->
<!--       <input type="text" name="resource1" id="resource1"> -->
<!--       <label for='link1'>Link:</label> -->
<!--       <input type="text" name="link1" id="link1"><br> -->
  
<!--       <label for='resource1'>Resource #2:</label> -->
<!--       <input type="text" name="resource2" id="resource2"> -->
<!--       <label for='link1'>Link:</label> -->
<!--       <input type="text" name="link2" id="link2"><br> -->
  
<!--       <label for='resource1'>Resource #3:</label> -->
<!--       <input type="text" name="resource3" id="resource3"> -->
<!--       <label for='link1'>Link:</label> -->
<!--       <input type="text" name="link3" id="link3"><br> -->
  
<!--       <label for='resource1'>Resource #4:</label> -->
<!--       <input type="text" name="resource4" id="resource4"> -->
<!--       <label for='link1'>Link:</label> -->
<!--       <input type="text" name="link4" id="link4"><br> -->
  
<!--       <label for='resource1'>Resource #5:</label> -->
<!--       <input type="text" name="resource5" id="resource5"> -->
<!--       <label for='link1'>Link:</label> -->
<!--       <input type="text" name="link5" id="link5"><br> -->
    </p>
    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
