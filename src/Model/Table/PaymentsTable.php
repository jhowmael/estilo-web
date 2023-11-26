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

class PaymentsTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('payments');
        $this->setDisplayField('method');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sales', [
            'foreignKey' => 'sale_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('sale_id')
            ->allowEmptyString('sale_id');

        $validator
            ->numeric('total_value')
            ->requirePresence('total_value', 'create')
            ->notEmptyString('total_value');

        $validator
            ->scalar('method')
            ->maxLength('method', 255)
            ->requirePresence('method', 'create')
            ->notEmptyString('method');

        $validator
            ->integer('installments')
            ->allowEmptyString('installments');

        $validator
            ->dateTime('modified')
            ->allowEmptyString('modified');

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
        $this->updateStatus($entity);
    }
}
