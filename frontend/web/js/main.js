/*
 |----------
 | Nav-pack & go-top behavior
 |------------------------------
 */
$(window).scroll(function()
{
	if ($(this).scrollTop() > 70)
	{
		$('.nav-pack').addClass('fixed');
		$('#go-top').addClass('active');
	}
	else
	{
		$('.nav-pack').removeClass('fixed');
		$('#go-top').removeClass('active');
	}
});

$('#go-top .btn').click(function()
{
	$('html, body').animate(
	{
		scrollTop: 0
	}, 'slow');

	return false;
});

/*
 |----------
 | Sidebar navigation & overlay screen
 |----------------------------------------
 */
var sideNav = $('.sidenav');
$('#view-filter').click(function()
{
	if (window.innerWidth < 992)
	{
		var sidenavOverlay = $('<div id="sidenav-overlay"></div>');
		sidenavOverlay.click(function()
		{
			/*
			 |----------
			 | Callback untuk menyembunyikan sidenav
			 |--------------------------------------------------
			 */
			if (window.innerWidth < 992)
			{
				// Restore scrolling
				$('body').css(
				{
					overflow: '',
					width: '',
				})
				// Remove overlay
				.find('#sidenav-overlay').fadeOut(function()
				{
					$(this).remove();
				});

				sideNav.removeClass('active');
			}
		});

		// Disable scrolling
		var body     = $('body');
		var oldWidth = body.innerWidth();
		body.css('overflow', 'hidden').width(oldWidth);

		// Add overlay
		$('body').append(sidenavOverlay).find('#sidenav-overlay').fadeIn();

		sideNav.addClass('active');
	}
});

$('.sidenav .close').on('click', function()
{
	$('#sidenav-overlay').trigger('click');
});

/*
 |----------
 | Init home carousel
 |------------------------------
 */
$(".home-carousel").slick(
{
	autoplay     : true,
	autoplaySpeed: 5000,
	dots         : true,
	prevArrow    : '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
	nextArrow    : '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
});

/*
 |----------
 | Init preview image & thumbnail
 |----------------------------------------
 */
$(".preview .preview-image").slick(
{
	arrows        : false,
	asNavFor      : '.preview .preview-thumbnail',
	autoplay      : true,
	autoplaySpeed : 3000,
	dots          : false,
	fade          : true,
	prevArrow     : '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
	nextArrow     : '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
});

$(".preview .preview-thumbnail").slick(
{
	arrows        : false,
	asNavFor      : '.preview .preview-image',
	centerMode    : true,
	dots          : false,
	focusOnSelect : true,
	slidesToShow  : 5,
	responsive: [
		{
			breakpoint: 992,
			settings  : {
				// arrows       : false,
				// centerMode   : true,
				slidesToShow : 3,
			}
		},
	]
});

/*
 |----------
 | NProgress
 |--------------------
 */
if (typeof NProgress != 'undefined') {
	$(document).ready(function () {
		NProgress.start();
	});

	$(window).load(function () {
		NProgress.done();
	});
}
