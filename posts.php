<?php require_once 'inc/header.php'; ?>
<?php require_once 'inc/slider.php'; ?>
<?php
if (!isset($_GET['category']) || $_GET['category'] == null) {
    echo "<script>window.location = '404.php';</script>";
} else {
    $id_category = $_GET['category'];
}
?>
<div class="wrap-center-content">
    <div class="container">
        <div class="row">
            <div class="col s12 m7 l8">
                <main>
                    <?php
                    $query = "SELECT * FROM posts WHERE category = '$id_category'";
                    $post_cat = $db->runQuery($query);
                    if ($post_cat) {
                        foreach ($post_cat as $item => $value) {
                            ?>
                            <div class="card large hoverable">
                                <div class="date-acticle">
                                    <div class="chip"><i class="fa fa-calendar"></i>
                                        <span><?= $fm->formatDate($post_cat[$item]["date"]); ?></span>
                                    </div>
                                    <div class="chip"><i class="fa fa-user"></i>
                                        <span><?= $post_cat[$item]["author"]; ?></span>
                                    </div>
                                </div>
                                <div class="card-image">
                                    <img class="responsive-img" src="images/<?= $post_cat[$item]["image"]; ?>"
                                         alt="<?= $post_cat[$item]["title"]; ?>">
                                    <span class="card-title"><?= $post_cat[$item]["title"]; ?></span>
                                </div>
                                <div class="card-content">
                                    <p><?= $fm->textShorten($post_cat[$item]["body"]); ?>)</p>
                                </div>
                                <div class="card-action">
                                    <a href="post.php?id=<?= $post_cat[$item]["id"]; ?>"
                                       class="waves-effect waves-light btn red accent-4">Далее</a>
                                </div>
                            </div><!-- /.card -->
                        <?php }
                    }else{echo "<h4>Нету пока статей в этой категории!</h4>";} ?>
                </main>
            </div>
            <div class="col s12 m5 l4">
                <?php include 'inc/side_bar.php'; ?>
            </div>
        </div><!--/.row-->
    </div><!-- /.container -->
</div><!--/.wrap-center-content-->
<?php require_once 'inc/footer.php' ?>






