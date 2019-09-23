<footer>
	<ul class="list-group list-group-horizontal-xl">
		<li class="list-group-item flex-fill"><a href=#><?php the_field('adress_field', options); ?></a></li>
		<li class="list-group-item flex-fill">
			<ul class="border_line">
				<li><a href=#><?php the_field('phone_field_1', options); ?></a></li>
				<li><a href=#><?php the_field('phone_field_2', options); ?></a></li>
				<li><a href=#><?php the_field('phone_field_3', options); ?></a></li>
			</ul>
		</li>
		<li class="list-group-item flex-fill"><a href=#><?php the_field('mail_field', options); ?></a></li>
	</ul>
</footer>
<?php wp_footer(); ?>
</body>

</html>