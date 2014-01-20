<div class="prefix_2 grid_8 suffix_2">
  <div id="welcome">
    <h1>Automatic <span><em>Connections</em> edition</span></h1>
    <form action="/form/p_meta" method="POST" accept-charset="utf-8">
        <label class='title' for='edition'>Edition:</label>
        <select id='edition' name='edition'>
          <option value='Peer Reviewers'>Peer Reviewers</option>
          <option value='Editorial Board'>Editorial Board</option>
          <option value='Editorial Advisory Board'>Editorial Advisory Board</option>
        </select>&nbsp;
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
        </select><br><br>

        <label for="peer_photo_file">Peer photo file name</label><br>
        <input type='text' name="peer_photo_file" id="peer_photo_file" required><br>
        <input disabled class='btn' type="submit" value="Set">
        <div class="validate"></div>
    </form>

  </div>
</div>
