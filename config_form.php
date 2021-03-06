<?php
$item_duplicator_restricted		= get_option('item_duplicator_restricted');
$item_duplicator_empty_title	= get_option('item_duplicator_empty_title');
$item_duplicator_empty_subject	= get_option('item_duplicator_empty_subject');
$item_duplicator_empty_date		= get_option('item_duplicator_empty_date');
$item_duplicator_empty_tags		= get_option('item_duplicator_empty_tags');
$view = get_view();
?>

<h2><?php echo __('Allowed users'); ?></h2>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('item_duplicator_restricted', __('Restrict privilege')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, only users with Super User or Admin role will be able to duplicate Items.'); ?>
		</p>
		<?php echo $view->formCheckbox('item_duplicator_restricted', $item_duplicator_restricted, null, array('1', '0')); ?>
	</div>
</div>

<h2><?php echo __('Information removal'); ?></h2>


<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('item_duplicator_empty_title', __('Empty Title field')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, field DublinCore:Title will be emptied when showing duplicate Item.'); ?>
		</p>
		<?php echo $view->formCheckbox('item_duplicator_empty_title', $item_duplicator_empty_title, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('item_duplicator_empty_subject', __('Empty Subject field')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, field DublinCore:Subject will be emptied when showing duplicate Item.'); ?>
		</p>
		<?php echo $view->formCheckbox('item_duplicator_empty_subject', $item_duplicator_empty_subject, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('item_duplicator_empty_date', __('Empty Date field')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, field DublinCore:Date will be emptied when showing duplicate Item.'); ?>
		</p>
		<?php echo $view->formCheckbox('item_duplicator_empty_date', $item_duplicator_empty_date, null, array('1', '0')); ?>
	</div>
</div>

<div class="field">
	<div class="two columns alpha">
		<?php echo $view->formLabel('item_duplicator_empty_tags', __('Remove Tags')); ?>
	</div>
	<div class="inputs five columns omega">
		<p class="explanation">
			<?php echo __('If checked, Tags will be removed when showing duplicate Item.'); ?>
		</p>
		<?php echo $view->formCheckbox('item_duplicator_empty_tags', $item_duplicator_empty_tags, null, array('1', '0')); ?>
	</div>
</div>
