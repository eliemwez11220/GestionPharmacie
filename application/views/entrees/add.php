<?php
$current_day = date('Y-m-d');
//Date minimale
//$date_max_naissance = new DateTime($date_jour);
//$date_max_naissance->modify('-18 year');
$date_max_naissance = ((new DateTime())->modify('-18 year'))->format('Y-m-d');
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Approvisionnement produit</h3>
            </div>
            <?php echo form_open('entree/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    
                    <div class="col-md-6">
                        <label for="fss_sid" class="control-label">Fournisseur</label>

                        <div class="form-group">
                            <input list="brow_fss" name="fss_sid"
                                   class="form-control text-capitalize"
                                   id="fss_sid" type="text" placeholder="Fournisseur ..."
                                   value="<?= set_value('fss_sid'); ?>">
                            <datalist id="brow_fss">
                                <option disabled>Selectionnez un fournisseur</option>
                                <?php
                                if (isset($all_fss)) {
                                    foreach ($all_fss as $fss) :?>
                                        <option value=" <?= $fss->fss_id; ?>-<?= ucwords($fss->nom); ?>">
                                            <?= ucwords($fss->nom); ?>
                                        </option>
                                    <?php endforeach;
                                } ?>
                            </datalist>
                            <span class="text-danger small"><?php echo form_error('fss_sid'); ?></span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="intrant_sid" class="control-label">Libelle produit</label>

                        <div class="form-group">
                            <input list="brow_intrant" name="intrant_sid"
                                   class="form-control text-capitalize"
                                   id="intrant_sid" type="text" placeholder="Produit ..."
                                   value="<?= set_value('intrant_sid'); ?>">
                            <datalist id="brow_intrant">
                                <option disabled>Selectionnez un produit</option>
                                <?php
                                if (isset($all_intrants)) {
                                    foreach ($all_intrants as $intrant) :?>
                                        <option value=" <?= $intrant->intrant_id; ?>-<?= ucwords($intrant->libelle); ?>">
                                            <?= ucwords($intrant->libelle); ?>
                                        </option>
                                    <?php endforeach;
                                } ?>
                            </datalist>
                            <span class="text-danger small"><?php echo form_error('intrant_sid'); ?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="qte_entree" class="control-label">Quantite entree</label>
                        <div class="form-group">
                            <input type="number" name="qte_entree" min="1" value="<?php echo $this->input->post('qte_entree'); ?>" class="form-control" id="qte_entree" />
                            <span class="text-danger"><?php echo form_error('qte_entree');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="prix_achat_produit" class="control-label">Prix d'achat du produit en USD</label>
                        <div class="form-group">
                            <input type="number" name="prix_achat_produit" min="1" value="<?php echo $this->input->post('prix_achat_produit'); ?>" class="form-control" id="prix_achat_produit" />
                            <span class="text-danger"><?php echo form_error('prix_achat_produit');?></span>
                        </div>
                    </div> 

                    <div class="col-md-6">
                        <label for="frais_transport" class="control-label">Frais de transport du produit en USD</label>
                        <div class="form-group">
                            <input type="number" name="frais_transport" min="1" value="<?php echo $this->input->post('frais_transport'); ?>" class="form-control" id="frais_transport" />
                            <span class="text-danger"><?php echo form_error('frais_transport');?></span>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="date_entree" class="control-label">Date entree</label>
                        <div class="form-group">
                            <input type="date" name="date_entree" max="<?= $current_day;?>"
                                   value="<?php echo $this->input->post('date_entree'); ?>" class="form-control" id="date_entree" />
                            <span class="text-danger"><?php echo form_error('date_entree');?></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Enregistrer approvisionnement
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>