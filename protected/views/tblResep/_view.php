<?php
/* @var $this TblResepController */
/* @var $data TblResep */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_resep')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_resep), array('view', 'id'=>$data->id_resep)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->id_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_resep')); ?>:</b>
	<?php echo CHtml::encode($data->nama_resep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rincian_resep')); ?>:</b>
	<?php echo CHtml::encode($data->rincian_resep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />


</div>