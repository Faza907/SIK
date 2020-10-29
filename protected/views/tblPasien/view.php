<?php
/* @var $this TblPasienController */
/* @var $model TblPasien */

$this->breadcrumbs=array(
	'Tbl Pasiens'=>array('index'),
	$model->id_pasien,
);

$this->menu=array(
	array('label'=>'List TblPasien', 'url'=>array('index')),
	array('label'=>'Create TblPasien', 'url'=>array('create')),
	array('label'=>'Update TblPasien', 'url'=>array('update', 'id'=>$model->id_pasien)),
	array('label'=>'Delete TblPasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pasien),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblPasien', 'url'=>array('admin')),
);
?>

<h1>View TblPasien #<?php echo $model->id_pasien; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pasien',
		'nama_pasien',
		'alamat',
		'jenis_kelamin',
		'no_telepon',
	),
)); ?>
