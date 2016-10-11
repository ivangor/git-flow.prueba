<div class="secciones form">
<?php echo $this->Form->create('Seccione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Seccione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('uri_img_ubicacion');
		echo $this->Form->input('uri_img');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('uri_img_conjunto');
		echo $this->Form->input('nombre');
		echo $this->Form->input('seccione_estado_id');
		echo $this->Form->input('seccione_visibilidade_id');
		echo $this->Form->input('Casa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Seccione.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Seccione.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('action' => 'index')); ?></li>
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
