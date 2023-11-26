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

class ProductsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('products');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('SaleProducts', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->numeric('total_value')
            ->requirePresence('total_value', 'create')
            ->notEmptyString('total_value');

        $validator
            ->scalar('code')
            ->maxLength('code', 255)
            ->allowEmptyString('code');
        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->allowEmptyString('description');
        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyString('image');

        $validator
            ->scalar('category')
            ->maxLength('category', 255)
            ->allowEmptyString('category');

        $validator
            ->scalar('brand')
            ->maxLength('brand', 255)
            ->allowEmptyString('brand');

        $validator
            ->scalar('color')
            ->maxLength('color', 255)
            ->allowEmptyString('color');

        $validator
            ->scalar('size')
            ->maxLength('size', 255)
            ->allowEmptyString('size');

        $validator
            ->scalar('gender')
            ->maxLength('gender', 255)
            ->allowEmptyString('gender');

        $validator
            ->integer('quantity')
            ->allowEmptyString('quantity');

        $validator
            ->scalar('note')
            ->maxLength('note', 255)
            ->allowEmptyString('note');

        $validator
            ->dateTime('deleted')
            ->allowEmptyDateTime('deleted');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        return $validator;
    }

    public function getDescription(EntityInterface $entity)
    {
        $description = '';

        if (!empty($entity->category)) {
            $description .= $entity->category;
        }

        if (!empty($entity->brand)) {
            $description .= ' ' . $entity->brand;
        }


        if (!empty($entity->color)) {
            $description .= ' ' . $entity->color;
        }

        if (!empty($entity->size)) {
            $description .= ' ' . $entity->size;
        }

        if (!empty($entity->gender)) {
            $description .= ' ' . $entity->gender;
        }

        return $description;
    }

    public function afterSave(EventInterface $event, EntityInterface $entity, ArrayObject $options)
    {
        if ($entity->isNew() && empty($entity->code)) {
            $entity->code = $entity->id;

            $this->save($entity);
        }

        if ($entity->description != $this->getDescription($entity)) {
            $entity->description = $this->getDescription($entity);

            $this->save($entity);
        }
    }
}
