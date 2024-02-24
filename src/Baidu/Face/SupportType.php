<?php

/**
 * Created by PhpStorm.
 * User: hahaxixi2017
 * Date: 2017/12/11
 * Time: 20:48
 */
return [
    'detect', //人脸检测
    'detectv3', //人脸检测
    'match', //人脸比对
    'matchv3', //人脸比对
    'verify', //人脸认证:uid用户id,group_id:用户组;image:图像base64编码
    'identify', //人脸识别
    'multi-identify', //M:N 识别
    //group_id:用户组;image:图像base64编码，每次仅支持单张图片，图片编码后大小不超过10M,ext_fields,user_top_num

    'add', //人脸库添加
    'update', //人脸库更新
    'delete', //人脸删除
    'get', //用户信息查询

    'getlist', //组列表查询
    'getusers', //组内用户列表查询
    'adduser', //组间复制用户
    'deleteuser', //组内删除用户


    'match_v3',
    'detect_v3',
    'search_v3',
    'multi-search_v3',
    'useradd_v3',
    'userupdate_v3',
    'facedelete_v3',
    'userget_v3',
    'groupgetusers_v3',
    'usercopy_v3',
    'userdelete_v3',
    'groupadd_v3',
    'groupdelete_v3',
    'groupgetlist_v3',
    'personverify_v3',
    'faceverify_v3',
];
