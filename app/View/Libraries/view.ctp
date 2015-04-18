<div class="libraries view">
<h2><?php echo __('書籍'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($library['Library']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book No'); ?></dt>
		<dd>
			<?php echo h($library['Library']['book_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($library['Library']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($library['Category']['name'], array('controller' => 'categories', 'action' => 'view', $library['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo h($library['Library']['author']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publisher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($library['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $library['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Used'); ?></dt>
		<dd>
			<?php echo h($library['Library']['used']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($library['Library']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($library['Library']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('レビュー'); ?></dt>
		<dd>
			<?php foreach ($library['Review'] as $review): ?>
			<ul><li><?php echo h($review['review']); ?></li> </ul>
			<?php endforeach; ?>
		</dd>

	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('書籍編集'), array('action' => 'edit', $library['Library']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('書籍削除'), array('action' => 'delete', $library['Library']['id']),
				 array(), __('Are you sure you want to delete # %s?', $library['Library']['id'])); ?> </li>

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
