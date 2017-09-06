<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/slider.php'; ?>
<div class="wrap-center-content">
    <div class="container">
        <div class="row">
            <div class="col s12 m7 l8">
                <main>
                    <div class="page-content">
                        <!--*********changePagination***********-->
                        <!-- <div style="border-bottom: #F0F0F0 1px solid;margin-bottom: 15px;">
                        Pagination Setting:<br> <select name="pagination-setting"
                      onChange="changePagination(this.value);"
                      class="pagination-setting" id="pagination-setting">
                      <option value="all-links">Display All Page Link</option>
                       <option value="prev-next">Display Prev Next Only</option>
                       </select>
                      </div>-->
                        <div id="pagination-result">
                            <input type="hidden" name="rowcount" id="rowcount"/>
                        </div>
                    </div>
                </main>
            </div>
            <div class="col s12 m5 l4">
                <?php include 'inc/side_bar.php'; ?>
            </div>
        </div><!--/.row-->
    </div><!-- /.container -->
</div><!--/.wrap-center-content-->
<?php require_once 'inc/footer.php' ?>






