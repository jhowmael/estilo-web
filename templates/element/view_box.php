<?= $this->Html->link(
    '<i class="far fa-eye"></i> ' . __('Visualizar ' . $text),
    ['controller' => $controller, 'action' => 'view', $entity->id],
    ['escape' => false, 'class' => 'btn btn-info float-right']
) ?>