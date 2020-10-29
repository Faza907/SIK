<?php

/**
 * This is the model class for table "tbl_resep".
 *
 * The followings are the available columns in table 'tbl_resep':
 * @property integer $id_resep
 * @property integer $id_dokter
 * @property integer $id_pasien
 * @property string $nama_resep
 * @property string $rincian_resep
 * @property string $tanggal
 *
 * The followings are the available model relations:
 * @property TblPasien $idPasien
 * @property TblDokter $idDokter
 */
class TblResep extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_resep';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dokter, id_pasien, nama_resep, rincian_resep, tanggal', 'required'),
			array('id_dokter, id_pasien', 'numerical', 'integerOnly'=>true),
			array('nama_resep', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_resep, id_dokter, id_pasien, nama_resep, rincian_resep, tanggal', 'safe', 'on'=>'search'),
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
			'idPasien' => array(self::BELONGS_TO, 'TblPasien', 'id_pasien'),
			'idDokter' => array(self::BELONGS_TO, 'TblDokter', 'id_dokter'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_resep' => 'Id Resep',
			'id_dokter' => 'Nama Dokter',
			'id_pasien' => 'Nama Pasien',
			'nama_resep' => 'Nama Resep',
			'rincian_resep' => 'Rincian Resep',
			'tanggal' => 'Tanggal',
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

		$criteria->compare('id_resep',$this->id_resep);
		$criteria->compare('id_dokter',$this->id_dokter);
		$criteria->compare('id_pasien',$this->id_pasien);
		$criteria->compare('nama_resep',$this->nama_resep,true);
		$criteria->compare('rincian_resep',$this->rincian_resep,true);
		$criteria->compare('tanggal',$this->tanggal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TblResep the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
