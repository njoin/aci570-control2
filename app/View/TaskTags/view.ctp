<div class="taskTags view">
<h2><?php echo __('Task Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taskTag['TaskTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Task'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taskTag['Task']['id'], array('controller' => 'tasks', 'action' => 'view', $taskTag['Task']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taskTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $taskTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($taskTag['TaskTag']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($taskTag['TaskTag']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task Tag'), array('action' => 'edit', $taskTag['TaskTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task Tag'), array('action' => 'delete', $taskTag['TaskTag']['id']), null, __('Are you sure you want to delete # %s?', $taskTag['TaskTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Task Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
