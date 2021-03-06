<div class="tasks view">
<h2><?php echo __('Task'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($task['Task']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Task List'); ?></dt>
		<dd>
			<?php echo $this->Html->link($task['TaskList']['title'], array('controller' => 'task_lists', 'action' => 'view', $task['TaskList']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($task['Person']['name'], array('controller' => 'people', 'action' => 'view', $task['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($task['Task']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Completed'); ?></dt>
		<dd>
			<?php echo h($task['Task']['completed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Completed On'); ?></dt>
		<dd>
			<?php echo h($task['Task']['completed_on']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($task['Task']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($task['Task']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Task'), array('action' => 'edit', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Task'), array('action' => 'delete', $task['Task']['id']), null, __('Are you sure you want to delete # %s?', $task['Task']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Task Lists'), array('controller' => 'task_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task List'), array('controller' => 'task_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Task Tags'), array('controller' => 'task_tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task Tag'), array('controller' => 'task_tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Task Tags'); ?></h3>
	<?php if (!empty($task['TaskTag'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Task Id'); ?></th>
		<th><?php echo __('Tag Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($task['TaskTag'] as $taskTag): ?>
		<tr>
			<td><?php echo $taskTag['id']; ?></td>
			<td><?php echo $taskTag['task_id']; ?></td>
			<td><?php echo $taskTag['tag_id']; ?></td>
			<td><?php echo $taskTag['created']; ?></td>
			<td><?php echo $taskTag['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'task_tags', 'action' => 'view', $taskTag['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'task_tags', 'action' => 'edit', $taskTag['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'task_tags', 'action' => 'delete', $taskTag['id']), null, __('Are you sure you want to delete # %s?', $taskTag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Task Tag'), array('controller' => 'task_tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
