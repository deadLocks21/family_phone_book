<?= $this->Html->css(['edit']) ?>
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
            <div class="flex-row-center">
                <a href="/contacts/view/<?= $contact->id ?>">
                    <?= $this->Form->button('Annuler', ['type' => 'button']) ?>
                </a>
                <?= $this->Form->button('Envoyer', ['type' => 'submit']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
