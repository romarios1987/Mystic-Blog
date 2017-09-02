<?php
include 'inc/header.php';
include 'inc/slider.php';
?>
    <div class="wrap-center-content">
        <div class="container">
            <div class="row">
                <div class="col s12 m7 l8">
                    <main>
                        <?php $query = "SELECT * FROM posts";
                        $post = $db->select($query);
                        if ($post) {
                            while ($result = $post->fetch_assoc()) { ?>

                                <div class="card large hoverable">
                                    <div class="date-acticle">
                                        <div class="chip"><i class="fa fa-calendar"></i> <span><?=$fm->formatDate($result['date']);?></span></div>
                                        <div class="chip"><i class="fa fa-user"></i> <span><?=$result['author'];?></span></div>
                                    </div>
                                    <div class="card-image">
                                        <img class="responsive-img" src="images/<?=$result['image'];?>" alt="<?=$result['title'];?>">
                                        <span class="card-title"><?=$result['title'];?></span>
                                    </div>
                                    <div class="card-content">
                                        <p><?=$fm->textShorten($result['body'],500);?></p>
                                    </div>
                                    <div class="card-action">
                                        <a href="post.php" class="waves-effect waves-light btn red accent-4">Далее</a>
                                    </div>
                                </div><!-- /.card -->
                            <?php }/*end while loop*/
                        } else {
                            header("Location: 404.php");
                        } ?>

                    </main>
                    <div class="wrap-pagination center-align">
                        <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>
                    </div><!-- /.wrap-pagination  -->
                </div>
                <div class="col s12 m5 l4">
                    <?php include 'inc/side_bar.php'; ?>
                </div>
            </div><!--/.row-->
        </div><!-- /.container -->
    </div><!--/.wrap-center-content-->
<?php include 'inc/footer.php'; ?>