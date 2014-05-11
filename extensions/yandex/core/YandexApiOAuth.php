<?php
class YandexApiOAuth implements iYandexRequest
{
    public $client_id;
    public $client_secret;

    public $url='https://oauth.yandex.ru/token';

    public $method='POST';

    public function __construct($client_id,$client_secret)
    {
        $this->client_id=$client_id;
        $this->client_secret=$client_secret;
    }

    public function getHttpHeaders()
    {
        return array(
            'Host: oauth.yandex.ru',
            'Content-type: application/x-www-form-urlencoded',
            'Content-Length: '.strlen($this->getData())
        );
    }

    public function getData()
    {
        $array=array(
              'grant_type'=>'authorization_code',
              'code'=>'2267654',
              'client_id'=>$this->client_id,
              'client_secret'=>$this->client_secret,
        );

        return http_build_query($array);
    }

    public function getOptions()
    {
        return array(

        );
    }

    public function getToken()
    {
        return YandexApiHelper::getRespons($this);
    }
}