<?php
/* @var $this TblResepController */
/* @var $model TblResep */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-resep-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_dokter'); ?>
<!-- 		<?php $pegawai = pegawai::model()->findAll(); 
			print_r($pegawai);
		?> -->
		<?php echo $form->dropDownList($model,'id_dokter',CHtml::listData(pegawai::model()->findAll(),'id_dokter','nama_dokter')); ?>
		<?php echo $form->error($model,'id_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pasien'); ?>
		<?php echo $form->dropDownList($model,'id_pasien',CHtml::listData(tblPasien::model()->findAll(),'id_pasien','nama_pasien')); ?>
		<?php echo $form->error($model,'id_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_resep'); ?>
		<?php echo $form->textField($model,'nama_resep',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_resep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rincian_resep'); ?>
		<?php echo $form->textArea($model,'rincian_resep',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rincian_resep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); 
			$this->widget('zii.widgets.jui.CjuiDatePicker',
			array(
			'attribute'=>'tanggal',
			'name'=>'tanggal',
			'value'=>$model->tanggal,
			'model'=>$model,
			'options'=> array(
				'showAnim'=>'slide',
				'showButtonPanel'=>true,
				'dateFormat'=>'yy-m-d'
			),
			'htmlOptions'=>array('style'=>''),
			)); 
		?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->