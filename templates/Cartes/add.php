<div class="new-carte">
    <div class="cartes form content">
        <h1 class="text-center">Criando a carta</h1>
        <div class="form-create">
            <?= $this->Form->create($carte) ?>
            <fieldset class="row">
                <div class="col-md-8">
                    <div class="pre-input">
                        <input name="restaurante" id="restaurante" class="input-carte" placeholder="restaurante" />
                        <label for="restaurante">Nome do negócio</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pre-input">
                        <input name="logo" id="logo" class="input-carte" placeholder="logo" />
                        <label for="logo">Logomarca</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pre-input">
                        <input name="password" id="password" type="password" class="input-carte" placeholder="password" />
                        <label for="password">Senha</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pre-input">
                        <input name="confirm" id="confirm" type="password" class="input-carte" placeholder="password" />
                        <label for="confirm">Confirme a senha</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pre-input">
                        <input name="email" id="email" type="email" class="input-carte" placeholder="whatsapp" />
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pre-input">
                        <input name="whatsapp" id="whatsapp" class="input-carte" placeholder="whatsapp" />
                        <label for="whatsapp">WhatsApp</label>
                    </div>
                </div>
            </fieldset>
            <div class="spacer-md">&nbsp;</div>
            <div class="row my-5">
                <div class="col-md-5 py-3 divisoria">
                    <span class="etapas">Crie Categorias</span>
                    <div class="pre-input">
                        <input name="titulo" id="titulo" type="text" class="input-carte" placeholder="Categoria" />
                        <label for="titulo">Categoria</label>
                        <a id="add-categoria" class="add-categoria"><i class="fas fa-plus"></i></a>
                    </div>
                    <ul id="list-categorias" class="list-group">

                    </ul>
                </div>
                <div class="col-md-7 py-3 divisoria">
                    <span class="etapas">Produtos</span>
                </div>
                <div class="text-center">
                    <?= $this->Form->button(__('Salvar')) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>