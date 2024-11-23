<?php
$services = get_field('departments') ?? [];
$swiper_show = $args['swiper'] ?? true;

if (!is_array($services) || count($services) < 1) {
	$services = get_posts([
		'post_type' => 'department',
		'posts_per_page' => -1,
		'fields' => 'ids',
	]);
}
?>

<div class="bg-noise bg-primary-90 py-9 space-y-4">
	<div class="container">
		<div class=" flex justify-between items-center">

			<div class="text-h1 max-lg:text-h3 max-md:text-h5 text-[#334155]">
				<?php _e('خدمات نبض اول', 'cyn-dm') ?>
			</div>

			<?php if (false !== $swiper_show): ?>

				<div class="flex gap-2">
					<div id="servicesPrev" class="-rotate-180">
						<cyn-icon-button type="primary" icon="#icon-Arrow-27">
						</cyn-icon-button>
					</div>

					<div id="servicesNext" class="rotate-0">
						<cyn-icon-button type="primary" icon="#icon-Arrow-27">
						</cyn-icon-button>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</div>

	<div class="container px-3">
		<swiper-container navigation-next-el="#servicesNext" navigation-prev-el="#servicesPrev" space-between="12"
			slides-per-view="auto">
			<?php foreach ($services as $index => $service): ?>
				<swiper-slide class="max-w-[350px] fade-in-down" anim-delay="<?php echo $index * 0.3 ?>">
					<?php cyn_get_card('department', ['post-id' => $service]) ?>
				</swiper-slide>
			<?php endforeach; ?>
		</swiper-container>
	</div>
</div>