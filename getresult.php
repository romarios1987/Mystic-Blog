<?php
require_once("config/config.php");
require_once("classes/Database.php");
require_once("classes/PerPage.php");
require_once "classes/Format.php";
$fm = new Format();
$db_handle = new Database();
$perPage = new PerPage();

$sql = "SELECT * from posts";
$paginationlink = "getresult.php?page=";
$pagination_setting = $_GET["pagination_setting"];

$page = 1;
if (!empty($_GET["page"])) {
    $page = $_GET["page"];
}

$start = ($page - 1) * $perPage->perpage;
if ($start < 0) $start = 0;

$query = $sql . " limit " . $start . "," . $perPage->perpage;
$faq = $db_handle->runQuery($query);

if (empty($_GET["rowcount"])) {
    $_GET["rowcount"] = $db_handle->numRows($sql);
}

if ($pagination_setting == "prev-next") {
    $perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink, $pagination_setting);
} else {
    $perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink, $pagination_setting);
}


$output = '';
foreach ($faq as $k => $v) {
    $output .= '<div class="card large hoverable">
                <input type="hidden" id="rowcount" name="rowcount" value="' . $_GET["rowcount"] . '" >
                <div class="date-acticle">
                    <div class="chip"><i class="fa fa-calendar"></i>  <span>' . $fm->formatDate($faq[$k]["date"]) . '</span></div>
                    <div class="chip"><i class="fa fa-user"></i>  <span>' . $faq[$k]["author"] . '</span></div>
                </div>
            <div class="card-image">
               <img class="responsive-img" src="images/' . $faq[$k]["image"] . '" alt="' . $faq[$k]["title"] . '">
               <span class="card-title">' . $faq[$k]["title"] . '</span>
           </div>
           <div class="card-content">
              <p>' . $fm->textShorten($faq[$k]["body"]) . '</p>
           </div>
           <div class="card-action">
                <a href="post.php?id=' . $faq[$k]["id"] . '" class="waves-effect waves-light btn red accent-4">Далее</a>
           </div>
           </div><!-- /.card -->';

}
if (!empty($perpageresult)) {
    $output .= '<div id="pagination">' . $perpageresult . '</div>';
}
print $output;
?>
