


<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing des points de vente</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('shopVente/add'); ?>" class="btn btn-success btn-sm">Ajouter un nouveau point vente</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-condensed">
                        <tr>
                           
                            <th>Code Shop</th>
                            <th>Nom Shop</th>
                            <th>Adresse Shop</th>
                            <th>Date Ajout</th>
                        </tr>
                        <?php 
                        foreach($all_shops as $t){ ?>
                            <tr>
                                <td><?php echo $t->shop_id; ?></td>
                                <td><?php echo $t->shop_nom; ?></td>
                                <td><?php echo $t->shop_adresse; ?></td>
                                <td><?php echo $t->date_ajout; ?></td>
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
