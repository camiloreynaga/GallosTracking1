<?php

/**
 * This is the model class for table "tbl_rooster".
 *
 * The followings are the available columns in table 'tbl_rooster':
 * @property integer $id
 * @property string $nro_file
 * @property string $nro_plate
 * @property integer $galpon_id
 * @property string $name
 * @property integer $sex
 * @property integer $nro_camada
 * @property string $father
 * @property string $mother
 * @property integer $active
 * @property integer $type_id
 * @property string $observation
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 *
 * The followings are the available model relations:
 * @property Type $type
 * @property Galpon $galpon
 */
class Rooster extends Erp_startedActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_rooster';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nro_file, nro_plate', 'required'),
			array('galpon_id, sex, nro_camada, active, type_id, create_user_id, update_user_id', 'numerical', 'integerOnly'=>true),
			array('nro_file', 'length', 'max'=>10),
			array('nro_plate, name, father, mother', 'length', 'max'=>50),
			array('observation, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nro_file, nro_plate, galpon_id, name, sex, nro_camada, father, mother, active, type_id, observation, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'r_type' => array(self::BELONGS_TO, 'Type', 'type_id'),
			'r_galpon' => array(self::BELONGS_TO, 'Galpon', 'galpon_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => yii::t('app','ID'),
			'nro_file' => yii::t('app','Nro File'),
			'nro_plate' => yii::t('app','Nro Plate'),
			'galpon_id' => yii::t('app','Galpon'),
			'name' => yii::t('app','Name'),
			'sex' => yii::t('app','Sex'),
			'nro_camada' => yii::t('app','Nro Camada'),
			'father' => yii::t('app','Father'),
			'mother' => yii::t('app','Mother'),
			'active' => yii::t('app','Active'),
			'type_id' => yii::t('app','Type'),
			'observation' => yii::t('app','Observation'),
			'create_time' => yii::t('app','Create Time'),
			'create_user_id' => yii::t('app','Create User'),
			'update_time' => yii::t('app','Update Time'),
			'update_user_id' => yii::t('app','Update User'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nro_file',$this->nro_file,true);
		$criteria->compare('nro_plate',$this->nro_plate,true);
		$criteria->compare('galpon_id',$this->galpon_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('nro_camada',$this->nro_camada);
		$criteria->compare('father',$this->father,true);
		$criteria->compare('mother',$this->mother,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('observation',$this->observation,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Rooster the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
        ///Obtiene las galpones disponibles
        public function getGalponOptions()
        {
            $criteria = new CDbCriteria();
		$criteria->order='galpon';
                $criteria->condition='active=0';
		return Galpon::model()->findAll($criteria);
        }
        
        ///Obtiene las types disponibles
        public function getTypesOptions()
        {
            $criteria = new CDbCriteria();
		$criteria->order='type';
                $criteria->condition='active=0';
		return Type::model()->findAll($criteria);
        }
}
