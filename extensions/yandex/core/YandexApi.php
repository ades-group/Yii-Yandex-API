<?php
class YandexApi extends CApplicationComponent implements iYandexRequest
{
    public $token='44e7c1f156a845708a2fa44601ef2835';

    public $live=true;
    public $method='POST';
    public $locale='ru';
    public $url_json='.yandex.ru/v4/json/';

    protected $_data;

    public function getUrl()
    {
        if ($this->live===true)
        {
            $url='api'.$this->url_json;
        }
        else
        {
            $url='api-sandbox'.$this->url_json;
        }
        return 'https://'.$url;
    }

    public function getHttpHeaders()
    {
        return array(
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: '.strlen($this->getData())
        );
    }

    public function getData()
    {
       return CJSON::encode($this->_data);
    }

    public function setData($method,$data)
    {
        if (is_object($data))
        {
            $data=$data->toArray();
        }

        $this->_data=array(
                'method'=>$method,
                'param'=>$data,
                'token'=> $this->token,
                'locale'=> 'ru',
            );
    }

    public function getOptions()
    {
        return array(

        );
    }

    public function getRespons()
    {
        return YandexApiHelper::getRespons($this);
    }

    public function returnDataObjects($data,$object)
    {
        $return=array();

        foreach ($data as $val)
        {
            $temp=new $object();
            $temp->attributes=$val;
            $return[]=$temp;
        }

        return $return;
    }
}