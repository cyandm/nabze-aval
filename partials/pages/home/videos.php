<?php
$videos = get_field('videos') ?? [];

if (!is_array($videos) || count($videos) < 1) {
	$videos = get_posts([
		'post_type' => 'video',
		'posts_per_page' => 3,
		'fields' => 'ids',
	]);
}

?>

<div class="container space-y-2">
	<div class="container">
		<div class=" flex justify-between items-center">

			<div class="text-h1 max-lg:text-h3 max-md:text-h5">
				<?php echo get_field('video_title'); ?>
			</div>

			<div class="flex gap-2">
				<div id="videosPrev" class="-rotate-180">
					<cyn-icon-button type="primary" icon="#icon-Arrow-27">
					</cyn-icon-button>
				</div>

				<div id="videosNext" class="rotate-0">
					<cyn-icon-button type="primary" icon="#icon-Arrow-27">
					</cyn-icon-button>
				</div>
			</div>

		</div>

	</div>

	<div class="fade-in-down" anim-delay="0.8">
		<swiper-container slides-per-view="auto" navigation-next-el="#videosNext" navigation-prev-el="#videosPrev" space-between="12" pagination='true'>
			<?php foreach ($videos as $index => $video): ?>
				<swiper-slide class="max-w-md">
					<?php cyn_get_card('video', ['post-id' => $video]) ?>
				</swiper-slide>
			<?php endforeach; ?>
		</swiper-container>
	</div>
</div>