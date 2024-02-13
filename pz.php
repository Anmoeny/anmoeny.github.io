<?php
// 获取通过参数传递的URL
$url = isset($_GET['url']) ? $_GET['url'] : '';

// 检查URL是否为空
if (empty($url)) {
    echo "URL参数缺失";
    exit;
}

// 获取网页内容
$html = file_get_contents($url);

// 如果获取成功，则输出 HTML 内容
if ($html !== false) {
    echo $html;
} else {
    // 获取失败时输出错误信息
    echo "Failed to retrieve the HTML content from $url";
}
?>
