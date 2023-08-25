<?php if ($filter == 'yes') {
	$filter_categories    = $this_object->getFilterCategories($params);
	$filter_holder_styles = $this_object->getFilterHolderStyles($params);
	$filter_styles        = $this_object->getFilterStyles($params);
?>
	<div class="eltdf-cl-filter-holder" <?php academist_elated_inline_style($filter_holder_styles); ?>>
		<div class="eltdf-plf-inner">
			<?php
			if (is_array($filter_categories) && count($filter_categories)) { ?>
				<ul <?php academist_elated_inline_style($filter_styles); ?>>
					<li class="eltdf-cl-filter" data-filter="">
						<span class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="15.601" viewBox="0 0 16.002 15.601">
								<g id="Group_117" data-name="Group 117" transform="translate(-310 -851.699)">
									<path id="Path_84" data-name="Path 84" d="M3,3.474C1.533,3.644.135,3.115.011,2.042S.859.2,2.325.032s2.872.32,3,1.4S4.465,3.307,3,3.474" transform="translate(310 860.242) rotate(-90)" fill="#7f3e98" />
									<path id="Path_85" data-name="Path 85" d="M4,3.662C2.534,3.829.13,3.111.011,2.031S.859.2,2.321.027,6.174.508,6.294,1.579,5.465,3.488,4,3.662" transform="translate(313.956 858.005) rotate(-90)" fill="#7f3e98" />
									<path id="Path_86" data-name="Path 86" d="M4,3.66C2.537,3.831.135,3.113.011,2.033S.859.2,2.324.026,6.173.5,6.3,1.583,5.464,3.492,4,3.66" transform="translate(318.679 858.941) rotate(-90)" fill="#7f3e98" />
									<path id="Path_87" data-name="Path 87" d="M3.037.044C1.574-.157.162.342.016,1.415S.827,3.27,2.284,3.472s2.877-.258,3.025-1.329S4.5.244,3.037.044" transform="translate(322.484 861.515) rotate(-90)" fill="#7f3e98" />
									<path id="Path_88" data-name="Path 88" d="M7.889,9.058a3.113,3.113,0,0,0,.124-4.292C6.392,3.555,6.234,3.276,5.949,2.577A3.336,3.336,0,0,0,3.132,0,2.4,2.4,0,0,0,.839,1.729C-.227,4.551-.275,9.247.684,11.493a2.149,2.149,0,0,0,2.2,1.366c1.634-.268,2.089-1.642,2.838-2.331A13.01,13.01,0,0,1,7.889,9.058" transform="translate(310.617 867.301) rotate(-90)" fill="#7f3e98" />
								</g>
							</svg>
						</span>
						<span><?php esc_html_e('All Courses', 'academist-core') ?></span>
					</li>
					<?php foreach ($filter_categories as $cat) { ?>
						<li class="eltdf-cl-filter" data-filter=".course-category-<?php echo esc_attr($cat->slug); ?>">
							<span class="icon">
								<?= get__term_meta($cat->term_id, 'svg_icon') ?>
							</span>
							<span class="text"><?php echo esc_html($cat->name); ?></span>
						</li>
					<?php } ?>
				</ul>
			<?php } ?>
		</div>
	</div>
<?php } ?>