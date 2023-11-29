<div class="row">
    <div class="col-md-12">
        <table class="table table-hover no-margin">
            <tr>
                <th>
                    <h3> <i class="fa-solid fa-shirt"></i> <?= ' ' . __('Produto') ?></h3>
                </th>
                <th class="align-right">
                    <?= $this->element('action_index') ?>
                    <?= $this->element('cancel_box', ['controller' => 'Products', 'text' => 'Produto', 'entity' => $product]) ?>
                    <?= $this->element('edit_box', ['controller' => 'Products', 'text' => 'Produto', 'entity' => $product]) ?>
                    <?= $this->element('filter_box', ['controller' => 'Products', 'text' => 'Produtos']) ?>
                </th>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($product->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Código') ?></th>
                <td><?= h($product->code) ?></td>
            </tr>
            <tr>
                <th><?= __('Descrição') ?></th>
                <td><?= h($product->description) ?></td>
            </tr>
            <tr>
                <th><?= __('Valor Total') ?></th>
                <td><?= $product->total_value === null ? '' : $this->Number->format($product->total_value) ?></td>
            </tr>
            <tr>
                <th><?= __('Quantidade') ?></th>
                <td><?= $product->quantity === null ? '' : $this->Number->format($product->quantity) ?></td>
            </tr>
            <tr>
                <th><?= __('Categoria') ?></th>
                <td><?= h($product->category) ?></td>
            </tr>
            <tr>
                <th><?= __('Marca') ?></th>
                <td><?= h($product->brand) ?></td>
            </tr>
            <tr>
                <th><?= __('Cor') ?></th>
                <td><?= $this->element('display_color', ['color' => $product->color]) ?></td>
            </tr>
            <tr>
                <th><?= __('Tamanho') ?></th>
                <td><?= h($product->size) ?></td>
            </tr>
            <tr>
                <th><?= __('Gênero') ?></th>
                <td><?= h($product->gender) ?></td>
            </tr>
            <tr>
                <th><?= __('Anotação') ?></th>
                <td><?= h($product->note) ?></td>
            </tr>
            <tr>
            <tr>
                <th><?= __('Situação') ?></th>
                <td><?= $this->element('display_status', ['status' => $product->status]) ?></td>
            </tr>
        </table>
    </div>
</div>
<?= $this->element('logs', ['entity' => $product]) ?>