<?php

class Tin{
    private $URL;
    private $TITLE;
    private $IMAGE;
    private $DETAILCONTENT;

    function __construct($url, $title, $image, $detailContent) {
        $this->URL           = $url;
        $this->TITLE         = $title;
        $this->IMAGE         = $image;
        $this->DETAILCONTENT = $detailContent;
    }

    function Insert() {
        return "INSERT INTO news(url, title, image, content)
                VALUES ('$this->URL', '$this->TITLE', '$this->IMAGE', '$this->DETAILCONTENT')";
    }
}