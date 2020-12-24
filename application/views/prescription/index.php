<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Prescriptions Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('prescription/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Prescrip Id</th>
						<th>Numero Ordonance</th>
						<th>Produit Prescrit</th>
						<th>Posologie</th>
						<th>Mode Emploi</th>
						<th>Quantite Total</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($prescriptions as $t){ ?>
                    <tr>
						<td><?php echo $t['prescrip_id']; ?></td>
						<td><?php echo $t['numero_ordonance']; ?></td>
						<td><?php echo $t['produit_prescrit']; ?></td>
						<td><?php echo $t['posologie']; ?></td>
						<td><?php echo $t['mode_emploi']; ?></td>
						<td><?php echo $t['quantite_total']; ?></td>
						<td>
                            <a href="<?php echo site_url('prescription/edit/'.$t['prescrip_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('prescription/remove/'.$t['prescrip_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
