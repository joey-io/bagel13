<?php include 'header.php'; ?>
	<div class="container entry-content ourstorycontent">
		<div id="ourstory1" class="ourStory__container">
			<div class="story_img"></div>
			<div class="story_text">
				<img src="img/whoweare.png" class="h1" />
				<p>
					At Bagel 13 every day is your lucky day, because you’ll always find fresh, delicious, made from scratch food, served in a contemporary, friendly environment. We’re firm believers in keeping it simple and doing it ourselves. At Bagel 13 we care about every meal we serve. From our House-Made bagels to our signature sandwiches, salads, coffees and smoothies, we want to make your day delicious. 
				</p>
				<p class="learn_more">
					<a href="#ourstory2" class="scrolldwn">Learn More &rsaquo;&rsaquo;</a>
				</p>
			</div>
		</div>
		<div id="ourstory2" class="ourStory__container">
			<div class="story_img"></div>
			<div class="story_text">
				<img src="img/madebyhand.png" class="h1" />
				<p>
					At Bagel 13, we’re up before dawn. Our mornings start with the delectable aroma of House-Made bagels, baked fresh every day. Our iced coffee is cold brewed kegged. You might not have heard about that, but coffee made from cold brewing has a smoother, richer coffee taste. Served in a Mason Jar it goes perfectly with our made-to-order breakfast or lunch menu. You’ll always find your traditional favorites, but try some of our exciting, contemporary flavors to start your day off right.
				</p>
				<p class="learn_more">
					<a href="#ourstory3" class="scrolldwn">Learn More &rsaquo;&rsaquo;</a>
				</p>
			</div>
		</div>
		<div id="ourstory3" class="ourStory__container">
			<div class="story_img"></div>
			<div class="story_text">
				<img src="img/onthego.png" class="h1" />
				<p>
					Fast shouldn’t mean pre-made. Whether you choose one of our creative, inspiring new tastes or a classic favorite, our bagel sandwiches, salads and wraps are always made fresh, by hand.  Relax in contemporary seating or join your neighbors at the Community Table.  At Bagel 13 we strive to make every day a little more upbeat. Even our colors are happy. So pull up a chair and get your smile on. <strong>We’re glad you stopped by.</strong>
				</p>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$('body').addClass('our_story');

		$('.scrolldwn').click(function(e){
			e.preventDefault();
			var dest = $(this).attr('href');
			$('body,html').stop().animate({
				scrollTop: $(dest).offset().top
			})
		})
	</script>
<?php include 'footer.php'; ?>  