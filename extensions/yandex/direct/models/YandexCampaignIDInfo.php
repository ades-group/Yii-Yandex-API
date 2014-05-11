<?php
class YandexCampaignIDInfo extends YandexApiModel
{
    public $CampaignID;

    public function attributeNames()
    {
        return array(
            'CampaignID',
        );
    }

    public function rules()
    {
        return array(
                array('CampaignID','required'),
                array('CampaignID', 'numerical', 'integerOnly'=>true),
        );
    }
}