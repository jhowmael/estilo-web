<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Datasource\EntityInterface;
use Cake\Event\EventInterface;
use ArrayObject;

class SaleProductsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sale_products');
        $this->setDisplayField('status');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sales', [
            'foreignKey' => 'sale_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('sale_id')
            ->notEmptyString('sale_id');

        $validator
            ->integer('product_id')
            ->notEmptyString('product_id');

        $validator
            ->numeric('discount_value')
            ->allowEmptyString('discount_value');

        $validator
            ->numeric('total_value')
            ->allowEmptyString('total_value');

        $validator
            ->dateTime('deleted')
            ->allowEmptyString('deleted');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        return $validator;
    }

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('sale_id', 'Sales'), ['errorField' => 'sale_id']);
        $rules->add($rules->existsIn('product_id', 'Products'), ['errorField' => 'product_id']);

        return $rules;
    }

    public function updateStatus(EntityInterface $entity)
    {
        if ($entity->status != 'ATIVO') {
            $entity->status = 'ATIVO';

            return $this->save($entity);
        }
    }

    public function afterSave(EventInterface $event, EntityInterface $entity, ArrayObject $options)
    {
        $this->Sales->updateValues($entity->sale_id);

        $this->updateStatus($entity);
    }
}
