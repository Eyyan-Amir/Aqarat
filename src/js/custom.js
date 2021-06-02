// Dropzone.autoDiscover = false;
$( document ).ready( function () {
    aqarat.init( {
        slick: $( ".slick-instance" ),
        selectPicker: $( ".selectpicker" ),
        // datepicker_inline: $("#datepicker_inline"),
        // datepicker: $("#datepicker,#datepicker2"),
        // datepicker_filter: $("#datepicker_filter"),
        timepicker: $( "#timepicker, #timepicker2" ),
        datepicker: $( "#datepicker, #datepicker1" ),
        datepicker2: $( "#datepicker2" ),
        datetimepicker3: $( "#datetimepicker3" ),
        datetimepicker4: $( "#datetimepicker4" ),
        filterToggle: $( ".propertyListing__filter--icon, .propertyListing__filter--close" ),
        sliderRent: $( "#propertiesRent .featuredProperties__wrapper--slider" ),
        sliderBuy: $( "#propertiesBuy .featuredProperties__wrapper--slider" ),
        searchInput: $( ".searchInput" )

    } );
} );
var self;
var aqarat = {
    init: function ( options ) {
        this.settings = options;
        self = this;
        lazyload.load( " .table__body", 'src/data/properties.html' );
        lazyload.load( " .agent-listing .listing-wrapper .row", 'src/data/agent-listing.html' );
        this.bindEvents();
        this.utilities();
        this.loader();
        this.datepickers();
        this.configureModal();
        this.uploadControls();
        this.uploadImage();
        // this.datetimePickers();
        this.stickyHeader();
        this.tabsChange();
        this.featuredProperties();
        this.searchProperty();
        // this.rippleEffect();
        //this.filters();
    },
    bindEvents: function () {
        this.settings.filterToggle.on( "click", this.filters );
        $( '.listingTabs a[data-toggle="tab"]' ).on( 'shown.bs.tab', this.updateScroll );
    },
    loader: function () {
        setTimeout( function () {
            $( 'body' ).addClass( 'loaded' );
        }, 3500 );
    },
    stickyHeader: function () {
        $( window ).scroll( function () {
            // if($(window).width() > 767){

            // }
            if ( $( this ).scrollTop() > 150 ) {
                $( "header" ).addClass( "sticky" );
            } else {
                $( "header" ).removeClass( "sticky" );
            }
        } );
        // $(window).scroll(function() {
        //     if ($(this).scrollTop() > 60) {
        //         $('.dashboard__left').addClass("sticky");
        //     } else {
        //         $('.dashboard__left').removeClass("sticky");
        //     }
        // });
    },
    datepickers: function () {
        this.settings.timepicker.datetimepicker( {
            format: 'LT',
            ignoreReadonly: true,
            keepOpen: false
        } );
        // this.settings.datepicker_inline.datetimepicker({
        //      inline: true,
        //      format: 'DD/MM/YYYY'
        //  });
        this.settings.datepicker.datetimepicker( {
            format: 'L',
            keepOpen: false,
            ignoreReadonly: true

        } );
        this.settings.datepicker2.datetimepicker( {
            keepOpen: false,
            ignoreReadonly: true
        } );
        this.settings.datetimepicker3.datetimepicker( {
            keepOpen: false,
            ignoreReadonly: true,
            format: "YYYY"
        } );
        this.settings.datetimepicker4.datetimepicker( {
            keepOpen: false,
            ignoreReadonly: true,
            format: "MM",
        } );

    },
    utilities: function () {
        // aos Animation
        AOS.init( {
            delay: 100, // values from 0 to 3000, with step 50ms
            duration: 900, // values from 0 to 3000, with step 50ms
        } );
        // mCustomScrollbar
        $( ".inner-scroll" ).mCustomScrollbar();
        // mCustomScrollbar
        // Slick slider default initializtion
        this.settings.slick.slick();

        // Bootstrap Selectpicker

        $.fn.selectpicker.Constructor.BootstrapVersion = '4';
        if ( /Android|webOS|iPhone|BlackBerry/i.test( navigator.userAgent ) ) {
            $.fn.selectpicker.Constructor.DEFAULTS.mobile = true;
        }
        $( ".selectpicker" ).selectpicker( {
            container: 'body',
            size: 8,
            liveSearch: true,
            liveSearchPlaceholder: 'Search'
        } );
        $( '.property__item--save' ).click( function () {
            $( this ).toggleClass( 'active' )
        } );
        $( ".search-icon" ).click( function ( e ) {
            e.preventDefault();
            $( "li.search form" ).addClass( "search-active" );
        } );

        $( ".close-search" ).click( function ( e ) {
            e.preventDefault();
            $( "li.search form" ).removeClass( "search-active" );
        } );
        $( ".toggle-filter-btn " ).on( "click", function ( e ) {
            if ( $( window ).width() <= 768 ) {
                $( this ).toggleClass( "tab-active" );
                $( ".toggler-filter .nav-tabs" ).slideToggle();
                var title = $( this ).text();
                $( ".toggle-filter-btn " ).text( title );
            }
        } );
        $( document ).on( 'hidden.bs.modal', function ( event ) {
            if ( $( '.modal:visible' ).length ) {
                $( 'body' ).addClass( 'modal-open' );
            }
        } );
        // $("#myTable").dataTable();
        // $('.display').dataTable();
        // .dataTable();
        // setTimeout( function () {
        //             $('#myTable').DataTable( {
        //     "order": [[ 3, "desc" ]]
        // } );
        //         }, 300 );
        $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
        

    },
    uploadControls: function () {
        $( document ).on( "change", '.file-wrapper input[type="file"]', function ( e ) {
            var fileName = e.target.files[0].name;
            $( this ).parents( ".type-file" ).find( ".file-name .file_name" ).text( fileName );
            let str = $( '.file-name .file_name' ).text();
            let text = str.slice( 0, 10 );
            var file_ext = fileName.split( "." )
            var checkText = file_ext[0]
            if ( checkText.length >= 15 ) {
                file_ext = file_ext[file_ext.length - 1]
                $( this ).parents( ".type-file" ).find( ".file-name .file_name" ).text( `${text}...${file_ext}` );
            }

            $( this ).parents( ".type-file" ).find( ".file-name" ).addClass( "active" );
        } );
        $( ".file-name .cross" ).click( function ( e ) {
            e.preventDefault();
            $( this ).parents( '.type-file' ).find( 'input[type="file"]' ).val( '' )
            $( this ).parent( ".file-name" ).removeClass( "active" );
        } );
    },
    uploadImage: function () {
        $( document ).on( "change", ".uploadFile__item--file input[type='file']", function ( e ) {
            var prnt = $( this ).parent();
            var files = $( this )[0].files;
            for ( i = 0; i < files.length; i++ ) {
                var readImg = new FileReader();
                var file = files[i];
                if ( file.type.match( 'image.*' ) ) {
                    readImg.onload = ( function ( file ) {
                        return function ( e ) {
                            $( prnt ).addClass( 'imageAdd' )
                            $( prnt ).find( ".uploadFile__item--image" ).remove();
                            $( prnt ).append( `<div class="uploadFile__item--image"><img src="${e.target.result}"><span class="delete"></span></div>` );
                            $( '.dash-organization .uploadFile__item .imageAdd' ).attr( 'data-label', 'edit' )
                        };
                    } )( file );
                    readImg.readAsDataURL( file );
                } else {
                    prnt.find( 'input[type="file"]' ).val( '' );
                }
            }
        } );
        $( document ).on( "click", '.uploadFile__item--image .delete', function ( e ) {
            $( this ).parents( '.uploadFile__item--file' ).removeClass( 'imageAdd' )
            var prnt = $( this ).parents( ".uploadFile__item--file" );
            $( this ).parent().remove();
            $( prnt ).find( 'input[type="file"]' ).val( '' )
            $( '.dash-organization .uploadFile__item--file ').attr( 'data-label', 'add' )
        } )
    },
    filters: function ( e ) {
        e.preventDefault();
        $( this ).parents( ".propertyListing__filter" ).toggleClass( "toggle" );
    },
    updateScroll: function () {

        $( ".inner-scroll" ).mCustomScrollbar( 'update' );
    },
    featuredProperties: function ( e ) {
        this.settings.sliderRent.slider( {
            min: 0,
            max: $( "#propertiesRent .featuredProperties__wrapper" ).innerWidth(),
        } );
        this.settings.sliderRent.on( "slide", function ( event, ui ) {
            $( "#propertiesRent .featuredProperties__wrapper" ).css( "left", -ui.value + "px" );
        } );
        this.settings.sliderBuy.slider( {
            min: 0,
            max: $( "#propertiesBuy .featuredProperties__wrapper" ).innerWidth(),
        } );
        this.settings.sliderBuy.on( "slide", function ( event, ui ) {
            $( "#propertiesBuy .featuredProperties__wrapper" ).css( "left", -ui.value + "px" );
        } );
    },
    searchProperty: function () {
        var options = {
            url: "src/data/addresses.json",
            getValue: "name"
        };
        this.settings.searchInput.easyAutocomplete( options );
    },
    configureModal: function () {
        $( "body" ).on( "click", "*[data-toggle='custom-modal']", function ( e ) {
            e.preventDefault();
            $( ".custom-modal" ).removeClass( "large" );
            var url = $( this ).attr( "data-path" );
            var size = $( this ).attr( "data-size" );
            var class_name = $( this ).attr( "data-class" );
            $( ".custom-modal" ).removeClass( "large" );
            $( ".custom-modal" ).removeClass( "medium" );
            $( ".custom-modal" ).removeClass( "small" );
            $.get( url, function ( data ) {
                $( ".custom-modal" ).modal( "show" );
                $( ".custom-modal .modal-body" ).html( data );

                if ( size ) {
                    $( ".custom-modal" ).addClass( size );
                }
                if ( class_name ) {
                    $( ".custom-modal" ).addClass( class_name );
                }
                setTimeout( function () {
                    $( ".custom-modal .modal-body" ).addClass( "show" );
                }, 200 );
                $( "body" ).addClass( "remove-scroll" );
            } );
        } );
        $( ".modal" ).on( "hidden.bs.modal", function () {
            $( ".custom-modal .modal-body" ).removeClass( "show" );
            $( ".custom-modal .modal-body" ).empty();
            $( ".custom-modal" ).removeClass( "account-modal" );
            $( "body" ).removeClass( "remove-scroll" );
            $( ".custom-modal" ).removeClass( "large" );
            $( ".custom-modal" ).removeClass( "medium" );
            $( ".custom-modal" ).removeClass( "small" );
        } );
    },
    tabsChange: function () {
        $( '.listingTabs .nav-tabs a[data-toggle="tab"]' ).on( 'shown.bs.tab', function ( e ) {
            $( ".inner-scroll" ).mCustomScrollbar();
        } )
    },
    // rippleEffect:function(){
    //     const buttons = document.querySelectorAll('.b');
    //         buttons.forEach(function (button) {
    //         button.addEventListener('click', function (event) {
    //             let x = event.clientX - event.target.offsetLeft;
    //             let y = event.clientY - event.target.offsetTop;
    //             let rippleElement = document.createElement('span');
    //             rippleElement.style.left = x + 'px';
    //             rippleElement.style.top = y + 'px';
    //             this.appendChild(rippleElement);
    //             setTimeout(function () {
    //             rippleElement.remove();
    //             }, 500);
    //         });
    //     });


    // }

};

var lazyload = {
    load: function ( wrapper, dataURL ) {
        $( ".marker-end" )
            .on( 'lazyshow', function () {
                if ( $( "#loadmorecount" ).val() < 3 ) {
                    $.ajax( {
                        url: dataURL,
                        dataType: "html",
                        success: function ( responseText ) {
                            setTimeout( function () {
                                if ( responseText != "" ) {
                                    $( wrapper ).append( $.parseHTML( responseText ) );
                                    $( window ).lazyLoadXT();
                                    $( '.marker-end' ).lazyLoadXT( { visibleOnly: false, checkDuplicates: false } );
                                } else {
                                    $( '.marker-end' ).hide();
                                }
                            }, 700 );

                        },
                        complete: function () {
                            $( "#loadmorecount" ).val( parseInt( $( "#loadmorecount" ).val() ) + 1 );
                        }
                    } )
                } else {
                    $( '.marker-end' ).hide();
                }
            } )
            .lazyLoadXT( { visibleOnly: false } );
    }
};
$( document ).ready( function () {
    $( '.carousel' ).carousel( {
        carouselWidth: 1200,
        carouselHeight: 330,
        directionNav: true,
        reflection: false,
        shadow: true,
        buttonNav: 'bullets',
        pauseOnHover: false,
        before: function ( carousel ) {
            var current = carousel.current;
            var total = carousel.length;
            $( '.slidesCounter span.total' ).text( `${total} ` )
            $( '.slidesCounter span.current' ).text( ` ${current + 1}` )
        }
    } );
    $( '.propertyDetails__propertyInfo--gallery .slick-arrow' ).text( '' )

} );