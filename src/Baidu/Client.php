<?php
/**
 * Created by PhpStorm.
 * User: hahaxixi2017
 * Date: 2017/12/8
 * Time: 22:44
 */
namespace AI\Baidu;

use AI\Common\BaseClient;

/**
 * Class Client.
 *
 * @author hahaxixi <hahaxixicc@gmail.com>
 */
class Client extends BaseClient
{
    /**
     * @var string
     */
    protected $baseUri = 'https://aip.baidubce.com/rest/2.0/';

    /**
     *  author:HAHAXIXI
     *  created_at: 2017-12-7
     *  updated_at: 2017-12-
     * @param $url
     * @param array $data
     * @param array $params
     * @param array $headers
     * @return \AI\Common\Tool\Collection|array|object|\Psr\Http\Message\ResponseInterface|string
     *  desc   :
     */
    public function post($url, $data = [], $params = [], $headers = [])
    {
        if ($url == 'face/v3/match'){
            return $this->httpPostJson($url, $data, $headers=array(
                'Content-Type: application/json',
                'Cache-Control: no-cache',
                'Pragma: no-cache'
            ));
        };
        return $this->httpPost($url, $data);
    }

}
