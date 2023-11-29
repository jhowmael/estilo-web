<table class="table">
    <tr>
        <th>
            <h3> <i class="fa-solid fa-bag-shopping"></i> <?= ' ' . __('Vendas') ?></h3>
        </th>
        <th class="align-right">
            <?= $this->element('add_box', ['controller' => 'Sales', 'text' => 'Venda']) ?>
            <?= $this->element('filter_box', ['controller' => 'Sales', 'text' => 'Vendas']) ?>
        </th>
    </tr>
</table>

<div class="row">
    <div class="col-md-12">
        <table class="table table-hover no-margin">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id',  __('Id')) ?></th>
                    <th><?= $this->Paginator->sort('total_value',  __('Valor Total')) ?></th>
                    <th><?= $this->Paginator->sort('customer_name',  __('Cliente'))  ?></th>
                    <th><?= $this->Paginator->sort('customer_phone',  __('Telefone'))  ?></th>
                    <th><?= $this->Paginator->sort('paid',  __('Data do Pagamento')) ?></th>
                    <th><?= $this->Paginator->sort('status',  __('Situação')) ?></th>
                    <th class="actions text-center"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sales as $sale) : ?>
                    <tr>
                        <td><?= $this->Number->format($sale->id) ?></td>
                        <td><?= $this->Number->format($sale->total_value) ?></td>
                        <td><?= h($sale->customer_name) ?></td>
                        <td><?= h($sale->customer_phone) ?></td>
                        <td><?= h($sale->paid) ?></td>
                        <td><?= $this->element('display_status', ['status' => $sale->status]) ?></td>
                        <td class="actions text-center">
                            <?= $this->element('actions', ['controller' => 'Sales', 'entity' => $sale]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->element('paginator') ?>
    </div>
</div>