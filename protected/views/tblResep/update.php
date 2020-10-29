<?php
/* @var $this TblResepController */
/* @var $model TblResep */

$this->breadcrumbs=array(
	'Tbl Reseps'=>array('index'),
	$model->id_resep=>array('view','id'=>$model->id_resep),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblResep', 'url'=>array('index')),
	array('label'=>'Create TblResep', 'url'=>array('create')),
	array('label'=>'View TblResep', 'url'=>array('view', 'id'=>$model->id_resep)),
	array('label'=>'Manage TblResep', 'url'=>array('admin')),
);
?>

<h1>Update TblResep <?php echo $model->id_resep; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>