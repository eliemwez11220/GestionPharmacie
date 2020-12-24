<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ordonances Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ordonance/add'); ?>" class="btn btn-success btn-sm">Ajouter une ordonance</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Ordon Id</th>
						<th>Ordonance Numero</th>
						<th>Ordonance Date</th>
						<th>Nom Medecin</th>
                        <th>Specialite</th>
                        <th>Malade Noms</th>
                        <th>Malade Age</th>
                        <th>Telephone</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ordonances as $t){ ?>
                    <tr>
						<td><?php echo $t['ordon_id']; ?></td>
						<td><?php echo $t['malade_concerne']; ?></td>
						<td><?php echo $t['ordonance_numero']; ?></td>
						<td><?php echo $t['ordonance_date']; ?></td>
						<td><?php echo $t['nom_medecin']; ?></td>
                        <td><?php echo $t['spec_medecin']; ?></td>

                        <td><?php echo $t['malade_noms']; ?></td>
                        <td><?php echo $t['malade_age']; ?></td>
                        <td><?php echo $t['malade_telephone']; ?></td>
						<td>
                            <a href="<?php echo site_url('ordonance/edit/'.$t['ordon_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('ordonance/remove/'.$t['ordon_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
