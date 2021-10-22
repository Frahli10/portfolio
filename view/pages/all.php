<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Articles
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Article</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Titre</th>
                <th>Article</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($forums as $forum) {
                echo ' <tr>
                <td>' . $forum->titre . '</td>
                <td>' . $forum->article . '</td>
                <td>' . $forum->date . '</td>
                <td><button class="btn btn-primary">Modifier</button>
                <button class="btn btn-danger">Supprimer</button></td>
            </tr>';
            }

            ?>
            </tbody>
        </table>
    </div>
</div>
