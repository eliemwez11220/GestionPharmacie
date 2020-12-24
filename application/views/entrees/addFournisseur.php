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
                <h3 class="box-title">Fournisseur produit</h3>
            </div>
            <?php echo form_open('entree/addFournisseur'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="fss_nom" class="control-label"><span class="text-danger">*</span>Nom du fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_nom" value="<?php echo $this->input->post('fss_nom'); ?>" class="form-control" id="fss_nom" />
                            <span class="text-danger"><?php echo form_error('fss_nom');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fss_postnom" class="control-label"><span class="text-danger"></span>Postnom du fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_postnom" value="<?php echo $this->input->post('fss_postnom'); ?>" class="form-control" id="fss_postnom" />
                            <span class="text-danger"><?php echo form_error('fss_postnom');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fss_prenom" class="control-label"><span class="text-danger"></span>Prenom du fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_prenom" value="<?php echo $this->input->post('fss_prenom'); ?>" class="form-control" id="fss_prenom" />
                            <span class="text-danger"><?php echo form_error('fss_prenom');?></span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="fss_phone" class="control-label"><span class="text-danger">*</span>Numero telephone fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_phone" value="<?php echo $this->input->post('fss_phone'); ?>" class="form-control" id="fss_phone" />
                            <span class="text-danger"><?php echo form_error('fss_phone');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fss_type" class="control-label"><span class="text-danger">*</span>Type fournisseur</label>
                        <div class="form-group">
                            <select name="fss_type" value="<?php echo $this->input->post('fss_type'); ?>" class="form-control" id="fss_type" >
                                <option selected disabled>Selectionnez un type</option>
                                <option>Entreprise</option>
                                <option>Individu</option>
                            </select>
                           
                            <span class="text-danger"><?php echo form_error('fss_type');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fss_adresse" class="control-label"><span class="text-danger">*</span>Adresse du fournisseur</label>
                        <div class="form-group">
                            <input type="text" name="fss_adresse" value="<?php echo $this->input->post('fss_adresse'); ?>" class="form-control" id="fss_adresse" />
                            <span class="text-danger"><?php echo form_error('fss_adresse');?></span>
                        </div>
                    </div>

                   

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Enregistrer Fournisseur
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>