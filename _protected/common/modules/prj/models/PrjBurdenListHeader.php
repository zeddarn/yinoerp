<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_list_header}}".
 *
 * @property string $prj_burden_list_header_id
 * @property string $burden_list
 * @property integer $prj_burden_structure_header_id
 * @property string $description
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBurdenListHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_list_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['burden_list', 'created_by', 'last_update_by'], 'required'],
            [['prj_burden_structure_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['burden_list'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['burden_list'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_list_header_id' => Yii::t('app', 'Prj Burden List Header ID'),
            'burden_list' => Yii::t('app', 'Burden List'),
            'prj_burden_structure_header_id' => Yii::t('app', 'Prj Burden Structure Header ID'),
            'description' => Yii::t('app', 'Description'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
