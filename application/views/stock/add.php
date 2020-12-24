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
                <h3 class="box-title">Ajout d'une quantité stock produit par point de vente</h3>
                <?php if (isset($error_sortie)) { ?>
                    <div class="alert alert-danger text-center">
                        <span class="h5"><?= $error_sortie; ?></span>
                    </div>
                <?php } elseif (isset($success)) { ?>
                    <div class="alert alert-success text-center">
                        <span class="h5"><?= $success; ?></span>
                    </div>
                <?php } ?>
            </div>
            <?php echo form_open('shopvente/addStockShop'); ?>
            <div class="box-body">
                <div class="row clearfix">
                
                    
                    <div class="col-md-6">
                        <label for="intrant_sid" class="control-label">Libelle Produit</label>

                        <div class="form-group">
                            <input list="brow_intrant" name="intrant_sid"
                                   class="form-control text-capitalize"
                                   id="intrant_sid" type="text" placeholder="Produit..."
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
                        <label for="qte_stock_initiale" class="control-label">Quantité stock initial</label>
                        <div class="form-group">
                            <input type="number" name="qte_stock_initiale" min="1" value="<?php echo $this->input->post('qte_stock_initiale'); ?>"
                                   class="form-control" id="qte_stock_initiale" />
                            <span class="text-danger"><?php echo form_error('qte_stock_initiale');?></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="shop_sid" class="control-label">Point de vente rattaché </label>

                        <div class="form-group">
                            <input list="brow_shop" name="shop_sid"
                                   class="form-control text-capitalize"
                                   id="shop_sid" type="text" placeholder="Point vente..."
                                   value="<?= set_value('shop_sid'); ?>">
                            <datalist id="brow_shop">
                                <option disabled>Selectionnez un point de vente</option>
                                <?php
                                if (isset($all_shops)) {
                                    foreach ($all_shops as $intrant) :?>
                                        <option value=" <?= $intrant->shop_id; ?>-<?= ucwords($intrant->shop_nom); ?>">
                                            <?= ucwords($intrant->shop_nom); ?>
                                        </option>
                                    <?php endforeach;
                                } ?>
                            </datalist>
                            <span class="text-danger small"><?php echo form_error('shop_sid'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Enregistrer stock initial
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>