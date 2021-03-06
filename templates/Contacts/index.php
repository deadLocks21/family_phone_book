<?= $this->Html->css(['index']) ?>
<div class="contacts index content">
    <a href="/family_phone_book/contacts/add" class="button float-right"><h3 style="color: white;">+</h3></a>
    <h3><?= __('Contacts') ?></h3>
</div>
<!-- <div style="background-color: white; z-index: 10;height: 7em; display:block;"></div> -->
<div class="tiles-container">
    <?php foreach ($contacts as $contact) : ?>
        <a href="/family_phone_book/contacts/view/<?= $contact->id ?>" class="content margin-bottom w-90-p">
            <h3><?= h($contact->name) ?></h3>
            <h4 style="line-break: anywhere;"><?= h($contact->mail) ?></h4>
            <h4><?= str_replace("\n", "<br>", h($contact->address)) ?></h4>
        </a>
    <?php endforeach; ?>
</div>