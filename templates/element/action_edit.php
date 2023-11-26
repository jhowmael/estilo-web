<td class="actions text-center">
    <?= $this->Html->link(
        '<i class="far fa-edit"></i> ' . __('Editar'),
        ['controller' => $controller, 'action' => 'edit', $entity->id],
        ['escape' => false, 'class' => 'btn btn-warning btn-sm']
    ) ?>
</td>