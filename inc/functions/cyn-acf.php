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
}

function cyn_acf_register_home_page()
{

	$hero = [
		cyn_acf_add_tab('هیرو'),
		cyn_acf_add_image('hero_banner', 'بنر اصلی', 100),
		cyn_acf_add_text('hero_title', 'عنوان', 0, 33),
		cyn_acf_add_text('hero_subtitle', 'عنوان فرعی', 0, 33),
		cyn_acf_add_text('hero_desc', 'توضیحات', 0, 33),

		cyn_acf_add_text('hero_card_title_1', 'عنوان کارت 1', 0, 50),
		cyn_acf_add_text('hero_card_url_1', 'لینک کارت 1', 0, 50),
		cyn_acf_add_text('hero_card_title_2', 'عنوان کارت 2', 0, 50),
		cyn_acf_add_text('hero_card_sub_2', 'عنوان فرعی کارت 2', 0, 50),
		cyn_acf_add_text('hero_card_url_2', 'لینک کارت 2', 0, 50),
	];

	$services = [
		cyn_acf_add_tab('خدمات'),
		cyn_acf_add_post_object('services', 'انتخاب خدمات', 'service', '', 1),
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

	$advantage = [
		cyn_acf_add_tab('مزایا'),
	];
	
	for ($i = 1; $i <= 7; $i++) {
		$advantage[] = cyn_acf_add_text("advantage_title_$i", "عنوان $i", 0, 30);
	};

	$step = [
		cyn_acf_add_tab('مراحل'),
	];
	
	for ($i = 1; $i <= 4; $i++) {
		$step[] = cyn_acf_add_image("step_svg_$i", "عکس $i", 0, 50);
		$step[] = cyn_acf_add_text("step_title_$i", "عنوان $i", 0, 50);
		$step[] = cyn_acf_add_text("step_desc_$i", "توضیحات $i", 0, 50);
	};

	$fields = array_merge($hero, $services, $videos, $blogs, $faq, $advantage ,$step);

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


