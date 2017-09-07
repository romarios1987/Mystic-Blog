<?php require_once 'inc/header.php'; ?>
    <div class="row">
        <div class="col s12 m4 l3">
            <?php require_once 'inc/side_bar.php'; ?>
        </div>
        <div class="col s12 m8 l9">
            <main>
                <div class="admin-dashboard">
                    <div class="header-dash"><h5>Добавить новую статью</h5></div>
                    <div class="divider"></div>
                    <div class="admin-content">
                        <form action="#">
                            <div class="row">
                                <div class="col m12 s12">
                                    <h6><b>Заголовок</b></h6>
                                    <div class="input-field">
                                        <input id="last_name" type="text">
                                        <label for="last_name">Введите заголовок статьи</label>
                                    </div>
                                    <h6><b>Категория</b></h6>
                                    <div class="input-field">
                                        <select>
                                            <option value="" disabled selected>Выбрать категорию</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>
                                    <h6><b>Загрузить картинку</b></h6>
                                    <div class="file-field input-field">
                                        <div class="btn grey darken-4">
                                            <span>Выберите файл</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                    <h6><b>Описание</b></h6>
                                    <div class="input-field">
                                        <textarea id="textarea1" name="ck_editor"
                                                  class="materialize-textarea"></textarea>
                                    </div>
                                    <br>
                                    <h6><b>Теги</b></h6>
                                    <div class="input-field">
                                        <input id="last_name" type="text">
                                        <label for="last_name">Введите теги</label>
                                    </div>
                                    <h6><b>Автор</b></h6>
                                    <div class="input-field">
                                        <input id="last_name" type="text">
                                        <label for="last_name">Автор</label>
                                    </div>
                                    <input type="submit" class="waves-effect waves-light btn pulse red accent-4"
                                           value="Сохранить">
                                </div>
                            </div>
                        </form>
                    </div><!-- /.admin-content -->
                </div><!-- /.admin-dashboard -->
            </main>
        </div>
    </div>
<?php require_once 'inc/footer.php' ?>