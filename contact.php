<?php
include 'inc/header.php';
?>
<div class="wrap-center-content">
    <div class="container">
        <div class="row">
            <div class="col s12 m7 l8">
                <main>
                    <div class="contact-wrap">
                        <h4>Контакты</h4>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate" required>
                                        <label for="first_name">Ваше имя</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Ваше фамилия</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" type="email" class="validate" required>
                                        <label for="email">Ваш Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Ваше сообщение</label>
                                    </div>
                                </div>
                                <button class="btn waves-effect waves-light red accent-4" type="submit" name="action">
                                    Отправить
                                    <i class="material-icons right">send</i>
                                </button>
                            </form>
                        </div>
                    </div><!-- /.contact-wrap -->
                </main>
            </div>
            <div class="col s12 m5 l4">
                <?php include 'inc/side_bar.php'; ?>
            </div>
        </div>
    </div><!-- /.container -->
</div><!--/.wrap-center-content-->
<?php include 'inc/footer.php'; ?>
