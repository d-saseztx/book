	<?php
$used = array('0' => '有効', '1' =>'削除済み', '' => '不明' );
//debug($libraries);
//echo count($libraries);
echo date('Y-m-d H:i:s',strtotime('2015/1/11'));
?>
<div class="libraries index">
	<h2><?php echo __('書籍'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_no'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('author'); ?></th>
			<th><?php echo $this->Paginator->sort('publisher_id'); ?></th>
			<th><?php echo $this->Paginator->sort('used'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($libraries as $library): ?>
	<tr>
		<td><?php echo h($library['Library']['id']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['book_no']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['title']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($library['Category']['name'], array('controller' => 'categories', 'action' => 'view', $library['Category']['id'])); ?>
		</td>
		<td><?php echo h($library['Library']['author']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($library['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $library['Publisher']['id'])); ?>
		</td>
		<td><?php echo h($used[$library['Library']['used']]); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['created']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('レビュー',array('controller' => 'reviews', 'action' => 'add', $library['Library']['id']));?>
			<?php echo $this->Html->link(__('ビュー'), array('action' => 'view', $library['Library']['id'])); ?>
			<?php echo $this->Html->link(__('編集'), array('action' => 'edit', $library['Library']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $library['Library']['id']), array(), __('Are you sure you want to delete # %s?', $library['Library']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('検索'), array('controller' => 'libraries', 'action' => 'search')); ?> </li>
		<li><?php echo $this->Html->link(__('書籍登録'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('カテゴリリスト'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('カテゴリ登録'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社リスト'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社登録'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('レビューリスト'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('削除済データ'), array('controller' => 'libraries', 'action' => 'old')); ?> </li>
	</ul>
</div>
