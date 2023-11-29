<?php if ($entity->status != 'CANCELADO') : ?>
<?= $this->Form->postLink(
        '<i class="fa-solid fa-ban"></i> ' . __('Cancelar'),
        ['controller' => $controller, 'action' => 'cancel', $entity->id],
        ['confirm' => __('Are you sure you want to cancel # {0}?', $entity->id), 'escape' => false, 'class' => 'btn btn-danger btn-sm']
    ) ?>
<?php endif; ?>