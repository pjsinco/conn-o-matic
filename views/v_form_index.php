<div class="grid_5">
  <form action="/form/p_index/<?=$issue['id'];?>" method="POST" accept-charset="utf-8">
    <fieldset>
      <legend>Main body</legend>
      <p>
        <label class='title' for='lead_in'>Lead-in:</label>
        <textarea name="lead_in" id="lead_in" rows="8" cols="40"></textarea>
      </p>
      <p>
        <label class='title' for='kicker'>Lead-in kicker:</label>
        <textarea name="kicker" id="kicker" rows="8" cols="40"></textarea>
      </p>
      <p>
        <label for="headline">Headline:</label>
        <input type="text" name="headline" id="headline"><br>
        <label for="main">Main body text:</label>
        <textarea name="main_body" id="main_body" rows="24" cols="40"></textarea>
      </p>
    </fieldset>
    <fieldset>
      <legend>Online poll</legend>
      <p>
        <label for="poll">Poll question:</label>
        <input type="text" name="poll_q" id="poll"><br>
        <label for="poll_link">Poll link:</label>
        <input type="text" name="poll_link" id="poll_link"> 
      </p>
    </fieldset>
    <fieldset>
      <legend>Resources to Reference</legend>
      <p>
        <label for="resource">Resources to reference</label>
        <textarea name="resource" id="resource" rows="24" cols="40"></textarea>

<!--         <label for='resource1'>Resource #1:</label> -->
<!--         <input type="text" name="resource1" id="resource1"> -->
<!--         <label for='link1'>Link:</label> -->
<!--         <input type="text" name="link1" id="link1"><br> -->
    
      </p>
    </fieldset>
    <fieldset>
      <legend>Meet Your Peer</legend>
      <p>
        <label for="peer_name">Name:</label>
        <input type="text" name="peer_name" id="peername"><br>
        <label for="peer_occ">Occupation:</label>
        <input type="text" name="peer_occ" id="occupation"><br>
        <label for="peer_school">School/class:</label>
        <input type="text" name="peer_school" id="schoolclass"><br>
        <label for="peer_inv">I am involved because:</label>
        <input type="text" name="peer_inv" id="involved"><br>
        <label for="peer_rev">When reviewing a manuscript:</label>
        <input type="text" name="peer_rev" id="reviewing"><br>
      </p>
    </fieldset>
  
    <input type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>"><br><br>
  </form>
</div>
<div class="grid_7">
  <?=$preview?>
</div>
