<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Carte Entity
 *
 * @property int $id
 * @property string $restaurante
 * @property string $logo
 * @property string $password
 * @property string|null $whatsapp
 *
 * @property \App\Model\Entity\Categoria[] $categorias
 * @property \App\Model\Entity\Produto[] $produtos
 */
class Carte extends Entity
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
        'restaurante' => true,
        'logo' => true,
        'password' => true,
        'whatsapp' => true,
        'categorias' => true,
        'produtos' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
