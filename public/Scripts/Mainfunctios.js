$(document).ready(function () {

    // notification
    $('.DenyNotification').click(function () {
        $('.notification').hide();
    })
    $('.closenotify i ').click(function () {
        $('.notification').hide();
    })
    //var landingCookie = readCookie('landing');
    //if (landingCookie != 'false') {
    //    $('.landingPageBLock').show()
    //}
    //$("#koraPlusLandingLogo").click(function () {
    //    $(".landingPageBLock").fadeOut(800);

    //    createCookie("landing",'false',1);
    //});
    //$("#AfconLandingLogo").click(function (e) {
    //    e.preventDefault();

    //    createCookie("landing", 'false',1);

    //    window.location = $(this).attr('href');
    //});
    $('#example').breakingNews({
        // or "rtl"
        direction: "rtl",
        scrollSpeed: 3.5,
        stopOnHover: true,
    });
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        console.log();
    } else {
        if ($('.reponsiveAd , .CenterAd').length > 0) {
            //Fixed gutters
            var sticky_navigation_offset_top = $('.reponsiveAd').offset().top - 200;
            var sticky_navigation = function () {
                var scroll_top = $(window).scrollTop();
                if (scroll_top > sticky_navigation_offset_top) {
                    $('.reponsiveAd , .CenterAd').addClass("FixedAd");
                } else {
                    $('.reponsiveAd , .CenterAd').removeClass("FixedAd");
                }
            };
            sticky_navigation();
            $(window).scroll(function () {
                sticky_navigation();
            });

            $('a[href="#"]').click(function (event) {
                event.preventDefault();
            });
            if ($('.articlemostWatched').length > 0) {
                //Fixed gutters
                var sticky_navigation_offset_top2 = $('.LeftTvSection').offset().top + 105;
                var sticky_navigation2 = function () {
                    var scroll_top = $(window).scrollTop();
                    if (scroll_top > sticky_navigation_offset_top2) {
                        $('.articlemostWatched').addClass("FixedarticlemostWatched");
                    } else {
                        $('.articlemostWatched').removeClass("FixedarticlemostWatched");
                    }
                };
                sticky_navigation2();
                $(window).scroll(function () {
                    sticky_navigation2();
                });

                $('a[href="#"]').click(function (event) {
                    event.preventDefault();
                });
            }
        }
    }

    //Menu
    $('.MobileMenuicon').click(function () {
        $('body').toggleClass('NoScroll');
        $('.MenuFullWidth').slideToggle(500);
        $('.fa.fa-bars').toggleClass('HideFA');
        $('.fa.fa-times').toggle(300);
    });
    //match center tabs
    //$(".MatchInnerBlock").hide(); // Initially hide all content
    //$(".DaysTabs li:nth-child(2)").attr("id", "current"); // Activate first tab
    //$(".MatchInnerBlock:nth-child(2)").fadeIn(); // Show first tab content
    //$('.DaysTabs li .tagA').click(function (e) {
    //    e.preventDefault();
    //    $(".MatchInnerBlock").hide(); // Hide all content
    //    $(".DaysTabs li").attr("id", ""); // Reset id's
    //    $(this).parent().attr("id", "current"); // Activate this
    //    $('#' + $(this).attr('title')).show(); // Show content for current tab
    //});
    var tabnum = $('#tabNum').val();
    if (tabnum == undefined) {
        tabnum = 1;
    }
    //championships tabs
    $(".championshipsBlock").hide(); // Initially hide all content
    $(".listUl li:nth-child(" + tabnum + ")").attr("id", "current"); // Activate first tab
    $(".championshipsBlock:nth-child(" + (tabnum + 1) + ")").fadeIn(); // Show first tab content
    $("#Chtab" + tabnum).fadeIn(); // Show first tab content

    $('.listUl a').click(function (e) {
        e.preventDefault();
        $(".championshipsBlock").hide(); // Hide all content
        $(".listUl li").attr("id", ""); // Reset id's
        $(this).parent().attr("id", "current"); // Activate this
        $('#' + $(this).attr('title')).show(); // Show content for current tab
    });


    //Team tabs
    $(".TeamTabsBlock").hide(); // Initially hide all content
    $(".listUl li:nth-child(" + tabnum + ")").attr("id", "current"); // Activate first tab
    $(".TeamTabsBlock:nth-child(" + (tabnum + 1) + ")").fadeIn(); // Show first tab content
    $("#Teamtab" + tabnum).fadeIn(); // Show first tab content
    $('.listUl a').click(function (e) {
        e.preventDefault();
        $(".TeamTabsBlock").hide(); // Hide all content
        $(".listUl li").attr("id", ""); // Reset id's
        $(this).parent().attr("id", "current"); // Activate this
        $('#' + $(this).attr('title')).show(); // Show content for current tab
    });

    //match center tabs
    $(".MatchInnerBlock").hide(); // Initially hide all content
    $(".DaysTabs li:nth-child(2)").attr("id", "current"); // Activate first tab
    $(".MatchInnerBlock:nth-child(2)").fadeIn(); // Show first tab content
    $('.DaysTabs li .tagA').click(function (e) {
        e.preventDefault();
        $(".MatchInnerBlock").hide(); // Hide all content
        $(".DaysTabs li").attr("id", ""); // Reset id's
        $(this).parent().attr("id", "current"); // Activate this
        $('#' + $(this).attr('title')).show(); // Show content for current tab
    });


    // Match Details Page Tabs
    $(".MatchDetailsTabContent").hide(); // Initially hide all content
    $(".TwotabsMatchPage li:nth-child(1)").attr("id", "current"); // Activate first tab
    $(".MatchDetailsTabContent:nth-child(1)").fadeIn(); // Show first tab content
    $('.TwotabsMatchPage a').click(function (e) {
        e.preventDefault();
        $(".MatchDetailsTabContent").hide(); // Hide all content
        $(".TwotabsMatchPage li").attr("id", ""); // Reset id's
        $(this).parent().attr("id", "current"); // Activate this
        $('#' + $(this).attr('title')).show(); // Show content for current tab
    });

    // search
    $('.searchHeaderBtn').click(function () {
        $('body').toggleClass('bodyNoScroll');
        $('.SearchAreaBlock').slideToggle("slow").addClass('AddFlex');
    });

    $('.CloseSearchAreaBlockIn').click(function () {
        $('body').removeClass('bodyNoScroll');
        $('.SearchAreaBlock').slideUp(500);
        setTimeout(function () {
            $(".SearchAreaBlock").removeClass('AddFlex');
        }, 500);
    });

    // STTABSNewContent

    // Match Details Page Tabs inner
    $(".STTABSNewContent").hide(); // Initially hide all content
    $(".STTABSNew li:nth-child(1)").attr("id", "current"); // Activate first tab
    $(".STTABSNewContent:nth-child(1)").fadeIn(); // Show first tab content
    $('.STTABSNew a').click(function (e) {
        e.preventDefault();
        $(".STTABSNewContent").hide(); // Hide all content
        $(".STTABSNew li").attr("id", ""); // Reset id's
        $(this).parent().attr("id", "current"); // Activate this
        $('#' + $(this).attr('title')).show(); // Show content for current tab
    });

    //swiperMatchCenter
    var swiperMatchCenter = new Swiper(".swiperMatchCenter", {
        observer: true,
        slidesPerView: 1,
        observeParents: true,
        centeredSlides: false,
        loop: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.MatchCenterContainer .swiper-prev',
            prevEl: '.MatchCenterContainer .swiper-next',
        },
        breakpoints: {
            360: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            801: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            1025: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            1401: {
                slidesPerView: 4,
                spaceBetween: 0
            }
        }
    });

    var SliderFakhrPlayers = new Swiper(".SliderFakhrPlayers", {
        observer: true,
        observeParents: true,
        centeredSlides: false,
        spaceBetween: 15,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.SliderFakhrPlayers .swiper-prev',
            prevEl: '.SliderFakhrPlayers .swiper-next',
        },
        breakpoints: {
            360: {
                slidesPerView: 1,
                spaceBetween: 15
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 15
            },
            801: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            1025: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            1400: {
                slidesPerView: 3,
                spaceBetween: 15
            },
            1401: {
                slidesPerView: 4,

            }
        }
    });


    // Tabs Dont Miss
    $('.tabsDMHeader .tab-link').click(function () {
        var tab_id = $(this).attr('data-tab');
        $(this).addClass('current').siblings().removeClass('current');
        $("#" + tab_id).addClass('current').siblings().removeClass('current');
    })
    var mySwiperTabs = new Swiper(".mySwiperTabs", {
        slidesPerView: 2,
        spaceBetween: 5,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
        },
    });

    // Dont Misss
    var SwiperDontMiss = new Swiper(".Swiper-DontMiss", {
        spaceBetween: 5,
        observer: true,
        observeParents: true,
        navigation: {
            nextEl: ".swiper-button-next-DontMiss",
            prevEl: ".swiper-button-prev-DontMiss",
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 5,
            },
        },
    });
    var SwiperDontMissThreeView = new Swiper(".Swiper-DontMissThreeView", {
        spaceBetween: 3,
        observer: true,
        observeParents: true,
        navigation: {
            nextEl: ".swiper-button-next-DontMiss",
            prevEl: ".swiper-button-prev-DontMiss",
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
        },
    });


    // swiper More News
    var SwiperMoreNews = new Swiper(".SwiperMoreNews", {
        spaceBetween: 5,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination-MoreNews",
            clickable: true,
        },
        breakpoints: {
            500: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 5,
            },
        },
    });






    //match center tabs
    $(".tabsafconContentOBLock").hide(); // Initially hide all content
    $(".tabsafconHeadBLock li:nth-child(1)").attr("id", "current"); // Activate first tab
    $(".tabsafconContentOBLock:nth-child(1)").fadeIn(); // Show first tab content
    $('.tabsafconHeadBLock li .headA').click(function (e) {
        e.preventDefault();
        $(".tabsafconContentOBLock").hide(); // Hide all content
        $(".tabsafconHeadBLock li").attr("id", ""); // Reset id's
        $(this).parent().attr("id", "current"); // Activate this
        $('#' + $(this).attr('title')).show(); // Show content for current tab
    });

    // swiper afconGroups
    var afconGroups = new Swiper(".afconGroups", {

        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.afconGroups .swiper-button-next',
            prevEl: '.afconGroups .swiper-button-prev',
        },
        breakpoints: {
            500: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: "auto",
                spaceBetween: 30,
            },
        },
    });

    // swiper afconBannersGroups
    var afconBannersGroups = new Swiper(".afconBannersGroups", {
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".afconBannersGroups .swiperafconBannersGroups",
            clickable: true,
        },
    });


    //swiperTeams Homepage
    var swiperTeams = new Swiper(".swiperTeams", {
        centeredSlides: false,
        observer: true,
        observeParents: true,
        loop: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.AllTeamsBlockArea .swiper-prev',
            prevEl: '.AllTeamsBlockArea .swiper-next',
        },
        breakpoints: {
            360: {
                slidesPerView: 4,
                spaceBetween: 10,
                slidesPerGroup: 4,
            },
            640: {
                slidesPerView: 5,
                spaceBetween: 10,
                slidesPerGroup: 5,
            },
            768: {
                slidesPerView: 9,
                spaceBetween: 10,
                slidesPerGroup: 9,
            },
            1024: {
                slidesPerView: 15,
                spaceBetween: 10,
                slidesPerGroup: 15,
            }
        }
    });
    var swiperTeamsInners = new Swiper(".swiperTeamsInners", {
        centeredSlides: false,
        loop: false,
        observer: true,
        observeParents: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.AllTeamsBlockInners .swiper-prev',
            prevEl: '.AllTeamsBlockInners .swiper-next',
        },
        breakpoints: {
            360: {
                slidesPerView: 2,
                spaceBetween: 10,
                slidesPerGroup: 2,
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 10,
                slidesPerGroup: 3,
            },
            768: {
                slidesPerView: 6,
                spaceBetween: 10,
                slidesPerGroup: 6,
            },
            1024: {
                slidesPerView: 8,
                spaceBetween: 10,
                slidesPerGroup: 8,
            }
        }
    });
    var AllNewBlock = new Swiper('.swiperSection', {
        centeredSlides: false,
        loop: false,
        freeMode: false,
        slidesPerGroup: 2,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.ContainerAllNews .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            360: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 10
            }
        }
    });

    var swiperWeeks = new Swiper(".swiperWeeks", {
        centeredSlides: false,
        loop: false,
        observer: true,
        observeParents: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.Week-calendar .swiper-prev',
            prevEl: '.Week-calendar .swiper-next',
        },
        breakpoints: {
            360: {
                slidesPerView: 1
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 0
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 0
            }
        }
    });


    // Tabs TVss
    $('ul.tabsDMHeaderTVs li').click(function () {
        var tabTV_id = $(this).attr('data-tab');

        $(this).addClass('current').siblings().removeClass('current');
        $("#" + tabTV_id).addClass('current').siblings().removeClass('current');
    })

    var SwiperTvs = new Swiper(".Swiper-Tvs", {
        slidesPerView: 3,
        spaceBetween: 5,
        observer: true,
        observeParents: true,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
        },
    });

    //swiperwriters Homepage
    var swiperwriters = new Swiper(".swiperwriters", {
        slidesPerView: 1,
        spaceBetween: 0,
        centeredSlides: false,
        loop: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.writersBlockArea .swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1,
            },
        },
    });

    //swiperFakhr Homepage
    var swiperFakhr = new Swiper(".swiperFakhr", {
        slidesPerView: 1,
        observer: true,
        observeParents: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination-FakhrEgypt',
            clickable: true,
        },
        breakpoints: {
            // above width
            360: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            800: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1,

            }
        }
    });

    //progressbar statistics
    var $progressbar = $(".progress-bar");
    var $input = $("input");

    $input.keyup(function () {
        var value = this.value + '%'
        $progressbar.css("width", value);

    });

    //dropdown red in pages
    $('.dropbtnFun').click(function () {
        $('#myDropdown').toggleClass('show');
        $('#myDropdown2').removeClass('show');

    })
    $('.dropbtnFun2').click(function () {
        $('#myDropdown2').toggleClass('show');
        $('#myDropdown').removeClass('show');

    })

    $('.DropdownPlayer').click(function () {
        $('#DropdownNameplay').toggleClass('show');
        $('#DropdownNameleage').removeClass('show');

    })
    $('.DropdownLeage').click(function () {
        $('#DropdownNameleage').toggleClass('show');
        $('#DropdownNameplay').removeClass('show');

    })



    // CH div Show Details
    $('.CHMore').click(function () {
        $(this).parent().next().toggle()
        $(this).find("img").toggleClass('rotateimg')
    })
    // Dropdown CHdropdownstats
    $('.CHdropdownstats').click(function () {
        $('#CHdropStats').toggleClass('show');

    })

    $('.CHdropdownWeek').click(function (e) {
        $('#CHdropWeek1').toggleClass('show');
        $('#CHdropdownTeam1').removeClass('show');
    })
    $('#CHdropWeek1 a').click(function () {
        $('#CHdropWeek1').toggleClass('show');
    })
    $('.CHdropdownTeam').click(function (e) {
        $('#CHdropdownTeam1').toggleClass('show');
        $('#CHdropWeek1').removeClass('show');
    })
    $('.TeamdropdownWeek').click(function (e) {
        $('#TeamdropWeek1').toggleClass('show');
        $('#CHdropWeek1').removeClass('show');
    })
    //$('.Content-calendar').click(function () {
    //    if (!$('.calendar').hasClass('hasDatepicker')) {
    //        $("#datepicker").datepicker();
    //        $("#datepicker").show();

    //    } else {
    //        $("#datepicker").datepicker("destroy");
    //        $("#datepicker").hide();
    //    }
    //})


    var swiperAllVideos = new Swiper('.swiper-AllVideos', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination-video',
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 'auto',
            },
            768: {
                slidesPerView: 'auto',
            },
            1024: {
                slidesPerView: 2,
            },
        }
    });

    var mySwiperVideoTVs = new Swiper(".mySwiperVideoTVs", {
        slidesPerView: 1,
        spaceBetween: 0,
        observer: true,
        observeParents: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 1,
            },
        }
    });

    //swiperDawry Homepage
    var swiperDawry = new Swiper(".swiperDawry", {
        centeredSlides: false,
        loop: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.ArrowsDawryBlock .swiper-prev',
            prevEl: '.ArrowsDawryBlock .swiper-next',
        },
        breakpoints: {
            360: {
                slidesPerView: 2,
                spaceBetween: 10,
                slidesPerGroup: 2,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
                slidesPerGroup: 2,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10,
                slidesPerGroup: 9,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 10,
                slidesPerGroup: 3,
            },
            1025: {
                slidesPerView: 4,
                spaceBetween: 10,
                slidesPerGroup: 4,
            },
        }
    });

    //$('.F-tab-Right li').click(function () {
    //    var tabTV_id = $(this).attr('data-tab');

    //    $(this).addClass('F-tab-active').siblings().removeClass('F-tab-active');
    //    $("." + tabTV_id).addClass('F-Data-active').siblings().removeClass('F-Data-active');
    //})
    // FakhrMasr Right
    $('.F-tab-Right li').click(function () {

        var Ulthis = $('.F-tab-Right li')
        var DataList = $('.F-Data-tab-Right > div')
        var index = $('.F-tab-Right li').index(this);

        $(DataList).filter(function (e) {
            if (e === index) {
                $(Ulthis).eq(e).addClass('F-tab-active').siblings().removeClass('F-tab-active')
                $(DataList).eq(e).addClass('F-Data-active').siblings().removeClass('F-Data-active')
            }
        })
    })



    // FakhrMasr Left
    $('.F-tab-left li').click(function () {

        var Ulthis = $('.F-tab-left li')
        var DataList = $('.F-Data-tab-left > div')
        var index = $('.F-tab-left li').index(this);

        $(DataList).filter(function (e) {
            if (e === index) {
                $(Ulthis).eq(e).addClass('F-tab-active').siblings().removeClass('F-tab-active')
                $(DataList).eq(e).addClass('F-Data-active').siblings().removeClass('F-Data-active')
            }
        })

    })



    //function funkeyUp() {
    //    $('.searchBtn').attr('class', 'fa fa-times searchBtn')
    //    console.log('true')
    //}

    //$('.searchTxt').keyup(function () {
    //    $('.searchBtn').attr('class', 'fa fa-times searchBtn');
    //});

    //programs Episodes
    $('.Episodes .overlayImg').click(function () {
        var episodeslink = $(this).parent().find('.card-img-link iframe').attr('src');
        $('.TvSection a iframe').attr('src', episodeslink += "?autoplay=1")
    });

    var swiperWeekBlock = new Swiper(".swiperWeeksBlocks", {
        slidesPerView: 4,
        spaceBetween: 2,
        observer: true,
        observeParents: true,
        navigation: {
            nextEl: ".swiper-prev-WeekBlock",
            prevEl: ".swiper-next-WeekBlock",
        },
        breakpoints: {
            // above width
            340: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 2,
            },
            800: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            }
        }
    });
    if ($('.swiperWeeksBlocks').length > 0) {
        swiperWeekBlock.slideTo(4, false, false);
    }

    $('.LoginAreaBlock img').click(function () {
        $('.logOut').fadeToggle(700)
    })
    //$('.p-login').click(function () {
    //    $('.pop-up').toggle()
    //})

    //$('.Expectations').click(function () {
    //    $('.result-popup').css("display", "block")
    //})

    //$('.ExpectationsOther').click(function () {
    //    $('.OtherResult-popup').css("display", "block")
    //})

    $('#statistics').on('click', '.OtherResult-popup .iconClose', function () {
        $('.OtherResult-popup').css("display", "none");
    })
    $('.OtherResult-popup .iconClose').click(function () {
        $('.OtherResult-popup').css("display", "none");
    })

    $('.iconClose').click(function () {
        $('.result-popup').css("display", "none")
    });
    // resize video player
    // Find all iframes
    var $iframes = $(".ArticleContent iframe");

    // Find &amp;amp;#x26; save the aspect ratio for all iframes
    $iframes.each(function () {
        $(this).data("ratio", this.height / this.width)
            // Remove the hardcoded width &amp;amp;#x26; height attributes
            .removeAttr("width")
            .removeAttr("height");
    });

    // Resize the iframes when the window is resized
    $(window).resize(function () {
        $iframes.each(function () {
            // Get the parent container&amp;amp;#x27;s width
            var width = $(this).parent().width();
            $(this).width(width)
                .height(width * $(this).data("ratio"));
        });
        // Resize to fix all iframes on page load.
    }).resize();


});

function createCookie(name, value, hour) {
    var expires;

    if (hour) {
        var date = new Date();
        date.setTime(date.getTime() + (hour * 60 * 60 * 1000));
        expires = "; expires=" + date.toString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0)
            return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}
