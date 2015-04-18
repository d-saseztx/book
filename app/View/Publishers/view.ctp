<div class="publishers view">
<h2><?php echo __('Publisher'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Used'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['used']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Publisher'), array('action' => 'edit', $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Publisher'), array('action' => 'delete', $publisher['Publisher']['id']), array(), __('Are you sure you want to delete # %s?', $publisher['Publisher']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('検索'), array('controller' => 'libraries', 'action' => 'search')); ?> </li>
		<li><?php echo $this->Html->link(__('書籍リスト'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('書籍登録'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('カテゴリリスト'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('カテゴリ登録'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社リスト'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社登録'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('レビューリスト'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('削除済データ'), array('controller' => 'libraries', 'action' => 'old')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Libraries'); ?></h3>
	<?php if (!empty($publisher['Library'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book No'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Author'); ?></th>
		<th><?php echo __('Publisher Id'); ?></th>
		<th><?php echo __('Used'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($publisher['Library'] as $library): ?>
		<tr>
			<td><?php echo $library['id']; ?></td>
			<td><?php echo $library['book_no']; ?></td>
			<td><?php echo $library['title']; ?></td>
			<td><?php echo $library['category_id']; ?></td>
			<td><?php echo $library['author']; ?></td>
			<td><?php echo $library['publisher_id']; ?></td>
			<td><?php echo $library['used']; ?></td>
			<td><?php echo $library['created']; ?></td>
			<td><?php echo $library['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'libraries', 'action' => 'view', $library['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'libraries', 'action' => 'edit', $library['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'libraries', 'action' => 'delete', $library['id']), array(), __('Are you sure you want to delete # %s?', $library['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Library'), array('controller' => 'libraries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
