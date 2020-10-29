<?php
/* @var $this TblResepController */
/* @var $model TblResep */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_resep'); ?>
		<?php echo $form->textField($model,'id_resep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_dokter'); ?>
		<?php echo $form->textField($model,'id_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pasien'); ?>
		<?php echo $form->textField($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_resep'); ?>
		<?php echo $form->textField($model,'nama_resep',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rincian_resep'); ?>
		<?php echo $form->textArea($model,'rincian_resep',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->