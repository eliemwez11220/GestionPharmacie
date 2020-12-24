<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Prescription Edit</h3>
            </div>
			<?php echo form_open('prescription/edit/'.$prescription['prescrip_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="numero_ordonance" class="control-label">Ordonance</label>
						<div class="form-group">
							<select name="numero_ordonance" class="form-control">
								<option value="">select ordonance</option>
								<?php 
								foreach($all_ordonances as $ordonance)
								{
									$selected = ($ordonance['ordon_id'] == $prescription['numero_ordonance']) ? ' selected="selected"' : "";

									echo '<option value="'.$ordonance['ordon_id'].'" '.$selected.'>'.$ordonance['ordonance_numero'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="produit_prescrit" class="control-label">Tb Cons Medicament</label>
						<div class="form-group">
							<select name="produit_prescrit" class="form-control">
								<option value="">select tb_cons_medicament</option>
								<?php 
								foreach($all_tb_cons_medicaments as $tb_cons_medicament)
								{
									$selected = ($tb_cons_medicament['product_id'] == $prescription['produit_prescrit']) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_cons_medicament['product_id'].'" '.$selected.'>'.$tb_cons_medicament['product_title'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="posologie" class="control-label"><span class="text-danger">*</span>Posologie</label>
						<div class="form-group">
							<input type="text" name="posologie" value="<?php echo ($this->input->post('posologie') ? $this->input->post('posologie') : $prescription['posologie']); ?>" class="form-control" id="posologie" />
							<span class="text-danger"><?php echo form_error('posologie');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mode_emploi" class="control-label"><span class="text-danger">*</span>Mode Emploi</label>
						<div class="form-group">
							<input type="text" name="mode_emploi" value="<?php echo ($this->input->post('mode_emploi') ? $this->input->post('mode_emploi') : $prescription['mode_emploi']); ?>" class="form-control" id="mode_emploi" />
							<span class="text-danger"><?php echo form_error('mode_emploi');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="quantite_total" class="control-label"><span class="text-danger">*</span>Quantite Total</label>
						<div class="form-group">
							<input type="text" name="quantite_total" value="<?php echo ($this->input->post('quantite_total') ? $this->input->post('quantite_total') : $prescription['quantite_total']); ?>" class="form-control" id="quantite_total" />
							<span class="text-danger"><?php echo form_error('quantite_total');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>