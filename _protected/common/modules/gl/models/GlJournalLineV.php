<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_journal_line_v}}".
 *
 * @property string $combination
 * @property integer $code_combination_id
 * @property string $period_name
 * @property string $total_cr
 * @property string $total_dr
 * @property string $total_ac_dr
 * @property string $total_ac_cr
 * @property integer $coa_id
 * @property integer $ledger_id
 * @property string $combination_description
 * @property integer $gl_journal_line_id
 * @property string $status
 * @property integer $gl_journal_header_id
 * @property integer $line_num
 * @property string $line_type
 * @property string $line_description
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $coa_structure_id
 * @property string $field1
 * @property string $field2
 * @property string $field3
 * @property string $field4
 * @property string $field5
 * @property string $field6
 * @property string $field7
 * @property string $field8
 * @property string $balance_type
 * @property string $post_date
 * @property string $gl_period_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $reference_key_name_h
 * @property string $reference_key_value_h
 */
class GlJournalLineV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_journal_line_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code_combination_id', 'coa_id', 'ledger_id', 'gl_journal_line_id', 'gl_journal_header_id', 'line_num', 'coa_structure_id', 'gl_period_id', 'created_by', 'last_update_by'], 'integer'],
            [['total_cr', 'total_dr', 'total_ac_dr', 'total_ac_cr'], 'number'],
            [['status'], 'string'],
            [['gl_journal_header_id', 'line_num', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['post_date', 'creation_date', 'last_update_date'], 'safe'],
            [['combination', 'line_description'], 'string', 'max' => 256],
            [['period_name', 'line_type', 'reference_type', 'reference_key_value', 'balance_type', 'reference_key_name_h', 'reference_key_value_h'], 'string', 'max' => 25],
            [['combination_description'], 'string', 'max' => 200],
            [['reference_key_name'], 'string', 'max' => 50],
            [['field1', 'field2', 'field3', 'field4', 'field5', 'field6', 'field7', 'field8'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'combination' => Yii::t('app', 'Combination'),
            'code_combination_id' => Yii::t('app', 'Code Combination ID'),
            'period_name' => Yii::t('app', 'Period Name'),
            'total_cr' => Yii::t('app', 'Total Cr'),
            'total_dr' => Yii::t('app', 'Total Dr'),
            'total_ac_dr' => Yii::t('app', 'Total Ac Dr'),
            'total_ac_cr' => Yii::t('app', 'Total Ac Cr'),
            'coa_id' => Yii::t('app', 'Coa ID'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'combination_description' => Yii::t('app', 'Combination Description'),
            'gl_journal_line_id' => Yii::t('app', 'Gl Journal Line ID'),
            'status' => Yii::t('app', 'Status'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'line_num' => Yii::t('app', 'Line Num'),
            'line_type' => Yii::t('app', 'Line Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'coa_structure_id' => Yii::t('app', 'Coa Structure ID'),
            'field1' => Yii::t('app', 'Field1'),
            'field2' => Yii::t('app', 'Field2'),
            'field3' => Yii::t('app', 'Field3'),
            'field4' => Yii::t('app', 'Field4'),
            'field5' => Yii::t('app', 'Field5'),
            'field6' => Yii::t('app', 'Field6'),
            'field7' => Yii::t('app', 'Field7'),
            'field8' => Yii::t('app', 'Field8'),
            'balance_type' => Yii::t('app', 'Balance Type'),
            'post_date' => Yii::t('app', 'Post Date'),
            'gl_period_id' => Yii::t('app', 'Gl Period ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'reference_key_name_h' => Yii::t('app', 'Reference Key Name H'),
            'reference_key_value_h' => Yii::t('app', 'Reference Key Value H'),
        ];
    }
}
