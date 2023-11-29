<div class="row">
    <div class="col-md-12">
        <table class="table table-hover no-margin">
            <tr>
                <th>
                    <h3><i class="fa-solid fa-bag-shopping"></i> <?= ' ' . __('Venda') ?></h3>
                </th>
                <th class="align-right">
                    <?= $this->element('action_index') ?>
                    <?= $this->element('edit_box', ['controller' => 'Sales', 'text' => 'Venda', 'entity' => $sale]) ?>
                    <?= $this->element('filter_box', ['controller' => 'Sales', 'text' => 'Vendas']) ?>
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
<?= $this->element('logs', ['entity' => $sale]) ?>
<h3><i class="fa-solid fa-money-bill"></i> <?= ' ' . __('Pagamentos') ?>
    <div class="align-right">
        <?= $this->element('add_box', ['controller' => 'Payments', 'text' => 'Pagamento', 'parentEntityId' => $sale->id]) ?>
    </div>
</h3>

<table class="table table-hover no-margin">
    <tr>
        <th><?= __('Id') ?></th>
        <th><?= __('Valor Total') ?></th>
        <th><?= __('Método') ?></th>
        <th><?= __('Parcelas') ?></th>
        <th><?= __('Situação') ?></th>
        <th class="actions text-center"><?= __('Ações') ?></th>
    </tr>
    <?php foreach ($sale->payments as $payment) : ?>
        <tr>
            <td><?= h($payment->id) ?></td>
            <td><?= h($payment->total_value) ?></td>
            <td><?= h($payment->method) ?></td>
            <td><?= h($payment->installments) ?></td>
            <td><?= $this->element('display_status', ['status' => $payment->status]) ?></td>
            <td class="actions text-center">
                <?= $this->element('action_view', ['controller' => 'Payments', 'entity' => $payment]) ?>
                <?= $this->element('action_delete', ['controller' => 'Payments', 'entity' => $payment]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h3> <i class="fa-solid fa-shirt"></i> <?= ' ' . __('Produtos da Venda') ?>
    <div class="align-right">
        <?= $this->element('add_box', ['controller' => 'SaleProducts', 'text' => 'Produto da Venda', 'parentEntityId' => $sale->id]) ?>
    </div>
</h3>
<table class="table table-hover no-margin">
    <tr>
        <th><?= __('Id') ?></th>
        <th><?= __('Sale') ?></th>
        <th><?= __('Product') ?></th>
        <th><?= __('Valor do Desconto') ?></th>
        <th><?= __('Valor Total') ?></th>
        <th><?= __('Status') ?></th>
        <th class="actions text-center"><?= __('Ações') ?></th>
    </tr>
    <?php foreach ($saleProducts as $saleProduct) : ?>
        <tr>
            <td><?= h($saleProduct->id) ?></td>
            <td><?= $saleProduct->has('sale') ? $this->Html->link($saleProduct->sale->id, ['controller' => 'Sales', 'action' => 'view', $saleProduct->sale->id]) : '' ?></td>
            <td><?= $saleProduct->has('product') ? $this->Html->link($saleProduct->product->description, ['controller' => 'Products', 'action' => 'view', $saleProduct->product->id]) : '' ?></td>
            <td><?= h($saleProduct->discount_value) ?></td>
            <td><?= h($saleProduct->total_value) ?></td>
            <td><?= $this->element('display_status', ['status' => $saleProduct->status]) ?></td>
            <td class="actions text-center">
                <?= $this->element('action_delete', ['controller' => 'SaleProducts', 'entity' => $saleProduct]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>