<?php require_once 'inc/header.php'; ?>
    <div class="row">
        <div class="col s12 m4 l3">
            <?php require_once 'inc/side_bar.php'; ?>
        </div>
        <div class="col s12 m8 l9">
            <main>
                <div class="admin-dashboard">
                    <div class="header-dash"><h5>Добавить категорию</h5></div>
                    <div class="divider"></div>
                    <div class="admin-content">

                        <?php

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                            $category_name = $_POST['category_name'];
                            $category_name = mysqli_real_escape_string($db->connectDB(), $category_name);
                            if (empty($category_name)) {
                                echo "<span class='red-text accent-4'>Ведите название категории!</span>";
                            } else {
                                $query = "INSERT INTO category(name) VALUES('$category_name')";
                                $category_insert = $db->insert($query);
                                if ($category_insert) {
                                    echo "<span class='green-text accent-4'>Категория успешно добавлена!!!</span>";
                                } else {
                                    echo "<span class='red-text accent-4'>Категория успешно НЕ добавлена!!!</span>";
                                }

                            }

                        }

                        ?>


                        <form action="" method="post" class="col s8">
                            <div class="row">
                                <div class="input-field">
                                    <input id="last_name" name="category_name" type="text">
                                    <label for="last_name">Введите название категории</label>
                                </div>
                                <input type="submit" class="waves-effect waves-light btn pulse red accent-4"
                                       value="Сохранить">
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php require_once 'inc/footer.php'; ?>