<?php

$categories = array(
    'CAMISA' => 'CAMISA',
    'CASACO' =>  'CASACO',
    'CALÇA' => 'CALÇA',
    'BERMUDA' => 'BERMUDA',
    'CALÇADO' => 'CALÇADO',
    'BONÉ' => 'BONÉ',
    'ACESSÓRIO' => 'ACESSÓRIO',
);

$brands = array(
    'NIKE' => 'NIKE',
    'ADIDAS' => 'ADIDAS',
    'PUMA' => 'PUMA',
    'LACOSTE' => 'LACOSTE',
    'REEBOK' => 'REEBOK',
    'VANS' => 'VANS',
    'CONVERSE' => 'CONVERSE',
    'NEW BALANCE' => 'NEW BALANCE',
    'UNDER ARMOUR' => 'UNDER ARMOUR',
    'ASICS' => 'ASICS',
    'TIMBERLAND' => 'TIMBERLAND',
    'FILA' => 'FILA',
    'LEVI\'S' => 'LEVI\'S',
    'H&M' => 'H&M',
    'ZARA' => 'ZARA',
    'GUCCI' => 'GUCCI',
    'VERSACE' => 'VERSACE',
    'BURBERRY' => 'BURBERRY',
    'CALVIN KLEIN' => 'CALVIN KLEIN',
    'HUGO BOSS' => 'HUGO BOSS',
    'RALPH LAUREN' => 'RALPH LAUREN',
    'TOMMY HILFIGER' => 'TOMMY HILFIGER',
    'MICHAEL KORS' => 'MICHAEL KORS',
    'COACH' => 'COACH',
    'LOUIS VUITTON' => 'LOUIS VUITTON',
    'PRADA' => 'PRADA',
    'HERMÈS' => 'HERMÈS',
    'DOLCE & GABBANA' => 'DOLCE & GABBANA',
    'CHANEL' => 'CHANEL',
    'SAINT LAURENT' => 'SAINT LAURENT',
    'BALENCIAGA' => 'BALENCIAGA',
    'ALEXANDER MCQUEEN' => 'ALEXANDER MCQUEEN',
    'JIMMY CHOO' => 'JIMMY CHOO',
);

$genders = array(
    'MASCULINO' => 'MASCULINO',
    'FEMININO' => 'FEMININO',
    'UNISSEX' => 'UNISSEX',
);

$sizes = array(
    'PP' => 'PP',
    'P' => 'P',
    'M' => 'M',
    'G' => 'G',
    'GG' => 'GG',
    'XGG' => 'XGG',
    'G1' => 'G1',
    'G2' => 'G2',
);

$colors = array(
    'PRETO' => 'PRETO',
    'BRANCO' => 'BRANCO',
    'CINZA' => 'CINZA',
    'VERMELHO' => 'VERMELHO',
    'AZUL' => 'AZUL',
    'VERDE' => 'VERDE',
    'AMARELO' => 'AMARELO',
    'LARANJA' => 'LARANJA',
    'ROXO' => 'ROXO',
    'ROSA' => 'ROSA',
);

?>

<div class="row">
    <div class="col-md-12">
        <h3 class="mb-4"><?= $this->element('action_index') ?> <i class="fa-solid fa-shirt"></i> <?= ' ' . __('Novo Produto') ?></h3>
        <?= $this->Form->create($product) ?>
        <div class="row">
            <div class="col-md-6">
                <?= $this->Form->control('total_value', ['label' => 'Valor Total', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-6">
                <?= $this->Form->control('quantity', ['label' => 'Quantidade', 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->Form->control('category', ['label' => 'Categoria', 'class' => 'form-control', 'options' => $categories]); ?>
            </div>
            <div class="col-md-6">
                <?= $this->Form->control('brand', ['required' => false, 'label' => 'Marca', 'class' => 'form-control',  'options' => $brands]); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?= $this->Form->control('color', ['required' => false, 'label' => 'Cor', 'class' => 'form-control',  'options' => $colors]); ?>
            </div>
            <div class="col-md-4">
                <?= $this->Form->control('size', ['required' => false, 'label' => 'Tamanho', 'class' => 'form-control',  'options' => $sizes]); ?>
            </div>
            <div class="col-md-4">
                <?= $this->Form->control('gender', ['required' => false, 'label' => 'Gênero', 'class' => 'form-control',  'options' => $genders]); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->control('note', ['required' => false, 'label' => 'Anotação', 'class' => 'form-control', 'rows' => '5']); ?>
            </div>
        </div>
        <div class="text-center mt-4">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']); ?>
        </div>
        <br>
        <?= $this->Form->end() ?>
    </div>
</div>