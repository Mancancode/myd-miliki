<!DOCTYPE html>
<html>
<head>
    <title>Back Office | Ministry of Youth Development | Rivers State of Nigeria</title>
    <?php
    include('inc/metalinks.php');
    include('inc/new_post.php');
    ?>
</head>
<body>
<?php include('inc/top.php') ?>

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs tabs">
                    <li class="active tab">
                        <h4 class="visible-xs">POST NEWS UPDATE</h4>
                        <h4 class="hidden-xs">POST NEWS UPDATE</h4>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="add-manually">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-horizontal group-border-dashed" action="#">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">News Title </label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" name="news_title" id="Item-Model" required placeholder="News title"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Poster</label>
                                                    <div class="col-sm-6">
                                                        <select name="poster" class="form-control" id="select-category">
                                                            <option Admin="Admin">Admin</option>
                                                            <option Staff="Staff">Staff</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">News Category</label>
                                                    <div class="col-sm-6">
                                                        <select name="category" class="form-control" id="select-category">
                                                            <option value="General">General</option>
                                                            <option value="Jobs">Jobs</option>
                                                            <option value="Training">Training/Seminar</option>
                                                            <option value="Announcements">Announcements</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Message</label>
                                                    <div class="col-sm-6">
                                                    <textarea required class="form-control" name="details" id="phone_features"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Upload Photo</label>
                                                    <div class="col-sm-6">
                                                        <input type="file" class="form-control" id="file" name="file[]" placeholder="upload photo"/>
                                                    </div>
                                                </div>
                                                
                                                </div>
                                                <input type="hidden" name="maincategory" value="1"
                                                        id="maincategory">

                                                <div class="form-group m-b-0">
                                                    <div class="col-sm-offset-3 col-sm-9 m-t-15">
                                                        <input type="submit" value="Publish News" class="btn btn-primary  btn-rounded" name="upload">
                                                        <button type="reset" class="btn btn-basic btn-rounded m-l-5">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('inc/script.php') ?>
<script>

</script>
