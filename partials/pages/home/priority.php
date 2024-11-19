<div class="priority">
    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 7; $i++) : ?>
                <?php if (get_field("advantage_title_$i")) : ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="priority-item">
                            <h3><?php echo get_field("advantage_title_$i"); ?></h3>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
</div>