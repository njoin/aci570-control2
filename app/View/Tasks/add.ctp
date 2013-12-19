<div class="tasks form">
<?php echo $this->Form->create('Task'); ?>
	<fieldset>
		<legend><?php echo __('Add Task'); ?></legend>
	<?php
		echo $this->Form->input('task_list_id');
		echo $this->Form->input('person_id');
		echo $this->Form->input('description');
		echo $this->Form->input('completed_on');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Task Lists'), array('controller' => 'task_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task List'), array('controller' => 'task_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Task Tags'), array('controller' => 'task_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task Tag'), array('controller' => 'task_tags', 'action' => 'add')); ?> </li>
	    <!-- <input type="button" value="Abrir" onclick="window.open('www.google.cl')" /> -->
		<li><?php echo $this->Html->link(__('New Task Tag'), array('controller' => 'task_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
