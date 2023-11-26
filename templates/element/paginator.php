<center>
    <ul class="pagination justify-content-center">
        <?= $this->Paginator->first('<< ' . __(' -primeiro- ')) ?>
        <?= $this->Paginator->prev(' < ' . __(' -anterior- ')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__(' -próximo- ') . ' >') ?>
        <?= $this->Paginator->last(__(' -último- ') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de {{count}} total')) ?></p>
</center>