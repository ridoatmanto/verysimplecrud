<?php defined('_JEXEC') or die; ?>
<?php 
	$id_edit = '';
	if((int) $this->item->id != 0){
		$id_edit = '&id='.(int) $this->item->id;
	}
?>
<form action="<?php echo JRoute::_('index.php?option=com_crud&layout=edit'.$id_edit); ?>" method="post"
name="adminForm" id="adminForm" class="form-validate">
	<div class="row-fluid">
		<div class="span10 form-horizontal">
			<fieldset>

			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('name'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('name'); ?></div>
			</div>
			
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('birth'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('birth'); ?></div>
			</div>
			
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('address'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('address'); ?></div>
			</div>

				<input type="hidden" name="task" value="" />
					<?php echo JHtml::_('form.token'); ?>
			</fieldset>
		</div>
	</div>
</form>