<!DOCTYPE html>
<html>
<head>
    <title>Back Office | Ministry of Youth Development | Rivers State of Nigeria</title>
    <?php include('inc/metalinks.php'); ?>
    <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
<body>
<div class="wrapper">

    <<?php include('inc/top.php') ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <div class="container">
                    <div class="table-responsive  search-result">
                        <table class="table table-hover mails m-0 table table-actions-bar">
                            <thead>
                            <tr>
                                <th style="min-width: 95px;">
                                    Images
                                </th>
                                <th style="min-width: 200px;">News title</th>
                                <th>Category</th>
                                <th>Poster</th>
                                <th>Details</th>
                                <th style="min-width: 90px;">Action</th>
                            </tr>
                            </thead>
                            <?php
                            include "inc/db.php";
                                $main_store = mysqli_query($con, "select * from news order by id desc");
                                while ($quicks = mysqli_fetch_array($main_store)){
                                     $title = $quicks['titles'];
                                     $cat = $quicks['cat'];
                                    $details = $quicks['details'];
                                    $photo = $quicks['photo'];
                                    $post_id = $quicks['id'];
                                    $poster = $quicks['poster'];
                            ?>
                            <tbody>
                            <tr class="active">
                                <td>

                                    <img src=".././<?php echo $photo; ?>"
                                        title="no image" class="thumb-sm"
                                         style="max-height: 91px;"/>
                                </td>
                                <td>
                                   <?php echo $title;   ?>
                                </td>
                                <td>
                                    <?php echo $cat; ?>
                                </td>
                                <td>
                                   <?php echo $poster; ?>
                                </td>
                                <td>
                                    <?php echo $details; ?>
                                </td>
                                <td>
                                    <a class="btn-table-ac" href="#"><i class="md md-edit" style="color: red;"></i></a>
                                    <a class="btn-table-ac" href="delete_news.php?post_id=<?php echo $post_id ?>"><i class="md md-close" style="color: red;"></i></a>
                                </td>
                            </tr>
                            </tbody>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="mySmallModalLabel">Add</h4>
                <p  class="modal-title"><span class="add-this-product"> to your store</p>
                <button class="btn btn-default waves-effect waves-light btn-sm" id="sa-warning">Click me</button>
            </div>
            <div class="modal-body">

                <div class="form-group"><input type="text" required='' onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" placeholder="Quantity(e.g. 5)" id="i-quantity"></div>
                <div class="form-group"><input type="text" required='' onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" placeholder="Costing price(e.g. 20 000)" id="i-cost"></div>
                <div class="form-group"><input type="text" required='' onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" placeholder="Selling price(e.g. 20 500)" id="i-sell"></div>
                <div class="form-group"><input type="text" required='' onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" placeholder="Track(e.g. 4)" id="i-track"></div>
                <button class="btn btn-default add-product" data-id="">Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- Modal -->

<!-- END wrapper -->


</body>
</html>
<script src="assets/js/jquery.min.js"></script>
<script>
    <?php
    include "inc/script.php";
    ?>
</script>
<!-- Sweet-Alert  -->
<script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script>
    <?php
    include "inc/js.js";
    ?>
</script>
