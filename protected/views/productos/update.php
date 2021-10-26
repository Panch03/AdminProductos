<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->id_producto=>array('view','id'=>$model->id_producto),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Ver Productos', 'url'=>array('view', 'id'=>$model->id_producto)),
	array('label'=>'Catalogo Productos', 'url'=>array('admin')),
);
?>

<h1>Editar Producto <?php echo $model->id_producto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>