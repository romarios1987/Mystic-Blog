<?php require_once 'inc/header.php'; ?>
    <div class="row">
        <div class="col s12 m4 l3">
            <?php require_once 'inc/side_bar.php'; ?>
        </div>
        <div class="col s12 m8 l9">
            <main>
                <div class="admin-dashboard">
                    <div class="header-dash"><h5>Список категорий</h5></div>
                    <div class="divider"></div>
                    <div class="admin-content">
                        <table class="highlight responsive-table  grey lighten-3 bordered">
                            <thead>
                            <tr>
                                <th>Номер</th>
                                <th>Название категории</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $query = "SELECT * FROM category ORDER BY id DESC";
                            $category = $db->select($query);
                            if ($category) {
                                $i = 0;
                                while ($result = $category->fetch_assoc()) {
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $result['name']; ?></td>
                                        <td>
                                            <a href="cat_edit.php?id_cat=<?= $result['id']; ?>" class="black-text"><i
                                                        class="fa fa-pencil"></i></a> ||
                                            <a onclick="return confirm('Вы уверены что хотите удалить?');"
                                               href="cat_detele.php?id_cat=<?= $result['id']; ?>"
                                               class="red-text accent-4"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php require_once 'inc/footer.php'; ?>