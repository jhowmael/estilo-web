<td class="actions text-center">
    <?= $this->Html->link(
        '<i class="far fa-eye"></i> ' . __('Ver'),
        ['controller' => $controller, 'action' => 'view', $entity->id],
        ['escape' => false, 'class' => 'btn btn-info btn-sm']
    ) ?>
</td>