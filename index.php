<?php 
require "data/acounts.php";
include "layout/header.php"; ?>
  </br>
    <!-- <button class="btn-confirm" onclick="showLayer()">Compris !</button> -->
    <article>

    <?php 
    $acounts = get_accounts();
    // var_dump($acounts);

    foreach($acounts as $index => $acount) {
      echo '<div class="card">
      <div class="card-header">
        ' . $acount["name"] . '
      </div>
      <div class="card-body">
        <h5 class="card-title">' . $acount["owner"] . '</h5>
        <p class="card-text">' . $acount["number"] . '</p>
        <div class="d-flex justify-content-between">
          <a href="#" class="btn btn-primary">...</a>
          <h5 class="card-title">' . $acount["amount"] . '€</h5>
        </div>
      </div>
    </div>
    <br />';
      }
    
    ?>

    
  </article>
  
  <?php include "layout/footer.php"; ?>