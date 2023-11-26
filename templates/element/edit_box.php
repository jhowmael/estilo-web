<?= $this->Html->link(
    '<i class="far fa-edit"></i> ' . __('Editar ' . $text),
    ['controller' => $controller, 'action' => 'edit', $entity->id],
    ['escape' => false, 'class' => 'btn btn-warning float-right']
) ?>