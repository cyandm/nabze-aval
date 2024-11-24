<?php
add_action('acf/include_fields', 'cyn_register_acf');

function cyn_register_acf()
{
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}
	cyn_acf_register_home_page();
	cyn_acf_register_video();
	cyn_acf_register_faq();
	cyn_acf_register_about_us();
	cyn_acf_register_department();
}

function cyn_acf_register_home_page()
{

	$hero = [
		cyn_acf_add_tab('هیرو'),
		cyn_acf_add_image('hero_banner', 'بنر اصلی', 25),
		cyn_acf_add_text('hero_title', 'عنوان', 0, 25),
		cyn_acf_add_text('hero_subtitle', 'عنوان فرعی', 0, 25),
		cyn_acf_add_text('hero_desc', 'توضیحات', 0, 25),

		cyn_acf_add_text('hero_card_title_1', 'عنوان کارت 1', 0, 50),
		cyn_acf_add_text('hero_card_url_1', 'لینک کارت 1', 0, 50),
		cyn_acf_add_text('hero_card_title_2', 'عنوان کارت 2', 0, 33),
		cyn_acf_add_text('hero_card_sub_2', 'عنوان فرعی کارت 2', 0, 33),
		cyn_acf_add_text('hero_card_url_2', 'لینک کارت 2', 0, 33),
	];

	$department = [
		cyn_acf_add_tab('دپارتمان ها'),
		cyn_acf_add_post_object('departments', 'انتخاب دپارتمان ها', 'department', '', 1),
	];

	$videos = [
		cyn_acf_add_tab('ویدئوها'),
		cyn_acf_add_text('video_title', 'عنوان بخش ویدئوها'),
		cyn_acf_add_post_object('videos', 'انتخاب ویدئوها', 'video', '', 1),
	];

	$blogs = [
		cyn_acf_add_tab('بلاگ ها'),
		cyn_acf_add_post_object('posts', 'انتخاب بلاگ ها', 'post', '', 1),
	];

	$faq = [
		cyn_acf_add_tab('سوالات متداول '),
		cyn_acf_add_tax('faq-cat', 'انتخاب دسته بندی سوالات', 'faq-cat'),

	];

	$cta = [
		cyn_acf_add_tab('بنر'),
		$advantage[] = cyn_acf_add_image("service_banner", "بنر", 50),
		$advantage[] = cyn_acf_add_text('service_banner_url', 'لینک بنر', 0, 50),

	];


	$advantage = [
		cyn_acf_add_tab('مزایا'),
	];

	for ($i = 1; $i <= 7; $i++) {
		$advantage[] = cyn_acf_add_image("advantage_svg_$i", "عکس $i", 50);
		$advantage[] = cyn_acf_add_text("advantage_title_$i", "عنوان $i", 0, 50);
	}
	;

	$step = [
		cyn_acf_add_tab('مراحل'),
	];

	for ($i = 1; $i <= 4; $i++) {
		$step[] = cyn_acf_add_image("step_svg_$i", "عکس $i", 25);
		$step[] = cyn_acf_add_text("step_title_$i", "عنوان $i", 0, 35);
		$step[] = cyn_acf_add_text("step_desc_$i", "توضیحات $i", 0, 35);
	}
	;

	$fields = array_merge($hero, $department, $videos, $blogs, $faq, $cta, $advantage, $step);

	$location = [
		[
			[
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/homepage.php'
			]
		]
	];

	cyn_register_acf_group('تنظیمات صفحه اصلی', $fields, $location);
}

function cyn_acf_register_video()
{
	$fields = [
		cyn_acf_add_file('video_file', 'فایل ویدئو', '50'),
	];
	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'video'
			]
		]
	];
	cyn_register_acf_group('تنظیمات ', $fields, $location);
}

function cyn_acf_register_faq()
{

	$fields = [

		cyn_acf_add_boolean('show_in_front', 'عدم نمایش در صفحه اصلی')

	];


	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'faq'
			]
		]
	];

	cyn_register_acf_group('تنظیم نمایش در صفحه اصلی', $fields, $location);
}

function cyn_acf_register_about_us()
{

	$fields = [

		cyn_acf_add_tab('هیرو'),
		cyn_acf_add_image('description_img', 'عکس معرفی', 33),
		cyn_acf_add_text('description_title', 'سربرگ معرفی', 0, 33),
		cyn_acf_add_wysiwyg('description_txt', 'متن معرفی', 33),

		cyn_acf_add_tab('توضیحات'),
		cyn_acf_add_image('crow_img', 'عکس توضیحات',33),
		cyn_acf_add_text('crow_title', 'سربرگ توضیحات', 0, 33),
		cyn_acf_add_wysiwyg('crow_txt', 'متن توضیحات',33),

	];


	$location = [
		[
			[
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/about.php'
			]
		]
	];

	cyn_register_acf_group('تنظیمات', $fields, $location);
}

function cyn_acf_register_department()
{

	$section_2_imgs = [];

	for ($i = 1; $i <= 4; $i++) {

		array_push($section_2_imgs, cyn_acf_add_image("section_2_img_$i", __("عکس $i", "nabz-aval")));
	}

	$fields = [

		cyn_acf_add_tab('هیرو'),
		cyn_acf_add_image('hero_img', 'عکس هیرو',33),
		cyn_acf_add_text('hero_title', 'عنوان هیرو', 0, 33),
		cyn_acf_add_text('hero_sub_title', 'متن فرعی', 0, 33),
		cyn_acf_add_text('hero_btn_txt', 'متن دکمه', 0, 50),
		cyn_acf_add_text('hero_btn_url', 'لینک دکمه', 0, 50),

		cyn_acf_add_tab('بخش اول'),
		cyn_acf_add_image('section_1_img', 'عکس بخش اول',33),
		cyn_acf_add_text('section_1_title', 'عنوان بخش اول', 0, 33),
		cyn_acf_add_wysiwyg('section_1_txt', 'متن بخش اول',33),

		cyn_acf_add_image('section_2_img', 'عکس بخش دوم',33),
		cyn_acf_add_text('section_2_title', 'عنوان بخش دوم', 0, 33),
		cyn_acf_add_wysiwyg('section_2_txt', 'متن بخش دوم', 33),

		cyn_acf_add_tab('بنر'),
		cyn_acf_add_image("department_banner", "بنر"),
		cyn_acf_add_text('department_banner_url', 'لینک بنر', 0, 50),

		cyn_acf_add_tab('بخش دوم'),
		cyn_acf_add_group('slideshow_group', 'عکس', $section_2_imgs),
		cyn_acf_add_text('section_3_title', 'عنوان بخش دوم', 0, 50),
		cyn_acf_add_wysiwyg('section_3_txt', 'متن بخش دوم', 50),

		cyn_acf_add_tab('بخش سوم'),
		cyn_acf_add_image('section_4_img', 'عکس بخش سوم',33),
		cyn_acf_add_text('section_4_title', 'عنوان بخش سوم', 0, 33),
		cyn_acf_add_wysiwyg('section_4_txt', 'متن بخش سوم', 33),

		cyn_acf_add_tab('سوالات متداول'),
		cyn_acf_add_post_object('faq-group', 'سوالات متداول', 'faq', '', 1),



	];


	$location = [
		[
			[
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'department'
			]
		]
	];

	cyn_register_acf_group('تنظیمات', $fields, $location);
}
