<?php
/**
 * Created by PhpStorm.
 * Author: Baykier<1035666345@qq.com>
 * Date: 2016/11/9
 * Time: 19:30
 */

require_once __DIR__ . '/vendor/autoload.php';

use Baykier\Expressnd\Express;
use Baykier\Expressnd\ExpressMap;

$postId = '416912603817';//417239209856

$express = new Express();
$express->setPostId($postId);
$express->setType(ExpressMap::EXPRESS_ZHONGTONG);
$re = $express->getExpress();

print_r($re);