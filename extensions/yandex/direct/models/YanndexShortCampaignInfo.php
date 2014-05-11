<?php
class YanndexShortCampaignInfo extends YandexApiModel
{
    public $CampaignID;
    public $Login;
    public $Name;
    public $StartDate;
    public $Sum;
    public $Rest;
    public $SumAvailableForTransfer;
    public $Shows;
    public $Clicks;
    public $Status;
    public $StatusShow;
    public $StatusArchive;
    public $StatusActivating;
    public $StatusModerate;
    public $IsActive;
    public $ManagerName;
    public $AgencyName;

    public function attributeNames()
    {
        return array(
            'CampaignID',
            'Login',
            'Name',
            'StartDate',
            'Sum',
            'Rest',
            'SumAvailableForTransfer',
            'Shows',
            'Clicks',
            'Status',
            'StatusShow',
            'StatusArchive',
            'StatusActivating',
            'StatusModerate',
            'IsActive',
            'ManagerName',
            'AgencyName',
        );
    }

    public function rules()
    {
        return array(
            array('CampaignID, Login, Name, StartDate, Sum, Rest, SumAvailableForTransfer, Shows,
                   Clicks, Status, StatusShow, StatusArchive, StatusActivating, StatusModerate, IsActive',
                   'required'),
            array('CampaignID, Shows, Clicks', 'numerical', 'integerOnly'=>true),
            array('Login, Name, Status, StatusShow, StatusArchive, StatusActivating, StatusModerate, IsActive,
                   ManagerName, AgencyName','type','type'=>'string'),
            array('StartDate','date','format'=>'yyyy-MM-dd'),
            array('Sum, Rest, SumAvailableForTransfer','type','type'=>'float'),
        );
    }
}