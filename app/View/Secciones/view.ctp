<div class="secciones view">
<h2><?php echo __('Seccione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uri Img Ubicacion'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['uri_img_ubicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uri Img'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['uri_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uri Img Conjunto'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['uri_img_conjunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($seccione['Seccione']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccione Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seccione['SeccioneEstado']['id'], array('controller' => 'seccione_estados', 'action' => 'view', $seccione['SeccioneEstado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccione Visibilidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seccione['SeccioneVisibilidade']['id'], array('controller' => 'seccione_visibilidades', 'action' => 'view', $seccione['SeccioneVisibilidade']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seccione'), array('action' => 'edit', $seccione['Seccione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seccione'), array('action' => 'delete', $seccione['Seccione']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $seccione['Seccione']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Imagenes'); ?></h3>
	<?php if (!empty($seccione['Imagene'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Uri Img'); ?></th>
		<th><?php echo __('Seccione Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seccione['Imagene'] as $imagene): ?>
		<tr>
			<td><?php echo $imagene['id']; ?></td>
			<td><?php echo $imagene['nombre']; ?></td>
			<td><?php echo $imagene['uri_img']; ?></td>
			<td><?php echo $imagene['seccione_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'imagenes', 'action' => 'view', $imagene['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'imagenes', 'action' => 'edit', $imagene['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'imagenes', 'action' => 'delete', $imagene['id']), array('confirm' => __('Are you sure you want to delete # %s?', $imagene['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Imagene'), array('controller' => 'imagenes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lotes'); ?></h3>
	<?php if (!empty($seccione['Lote'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Metros2'); ?></th>
		<th><?php echo __('Lote Estado Id'); ?></th>
		<th><?php echo __('Seccione Id'); ?></th>
		<th><?php echo __('Num Lote'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seccione['Lote'] as $lote): ?>
		<tr>
			<td><?php echo $lote['id']; ?></td>
			<td><?php echo $lote['metros2']; ?></td>
			<td><?php echo $lote['lote_estado_id']; ?></td>
			<td><?php echo $lote['seccione_id']; ?></td>
			<td><?php echo $lote['num_lote']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lotes', 'action' => 'view', $lote['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lotes', 'action' => 'edit', $lote['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lotes', 'action' => 'delete', $lote['id']), array('confirm' => __('Are you sure you want to delete # %s?', $lote['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lote'), array('controller' => 'lotes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Casas'); ?></h3>
	<?php if (!empty($seccione['Casa'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Uri Img'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seccione['Casa'] as $casa): ?>
		<tr>
			<td><?php echo $casa['id']; ?></td>
			<td><?php echo $casa['nombre']; ?></td>
			<td><?php echo $casa['uri_img']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'casas', 'action' => 'view', $casa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'casas', 'action' => 'edit', $casa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'casas', 'action' => 'delete', $casa['id']), array('confirm' => __('Are you sure you want to delete # %s?', $casa['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Casa'), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
