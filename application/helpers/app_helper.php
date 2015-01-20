<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function generate_thumbnail($img_source = '', $width = '200', $height = '200', $crop = 1)
{
    $img = ($img_source != '') ? $img_source : base_url('thumb/nopict.png');

    return base_url() . 'thumb/phpThumb.php?src=' . $img . '&w=' . $width . '&h=' . $height . '&zc=' . $crop;
}

function stip_contact($str, $replacement = '***')
{
    /* email */
    $pattern = "/[^@\s]*@[^@\s]*\.[^@\s]*/";
    $str = preg_replace($pattern, $replacement, $str);

    /* url */
    $pattern = "/[a-zA-Z]*[:\/\/]*[A-Za-z0-9\-_]+\.+[A-Za-z0-9\.\/%&=\?\-_]+/i";
    $str = preg_replace($pattern, $replacement, $str);

    /* phone */
    $str = preg_replace('/\+?[0-9][0-9()-\s+]{4,20}[0-9]/', $replacement, $str);

    return $str;
}

function send_mail($to, $from, $subject, $message)
{
    $headers = "From: " . strip_tags($from) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($from) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    mail($to, $subject, $message, $headers);
}

function random_password($length = 8)
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length; $i++)
    {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function random_key($length = 4)
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length; $i++)
    {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function get_pc_name()
{
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    return $hostname;
}