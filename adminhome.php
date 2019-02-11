<!DOCTYPE HTML>
<html>

<?php require 'header_ref.php'?>

<body>

<?php

// user session validate
// if (!isset($_SESSION['userID']) || empty($_SESSION['userID'])) {
//     header("Location: /savory/home.php");
//     exit;
// }

?>

<!-- <div class="gtco-loader"></div> -->

<div>
    <!-- Menu -->
    <?php include "header.php";?>
    <header id="gtco-header" class="gtco-cover gtco-cover-booking" role="banner">

    </header>

</div>


<div class="gtco-container">
    <div class="row">
        <?php include "admincalendar.php"?>
    </div>
</div>

<!-- Table -->
<div class="gtco-container">
<!-- Editable table -->
<div class="card">
  <h3 id="selectedDate" class="card-header text-center font-weight-bold text-uppercase py-4">6th Feb</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x"
            aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">Customer</th>
          <th colspan="2" class="text-center"></th>
          <th class="text-center">Rooms</th>
          <th class="text-center">Amount</th>
          <th class="text-center"></th>
        </tr>
        <tr>
          <td rowspan="2" contenteditable="true">RR</td>
          <td contenteditable="true" colspan="2"> - Double Room</td>
          <td contenteditable="true"><input size="2" type="text" value="2"> </td>
          <td contenteditable="true">4000</td>
          <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
          </td>
        </tr>
        <tr>
          <td  contenteditable="true" colspan="2"> - Suite</td>
          <td contenteditable="true"><input size="2" type="text" value="1"></td>
          <td contenteditable="true">7500</td>
          <td>
            <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
          </td>
        </tr>

      </table>
    </div>
  </div>
</div>
<!-- Editable table -->

</div>


<script src="js/editabletable.js"></script>
</body>

