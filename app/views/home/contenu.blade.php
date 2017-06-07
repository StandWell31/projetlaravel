<?php
$notes = DB::table('note')->get();

 ?>


<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" id="tab">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Titre</th>
      <th>Note</th>
      <th>Date</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($notes as $note)
    <tr>
      <td class="mdl-data-table__cell--non-numeric">{{ $note->user }}</td>
      <td>{{ $note->note }}</td>
      <td>{{ $note->created_at }}</td>
      <td>
       <form action="{{ url('modification/'.$note->id) }}" method="GET">
          <button id="add" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent"style="background-color: #e00000;">Modifier</button>
        </form>
      </td>

      <td>
        <form action="{{ url('delete/'.$note->id) }}" method="POST">
          <button id="add" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent"style="background-color: #e00000;">Supprimer</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
