<?xml version="1.0" encoding="UTF-8"?>
<vxml version = "2.1" application="http://webhosting.voxeo.net/208143/www/root.vxml">

<?php
/**
 * 发送post请求
 * @param string $url 请求地址
 * @param array $post_data post键值对数据
 * @return string
 */
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
    'choice' => '3'
);
send_post('http://13.38.249.239:8000/polls/3/vote/', $post_data);
echo "DONE"
?>

</vxml>