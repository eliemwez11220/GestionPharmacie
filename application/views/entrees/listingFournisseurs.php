<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing des  fournisseurs</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('entree/addFournisseur'); ?>" class="btn btn-success btn-sm">Ajouter un fournisseur</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-condensed">
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Nom fournisseur</th>
                            <th>Contact Fss</th>
                            <th>Type</th>
                            <th>Adresse Fss</th>
                            <th>Creation</th>
                        </tr>
                        <?php $count=1; foreach($all_fss as $t){ ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $t->fss_id; ?></td>
                                <td><?php echo $t->nom; ?></td>
                                <td><?php echo $t->type_fss; ?></td>
                                <td><?php echo $t->contact; ?></td>
                                <td><?php echo $t->adresse; ?></td>
                                <td><?php echo $t->date_created; ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
