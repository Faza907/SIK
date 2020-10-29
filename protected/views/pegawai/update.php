<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	$model->id_dokter=>array('view','id'=>$model->id_dokter),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Create Pegawai', 'url'=>array('create')),
	array('label'=>'View Pegawai', 'url'=>array('view', 'id'=>$model->id_dokter)),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Update Pegawai <?php echo $model->id_dokter; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>