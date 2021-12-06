<?php
require "data/acounts.php";
include "layout/header.php";

if(!empty($_GET) && isset($_GET["id"])) {
    $id = $_GET["id"];

}
else {
    $error = " 404, Aucun compte ne correspond à cet identifiant !";
}
$acount = get_accounts()[$id];

echo '<div class="card">
      <div class="card-header">
        ' . $acount["name"] . '
      </div>
      <div class="card-body">
        <h5 class="card-title">' . $acount["owner"] . '</h5>
        <p class="card-text">' . $acount["number"] . '</p>
        <div class="d-flex justify-content-between">
        <p class="card-text">' . $acount["last_operation"] . '</p>
          <h5 class="card-title">' . $acount["amount"] . '€</h5>
        </div>
      </div>
    </div>
    <br />';
?>

