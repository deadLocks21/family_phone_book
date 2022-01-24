<?= $this->Html->css(['login']) ?>

<form action="/login" >
    <label for="password">Mot de passe</label>
    <input id="password" type="password">
    <input type="submit" value="Se connecter">
</form>