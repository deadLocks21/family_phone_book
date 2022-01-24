<?= $this->Html->css(['add']) ?>
<div class="row">
    <div class="column-responsive column-100">
        <div class="contacts form content">
            <?= $this->Form->create($contact) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('name', ['label' => 'Nom, prénom, famile, ...']);
                    echo $this->Form->control('mail', ['label' => 'Adresse mail']);
                    echo $this->Form->control('address', ['label' => 'Adresse postale']);
                ?>
            </fieldset>
            <?= $this->Form->button('Envoyer') ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
