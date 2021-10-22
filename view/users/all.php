<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Utilisateurs
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($users as $user) {
                echo ' <tr>
                <td>' . $user->id . '</td>
                <td>' . $user->nom . '</td>
                <td>' . $user->date_naissance . '</td>
                <td><button class="btn btn-primary">Modifier</button>
                <button class="btn btn-danger">Supprimer</button></td>
            </tr>';
            }

            ?>
            </tbody>
        </table>
    </div>
</div>
