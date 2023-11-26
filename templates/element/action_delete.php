<td class="actions text-center">
    <?= $this->Form->postLink(
        '<i class="far fa-trash-alt"></i> ' . __('Deletar'),
        ['controller' => $controller, 'action' => 'delete', $entity->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $entity->id), 'escape' => false, 'class' => 'btn btn-danger btn-sm']
    ) ?>
</td>