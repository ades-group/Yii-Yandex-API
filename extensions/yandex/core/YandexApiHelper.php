<?php
class YandexApiHelper
{
    public static function getRespons(iYandexRequest $request)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request->url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request->getHttpHeaders());

        if ($request->method=='POST')
        {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getData());
        }

        if (!empty($request->options))
        {
            curl_setopt_array($ch, $request->getOptions());
        }

        curl_setopt($ch, CURLOPT_CAINFO, dirname(__FILE__) . '/cacert.pem');

        $result = curl_exec($ch);
        curl_close($ch);



//        if ($result=='')
//        {
//            throw new CException("Bad request");
//        }

        return CJSON::decode($result);
    }
}