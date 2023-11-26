<div class="row">
    <div class="col-md-12">
        <?= $this->element('action_index') ?>
        <?= $this->element('filter_box', ['controller' => 'Payments', 'text' => 'Pagamento']) ?>
        <table class="table table-hover no-margin">
            <th>
                <h3><i class="fa-solid fa-money-bill"></i> <?= ' ' . __('Pagamentos') ?></h3>
            </th>
            <th>
            </th>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($payment->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Valor Total') ?></th>
                <td><?= $this->Number->format($payment->total_value) ?></td>
            </tr>
            <tr>
                <th><?= __('Venda') ?></th>
                <td><?= $payment->has('sale') ? $this->Html->link($payment->sale->customer_name, ['controller' => 'Sales', 'action' => 'view', $payment->sale->id]) : '' ?></td>
            </tr>
            <tr>
                <th><?= __('Método') ?></th>
                <td><?= h($payment->method) ?></td>
            </tr>
            <tr>
                <th><?= __('Parcelas') ?></th>
                <td><?= $this->Number->format($payment->installments) ?></td>
            </tr>
            <tr>
                <th><?= __('Situação') ?></th>
                <td><?= $this->element('display_status', ['status' => $payment->status]) ?></td>
            </tr>
        </table>
    </div>
</div>
<?= $this->element('logs', ['entity' => $payment]) ?>