jQuery(document).ready(function($) {
    
    /* scroll animation */
    
    $(window).scroll(function(){
        if ($(this).scrollTop() > 1){
            $('.primary-nav-l, .primary-nav-r').addClass('scroll-text'),
            $('.trigger-logo').addClass('scroll-logo');
                    
            $('#nav-toggle.trigger-menu').addClass('scroll-nav'),
            $('#nav-toggle.trigger-menu').addClass('scroll-nav');
        }
        else{
            $('.primary-nav-l, .primary-nav-r').removeClass('scroll-text'),
            $('.trigger-logo').removeClass('scroll-logo');
                    
            $('#nav-toggle.trigger-menu').removeClass('scroll-nav'),
            $('#nav-toggle.trigger-menu').removeClass('scroll-nav');
        }
    });
    
    /* responsive menu */
    
    $('.trigger-menu').click(function(e) {
        $(this).toggleClass('m-active');
        $('.primary-nav-l ul, .primary-nav-r ul').toggleClass('m-active');
            
        $('h1').toggleClass('shrink');
            
        e.preventDefault();
    });
    
    document.querySelector('#nav-toggle').addEventListener('click', function() {
        this.classList.toggle('navicon');
    });
    
});