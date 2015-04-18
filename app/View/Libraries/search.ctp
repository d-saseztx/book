<div class="searches form">
<?php echo $this->Form->create('Library'); ?>
	<fieldset>
		<legend><?php echo __('検索'); ?></legend>
		<?php
		echo $this->Form->input('title');
		echo $this->Form->input('category_id',array(
				'empty' => '無し'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('検索')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('書籍リスト'), array('controller' => 'libraries','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('書籍登録'), array('controller' => 'libraries','action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('カテゴリリスト'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('カテゴリ登録'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社リスト'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('出版社登録'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('レビューリスト'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('削除済データ'), array('controller' => 'libraries', 'action' => 'old')); ?> </li>
	</ul>
</div>
