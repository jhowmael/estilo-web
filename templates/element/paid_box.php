<?php if ($entity->status == 'AGUARDANDO CONFIRMAÇÃO') : ?>
<?= $this->Html->link(
        '<i class="fa-solid fa-hand-holding-dollar"></i>' . __(' Cobrar ' . $text),
        ['controller' => $controller, 'action' => 'paid',  $entity->id],
        ['escape' => false, 'class' => 'btn btn-dark float-right'],
        ['confirm' => __('Tem certeza de que deseja cobrar # {0}?', $entity->id), 'escape' => false, 'class' => 'btn btn-teal btn-sm']
    ) ?>
<?php endif; ?>