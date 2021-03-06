<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ordonance Edit</h3>
            </div>
			<?php echo form_open('ordonance/edit/'.$ordonance['ordon_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="ordonance_numero" class="control-label">Ordonance Numero</label>
						<div class="form-group">
							<input type="text" name="ordonance_numero" value="<?php echo ($this->input->post('ordonance_numero') ? $this->input->post('ordonance_numero') : $ordonance['ordonance_numero']); ?>" class="form-control" id="ordonance_numero" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ordonance_date" class="control-label">Ordonance Date</label>
						<div class="form-group">
							<input type="text" name="ordonance_date" value="<?php echo ($this->input->post('ordonance_date') ? $this->input->post('ordonance_date') : $ordonance['ordonance_date']); ?>" class="has-datepicker form-control" id="ordonance_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_medecin" class="control-label">Nom Medecin</label>
						<div class="form-group">
							<input type="text" name="nom_medecin" value="<?php echo ($this->input->post('nom_medecin') ? $this->input->post('nom_medecin') : $ordonance['nom_medecin']); ?>" class="form-control" id="nom_medecin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="spec_medecin" class="control-label">Specialite Medecin</label>
						<div class="form-group">
							<input type="text" name="spec_medecin" value="<?php echo ($this->input->post('spec_medecin') ? $this->input->post('spec_medecin') : $ordonance['spec_medecin']); ?>" class="form-control" id="spec_medecin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="malade_noms" class="control-label"><span class="text-danger">*</span>Malade Noms</label>
						<div class="form-group">
							<input type="text" name="malade_noms" value="<?php echo ($this->input->post('malade_noms') ? $this->input->post('malade_noms') : $malade['malade_noms']); ?>" class="form-control" id="malade_noms" />
							<span class="text-danger"><?php echo form_error('malade_noms');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="malade_age" class="control-label"><span class="text-danger">*</span>Malade Age</label>
						<div class="form-group">
							<input type="text" name="malade_age" value="<?php echo ($this->input->post('malade_age') ? $this->input->post('malade_age') : $malade['malade_age']); ?>" class="form-control" id="malade_age" />
							<span class="text-danger"><?php echo form_error('malade_age');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="malade_telephone" class="control-label"><span class="text-danger">*</span>Malade Telephone</label>
						<div class="form-group">
							<input type="text" name="malade_telephone" value="<?php echo ($this->input->post('malade_telephone') ? $this->input->post('malade_telephone') : $malade['malade_telephone']); ?>" class="form-control" id="malade_telephone" />
							<span class="text-danger"><?php echo form_error('malade_telephone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ordonance_details" class="control-label">Ordonance Details</label>
						<div class="form-group">
							<textarea name="ordonance_details" class="form-control" id="ordonance_details"><?php echo ($this->input->post('ordonance_details') ? $this->input->post('ordonance_details') : $ordonance['ordonance_details']); ?></textarea>
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