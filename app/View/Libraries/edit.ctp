<div class="libraries form">
<?php echo $this->Form->create('Library'); ?>
	<fieldset>
		<legend><?php echo __('Edit Library'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('book_no');
		echo $this->Form->input('title');
		echo $this->Form->input('category_id');
		echo $this->Form->input('author');
		echo $this->Form->input('publisher_id');
		echo $this->Form->input('used');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $this->Form->value('Library.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Library.id'))); ?></li>
		<li><?php echo $this->Html->link(__('書籍リスト'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('書籍登録'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('カテゴリリスト'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('カテゴリ登録'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社リスト'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社登録'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('レビューリスト'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('削除済データ'), array('controller' => 'libraries', 'action' => 'old')); ?> </li>
	</ul>
</div>
