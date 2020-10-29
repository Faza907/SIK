<?php
/* @var $this TblPasienController */
/* @var $model TblPasien */

$this->breadcrumbs=array(
	'Tbl Pasiens'=>array('index'),
	$model->id_pasien=>array('view','id'=>$model->id_pasien),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblPasien', 'url'=>array('index')),
	array('label'=>'Create TblPasien', 'url'=>array('create')),
	array('label'=>'View TblPasien', 'url'=>array('view', 'id'=>$model->id_pasien)),
	array('label'=>'Manage TblPasien', 'url'=>array('admin')),
);
?>

<h1>Update TblPasien <?php echo $model->id_pasien; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>