<?php
/* @var $this MarcasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Marcases',
);

$this->menu=array(
	array('label'=>'Create Marcas', 'url'=>array('create')),
	array('label'=>'Manage Marcas', 'url'=>array('admin')),
);
?>

<h1>Marcases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
