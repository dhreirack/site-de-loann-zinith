<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            News <small> Gérer les news</small>
        </h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>titre</td>
                    <td>...</td>
                    <td>...</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lesNews as $uneNews) {
                   echo "<tr><td>".$uneNews->titre."</td><td></td><td></td><td></td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    
</div>