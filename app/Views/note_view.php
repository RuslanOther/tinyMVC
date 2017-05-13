<div class="inner-content">
<div class="col-md-12">
<form action="/note/update" method="post">
<p>Update</p>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?= $data['title'] ?>">
    <input type="hiden" class="form-control" id="title" name="id" value="<?= $data['id'] ?>">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" name="body" value="<?= $data['body'] ?>">
  </div>
  <button type="submit" class="btn btn-default">Add</button>
</form>
</div>

  <div class="col-md-6">
    <div class="first-one-inner">
      <h3 class="tittle"><?= $data['title'] ?></h3>
      <p><?= $data['body']; ?></p>
    </div>
      <a href="/note/get/<?= $data['id'] ?>" class="hvr-bounce-to-bottom">Read More...</a>
  </div>

</div>
<div class="clearfix"></div>
