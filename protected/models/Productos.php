<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $id_producto
 * @property string $codigo
 * @property string $sku
 * @property string $nombre
 * @property integer $id_marca
 * @property string $marca
 * @property string $descripcion
 * @property integer $stock
 *
 * The followings are the available model relations:
 * @property Fotos[] $fotoses
 * @property Marcas $idMarca
 */
class Productos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_marca, stock', 'numerical', 'integerOnly'=>true),
			array('codigo, sku', 'length', 'max'=>10),
			array('nombre, descripcion, marca', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_producto, codigo, sku, nombre, id_marca, marca, descripcion, stock', 'safe', 'on'=>'search'),
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
			'fotoses' => array(self::HAS_MANY, 'Fotos', 'id_producto'),
			'idMarca' => array(self::BELONGS_TO, 'Marcas', 'id_marca'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_producto' => 'Id Producto',
			'codigo' => 'Codigo',
			'sku' => 'Sku',
			'nombre' => 'Nombre',
			'id_marca' => 'Marca',
			'marca' => 'Marca',
			'descripcion' => 'Descripcion',
			'stock' => 'Stock',
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
		//$criteria=Productos::model()->with('idMarca')->findAll();
		$criteria=new CDbCriteria;
		$criteria->join="LEFT JOIN marcas as m ON(m.id_marca=t.id_marca)";
		//$models = Productos::model()->findAll($criteria);
		/*$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('codigo',$this->codigo,true);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('id_marca',$this->id_marca);
		$criteria->compare('marca',$this->marca);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('stock',$this->stock);*/
		//print_r($criteria);
		//$criteria=Productos::model()->with('idMarca')->findAll();
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
