<?php if ($status == 'ATIVO') : ?>
    <p style="background-color:green; display: inline-block;  border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>

<?php if ($status == 'INATIVO') : ?>
    <p style="background-color:yellow; display: inline-block;  border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>

<?php if ($status == 'CANCELADO') : ?>
    <p style="background-color:orange; red: inline-block;  border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>

<?php if ($status == 'DELETADO') : ?>
    <p style="background-color:red; red: inline-block;  border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>

<?php if ($status == 'ZERADO') : ?>
    <p style="background-color:blue; display: inline-block;  border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>

<?php if ($status == 'VAZIO') : ?>
    <p style="color:white; background-color:gray; display: inline-block; border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>

<?php if ($status == 'AGUARDANDO PAGAMENTO') : ?>
    <p style="background-color:pink; display: inline-block;  border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>

<?php if ($status == 'AGUARDANDO CONFIRMAÇÃO') : ?>
    <p style="background-color:purple; display: inline-block;  border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>

<?php if ($status == 'PAGO') : ?>
    <p style="color:white; background-color:teal; display: inline-block;  border-radius: 6px;"><?= $status ?></p>
<?php endif; ?>