<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing des  approvisionnements</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('entree/add'); ?>" class="btn btn-success btn-sm">Ajouter une nouvelle entree</a>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-condensed">
                        <tr>
                            <th>#</th> 
                            <th>FourniID</th>
                            <th>ProduitID</th>
                            <th>Date entrée</th>
                           <th class="text-center">Qté entrée</th>
                            <th class="text-center">Prix Achat.</th>
                          
                            <th class="text-center">Frais transport</th>
                            
                              <th class="text-center">Prix total</th>
                            <th class="text-center">Montant TVA</th>
                            <th class="text-right">Total Dépensé</th>

                        </tr>
                        <?php $count=1; foreach($all_entrees as $t){ 


                        $prix_total=$t->qte_entree*$t->prix_achat_produit;
                            $montant_tva= $prix_total*16/100;
                            $montant_total_depense=$montant_tva+$prix_total+$t->frais_transport;
                            ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $t->produit_sid; ?></td>
                                <td><?php echo $t->fss_sid; ?></td>
                                <td><?php echo $t->date_entree; ?></td>

                                <td class="text-center"><?php echo $t->qte_entree; ?></td>
                                <td class="text-center">$<?php echo $t->prix_achat_produit; ?></td>
                                <td class="text-center">$<?php echo $t->frais_transport; ?></td>

                                <td class="text-center">$<?php echo (!empty($t->prix_total))? $t->prix_total: $prix_total; ?>.00</td> 
                                <td class="text-center">$<?php echo (!empty($t->montant_tva))? $t->montant_tva: $montant_tva; ?>.00</td> 
                                <td class="text-right">$<?php echo (!empty($t->montant_total_depense))? $t->montant_total_depense:$montant_total_depense; ?>.00</td>

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
