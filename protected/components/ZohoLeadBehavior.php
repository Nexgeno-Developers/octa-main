<?php

class ZohoLeadBehavior extends CActiveRecordBehavior
{
    public $fieldMap = array();
    private $newRecord = false;

    public function events()
    {
        return array(
            'onBeforeSave' => 'beforeSave',
            'onAfterSave'  => 'afterSave'
        );
    }

    public function beforeSave($event)
    {
        $this->newRecord = $this->getOwner()->getIsNewRecord();
    }

    public function afterSave($event)
    {
        if (!$this->newRecord) {
            return;
        }

        $model = $this->getOwner();
        $lead = array();

        foreach ($this->fieldMap as $zohoField => $modelField) {
            $lead[$zohoField] = $model->{$modelField};
        }

        try {
            Yii::import('application.components.ZohoCampaigns');

            $zoho = new ZohoCampaigns();
            $zoho->subscribe($lead);
        } catch (Exception $e) {
            Yii::log(
                'Zoho integration error: ' . $e->getMessage(),
                CLogger::LEVEL_ERROR
            );
        }
    }
}