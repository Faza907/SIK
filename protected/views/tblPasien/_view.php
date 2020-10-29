<?php
/* @var $this TblPasienController */
/* @var $data TblPasien */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pasien), array('view', 'id'=>$data->id_pasien)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telepon')); ?>:</b>
	<?php echo CHtml::encode($data->no_telepon); ?>
	<br />


</div>