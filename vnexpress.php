<?php
require "db_connection.php";
require "simple_html_dom.php";
require "tin_tuc.php";
$connect = new Database();

// Get content page vnexpress. Title, image, content, detail.
for($i = 1; $i <= 20; $i++) {
    $html = file_get_html("https://vnexpress.net/tin-tuc/phap-luat/page/$i.html");
    $arrayItem = $html->find(".sidebar_1 .list_news");
    foreach($arrayItem as $tin) {
        $url           = $tin->find("h3.title_news a", 0)->href;
        $title         = $tin->find("h3.title_news a", 0)->innertext();
        $image         = $tin->find(".thumb_art .thumb img", 0)->getAttribute("data-original");
        $htmlDetail    = file_get_html($url);

        $contentDetail = $htmlDetail->find(".content_detail", 0);
        if (!empty($contentDetail)) {
            $contentDetail = $htmlDetail->find(".content_detail", 0)->innertext();
        } else {
            $contentDetail = 'Tag content detail not exits';
        }
        $oneItem = new Tin($url, $title, $image, $contentDetail);

        echo ($contentDetail)."<br>"."<hr>";
        $result = mysqli_query($connect->connected(), $oneItem->Insert());
    }
}





