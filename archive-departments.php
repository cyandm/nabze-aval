<?php
global $wp_query;

?>

<!-- Archive Department Page -->
<?php get_header() ?>

<main class="container grid gap-3">

	<!-- epartment Card -->
	<section class="space-y-3 col-span-3 max-lg:col-span-4 max-xl:mx-5">

		<!-- Title -->
		<div class="text-h1 max-lg:text-h4">
			<?php echo single_term_title() ?>
		</div>

		<div class="grid grid-cols-3 max-xl:grid-cols-2 max-sm:grid-cols-1 gap-3  max-md:hidden">

			<?php
			if ($wp_query->have_posts()):

				foreach ($wp_query->get_posts() as $post) {
					cyn_get_card('department', ['post-id' => $post->ID, 'class' => 'min-h-[400px] first:col-span-2']);
				}

			endif;
			?>

		</div>
		<div class="md:hidden flex gap-3 flex-col">
			<?php
			if ($wp_query->have_posts()):
				foreach ($wp_query->get_posts() as $post) {
					cyn_get_card('department-mini', ['post-id' => $post->ID, 'class' => 'md:hidden']);
				}

			endif;
			?>

		</div>

		<!-- Pagination -->
		<?php cyn_get_component('pagination') ?>

	</section>

</main>

<div class="py-8"></div>

<?php get_footer() ?>