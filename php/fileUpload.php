<?php
/**
 * 图片上传
 */
header('Access-Control-Allow-Origin:*');   // 指定允许其他域名访问

function create_token()
{
    $str = md5(uniqid(md5(microtime(true)), true));
    $str = sha1($str);
    return $str;
}

$filename = create_token();

$file = @$_FILES['file'];
$upload_path = '../upload/';
if ($file) {
    if (move_uploaded_file($file['tmp_name'], $upload_path . $filename . '.jpg')) {
        $data = [
            'url' => $filename . '.jpg'
        ];
        echo json_encode(['data' => $data, 'resultCode' => 0]);
        return;
    } else {
        echo json_encode(['resultCode' => 25, 'resultMsg' => '图片上传失败']);
        return;
    }
}

