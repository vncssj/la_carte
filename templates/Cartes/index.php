<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carte[]|\Cake\Collection\CollectionInterface $cartes
 */
?>
<div class="cartes index content">
    <?= $this->Html->link(__('New Carte'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cartes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('restaurante') ?></th>
                    <th><?= $this->Paginator->sort('logo') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('whatsapp') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartes as $carte): ?>
                <tr>
                    <td><?= $this->Number->format($carte->id) ?></td>
                    <td><?= h($carte->restaurante) ?></td>
                    <td><?= h($carte->logo) ?></td>
                    <td><?= h($carte->password) ?></td>
                    <td><?= h($carte->whatsapp) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carte->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carte->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carte->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
