<!-- Wide card with share menu button -->
<style>
.demo-card-wide.mdl-card {
    width: 100%;
    margin-top: 1cm;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}

.deplace{
  margin-left: 30px;
}
</style>
<form action="" method="post">
  <div class="demo-card-wide mdl-card mdl-shadow--2dp theme">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label deplace">
      <ul class="demo-list-item mdl-list">
        <li class="mdl-list__item">
          <input class="mdl-textfield__input" type="text" id="sample3" name="user">
          <label class="mdl-textfield__label" for="sample3">Titre...</label>
        </li>
      </ul>
    </div>
  </div>
  <div class="demo-card-wide mdl-card mdl-shadow--2dp theme">
    <div class="mdl-textfield mdl-js-textfield deplace">
      <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="note"></textarea>
      <label class="mdl-textfield__label" for="sample5">Note...</label>
    </div>
  </div>
  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" style="margin-left: 45%;background-color: #e00000;">
  Ajouter
</button>
</form>
