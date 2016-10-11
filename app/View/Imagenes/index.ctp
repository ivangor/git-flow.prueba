<div class="imagenes index">
	<h2><?php echo __('Imagenes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('uri_img'); ?></th>
			<th><?php echo $this->Paginator->sort('seccione_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($imagenes as $imagene): ?>
	<tr>
		<td><?php echo h($imagene['Imagene']['id']); ?>&nbsp;</td>
		<td><?php echo h($imagene['Imagene']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($imagene['Imagene']['uri_img']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($imagene['Seccione']['id'], array('controller' => 'secciones', 'action' => 'view', $imagene['Seccione']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $imagene['Imagene']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $imagene['Imagene']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $imagene['Imagene']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $imagene['Imagene']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Imagene'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
