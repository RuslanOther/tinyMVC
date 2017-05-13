<div class="inner-content">
<div class="col-md-12">
<form action="/note/save" method="post">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" name="body">
  </div>
  <button type="submit" class="btn btn-default">Add</button>
</form>
</div>

<?php foreach ($data as $key => $note) : ?>

  <div class="col-md-6">
    <div class="first-one-inner">
      <h3 class="tittle"><?= $note['title'] ?></h3>
      <p><?= $note['body']; ?></p>
    </div>
      <a href="/note/get/<?= $note['id'] ?>" class="hvr-bounce-to-bottom">Read More...</a>
  </div>

  <?php if($key % 2 == 0) : ?>
  <?php endif ?>

<?php endforeach ?>
</div>
<div class="clearfix"></div>
