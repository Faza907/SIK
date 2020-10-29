<?php
/* @var $this TblPasienController */
/* @var $model TblPasien */

$this->breadcrumbs=array(
	'Tbl Pasiens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblPasien', 'url'=>array('index')),
	array('label'=>'Manage TblPasien', 'url'=>array('admin')),
);
?>

<h1>Create TblPasien</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>