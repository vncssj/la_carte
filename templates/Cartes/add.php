<div class="new-carte">
    <h1 class="text-center">Criando uma carta</h1>
    <div class="cartes form content">
        <?= $this->Form->create($carte) ?>
        <fieldset>
            <div class="pre-input">
                <?= $this->Form->control('restaurante', ['label' => false, 'class' => 'input-carte']) ?>
            </div>
            <div class="pre-input">
                <?= $this->Form->control('logo', ['label' => false, 'class' => 'input-carte']) ?>
            </div>
            <div class="pre-input">
                <?= $this->Form->control('password', ['label' => false, 'class' => 'input-carte']) ?>
            </div>
            <div class="pre-input">
                <?= $this->Form->control('whatsapp', ['label' => false, 'class' => 'input-carte']) ?>
            </div>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>