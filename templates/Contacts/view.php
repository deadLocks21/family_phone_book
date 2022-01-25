<?= $this->Html->css(['view']) ?>
<div class="row">
    <div class="column-responsive column-100">
        <div class="contacts view content">
            <h3><?= h($contact->name) ?></h3>
            <strong><?= __('Mail') ?></strong>
            <p><?= h($contact->mail) ?></p>
            <div class="text">
                <strong><?= __('Adresse') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($contact->address)); ?>
                </blockquote>
            </div>
            <div class="flex-row-center margin-top">
                <a href="/contacts">
                    <?= $this->Form->button('Annuler', ['type' => 'button']) ?>
                </a>
                <a href="/contacts/edit/<?= $contact->id ?>">
                    <?= $this->Form->button('Modifier', ['type' => 'submit']) ?>
                </a>
            </div>
        </div>
    </div>
</div>