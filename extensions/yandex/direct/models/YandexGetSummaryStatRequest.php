<?php
class YandexGetSummaryStatRequest extends YandexApiModel
{
    public $CampaignIDS=array();
    public $StartDate;
    public $EndDate;

    public function attributeNames()
    {
        return array(
            'CampaignIDS',
            'StartDate',
            'EndDate',
        );
    }

    public function addCampaign(YandexCampaignIDInfo $CampaignIDInfo)
    {
        $this->CampaignIDS[]=$CampaignIDInfo->CampaignID;
    }

    public function rules()
    {
        return array(
            array('CampaignIDS, StartDate, EndDate',
                'required'),
            array('StartDate, EndDate','date','format'=>'yyyy-MM-dd'),
        );
    }
}