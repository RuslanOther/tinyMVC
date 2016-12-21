<div class="inner-content">
<?php foreach ($data as $key => $note) : ?>
  <div class="col-md-6">
    <div class="first-one-inner">
      <h3 class="tittle"><?= $note['title'] ?></h3>
      <p><?= $note['body']; ?></p>
    </div>
      <a href="note/<?= $note['id'] ?>" class="hvr-bounce-to-bottom">Read More...</a>
  </div>

  <?php if($key % 2 == 0) : ?>
  <?php endif ?>

<?php endforeach ?>
</div>
<div class="clearfix"></div>
