<div class="fileuploads form">
<?php echo $this->Form->create('Fileupload'); ?>
	<fieldset>
		<legend><?php echo __('Add Fileupload'); ?></legend>
	<?php
		echo $this->Form->input('path');
		echo $this->Form->input('file_type');
		echo $this->Form->input('file_size');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fileuploads'), array('action' => 'index')); ?></li>
	</ul>
</div>
