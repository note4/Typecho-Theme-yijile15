<?php

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
} 

/**
 * 输出文章缩略图
 *
 * @author ShingChi
 * @access public
 * @param int $width 缩略图宽度  
 * @param int $height 缩略图高度
 * @return viod
 * @version Release 1.0.4
 */ 
function img_postthumb($cid) {
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select('table.contents.text')
        ->from('table.contents')
        ->where('table.contents.cid=?', $cid)
        ->order('table.contents.cid', Typecho_Db::SORT_ASC)
        ->limit(1));
 
    preg_match_all('/(http:\/\/)[0-9a-z\.\/]+(\.(jpg|jpeg|png|gif))/i', $rs['text'], $thumbUrl);
    //会错误获取一切网址 /http:\/\/[0-9a-z\.\/]+[.jpg|.png|.gif]/i
    //preg_match_all("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $rs['text'], $thumbUrl);  //通过正则式获取图片地址 
    $img_src = $thumbUrl[0][0];  //将赋值给img_src
    $img_counter = count($thumbUrl[0]);  //一个src地址的计数器
 
    switch ($img_counter > 0) {
        case $allPics = 1:
            echo '<span class="SpanPic"><img src="/thumb.php?zc=1&h=130&w=200&src=';
            echo $img_src;  //当找到一个src地址的时候，输出缩略图
            echo '" alt="缩略图"></span>';
            break;
        default: 
            echo ""; //没找到(默认情况下)，不输出任何内容 echo(rand(1,3));  echo "http://placekitten.com/42";echo(rand(0,9));echo "/19";echo(rand(0,9));
    };
}

/**
 * 输出文章缩略图
 *
 * @author ShingChi
 * @access public
 * @param int $width 缩略图宽度  
 * @param int $height 缩略图高度
 * @return viod
 * @version Release 1.0.4
 */ 
function img_cover($cid) {
    $db = Typecho_Db::get();
    $rs = $db->fetchRow($db->select('table.contents.text')
        ->from('table.contents')
        ->where('table.contents.cid=?', $cid)
        ->order('table.contents.cid', Typecho_Db::SORT_ASC)
        ->limit(1));
    preg_match_all('/(http:\/\/)[0-9a-z\.\/]+(\.(jpg|jpeg|png|gif))/i', $rs['text'], $thumbUrl);
    $img_src = $thumbUrl[0][0];
    $img_counter = count($thumbUrl[0]);
 
    switch ($img_counter > 0) {
        case $allPics = 1:
            echo $img_src;
            break;
        default: 
            echo ""; //没找到(默认情况下)，不输出任何内容 echo(rand(1,3));  echo "http://placekitten.com/42";echo(rand(0,9));echo "/19";echo(rand(0,9));
    };
}