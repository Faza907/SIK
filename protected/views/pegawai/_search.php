<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_dokter'); ?>
		<?php echo $form->textField($model,'nama_dokter',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'departemen'); ?>
		<?php echo $form->textField($model,'departemen',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jadwal_praktik'); ?>
		<?php echo $form->textField($model,'jadwal_praktik',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->