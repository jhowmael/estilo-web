<?php

declare(strict_types=1);

namespace App\Controller;

class SaleProductsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sales', 'Products'],
        ];
        $saleProducts = $this->paginate($this->SaleProducts);

        $this->set(compact('saleProducts'));
    }

    public function add($saleId)
    {
        $saleProduct = $this->SaleProducts->newEmptyEntity();
        $saleProduct = $this->SaleProducts->patchEntity($saleProduct, ['sale_id' => $saleId]);

        $sale = $this->SaleProducts->Sales->find('all', [
            'conditions' => ['id' => $saleId]
        ])->first();

        $saleProducts = $this->SaleProducts->find('all', [
            'conditions' => ['sale_id' => $saleId]
        ])->toArray();

        $products = $this->SaleProducts->Products->find('list', [
            'keyField' => 'id',
            'valueField' => 'description'
        ]);

        $this->set('products', $products);

        $this->set(compact('saleProducts', 'sale', 'products'));


        if ($this->request->is('post')) {
            $saleProduct = $this->SaleProducts->patchEntity($saleProduct, $this->request->getData());

            if ($this->SaleProducts->save($saleProduct)) {
                $this->Flash->success(__('Produto da Venda Salvo Com Sucesso.'));

                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('Não Foi Possível Salvar o Produto da Venda.'));
        }

        $this->set(compact('saleProduct'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleProduct = $this->SaleProducts->get($id);
        $saleId = $saleProduct->sale_id;
        if ($this->SaleProducts->delete($saleProduct)) {
            $this->SaleProducts->Sales->updateValues($saleId);
            $this->Flash->success(__('Produto da Venda Deletado.'));
        } else {
            $this->Flash->error(__('Não Foi Possível Deletar o Produto da Venda.'));
        }

        return $this->redirect($this->referer());
    }
}
