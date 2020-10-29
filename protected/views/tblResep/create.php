<?php
/* @var $this TblResepController */
/* @var $model TblResep */

$this->breadcrumbs=array(
	'Tbl Reseps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblResep', 'url'=>array('index')),
	array('label'=>'Manage TblResep', 'url'=>array('admin')),
);
?>

<h1>Create TblResep</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>