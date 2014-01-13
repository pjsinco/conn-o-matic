<form action="/form/p_peer_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
<fieldset>
  <legend>Meet Your Peer</legend>
  <p>
    <label for="peer_name_text">Name</label><br>
    <input class='peer' type="text" name="peer_name" id="peer_name_text"><br>

    <label for="peer_occ_text">Occupation</label><br>
    <textarea class='peer' name="peer_occ" id="peer_occ_text" rows='3'></textarea><br>

    <label for="peer_school_text">School/class</label><br>
    <textarea class='peer' name="peer_school" id="peer_school_text" rows='3'></textarea><br>

    <label for="peer_inv_text">I am involved because</label><br>
    <textarea class='peer' name="peer_inv" id="peer_inv_text" rows='12'></textarea><br>

    <label for="peer_rev_text">When reviewing a manuscript</label><br>
    <textarea class='peer' name="peer_rev" id="peer_rev_text" rows='12'></textarea><br>
  </p>
    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
