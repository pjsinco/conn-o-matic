<form action="/form/p_conn_flag_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
<!--   <fieldset> -->
<!--     <legend>Date</legend> -->
    <p>
      <label class='title' for='quarter'>Quarter:</label>
      <select id='quarter' name='quarter'>
        <option value='summer'>Summer</option>
        <option value='fall'>Fall</option>
        <option value='winter'>Winter</option>
        <option value='spring'>Spring</option>
      </select>&nbsp;
      <label class='title' for='year'>Year:</label>
      <select id='year' name='year'>
        <option value='2014'>2014</option>
        <option value='2015'>2015</option>
        <option value='2016'>2016</option>
      </select>
    <p>
    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
<!--   </fieldset> -->
</form>

