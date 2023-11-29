<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\I18n\FrozenTime;

class ProductsController extends AppController
{
    public function index()
    {
        $conditions = ['Products.status !=' => 'CANCELADO'];

        $query = $this->Products->find('all', [
            'conditions' => $conditions,
        ]);

        $products = $this->paginate($query);

        $this->set(compact('products'));
    }


    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['SaleProducts'],
        ]);

        $this->set(compact('product'));
    }
    public function add()
    {
        $product = $this->Products->newEmptyEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('product'));
    }

    public function cancel($id = null)
    {
        $product = $this->Products->get($id);

        $product->canceled = FrozenTime::now('America/Sao_Paulo');

        if ($this->Products->save($product)) {
            $this->Flash->error(__('O Produto Foi Cancelado Com Sucesso.'));
        } else {
            $this->Flash->error(__('Não Foi Possível Cancelar o Produto'));
        }

        return $this->redirect($this->referer());
    }
}
