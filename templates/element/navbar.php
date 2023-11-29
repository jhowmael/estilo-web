<!-- Se você estiver usando o CakePHP 3.x ou superior -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MEGA HYPE STORE</a>

        <!-- Botão do Navbar Toggler para telas menores -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Conteúdo do Navbar -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item <?= $this->getRequest()->getParam('controller') === 'Pages' && $this->getRequest()->getParam('action') === 'display' ? 'active' : '' ?>">
                    <a href="<?= $this->Url->build('/') ?>" class="nav-link">
                        <i class="fa-solid fa-chart-simple"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item <?= $this->getRequest()->getParam('controller') === 'Sales' && $this->getRequest()->getParam('action') === 'index' ? 'active' : '' ?>">
                    <a href="<?= $this->Url->build('/sales/index') ?>" class="nav-link">
                        <i class="fa-solid fa-bag-shopping"></i>
                        Vendas
                    </a>
                </li>
                <li class="nav-item <?= $this->getRequest()->getParam('controller') === 'Payments' && $this->getRequest()->getParam('action') === 'index' ? 'active' : '' ?>">
                    <a href="<?= $this->Url->build('/payments/index') ?>" class="nav-link">
                        <i class="fa-solid fa-money-bill"></i>
                        Pagamentos
                    </a>
                </li>
                <li class="nav-item <?= $this->getRequest()->getParam('controller') === 'Products' && $this->getRequest()->getParam('action') === 'index' ? 'active' : '' ?>">
                    <a href="<?= $this->Url->build('/products/index') ?>" class="nav-link">
                        <i class="fa-solid fa-shirt"></i>
                        Produtos
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>