<div class="grid_5">
  <form action="/form/p_index/<?=$issue['id'];?>" method="POST" accept-charset="utf-8">
    <fieldset>
      <legend>Main body</legend>
      <p>
        <label class='title' for='lead_in'>Lead-in:</label>
        <textarea name="lead_in" id="lead_in" placeholder="<?=$issue['lead_in']?>" rows="8" cols="40"></textarea>
      </p>
      <p>
        <label class='title' for='kicker'>Lead-in kicker:</label>
        <textarea name="kicker" id="kicker" placeholder="<?=$issue['kicker']?>" rows="8" cols="40"></textarea>
      </p>
      <p>
        <label for="headline">Headline:</label>
        <input type="text" name="headline" placeholder="<?=$issue['headline']?>" id="headline"><br>
        <label for="main">Main body text:</label>
        <textarea name="main" id="main" placeholder="<?=$issue['main_body']?>" rows="24" cols="40"></textarea>
      </p>
    </fieldset>
    <fieldset>
      <legend>Online poll</legend>
      <p>
        <label for="poll">Poll question:</label>
        <input type="text" name="poll" placeholder='<?=$issue['question']?>' id="poll"><br>
        <label for="poll_link">Poll link:</label>
        <input type="text" name="poll_link" id="poll_link" placeholder='<?=$issue['link']?>'> 
      </p>
    </fieldset>
    <fieldset>
      <legend>Resources to Reference</legend>
      <p>
        <label for='resource1'>Resource #1:</label>
        <input type="text" name="resource1" id="resource1">
        <label for='link1'>Link:</label>
        <input type="text" name="link1" id="link1"><br>
    
        <label for='resource1'>Resource #2:</label>
        <input type="text" name="resource2" id="resource2">
        <label for='link1'>Link:</label>
        <input type="text" name="link2" id="link2"><br>
    
        <label for='resource1'>Resource #3:</label>
        <input type="text" name="resource3" id="resource3">
        <label for='link1'>Link:</label>
        <input type="text" name="link3" id="link3"><br>
    
        <label for='resource1'>Resource #4:</label>
        <input type="text" name="resource4" id="resource4">
        <label for='link1'>Link:</label>
        <input type="text" name="link4" id="link4"><br>
    
        <label for='resource1'>Resource #5:</label>
        <input type="text" name="resource5" id="resource5">
        <label for='link1'>Link:</label>
        <input type="text" name="link5" id="link5"><br>
      </p>
    </fieldset>
    <fieldset>
      <legend>Meet Your Peer</legend>
      <p>
        <label for="peername">Name:</label>
        <input type="text" name="peername" id="peername"><br>
        <label for="occupation">Occupation:</label>
        <input type="text" name="occupation" id="occupation"><br>
        <label for="schoolclass">School/class:</label>
        <input type="text" name="schoolclass" id="schoolclass"><br>
        <label for="involved">I am involved because:</label>
        <input type="text" name="involved" id="involved"><br>
        <label for="reviewing">When reviewing a manuscript:</label>
        <input type="text" name="reviewing" id="reviewing"><br>
      </p>
    </fieldset>
  
    <input type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>"><br><br>
  </form>
</div>
<div class="grid_7">
  <?=$preview?>
</div>
