<div class="fileuploads index">
	<h2><?php echo __('Fileuploads'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('file_type'); ?></th>
			<th><?php echo $this->Paginator->sort('file_size'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fileuploads as $fileupload): ?>
	<tr>
		<td><?php echo h($fileupload['Fileupload']['id']); ?>&nbsp;</td>
		<td><?php echo h($fileupload['Fileupload']['path']); ?>&nbsp;</td>
		<td><?php echo h($fileupload['Fileupload']['file_type']); ?>&nbsp;</td>
		<td><?php echo h($fileupload['Fileupload']['file_size']); ?>&nbsp;</td>
		<td><?php echo h($fileupload['Fileupload']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fileupload['Fileupload']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fileupload['Fileupload']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fileupload['Fileupload']['id']), array(), __('Are you sure you want to delete # %s?', $fileupload['Fileupload']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Fileupload'), array('action' => 'add')); ?></li>
	</ul>
</div>
