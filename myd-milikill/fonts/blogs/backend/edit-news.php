<!DOCTYPE html>
<html>
<?php include('inc/header.php'); ?>
<?php include('inc/session.php'); ?>

<body>
<?php
    if(isset($_GET['post_id'])){
        $post_id = $_GET['post_id'];
        $product_details = mysqli_fetch_assoc(mysqli_query($con, "select * from main_store where post_id = '".$post_id."'"));
        $category = $product_details["category"];
        $category_name = mysqli_fetch_assoc(mysqli_query($con, "select distinct category_name from category where category = '".$category."'"));
        $cat_id = $category_name["category_name"];
        $owner_id = $product_details["store_id"];
        if($owner_id != $user_id){
            // take him out
        } else{
            $brand_name = $product_details["brand_name"];
            $item_name = $product_details["item_name"];
            $tag = $product_details["tag"];
            $details = $product_details["details"];
            $photo = $product_details["photo"];
            $mini_details = mysqli_fetch_assoc(mysqli_query($con, "select * from mini_store where post_id = '".$post_id."' and store_id = '".$user_id."'"));
            $quantity = $mini_details["quantity"];
            $selling_price = $mini_details["selling_price"];
            $track = $mini_details["track"];
            $cost_price = $mini_details["cost_price"];
            $max_supply = $mini_details["max_supply"]; ?>

<!-- Checks if product id is set else displays nothing -->
<div class="wrapper">

    <!-- Navigation Bar-->
    <?php include('inc/top.php') ?>
    <!-- End Navigation Bar-->
            <div class="container" style="margin-top: 20px">

                <div class="row">
                <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 m-b-30 header-title"><b><i class="ion ion-ios7-photos"></i> <?php echo $category; ?></b></h4>
                    <div class="row">
                        <div class="col-lg-8">
                            <h5><b>Product Description</b></h5>
                            <p class="text-muted font-13 m-b-30">
                                Your product details goes here.
                            </p>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-horizontal group-border-dashed" action="#">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Meta Keywords</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="tag" id="brand_name" required
                                                   value="<?php echo $tag; ?>"/>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Brand Name</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="brand_name" id="brand_name" required
                                            value="<?php echo $brand_name; ?>"/>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Bar-code</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="barcode" id="barcode" required
                                                   placeholder="Item bar code"/>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Item Name</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="item_name" id="Item-Model" required
                                            value="<?php echo $item_name; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Quantity</label>
                                        <div class="col-sm-6">
                                            <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" name="quantity" id="Item-Model" required
                                            value="<?php echo $quantity; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cost Price</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="cost_price" id="Item-Model" required
                                            value="<?php echo $cost_price; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Selling Price</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="selling_price" id="Item-Model" required
                                            value="<?php echo $selling_price; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Max supply</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="max_supply" id="Item-Model" required
                                            value="<?php echo $max_supply; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Track Item</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="track" id="Item-Model" required
                                            value="<?php echo $track; ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Select Category</label>
                                        <div class="col-sm-6">
                                            <select name="category" class="form-control">
                                                <?php
                                                $selects = mysqli_query($con, "select *  from category WHERE category_name='".$cat_id."' ORDER by category");
                                                while ($ren = mysqli_fetch_array($selects)){
                                                    $cat = $ren['category'];
                                                    echo '<option value="'.$cat.'">'.$cat.'</option>';
                                                }
                                                ?>
            
                                            </select>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">More Details</label>
                                        <div class="col-sm-6">
                                            <textarea required class="form-control" name="details" id="phone_features"><?php echo $details; ?></textarea>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Main Photo</label>
                                        <div class="col-sm-6">
                                            <input type="file" class="form-control" id="file" name="file" placeholder="upload photo"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">More Photo <br><span class="text-danger">*(max 4 photos)</span></label>
                                        <div class="col-sm-6">
                                            <input type="file" class="form-control" id="more_file" name="more_file[]" multiple="" placeholder="upload photo" data-max-uploads = "4"/>
                                        </div>
                                    </div>
            
                                    <input type="text" value="<?php echo $post_id?>" hidden name="post_id">
            
                                    <div class="form-group m-b-0">
                                        <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                            <input type="submit" value="Update" class="btn btn-primary btn-rounded" name="update">
            
                                            <button type="reset" class="btn btn-danger btn-rounded m-l-5">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
            
                                </div>
                                <?php
                                include "inc/update_items.php";
                                ?>
                            </form>
                        </div>
            
                        <div class="col-lg-6">
            
                        </div>
                    </div>
                </div>
            </div>


                            <div class="row">
                                <div class="col-sm-12">
                                    <hr />
                                    <div class="text-center p-20">
                                         <button type="button" class="btn w-sm btn-white waves-effect">Cancel</button>
                                         <button type="button" class="btn w-sm btn-default waves-effect waves-light">Save</button>
                                         <button type="button" class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                © 2017. All rights reserved.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="ecommerce-product-edit.html#">About</a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-product-edit.html#">Help</a>
                                    </li>
                                    <li>
                                        <a href="ecommerce-product-edit.html#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->




        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- Select 2 js -->
        <script src="assets/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

        <!-- App core js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            jQuery(document).ready(function() {
                // Select2
                $(".select2").select2();
            });
        </script>

<?php 
            }
    }
?>
    </body>






</html>