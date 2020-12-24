<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fiche de suivi de stock par point de vente</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('shopVente/addStockShop'); ?>" class="btn btn-success btn-sm">Ajouter stock point de vente</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-condensed">
                        <tr>
                           
                            <th>ID</th>
                            <th>Nom Shop</th>
                            <th>Produit</th>
                            <th>Prix unitaire</th>
                            <th>Qte Stock</th>
                            <th>Date Appro</th>
                        </tr>
                        <?php 
                        foreach($all_stocks as $t){?>
                            <tr>
                                <td><?php echo $t->stock_id; ?></td>
                                <td><?php echo $t->shop_nom; ?></td>
                                <td><?php echo $t->libelle; ?></td>
                                <td><?php echo $t->prix_unitaire; ?></td>
                                <td><?php echo $t->stock_init; ?></td>
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





