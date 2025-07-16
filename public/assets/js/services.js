$(document).ready(function () {
    $('.slick-moving-services , .testimonial-card , .blog-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        responsive: [{
            breakpoint: 1280,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 640,
            settings: {
                slidesToShow: 1
            }
        }
        ],

        // Custom arrows
        prevArrow: `<button type="button" class="slick-prev custom-arrow top-[-200px] left-[-50px] absolute">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
              </button>`,

        nextArrow: `<button type="button" class="slick-next custom-arrow right-[-50px] absolute">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </button>`,
    });

    $('.slick-moving-services').on('afterChange', function (event, slick, currentSlide) {
        const totalSlides = slick.slideCount;
        const progressWidth = ((currentSlide + 1) / totalSlides) * 100;
        $('#slick-progress').css('width', progressWidth + '%');
    });

    $('.toggle-btn').on('click', function () {
        const card = $(this).closest('.benefit-card');
        const content = card.find('.card-content');
        const button = $(this);

        if (button.text().trim() === 'See more') {

            card.removeClass('md:row-span-1').addClass('md:row-span-2');
            content.removeClass('hidden').addClass('block');
            button.text('See less');
        } else {

            card.removeClass('md:row-span-2').addClass('md:row-span-1');
            content.removeClass('block').addClass('hidden');
            button.text('See more');
        }
    });

    // Moving Process Interaction
    $('.process-item').on('click', function () {
        const step = $(this).data('step');

        // Reset all items
        $('.process-item').removeClass('active');
        $('.process-item .h-1 > div').removeClass('bg-primary').addClass('bg-gray').css('width', '0');

        // Reset all images to inactive state (show inactiveshow, hide activeshow)
        $('.process-item .activeshow').removeClass('flex').addClass('hidden');
        $('.process-item .inactiveshow').removeClass('hidden').addClass('flex');

        // Activate clicked item
        $(this).addClass('active');
        $(this).find('.h-1 > div').removeClass('bg-gray').addClass('bg-primary').css('width', '100%');

        // Show active image for clicked item (show activeshow, hide inactiveshow)
        $(this).find('.activeshow').removeClass('hidden').addClass('flex');
        $(this).find('.inactiveshow').removeClass('flex').addClass('hidden');

        // Show corresponding content
        $('.process-content').removeClass('active').hide();
        $(`[data-content="${step}"]`).addClass('active').show();
    });

    // Initialize first step as active
    $('.process-item[data-step="contact"]').trigger('click');


});