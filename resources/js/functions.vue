<script>
export default {
    methods: {
        trans(string, params = []) {
            var str = _.get(window.i18n, string);

            _.forEach(params, function(value, key) {
                str = _.replace(str, ':' + key, value);
            });

            return str;
        },
        getCustomAttributes(attributes) {
        	var mapped_attr = _.reduce(attributes, function(result, attribute, key) {
						  result[attribute.key] = attribute.value;
						  return result;
						}, {});

        	return mapped_attr;
        },
        getFontAwesomeIcons() {
                //c = class name, l = label
                var icons = [
                    {"c":"fa-address-book","l":"address-book"},
                    {"c":"fa-address-card","l":"address-card"},
                    {"c":"fa-adjust","l":"adjust"},
                    {"c":"fa-align-center","l":"align-center"},
                    {"c":"fa-align-justify","l":"align-justify"},
                    {"c":"fa-align-left","l":"align-left"},
                    {"c":"fa-align-right","l":"align-right"},
                    {"c":"fa-ambulance","l":"ambulance"},
                    {"c":"fa-american-sign-language-interpreting","l":"american-sign-language-interpreting"},
                    {"c":"fa-anchor","l":"anchor"},
                    {"c":"fa-angle-double-down","l":"angle-double-down"},
                    {"c":"fa-angle-double-left","l":"angle-double-left"},
                    {"c":"fa-angle-double-right","l":"angle-double-right"},
                    {"c":"fa-angle-double-up","l":"angle-double-up"},
                    {"c":"fa-angle-down","l":"angle-down"},
                    {"c":"fa-angle-left","l":"angle-left"},
                    {"c":"fa-angle-right","l":"angle-right"},
                    {"c":"fa-angle-up","l":"angle-up"},
                    {"c":"fa-archive","l":"archive"},
                    {"c":"fa-arrow-alt-circle-down","l":"arrow-alt-circle-down"},
                    {"c":"fa-arrow-alt-circle-left","l":"arrow-alt-circle-left"},
                    {"c":"fa-arrow-alt-circle-right","l":"arrow-alt-circle-right"},
                    {"c":"fa-arrow-alt-circle-up","l":"arrow-alt-circle-up"},
                    {"c":"fa-arrow-circle-down","l":"arrow-circle-down"},
                    {"c":"fa-arrow-circle-left","l":"arrow-circle-left"},
                    {"c":"fa-arrow-circle-right","l":"arrow-circle-right"},
                    {"c":"fa-arrow-circle-up","l":"arrow-circle-up"},
                    {"c":"fa-arrow-down","l":"arrow-down"},
                    {"c":"fa-arrow-left","l":"arrow-left"},
                    {"c":"fa-arrow-right","l":"arrow-right"},
                    {"c":"fa-arrow-up","l":"arrow-up"},
                    {"c":"fa-arrows-alt","l":"arrows-alt"},
                    {"c":"fa-arrows-alt-h","l":"arrows-alt-h"},
                    {"c":"fa-arrows-alt-v","l":"arrows-alt-v"},
                    {"c":"fa-assistive-listening-systems","l":"assistive-listening-systems"},
                    {"c":"fa-asterisk","l":"asterisk"},
                    {"c":"fa-at","l":"at"},
                    {"c":"fa-audio-description","l":"audio-description"},
                    {"c":"fa-backward","l":"backward"},
                    {"c":"fa-balance-scale","l":"balance-scale"},
                    {"c":"fa-ban","l":"ban"},
                    {"c":"fa-barcode","l":"barcode"},
                    {"c":"fa-bars","l":"bars"},
                    {"c":"fa-bath","l":"bath"},
                    {"c":"fa-battery-empty","l":"battery-empty"},
                    {"c":"fa-battery-full","l":"battery-full"},
                    {"c":"fa-battery-half","l":"battery-half"},
                    {"c":"fa-battery-quarter","l":"battery-quarter"},
                    {"c":"fa-battery-three-quarters","l":"battery-three-quarters"},
                    {"c":"fa-bed","l":"bed"},
                    {"c":"fa-beer","l":"beer"},
                    {"c":"fa-bell","l":"bell"},
                    {"c":"fa-bell-slash","l":"bell-slash"},
                    {"c":"fa-bicycle","l":"bicycle"},
                    {"c":"fa-binoculars","l":"binoculars"},
                    {"c":"fa-birthday-cake","l":"birthday-cake"},
                    {"c":"fa-blind","l":"blind"},
                    {"c":"fa-bold","l":"bold"},
                    {"c":"fa-bolt","l":"bolt"},
                    {"c":"fa-bomb","l":"bomb"},
                    {"c":"fa-book","l":"book"},
                    {"c":"fa-bookmark","l":"bookmark"},
                    {"c":"fa-braille","l":"braille"},
                    {"c":"fa-briefcase","l":"briefcase"},
                    {"c":"fa-bug","l":"bug"},
                    {"c":"fa-building","l":"building"},
                    {"c":"fa-bullhorn","l":"bullhorn"},
                    {"c":"fa-bullseye","l":"bullseye"},
                    {"c":"fa-bus","l":"bus"},
                    {"c":"fa-calculator","l":"calculator"},
                    {"c":"fa-calendar","l":"calendar"},
                    {"c":"fa-calendar-alt","l":"calendar-alt"},
                    {"c":"fa-calendar-check","l":"calendar-check"},
                    {"c":"fa-calendar-minus","l":"calendar-minus"},
                    {"c":"fa-calendar-plus","l":"calendar-plus"},
                    {"c":"fa-calendar-times","l":"calendar-times"},
                    {"c":"fa-camera","l":"camera"},
                    {"c":"fa-camera-retro","l":"camera-retro"},
                    {"c":"fa-car","l":"car"},
                    {"c":"fa-caret-down","l":"caret-down"},
                    {"c":"fa-caret-left","l":"caret-left"},
                    {"c":"fa-caret-right","l":"caret-right"},
                    {"c":"fa-caret-square-down","l":"caret-square-down"},
                    {"c":"fa-caret-square-left","l":"caret-square-left"},
                    {"c":"fa-caret-square-right","l":"caret-square-right"},
                    {"c":"fa-caret-square-up","l":"caret-square-up"},
                    {"c":"fa-caret-up","l":"caret-up"},
                    {"c":"fa-cart-arrow-down","l":"cart-arrow-down"},
                    {"c":"fa-cart-plus","l":"cart-plus"},
                    {"c":"fa-certificate","l":"certificate"},
                    {"c":"fa-chart-area","l":"chart-area"},
                    {"c":"fa-chart-bar","l":"chart-bar"},
                    {"c":"fa-chart-line","l":"chart-line"},
                    {"c":"fa-chart-pie","l":"chart-pie"},
                    {"c":"fa-check","l":"check"},
                    {"c":"fa-check-circle","l":"check-circle"},
                    {"c":"fa-check-square","l":"check-square"},
                    {"c":"fa-chevron-circle-down","l":"chevron-circle-down"},
                    {"c":"fa-chevron-circle-left","l":"chevron-circle-left"},
                    {"c":"fa-chevron-circle-right","l":"chevron-circle-right"},
                    {"c":"fa-chevron-circle-up","l":"chevron-circle-up"},
                    {"c":"fa-chevron-down","l":"chevron-down"},
                    {"c":"fa-chevron-left","l":"chevron-left"},
                    {"c":"fa-chevron-right","l":"chevron-right"},
                    {"c":"fa-chevron-up","l":"chevron-up"},
                    {"c":"fa-child","l":"child"},
                    {"c":"fa-circle","l":"circle"},
                    {"c":"fa-circle-notch","l":"circle-notch"},
                    {"c":"fa-clipboard","l":"clipboard"},
                    {"c":"fa-clock","l":"clock"},
                    {"c":"fa-clone","l":"clone"},
                    {"c":"fa-closed-captioning","l":"closed-captioning"},
                    {"c":"fa-cloud","l":"cloud"},
                    {"c":"fa-cloud-download-alt","l":"cloud-download-alt"},
                    {"c":"fa-cloud-upload-alt","l":"cloud-upload-alt"},
                    {"c":"fa-code","l":"code"},
                    {"c":"fa-code-branch","l":"code-branch"},
                    {"c":"fa-coffee","l":"coffee"},
                    {"c":"fa-cog","l":"cog"},
                    {"c":"fa-cogs","l":"cogs"},
                    {"c":"fa-columns","l":"columns"},
                    {"c":"fa-comment","l":"comment"},
                    {"c":"fa-comment-alt","l":"comment-alt"},
                    {"c":"fa-comments","l":"comments"},
                    {"c":"fa-compass","l":"compass"},
                    {"c":"fa-compress","l":"compress"},
                    {"c":"fa-copy","l":"copy"},
                    {"c":"fa-copyright","l":"copyright"},
                    {"c":"fa-credit-card","l":"credit-card"},
                    {"c":"fa-crop","l":"crop"},
                    {"c":"fa-crosshairs","l":"crosshairs"},
                    {"c":"fa-cube","l":"cube"},
                    {"c":"fa-cubes","l":"cubes"},
                    {"c":"fa-cut","l":"cut"},
                    {"c":"fa-database","l":"database"},
                    {"c":"fa-deaf","l":"deaf"},
                    {"c":"fa-desktop","l":"desktop"},
                    {"c":"fa-dollar-sign","l":"dollar-sign"},
                    {"c":"fa-dot-circle","l":"dot-circle"},
                    {"c":"fa-download","l":"download"},
                    {"c":"fa-edit","l":"edit"},
                    {"c":"fa-eject","l":"eject"},
                    {"c":"fa-ellipsis-h","l":"ellipsis-h"},
                    {"c":"fa-ellipsis-v","l":"ellipsis-v"},
                    {"c":"fa-envelope","l":"envelope"},
                    {"c":"fa-envelope-open","l":"envelope-open"},
                    {"c":"fa-envelope-square","l":"envelope-square"},
                    {"c":"fa-eraser","l":"eraser"},
                    {"c":"fa-euro-sign","l":"euro-sign"},
                    {"c":"fa-exchange-alt","l":"exchange-alt"},
                    {"c":"fa-exclamation","l":"exclamation"},
                    {"c":"fa-exclamation-circle","l":"exclamation-circle"},
                    {"c":"fa-exclamation-triangle","l":"exclamation-triangle"},
                    {"c":"fa-expand","l":"expand"},
                    {"c":"fa-expand-arrows-alt","l":"expand-arrows-alt"},
                    {"c":"fa-external-link-alt","l":"external-link-alt"},
                    {"c":"fa-external-link-square-alt","l":"external-link-square-alt"},
                    {"c":"fa-eye","l":"eye"},
                    {"c":"fa-eye-dropper","l":"eye-dropper"},
                    {"c":"fa-eye-slash","l":"eye-slash"},
                    {"c":"fa-fast-backward","l":"fast-backward"},
                    {"c":"fa-fast-forward","l":"fast-forward"},
                    {"c":"fa-fax","l":"fax"},
                    {"c":"fa-female","l":"female"},
                    {"c":"fa-fighter-jet","l":"fighter-jet"},
                    {"c":"fa-file","l":"file"},
                    {"c":"fa-file-alt","l":"file-alt"},
                    {"c":"fa-file-archive","l":"file-archive"},
                    {"c":"fa-file-audio","l":"file-audio"},
                    {"c":"fa-file-code","l":"file-code"},
                    {"c":"fa-file-excel","l":"file-excel"},
                    {"c":"fa-file-image","l":"file-image"},
                    {"c":"fa-file-pdf","l":"file-pdf"},
                    {"c":"fa-file-powerpoint","l":"file-powerpoint"},
                    {"c":"fa-file-video","l":"file-video"},
                    {"c":"fa-file-word","l":"file-word"},
                    {"c":"fa-film","l":"film"},
                    {"c":"fa-filter","l":"filter"},
                    {"c":"fa-fire","l":"fire"},
                    {"c":"fa-fire-extinguisher","l":"fire-extinguisher"},
                    {"c":"fa-flag","l":"flag"},
                    {"c":"fa-flag-checkered","l":"flag-checkered"},
                    {"c":"fa-flask","l":"flask"},
                    {"c":"fa-folder","l":"folder"},
                    {"c":"fa-folder-open","l":"folder-open"},
                    {"c":"fa-font","l":"font"},
                    {"c":"fa-forward","l":"forward"},
                    {"c":"fa-frown","l":"frown"},
                    {"c":"fa-futbol","l":"futbol"},
                    {"c":"fa-gamepad","l":"gamepad"},
                    {"c":"fa-gavel","l":"gavel"},
                    {"c":"fa-gem","l":"gem"},
                    {"c":"fa-genderless","l":"genderless"},
                    {"c":"fa-gift","l":"gift"},
                    {"c":"fa-glass-martini","l":"glass-martini"},
                    {"c":"fa-globe","l":"globe"},
                    {"c":"fa-graduation-cap","l":"graduation-cap"},
                    {"c":"fa-h-square","l":"h-square"},
                    {"c":"fa-hand-lizard","l":"hand-lizard"},
                    {"c":"fa-hand-paper","l":"hand-paper"},
                    {"c":"fa-hand-peace","l":"hand-peace"},
                    {"c":"fa-hand-point-down","l":"hand-point-down"},
                    {"c":"fa-hand-point-left","l":"hand-point-left"},
                    {"c":"fa-hand-point-right","l":"hand-point-right"},
                    {"c":"fa-hand-point-up","l":"hand-point-up"},
                    {"c":"fa-hand-pointer","l":"hand-pointer"},
                    {"c":"fa-hand-rock","l":"hand-rock"},
                    {"c":"fa-hand-scissors","l":"hand-scissors"},
                    {"c":"fa-hand-spock","l":"hand-spock"},
                    {"c":"fa-handshake","l":"handshake"},
                    {"c":"fa-hashtag","l":"hashtag"},
                    {"c":"fa-hdd","l":"hdd"},
                    {"c":"fa-heading","l":"heading"},
                    {"c":"fa-headphones","l":"headphones"},
                    {"c":"fa-heart","l":"heart"},
                    {"c":"fa-heartbeat","l":"heartbeat"},
                    {"c":"fa-history","l":"history"},
                    {"c":"fa-home","l":"home"},
                    {"c":"fa-hospital","l":"hospital"},
                    {"c":"fa-hourglass","l":"hourglass"},
                    {"c":"fa-hourglass-end","l":"hourglass-end"},
                    {"c":"fa-hourglass-half","l":"hourglass-half"},
                    {"c":"fa-hourglass-start","l":"hourglass-start"},
                    {"c":"fa-i-cursor","l":"i-cursor"},
                    {"c":"fa-id-badge","l":"id-badge"},
                    {"c":"fa-id-card","l":"id-card"},
                    {"c":"fa-image","l":"image"},
                    {"c":"fa-images","l":"images"},
                    {"c":"fa-inbox","l":"inbox"},
                    {"c":"fa-indent","l":"indent"},
                    {"c":"fa-industry","l":"industry"},
                    {"c":"fa-info","l":"info"},
                    {"c":"fa-info-circle","l":"info-circle"},
                    {"c":"fa-italic","l":"italic"},
                    {"c":"fa-key","l":"key"},
                    {"c":"fa-keyboard","l":"keyboard"},
                    {"c":"fa-language","l":"language"},
                    {"c":"fa-laptop","l":"laptop"},
                    {"c":"fa-leaf","l":"leaf"},
                    {"c":"fa-lemon","l":"lemon"},
                    {"c":"fa-level-down-alt","l":"level-down-alt"},
                    {"c":"fa-level-up-alt","l":"level-up-alt"},
                    {"c":"fa-life-ring","l":"life-ring"},
                    {"c":"fa-lightbulb","l":"lightbulb"},
                    {"c":"fa-link","l":"link"},
                    {"c":"fa-lira-sign","l":"lira-sign"},
                    {"c":"fa-list","l":"list"},
                    {"c":"fa-list-alt","l":"list-alt"},
                    {"c":"fa-list-ol","l":"list-ol"},
                    {"c":"fa-list-ul","l":"list-ul"},
                    {"c":"fa-location-arrow","l":"location-arrow"},
                    {"c":"fa-lock","l":"lock"},
                    {"c":"fa-lock-open","l":"lock-open"},
                    {"c":"fa-long-arrow-alt-down","l":"long-arrow-alt-down"},
                    {"c":"fa-long-arrow-alt-left","l":"long-arrow-alt-left"},
                    {"c":"fa-long-arrow-alt-right","l":"long-arrow-alt-right"},
                    {"c":"fa-long-arrow-alt-up","l":"long-arrow-alt-up"},
                    {"c":"fa-low-vision","l":"low-vision"},
                    {"c":"fa-magic","l":"magic"},
                    {"c":"fa-magnet","l":"magnet"},
                    {"c":"fa-male","l":"male"},
                    {"c":"fa-map","l":"map"},
                    {"c":"fa-map-marker","l":"map-marker"},
                    {"c":"fa-map-marker-alt","l":"map-marker-alt"},
                    {"c":"fa-map-pin","l":"map-pin"},
                    {"c":"fa-map-signs","l":"map-signs"},
                    {"c":"fa-mars","l":"mars"},
                    {"c":"fa-mars-double","l":"mars-double"},
                    {"c":"fa-mars-stroke","l":"mars-stroke"},
                    {"c":"fa-mars-stroke-h","l":"mars-stroke-h"},
                    {"c":"fa-mars-stroke-v","l":"mars-stroke-v"},
                    {"c":"fa-medkit","l":"medkit"},
                    {"c":"fa-meh","l":"meh"},
                    {"c":"fa-mercury","l":"mercury"},
                    {"c":"fa-microchip","l":"microchip"},
                    {"c":"fa-microphone","l":"microphone"},
                    {"c":"fa-microphone-slash","l":"microphone-slash"},
                    {"c":"fa-minus","l":"minus"},
                    {"c":"fa-minus-circle","l":"minus-circle"},
                    {"c":"fa-minus-square","l":"minus-square"},
                    {"c":"fa-mobile","l":"mobile"},
                    {"c":"fa-mobile-alt","l":"mobile-alt"},
                    {"c":"fa-money-bill-alt","l":"money-bill-alt"},
                    {"c":"fa-moon","l":"moon"},
                    {"c":"fa-motorcycle","l":"motorcycle"},
                    {"c":"fa-mouse-pointer","l":"mouse-pointer"},
                    {"c":"fa-music","l":"music"},
                    {"c":"fa-neuter","l":"neuter"},
                    {"c":"fa-newspaper","l":"newspaper"},
                    {"c":"fa-object-group","l":"object-group"},
                    {"c":"fa-object-ungroup","l":"object-ungroup"},
                    {"c":"fa-outdent","l":"outdent"},
                    {"c":"fa-paint-brush","l":"paint-brush"},
                    {"c":"fa-paper-plane","l":"paper-plane"},
                    {"c":"fa-paperclip","l":"paperclip"},
                    {"c":"fa-paragraph","l":"paragraph"},
                    {"c":"fa-paste","l":"paste"},
                    {"c":"fa-pause","l":"pause"},
                    {"c":"fa-pause-circle","l":"pause-circle"},
                    {"c":"fa-paw","l":"paw"},
                    {"c":"fa-pen-square","l":"pen-square"},
                    {"c":"fa-pencil-alt","l":"pencil-alt"},
                    {"c":"fa-percent","l":"percent"},
                    {"c":"fa-phone","l":"phone"},
                    {"c":"fa-phone-square","l":"phone-square"},
                    {"c":"fa-phone-volume","l":"phone-volume"},
                    {"c":"fa-plane","l":"plane"},
                    {"c":"fa-play","l":"play"},
                    {"c":"fa-play-circle","l":"play-circle"},
                    {"c":"fa-plug","l":"plug"},
                    {"c":"fa-plus","l":"plus"},
                    {"c":"fa-plus-circle","l":"plus-circle"},
                    {"c":"fa-plus-square","l":"plus-square"},
                    {"c":"fa-podcast","l":"podcast"},
                    {"c":"fa-pound-sign","l":"pound-sign"},
                    {"c":"fa-power-off","l":"power-off"},
                    {"c":"fa-print","l":"print"},
                    {"c":"fa-puzzle-piece","l":"puzzle-piece"},
                    {"c":"fa-qrcode","l":"qrcode"},
                    {"c":"fa-question","l":"question"},
                    {"c":"fa-question-circle","l":"question-circle"},
                    {"c":"fa-quote-left","l":"quote-left"},
                    {"c":"fa-quote-right","l":"quote-right"},
                    {"c":"fa-random","l":"random"},
                    {"c":"fa-recycle","l":"recycle"},
                    {"c":"fa-redo","l":"redo"},
                    {"c":"fa-redo-alt","l":"redo-alt"},
                    {"c":"fa-registered","l":"registered"},
                    {"c":"fa-reply","l":"reply"},
                    {"c":"fa-reply-all","l":"reply-all"},
                    {"c":"fa-retweet","l":"retweet"},
                    {"c":"fa-road","l":"road"},
                    {"c":"fa-rocket","l":"rocket"},
                    {"c":"fa-rss","l":"rss"},
                    {"c":"fa-rss-square","l":"rss-square"},
                    {"c":"fa-ruble-sign","l":"ruble-sign"},
                    {"c":"fa-rupee-sign","l":"rupee-sign"},
                    {"c":"fa-save","l":"save"},
                    {"c":"fa-search","l":"search"},
                    {"c":"fa-search-minus","l":"search-minus"},
                    {"c":"fa-search-plus","l":"search-plus"},
                    {"c":"fa-server","l":"server"},
                    {"c":"fa-share","l":"share"},
                    {"c":"fa-share-alt","l":"share-alt"},
                    {"c":"fa-share-alt-square","l":"share-alt-square"},
                    {"c":"fa-share-square","l":"share-square"},
                    {"c":"fa-shekel-sign","l":"shekel-sign"},
                    {"c":"fa-shield-alt","l":"shield-alt"},
                    {"c":"fa-ship","l":"ship"},
                    {"c":"fa-shopping-bag","l":"shopping-bag"},
                    {"c":"fa-shopping-basket","l":"shopping-basket"},
                    {"c":"fa-shopping-cart","l":"shopping-cart"},
                    {"c":"fa-shower","l":"shower"},
                    {"c":"fa-sign-in-alt","l":"sign-in-alt"},
                    {"c":"fa-sign-language","l":"sign-language"},
                    {"c":"fa-sign-out-alt","l":"sign-out-alt"},
                    {"c":"fa-signal","l":"signal"},
                    {"c":"fa-sitemap","l":"sitemap"},
                    {"c":"fa-sliders-h","l":"sliders-h"},
                    {"c":"fa-smile","l":"smile"},
                    {"c":"fa-snowflake","l":"snowflake"},
                    {"c":"fa-sort","l":"sort"},
                    {"c":"fa-sort-alpha-down","l":"sort-alpha-down"},
                    {"c":"fa-sort-alpha-up","l":"sort-alpha-up"},
                    {"c":"fa-sort-amount-down","l":"sort-amount-down"},
                    {"c":"fa-sort-amount-up","l":"sort-amount-up"},
                    {"c":"fa-sort-down","l":"sort-down"},
                    {"c":"fa-sort-numeric-down","l":"sort-numeric-down"},
                    {"c":"fa-sort-numeric-up","l":"sort-numeric-up"},
                    {"c":"fa-sort-up","l":"sort-up"},
                    {"c":"fa-space-shuttle","l":"space-shuttle"},
                    {"c":"fa-spinner","l":"spinner"},
                    {"c":"fa-square","l":"square"},
                    {"c":"fa-star","l":"star"},
                    {"c":"fa-star-half","l":"star-half"},
                    {"c":"fa-step-backward","l":"step-backward"},
                    {"c":"fa-step-forward","l":"step-forward"},
                    {"c":"fa-stethoscope","l":"stethoscope"},
                    {"c":"fa-sticky-note","l":"sticky-note"},
                    {"c":"fa-stop","l":"stop"},
                    {"c":"fa-stop-circle","l":"stop-circle"},
                    {"c":"fa-stopwatch","l":"stopwatch"},
                    {"c":"fa-street-view","l":"street-view"},
                    {"c":"fa-strikethrough","l":"strikethrough"},
                    {"c":"fa-subscript","l":"subscript"},
                    {"c":"fa-subway","l":"subway"},
                    {"c":"fa-suitcase","l":"suitcase"},
                    {"c":"fa-sun","l":"sun"},
                    {"c":"fa-superscript","l":"superscript"},
                    {"c":"fa-sync","l":"sync"},
                    {"c":"fa-sync-alt","l":"sync-alt"},
                    {"c":"fa-table","l":"table"},
                    {"c":"fa-tablet","l":"tablet"},
                    {"c":"fa-tablet-alt","l":"tablet-alt"},
                    {"c":"fa-tachometer-alt","l":"tachometer-alt"},
                    {"c":"fa-tag","l":"tag"},
                    {"c":"fa-tags","l":"tags"},
                    {"c":"fa-tasks","l":"tasks"},
                    {"c":"fa-taxi","l":"taxi"},
                    {"c":"fa-terminal","l":"terminal"},
                    {"c":"fa-text-height","l":"text-height"},
                    {"c":"fa-text-width","l":"text-width"},
                    {"c":"fa-th","l":"th"},
                    {"c":"fa-th-large","l":"th-large"},
                    {"c":"fa-th-list","l":"th-list"},
                    {"c":"fa-thermometer-empty","l":"thermometer-empty"},
                    {"c":"fa-thermometer-full","l":"thermometer-full"},
                    {"c":"fa-thermometer-half","l":"thermometer-half"},
                    {"c":"fa-thermometer-quarter","l":"thermometer-quarter"},
                    {"c":"fa-thermometer-three-quarters","l":"thermometer-three-quarters"},
                    {"c":"fa-thumbs-down","l":"thumbs-down"},
                    {"c":"fa-thumbs-up","l":"thumbs-up"},
                    {"c":"fa-thumbtack","l":"thumbtack"},
                    {"c":"fa-ticket-alt","l":"ticket-alt"},
                    {"c":"fa-times","l":"times"},
                    {"c":"fa-times-circle","l":"times-circle"},
                    {"c":"fa-tint","l":"tint"},
                    {"c":"fa-toggle-off","l":"toggle-off"},
                    {"c":"fa-toggle-on","l":"toggle-on"},
                    {"c":"fa-trademark","l":"trademark"},
                    {"c":"fa-train","l":"train"},
                    {"c":"fa-transgender","l":"transgender"},
                    {"c":"fa-transgender-alt","l":"transgender-alt"},
                    {"c":"fa-trash","l":"trash"},
                    {"c":"fa-trash-alt","l":"trash-alt"},
                    {"c":"fa-tree","l":"tree"},
                    {"c":"fa-trophy","l":"trophy"},
                    {"c":"fa-truck","l":"truck"},
                    {"c":"fa-tty","l":"tty"},
                    {"c":"fa-tv","l":"tv"},
                    {"c":"fa-umbrella","l":"umbrella"},
                    {"c":"fa-underline","l":"underline"},
                    {"c":"fa-undo","l":"undo"},
                    {"c":"fa-undo-alt","l":"undo-alt"},
                    {"c":"fa-universal-access","l":"universal-access"},
                    {"c":"fa-university","l":"university"},
                    {"c":"fa-unlink","l":"unlink"},
                    {"c":"fa-unlock","l":"unlock"},
                    {"c":"fa-unlock-alt","l":"unlock-alt"},
                    {"c":"fa-upload","l":"upload"},
                    {"c":"fa-user","l":"user"},
                    {"c":"fa-user-circle","l":"user-circle"},
                    {"c":"fa-user-md","l":"user-md"},
                    {"c":"fa-user-plus","l":"user-plus"},
                    {"c":"fa-user-secret","l":"user-secret"},
                    {"c":"fa-user-times","l":"user-times"},
                    {"c":"fa-users","l":"users"},
                    {"c":"fa-utensil-spoon","l":"utensil-spoon"},
                    {"c":"fa-utensils","l":"utensils"},
                    {"c":"fa-venus","l":"venus"},
                    {"c":"fa-venus-double","l":"venus-double"},
                    {"c":"fa-venus-mars","l":"venus-mars"},
                    {"c":"fa-video","l":"video"},
                    {"c":"fa-volume-down","l":"volume-down"},
                    {"c":"fa-volume-off","l":"volume-off"},
                    {"c":"fa-volume-up","l":"volume-up"},
                    {"c":"fa-wheelchair","l":"wheelchair"},
                    {"c":"fa-wifi","l":"wifi"},
                    {"c":"fa-window-close","l":"window-close"},
                    {"c":"fa-window-maximize","l":"window-maximize"},
                    {"c":"fa-window-minimize","l":"window-minimize"},
                    {"c":"fa-window-restore","l":"window-restore"},
                    {"c":"fa-won-sign","l":"won-sign"},
                    {"c":"fa-wrench","l":"wrench"},
                    {"c":"fa-yen-sign","l":"yen-sign"},
                ];

            return icons;
        },
        generateRandomString(length=16) {
            //characters to be included in string
            const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = ' ';
            const charactersLength = characters.length;
            for ( let i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        },
        reInitializePlugins(element){
            const self = this;
            if(element.type == 'countdown') {
                jQuery("#"+element.name).countdowntimer("destroy");
                setTimeout(function(){
                    initialize_countdowntimer(element);
                }, 2000); //initialize after 2 sec
            }
        }
    },
};
</script>