<?php

namespace App\Helpers;

class MyUtils
{
    public static function getParams($url)
    {
        $url = explode("?", $url);
        $params = [];
        if (count($url) == 2) {
            $url = explode("&", $url[1]);
            for ($i = 0; $i < count($url); $i++) {
                $temp = explode('=', $url[$i]);
                $params[$temp[0]] = $temp[1];
            }
        }
        return $params;
    }

    public static function generateRandomString($length = 10)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    public static function secondToTime($totalSeconds)
    {
        $day = intval($totalSeconds / 86400);
        $totalSeconds = $totalSeconds % 86400;
        $hours = intval($totalSeconds / 3600);
        $totalSeconds = $totalSeconds % 3600;
        $minutes = intval($totalSeconds / 60);
        $seconds = intval($totalSeconds % 60);

        $msg = "";

        if ($day > 0) {
            // $day = String(day).padStart(2, "0");
            $msg .= " " . $day . " Hari\n";
        }
        if ($hours > 0) {
            // hours = String(hours).padStart(2, "0");
            $msg .= " " . $hours . " Jam\n";
        }
        if ($minutes > 0) {
            // minutes = String(minutes).padStart(2, "0");
            $msg .= " " . $minutes . " Menit\n";
        }
        if ($seconds > 0) {
            // seconds = String($seconds).padStart(2, "0");
            $msg .= " " . $seconds . " Detik\n";
        }
        if (strlen($msg) == 0) {
            return "0 Detik";
        }
        return $msg;
    }
}
