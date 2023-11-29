<?= $this->Html->link(
    '<i class="far fa-trash-alt"></i>' . __(' Deletar ' . $text),
    ['controller' => $controller, 'action' => 'delete', $entity->id],
    ['escape' => false, 'class' => 'btn btn-danger float-right'],
    ['confirm' => __('Are you sure you want to delete # {0}?', $entity->id), 'escape' => false, 'class' => 'btn btn-danger btn-sm']
) ?>