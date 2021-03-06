<?xml version="1.0" encoding="UTF-8"?>
<vxml version = "2.1" application="http://webhosting.voxeo.net/208143/www/root.vxml">

<?php
/**
 * 发送post请求
 * @param string $url 请求地址
 * @param array $post_data post键值对数据
 * @return string
 */

$conf = include('config.php');
$CHOI_ID = $conf->CHOI_ID_N;
$VOTE_URL = $conf->VOTE_URL;

function send_post($url, $post_data) {
 
    $postdata = http_build_query($post_data);
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata,
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
 
    return $result;
}

$post_data = array(
    'choice' => $CHOI_ID
);
send_post($VOTE_URL, $post_data);
echo "DONE"
?>

</vxml>