<div class="container">
  <div class="row">
    <h1 class="col-12 col-sm-12 col-md-12 col-lg-12">Add article to calendar</h1>
  </div> <!-- end row -->

  <div class="row">
    <div class="col-3 col-sm-3 col-md-3 col-lg-3">
<!--       <h3>All articles</h3> -->
<!--       <ul class='list-group'> -->
<!--       <?php //foreach($articles as $article): ?> -->
<!--         <li class='list-group-item'><?=$article['title']?><span class='pull-right'></span></li> -->
      <?php //endforeach; ?>      
<!--       </ul> -->
    </div> <!-- end col-3 -->

    <!--     start form -->
    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
      <form role='form' action="/thedocal/p_add_article" method="POST" accept-charset="utf-8">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" placeholder='Enter title' class='form-control'>
        </div> <!-- end form-group -->

        <div class="form-group">
          <label for="blurb">Blurb</label>
          <textarea name="blurb" class='form-control' id='blurb' rows="4" cols="40" placeholder='Enter blurb'></textarea>
        </div> <!-- end form-group -->

        <div class="form-group">
          <label for="month">Month</label>
          <select name="month" id="month" class='form-control'>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
        </div> <!-- end form-group -->

        <div class="form-group">
          <label for="year">Year</label>
          <select name="yr" id="year" class='form-control'>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
          </select>
        </div> <!-- end form-group -->
        
        <div class="form-group">
          <label for="author">Author</label>
          <select name="author" id="author" class='form-control'>
            <?php foreach($users as $user): ?>
            <option value="<?=$user['id']?>"><?=$user['f_name']?></option>
            <?php endforeach; ?>
          </select>
        </div> <!-- end form-group -->
        
        <div class="form-group">
          <label for="editor">Editor</label>
          <select name="editor" id="year" class='form-control'>
            <?php foreach($users as $user): ?>
            <option value="<?=$user['id']?>"><?=$user['f_name']?></option>
            <?php endforeach; ?>
          </select>
        </div> <!-- end form-group -->

        <button type="submit" class='btn btn-default pull-right'>Submit</button>
      </form>
    </div> <!-- end col-9 -->

    <div class="col-3 col-sm-3 col-md-3 col-lg-3">
    </div> <!-- end col-3 -->

  </div> <!-- end row -->
</div> <!-- end container --> 
