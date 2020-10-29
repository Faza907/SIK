<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawais'=>array('index'),
	$model->id_dokter,
);

$this->menu=array(
	array('label'=>'List Pegawai', 'url'=>array('index')),
	array('label'=>'Create Pegawai', 'url'=>array('create')),
	array('label'=>'Update Pegawai', 'url'=>array('update', 'id'=>$model->id_dokter)),
	array('label'=>'Delete Pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dokter),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>View Pegawai #<?php echo $model->id_dokter; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dokter',
		'nama_dokter',
		'departemen',
		'jadwal_praktik',
	),
)); ?>
