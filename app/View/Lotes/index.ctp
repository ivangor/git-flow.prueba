<div class="lotes index">
	<h2><?php echo __('Lotes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('metros2'); ?></th>
			<th><?php echo $this->Paginator->sort('lote_estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('seccione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('num_lote'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lotes as $lote): ?>
	<tr>
		<td><?php echo h($lote['Lote']['id']); ?>&nbsp;</td>
		<td><?php echo h($lote['Lote']['metros2']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lote['LoteEstado']['id'], array('controller' => 'lote_estados', 'action' => 'view', $lote['LoteEstado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($lote['Seccione']['id'], array('controller' => 'secciones', 'action' => 'view', $lote['Seccione']['id'])); ?>
		</td>
		<td><?php echo h($lote['Lote']['num_lote']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lote['Lote']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lote['Lote']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lote['Lote']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $lote['Lote']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Lote'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lote Estados'), array('controller' => 'lote_estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lote Estado'), array('controller' => 'lote_estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
