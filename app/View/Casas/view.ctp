<div class="casas view">
<h2><?php echo __('Casa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($casa['Casa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($casa['Casa']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uri Img'); ?></dt>
		<dd>
			<?php echo h($casa['Casa']['uri_img']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Casa'), array('action' => 'edit', $casa['Casa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Casa'), array('action' => 'delete', $casa['Casa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $casa['Casa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Casas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Secciones'); ?></h3>
	<?php if (!empty($casa['Seccione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Uri Img Ubicacion'); ?></th>
		<th><?php echo __('Uri Img'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Uri Img Conjunto'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Seccione Estado Id'); ?></th>
		<th><?php echo __('Seccione Visibilidade Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($casa['Seccione'] as $seccione): ?>
		<tr>
			<td><?php echo $seccione['id']; ?></td>
			<td><?php echo $seccione['uri_img_ubicacion']; ?></td>
			<td><?php echo $seccione['uri_img']; ?></td>
			<td><?php echo $seccione['descripcion']; ?></td>
			<td><?php echo $seccione['uri_img_conjunto']; ?></td>
			<td><?php echo $seccione['nombre']; ?></td>
			<td><?php echo $seccione['seccione_estado_id']; ?></td>
			<td><?php echo $seccione['seccione_visibilidade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'secciones', 'action' => 'view', $seccione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'secciones', 'action' => 'edit', $seccione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'secciones', 'action' => 'delete', $seccione['id']), array('confirm' => __('Are you sure you want to delete # %s?', $seccione['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
