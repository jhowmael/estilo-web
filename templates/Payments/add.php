<?php

$methods = array(
    'DINHEIRO' => 'DINHEIRO',
    'PIX' => 'PIX',
    'DÉBITO' => 'DÉBITO',
    'CRÉDITO' => 'CRÉDITO',
);

$installments = array(
    '1' => 1,
    '2' => 2,
    '3' => 3,
    '4' => 4,
    '5' => 5,
    '6' => 6,
    '7' => 7,
    '8' => 8,
    '9' => 9,
    '10' => 10,
    '11' => 11,
    '12' => 12,
);

?>


<div class="row">
    <div class="col-md-12">
        <h3 class="mb-4"><?= $this->element('action_index') ?> <i class="fa-solid fa-money-bill"></i> <?= ' ' . __('Adicionar Pagamento') ?></h3>
        <?= $this->Form->create($payment) ?>
        <div class="row">
            <div class="col-md-4">
                <?= $this->Form->control('total_value', ['required' => false, 'label' => 'Valor Total', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?= $this->Form->control('method', ['required' => false, 'label' => 'Método', 'class' => 'form-control', 'options' => $methods]); ?>
            </div>
            <div class="col-md-4">
                <?= $this->Form->control('installments', ['required' => false, 'label' => 'parcelas', 'class' => 'form-control', 'options' => $installments]); ?>
            </div>
        </div>
        <div class="text-center mt-4">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']); ?>
        </div>
        <br>
        <?= $this->Form->end() ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover no-margin">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Valor Total') ?></th>
                <th><?= __('Método') ?></th>
                <th><?= __('Parcelas') ?></th>
                <th><?= __('Situação') ?></th>
                <th class="actions text-center"><?= __('Visualizar') ?></th>
                <th class="actions text-center"><?= __('Deletar') ?></th>
            </tr>
            <?php foreach ($payments as $payment) : ?>
                <tr>
                    <td><?= h($payment->id) ?></td>
                    <td><?= h($payment->total_value) ?></td>
                    <td><?= h($payment->method) ?></td>
                    <td><?= h($payment->installments) ?></td>
                    <td><?= $this->element('display_status', ['status' => $payment->status]) ?></td>
                    <?= $this->element('action_view', ['controller' => 'Payments', 'entity' => $payment]) ?>
                    <?= $this->element('action_delete', ['controller' => 'Payments', 'entity' => $payment]) ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-hover no-margin">
            <tr>
                <th>
                    <h3> <i class="fa-solid fa-bag-shopping"></i> <?= ' ' . __('Venda') ?></h3>
                </th>
                <th>
                    <?= $this->element('delete_box', ['controller' => 'Sales', 'text' => 'Venda', 'entity' => $sale]) ?>
                    <?= $this->element('edit_box', ['controller' => 'Sales', 'text' => 'Venda', 'entity' => $sale]) ?>
                    <?= $this->element('view_box', ['controller' => 'Sales', 'text' => 'Venda', 'entity' => $sale]) ?>
                    <?= $this->element('paid_box', ['controller' => 'Sales', 'text' => 'Venda', 'entity' => $sale]) ?>
                </th>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($sale->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Valor Total') ?></th>
                <td><?= $this->Number->format($sale->total_value) ?></td>
            </tr>
            <tr>
                <th><?= __('Nome do Cliente') ?></th>
                <td><?= h($sale->customer_name) ?></td>
            </tr>
            <tr>
                <th><?= __('Cpf do Cliente') ?></th>
                <td><?= h($sale->customer_number) ?></td>
            </tr>
            <tr>
                <th><?= __('Telefone do Cliente') ?></th>
                <td><?= h($sale->customer_phone) ?></td>
            </tr>
            <tr>
                <th><?= __('Email do Cliente') ?></th>
                <td><?= h($sale->customer_email) ?></td>
            </tr>
            <tr>
                <th><?= __('Endereço do Cliente') ?></th>
                <td><?= h($sale->customer_address) ?></td>
            </tr>
            <tr>
                <th><?= __('Anotação') ?></th>
                <td><?= h($sale->note) ?></td>
            </tr>
            <tr>
                <th><?= __('Situação') ?></th>
                <td><?= $this->element('display_status', ['status' => $sale->status]) ?></td>
            </tr>
        </table>
    </div>
</div>