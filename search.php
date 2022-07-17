<?php
if(isset($_GET['search-type'])) {
    $type = $_GET['search-type'];
    if($type == 'normal') {
        load_template(TEMPLATEPATH . '/normal-search.php');
    } elseif($type == 'news') {
        load_template(TEMPLATEPATH . '/news-search.php');
    }
}
?>
