<!-- Side Area Start -->
<div class="col-sm-4">
  <br>
  <div class="card">
    <div class="card-header bg-primary text-light">
      <h2 class="lead">Categories</h2>
      </div>
      <div class="card-body">
        <?php
        global $ConnectingDB;
        $sql = "SELECT * FROM category ORDER BY id desc";
        $stmt = $ConnectingDB->query($sql);
        while ($DataRows = $stmt->fetch()) {
          $CategoryId = $DataRows["id"];
          $CategoryName=$DataRows["title"];
         ?>
        <a href="Blog.php?category=<?php echo $CategoryName; ?>"> <span class="heading"> <?php echo $CategoryName; ?></span> </a><br>
       <?php } ?>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header bg-info text-white">
      <h2 class="lead"> Top Products</h2>
    </div>
    <div class="card-body">
      <?php
      global $ConnectingDB;
      $sql= "SELECT * FROM posts ORDER BY id desc LIMIT 0,5";
      $stmt= $ConnectingDB->query($sql);
      while ($DataRows=$stmt->fetch()) {
        $Id     = $DataRows['id'];
        $Title  = $DataRows['title'];
        $DateTime = $DataRows['datetime'];
        $Image = $DataRows['image'];
      ?>
      <div class="media">
        <img src="Uploads/<?php echo htmlentities($Image); ?>" class="d-block img-fluid align-self-start"  width="90" height="94" alt="">
        <div class="media-body ml-2">
        <a style="text-decoration:none;"href="FullPost.php?id=<?php echo htmlentities($Id) ; ?>" target="_blank">  <h6 class="lead"><?php echo htmlentities($Title); ?></h6> </a>
          <p class="small"><?php echo htmlentities($DateTime); ?></p>
        </div>
      </div>
      <hr>
      <?php } ?>
    </div>
  </div>

</div>
<!-- Side Area End -->


</div>

</div>

<!-- HEADER END -->
<br>
<!-- FOOTER -->
<footer class="bg-dark text-white">
<div class="container">
<div class="row">
  <div class="col">
          <p class="lead text-center">Created By | Antik Chattopadhyay | <span id="year"></span></p>
          </div>
 </div>
</div>
</footer>
<div style="height:10px; background:#27aae1;"></div>
<!-- FOOTER END-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
$('#year').text(new Date().getFullYear());
</script>
</body>
</html>
