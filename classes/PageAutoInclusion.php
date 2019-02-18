<?php

class PageAutoInclusion
{
    public static function displayPage()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : "";
        echo $page;

        /*$display = "";
        $display .= self::getHtml();
        $display .= self::getHeader();
        $display .= self::getMain();
        $display .= self::getFooter();*/
    }

    /*private static function getHtml($page)
    {

    }

    private static function getHeader()
    {

    }

    private static function getMain()
    {

    }

    private static function getFooter()
    {

    }*/
}