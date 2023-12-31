<div class="eltdf-instructor-single-info-holder">
	<div class="eltdf-grid-row">
		<div class="eltdf-ts-info-holder eltdf-grid-col-3">
			<?php do_action('location_map') ?>
			<?php academist_lms_get_cpt_single_module_template_part('single/parts/image', 'instructor', '', $params); ?>
			<?php academist_lms_get_cpt_single_module_template_part('single/parts/name', 'instructor', '', $params); ?>
			<?php academist_lms_get_cpt_single_module_template_part('single/parts/title', 'instructor', '', $params); ?>
			<?php academist_lms_get_cpt_single_module_template_part('single/parts/vita', 'instructor', '', $params); ?>
			<?php academist_lms_get_cpt_single_module_template_part('single/parts/social', 'instructor', '', $params); ?>
			<?php academist_lms_get_cpt_single_module_template_part('single/parts/email', 'instructor', '', $params); ?>
			<?php academist_lms_get_cpt_single_module_template_part('single/parts/resume', 'instructor', '', $params); ?>
			<aside class="eltdf-sidebar">
				<?php dynamic_sidebar('instructor_sidebar') ?>
			</aside>
		</div>
		<div class="eltdf-ts-content-holder eltdf-grid-col-9">
			<?php academist_lms_get_cpt_single_module_template_part('single/parts/tabs', 'instructor', '', $params); ?>
		</div>
	</div>
</div>