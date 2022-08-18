<header class="header">
	<div class="header__container">

		<div class="header__menu">
			<div class="header__menu--icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="header__menu--icon__mob">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="header__search no-mobile"><div class="search">
                    <form class="search__form" method="get" action="<?php echo home_url(); ?>" role="search">
						<input type="hidden" name="search-type" value="normal" />
                        <label for="searchForm">Search</label>
                        <input id="searchForm" class="search__input" type="search" name="s" placeholder="Search">
                        <button class="search__submit" type="submit" role="button">
							<?php include 'icon-search.php'; ?>
							Search
                        </button>
                    </form>
                </div>
			</div>
		</div>

		<a href="/" class="header__logo--container">
			<div class="header__logo">
				Combe Grove
			</div>
		</a>

		<div class="header__links">
			<a href="<?php the_field('contact_us_link', 'option');?>" class="no-mobile"><?php the_field('contact_us_title', 'option');?></a>
			<a class="header__button" id="bookMenu" href="#">
				<?php the_field('book_title', 'option');?>		
			</a>
		</div>

	</div>
</header>