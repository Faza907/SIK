<?php
/* @var $this PegawaiController */
/* @var $data Pegawai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dokter), array('view', 'id'=>$data->id_dokter)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->nama_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departemen')); ?>:</b>
	<?php echo CHtml::encode($data->departemen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jadwal_praktik')); ?>:</b>
	<?php echo CHtml::encode($data->jadwal_praktik); ?>
	<br />


</div>