<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing des demandes de sortie stock</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('demande/add'); ?>" class="btn btn-success btn-sm">Ajouter une nouvelle sortie</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-condensed">
                        <tr>
                            <th>#</th>
                            <th>ProduitID</th>
                            <th>ShopID</th>
                            <th>Noms Agent</th>
                            <th>Date Sortie</th>

                            <th class="text-center">Qté sortie</th>
                            <th class="text-center">Prix Vente</th>
                               <th class="text-center">Prix total</th>
                          <th class="text-center">Montant TVA</th>
                       
                            <th class="text-right">Total encaissé</th>
                           
                        </tr>
                        <?php $count=1; foreach($all_demandes as $t){ 

                            $prix_total=$t->qte_demandee*$t->prix_vente_produit;
                            $montant_tva= $prix_total*16/100;
                            $montant_total_encaisse=$montant_tva+$prix_total;
                            ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $t->produit_sid; ?></td>
                                <td><?php echo $t->shop_sid; ?></td>
                               
                                <td><?php echo $t->benef_nom; ?></td>
                                <td><?php echo $t->date_demandee; ?></td>

                                <td class="text-center"><?php echo $t->qte_demandee; ?></td>
                                <td class="text-center">$<?php echo $t->prix_vente_produit; ?></td>

                                <td class="text-center">$<?php echo (!empty($t->prix_total))? $t->prix_total: $prix_total; ?>.00</td> 
                                <td class="text-center">$<?php echo (!empty($t->montant_tva))? $t->montant_tva: $montant_tva; ?>.00</td> 
                                <td class="text-right">$<?php echo (!empty($t->montant_total_encaisse))? $t->montant_total_encaisse:$montant_total_encaisse; ?>.00</td>

                                <!--
                                <td class="text-center"><?php echo $t->prix_total; ?>.00</td> 
                                <td class="text-center"><?php echo $t->montant_tva; ?>.00</td> 
                               
                                <td class="text-right"><?php echo $t->montant_total_encaisse; ?>.00</td>

                                -->
                                
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
