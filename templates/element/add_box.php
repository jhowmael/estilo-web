<?= $this->Html->link(
    '<i class="fas fa-plus"></i> ' . __('Novo ' . $text),
    ['controller' => $controller, 'action' => 'add', $parentEntityId ?? null],
    ['escape' => false, 'class' => 'btn btn-success float-right']
) ?>
