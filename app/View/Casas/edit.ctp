<div class="casas form">
<?php echo $this->Form->create('Casa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Casa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('uri_img');
		echo $this->Form->input('Seccione');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Casa.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Casa.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Casas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccione'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
