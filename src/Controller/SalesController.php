<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\FrozenDate;

class SalesController extends AppController
{
    public function index()
    {
        $sales = $this->paginate($this->Sales);

        $this->set(compact('sales'));
    }

    public function view($id = null)
    {
        $sale = $this->Sales->get($id, [
            'contain' => ['Payments'],
        ]);

        $saleProducts = $this->Sales->SaleProducts->find('all', [
            'conditions' => ['SaleProducts.sale_id' => $id],
            'contain' => ['Products', 'Sales'],
        ])->toArray();

        $this->set(compact('sale', 'saleProducts'));
    }

    public function add()
    {
        $sale = $this->Sales->newEmptyEntity();
        if ($this->request->is('post')) {
            $sale = $this->Sales->patchEntity($sale, $this->request->getData());
            if ($this->Sales->save($sale)) {
                $this->Flash->success(__('The sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale could not be saved. Please, try again.'));
        }
        $this->set(compact('sale'));
    }

    public function edit($id = null)
    {
        $sale = $this->Sales->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sale = $this->Sales->patchEntity($sale, $this->request->getData());
            if ($this->Sales->save($sale)) {
                $this->Flash->success(__('The sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale could not be saved. Please, try again.'));
        }
        $this->set(compact('sale'));
    }

    public function paid($id = null)
    {
        $sale = $this->Sales->get($id);

        if ($sale->status == 'AGUARDANDO CONFIRMAÇÃO') {
            $sale->paid = FrozenDate::now();

            $this->Sales->save($sale);
            $this->Flash->error(__('A venda foi Cobrada Com Sucesso.'));
        } else {
            $this->Flash->error(__('Não Foi Possível Cobrar a Venda'));
        }

        return $this->redirect($this->referer());
    }

    public function cancel($id = null)
    {
        $this->request->allowMethod(['post']);
        $sale = $this->Sales->get($id);

        if ($sale->status != 'PAGO') {
            $sale->canceled = FrozenDate::now();

            $this->Sales->save($sale);
            $this->Flash->error(__('A venda foi Canceleada Com Sucesso.'));
        } else {
            $this->Flash->error(__('Não Foi Possível Canceleada a Venda'));
        }

        return $this->redirect($this->referer());
    }
}
