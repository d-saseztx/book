<?php
$used = array('0' => '有効', '1' =>'削除済み', '' => '不明' );
//debug($libraries);
//echo count($libraries);
//echo date('Y-m-d H:i:s',strtotime('2015/1/11'));
?>
<div class="reviews index">
	<h2><?php echo __('レビュー'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('library_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('review'); ?></th>
			<th><?php echo $this->Paginator->sort('used'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($reviews as $review): ?>
	<tr>
		<td><?php echo h($review['Review']['id']); ?>&nbsp;</td>
		<td><?php echo h($libraries[$review['Review']['library_id']]); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['review']); ?>&nbsp;</td>

		<td><?php echo h($review['Review']['used']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['created']); ?>&nbsp;</td>
		<td><?php echo h($review['Review']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $review['Review']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $review['Review']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $review['Review']['id']), array(), __('Are you sure you want to delete # %s?', $review['Review']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('書籍リスト'), array('controller' => 'libraries','action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('書籍登録'), array('controller' => 'libraries','action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('カテゴリリスト'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('カテゴリ登録'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社リスト'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社登録'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('レビューリスト'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('削除済データ'), array('controller' => 'libraries', 'action' => 'old')); ?> </li>
	</ul>
</div>
