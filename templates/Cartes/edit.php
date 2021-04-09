<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carte $carte
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carte->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carte->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cartes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cartes form content">
            <?= $this->Form->create($carte) ?>
            <fieldset>
                <legend><?= __('Edit Carte') ?></legend>
                <?php
                    echo $this->Form->control('restaurante');
                    echo $this->Form->control('logo');
                    echo $this->Form->control('password');
                    echo $this->Form->control('whatsapp');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
