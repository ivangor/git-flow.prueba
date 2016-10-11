<div class="lotes view">
<h2><?php echo __('Lote'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lote['Lote']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metros2'); ?></dt>
		<dd>
			<?php echo h($lote['Lote']['metros2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lote Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lote['LoteEstado']['id'], array('controller' => 'lote_estados', 'action' => 'view', $lote['LoteEstado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lote['Seccione']['id'], array('controller' => 'secciones', 'action' => 'view', $lote['Seccione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Lote'); ?></dt>
		<dd>
			<?php echo h($lote['Lote']['num_lote']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lote'), array('action' => 'edit', $lote['Lote']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lote'), array('action' => 'delete', $lote['Lote']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $lote['Lote']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Lotes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lote'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lote Estados'), array('controller' => 'lote_estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lote Estado'), array('controller' => 'lote_estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
