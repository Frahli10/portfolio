<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Boite
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
                <th>Titre</th>
                <th>Message</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($messages as $message) {
                echo ' <tr>
                <td>' . $message->id . '</td>
                <td>' . $message->titre . '</td>
                <td>' . $message->message . '</td>
                <td>' . $message->date . '</td>
                <td><button class="btn btn-primary">Marquer comme lu</button>
                <button class="btn btn-danger">Supprimer</button></td>
            </tr>';
            }

            ?>
            </tbody>
        </table>
    </div>
</div>