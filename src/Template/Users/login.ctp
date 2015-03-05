<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link('Forgot password', ['action' => 'forgot_password']); ?>
</div>