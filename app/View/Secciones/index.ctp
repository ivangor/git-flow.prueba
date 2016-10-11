<div class="secciones index">
	<h2><?php echo __('Secciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('uri_img_ubicacion'); ?></th>
			<th><?php echo $this->Paginator->sort('uri_img'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('uri_img_conjunto'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('seccione_estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('seccione_visibilidade_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($secciones as $seccione): ?>
	<tr>
		<td><?php echo h($seccione['Seccione']['id']); ?>&nbsp;</td>
		<td><?php echo h($seccione['Seccione']['uri_img_ubicacion']); ?>&nbsp;</td>
		<td><?php echo h($seccione['Seccione']['uri_img']); ?>&nbsp;</td>
		<td><?php echo h($seccione['Seccione']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($seccione['Seccione']['uri_img_conjunto']); ?>&nbsp;</td>
		<td><?php echo h($seccione['Seccione']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($seccione['SeccioneEstado']['id'], array('controller' => 'seccione_estados', 'action' => 'view', $seccione['SeccioneEstado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($seccione['SeccioneVisibilidade']['id'], array('controller' => 'seccione_visibilidades', 'action' => 'view', $seccione['SeccioneVisibilidade']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $seccione['Seccione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $seccione['Seccione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $seccione['Seccione']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $seccione['Seccione']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Seccione'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Seccione Estados'), array('controller' => 'seccione_estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione Estado'), array('controller' => 'seccione_estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccione Visibilidades'), array('controller' => 'seccione_visibilidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione Visibilidade'), array('controller' => 'seccione_visibilidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagenes'), array('controller' => 'imagenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imagene'), array('controller' => 'imagenes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lotes'), array('controller' => 'lotes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lote'), array('controller' => 'lotes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casas'), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casa'), array('controller' => 'casas', 'action' => 'add')); ?> </li>
	</ul>
</div>
