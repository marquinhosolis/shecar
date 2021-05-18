$(document).ready(function () {
    $("#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4").click(function () {
        $(this).toggleClass("open");
    });

    $(".hamburguerIcon a").click(function (e) {
        e.preventDefault();
        $("body").toggleClass("body--locked");
        $(".mainMenu").toggleClass("mainMenuMobile--visible");
    });

    var countPost = 0;
    $(".postThumb").each(function () {
        countPost++;
        if (countPost > 8) {
            $(this).hide();
            $(".showMorePosts").show();
        }
    });
    $(".showMorePosts a").click(function (e) {
        e.preventDefault();
        $(".postThumb").show();
        $(".showMorePosts").hide();
    });

    $(".yearsResume").click(function () {
        $(".frm_opt_container").slideToggle();
    });

    var selected = [];
    $(".frm_opt_container .frm_checkbox input").click(function () {
        if ($(this).is(":checked")) {
            selected.push($(this).val());
            console.log(selected);
            //alert($(this).val());
        } else {
            var itemtoRemove = $(this).val();
            selected.splice($.inArray(itemtoRemove, selected), 1);
            console.log(selected);
        }
        $(".yearsResume").text(selected);
    });

    $(".scroll a").click(function (event) {
        //event.preventDefault();
        $("html,body").animate(
            {
                scrollTop: $(this.hash).offset().top - 150,
            },
            800
        );
    });

    /*$('.featuredLogosCaroussel').slick({
		//dots: true,
		infinite: false,
		speed: 300,
		//centerMode: true,
		variableWidth: true
	}); */

    $(".shecareExecutiveDirectorSpeach").find("p").slice(1).hide();
    $(".shecareExecutiveDirectorSpeachMoreLess").click(function (e) {
        e.preventDefault();
        $(".shecareExecutiveDirectorSpeachWrapper")
            .children()
            .slice(2)
            .slideToggle();
        $(".shecareExecutiveDirectorSpeach")
            .find(".shecareExecutiveDirectorSpeachMoreLess")
            .toggle();
    });

    $(".shecareFaqQuestion").click(function (e) {
        e.preventDefault();
        //$(".shecareFaqAnswer").slideUp();
        $(this).closest(".shecareFaq").find(".shecareFaqAnswer").slideToggle();
    });
});

$(window).load(function () {
    $(".flexslider").flexslider({
        animation: "slide",
        controlNav: false,
    });
});
