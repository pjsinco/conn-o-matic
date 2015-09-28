<form action="/form/p_peer_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
<fieldset>
  <legend>Meet Your ...</legend>
  <p>
    <label for="peer_title_text">&lt;h3&gt;MEET YOUR ...&lt;/h3&gt;</label><br>
    <textarea class='peer' name="peer_title" rows='3' id="peer_title_text" required></textarea><br>

    <label for="peer_name_text">&lt;h2&gt;Name&lt;/h2&gt;</label><br>
    <textarea class='peer' name="peer_name" rows='3' id="peer_name_text" required></textarea><br>

    <label for="peer_occ_text">&lt;p&gt;Occupation&lt;/p&gt;</label><br>
    <textarea class='peer' name="peer_occ" id="peer_occ_text" rows='4' required></textarea><br>

    <label for="peer_school_text">&lt;p&gt;School/Class&lt;/p&gt;</label><br>
    <textarea class='peer' name="peer_school" id="peer_school_text" rows='3' required></textarea><br>

<!--     <label for="peer_class_yr_text">&lt;p&gt;Class year&lt;/p&gt;</label><br> -->
<!--     <input type='text' class='peer' name="peer_class_yr" id="peer_class_yr_text" rows='1'><br> -->

    <label for="peer_inv_text">&lt;p&gt;What I value most ...&lt;/p&gt;</label><br>
    <textarea class='peer' name="peer_inv" id="peer_inv_text" rows='6' required></textarea><br>

    <label for="peer_rev_text">&lt;p&gt;A tip ...&lt;/p&gt;</label><br>
    <textarea class='peer' name="peer_rev" id="peer_rev_text" rows='6' required></textarea><br>
  </p>
    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
  </fieldset>
</form>
