<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Productos', 'url'=>array('index')),
	array('label'=>'Crear Producto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de Productos</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'productos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_producto',
		'codigo',
		'sku',
		'nombre',
		array(
			'name' => 'id_marca',
			'value' => function ($data) {
				$query = Marcas::model()->findByPk($data->id_marca);
				//$nombre = Marcas::model()->findAllByAttributes(array('id_marca'=> $data->id_marca));
                return $query['marca'];
			},
			//'value' => '"'.$marca['target_id']['idMarca']['marca'].'"', 
		),
		'descripcion',
		/*
		'stock',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
