<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Marcas', 'url'=>array('index')),
	array('label'=>'Manage Marcas', 'url'=>array('admin')),
);
?>

<h1>Create Marcas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>