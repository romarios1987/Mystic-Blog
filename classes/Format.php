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

    /**
     * @param $text
     * @param int $limit
     * @return bool|string
     */
    public function textShorten($text, $limit = 400)
    {
        $text = $text . " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
        return $text;
    }


    /**
     * @param $data
     * @return string
     */
    public function validation($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}