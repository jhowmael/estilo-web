<?php

declare(strict_types=1);

namespace App\Controller;

class PaymentsController extends AppController
{

    public function index()
    {
        $this->paginate = [
            'contain' => ['Sales'],
        ];
        $payments = $this->paginate($this->Payments);

        $this->set(compact('payments'));
    }

    public function view($id = null)
    {
        $payment = $this->Payments->get($id, [
            'contain' => ['Sales'],
        ]);

        $this->set(compact('payment'));
    }

    public function add($saleId)
    {
        $payment = $this->Payments->newEmptyEntity();
        $payment = $this->Payments->patchEntity($payment, ['sale_id' => $saleId]);

        $sale = $this->Payments->Sales->find('all', [
            'conditions' => ['id' => $saleId]
        ])->first();

        $payments = $this->Payments->find('all', [
            'conditions' => ['sale_id' => $saleId]
        ])->toArray();

        $this->set(compact('payments', 'sale'));


        if ($this->request->is('post')) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());

            if ($this->Payments->save($payment)) {
                $this->Flash->success(__('Pagamento Salvo Com Sucesso.'));

                $this->Payments->Sales->updateStatus($saleId);
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('Não Foi Possível Salvar o Pagamento.'));
        }

        $this->set(compact('payment'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payment = $this->Payments->get($id);
        $saleId = $payment->sale_id;

        if ($this->Payments->delete($payment)) {
            $this->Payments->Sales->updateStatus($saleId);
            $this->Flash->success(__('Pagamento Deletado.'));
        } else {
            $this->Flash->error(__('Não Foi Possível Deletar o Pagamento.'));
        }

        return $this->redirect($this->referer());
    }
}
