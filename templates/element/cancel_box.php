<?php if ($entity->status != 'CANCELADO') : ?>
<?= $this->Html->link(
        '<i class="fa-solid fa-ban"></i>' . __('Cancelar ' . $text),
        ['controller' => $controller, 'action' => 'cancel', $entity->id],
        ['escape' => false, 'class' => 'btn btn-danger float-right'],
        ['confirm' => __('Certeza que você quer Cancelar # {0}?', $entity->id), 'escape' => false, 'class' => 'btn btn-danger btn-sm']
    ) ?>
<?php endif; ?>