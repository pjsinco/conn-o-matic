<?php echo Debug::dump($issue); ?>
<?php echo Debug::dump($issue['lead_in']); ?>
<div class="grid_6">
    
  <form action="/form/p_lead_in/<?=$id;?>" method="POST" accept-charset="utf-8">
    <fieldset>
      <legend>Lead-in</legend>
      <p>
        <label class='title' for='lead-in'>Lead-in:</label>
        <textarea name="lead-in" value="<?=$issue['lead_in']?>" id="lead-in" rows="8" cols="40"></textarea>
      </p>
      <p>
        <label class='title' for='kicker'>Lead-in kicker:</label>
        <textarea name="kicker" id="kicker" rows="8" cols="40"></textarea>
      </p>
    </fieldset>
    <fieldset>
      <legend>Main body</legend>
      <p>
        <label class='title' for='lead-in'>Lead-in:</label>
        <textarea name="lead-in" id="lead-in" rows="8" cols="40" required></textarea>
      </p>
      <p>
        <label class='title' for='kicker'>Lead-in kicker:</label>
        <textarea name="kicker" id="kicker" rows="8" cols="40" required></textarea>
      </p>
      <p>
        <label for="headline">Headline:</label>
        <input type="text" name="headline" id="headline" required><br>
        <label for="main">Main body text:</label>
        <textarea name="main" id="main" rows="24" cols="40" required></textarea>
      </p>
    </fieldset>
    <fieldset>
      <legend>Online poll</legend>
      <p>
        <label for="poll">Poll question:</label>
        <input type="text" name="poll" value='<?=$issue['question']?>' id="poll"><br>
        <label for="poll-link">Poll link:</label>
        <input type="text" name="poll-link" id="poll-link" value='<?=$issue['link']?>'> 
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
        <input type="submit" name="resources" id="resources" value="Set">
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
        <input type="submit" name="peer" id="peer" value="Set">
      </p>
    </fieldset>
  
    <input type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </form>

</div>
