<?php 
/*打开图片*/
    //1.配置图片路径
    $src='jq.jpg';
    //2.获取图片信息
    $info=getimagesize($src);
    //3.通过图片编号来获取图片类型
    $type=image_type_to_extension($info[2],false);
    //4.在内存中创建一个和我们图片类型一样的图像
    $fun="imagecreatefrom{$type}";
    //5.把图片复制到我们的内存中
    $image=$fun($src);

/*操作图片*/
    //1.设置水印图片路径
    $image_Make="kakaxi.jpg";
    //2.获取水印图片的基本信息
    $info2=getimagesize($image_Make);
    //3.通过水印的图像编号来获取水印的图片类型
    $type2=image_type_to_extension($info2[2],false);
    //4.在内存中创建一个和水印图像一致的图片类型
    $fun2="imagecreatefrom{$type2}";
    //5.把水印图片复制到内存中
    $water=$fun2($image_Make);
    //6.合并图片
    imagecopymerge($image, $water, 20,30,0,0,$info2[0],$info2[1],30);
    //7.销毁水印图片
    imagedestroy($water);
    
/*输出图片*/
    //浏览器输出
    header("Content-type:".$info['mime']);
    $func="image{$type}";
    $func($image);
    //保存图片
    $func($image,'image_image.'.$type);
/*销毁图片*/
    imagedestroy($image);
?>