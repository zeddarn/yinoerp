<?php

namespace common\modules\pos\models;

use Yii;

/**
 * This is the model class for table "{{%pos_transaction_line}}".
 *
 * @property integer $pos_transaction_line_id
 * @property integer $pos_transaction_header_id
 * @property string $item_number
 * @property string $unit_price
 * @property string $quantity
 * @property string $line_amount
 * @property string $discount_percentage
 * @property string $discount_amount
 * @property string $discount_code
 * @property string $amount_after_discount
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PosTransactionLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pos_transaction_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pos_transaction_header_id', 'item_number', 'created_by', 'last_update_by'], 'required'],
            [['pos_transaction_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['unit_price', 'quantity', 'line_amount', 'discount_percentage', 'discount_amount', 'amount_after_discount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['item_number'], 'string', 'max' => 50],
            [['discount_code'], 'string', 'max' => 25],
            [['status'], 'string', 'max' => 2],
            [['pos_transaction_header_id', 'item_number'], 'unique', 'targetAttribute' => ['pos_transaction_header_id', 'item_number'], 'message' => 'The combination of Pos Transaction Header ID and Item Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pos_transaction_line_id' => Yii::t('app', 'Pos Transaction Line ID'),
            'pos_transaction_header_id' => Yii::t('app', 'Pos Transaction Header ID'),
            'item_number' => Yii::t('app', 'Item Number'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'quantity' => Yii::t('app', 'Quantity'),
            'line_amount' => Yii::t('app', 'Line Amount'),
            'discount_percentage' => Yii::t('app', 'Discount Percentage'),
            'discount_amount' => Yii::t('app', 'Discount Amount'),
            'discount_code' => Yii::t('app', 'Discount Code'),
            'amount_after_discount' => Yii::t('app', 'Amount After Discount'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}