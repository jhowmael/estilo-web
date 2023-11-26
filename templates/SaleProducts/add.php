<div class="row">
    <div class="col-md-12">
        <?= $this->Form->create($saleProduct) ?>
        <div class="row">
            <div class="col-md-4">
                <?= $this->Form->control('product_id', [
                    'options' => $products->toArray(),
                    'label' => 'Produto',
                    'class' => 'form-control'
                ]); ?>
            </div>

            <div class="col-md-4">
                <?= $this->Form->control('discount_value', ['label' => 'Desconto', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?= $this->Form->control('total_value', ['label' => 'Valor Total', 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="row">
            <div class="text-center mt-4">
                <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']); ?>
            </div>
            <br>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-hover no-margin">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Desconto') ?></th>
                <th><?= __('Valor Total') ?></th>
                <th><?= __('Situação') ?></th>
                <th class="actions text-center"><?= __('Visualizar') ?></th>
                <th class="actions text-center"><?= __('Deletar') ?></th>
            </tr>
            <?php foreach ($saleProducts as $saleProduct) : ?>
                <tr>
                    <td><?= h($saleProduct->id) ?></td>
                    <td><?= h($saleProduct->discount_value) ?></td>
                    <td><?= h($saleProduct->total_value) ?></td>
                    <td><?= $this->element('display_status', ['status' => $saleProduct->status]) ?></td>
                    <?= $this->element('action_view', ['controller' => 'SaleProducts', 'entity' => $saleProduct]) ?>
                    <?= $this->element('action_delete', ['controller' => 'SaleProducts', 'entity' => $saleProduct]) ?>
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