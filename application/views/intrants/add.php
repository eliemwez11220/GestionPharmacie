<?php
$date_jour = date('Y-m-d');
//Date minimale
//$date_max_naissance = new DateTime($date_jour);
//$date_max_naissance->modify('-18 year');
$date_max_naissance = ((new DateTime())->modify('-18 year'))->format('Y-m-d');
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Creation d'un nouveau carburant</h3>
            </div>
            <?php echo form_open('intrant/add'); ?>
            <div class="box-body">
              <div class="row clearfix">
          <div class="col-md-6">
            <label for="libelle" class="control-label"><span class="text-danger">*</span>Libelle ou nom carburant</label>
            <div class="form-group">
              <input type="text" name="libelle" value="<?php echo $this->input->post('libelle'); ?>" class="form-control" id="libelle" />
              <span class="text-danger"><?php echo form_error('libelle');?></span>
            </div>
          </div>
          <div class="col-md-6">
            <label for="qte_stock" class="control-label">Quantite Stock</label>
            <div class="form-group">
              <input type="number" name="qte_stock" min="1" value="<?php echo $this->input->post('qte_stock'); ?>" class="form-control" id="qte_stock" />
              <span class="text-danger"><?php echo form_error('qte_stock');?></span>
            </div>
          </div>
          <div class="col-md-6">
            <label for="prix_unitaire" class="control-label">Prix unitaire</label>
            <div class="form-group">
              <input type="number" step="0.00" name="prix_unitaire" min="1" value="<?php echo $this->input->post('prix_unitaire'); ?>" class="form-control" id="prix_unitaire" />
              <span class="text-danger"><?php echo form_error('prix_unitaire');?></span>
            </div>
          </div>
        </div>
      </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i> Enregistrer carburant
              </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>









