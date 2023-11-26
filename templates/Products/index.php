<?= $this->element('add_box', ['controller' => 'Products', 'text' => 'Produto']) ?>
<?= $this->element('filter_box', ['controller' => 'Products', 'text' => 'Produtos']) ?>

<h3> <i class="fa-solid fa-shirt"></i> <?= ' ' . __('Produtos') ?></h3>

<div class="row">
    <div class="col-md-12">
        <table class="table table-hover no-margin">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id',  __('Id')) ?></th>
                    <th><?= $this->Paginator->sort('total_value',  __('Valor Total')) ?></th>
                    <th><?= $this->Paginator->sort('Code', __('Código')) ?></th>
                    <th><?= $this->Paginator->sort('Description', __('Descrição')) ?></th>
                    <th><?= $this->Paginator->sort('category', __('Categoria')) ?></th>
                    <th><?= $this->Paginator->sort('brand', __('Marca')) ?></th>
                    <th><?= $this->Paginator->sort('color', __('Cor')) ?></th>
                    <th><?= $this->Paginator->sort('size', __('Tamanho')) ?></th>
                    <th><?= $this->Paginator->sort('gender', __('Gênero')) ?></th>
                    <th><?= $this->Paginator->sort('quantity', __('Quantidade')) ?></th>
                    <th><?= $this->Paginator->sort('status', __('Situação')) ?></th>
                    <th class="actions text-center"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= $product->total_value === null ? '' : $this->Number->format($product->total_value) ?></td>
                    <td><?= h($product->code) ?></td>
                    <td><?= h($product->description) ?></td>
                    <td><?= h($product->category) ?></td>
                    <td><?= h($product->brand) ?></td>
                    <td><?= $this->element('display_color', ['color' => $product->color]) ?></td>
                    <td><?= h($product->size) ?></td>
                    <td><?= h($product->gender) ?></td>
                    <td><?= $product->quantity === null ? '' : $this->Number->format($product->quantity) ?></td>
                    <td><?= $this->element('display_status', ['status' => $product->status]) ?></td>
                    <?= $this->element('actions', ['controller' => 'Products', 'entity' => $product]) ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <?= $this->element('paginator') ?>
    </div>
</div>