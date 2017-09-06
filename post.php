<?php include 'inc/header.php'; ?>

<?php
if (!isset($_GET['id']) || $_GET['id'] == null) {
    echo "<script>window.location = '404.php';</script>";
} else {
    $id_post = $_GET['id'];
}
?>

<div class="wrap-center-content">
    <div class="container">
        <div class="row">
            <div class="col s12 m7 l8">
                <main>

                    <div class="full-article">
                        <?php
                        $query = "SELECT * FROM posts WHERE id = $id_post";
                        $post = $db->runQuery($query);
                        if ($post){
                        foreach ($post as $k => $v){
                        ?>
                        <div class="date-acticle-page">
                            <div class="chip"><i class="fa fa-calendar"></i> <span><?= $fm->formatDate($post[$k]["date"]); ?></span>
                            </div>
                            <div class="chip"><i class="fa fa-user"></i> <span><?= $post[$k]["author"]; ?></span></div>
                        </div>
                        <hr>
                        <div class="article-content">
                            <h4><?= $post[$k]["title"]; ?></h4>
                            <div class="text">
                                <div class="image-post"><img class="responsive-img materialboxed" width="450"
                                                             src="images/<?= $post[$k]["image"]; ?>"
                                                             alt="<?= $post[$k]["title"]; ?>"></div>
                                <p><?= $post[$k]["body"]; ?></p>
                            </div><!--/.text-->
                        </div><!-- article-content -->

                    </div><!-- /.full-article -->

                    <div class="relatedpost center-align">
                        <h5>Похожие статьи</h5>
                        <div class="row">
                            <?php
                            $cat_id = $post[$k]["category"];
                            $query_related = "SELECT * FROM posts WHERE category = '$cat_id' ORDER BY rand() LIMIT 6";
                            $related_post = $db->runQuery($query_related);
                            if ($related_post) {
                                foreach ($related_post as $key => $value) {
                                    ?>
                                    <div class="col s6 m6 l4">

                                        <div class="rel-post">
                                            <a href="post.php?id=<?= $related_post[$key]["id"]; ?>"><img
                                                        src="images/<?= $related_post[$key]["image"]; ?>"
                                                        class="responsive-img"
                                                        alt="<?= $related_post[$key]["title"]; ?>"><span
                                                        class="title"><?= $related_post[$key]["title"]; ?></span></a>
                                        </div><!--/.rel-post-->

                                    </div>
                                <?php }
                            } else {
                                echo "Нету пока похожих статей";
                            }
                            ?>

                        </div>
                    </div><!-- /.relatedpost -->

                    <?php }
                    } else {
                        echo "<script>window.location = '404.php';</script>";
                    } ?>
                    <h6>Блок Комментарии(0)</h6>
                </main>
            </div>
            <div class="col s12 m5 l4">
                <?php include 'inc/side_bar.php'; ?>
            </div>
        </div><!--/.row-->
    </div><!-- /.container -->
</div><!--/.wrap-center-content-->
<?php include 'inc/footer.php'; ?>
