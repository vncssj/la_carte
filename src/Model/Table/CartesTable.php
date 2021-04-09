<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cartes Model
 *
 * @property \App\Model\Table\CategoriasTable&\Cake\ORM\Association\HasMany $Categorias
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\Carte newEmptyEntity()
 * @method \App\Model\Entity\Carte newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Carte[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carte get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carte findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Carte patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carte[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carte|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carte saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carte[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carte[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carte[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carte[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CartesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('cartes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Categorias', [
            'foreignKey' => 'carte_id',
        ]);
        $this->hasMany('Produtos', [
            'foreignKey' => 'carte_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('restaurante')
            ->maxLength('restaurante', 100)
            ->requirePresence('restaurante', 'create')
            ->notEmptyString('restaurante');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 100)
            ->requirePresence('logo', 'create')
            ->notEmptyString('logo');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('whatsapp')
            ->maxLength('whatsapp', 100)
            ->allowEmptyString('whatsapp');

        return $validator;
    }
}
