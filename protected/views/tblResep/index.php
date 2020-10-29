<?php
/* @var $this TblResepController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Reseps',
);

$this->menu=array(
	array('label'=>'Create TblResep', 'url'=>array('create')),
	array('label'=>'Manage TblResep', 'url'=>array('admin')),
);
?>

<h1>Tbl Reseps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
