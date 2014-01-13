<form action="/form/p_headline_edit/<?=$id;?>" method="POST" accept-charset="utf-8">
<!--   <fieldset> -->
<!--     <legend>Headline</legend> -->
    <p>
<!--       <label for="headline">Headline:</label> -->
      <textarea class='text ui-widget-content ui-corner-all' width='900' name="headline" cols='50' rows='2' id="headline_text"></textarea><br>
    </p>
    <input class='btn' type="submit" value="Set">
    <input type="hidden" name='id' value="<?=$id;?>">
<!--   </fieldset> -->
</form>
