<?php
/* @var $this TblResepController */
/* @var $model TblResep */

$this->breadcrumbs=array(
	'Tbl Reseps'=>array('index'),
	$model->id_resep,
);

$this->menu=array(
	array('label'=>'List TblResep', 'url'=>array('index')),
	array('label'=>'Create TblResep', 'url'=>array('create')),
	array('label'=>'Update TblResep', 'url'=>array('update', 'id'=>$model->id_resep)),
	array('label'=>'Delete TblResep', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_resep),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblResep', 'url'=>array('admin')),
);
?>

<h1>View TblResep #<?php echo $model->id_resep; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_resep',
		'id_dokter',
		'id_pasien',
		'nama_resep',
		'rincian_resep',
		'tanggal',
	),
)); ?>
