<form action="/form/p_resources_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend>Resources to Reference</legend>
<!--       <label class='title' for='kicker'>Resources to Reference</label> -->
<!--       <textarea name="resources" id="resources_text" rows="24" cols="60"></textarea> -->
      
      <div class="res">
        <label for='resource1'>Resource #1:</label><br>
        <input type="text" name="resource1" id="resource1"><br>
        <label for='link1'>Link:</label><br>
        <input type="text" name="link1" id="link1"><br>
      </div>
  
      <div class="res hidden">
        <label for='resource2'>Resource #2:</label> <br>
        <input type="text" name="resource2" id="resource2"> <br>
        <label for='link2'>Link:</label> <br>
        <input type="text" name="link2" id="link2"><br> 
      </div>

      <div class="res hidden">
        <label for='resource3'>Resource #3:</label> <br>
        <input type="text" name="resource3" id="resource3"> <br>
        <label for='link3'>Link:</label> <br>
        <input type="text" name="link3" id="link3"><br> 
      </div>

      <div class="res hidden">
        <label for='resource4'>Resource #4:</label> <br>
        <input type="text" name="resource4" id="resource4"> <br>
        <label for='link4'>Link:</label> <br>
        <input type="text" name="link4" id="link4"><br> 
      </div>

      <div class="res hidden">
        <label for='resource5'>Resource #5:</label> <br>
        <input type="text" name="resource5" id="resource5"> <br>
        <label for='link5'>Link:</label> <br>
        <input type="text" name="link5" id="link5"><br> 
      </div>

      <div class="res hidden">
        <label for='resource6'>Resource #6:</label> <br>
        <input type="text" name="resource6" id="resource6"> <br>
        <label for='link6'>Link:</label> <br>
        <input type="text" name="link6" id="link6"><br> 
      </div>

      <div class="res hidden">
        <label for='resource7'>Resource #7:</label> <br>
        <input type="text" name="resource7" id="resource7"> <br>
        <label for='link7'>Link:</label> <br>
        <input type="text" name="link7" id="link7"><br> 
      </div>

        <button type="button">Add resource</button>

    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
