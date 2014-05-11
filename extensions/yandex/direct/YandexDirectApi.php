<?php
Yii::import('yandex.core.*');
Yii::import('yandex.direct.models.*');

class YandexDirectApi extends YandexApi
{
    public $url_json='.direct.yandex.ru/v4/json/';

    public function init()
    {
        parent::init();
    }

    public function getHttpHeaders()
    {
        return array_merge(
            parent::getHttpHeaders(),
            array(
                'Host: api.direct.yandex.ru',
            )
        );
    }

    public function archiveCampaign(YandexCampaignIDInfo $CampaignID)
    {
        $this->setData(ucfirst(__FUNCTION__),$CampaignID);
        return $this->getRespons();
    }

    public function deleteCampaign(YandexCampaignIDInfo $CampaignID)
    {
        $this->setData(ucfirst(__FUNCTION__),$CampaignID);
        return $this->getRespons();
    }

    public function getCampaignParams(YandexCampaignIDInfo $CampaignID)
    {
        $this->setData(ucfirst(__FUNCTION__),$CampaignID);
        return $this->getRespons();
    }

    public function getCampaignsList($logins=array())
    {
        $this->setData(ucfirst(__FUNCTION__),$logins);
        $respons=$this->getRespons();

        return $this->returnDataObjects($respons['data'],YanndexShortCampaignInfo);
    }

    public function getCampaignsParams($ids)
    {
        $this->setData(ucfirst(__FUNCTION__),array('CampaignIDS'=>$ids));
        return $this->getRespons();
    }

    public function resumeCampaign(YandexCampaignIDInfo $CampaignID)
    {
        $this->setData(ucfirst(__FUNCTION__),$CampaignID);
        return $this->getRespons();
    }

    public function stopCampaign(YandexCampaignIDInfo $CampaignID)
    {
        $this->setData(ucfirst(__FUNCTION__),$CampaignID);
        return $this->getRespons();
    }

    public function unArchiveCampaign(YandexCampaignIDInfo $CampaignID)
    {
        $this->setData(ucfirst(__FUNCTION__),$CampaignID);
        return $this->getRespons();
    }


    public function getSummaryStat(YandexGetSummaryStatRequest $GetSummaryStatRequest)
    {
        $this->setData(ucfirst(__FUNCTION__),$GetSummaryStatRequest);
        $respons=$this->getRespons();

        return $this->returnDataObjects($respons['data'],YandexStatItem);
    }
}