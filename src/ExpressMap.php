<?php
/**
 * Created by PhpStorm.
 * Author: Baykier<1035666345@qq.com>
 * Date: 2016/11/9
 * Time: 18:47
 */
namespace Baykier\Expressnd;

class ExpressMap
{
    const EXPRESS_SHUNFENG = 'shunfeng';
    const EXPRESS_EMS = 'ems';
    const EXPRESS_YOUZHENG = 'youzhengguonei';
    const EXPRESS_HUITONG = 'huitongkuaidi';
    const EXPRESS_SHENTONG = 'shentong';
    const EXPRESS_ZHONGTONG = 'zhongtong';
    const EXPRESS_YUANTONG = 'yuantong';
    const EXPRESS_GUOTONG = 'guotongkuaidi';
    const EXPRESS_YUNDA = 'yunda';
    const EXPRESS_TIANTIAN = 'tiantian';
    const EXPRESS_YOUSU = 'youshuwuliu';
    const EXPRESS_KUAIJIE = 'kuaijiesudi';
    const EXPRESS_QUANFENG = 'quanfengkuaidi';
    const EXPRESS_JD = 'jd';
    const EXPRESS_ZHAIJISONG = 'zhaijisong';

    protected static $expressMap = array(
        self::EXPRESS_SHUNFENG => '顺丰',
        self::EXPRESS_EMS => 'EMS',
        self::EXPRESS_YOUZHENG => '邮政包裹',
        self::EXPRESS_HUITONG => '百世汇通',
        self::EXPRESS_SHENTONG => '申通',
        self::EXPRESS_ZHONGTONG => '中通',
        self::EXPRESS_YUANTONG => '圆通',
        self::EXPRESS_GUOTONG => '国通',
        self::EXPRESS_YUNDA => '韵达',
        self::EXPRESS_TIANTIAN => '天天',
        self::EXPRESS_YOUSU => '优速',
        self::EXPRESS_KUAIJIE => '快捷',
        self::EXPRESS_QUANFENG => '全峰',
        self::EXPRESS_JD => '京东',
        self::EXPRESS_ZHAIJISONG => '宅急送',
    );

    public static function getLabel($key,$default = null)
    {
        return isset(self::$expressMap[$key]) ? self::$expressMap[$key] : $default;
    }

    public static function getLabels()
    {
        return self::$expressMap;
    }
}