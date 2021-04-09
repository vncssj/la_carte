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
            <?= $this->Html->link(__('Edit Carte'), ['action' => 'edit', $carte->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carte'), ['action' => 'delete', $carte->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carte->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cartes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carte'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cartes view content">
            <h3><?= h($carte->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Restaurante') ?></th>
                    <td><?= h($carte->restaurante) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo') ?></th>
                    <td><?= h($carte->logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($carte->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Whatsapp') ?></th>
                    <td><?= h($carte->whatsapp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carte->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Categorias') ?></h4>
                <?php if (!empty($carte->categorias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Carte Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($carte->categorias as $categorias) : ?>
                        <tr>
                            <td><?= h($categorias->id) ?></td>
                            <td><?= h($categorias->titulo) ?></td>
                            <td><?= h($categorias->carte_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Categorias', 'action' => 'view', $categorias->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Categorias', 'action' => 'edit', $categorias->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categorias', 'action' => 'delete', $categorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorias->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Produtos') ?></h4>
                <?php if (!empty($carte->produtos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Preco') ?></th>
                            <th><?= __('Carte Id') ?></th>
                            <th><?= __('Categoria Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($carte->produtos as $produtos) : ?>
                        <tr>
                            <td><?= h($produtos->id) ?></td>
                            <td><?= h($produtos->nome) ?></td>
                            <td><?= h($produtos->preco) ?></td>
                            <td><?= h($produtos->carte_id) ?></td>
                            <td><?= h($produtos->categoria_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
