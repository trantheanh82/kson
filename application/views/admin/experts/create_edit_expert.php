<?php defined('BASEPATH') OR exit('No direct script access allowed');

	$this->load->view('admin/elements/section_header_view');
	echo content_open($page_name,$this);

	if (!empty($item->id)) {
			$type = 'edit';
	} else {
			$type = 'create';
	}

	$checked = "checked";

	if (isset($item->active)) {
			if ($item->active == 'N') {
					$checked = "";
			}
	}

 	echo form_open('admin/experts/submit/'.$type,array('role'=>'form','class'=>'form-horizontal','method'=>'post','id'=>'main_form_submit'));

	if(isset($item->id)){
		echo form_hidden('id',$item->id);
	}
	echo form_hidden('refere_url', base_url(uri_string()));

?>
	<div class='box-body'>
		<!-- ./col left -->
		<div class='col-sm-9 border-right-3d'>
			<div class='form-group'>
				<label for="inputEmail3" class="control-label"><?=lang("Name")?></label>
					<!--<input type="input" name='title' class="form-control make_slug" id="title" placeholder="<?=lang("Title")?>">-->
					<?=form_input('name',value(isset($item->name)?$item->name:""),array('id'=>'name','class'=>'make_slug form-control editor cke_editable cke_editable_inline cke_contents_ltr cke_show_borders','placeholder'=>lang("Name")))?>
					<?=form_hidden('slug',value(isset($item->slug)?$item->slug:""));?>
			</div>

			<div class='form-group'>
				<label for="inputEmail3" class="control-label"><?=lang("Email")?></label>
					<?=form_input('email',value(isset($item->email)?$item->email:""),array('id'=>'email','class'=>'make_slug form-control editor cke_editable cke_editable_inline cke_contents_ltr cke_show_borders','placeholder'=>lang("Email")))?>
			</div>

			<div class='form-group'>
				<label for="inputEmail3" class="control-label"><?=lang("Phone")?></label>
					<!--<input type="input" name='title' class="form-control make_slug" id="title" placeholder="<?=lang("Title")?>">-->
					<?=form_input('phone',value(isset($item->phone)?$item->phone:""),array('id'=>'phone','class'=>'make_slug form-control editor cke_editable cke_editable_inline cke_contents_ltr cke_show_borders','placeholder'=>lang("Phone")))?>
			</div>

			<?php
						echo language_tabs($langs, $current_lang['slug']);
            foreach ($langs as $lang):
							if(isset($item->content[$lang['slug']]->id)){
								echo form_hidden('relation[translation]['.$lang["slug"].'][id]',$item->content[$lang['slug']]->id);
							}
        ?>
						<div class="tab-pane<?=$lang['slug']==$current_lang['slug']?" active":""?>" id="<?=$lang['slug']?>">

            <div class='form-group'>
              <label for="inputEmail3" class="control-label"><?=lang("Position").' '.$lang['name']?></label>
                <!--<input type="input" name='title' class="form-control make_slug" id="title" placeholder="<?=lang("Title")?>">-->
                <?=form_input('relation[translation]['.$lang['slug'].'][content][position]',value(isset($item->content[$lang['slug']]->position)?$item->content[$lang['slug']]->position:""),array('id'=>$lang['slug'].'_position','class'=>'form-control editor cke_editable cke_editable_inline cke_contents_ltr cke_show_borders','placeholder'=>lang("Title")))?>
						</div>

						<div class='form-group'>
							<label for="inputEmail3" class="control-label"><?=lang("Description".' '.$lang['name'])?></label>
							<div class="">
								<?php echo form_textarea('relation[translation]['.$lang['slug'].'][content][description]',value(isset($item->content[$lang['slug']]->description)?$item->content[$lang['slug']]->description:""),array('class'=>'form-control basic-editor','id'=>$lang['slug'].'_description','contenteditable'=>true));?>
				            </div>
						</div>
						<div class='form-group'>
							<label for="inputEmail3" class="control-label"><?=lang("Head title").' '.$lang['name']?></label>
							<div class="">
								<?php echo form_textarea('relation[translation]['.$lang['slug'].'][content][head_title]',value(isset($item->content[$lang['slug']]->head_title)?$item->content[$lang['slug']]->head_title:""),array('class'=>'form-control basic-editor','id'=>$lang['slug'].'_head_title','contenteditable'=>true));?>
				            </div>
						</div>
						<div class='form-group'>
							<label for="inputEmail3" class="control-label"><?=lang("Content").' '.$lang['name']?> | <?=lang('Experience')?></label>
							<div class="">
								<?php echo form_textarea('relation[translation]['.$lang['slug'].'][content][content]',value(isset($item->content[$lang['slug']]->content)?$item->content[$lang['slug']]->content:""),array('class'=>'form-control basic-editor','id'=>$lang['slug'].'_content','contenteditable'=>true));?>
				            </div>
						</div>
						<!-- Meta tags -->
            <div class="">
            	<h3><?=lang('Meta Tags')?></h3>
            </div>

            <div class='form-group'>
							<label for="input" class="control-label"><?=lang("Meta title").' '.$lang['name']?></label>
							<div class="">
				                   <!-- <input type="input" name='slug' class="form-control slug" id="slug" placeholder="<?=lang("Slug")?>">-->
				                    <?=form_input('relation[translation]['.$lang['slug'].'][content][meta_title]',value(isset($item->content[$lang['slug']]->meta_title)?$item->content[$lang['slug']]->meta_title:""),array('class'=>'form-control','id'=>'meta_title','placeholder'=>lang("meta title")))?>
				            </div>
						</div>

						<div class='form-group'>
							<label for="inputEmail3" class="control-label"><?=lang("Meta description").' '.$lang['name']?></label>
							<div class="">
								<?php echo form_textarea('relation[translation]['.$lang['slug'].'][content][meta_description]',value(isset($item->content[$lang['slug']]->meta_description)?$item->content[$lang['slug']]->meta_description:""),array('class'=>'form-control','id'=>'meta_description'));?>
				            </div>
						</div>
						<!-- Meta tags -->

		</div>
		<?php
				endforeach;
				//end foreach languages
		echo language_tabs_close();?>
	</div>
		<!-- ./col right -->
		<div class='col-sm-3'>
			<div class="form-group">
				<label for="inputEmail3" class="control-label"><?=lang("Status")?></label>
				<div class="checkbox">
					<label>
						<?=form_hidden('active','N')?>
						<?=form_checkbox('active','Y',(isset($item->active)?($item->active=='N'?false:true):true),array('class'=>'minimal'))?>
					</label>
				</div>
			</div>
			<hr />

			<div class='form-group'>
				<label for="inputEmail3" class="control-label"><?=lang("Image Expert")?> (524x614)</label>

					<div class=''>
						<?php //$this->load->view("admin/elements/modules/upload_view",array('file'=>"image",'id'=>"img",'button_name'=>lang("Upload Image"),"field_id"=>"image",'value'=>"",'multiple'=>false,'type_file'=>'articles','basic'=>true));?>
						<?php
						$this->load->view("admin/elements/modules/upload_image_view",array('type'=>'image','field_id'=>'image','id'=>'image','value'=>isset($item->image)?$item->image:"",'multiple'=>false,'path'=>'/img','button_name'=>'Upload Image','max_width'=>'300px'));
				?>
					</div>
			</div>
			<hr />

			<div class='form-group'>
				<label  for="" class='control-label'><?=lang("Skills")?></label>
				<br  /><br  />
				<div class="input">
					<span><?=lang('Architecture')?> (%)</span><br />
					<input name="architecture_skill" type="text" value="<?=(!empty($item->architecture_skill)?$item->architecture_skill:"")?>" class="slider form-control" data-slider-min="0" data-slider-max="100"
                     data-slider-step="1" data-slider-value="<?=(!empty($item->architecture_skill)?$item->architecture_skill:"")?>" data-slider-orientation="horizontal"
                     data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
				</div>
				<div class="input">
					<span><?=lang('Construction')?>  (%)</span><br />
					<input name="construction_skill" type="text" value="<?=(!empty($item->construction_skill)?$item->construction_skill:"")?>" class="slider form-control" data-slider-min="0" data-slider-max="100"
                     data-slider-step="1" data-slider-value="<?=(!empty($item->architecture_skill)?$item->construction_skill:"")?>" data-slider-orientation="horizontal"
                     data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
				</div>
				<div class="input">
					<span><?=lang('Interior')?> (%)</span><br />
					<input name="interior_skill" type="text" value="<?=(!empty($item->interior_skill)?$item->interior_skill:"")?>" class="slider form-control" data-slider-min="0" data-slider-max="100"
                     data-slider-step="1" data-slider-value="<?=(!empty($item->interior_skill)?$item->interior_skill:"")?>" data-slider-orientation="horizontal"
                     data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green">
					</div>
			</div>
			<hr />
            <div class="form-group">
  			      <label for="social" class="control-label"><?=lang("Social")?>:</label>
  	          <div class="input">
  	            Facebook: <?=form_input('social[facebook]',value(isset($item->social->facebook)?$item->social->facebook:""),array('class'=>'form-control','width'=>'50'))?>
  	          </div>
              <div class="input">
  	            Twitter: <?=form_input('social[twitter]',value(isset($item->social->twitter)?$item->social->twitter:""),array('class'=>'form-control','width'=>'50'))?>
  	          </div>
              <div class="input">
  	            Instagram: <?=form_input('social[instagram]',value(isset($item->social->instagram)?$item->social->instagram:""),array('class'=>'form-control','width'=>'50'))?>
  	          </div>
              <div class="input">
  	            LinkedIn: <?=form_input('social[linkedin]',value(isset($item->social->linkedin)?$item->social->linkedin:""),array('class'=>'form-control','width'=>'50'))?>
  	          </div>
  	        </div>
  	        <hr />

	        <div class="form-group">
			           <label for="sort" class="control-label"><?=lang("Order")?></label>
	          <div class="checkbox">
	            <?=form_input('sort',value(isset($item->sort)?$item->sort:"10"),array('class'=>'form-control','width'=>'50'))?>
	          </div>
	        </div>
	        <hr />



		</div>

	</div>
<?php
	/*./end-box
		*/
	$this->load->view('admin/elements/ui/box_content/box_footer',array('command_tools'=>array('save','cancel')));
?>
</form>

<?=content_close()?>
<script>
$(document).ready(function(){
	$('.slider').each(function(e){
		e = slider({
			formatter: function(value) {
				$(this).val(value);
				console.log(value);
				return 'Current value: ' + value;
			}
		});
	});
});
</script>
