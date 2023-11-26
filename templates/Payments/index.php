<?= $this->element('filter_box', ['controller' => 'Payments', 'text' => 'Pagamentos']) ?>

<h3><i class="fa-solid fa-money-bill"></i> <?= ' ' . __('Pagamentos') ?></h3>


<div class="row">
    <div class="col-md-12">
        <table class="table table-hover no-margin">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id',  __('Id')) ?></th>
                    <th><?= $this->Paginator->sort('sale_id',  __('Venda'))  ?></th>
                    <th><?= $this->Paginator->sort('total_value',  __('Valor Total'))  ?></th>
                    <th><?= $this->Paginator->sort('method',  __('Método'))  ?></th>
                    <th><?= $this->Paginator->sort('installments',  __('Parcelas'))  ?></th>
                    <th><?= $this->Paginator->sort('status',  __('Situação'))  ?></th>
                    <th class="actions text-center"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $payment) : ?>
                    <tr>
                        <td><?= $this->Number->format($payment->id) ?></td>
                        <td><?= $payment->has('sale') ? $this->Html->link($payment->sale->customer_name, ['controller' => 'Sales', 'action' => 'view', $payment->sale->id]) : '' ?></td>
                        <td><?= $this->Number->format($payment->total_value) ?></td>
                        <td><?= h($payment->method) ?></td>
                        <td><?= $this->Number->format($payment->installments) ?></td>
                        <td><?= $this->element('display_status', ['status' => $payment->status]) ?></td>
                        <?= $this->element('action_view', ['controller' => 'Payments', 'entity' => $payment]) ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->element('paginator') ?>
    </div>
</div>