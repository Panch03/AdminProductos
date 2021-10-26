<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->id_producto,
);

$this->menu=array(
	array('label'=>'Lista Productos', 'url'=>array('index')),
	array('label'=>'Crear Producto', 'url'=>array('create')),
	array('label'=>'Editar Producto', 'url'=>array('update', 'id'=>$model->id_producto)),
	array('label'=>'Eliminar Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_producto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Catalogo Productos', 'url'=>array('admin')),
);
?>

<h1>Ver Producto #<?php echo $model->id_producto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_producto',
		'codigo',
		'sku',
		'nombre',
		'id_marca',
		'descripcion',
		'stock',
	),
)); ?>
