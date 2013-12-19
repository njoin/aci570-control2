<div class="taskTags index">
	<h2><?php echo __('Task Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('task_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tag_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($taskTags as $taskTag): ?>
	<tr>
		<td><?php echo h($taskTag['TaskTag']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($taskTag['Task']['id'], array('controller' => 'tasks', 'action' => 'view', $taskTag['Task']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($taskTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $taskTag['Tag']['id'])); ?>
		</td>
		<td><?php echo h($taskTag['TaskTag']['created']); ?>&nbsp;</td>
		<td><?php echo h($taskTag['TaskTag']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $taskTag['TaskTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $taskTag['TaskTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taskTag['TaskTag']['id']), null, __('Are you sure you want to delete # %s?', $taskTag['TaskTag']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Task Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tasks'), array('controller' => 'tasks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Task'), array('controller' => 'tasks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
