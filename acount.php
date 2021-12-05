<?php
require "data/acounts.php";
include "layout/header.php";

if(!empty($_GET) && isset($_GET["id"])) {
    $id = $_GET["id"];

}
else {
    $error = " 404, Aucun compte ne correspond à cet identifiant !";
}
$acounts = get_accounts();

echo '<div class="card">
      <div class="card-header">
        ' . $acounts[$id["name"]] . '
      </div>
      <div class="card-body">
        <h5 class="card-title">' . $acounts[$id["owner"]] . '</h5>
        <p class="card-text">' . $acounts[$id["number"]] . '</p>
        <div class="d-flex justify-content-between">
        <p class="card-text">' . $acounts[$id["last_operation"]] . '</p>
          <h5 class="card-title">' . $acounts[$id["amount"]] . '€</h5>
        </div>
      </div>
    </div>
    <br />';
?>

