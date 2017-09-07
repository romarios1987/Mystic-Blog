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
                            <tr>
                                <td>1</td>
                                <td>Eclair</td>
                                <td>
                                    <a href="#" class="black-text"><i class="fa fa-pencil"></i></a> ||
                                    <a href="#" class="red-text accent-4"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jellybean</td>
                                <td>
                                    <a href="#" class="black-text"><i class="fa fa-pencil"></i></a> ||
                                    <a href="#" class="red-text accent-4"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Lollipop</td>
                                <td>
                                    <a href="#" class="black-text"><i class="fa fa-pencil"></i></a> ||
                                    <a href="#" class="red-text accent-4"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php require_once 'inc/footer.php'; ?>