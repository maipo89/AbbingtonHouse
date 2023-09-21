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
            if ($(window).width() > 769) {
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
            else {
                if (!$carousel.hasClass('slick-initialized')) {
                    $carousel.slick({
                        infinite: false,
                        dots: true,
                        variableWidth: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        responsive: [
                            {
                                breakpoint: 755,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    centerMode: true
                                }
                            },
                        ]
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
            if ($(window).width() > 769) {
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
        nextArrow: '<svg width="20" class="next-arrow" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_2565_41867)"><path d="M5.3719 19.6083C5.8661 20.1306 6.66287 20.1306 7.15707 19.6083L15.5383 10.7514C15.9316 10.3357 15.9316 9.66427 15.5383 9.2486L7.15707 0.391687C6.66287 -0.130563 5.8661 -0.130563 5.3719 0.391686C4.8777 0.913936 4.8777 1.75593 5.3719 2.27818L12.674 10.0053L5.36181 17.7325C4.8777 18.2441 4.8777 19.0967 5.3719 19.6083Z" fill="#85876A"/></g><defs><clipPath id="clip0_2565_41867"><rect width="20" height="20" fill="white" transform="translate(20 20) rotate(-180)"/></clipPath></defs></svg>',
        prevArrow: '<svg width="13" class="prev-arrow" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.0161 0.391687C11.4839 -0.130562 10.6259 -0.130562 10.0936 0.391687L1.0677 9.2486C0.6441 9.66427 0.6441 10.3357 1.0677 10.7514L10.0936 19.6083C10.6259 20.1306 11.4839 20.1306 12.0161 19.6083C12.5484 19.0861 12.5484 18.2441 12.0161 17.7218L4.15238 9.99467L12.027 2.26752C12.5484 1.75593 12.5484 0.903277 12.0161 0.391687Z" fill="#85876A"/></svg>',
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

    
    //Legal Page Tabs

    var currentUrl = window.location.href;

    $('.legal__links a').each(function() {
        var href = $(this).attr('href');
        
        if (currentUrl.includes(href)) {
            $(this).addClass('active');
        }
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

    $(document).on("click", function(event) {
        var authorDropdownList = $(".author .custom-options .custom-option");
        var authorDropdownListA = $(".author .custom-options a");
        var authorSelect = $(".author .select");
        var authorSelectTrigger = $(".author .select__trigger");
        var authorSelectTriggerSpan = $(".author .select__trigger span");
        var authorSelectTriggerArrow = $(".author .select__trigger .arrow");
        var categoryDropdownList = $(".category .custom-options .custom-option");
        var categoryDropdownListA = $(".category .custom-options a");
        var categorySelect = $(".category .select");
        var categorySelectTrigger = $(".category .select__trigger");
        var categorySelectTriggerSpan = $(".category .select__trigger span");
        var categorySelectTriggerArrow = $(".category .select__trigger .arrow");

        if (!authorDropdownList.is(event.target) && !authorDropdownListA.is(event.target) && !authorSelectTrigger.is(event.target) && !authorSelectTriggerArrow.is(event.target) && !authorSelectTriggerSpan.is(event.target)) {
            authorSelect.removeClass("open");
        }

        if (!categoryDropdownList.is(event.target) && !categoryDropdownListA.is(event.target) && !categorySelectTrigger.is(event.target) && !categorySelectTriggerArrow.is(event.target) && !categorySelectTriggerSpan.is(event.target)) {
            categorySelect.removeClass("open");
        }

        var authorCategoryDropdownList = $(".author-category .custom-options .custom-option");
        var authorCategoryDropdownListA = $(".author-category .custom-options a");
        var authorCategorySelect = $(".author-category .select");
        var authorCategorySelectTrigger = $(".author-category .select__trigger");
        var authorCategorySelectTriggerSpan = $(".author-category .select__trigger span");
        var authorCategorySelectTriggerArrow = $(".author-category .select__trigger .arrow");
        var categoryCategoryDropdownList = $(".category-category .custom-options .custom-option");
        var categoryCategoryDropdownListA = $(".category-category .custom-options a");
        var categoryCategorySelect = $(".category-category .select");
        var categoryCategorySelectTrigger = $(".category-category .select__trigger");
        var categoryCategorySelectTriggerSpan = $(".category-category .select__trigger span");
        var categoryCategorySelectTriggerArrow = $(".category-category .select__trigger .arrow");

        if (!authorCategoryDropdownList.is(event.target) && !authorCategoryDropdownListA.is(event.target) && !authorCategorySelectTrigger.is(event.target) && !authorCategorySelectTriggerArrow.is(event.target) && !authorCategorySelectTriggerSpan.is(event.target)) {
            authorCategorySelect.removeClass("open");
        }

        if (!categoryCategoryDropdownList.is(event.target) && !categoryCategoryDropdownListA.is(event.target) && !categoryCategorySelectTrigger.is(event.target) && !categoryCategorySelectTriggerArrow.is(event.target) && !categoryCategorySelectTriggerSpan.is(event.target)) {
            categoryCategorySelect.removeClass("open");
        }
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