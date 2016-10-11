<div class="lotes form">
<?php echo $this->Form->create('Lote'); ?>
	<fieldset>
		<legend><?php echo __('Add Lote'); ?></legend>
	<?php
		echo $this->Form->input('metros2');
		echo $this->Form->input('lote_estado_id');
		echo $this->Form->input('seccione_id');
		echo $this->Form->input('num_lote');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lotes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lote Estados'), array('controller' => 'lote_estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lote Estado'), array('controller' => 'lote_estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
