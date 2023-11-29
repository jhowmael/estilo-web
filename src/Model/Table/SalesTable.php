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

class SalesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sales');
        $this->setDisplayField('customer_name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Payments', [
            'foreignKey' => 'sale_id',
        ]);
        $this->hasMany('SaleProducts', [
            'foreignKey' => 'sale_id',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->numeric('total_value')
            ->allowEmptyString('total_value ');

        $validator
            ->scalar('customer_name')
            ->maxLength('customer_name', 255)
            ->allowEmptyString('customer_name');

        $validator
            ->scalar('customer_number')
            ->maxLength('customer_number', 255)
            ->allowEmptyString('customer_number');


        $validator
            ->scalar('customer_phone')
            ->maxLength('customer_phone', 255)
            ->allowEmptyString('customer_phone');


        $validator
            ->scalar('customer_email')
            ->maxLength('customer_email', 255)
            ->allowEmptyString('customer_email');

        $validator
            ->scalar('customer_address')
            ->maxLength('customer_address', 255)
            ->allowEmptyString('customer_address');


        $validator
            ->scalar('note')
            ->maxLength('note', 255)
            ->allowEmptyString('note');

        $validator
            ->dateTime('paid')
            ->allowEmptyString('paid');

        $validator
            ->scalar('status')
            ->maxLength('status', 255)
            ->allowEmptyString('status');

        return $validator;
    }

    public function updateValues($saleId)
    {
        $totalValue = 0;

        $sale = $this->find('all', [
            'conditions' => ['id' => $saleId]
        ])->first();

        if (!empty($sale)) {
            $saleProducts = $this->SaleProducts->find('all', [
                'conditions' => ['sale_id' => $sale->id]
            ])->toArray();
            if (!empty($saleProducts)) {
                foreach ($saleProducts as $saleProduct) {
                    $totalValue = $totalValue + $saleProduct->total_value;
                }
            }
        }
        $sale->total_value = $totalValue;
        $this->save($sale);
    }

    public function updateStatus($saleId)
    {
        $totalPaidValue = 0;


        $sale = $this->find('all', [
            'conditions' => ['id' => $saleId]
        ])->first();

        $saleProducts = $this->SaleProducts->find('all', [
            'conditions' => ['sale_id' => $sale->id]
        ])->toArray();

        /*
        if (!empty($sale->canceled)) {
            $status = 'CANCELEADO';

            if ($sale->status != $status) {
                $sale->status = $status;
                return $this->save($sale);
            }
        }
        */

        if (!empty($sale->paid)) {
            $status = 'PAGO';
        }

        if (empty($saleProducts)) {
            $status = 'VAZIO';
        }

        $payments = $this->Payments->find('all', [
            'conditions' => ['sale_id' => $sale->id]
        ])->toArray();

        if (!empty($saleProducts)) {
            foreach ($payments as $payment) {
                $totalPaidValue = $totalPaidValue + $payment->total_value;
            }
        }

        if ($totalPaidValue < $sale->total_value && empty($sale->paid)) {
            $status =  'AGUARDANDO PAGAMENTO';
        } else if ($totalPaidValue >= $sale->total_value && !empty($saleProducts) && empty($sale->paid)) {
            $status =  'AGUARDANDO CONFIRMAÇÃO';
        }

        if ($sale->status != $status) {
            $sale->status = $status;
            return $this->save($sale);
        }
    }

    public function afterSave(EventInterface $event, EntityInterface $entity, ArrayObject $options)
    {
        if ($entity->isDirty('paid')) {
            $saleProducts = $this->SaleProducts->find('all', [
                'conditions' => ['sale_id' => $entity->id]
            ])->toArray();

            foreach ($saleProducts as $saleProduct) {
                $product = $this->SaleProducts->Products->find('all', [
                    'conditions' => ['id' => $saleProduct->product_id]
                ])->first();

                $product->quantity = $product->quantity - 1;
                $this->SaleProducts->Products->save($product);
            }
        }

        return $this->updateStatus($entity->id);
    }
}
