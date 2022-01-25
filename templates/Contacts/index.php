<?= $this->Html->css(['index']) ?>
<div class="contacts index content">
    <?= $this->Html->link(__('Nouveau contact'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Contacts') ?></h3>
</div>
<!-- <div style="background-color: white; z-index: 10;height: 7em; display:block;"></div> -->
<div class="tiles-container">
    <?php foreach ($contacts as $contact) : ?>
        <a href="/contacts/view/<?= $contact->id ?>" class="content margin-bottom w-90-p">
            <h3><?= h($contact->name) ?></h3>
            <h4><?= h($contact->mail) ?></h4>
            <h4><?= str_replace("\n", "<br>", h($contact->address)) ?></h4>
            <!-- <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
                </td> -->
        </a>
    <?php endforeach; ?>
</div>