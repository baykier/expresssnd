<?php
/**
 * Created by PhpStorm.
 * Author: Baykier<1035666345@qq.com>
 * Date: 2016/11/9
 * Time: 19:08
 */
namespace Baykier\Expressnd;

use GuzzleHttp\Client;

class Express
{
    protected $type;
    protected $id = 1;
    protected $postId;
    protected $temp;
    protected $url = 'http://www.kuaidi100.com/query?postid=%s&id=%s&type=%s&temp=%s';

    public function __construct()
    {
        $this->temp = microtime(true);
    }

    public function setType($type)
    {
        if (null == ExpressMap::getLabel($type))
        {
            throw new \Exception(sprintf("暂不支持的快递:%s",$type));
        }
        $this->type = $type;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setPostId($postId)
    {
        if (!is_numeric($postId))
        {
            throw new \Exception(sprintf("不正确的单号:%s",$postId));
        }
        $this->postId = (int) $postId;
    }
    public function getPostId()
    {
        return $this->postId;
    }

    public function getQueryUrl()
    {
        return sprintf($this->url,$this->postId,$this->id,$this->type,$this->temp);
    }

    public function getExpress($format = true)
    {
        try{
            $client = new Client(array(
                'timeout' => 5
            ));
            $resp = $client->get($this->getQueryUrl());
            if ($format)
            {
                $content = (string) $resp->getBody();
                return \GuzzleHttp\json_decode($content,true);
            }
            return $resp->getBody();
        }catch (\Exception $e)
        {
            throw new \Exception($e->getMessage(),$e->getCode());
        }

    }
}