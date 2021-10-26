<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista Productos', 'url'=>array('index')),
	array('label'=>'Catalogo Productos', 'url'=>array('admin')),
);
?>

<h1>Crear Producto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>