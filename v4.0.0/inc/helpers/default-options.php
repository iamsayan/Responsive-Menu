<?php
/**
 * This file contain the list of functions which have default options.
 *
 * @version 4.0.0
 * 
 * @package responsive-menu-pro
 */

/**
 * Function return the global settings default values.
 *
 * @version 4.0.0
 *
 * @return array List of options.
 */
function rmp_global_default_setting_options() {

    return [
        'rmp_custom_css' => '',
        'rmp_license_key' => '',
        'menu_adjust_for_wp_admin_bar' => 'hide',
        'rmp_external_files' => 'on',
        'rmp_minify_scripts' => 'on',
        'rmp_scripts_in_footer' => 'on',
        'rmp_remove_fontawesome' => 'off',
        'rmp_remove_glyphicon' => 'off',
        'rmp_remove_dashicons' => 'off',
        'rmp_remove_material_icons' => 'off',
    ];
}

/**
 * Function return the multi device options.
 * Here, Add the option which you want to make the multi device.
 * 
 * @version 4.0.0
 *
 * @return array List of options.
 */
function rmp_get_multi_device_options() {

    return [
        'menu_font' => '',
        'menu_font_size' => '',
        'menu_font_size_unit' => 'px',
        'menu_item_background_colour' => '',
        'menu_item_background_hover_colour' => '#212121',
        'menu_link_colour' => '',
        'menu_link_hover_colour' => '',
        'menu_links_height' => '',
        'menu_links_height_unit' => 'px',
        'menu_links_line_height' => '40',
        'menu_links_line_height_unit' => 'px',
        'submenu_font' => '',
        'submenu_font_size' => '',
        'submenu_font_size_unit' => '',
        'submenu_item_background_colour' => '',
        'submenu_item_background_hover_colour' => '#212121',
        'submenu_link_colour' => '',
        'submenu_link_hover_colour' => '',
        'submenu_links_height' => '',
        'submenu_links_height_unit' => 'px',
        'submenu_links_line_height' => '',
        'submenu_links_line_height_unit' => 'px'
    ];
}

function rmp_animation_delay_options() {
    $time_options = [
        '100ms'  => '100ms',
        '200ms'  => '200ms',
        '300ms'  => '300ms',
        '400ms'  => '400ms',
        '500ms'  => '500ms',
        '600ms'  => '600ms',
        '700ms'  => '700ms',
        '800ms'  => '800ms',
        '900ms'  => '900ms',
        '1000ms' => '1000ms',
    ];

    return $time_options;
}

/**
 * Function to return the list of shortcut keys for menu open and close.
 * 
 * @version 4.0.0
 * 
 * @return array
 */
function rmp_get_menu_open_close_keys() {
    return [ 
        27 => 'Esc',
        13 => 'Enter',
        32 => 'Space',
        37 => 'Left',
        38 => 'Up',
        39 => 'Right',
        40 => 'Down'
    ];
}

function rmp_font_weight_options() {

    $unit_options = array( 
        '100' => '100',
        '200' => '200',
        '300' => '300',
        '400' => '400',
        '500' => '500',
        '600' => '600',
        '700' => '700',
        '800' => '800',
        '900' => '900',
        'normal'=>'Normal',
        'bold' => 'Bold',
        'bolder' => 'Bolder',
        'lighter' => 'Lighter',
        'initial' => 'Initial',
        'inherit' => 'Inherit',				  
    );

    $unit_options = apply_filters('rmp_font_weight_options', $unit_options );

    return $unit_options;
}

function rmp_hamburger_type_animation_options() {

    $type = array (
        'off'        => __( 'Off', 'responsive-menu-pro' ),
        'boring'     => __( 'Boring','responsive-menu-pro' ),
        '3dx'        => __( '3DX (PRO)','responsive-menu-pro' ),
        '3dx-r'      => __( '3DX Reverse (PRO)','responsive-menu-pro' ),
        '3dy'        => __( '3DY (PRO)','responsive-menu-pro' ),
        '3dy-r'      => __( '3DY Reverse (PRO)','responsive-menu-pro' ),
        'arrow'      => __( 'Arrow (PRO)','responsive-menu-pro' ),
        'arrow-r'    => __( 'Arrow Reverse (PRO)','responsive-menu-pro' ),
        'arrowalt'   => __( 'Arrow Alt (PRO)','responsive-menu-pro'),
        'arrowalt-r' => __( 'Arrow Alt Reverse (PRO)','responsive-menu-pro' ),
        'collapse'   => __('Collapse (PRO)','responsive-menu-pro' ),
        'collapse-r' => __('Collapse Reverse (PRO)','responsive-menu-pro' ),
        'elastic'    => __('Elastic (PRO)','responsive-menu-pro' ),
        'elastic-r'  => __('Elastic Reverse (PRO)','responsive-menu-pro' ),
        'emphatic'   => __( 'Emphatic (PRO)','responsive-menu-pro' ),
        'emphatic-r' => __('Emphatic Reverse (PRO)','responsive-menu-pro' ),
        'minus'      => __('Minus (PRO)','responsive-menu-pro' ),
        'slider'     => __('Slider (PRO)','responsive-menu-pro' ),
        'slider-r'   => __('Slider Reverse (PRO)','responsive-menu-pro' ),
        'spin'       => __('Spin (PRO)','responsive-menu-pro' ),
        'spin-r'     => __('Spin Reverse (PRO)','responsive-menu-pro' ),
        'spring'     => __('Spring (PRO)','responsive-menu-pro' ),
        'spring-r'   => __('Spring Reverse (PRO)','responsive-menu-pro' ),
        'stand'      => __('Stand (PRO)','responsive-menu-pro' ),
        'stand-r'    => __('Stand Reverse (PRO)','responsive-menu-pro' ),
        'squeeze'    => __('Squeeze (PRO)','responsive-menu-pro' ),
        'vortex'     => __('Vortex (PRO)','responsive-menu-pro' ),
        'vortex-r'   => __('Vortex Reverse (PRO)','responsive-menu-pro' )
    );

    $type = apply_filters('rmp_button_animation_type', $type );

    return $type;
}


/**
 * List of all available DashIcon classes.
 *
 * @since 1.0
 * @return array - Sorted list of icon classes
 */
function rmp_all_dash_icons() {

    $icons = array(
        'dash-f333' => 'dashicons-menu',
        'dash-f319' => 'dashicons-admin-site',
        'dash-f226' => 'dashicons-dashboard',
        'dash-f109' => 'dashicons-admin-post',
        'dash-f104' => 'dashicons-admin-media',
        'dash-f103' => 'dashicons-admin-links',
        'dash-f105' => 'dashicons-admin-page',
        'dash-f101' => 'dashicons-admin-comments',
        'dash-f100' => 'dashicons-admin-appearance',
        'dash-f106' => 'dashicons-admin-plugins',
        'dash-f110' => 'dashicons-admin-users',
        'dash-f107' => 'dashicons-admin-tools',
        'dash-f108' => 'dashicons-admin-settings',
        'dash-f112' => 'dashicons-admin-network',
        'dash-f102' => 'dashicons-admin-home',
        'dash-f111' => 'dashicons-admin-generic',
        'dash-f148' => 'dashicons-admin-collapse',
        'dash-f536' => 'dashicons-filter',
        'dash-f540' => 'dashicons-admin-editor',
        'dash-f541' => 'dashicons-admin-multisite',
        'dash-f119' => 'dashicons-welcome-write-blog',
        'dash-f133' => 'dashicons-welcome-add-page',
        'dash-f115' => 'dashicons-welcome-view-site',
        'dash-f116' => 'dashicons-welcome-widgets-menus',
        'dash-f117' => 'dashicons-welcome-comments',
        'dash-f118' => 'dashicons-welcome-learn-more',
        'dash-f123' => 'dashicons-format-aside',
        'dash-f128' => 'dashicons-format-image',
        'dash-f161' => 'dashicons-format-gallery',
        'dash-f126' => 'dashicons-format-video',
        'dash-f130' => 'dashicons-format-status',
        'dash-f122' => 'dashicons-format-quote',
        'dash-f125' => 'dashicons-format-chat',
        'dash-f127' => 'dashicons-format-audio',
        'dash-f306' => 'dashicons-camera',
        'dash-f232' => 'dashicons-images-alt',
        'dash-f233' => 'dashicons-images-alt2',
        'dash-f234' => 'dashicons-video-alt',
        'dash-f235' => 'dashicons-video-alt2',
        'dash-f236' => 'dashicons-video-alt3',
        'dash-f501' => 'dashicons-media-archive',
        'dash-f500' => 'dashicons-media-audio',
        'dash-f499' => 'dashicons-media-code',
        'dash-f498' => 'dashicons-media-default',
        'dash-f497' => 'dashicons-media-document',
        'dash-f496' => 'dashicons-media-interactive',
        'dash-f495' => 'dashicons-media-spreadsheet',
        'dash-f491' => 'dashicons-media-text',
        'dash-f490' => 'dashicons-media-video',
        'dash-f492' => 'dashicons-playlist-audio',
        'dash-f493' => 'dashicons-playlist-video',
        'dash-f522' => 'dashicons-controls-play',
        'dash-f523' => 'dashicons-controls-pause',
        'dash-f519' => 'dashicons-controls-forward',
        'dash-f517' => 'dashicons-controls-skipforward',
        'dash-f518' => 'dashicons-controls-back',
        'dash-f516' => 'dashicons-controls-skipback',
        'dash-f515' => 'dashicons-controls-repeat',
        'dash-f521' => 'dashicons-controls-volumeon',
        'dash-f520' => 'dashicons-controls-volumeoff',
        'dash-f165' => 'dashicons-image-crop',
        'dash-f531' => 'dashicons-image-rotate',
        'dash-f166' => 'dashicons-image-rotate-left',
        'dash-f167' => 'dashicons-image-rotate-right',
        'dash-f168' => 'dashicons-image-flip-vertical',
        'dash-f169' => 'dashicons-image-flip-horizontal',
        'dash-f533' => 'dashicons-image-filter',
        'dash-f171' => 'dashicons-undo',
        'dash-f172' => 'dashicons-redo',
        'dash-f200' => 'dashicons-editor-bold',
        'dash-f201' => 'dashicons-editor-italic',
        'dash-f203' => 'dashicons-editor-ul',
        'dash-f204' => 'dashicons-editor-ol',
        'dash-f205' => 'dashicons-editor-quote',
        'dash-f206' => 'dashicons-editor-alignleft',
        'dash-f207' => 'dashicons-editor-aligncenter',
        'dash-f208' => 'dashicons-editor-alignright',
        'dash-f209' => 'dashicons-editor-insertmore',
        'dash-f210' => 'dashicons-editor-spellcheck',
        'dash-f211' => 'dashicons-editor-expand',
        'dash-f506' => 'dashicons-editor-contract',
        'dash-f212' => 'dashicons-editor-kitchensink',
        'dash-f213' => 'dashicons-editor-underline',
        'dash-f214' => 'dashicons-editor-justify',
        'dash-f215' => 'dashicons-editor-textcolor',
        'dash-f216' => 'dashicons-editor-paste-word',
        'dash-f217' => 'dashicons-editor-paste-text',
        'dash-f218' => 'dashicons-editor-removeformatting',
        'dash-f219' => 'dashicons-editor-video',
        'dash-f220' => 'dashicons-editor-customchar',
        'dash-f221' => 'dashicons-editor-outdent',
        'dash-f222' => 'dashicons-editor-indent',
        'dash-f223' => 'dashicons-editor-help',
        'dash-f224' => 'dashicons-editor-strikethrough',
        'dash-f225' => 'dashicons-editor-unlink',
        'dash-f320' => 'dashicons-editor-rtl',
        'dash-f474' => 'dashicons-editor-break',
        'dash-f475' => 'dashicons-editor-code',
        'dash-f476' => 'dashicons-editor-paragraph',
        'dash-f535' => 'dashicons-editor-table',
        'dash-f135' => 'dashicons-align-left',
        'dash-f136' => 'dashicons-align-right',
        'dash-f134' => 'dashicons-align-center',
        'dash-f138' => 'dashicons-align-none',
        'dash-f160' => 'dashicons-lock',
        'dash-f528' => 'dashicons-unlock',
        'dash-f145' => 'dashicons-calendar',
        'dash-f508' => 'dashicons-calendar-alt',
        'dash-f177' => 'dashicons-visibility',
        'dash-f530' => 'dashicons-hidden',
        'dash-f173' => 'dashicons-post-status',
        'dash-f464' => 'dashicons-edit',
        'dash-f182' => 'dashicons-trash',
        'dash-f537' => 'dashicons-sticky',
        'dash-f504' => 'dashicons-external',
        'dash-f142' => 'dashicons-arrow-up',
        'dash-f140' => 'dashicons-arrow-down',
        'dash-f139' => 'dashicons-arrow-right',
        'dash-f141' => 'dashicons-arrow-left',
        'dash-f342' => 'dashicons-arrow-up-alt',
        'dash-f346' => 'dashicons-arrow-down-alt',
        'dash-f344' => 'dashicons-arrow-right-alt',
        'dash-f340' => 'dashicons-arrow-left-alt',
        'dash-f343' => 'dashicons-arrow-up-alt2',
        'dash-f347' => 'dashicons-arrow-down-alt2',
        'dash-f345' => 'dashicons-arrow-right-alt2',
        'dash-f341' => 'dashicons-arrow-left-alt2',
        'dash-f156' => 'dashicons-sort',
        'dash-f229' => 'dashicons-leftright',
        'dash-f503' => 'dashicons-randomize',
        'dash-f163' => 'dashicons-list-view',
        'dash-f164' => 'dashicons-exerpt-view',
        'dash-f509' => 'dashicons-grid-view',
        'dash-f237' => 'dashicons-share',
        'dash-f240' => 'dashicons-share-alt',
        'dash-f242' => 'dashicons-share-alt2',
        'dash-f301' => 'dashicons-twitter',
        'dash-f303' => 'dashicons-rss',
        'dash-f465' => 'dashicons-email',
        'dash-f466' => 'dashicons-email-alt',
        'dash-f304' => 'dashicons-facebook',
        'dash-f305' => 'dashicons-facebook-alt',
        'dash-f462' => 'dashicons-googleplus',
        'dash-f325' => 'dashicons-networking',
        'dash-f308' => 'dashicons-hammer',
        'dash-f309' => 'dashicons-art',
        'dash-f310' => 'dashicons-migrate',
        'dash-f311' => 'dashicons-performance',
        'dash-f483' => 'dashicons-universal-access',
        'dash-f507' => 'dashicons-universal-access-alt',
        'dash-f486' => 'dashicons-tickets',
        'dash-f484' => 'dashicons-nametag',
        'dash-f481' => 'dashicons-clipboard',
        'dash-f487' => 'dashicons-heart',
        'dash-f488' => 'dashicons-megaphone',
        'dash-f489' => 'dashicons-schedule',
        'dash-f120' => 'dashicons-wordpress',
        'dash-f324' => 'dashicons-wordpress-alt',
        'dash-f157' => 'dashicons-pressthis',
        'dash-f463' => 'dashicons-update',
        'dash-f180' => 'dashicons-screenoptions',
        'dash-f348' => 'dashicons-info',
        'dash-f174' => 'dashicons-cart',
        'dash-f175' => 'dashicons-feedback',
        'dash-f176' => 'dashicons-cloud',
        'dash-f326' => 'dashicons-translation',
        'dash-f323' => 'dashicons-tag',
        'dash-f318' => 'dashicons-category',
        'dash-f480' => 'dashicons-archive',
        'dash-f479' => 'dashicons-tagcloud',
        'dash-f478' => 'dashicons-text',
        'dash-f147' => 'dashicons-yes',
        'dash-f158' => 'dashicons-no',
        'dash-f335' => 'dashicons-no-alt',
        'dash-f132' => 'dashicons-plus',
        'dash-f502' => 'dashicons-plus-alt',
        'dash-f460' => 'dashicons-minus',
        'dash-f153' => 'dashicons-dismiss',
        'dash-f159' => 'dashicons-marker',
        'dash-f155' => 'dashicons-star-filled',
        'dash-f459' => 'dashicons-star-half',
        'dash-f154' => 'dashicons-star-empty',
        'dash-f227' => 'dashicons-flag',
        'dash-f534' => 'dashicons-warning',
        'dash-f230' => 'dashicons-location',
        'dash-f231' => 'dashicons-location-alt',
        'dash-f178' => 'dashicons-vault',
        'dash-f332' => 'dashicons-shield',
        'dash-f334' => 'dashicons-shield-alt',
        'dash-f468' => 'dashicons-sos',
        'dash-f179' => 'dashicons-search',
        'dash-f181' => 'dashicons-slides',
        'dash-f183' => 'dashicons-analytics',
        'dash-f184' => 'dashicons-chart-pie',
        'dash-f185' => 'dashicons-chart-bar',
        'dash-f238' => 'dashicons-chart-line',
        'dash-f239' => 'dashicons-chart-area',
        'dash-f307' => 'dashicons-groups',
        'dash-f338' => 'dashicons-businessman',
        'dash-f336' => 'dashicons-id',
        'dash-f337' => 'dashicons-id-alt',
        'dash-f312' => 'dashicons-products',
        'dash-f313' => 'dashicons-awards',
        'dash-f314' => 'dashicons-forms',
        'dash-f473' => 'dashicons-testimonial',
        'dash-f322' => 'dashicons-portfolio',
        'dash-f330' => 'dashicons-book',
        'dash-f331' => 'dashicons-book-alt',
        'dash-f316' => 'dashicons-download',
        'dash-f317' => 'dashicons-upload',
        'dash-f321' => 'dashicons-backup',
        'dash-f469' => 'dashicons-clock',
        'dash-f339' => 'dashicons-lightbulb',
        'dash-f482' => 'dashicons-microphone',
        'dash-f472' => 'dashicons-desktop',
        'dash-f471' => 'dashicons-tablet',
        'dash-f470' => 'dashicons-smartphone',
        'dash-f525' => 'dashicons-phone',
        'dash-f510' => 'dashicons-index-card',
        'dash-f511' => 'dashicons-carrot',
        'dash-f512' => 'dashicons-building',
        'dash-f513' => 'dashicons-store',
        'dash-f514' => 'dashicons-album',
        'dash-f527' => 'dashicons-palmtree',
        'dash-f524' => 'dashicons-tickets-alt',
        'dash-f526' => 'dashicons-money',
        'dash-f328' => 'dashicons-smiley',
        'dash-f529' => 'dashicons-thumbs-up',
        'dash-f542' => 'dashicons-thumbs-down',
        'dash-f538' => 'dashicons-layout',
        'dash-f452' => 'dashicons-buddicons-activity',
        'dash-f477' => 'dashicons-buddicons-bbpress-logo',
        'dash-f448' => 'dashicons-buddicons-buddypress-logo',
        'dash-f453' => 'dashicons-buddicons-community',
        'dash-f449' => 'dashicons-buddicons-forums',
        'dash-f454' => 'dashicons-buddicons-friends',
        'dash-f456' => 'dashicons-buddicons-groups',
        'dash-f457' => 'dashicons-buddicons-pm',
        'dash-f451' => 'dashicons-buddicons-replies',
        'dash-f450' => 'dashicons-buddicons-topics',
        'dash-f455' => 'dashicons-buddicons-tracking',
        'dash-f12c' => 'dashicons-editor-ol-rtl',
        'dash-f10c' => 'dashicons-editor-ltr',
        'dash-f10d' => 'dashicons-tide',
        'dash-f124' => 'dashicons-rest-api',
        'dash-f13a' => 'dashicons-code-standards',
        'dash-f11d' => 'dashicons-admin-site-alt',
        'dash-f11e' => 'dashicons-admin-site-alt2',
        'dash-f11f' => 'dashicons-admin-site-alt3',
        'dash-f228' => 'dashicons-menu-alt',
        'dash-f329' => 'dashicons-menu-alt2',
        'dash-f349' => 'dashicons-menu-alt3',
        'dash-f12d' => 'dashicons-instagram',
        'dash-f12f' => 'dashicons-businesswoman',
        'dash-f12e' => 'dashicons-businessperson',
        'dash-f467' => 'dashicons-email-alt2',
        'dash-f12a' => 'dashicons-yes-alt',
        'dash-f129' => 'dashicons-camera-alt',
        'dash-f485' => 'dashicons-plugins-checked',
        'dash-f113' => 'dashicons-update-alt',
        'dash-f121' => 'dashicons-text-page',
    );

    $icons = apply_filters( "rmp_dashicons", $icons );

    krsort( $icons );

    return $icons;
}


/**
 * List of all available glyphicon  classes.
 *
 * @since 1.0
 * @return array - Sorted list of icon classes
 */
function rmp_all_glyph_icons() {
    

    $glyph = array(
        'glyph-2a' => 'glyphicon-asterisk',
        'glyph-2b' => 'glyphicon-plus',
        'glyph-20ac' => 'glyphicon-eur',
        'glyph-2212' => 'glyphicon-minus',
        'glyph-2601' => 'glyphicon-cloud',
        'glyph-2709' => 'glyphicon-envelope',
        'glyph-270f' => 'glyphicon-pencil',
        'glyph-e001' => 'glyphicon-glass',
        'glyph-e002' => 'glyphicon-music',
        'glyph-e003' => 'glyphicon-search',
        'glyph-e005' => 'glyphicon-heart',
        'glyph-e006' => 'glyphicon-star',
        'glyph-e007' => 'glyphicon-star-empty',
        'glyph-e008' => 'glyphicon-user',
        'glyph-e009' => 'glyphicon-film',
        'glyph-e010' => 'glyphicon-th-large',
        'glyph-e011' => 'glyphicon-th',
        'glyph-e012' => 'glyphicon-th-list',
        'glyph-e013' => 'glyphicon-ok',
        'glyph-e014' => 'glyphicon-remove',
        'glyph-e015' => 'glyphicon-zoom-in',
        'glyph-e016' => 'glyphicon-zoom-out',
        'glyph-e017' => 'glyphicon-off',
        'glyph-e018' => 'glyphicon-signal',
        'glyph-e019' => 'glyphicon-cog',
        'glyph-e020' => 'glyphicon-trash',
        'glyph-e021' => 'glyphicon-home',
        'glyph-e022' => 'glyphicon-file',
        'glyph-e023' => 'glyphicon-time',
        'glyph-e024' => 'glyphicon-road',
        'glyph-e025' => 'glyphicon-download-alt',
        'glyph-e026' => 'glyphicon-download',
        'glyph-e027' => 'glyphicon-upload',
        'glyph-e028' => 'glyphicon-inbox',
        'glyph-e029' => 'glyphicon-play-circle',
        'glyph-e030' => 'glyphicon-repeat',
        'glyph-e031' => 'glyphicon-refresh',
        'glyph-e032' => 'glyphicon-list-alt',
        'glyph-e033' => 'glyphicon-lock',
        'glyph-e034' => 'glyphicon-flag',
        'glyph-e035' => 'glyphicon-headphones',
        'glyph-e036' => 'glyphicon-volume-off',
        'glyph-e037' => 'glyphicon-volume-down',
        'glyph-e038' => 'glyphicon-volume-up',
        'glyph-e039' => 'glyphicon-qrcode',
        'glyph-e040' => 'glyphicon-barcode',
        'glyph-e041' => 'glyphicon-tag',
        'glyph-e042' => 'glyphicon-tags',
        'glyph-e043' => 'glyphicon-book',
        'glyph-e044' => 'glyphicon-bookmark',
        'glyph-e045' => 'glyphicon-print',
        'glyph-e046' => 'glyphicon-camera',
        'glyph-e047' => 'glyphicon-font',
        'glyph-e048' => 'glyphicon-bold',
        'glyph-e049' => 'glyphicon-italic',
        'glyph-e050' => 'glyphicon-text-height',
        'glyph-e051' => 'glyphicon-text-width',
        'glyph-e052' => 'glyphicon-align-left',
        'glyph-e053' => 'glyphicon-align-center',
        'glyph-e054' => 'glyphicon-align-right',
        'glyph-e055' => 'glyphicon-align-justify',
        'glyph-e056' => 'glyphicon-list',
        'glyph-e057' => 'glyphicon-indent-left',
        'glyph-e058' => 'glyphicon-indent-right',
        'glyph-e059' => 'glyphicon-facetime-video',
        'glyph-e060' => 'glyphicon-picture',
        'glyph-e062' => 'glyphicon-map-marker',
        'glyph-e063' => 'glyphicon-adjust',
        'glyph-e064' => 'glyphicon-tint',
        'glyph-e065' => 'glyphicon-edit',
        'glyph-e066' => 'glyphicon-share',
        'glyph-e067' => 'glyphicon-check',
        'glyph-e068' => 'glyphicon-move',
        'glyph-e069' => 'glyphicon-step-backward',
        'glyph-e070' => 'glyphicon-fast-backward',
        'glyph-e071' => 'glyphicon-backward',
        'glyph-e072' => 'glyphicon-play',
        'glyph-e073' => 'glyphicon-pause',
        'glyph-e074' => 'glyphicon-stop',
        'glyph-e075' => 'glyphicon-forward',
        'glyph-e076' => 'glyphicon-fast-forward',
        'glyph-e077' => 'glyphicon-step-forward',
        'glyph-e078' => 'glyphicon-eject',
        'glyph-e079' => 'glyphicon-chevron-left',
        'glyph-e080' => 'glyphicon-chevron-right',
        'glyph-e081' => 'glyphicon-plus-sign',
        'glyph-e082' => 'glyphicon-minus-sign',
        'glyph-e083' => 'glyphicon-remove-sign',
        'glyph-e084' => 'glyphicon-ok-sign',
        'glyph-e085' => 'glyphicon-question-sign',
        'glyph-e086' => 'glyphicon-info-sign',
        'glyph-e087' => 'glyphicon-screenshot',
        'glyph-e088' => 'glyphicon-remove-circle',
        'glyph-e089' => 'glyphicon-ok-circle',
        'glyph-e090' => 'glyphicon-ban-circle',
        'glyph-e091' => 'glyphicon-arrow-left',
        'glyph-e092' => 'glyphicon-arrow-right',
        'glyph-e093' => 'glyphicon-arrow-up',
        'glyph-e094' => 'glyphicon-arrow-down',
        'glyph-e095' => 'glyphicon-share-alt',
        'glyph-e096' => 'glyphicon-resize-full',
        'glyph-e097' => 'glyphicon-resize-small',
        'glyph-e101' => 'glyphicon-exclamation-sign',
        'glyph-e102' => 'glyphicon-gift',
        'glyph-e103' => 'glyphicon-leaf',
        'glyph-e104' => 'glyphicon-fire',
        'glyph-e105' => 'glyphicon-eye-open',
        'glyph-e106' => 'glyphicon-eye-close',
        'glyph-e107' => 'glyphicon-warning-sign',
        'glyph-e108' => 'glyphicon-plane',
        'glyph-e109' => 'glyphicon-calendar',
        'glyph-e110' => 'glyphicon-random',
        'glyph-e111' => 'glyphicon-comment',
        'glyph-e112' => 'glyphicon-magnet',
        'glyph-e113' => 'glyphicon-chevron-up',
        'glyph-e114' => 'glyphicon-chevron-down',
        'glyph-e115' => 'glyphicon-retweet',
        'glyph-e116' => 'glyphicon-shopping-cart',
        'glyph-e117' => 'glyphicon-folder-close',
        'glyph-e118' => 'glyphicon-folder-open',
        'glyph-e119' => 'glyphicon-resize-vertical',
        'glyph-e120' => 'glyphicon-resize-horizontal',
        'glyph-e121' => 'glyphicon-hdd',
        'glyph-e122' => 'glyphicon-bullhorn',
        'glyph-e123' => 'glyphicon-bell',
        'glyph-e124' => 'glyphicon-certificate',
        'glyph-e125' => 'glyphicon-thumbs-up',
        'glyph-e126' => 'glyphicon-thumbs-down',
        'glyph-e127' => 'glyphicon-hand-right',
        'glyph-e128' => 'glyphicon-hand-left',
        'glyph-e129' => 'glyphicon-hand-up',
        'glyph-e130' => 'glyphicon-hand-down',
        'glyph-e131' => 'glyphicon-circle-arrow-right',
        'glyph-e132' => 'glyphicon-circle-arrow-left',
        'glyph-e133' => 'glyphicon-circle-arrow-up',
        'glyph-e134' => 'glyphicon-circle-arrow-down',
        'glyph-e135' => 'glyphicon-globe',
        'glyph-e136' => 'glyphicon-wrench',
        'glyph-e137' => 'glyphicon-tasks',
        'glyph-e138' => 'glyphicon-filter',
        'glyph-e139' => 'glyphicon-briefcase',
        'glyph-e140' => 'glyphicon-fullscreen',
        'glyph-e141' => 'glyphicon-dashboard',
        'glyph-e142' => 'glyphicon-paperclip',
        'glyph-e143' => 'glyphicon-heart-empty',
        'glyph-e144' => 'glyphicon-link',
        'glyph-e145' => 'glyphicon-phone',
        'glyph-e146' => 'glyphicon-pushpin',
        'glyph-e148' => 'glyphicon-usd',
        'glyph-e149' => 'glyphicon-gbp',
        'glyph-e150' => 'glyphicon-sort',
        'glyph-e151' => 'glyphicon-sort-by-alphabet',
        'glyph-e152' => 'glyphicon-sort-by-alphabet-alt',
        'glyph-e153' => 'glyphicon-sort-by-order',
        'glyph-e154' => 'glyphicon-sort-by-order-alt',
        'glyph-e155' => 'glyphicon-sort-by-attributes',
        'glyph-e156' => 'glyphicon-sort-by-attributes-alt',
        'glyph-e157' => 'glyphicon-unchecked',
        'glyph-e158' => 'glyphicon-expand',
        'glyph-e159' => 'glyphicon-collapse-down',
        'glyph-e160' => 'glyphicon-collapse-up',
        'glyph-e161' => 'glyphicon-log-in',
        'glyph-e162' => 'glyphicon-flash',
        'glyph-e163' => 'glyphicon-log-out',
        'glyph-e164' => 'glyphicon-new-window',
        'glyph-e165' => 'glyphicon-record',
        'glyph-e166' => 'glyphicon-save',
        'glyph-e167' => 'glyphicon-open',
        'glyph-e168' => 'glyphicon-saved',
        'glyph-e169' => 'glyphicon-import',
        'glyph-e170' => 'glyphicon-export',
        'glyph-e171' => 'glyphicon-send',
        'glyph-e172' => 'glyphicon-floppy-disk',
        'glyph-e173' => 'glyphicon-floppy-saved',
        'glyph-e174' => 'glyphicon-floppy-remove',
        'glyph-e175' => 'glyphicon-floppy-save',
        'glyph-e176' => 'glyphicon-floppy-open',
        'glyph-e177' => 'glyphicon-credit-card',
        'glyph-e178' => 'glyphicon-transfer',
        'glyph-e179' => 'glyphicon-cutlery',
        'glyph-e180' => 'glyphicon-header',
        'glyph-e181' => 'glyphicon-compressed',
        'glyph-e182' => 'glyphicon-earphone',
        'glyph-e183' => 'glyphicon-phone-alt',
        'glyph-e184' => 'glyphicon-tower',
        'glyph-e185' => 'glyphicon-stats',
        'glyph-e186' => 'glyphicon-sd-video',
        'glyph-e187' => 'glyphicon-hd-video',
        'glyph-e188' => 'glyphicon-subtitles',
        'glyph-e189' => 'glyphicon-sound-stereo',
        'glyph-e190' => 'glyphicon-sound-dolby',
        'glyph-e191' => 'glyphicon-sound-5-1',
        'glyph-e192' => 'glyphicon-sound-6-1',
        'glyph-e193' => 'glyphicon-sound-7-1',
        'glyph-e194' => 'glyphicon-copyright-mark',
        'glyph-e195' => 'glyphicon-registration-mark',
        'glyph-e197' => 'glyphicon-cloud-download',
        'glyph-e198' => 'glyphicon-cloud-upload',
        'glyph-e199' => 'glyphicon-tree-conifer',
        'glyph-e200' => 'glyphicon-tree-deciduous',
        'glyph-e201' => 'glyphicon-cd',
        'glyph-e202' => 'glyphicon-save-file',
        'glyph-e203' => 'glyphicon-open-file',
        'glyph-e204' => 'glyphicon-level-up',
        'glyph-e205' => 'glyphicon-copy',
        'glyph-e206' => 'glyphicon-paste',
        'glyph-e209' => 'glyphicon-alert',
        'glyph-e210' => 'glyphicon-equalizer',
        'glyph-e211' => 'glyphicon-king',
        'glyph-e212' => 'glyphicon-queen',
        'glyph-e213' => 'glyphicon-pawn',
        'glyph-e214' => 'glyphicon-bishop',
        'glyph-e215' => 'glyphicon-knight',
        'glyph-e216' => 'glyphicon-baby-formula',
        'glyph-26fa' => 'glyphicon-tent',
        'glyph-e218' => 'glyphicon-blackboard',
        'glyph-e219' => 'glyphicon-bed',
        'glyph-f8ff' => 'glyphicon-apple',
        'glyph-e221' => 'glyphicon-erase',
        'glyph-231b' => 'glyphicon-hourglass',
        'glyph-e223' => 'glyphicon-lamp',
        'glyph-e224' => 'glyphicon-duplicate',
        'glyph-e225' => 'glyphicon-piggy-bank',
        'glyph-e226' => 'glyphicon-scissors',
        'glyph-e227' => 'glyphicon-bitcoin',
        'glyph-0a5' => 'glyphicon-yen',
        'glyph-20bd' => 'glyphicon-ruble',
        'glyph-e230' => 'glyphicon-scale',
        'glyph-e231' => 'glyphicon-ice-lolly',
        'glyph-e232' => 'glyphicon-ice-lolly-tasted',
        'glyph-e233' => 'glyphicon-education',
        'glyph-e234' => 'glyphicon-option-horizontal',
        'glyph-e235' => 'glyphicon-option-vertical',
        'glyph-e236' => 'glyphicon-menu-hamburger',
        'glyph-e237' => 'glyphicon-modal-window',
        'glyph-e238' => 'glyphicon-oil',
        'glyph-e239' => 'glyphicon-grain',
        'glyph-e240' => 'glyphicon-sunglasses',
        'glyph-e241' => 'glyphicon-text-size',
        'glyph-e242' => 'glyphicon-text-color',
        'glyph-e243' => 'glyphicon-text-background',
        'glyph-e244' => 'glyphicon-object-align-top',
        'glyph-e245' => 'glyphicon-object-align-bottom',
        'glyph-e246' => 'glyphicon-object-align-horizontal',
        'glyph-e247' => 'glyphicon-object-align-left',
        'glyph-e248' => 'glyphicon-object-align-vertical',
        'glyph-e249' => 'glyphicon-object-align-right',
        'glyph-e250' => 'glyphicon-triangle-right',
        'glyph-e251' => 'glyphicon-triangle-left',
        'glyph-e252' => 'glyphicon-triangle-bottom',
        'glyph-e253' => 'glyphicon-triangle-top',
        'glyph-e254' => 'glyphicon-console',
        'glyph-e255' => 'glyphicon-superscript',
        'glyph-e256' => 'glyphicon-subscript',
        'glyph-e257' => 'glyphicon-menu-left',
        'glyph-e258' => 'glyphicon-menu-right',
        'glyph-e259' => 'glyphicon-menu-down',
        'glyph-e260' => 'glyphicon-menu-up',  
    );

    $glyph = apply_filters( "rmp_glyphicon", $glyph );
    krsort( $glyph );

    return $glyph;
}


/**
 * Get default options.
 * @since 4.0.0
 * 
 * @return array default_options list of option with default value.
 */
function rmp_get_default_options() {

    $default_options =  array (
       //Initial Setup -> Device breakpoints
       'mobile_breakpoint' => 600,
       'tablet_breakpoint' => 8000,

       //Initial Setup -> Menu settings
       'menu_name'                 => '',
       'menu_to_use'               => '',
       //'current_theme_location'    => 'off',
       'use_desktop_menu'          => 'on',
       'use_mobile_menu'           => 'on',
       'use_tablet_menu'           => 'on',
       'menu_display_on'           => 'all-pages',
       'menu_show_on_pages'        => '',
       'different_menu_for_mobile' => 'off',
       'menu_to_use_in_mobile'     => '',
       'menu_to_hide'              => '',

       //Container -> Title, Image
       'menu_title' => '',
       'menu_title_alignment' => 'left',
       'menu_title_font_size' => 14,
       'menu_title_font_size_unit' => 'px',
       'menu_title_colour' => '#fff', 
       'menu_title_hover_colour' => '#fff',
       'menu_title_background_colour' => '',
       'menu_title_background_hover_colour' => '#212121',
       'menu_title_link' => '#',
       'menu_title_link_location' => '_self',
       'menu_title_image_icon' => 'off',
       'menu_title_font_icon' => null,
       'menu_title_image' => '',
       'menu_title_image_alt' => '',
       'menu_title_image_height' => null,
       'menu_title_image_height_unit' => 'px',
       'menu_title_image_width' => null,
       'menu_title_image_width_unit' => '%',
       'menu_title_padding'  => [
           'left' => '0px',
           'top' => '0px',
           'right' => '0px',
           'bottom' => '0px'
       ],
       //Container -> Search box
       'menu_search_box_text'               => 'Search',
       'menu_search_box_text_colour'        => '#333',
       'menu_search_box_border_colour'      => '#dadada',
       'menu_search_box_background_colour'  => '#fff',
       'menu_search_box_placeholder_colour' => '#c7c7cd',
       'menu_search_box_height'             => '50',
       'menu_search_box_height_unit'        => 'px',
       'menu_search_box_border_radius'      => '0',
       'menu_search_section_padding'        => [
           'left' => '0px',
           'top' => '0px',
           'right' => '0px',
           'bottom' => '0px'
       ],

       //Container -> Additional
       'menu_additional_content'                => '',
       'menu_additional_content_colour'         => '#fff',
       'menu_additional_content_font_size'      => 16 ,
       'menu_additional_content_font_size_unit' => 'px',
       'menu_additional_content_alignment'      => 'left',
       'menu_additional_section_padding'  => [
           'left' => '0px',
           'top' => '0px',
           'right' => '0px',
           'bottom' => '0px'
       ],
       //Container -> Menu
       'menu_background_colour' => '',
       'menu_section_padding'        => [
           'left' => '0px',
           'top' => '0px',
           'right' => '0px',
           'bottom' => '0px'
       ],

       'menu_depth' => 5,
       'submenu_descriptions_on' => 'off',
       'menu_depth_side' => 'left',
       'menu_depth_0' => 5,
       'menu_depth_1' => 10,
       'menu_depth_2' => 15,
       'menu_depth_3' => 20,
       'menu_depth_4' => 25,
       'menu_depth_5' => 30,
       'menu_depth_0_unit' => '%',
       'menu_depth_1_unit' => '%',
       'menu_depth_2_unit' => '%',
       'menu_depth_3_unit' => '%',
       'menu_depth_4_unit' => '%',
       'menu_depth_5_unit' => '%',
       'theme_location_menu' => '',
       'custom_walker' => '',

       // Container > Appearance
       'menu_width'         => 75,
       'menu_width_unit'    => '%',
       'menu_maximum_width' => '',
       'menu_maximum_width_unit' => 'px',
       'menu_minimum_width' => '',
       'menu_minimum_width_unit' => 'px',
       'menu_auto_height' => 'off',
       'menu_container_background_colour' => '#212121',
       'menu_background_image' => '',
       'menu_appear_from' => 'left',
       'animation_type' => 'slide',
       'page_wrapper' => '',
       'menu_container_padding'  => [
           'left' => '0px',
           'top' => '0px',
           'right' => '0px',
           'bottom' => '0px'
       ],

       // Container > Behaviour
       'menu_close_on_link_click' => 'off',
       'menu_close_on_body_click' => 'off',
       'menu_close_on_scroll' => 'off',
       'enable_touch_gestures' => 'off',
       'keyboard_shortcut_open_menu' => '',
       'keyboard_shortcut_close_menu' => '',

       // Toggle Button > Hamburger Element
       'button_width' => 55,
       'button_width_unit' => 'px',
       'button_height' => 55,
       'button_height_unit' => 'px',
       'button_background_colour' => '#000',
       'button_background_colour_hover' => '#000',
       'button_background_colour_active' => '#000',
       'button_transparent_background' => 'off',

       // Toggle Button > Positioning
       'button_left_or_right' => 'right',
       'button_position_type' => 'fixed',
       'button_top' => 15,
       'button_top_unit' => 'px',
       'button_distance_from_side' => 5,
       'button_distance_from_side_unit' => '%',
       'button_push_with_animation' => 'off',


       // Toggle BUtton > Hamburger Type	
       'button_click_animation' => 'boring',
       'button_line_colour' => '#fff',
       'button_line_colour_hover' => '#fff',
       'button_line_colour_active' => '#fff',
       'button_line_margin' => 5,
       'button_line_margin_unit' => 'px',
       'button_line_height' => 3,
       'button_line_height_unit' => 'px',
       'button_line_width' => 25,
       'button_line_width_unit' => 'px',
       

       // Toggle BUtton > Title	
       'button_title' => '',
       'button_title_open' => '',
       'button_text_colour' => '#fff',
       'button_font_size' => 14,
       'button_font_size_unit' => 'px',
       'button_title_position' => 'left',
       'button_title_line_height' => '13',
       'button_title_line_height_unit' => 'px',
       'button_font' => null,

       // Toggle BUtton > Image
       'button_image' => null,
       'button_image_alt' => null,
       'button_image_when_clicked' => null,
       'button_image_alt_when_clicked' => null,

       // Toggle BUtton > Font-icons
       'button_font_icon' => null,
       'button_font_icon_when_clicked' => null,

       // Toggle Button > Others
       'button_trigger_type_click' => 'on',
       'button_trigger_type_hover' => 'off',
       'button_click_trigger' => '#responsive-menu-pro-button',
   


       // Dropdown -> Top level Menu -> Item Styling

       // Animation Settings
   
       'animation_speed' => 0.5,
       'transition_speed' => 0.5,
       'sub_menu_speed' => 0.2,

       // Menu Settings
       'active_arrow_shape' => '▲',
       'inactive_arrow_shape' => '▼',
       'active_arrow_image' => '',
       'active_arrow_image_alt' => '',
       'inactive_arrow_image' => '',
       'inactive_arrow_image_alt' => '',
       'active_arrow_font_icon' => '',
       'inactive_arrow_font_icon' => '',
       'arrow_position' => 'right',
       'submenu_arrow_width' => '40',
       'submenu_arrow_width_unit' => 'px',
       'submenu_arrow_height' => '39',
       'submenu_arrow_height_unit' => 'px',
   
       'accordion_animation' => 'off',
       'auto_expand_all_submenus' => 'off',
       'auto_expand_current_submenus' => 'off',

       
       'menu_item_background_colour' => '#212121',
       'menu_item_background_hover_colour' => '#3f3f3f',
       'menu_item_border_colour' => '#212121',
       'menu_item_border_colour_hover' => '#212121',
       

       'menu_current_item_background_colour' => '#212121',
       'menu_current_item_background_hover_colour' => '#3f3f3f',
       'menu_current_item_border_colour' => '#212121',
       'menu_current_item_border_hover_colour' => '#3f3f3f',
       
       'menu_link_colour' => '#fff',
       'menu_link_hover_colour' => '#fff',
       'menu_current_link_colour' => '#fff',
       'menu_current_link_hover_colour' => '#fff',
       'menu_sub_arrow_border_colour' => '#212121',
       'menu_sub_arrow_border_hover_colour' => '#3f3f3f',
       'menu_sub_arrow_border_colour_active' => '#212121',
       'menu_sub_arrow_border_hover_colour_active' => '#3f3f3f',
       'menu_sub_arrow_background_colour' => '#212121',
       'menu_sub_arrow_background_hover_colour' => '#3f3f3f',
       'menu_sub_arrow_background_colour_active' => '#212121',
       'menu_sub_arrow_background_hover_colour_active' => '#3f3f3f',
       'menu_sub_arrow_shape_colour' => '#fff',
       'menu_sub_arrow_shape_hover_colour' => '#fff',
       'menu_sub_arrow_shape_colour_active' => '#fff',
       'menu_sub_arrow_shape_hover_colour_active' => '#fff',

       // Sub Menus > Styling
       'submenu_font' => null,
       'submenu_font_size' => 13,
       'submenu_font_size_unit' => 'px',
       'submenu_links_height' => 40,
       'submenu_links_height_unit' => 'px',
       'submenu_links_line_height' => 40,
       'submenu_links_line_height_unit' => 'px',
       'submenu_text_alignment' => 'left',

       // Sub Menus > Item Borders
       'submenu_border_width' => 0,
       'submenu_border_width_unit' => 'px',
       'submenu_item_border_colour' => '#212121',
       'submenu_item_border_colour_hover' => '#212121',
       'submenu_current_item_border_colour' => '#212121',
       'submenu_current_item_border_hover_colour' => '#3f3f3f',

       // Sub Menus > Item Text
       'submenu_link_colour' => '#fff',
       'submenu_link_hover_colour' => '#fff',
       'submenu_current_link_colour' => '#fff',
       'submenu_current_link_hover_colour' => '#fff',

       // Sub Menus > Item Background
       'submenu_item_background_colour' => '#212121',
       'submenu_item_background_hover_colour' => '#3f3f3f',
       'submenu_current_item_background_colour' => '#212121',
       'submenu_current_item_background_hover_colour' => '#3f3f3f',

       // Sub Menus > Trigger Icon
       'submenu_arrow_position' => 'right',

       // Sub Menus > Trigger Sizing
       'submenu_submenu_arrow_height' => '39',
       'submenu_submenu_arrow_height_unit' => 'px',
       'submenu_submenu_arrow_width' => '40',
       'submenu_submenu_arrow_width_unit' => 'px',

       // Sub Menus > Trigger Colours
       'submenu_sub_arrow_shape_colour' => '#fff',
       'submenu_sub_arrow_shape_hover_colour' => '#fff',
       'submenu_sub_arrow_shape_colour_active' => '#fff',
       'submenu_sub_arrow_shape_hover_colour_active' => '#fff',

       // Sub Menus > Trigger Background
       'submenu_sub_arrow_background_colour' => '#212121',
       'submenu_sub_arrow_background_hover_colour' => '#3f3f3f',
       'submenu_sub_arrow_background_colour_active' => '#212121',
       'submenu_sub_arrow_background_hover_colour_active' => '#3f3f3f',

       // Sub Menus > Trigger Border
       'submenu_sub_arrow_border_colour' => '#212121',
       'submenu_sub_arrow_border_hover_colour' => '#3f3f3f',
       'submenu_sub_arrow_border_colour_active' => '#212121',
       'submenu_sub_arrow_border_hover_colour_active' => '#3f3f3f',

       'menu_font' => null,
       'menu_font_size' => 13,
       'menu_font_size_unit' => 'px',
       
       'menu_text_alignment' => 'left',
       'menu_links_height' => 40,
       'menu_links_height_unit' => 'px',
       'menu_links_line_height' => 40,
       'menu_links_line_height_unit' => 'px',
       'menu_border_width' => 0,
       'menu_border_width_unit' => 'px',


       // Container > Technical
   

       'menu_item_click_to_trigger_submenu' => 'off',
       'menu_disable_scrolling' => 'off',
       'menu_overlay' => 'off',
       'menu_overlay_colour' => 'rgba(0,0,0,0.7)',
       'menu_font_icons' => '',
       
       'menu_word_wrap' => 'off',

       'desktop_menu_positioning' => 'absolute',
       'desktop_menu_hide_and_show' => false,
       'desktop_submenu_open_on_click' => false,
       'desktop_submenu_open_animation' => '',
       'desktop_submenu_open_animation_speed' => '0ms',
       'desktop_menu_width' => '',
       'desktop_menu_width_unit' => '%',
       'desktop_menu_side' => 'left',

       'use_header_bar' => 'off',
       'header_bar_adjust_page' => null,
       'header_bar_breakpoint' => '8000',
       'header_bar_logo' => null,
       'header_bar_logo_height' => null,
       'header_bar_logo_height_unit' => 'px',
       'header_bar_logo_width' => null,
       'header_bar_logo_width_unit' => '%',
       'header_bar_logo_alt' => '',
       'header_bar_logo_link' => null,
       'header_bar_title' => null,
       'header_bar_html_content' => null,
       'header_bar_height' => '80',
       'header_bar_height_unit' => 'px',
       'header_bar_font_size' => '14',
       'header_bar_font_size_unit' => 'px',
       'header_bar_font' => null,
       'header_bar_background_color' => '#212121',
       'header_bar_text_color' => '#ffffff',
       'header_bar_position_type' => 'fixed',

       'header_bar_items_order' => [
           'title' => 'off',
           'search' => 'off',
           'additional content' => 'off',
           'logo'  => 'on',
           'menu' => 'on'
       ],

       'items_order' => [
           'title' => 'off',
           'menu'  => 'on',
           'search' => 'on',
           'additional content' => 'off'
       ],
       // Menu > Animations
       'smooth_scroll_on' => 'off',
       'smooth_scroll_speed' => 500,

       // Menu > Fade Items In
       'fade_submenus' => 'off',
       'fade_submenus_side' => 'left',
       'fade_submenus_delay' => 100,
       'fade_submenus_speed' => 500,

       'use_slide_effect' => 'off',
       'slide_effect_back_to_text' => 'Back',

       'theme_type' => 'default',
       'menu_theme' => null,

       'menu_display_device' => '',
       'menu_display_condition' => '',
       'menu_font_weight' => 'normal',
       'submenu_font_weight' => 'normal',
       'menu_text_letter_spacing' => '0',
       'submenu_text_letter_spacing' => '0',
    );

    return $default_options;
}
