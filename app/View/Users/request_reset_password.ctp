<?php echo $this->Html->css('users', null, array('block'=>'cssMiddle'));?>
<div class="em-container make-top-spacing">
	<div class="row">
		<div class="col-md-12"> 
			<div class="panel panel-em no-border">
				<div class="panel-heading"><?php echo __('Request Reset Password!'); ?></div>
				<div class="panel-body">
					<?php echo $this->Form->create('User', array('url'  => array('controller' => 'users','action' => 'requestResetPassword'))); ?>
					
					<div class="form-group">
						<?php echo $this->Form->input('email',array('placeholder'=>__('Email'),'label'=>__('Enter Your E-mail Address'), 'class' => 'form-control'));?>
					</div>

					<div class="form-group">
						<?php echo $this->Form->input(__('Submit'), array('type'=>'submit', 'class'=>'btn btn-info', 'label'=> false)); ?>
					</div>

					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
</div>