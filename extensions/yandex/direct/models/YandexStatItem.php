<?php
class YandexStatItem extends YandexApiModel
{
    public $CampaignID;
    public $StatDate;
    public $SumSearch;
    public $SumContext;
    public $ShowsSearch;
    public $ShowsContext;
    public $ClicksSearch;
    public $ClicksContext;
    public $SessionDepthSearch;
    public $SessionDepthContext;
    public $GoalConversionSearch;
    public $GoalConversionContext;
    public $GoalCostSearch;
    public $GoalCostContext;

    public function attributeNames()
    {
        return array(
            'CampaignID',
            'StatDate',
            'SumSearch',
            'SumContext',
            'ShowsSearch',
            'ShowsContext',
            'ClicksSearch',
            'ClicksContext',
            'SessionDepthSearch',
            'SessionDepthContext',
            'GoalConversionSearch',
            'GoalConversionContext',
            'GoalCostSearch',
            'GoalCostContext',
        );
    }

    public function rules()
    {
        return array(
            array('CampaignID, StatDate, SumSearch, SumContext, ShowsSearch, ShowsContext, ClicksSearch, ClicksContext, SessionDepthSearch,
                    SessionDepthContext, GoalConversionSearch, GoalConversionContext, GoalCostSearch, GoalCostContext',
                 'required'),
            array('CampaignID, ShowsSearch, ShowsContext, ClicksSearch, ClicksContext', 'numerical', 'integerOnly'=>true),
            array('StatDate','date','format'=>'yyyy-MM-dd'),
            array('SumSearch, SumContext, SessionDepthSearch,SessionDepthContext, GoalConversionSearch,
                    GoalConversionContext, GoalCostSearch, GoalCostContext','type','type'=>'float'),
        );
    }
}