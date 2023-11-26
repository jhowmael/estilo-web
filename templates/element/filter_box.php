<?= $this->Html->link(
    '<i class="fas fa-search"></i> ' . __('Filtrar ' . $text),
    ['controller' => $controller, 'action' => 'filter'],
    ['escape' => false, 'class' => 'btn btn-primary float-right']
) ?>