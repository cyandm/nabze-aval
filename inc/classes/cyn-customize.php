<?php

if (!class_exists('cyn_customize')) {
	class cyn_customize
	{
		function __construct()
		{
			add_action('customize_register', [$this, 'cyn_basic_settings']);
		}

		public function cyn_basic_settings($wp_customize)
		{

			$this->cyn_register_panel_general($wp_customize);
			$this->cyn_register_app_bar($wp_customize);
			$this->cyn_register_panel_custom_code($wp_customize);

			// $this->cyn_register_panel_demo_2( $wp_customize );
		}

		/**
		 * Summary of cyn_add_control
		 * @param mixed $wp_customize
		 * @param string $section name of section that this control related to
		 * @param string $type 'text' | 'textarea' | 'tel' | 'image' | 'file'
		 * @param string $id name that saved on wp_option table on database
		 * @param string $label 
		 * @param string $description
		 * @return void
		 */
		private function cyn_add_control($wp_customize, $section, $type, $id, $label, $description = '')
		{
			$wp_customize->add_setting(
				$id,
				['type' => 'option']
			);


			if ($type == "file") {
				$wp_customize->add_control(
					new WP_Customize_Upload_Control(
						$wp_customize,
						$id,
						[
							'label' => $label,
							'section' => $section,
							'settings' => $id,
							'description' => $description,
						]
					)
				);
			}

			if ($type != 'file') {
				$wp_customize->add_control(
					$id,
					[
						'label' => $label,
						'section' => $section,
						'settings' => $id,
						'type' => $type,
						'description' => $description,
					]
				);
			}
		}

		private function cyn_register_panel_general($wp_customize)
		{

			$wp_customize->add_panel(
				'general',
				[
					'title' => 'تنظیمات تم - عمومی',
					'priority' => 1
				]
			);


			$wp_customize->add_section(
				'special_number',
				[
					'title' => 'خط ویژه',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control($wp_customize, 'special_number', 'text', "cyn_special_number", "خط ویژه");

			$wp_customize->add_section(
				'locations',
				[
					'title' => 'نواحی خدمات رسانی',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			for ($i = 1; $i <= 6; $i++) {
				$this->cyn_add_control($wp_customize, 'locations', 'text', "cyn_phone_number_title_$i", "نواحی $i");
				$this->cyn_add_control($wp_customize, 'locations', 'tel', "cyn_phone_number_$i", "شماره تلفن $i");
			}

			$wp_customize->add_section(
				'social_media',
				[
					'title' => 'شبکه های اجتماعی',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			for ($i = 1; $i <= 10; $i++) {
				$this->cyn_add_control($wp_customize, 'social_media', 'file', "cyn_social_media_img_$i", "تصویر شبکه اجتماعی $i");
				$this->cyn_add_control($wp_customize, 'social_media', 'text', "cyn_social_media_url_$i", "لینک شبکه اجتماعی $i");
			}


			$wp_customize->add_section(
				'hours',
				[
					'title' => 'ساعات کاری',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control($wp_customize, 'hours', 'text', "cyn_days", "روزها");
			$this->cyn_add_control($wp_customize, 'hours', 'text', "cyn_hours", "ساعت ها");


			$wp_customize->add_section(
				'email',
				[
					'title' => 'ایمیل',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control($wp_customize, 'email', 'text', "cyn_email", "آدرس ایمیل");


			$wp_customize->add_section(
				'404_img',
				[
					'title' => 'لوگو 404',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control($wp_customize, '404_img', 'file', "cyn_custom_404_logo", "لوگو 404");

			$wp_customize->add_section(
				'custom_logo',
				[
					'title' => 'لوگوی دوم',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control($wp_customize, 'custom_logo', 'file', "cyn_custom_logo", "لوگو");

			$wp_customize->add_section(
				'faq_btn',
				[
					'title' => 'دکمه سوالات متداول',
					'priority' => 1,
					'panel' => 'general'
				]
			);

			$this->cyn_add_control($wp_customize, 'faq_btn', 'text', "cyn_faq_btn", "دکمه سوالات متداول");
		}

		private function cyn_register_app_bar($wp_customize)
		{
			$wp_customize->add_panel(
				'app_bar',
				[
					'title' => 'تنظیمات گزینه های اپ بار',
					'priority' => 1
				]
			);

			$wp_customize->add_section(
				'btn_1',
				[
					'title' => 'دکمه اول',
					'priority' => 1,
					'panel' => 'app_bar'
				]
			);

			$this->cyn_add_control($wp_customize, 'btn_1', 'file', "cyn_app_bar_btn_icon_1", "آیکون ۱");
			$this->cyn_add_control($wp_customize, 'btn_1', 'text', "cyn_app_bar_btn_title_1", "تایتل ۱");
			$this->cyn_add_control($wp_customize, 'btn_1', 'text', "cyn_app_bar_btn_link_1", "لینک ۱");

			$wp_customize->add_section(
				'btn_2',
				[
					'title' => 'دکمه دوم',
					'priority' => 1,
					'panel' => 'app_bar'
				]
			);

			$this->cyn_add_control($wp_customize, 'btn_2', 'file', "cyn_app_bar_btn_icon_2", "آیکون ۲");
			$this->cyn_add_control($wp_customize, 'btn_2', 'text', "cyn_app_bar_btn_title_2", "تایتل ۲");
			$this->cyn_add_control($wp_customize, 'btn_2', 'text', "cyn_app_bar_btn_link_2", "لینک ۲");

			$wp_customize->add_section(
				'btn_3',
				[
					'title' => 'دکمه سوم',
					'priority' => 1,
					'panel' => 'app_bar'
				]
			);

			$this->cyn_add_control($wp_customize, 'btn_3', 'file', "cyn_app_bar_btn_icon_3", "آیکون ۳");
			$this->cyn_add_control($wp_customize, 'btn_3', 'text', "cyn_app_bar_btn_title_3", "تایتل ۳");
			$this->cyn_add_control($wp_customize, 'btn_3', 'text', "cyn_app_bar_btn_link_3", "لینک ۳");
		}
		private function cyn_register_panel_custom_code($wp_customize)
		{
			$wp_customize->add_panel(
				'custom_code',
				[
					'title' => 'تنظیمات کدهای سفارشی',
					'priority' => 1
				]
			);

			$wp_customize->add_section(
				'head_section',
				[
					'title' => 'داخل تگ head',
					'priority' => 1,
					'panel' => 'custom_code'
				]
			);


			for ($i = 1; $i <= 10; $i++) {
				$this->cyn_add_control($wp_customize, 'head_section', 'textarea', "cyn_head_code_$i", "کد سفارشی $i");
			}

			$wp_customize->add_section(
				'start_body_section',
				[
					'title' => 'ابتدای تگ body',
					'priority' => 1,
					'panel' => 'custom_code'
				]
			);

			for ($i = 1; $i <= 10; $i++) {
				$this->cyn_add_control($wp_customize, 'start_body_section', 'textarea', "cyn_start_body_code_$i", "کد سفارشی $i");
			}


			$wp_customize->add_section(
				'end_body_section',
				[
					'title' => 'انتهای تگ body',
					'priority' => 1,
					'panel' => 'custom_code'
				]
			);

			for ($i = 1; $i <= 10; $i++) {
				$this->cyn_add_control($wp_customize, 'end_body_section', 'textarea', "cyn_end_body_code_$i", "کد سفارشی $i");
			}
		}
	}


}
