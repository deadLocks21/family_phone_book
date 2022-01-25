<?= $this->Html->css(['login']) ?>

<form action="/family_phone_book/login" method="post">
    <label for="password">Mot de passe</label>
    <input id="password" type="password" name="password">
    <input type="submit" value="Se connecter">
</form>