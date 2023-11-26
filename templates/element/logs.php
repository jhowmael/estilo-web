<div class="card card-outline card-info">
    <?php if (!empty($entity->created)) : ?>
        <div class="card-body">
            <?= __('Criado') . ' ' . h($entity->created) ?>
        </div>
    <?php endif; ?>
    <?php if (!empty($entity->modified)) : ?>
        <div class="card-body">
            <?= __('Modificado') . ' ' . h($entity->modified) ?>
        </div>
    <?php endif; ?>
    <?php if (!empty($entity->deleted)) : ?>
        <div class="card-body">
            <?= __('Deletado') . ' ' . h($entity->deleted) ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($entity->paid)) : ?>
        <div class="card-body">
            <?= __('Pago') . ' ' . h($entity->paid) ?>
        </div>
    <?php endif; ?>
</div>