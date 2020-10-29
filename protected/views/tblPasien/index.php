<?php
/* @var $this TblPasienController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Pasiens',
);

$this->menu=array(
	array('label'=>'Create TblPasien', 'url'=>array('create')),
	array('label'=>'Manage TblPasien', 'url'=>array('admin')),
);
?>

<h1>Tbl Pasiens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
