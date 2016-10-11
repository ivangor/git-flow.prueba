<div class="imagenes view">
<h2><?php echo __('Imagene'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imagene['Imagene']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($imagene['Imagene']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Uri Img'); ?></dt>
		<dd>
			<?php echo h($imagene['Imagene']['uri_img']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imagene['Seccione']['id'], array('controller' => 'secciones', 'action' => 'view', $imagene['Seccione']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imagene'), array('action' => 'edit', $imagene['Imagene']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imagene'), array('action' => 'delete', $imagene['Imagene']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $imagene['Imagene']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Imagenes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imagene'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
