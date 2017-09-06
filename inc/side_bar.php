<aside>
    <div class="container-4 card effectively">
        <form action="#" method="get">
            <input type="search" id="search" placeholder="Поиск..."/>
            <button type="submit" class="icon"><i class="fa fa-search"></i></button>
        </form>
    </div>


    <ul class="side-nav" style="transform: translateX(0px);">
        <?php
        $query = "SELECT * FROM category";
        $category = $db->runQuery($query);
        if ($category) {
            foreach ($category as $item => $value) {
                ?>
                <li class="bold"><a class="waves-effect waves-teal"
                                    href="posts.php?category=<?= $category[$item]['id']; ?>"><?= $category[$item]['name']; ?></a>
                </li>
            <?php }
        } else {
            echo '<li class="bold">Не создано ни одной категории</li>';
        } ?>
    </ul><!--/.side-nav-->

    <h5 class="center-align">Последние статьи</h5>
    <div class="latest-articles">
        <?php
        $query = "SELECT * from posts ORDER BY title DESC LIMIT 5";
        $post = $db->runQuery($query);
        if ($post) {
            foreach ($post as $item => $value) { ?>
                <div class="latest-article">
                    <h6><a href="post.php?id=<?= $post[$item]["id"]; ?>"><?= $post[$item]['title']; ?></a></h6>
                    <a href="post.php?id=<?= $post[$item]["id"]; ?>"><img class="responsive-img"
                                                                          src="images/<?= $post[$item]['image']; ?>"
                                                                          alt="<?= $post[$item]['title']; ?>"></a>
                    <p><?= $fm->textShorten($post[$item]['body']); ?></p>
                </div><!-- /.latest-article  -->
            <?php }
        }else{echo "<script>window.location = '404.php';</script>";} ?>
    </div><!-- /.latest-articles -->
</aside>