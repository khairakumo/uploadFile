<div class="fileuploads form">
<?php echo $this->Form->create('Fileupload'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fileupload'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Fileupload.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Fileupload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fileuploads'), array('action' => 'index')); ?></li>
	</ul>
</div>
