<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $nome
 * @property float|null $preco
 * @property int $carte_id
 * @property int $categoria_id
 *
 * @property \App\Model\Entity\Carte $carte
 * @property \App\Model\Entity\Categoria $categoria
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'preco' => true,
        'carte_id' => true,
        'categoria_id' => true,
        'carte' => true,
        'categoria' => true,
    ];
}
