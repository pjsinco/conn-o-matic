<form action="/form/p_conn_flag_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
<!--   <fieldset> -->
<!--     <legend>Edition</legend> -->
    <p>
<!--       <label class='title' for='edition'>Edition:</label> -->
      <select id='edition' name='edition'>
        <option value='Peer Reviewers'>Peer Reviewers</option>
        <option value='Editorial Board'>Editorial Board</option>
        <option value='Editorial Advisory Board'>Editorial Advisory Board</option>
      </select>&nbsp;
    <p>
    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
<!--   </fieldset> -->
</form>
