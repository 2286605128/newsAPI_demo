<?php
$path = dirname(__FILE__);
$file = file($path."/hitokoto.txt");//��ȡ�����ļ��ľ���·��,�ļ��������Զ��塣
 
//�����ȡһ������
$arr  = mt_rand( 0, count( $file ) - 1 );
$content  = trim($file[$arr]);
 
//�����жϣ����������Ӧ����Ӧͷ������
if (isset($_GET['charset']) && !empty($_GET['charset'])) {
    $charset = $_GET['charset'];
    if (strcasecmp($charset,"gbk") == 0 ) {
        $content = mb_convert_encoding($content,'gbk', 'utf-8');
    }
} else {
    $charset = 'utf-8';
}
header("Content-Type: text/html; charset=$charset");
 
//��ʽ���жϣ����js���ı�
if ($_GET['format'] === 'js') {
    echo "function hitokoto(){document.write('" . $content ."');}";
} else {
    echo $content;
}