<?php

/**
 * Class Format
 */
class Format
{
    /**
     * @param $date
     * @return false|string
     */
    public function formatDate($date)
    {
        return date('d-m-Y | H:i', strtotime($date));
    }

    public function textShorten($text, $limit = 400)
    {
        $text = $text . " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
        return $text;
    }
}