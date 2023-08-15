$(document).ready(function() {

    // Hamburger Menu

    $('.hamburger').on("click", function() {
        $("#navigation").addClass('transition-left');
        $(".header__call-icon p").addClass('transition-left');
        var $header = $('.header');
        $header.addClass("mobile-header");
        $('body').addClass("fixed-position");
        $header.attr('aria-expanded', true);
    });

    $('.chevron-left').on("click", function() {
        var $header = $('.header');
        $header.removeClass("mobile-header");
        $('body').removeClass("fixed-position");
        if ($header.attr('aria-expanded')) {
            $header.removeAttr('aria-expanded');
        }
    });


    // Accordion

    $(".admission").accordion({
      collapsible: true,
      active: false,
      heightStyle: 'content',
    });


    // Video

    $('.thumbnail').on('click', function(ev) {
        $(this).hide();
        $('.play-image').hide();
        $("#iframe")[0].src += "?rel=0&autoplay=1";
    });


    // Slider Treatments

    /* Slick needs no get Reinitialized on window Resize after it was destroyed */
    $(window).on('load resize orientationchange', function() {
        $('.services__container').each(function(){
            var $carousel = $(this);
            /* Initializes a slick carousel only on mobile screens */
            // slick on mobile
            if ($(window).width() > 1260) {
                if ($carousel.hasClass('slick-initialized')) {
                    $carousel.slick('unslick');
                }
                $(".services__container__cards-container__card").on("mouseover", function() {
                    $(this).children('div.services__container__cards-container__card__paragraph').addClass('fade-in');
                });
              
                $(".services__container__cards-container__card").on("mouseleave", function() {
                    $(this).children('div.services__container__cards-container__card__paragraph').removeClass('fade-in');
                });
            }
            else{
                if (!$carousel.hasClass('slick-initialized')) {
                    $carousel.slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: true,
                        variableWidth: true,
                        centerMode: true
                    });
                }
            }
        });
    });

    jQuery.event.special.touchstart = {
        setup: function( _, ns, handle ){
            if ( ns.includes("noPreventDefault") ) {
            this.addEventListener("touchstart", handle, { passive: false });
            } else {
            this.addEventListener("touchstart", handle, { passive: true });
            }
        }
    };

    jQuery.event.special.touchmove = {
        setup: function( _, ns, handle ){
            if ( ns.includes("noPreventDefault") ) {
            this.addEventListener("touchmove", handle, { passive: false });
            } else {
            this.addEventListener("touchmove", handle, { passive: true });
            }
        }
    };


    // Slider Teams

    /* Slick needs no get Reinitialized on window Resize after it was destroyed */
    $(window).on('load resize orientationchange', function() {
        $('.team__container__cards-container').each(function(){
            var $carousel = $(this);
            /* Initializes a slick carousel only on mobile screens */
            // slick on mobile
            if ($(window).width() > 920) {
                if ($carousel.hasClass('slick-initialized')) {
                    $carousel.slick('unslick');
                }
                // $(".services__container__cards-container__card").on("mouseover", function() {
                //     $(this).children('div.services__container__cards-container__card__paragraph').addClass('fade-in');
                // });
              
                // $(".services__container__cards-container__card").on("mouseleave", function() {
                //     $(this).children('div.services__container__cards-container__card__paragraph').removeClass('fade-in');
                // });
            }
            else{
                if (!$carousel.hasClass('slick-initialized')) {
                    $carousel.slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                        variableWidth: true,
                        centerMode: true
                    });
                }
            }
        });
    });

    jQuery.event.special.touchstart = {
        setup: function( _, ns, handle ){
            if ( ns.includes("noPreventDefault") ) {
            this.addEventListener("touchstart", handle, { passive: false });
            } else {
            this.addEventListener("touchstart", handle, { passive: true });
            }
        }
    };

    jQuery.event.special.touchmove = {
        setup: function( _, ns, handle ){
            if ( ns.includes("noPreventDefault") ) {
            this.addEventListener("touchmove", handle, { passive: false });
            } else {
            this.addEventListener("touchmove", handle, { passive: true });
            }
        }
    };


    // Slider About Page

    $('.slider-link__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        nextArrow: '<svg class="next-arrow" width="22" height="39" viewBox="0 0 22 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.27467 38.2508C2.2199 39.2497 3.74385 39.2497 4.68908 38.2508L20.7194 21.3107C21.4718 20.5156 21.4718 19.2314 20.7194 18.4363L4.68908 1.49617C3.74385 0.49729 2.21991 0.49729 1.27467 1.49617C0.32944 2.49505 0.32944 4.10549 1.27467 5.10436L15.241 19.8837L1.25538 34.663C0.329441 35.6415 0.329437 37.2723 1.27467 38.2508Z" fill="#87846A"/></svg>',
        prevArrow: '<svg class="prev-arrow" width="23" height="39" viewBox="0 0 23 39" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.7205 0.749159C20.7026 -0.24972 19.0614 -0.24972 18.0435 0.749159L0.780012 17.6893C-0.0301864 18.4844 -0.0301864 19.7686 0.780012 20.5637L18.0435 37.5038C19.0614 38.5027 20.7026 38.5027 21.7205 37.5038C22.7385 36.505 22.7385 34.8945 21.7205 33.8956L6.67992 19.1163L21.7413 4.33697C22.7385 3.35848 22.7385 1.72765 21.7205 0.749159Z" fill="#87846A"/></svg>',
    });

    $('.select-wrapper').on('click', function() {
        $(this).children('.select').toggleClass('open');
    })

    // Slider Testimonial

    $('.testimonial__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
    });
    

    // Input Custom Dropdown

    $('.photo-form__form .custom-option').on("click", function() {
       $('.photo-form__form .custom-option').removeClass("active-dropdown");
       var inputData = $(this).data('value');
       console.log(inputData);
       $('.enquire-input').val(inputData);
       $('.photo-form__form .select__trigger span').html(inputData);
       $(this).addClass('active-dropdown');
    });

    $('.form-admission .custom-option').on("click", function() {
        $('.form-admission .custom-option').removeClass("active-dropdown");
        var inputData = $(this).data('value');
        console.log(inputData);
        $('.referral-input').val(inputData);
        $('.form-admission .select__trigger span').html(inputData);
        $(this).addClass('active-dropdown');
    });

    // $('.category .custom-option').on("click", function() {
    //     $('.category .custom-option').removeClass("active-dropdown");
    //     var inputData = $(this).data('value');
    //     console.log(inputData);
    //     $('.category-input').val(inputData);
    //     $('.category .select__trigger span').html(inputData);
    //     $(this).addClass('active-dropdown');
    // });

    // $('.author .custom-option').on("click", function() {
    //     $('.author .custom-option').removeClass("active-dropdown");
    //     var inputData = $(this).data('value');
    //     console.log(inputData);
    //     $('.author-input').val(inputData);
    //     $('.author .select__trigger span').html(inputData);
    //     $(this).addClass('active-dropdown');
    // });


    // $('.author-category .custom-option').on("click", function() {
    //     $('.author-category .custom-option').removeClass("active-dropdown");
    //     var inputData = $(this).data('value');
    //     console.log(inputData);
    //     $('.author-input-category').val(inputData);
    //     $('.author-category .select__trigger span').html(inputData);
    //     $(this).addClass('active-dropdown');
    // });

    // $('.category-category .custom-option').on("click", function() {
    //     $('.category-category .custom-option').removeClass("active-dropdown");
    //     var inputData = $(this).data('value');
    //     console.log(inputData);
    //     $('.category-input-category').val(inputData);
    //     $('.category-category .select__trigger span').html(inputData);
    //     $(this).addClass('active-dropdown');
    // });

    // Search Functionality

    $("#search-blog").on("input", function () {
        var searchTerm = $(this).val().toLowerCase();
        
        $(".blogs__card").each(function () {
            var blogTitle = $(this).find("h2").text().toLowerCase();
            var blogContent = $(this).find(".blogs__card__description").text().toLowerCase();
            
            if (blogTitle.includes(searchTerm) || blogContent.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    $("#search-archive").on("input", function () {
        var searchTerm = $(this).val().toLowerCase();
        
        $(".blogs__card").each(function () {
            var blogTitle = $(this).find("h2").text().toLowerCase();
            var blogContent = $(this).find(".blogs__card__description").text().toLowerCase();
            
            if (blogTitle.includes(searchTerm) || blogContent.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });


    // Active State Menu Header

    let menuItems = $('.menu-item a');
    let url = window.location.href;
    
    menuItems.each(function() {
        console.log($(this).attr('href'));
        if($(this).attr('href') === url) {
           $(this).addClass('active');
        }
    });

    
    // Validation Admission Form

    $("#formAdmission").on("submit", function(e) {

        let inputReferral = $(".form-admission__form .referral-input");
        let inputEmail = $(".form-admission__form .input-email");
        let inputContact = $(".form-admission__form .input-contact");
        let inputName = $(".form-admission__form .input-name");
        let inputMessage = $(".form-admission__form .input-message");
        let testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;


        if( inputName.val().length > 0 && inputContact.val().length > 0 && testEmail.test(inputEmail.val()) === true && inputMessage.val().length > 0 && inputReferral.val().length > 0 ) {

        console.log('form submitted');
        var that = $(this),
            url = that.attr('action'),
            method = that. attr('method'),
            data = {};
        

        that.find('[name]').each(function(index, value) {
            var that= $(this),
                name = that.attr('name'),
                value = that.val();
            
            data[name] = value;
        });

        $.ajax({
            url: url,
            type: method,
            data: data,
            success: function(response) {
                console.log(response);
                $(".form-admission__form").css("display", "none");
                $(".form-admission__form-complete").css("display", "flex");
            }
        });

        return false;

        }else{
            e.preventDefault;
            $('.form-admission__form .required').each(function() {
                if($(this).val().length == 0) {
                    $(this).addClass('error');
                }
            });

            if(testEmail.test(inputEmail.val()) === false) {
                $('.form-admission__form .email-error').addClass('email-error-show');
                inputEmail.addClass('error');
            }

            if(inputReferral.val().length == 0) {
                $('.form-admission__form .select__trigger').addClass('error');
            }
            return false;

        }
    });

    $(".form-admission__form .required").on("keyup", function(){
        $(this).removeClass('error');
    });

    $('.form-admission__form .select__trigger').on("click", function() {
        $(this).removeClass('error');
    })

    $(".form-admission__form .input-email").on("click", function(){
        $(this).removeClass('error');
        $('.form-admission__form .email-error').removeClass('email-error-show');
    })



    // Validation Treatments Form

    $("#formEnquire").on("submit", function(e) {

        let inputEnquireForm = $(".photo-form .enquire-input");
        let inputEmailForm = $(".photo-form .input-email");
        let inputContactForm = $(".photo-form .input-contact");
        let inputNameForm = $(".photo-form .input-name");
        let testEmailForm = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;


        if( inputNameForm.val().length > 0 && inputContactForm.val().length > 0 && testEmailForm.test(inputEmailForm.val()) === true && inputEnquireForm.val().length > 0 ) {

            console.log('form submitted');
            var that = $(this),
                url = that.attr('action'),
                method = that. attr('method'),
                data = {};
            

            that.find('[name]').each(function(index, value) {
                var that= $(this),
                    name = that.attr('name'),
                    value = that.val();
                
                data[name] = value;
            });

            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(response) {
                    console.log(response);
                    $('.photo-form .email-error').removeClass('email-error-show');
                    inputEmailForm.removeClass('error');
                    $('.photo-form__form__button-container span').addClass('success');
                    setTimeout(function() { 
                        $('.photo-form__form__button-container span').removeClass('success');
                    }, 3000);
                }
            });

            return false;
        }else{
            e.preventDefault;
            $('.photo-form .required').each(function() {
                if($(this).val().length == 0) {
                    $(this).addClass('error');
                }
            });

            if(testEmailForm.test(inputEmailForm.val()) === false) {
                $('.photo-form .email-error').addClass('email-error-show');
                inputEmailForm.addClass('error');
            }

            if(inputEnquireForm.val().length == 0) {
                $('.photo-form .select__trigger').addClass('error');
            }

            return false;

        }
    });

    $(".photo-form .required").on("keyup", function(){
        $(this).removeClass('error');
    });

    $('.photo-form .select__trigger').on("click", function() {
        $(this).removeClass('error');
    })

    $(".photo-form .input-email").on("keyup", function(){
        $(this).removeClass('error');
        $('.photo-form .email-error').removeClass('email-error-show');
    })

    // Accordion Hamburger

    const submenu = $('.accordion-menu .menu-item-has-children')
    console.log(submenu, 'sub');

    submenu.each(function() {
        const svg = $(this).children('svg')
        const submenu = $(this).children('ul.sub-menu')
        console.log(submenu)
        var container = $(this)

        $(document).on('click', function(e) {
            console.log('clicked outside', e.target)
            console.log('this', container)

            if (!container.is(e.target) && container.has(e.target).length === 0) {
                submenu.removeClass('open');
                svg.removeClass('rotate');
            }
        });
        
        svg.on('click', function() {
            submenu.toggleClass('open');
            svg.toggleClass('rotate');
            console.log('clicked')
        });
    })


    // Accessability

    $('input').on("mousedown", function(e){
        var $this = $(this);
        console.log($(this))
        if(!$this.is(':focus')){
            $this.data('mdown',true);
        }

        console.log(!$this.is(':focus'))
    });
    
    $('input').on("focus", function(e){
        var $this = $(this);
        var mdown = $this.data('mdown');
        $this.removeData('mdown');
        
        if(mdown){
            $(this).removeClass('input-focus-accessibility');
            $(this).addClass('input-focus');
        } else {
            $(this).removeClass('input-focus');
            $(this).addClass('input-focus-accessibility');
        }
    });


    $('textarea').on("mousedown", function(e){
        var $this = $(this);
        console.log($(this))
        if(!$this.is(':focus')){
            $this.data('mdown',true);
        }

        console.log(!$this.is(':focus'))
    });
    
    $('textarea').on("focus", function(e){
        var $this = $(this);
        var mdown = $this.data('mdown');
        $this.removeData('mdown');
        
        if(mdown){
            $(this).removeClass('input-focus-accessibility');
            $(this).addClass('input-focus');
        } else {
            $(this).removeClass('input-focus');
            $(this).addClass('input-focus-accessibility');
        }
    });
    
});