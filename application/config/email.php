<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|   File created to save config settings for sending Email
*/

function getUrl($url)
{
    $ch = curl_init(); 
    $timeout = 5; // set to zero for no timeout 
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
    curl_setopt ($ch, CURLOPT_URL, $url); 
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_PROXY, "proxy01.sc.intel.com:911"); //your proxy url
    curl_setopt($ch, CURLOPT_PROXY, "smtp.intel.com"); //your proxy url
    curl_setopt($ch, CURLOPT_PROXY, "proxy-us.intel.com"); //your proxy url
    //curl_setopt($ch, CURLOPT_PROXY, "pki.intel.com:443"); //your proxy url
    //curl_setopt($ch, CURLOPT_PROXYPORT, "443"); // your proxy port number 
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "piyush.keshri@intel.com:07-sep-19895"); //username:pass 
    $file_contents = curl_exec($ch); 
    curl_close($ch); 
    return $file_contents;
}

echo  getUrl("http://www.google.com");

$config['protocol']     = 'smtp';
$config['mailpath']     = '/usr/sbin/sendmail';
$config['smtp_host']    = 'tls://smtp.gmail.com';
$config['smtp_user']    = 'piyushkeshri@gmail.com';
$config['smtp_pass']    = '30nov1956';
$config['smtp_port']    = '587';
//$config['smtp_port']    = '465';

//$config['protocol']     = 'smtp';
//$config['mailpath']     = '/usr/sbin/sendmail';
//$config['smtp_host']    = 'smtp.mandrillapp.com';
//$config['smtp_user']    = 'piyushkeshri@gmail.com';
//$config['smtp_pass']    = 'fEfUj7jANJD4Oe8fYryhug';
//$config['smtp_port']    = '587';