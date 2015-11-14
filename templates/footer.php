<footer class="global-footer">
    <div class="container">
		<div class="footer-left">
			<a class="footer-brand" href="<?= esc_url(home_url('/')); ?>">
	          <i class="icon-1color"></i>
	          <span><?php bloginfo('name'); ?></span>
	        </a>
		</div>

		<div class="footer-right">
			<?php function auto_copyright($year = 'auto'){ ?>
			   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
			   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
			   <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
			   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
			<?php } ?>

			<p>
				<span class="copyright">Copyright © <?php auto_copyright(); // 2011?> <?php bloginfo('name'); ?>,</span>
				<span class="reserved">&nbsp; All Rights Reserved.</span>
			</p>
		</div>
	</div>
</footer>
