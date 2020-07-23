// 'use strict';

let map_styles = [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#b2b2b2"
      }
    ]
  },

  // labels
    {
      "elementType": "labels",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#f5f5f5"
        }
      ]
    },

  // administrative
    {
      "featureType": "administrative",
      "stylers": [
        {
          "saturation": 5
        },
        {
          "lightness": 100
        }
      ]
    },
    {
      "featureType": "administrative",
      "elementType": "geometry",
      "stylers": [
        {
          // "visibility": "on"
        }
      ]
    },
    {
      "featureType": "administrative.country",
      "elementType": "geometry.stroke",
      "stylers": [
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "administrative.province",
      "elementType": "geometry.stroke",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "administrative.locality",
      "elementType": "geometry.stroke",
      "stylers": [
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "administrative.neighborhood",
      "elementType": "geometry.stroke",
      "stylers": [
        {
          "visibility": "on"
        }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "elementType": "geometry.stroke",
      "stylers": [
        {
          "visibility": "on"
        }
      ]
    },

  // poi
    {
      "featureType": "poi",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#eeeeee"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5e5e5"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },

  // road
    {
      "featureType": "road",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#ffffff"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#dadada"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },

  // transit
    {
      "featureType": "transit",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "transit.line",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5e5e5"
        }
      ]
    },
    {
      "featureType": "transit.station",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#eeeeee"
        }
      ]
    },

  // water
    {
      "featureType": "water",
      "stylers": [
        {
          "color": "#ffeb3b"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#ffffff"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    }
];

let infowindow;

let normalIcon = '/img/map-marker-bluelight.png';
let activeIcon = '/img/map-marker-orange.png';

// Главная страница
$(function() {
    if ( $('#casino-rating-map').length > 0 ) {


        let locations = [
            ['Casino 1', 43.741504, 7.426513, 1,
                [
                    {
                        'casino_marker_color': '#24abea',
                        'casino_marker_size': '100',
                        'casino_logo': '/img/eclipse-logo.png',
                        'casino_address': 'ул. Леха и Марии Качинских 1, Монте-Карло, Монтекарлия.',
                        'casino_phone': '+ 995 557 110 000',
                        'casino_description': 'В комфортной и непринужденной атмосфере двухуровневого Главного зала гостей ждут бесчисленные увлекательные азартные игры. Среди них: Американская Рулетка, Блек Джек, Пунто- Банко, 10 разновидностей Покера, а также широкий выбор популярных игровых автоматов.',
                        'casino_square': '70m2',
                        'casino_games': '22',
                        'casino_tables': '91',
                        'casino_slots': '130',
                        'casino_minbet': '20',
                        'casino_maxbet': '100',
                        'casino_link': 'facebook.com',
                        'casino_rating_users': '83',
                        'casino_raring_users_circle_color': '#82ff17',
                        'casino_rating_site': '93',
                        'casino_raring_site_circle_color': '#e3d107'
                    }
                ]
            ],
            ['Eclipse Casino Batumi', 41.625069, 41.614706, 2,
                [
                    {
                        'casino_marker_color': '#2862ac',
                        'casino_marker_size': '120',
                        'casino_logo': '/img/eclipse-logo.png',
                        'casino_address': 'ул. Леха и Марии Качинских 1, Батуми, Грузия.',
                        'casino_phone': '+ 995 557 110 000',
                        'casino_description': 'descr 2',
                        'casino_square': 'square 2',
                        'casino_games': 'games 2',
                        'casino_tables': 'tables 2',
                        'casino_slots': 'slots 2',
                        'casino_minbet': 'minbet 2',
                        'casino_maxbet': 'maxbet 2',
                        'casino_link': 'casino link 2',
                        'casino_rating_users': '53',
                        'casino_raring_users_circle_color': '#82ff17',
                        'casino_rating_site': '78',
                        'casino_raring_site_circle_color': '#e3d107'
                    }
                ]
            ],
            ['Casino 2', 50.447824, 30.532826, 3,
                [
                    {
                        'casino_marker_color': '#24abea',
                        'casino_marker_size': '90',
                        'casino_logo': '/img/eclipse-logo.png',
                        'casino_address': 'ул. Леха и Марии Качинских 1, Батуми, Kyiv.',
                        'casino_phone': '+ 995 557 110 000',
                        'casino_description': 'descr 3',
                        'casino_square': 'square 3',
                        'casino_games': 'games 3',
                        'casino_tables': 'tables 3',
                        'casino_slots': 'slots 3',
                        'casino_minbet': 'minbet 3',
                        'casino_maxbet': 'maxbet 3',
                        'casino_link': 'casino link 3',
                        'casino_rating_users': '33',
                        'casino_raring_users_circle_color': '#82ff17',
                        'casino_rating_site': '12',
                        'casino_raring_site_circle_color': '#e3d107'
                    }
                ]
            ]
        ];

        let initial_map_center = new google.maps.LatLng(50.447824, 30.532826);

        // let bounds = new google.maps.LatLngBounds();

        let map_options = {
            zoom: 3,
            center: initial_map_center,
            styles: map_styles
        }

        let map = new google.maps.Map( document.getElementById('casino-rating-map'), map_options );

        let marker, i;

        const createHTMLMapMarker = ({ OverlayView = google.maps.OverlayView,  ...args }) => {
            class HTMLMapMarker extends OverlayView {
              constructor() {
                super();
                this.latlng = args.latlng;
                this.size = args.size;
                this.color = args.color;
                this.class = args.class;
                this.content = args.content;
                this.popup = args.popup;
                this.setMap(args.map);
              }

              createDiv() {
                this.div = document.createElement('div');
                this.div.className = this.class;
                // this.div.style.position = 'absolute';
                this.div.style.width = this.size + 'px';
                this.div.style.height = this.size + 'px';
                this.div.style.backgroundColor = this.color;
                if (this.content) {
                  this.div.innerHTML = this.content;
                }
                // var hover_state = false;
                google.maps.event.addDomListener(this.div, 'mouseover', event => {
                  
                  // if ( hover_state = false ) {
                    $('.block-casino-world-map .marker-item').removeClass('active');
                    this.div.classList.add('active');
                    google.maps.event.trigger(this, 'click');
                    event.cancelBubble = true;
                    event.stopPropagation && event.stopPropagation();
                    console.log('click');

                    if (infowindow) {
                        infowindow.close();
                    };
                    infowindow.setOptions({pixelOffset: { height: -(this.size / 2), width: 0}});
                    infowindow.setContent(this.popup);
                    infowindow.open(map, this);

                    setTimeout(function(){
                        $('.rating-item .circle canvas').remove();
                        $('.rating-item .circle').each( function() {
                            let percent = +$(this).data('percent');
                            let color = $(this).data('color');
                            $(this).radialIndicator({
                                radius: 290,
                                barWidth: 16,
                                initValue: 0,
                                maxValue: 100,
                                barColor: color,
                                roundCorner: true,
                                percentage: true
                            });
                            let radialObj = $(this).data('radialIndicator');
                            radialObj.animate(percent);
                        });
                    }, 100);
                  // };

                  // hover_state = true;
                });
                google.maps.event.addListener(map, 'click', function() {
                  // hover_state = false;
                  infowindow.close();
                  $('.block-casino-world-map .marker-item').removeClass('active');
                });
                google.maps.event.addListener(infowindow,'closeclick',function(){
                    infowindow.close();
                    // console.log('info window close');
                    $('.block-casino-world-map .marker-item').removeClass('active');
                });
              }

              appendDivToOverlay() {
                const panes = this.getPanes();
                panes.overlayMouseTarget.appendChild(this.div);
                // panes.overlayLayer.appendChild(this.div);
              }

              positionDiv() {
                const point = this.getProjection().fromLatLngToDivPixel(this.latlng);
                if (point) {
                  this.div.style.left = `${ (point.x - ( this.size / 2)) }px`;
                  this.div.style.top = `${ (point.y - ( this.size / 2)) }px`;
                }
              }

              draw() {
                if (!this.div) {
                  this.createDiv();
                  this.appendDivToOverlay();
                }
                this.positionDiv();
              }

              remove() {
                if (this.div) {
                  this.div.parentNode.removeChild(this.div);
                  this.div = null;
                }
              }

              getPosition() {
                return this.latlng;
              }

              getDraggable() {
                return false;
              }

            };
            return new HTMLMapMarker();
        };


        for ( i = 0; i < locations.length; i++ ) {

            // marker = new google.maps.Marker({
            //     position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            //     map: map,
            //     icon: normalIcon
            // });

            let markerPosition = new google.maps.LatLng( locations[i][1], parseFloat(locations[i][2]) );

            let markerSize = parseFloat( locations[i][4][0]['casino_marker_size'] );

            let popup_html =
              '<div class="map-item-popup">'
                  // + '<button class="close"></button>'
                  + '<div class="head">'
                      + '<div class="logo">'
                          + '<img src="' + locations[i][4][0]['casino_logo'] + '">'
                      + '</div>'
                      + '<div class="contacts">'
                          + '<address class="address">'
                              + locations[i][4][0]['casino_address']
                          + '</address>'
                          +'<a href="' + locations[i][4][0]['casino_phone'] + '" class="phone">'
                              + locations[i][4][0]['casino_phone']
                          + '</a>'
                      + '</div>'
                      + '<div class="descr">'
                          + locations[i][4][0]['casino_description']
                      + '</div>'
                  + '</div>'
                  + '<div class="params">'
                      + '<div class="param-item square">'
                          + '<div class="title">'
                              + 'Площадь'
                          + '</div>'
                          + '<div class="value">'
                              + locations[i][4][0]['casino_square']
                          + '</div>'
                      + '</div>'
                      + '<div class="param-item range">'
                          + '<div class="title">'
                              + 'Ассортимент игр'
                          + '</div>'
                          + '<div class="value">'
                              + locations[i][4][0]['casino_games']
                          + '</div>'
                      + '</div>'
                      + '<div class="param-item tables">'
                          + '<div class="title">'
                              + 'Количество столов'
                          + '</div>'
                          + '<div class="value">'
                              + locations[i][4][0]['casino_tables']
                          + '</div>'
                      + '</div>'
                      + '<div class="param-item slots">'
                          + '<div class="title">'
                              + 'Количество слотов'
                          + '</div>'
                          + '<div class="value">'
                              + locations[i][4][0]['casino_slots']
                          + '</div>'
                      + '</div>'
                      + '<div class="param-item minbet">'
                          + '<div class="title">'
                              + 'Ставки минимальные'
                          + '</div>'
                          + '<div class="value">'
                              + locations[i][4][0]['casino_minbet']
                          + '</div>'
                      + '</div>'
                      + '<div class="param-item maxbet">'
                          + '<div class="title">'
                              + 'Ставки максимальные'
                          + '</div>'
                          + '<div class="value">'
                              + locations[i][4][0]['casino_maxbet']
                          + '</div>'
                      + '</div>'
                  + '</div>'
                  + '<div class="rating">'
                      + '<div class="stats">'
                          + '<div class="rating-item stat-item green">'
                              + '<div class="title">'
                                  + 'Рейтинг Игроков'
                              + '</div>'
                              + '<div class="circle" data-percent="' + locations[i][4][0]['casino_rating_users'] + '" data-color="' + locations[i][4][0]['casino_raring_users_circle_color'] + '">'
                              + '</div>'
                          + '</div>'
                          + '<div class="rating-item stat-item yellow">'
                              + '<div class="title">'
                                  + 'Рейтинг Сайта'
                              + '</div>'
                              + '<div class="circle" data-percent="' + locations[i][4][0]['casino_rating_site'] + '" data-color="' + locations[i][4][0]['casino_raring_site_circle_color'] + '">'
                              + '</div>'
                          + '</div>'
                      + '</div>'
                      // + '<a href="' + locations[i][4][0]['casino_link'] + '" class="button white casino-link" target="_blank">'
                      + '<a href="' + locations[i][4][0]['casino_link'] + '" class="button white casino-link">'
                          + 'Обзор казино'
                      + '</a>'
                  // + '</div>'
              + '</div>';

            marker = createHTMLMapMarker({
              latlng: markerPosition,
              map: map,
              size: markerSize,
              color: locations[i][4][0]['casino_marker_color'],
              class: 'marker-item',
              content: '<div class="inner">' + locations[i][0] + '</div>',
              popup: popup_html,
              map: map
            });

            // bounds.extend(marker.position);

            infowindow = new google.maps.InfoWindow({});

            // google.maps.event.addListener(map, 'click touchend', function() {
            //     infowindow.close();
            // });

        };

        // google.maps.event.addListener(map, 'click touchend', function() {
        //         infowindow.close();
        //     });

        // map.fitBounds(bounds);


    };
});
// Главная страница

// Страница покер | Карта Международный поиск
$(function() {
    if ( $('#poker-clubs-map').length > 0 ) {
        let markers = [];
        let marker, i;

        // let bounds = new google.maps.LatLngBounds();

        let locations = [
            ['Доступные покер клубы в Грузии', 41.625069, 41.614706, 1,
                [
                    [
                        {
                            'poker_club_logo': '',
                            'poker_club_name': '',
                            'poker_club_address': '',
                            'poker_club_phone': '',
                            'poker_club_link': '',

                        }
                    ],
                    [
                        {
                            'recommend_casino_logo': '/img/eclipse-logo.png',
                            'recommend_casino_title': 'Eclipse Casino',
                            'recommend_casino_address': 'ул. Леха и Марии Качинских 1,  Батуми, Грузия.',
                            'recommend_casino_phone': '+ 995 444 333 333',
                            'recommend_casino_link': 'individual-casino.html'
                        }
                    ],
                    [
                        {
                          'country_marker_flag': '/img/flag-georgia.jpg',
                          'country_marker_size': '80'
                        }
                    ]
                ]
            ],
            ['Доступные покер клубы в Монте-Карло', 43.741504, 7.426513, 2,
                [

                    [
                        {
                            'poker_club_logo': '',
                            'poker_club_name': '',
                            'poker_club_address': '',
                            'poker_club_phone': '',
                            'poker_club_link': ''
                        }
                    ],
                    [
                        {
                            'recommend_casino_logo': '/img/logo-dummy.jpg',
                            'recommend_casino_title': 'Casino 1',
                            'recommend_casino_address': 'Страна, длинное название города, длинная улица покер клуба',
                            'recommend_casino_phone': 'телефон 1',
                            'recommend_casino_link': 'individual-casino.html'
                        }
                    ],
                    [
                        {
                          'country_marker_flag': '/img/flag-bulgaria.jpg',
                          'country_marker_size': '50'
                        }
                    ]
                ]
            ]
        ];

        let initial_map_center = new google.maps.LatLng(locations[0][1], locations[0][2]);

        let map_options = {
            zoom: 3,
            center: initial_map_center,
            // styles: map_styles
        };

        let map = new google.maps.Map( document.getElementById('poker-clubs-map'), map_options );

        const createHTMLMapMarker = ({ OverlayView = google.maps.OverlayView,  ...args }) => {
            class HTMLMapMarker extends OverlayView {
              constructor() {
                super();
                this.latlng = args.latlng;
                this.size = args.size;
                // this.color = args.color;
                this.class = args.class;
                this.content = args.content;
                this.popup = args.popup;
                this.setMap(args.map);
              }

              createDiv() {
                this.div = document.createElement('div');
                this.div.className = this.class;
                // this.div.style.position = 'absolute';
                this.div.style.width = this.size + 'px';
                this.div.style.height = this.size + 'px';
                this.div.style.backgroundColor = this.color;
                if (this.content) {
                  this.div.innerHTML = this.content;
                }
                // google.maps.event.addDomListener(this.div, 'click', event => {
                google.maps.event.addDomListener(this.div, 'mouseover', event => {
                  $('.block-poker-clubs-world-map .marker-item').removeClass('active');
                  this.div.classList.add('active');
                  google.maps.event.trigger(this, 'click');
                  event.cancelBubble = true;
                  event.stopPropagation && event.stopPropagation();
                  console.log('click');

                  if (infowindow) {
                      infowindow.close();
                  };
                  infowindow.setOptions({pixelOffset: { height: -(this.size / 2), width: 0}});
                  infowindow.setContent(this.popup);
                  infowindow.open(map, this);

                  // setTimeout(function(){
                  //     $('.rating-item .circle canvas').remove();
                  //     $('.rating-item .circle').each( function() {
                  //         let percent = +$(this).data('percent');
                  //         let color = $(this).data('color');
                  //         $(this).radialIndicator({
                  //             radius: 290,
                  //             barWidth: 16,
                  //             initValue: 0,
                  //             maxValue: 100,
                  //             barColor: color,
                  //             roundCorner: true,
                  //             percentage: true
                  //         });
                  //         let radialObj = $(this).data('radialIndicator');
                  //         radialObj.animate(percent);
                  //     });
                  // }, 100);

                });
                google.maps.event.addListener(map, 'click', function() {
                    infowindow.close();
                    $('.block-poker-clubs-world-map .marker-item').removeClass('active');
                });
                google.maps.event.addListener(infowindow,'closeclick',function(){
                    infowindow.close();
                    // console.log('info window close');
                    $('.block-poker-clubs-world-map .marker-item').removeClass('active');
                });
              }

              appendDivToOverlay() {
                const panes = this.getPanes();
                panes.overlayMouseTarget.appendChild(this.div);
                // panes.overlayLayer.appendChild(this.div);
              }

              positionDiv() {
                const point = this.getProjection().fromLatLngToDivPixel(this.latlng);
                if (point) {
                  this.div.style.left = `${ (point.x - ( this.size / 2)) }px`;
                  this.div.style.top = `${ (point.y - ( this.size / 2)) }px`;
                }
              }

              draw() {
                if (!this.div) {
                  this.createDiv();
                  this.appendDivToOverlay();
                }
                this.positionDiv();
              }

              remove() {
                if (this.div) {
                  this.div.parentNode.removeChild(this.div);
                  this.div = null;
                }
              }

              getPosition() {
                return this.latlng;
              }

              getDraggable() {
                return false;
              }

            };
            return new HTMLMapMarker();
        };

        for ( i = 0; i < locations.length; i++ ) {

            let markerPosition = new google.maps.LatLng( locations[i][1], parseFloat(locations[i][2]) );

            let markerSize = parseFloat( locations[i][4][2][0]['country_marker_size'] );

            let popup_html =
              '<div class="poker-clubs-popup">'
                  // + '<button class="close"></button>'
                  + '<div class="popup-title">'
                      + locations[i][0]
                  + '</div>'
                  + '<div class="poker-clubs-list">'
                      + '<div class="poker-club-item">'
                          + '<div class="logo">'
                          + '<img src="/img/logo-dummy.jpg">'
                          + '</div>'
                          + '<div class="title">'
                              + 'Покерный клуб "Poker Ring"'
                          + '</div>'
                          + '<div class="contacts">'
                              + '<address class="address">'
                                  + 'адрес покер клуба'
                              + '</address>'
                              + '<a href="tel:" class="phone">'
                                  + '+ 995 444 333 333'
                              + '</a>'
                          + '</div>'
                          + '<a href="/" class="button white-bluelight poker-club-link" target="_blank">'
                              + 'Обзор'
                          + '</a>'
                      + '</div>'
                      + '<div class="poker-club-item">'
                          + '<div class="logo">'
                          + '<img src="/img/logo-dummy.jpg">'
                          + '</div>'
                          + '<div class="title">'
                              + 'Покерный клуб "Poker Ring"'
                          + '</div>'
                          + '<div class="contacts">'
                              + '<address class="address">'
                                  + 'адрес покер клуба'
                              + '</address>'
                              + '<a href="tel:" class="phone">'
                                  + '+ 995 444 333 333'
                              + '</a>'
                          + '</div>'
                          + '<a href="/" class="button white-bluelight poker-club-link" target="_blank">'
                              + 'Обзор'
                          + '</a>'
                      + '</div>'
                      + '<div class="poker-club-item">'
                          + '<div class="logo">'
                          + '<img src="/img/logo-dummy.jpg">'
                          + '</div>'
                          + '<div class="title">'
                              + 'Покерный клуб "Poker Ring"'
                          + '</div>'
                          + '<div class="contacts">'
                              + '<address class="address">'
                                  + 'адрес покер клуба'
                              + '</address>'
                              + '<a href="tel:" class="phone">'
                                  + '+ 995 444 333 333'
                              + '</a>'
                          + '</div>'
                          + '<a href="/" class="button white-bluelight poker-club-link" target="_blank">'
                              + 'Обзор'
                          + '</a>'
                      + '</div>'
                  + '</div>'


                  //recommend item
                  + '<div class="poker-clubs-recommend">'
                    + '<div class="poker-club-item">'
                      + '<div class="logo">'
                      + '<img src="' + locations[i][4][1][0]['recommend_casino_logo'] + '">'
                      + '</div>'
                      + '<div class="title">'
                        + locations[i][4][1][0]['recommend_casino_title']
                      + '</div>'
                      + '<div class="contacts">'
                          + '<address class="address">'
                            + locations[i][4][1][0]['recommend_casino_address']
                          + '</address>'
                          + '<a href="tel:' + locations[i][4][1][0]['recommend_casino_phone'] + '" class="phone">'
                              + locations[i][4][1][0]['recommend_casino_phone']
                          + '</a>'
                      + '</div>'
                      + '<a href="' + locations[i][4][1][0]['recommend_casino_link'] + '" class="button orange poker-club-link" target="_blank">'
                          + 'Обзор'
                      + '</a>'
                  + '</div>'
              + '</div>';

            // marker = new google.maps.Marker({
            //     position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            //     map: map,
            //     icon: normalIcon
            // });

            marker = createHTMLMapMarker({
              latlng: markerPosition,
              map: map,
              size: markerSize,
              // color: locations[i][4][0]['casino_marker_color'],
              class: 'marker-item',
              content: '<img src="' + locations[i][4][2][0]['country_marker_flag'] + '">',
              popup: popup_html,
              map: map
            });

            // bounds.extend(marker.position);

            // markers.push(marker);

            infowindow = new google.maps.InfoWindow({});

            google.maps.event.addListener( marker, 'click', (function( marker, i ) {
                return function() {

                    if (infowindow) {
                        infowindow.close();
                    };

                    infowindow.setContent(popup_html);
                    infowindow.open(map, this);
                }
            })(marker, i));



            // google.maps.event.addListener(map, 'click', function() {
            //     infowindow.close();
            // });


        };

        // google.maps.event.trigger(markers[0], 'click');

        // map.fitBounds(bounds);

    };
});
// Страница покер | Карта Международный поиск




// Страница покер | Карта Текущие и ближайшие серии турниров
// $(function() {
//     if ( $('#tournament-events-map').length > 0 ) {
//         let markers = [];
//         let marker, i;

//         let bounds = new google.maps.LatLngBounds();

//         let locations = [
//             ['1 title', 33.88888, 51.77777, 1],
//             ['2 title', 13.99999, 91.33333, 2],
//             ['3 title', 4.00000, 121.11111, 3],
//             ['4 title', 43.22222, 54.22222, 4],
//             ['5 title', 30.99999, 30.55555, 5]
//         ];

//         let map = new google.maps.Map(document.getElementById('tournament-events-map'), {
//             zoom: 3,
//             center: new google.maps.LatLng(-33.92, 151.25),
//             styles: map_styles
//             // mapTypeId: google.maps.MapTypeId.ROADMAP
//         });

//         infowindow = new google.maps.InfoWindow();


//         for ( i = 0; i < locations.length; i++ ) {

//             marker = new google.maps.Marker({
//                 position: new google.maps.LatLng(locations[i][1], locations[i][2]),
//                 map: map,
//                 icon: normalIcon
//             });

//             markers.push(marker);

//             bounds.extend(marker.position);

//             google.maps.event.addListener(marker, 'click', (function(marker, i) {
//                 return function() {



//                     for (let j = 0; j < markers.length; j++) {
//                         markers[j].setIcon(normalIcon);
//                     };

//                     infowindow.setContent(locations[i][0]);
//                     this.setIcon(activeIcon)
//                     // infowindow.open(map, marker);

//                     $('.tournament-events-list .event-item[data-tournament-id="' + i + '"]').addClass('active').siblings().removeClass('active');

//                 }
//             })(marker, i));


//             $('.tournament-events-list .event-item').each(function(index) {
//                 $(this).attr('data-tournament-id', index);
//             });

//             $('.tournament-events-list .event-item').on('click', function () {
//                 $(this).addClass('active').siblings().removeClass('active');
//                 google.maps.event.trigger(markers[$(this).attr('data-tournament-id')], 'click');
//             });

//             google.maps.event.addListener(map, 'click', function() {
//                 // infowindow.close();
//                 for (let j = 0; j < markers.length; j++) {
//                     markers[j].setIcon(normalIcon);
//                 };
//                 $('.tournament-events-list .event-item').removeClass('active');
//             });

//         };

//         map.fitBounds(bounds);

//         let listener = google.maps.event.addListener(map, 'idle', function () {
//             // map.setZoom(3);
//             // google.maps.event.removeListener(listener);
//         });

//     };
// });
// Страница покер | Карта Текущие и ближайшие серии турниров




// Страница покер | Карта турниров
$(function() {
    if ( $('#tournament-items-map').length > 0 ) {
        let markers = [];
        let marker, i;

        let bounds = new google.maps.LatLngBounds();

        let locations = [
            ['1 title', 41.626734, 41.600175, 1],
            ['2 title', 43.740070, 7.426644, 2],
            ['3 title', 30.033333, 31.233334, 3],
            ['4 title', 25.276987, 55.296249, 4],
            ['5 title', 50.4547, 30.5238, 5]
        ];

        let map = new google.maps.Map(document.getElementById('tournament-items-map'), {
            zoom: 1,
            center: new google.maps.LatLng(41.626734, 41.600175),
            styles: '' 
            // styles: map_styles 
            // mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        infowindow = new google.maps.InfoWindow();


        for ( i = 0; i < locations.length; i++ ) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: normalIcon
            });

            markers.push(marker);

            bounds.extend(marker.position);

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {

                    for (let j = 0; j < markers.length; j++) {
                        markers[j].setIcon(normalIcon);
                    };

                    infowindow.setContent(locations[i][0]);
                    this.setIcon(activeIcon);
                    // infowindow.open(map, marker);

                    map.setZoom(15);
                    map.setCenter( marker.getPosition() );


                    $('.tournament-items-list .tournament-item[data-tournament-id="' + i + '"]').addClass('active').siblings().removeClass('active');

                }
            })(marker, i));


            $('.tournament-items-list .tournament-item').each( function( index ) {
                $(this).attr('data-tournament-id', index);
            });

            $('.tournament-items-list .tournament-item .map-link').on('click', function () {
                $(this).closest('.tournament-items-list .tournament-item').addClass('active').siblings().removeClass('active');
                google.maps.event.trigger(markers[$(this).closest('.tournament-items-list .tournament-item').attr('data-tournament-id')], 'click');
            });


        };

        map.fitBounds(bounds);

        let listener = google.maps.event.addListener(map, 'idle', function () {
            // map.setZoom(3);
            // google.maps.event.removeListener(listener);
        });

    };
});
// Страница покер | Карта турниров


// Страница карта
$(function() {
    if ( $('#casino-items-map').length > 0 ) {
        let markers = [];
        let marker, i;

        let bounds = new google.maps.LatLngBounds();

        let locations = [
            ['1 title', 41.626734, 41.600175, 1],
            ['2 title', 43.740070, 7.426644, 2],
            ['3 title', 30.033333, 31.233334, 3],
            ['4 title', 25.276987, 55.296249, 4],
            ['5 title', 50.4547, 30.5238, 5]
        ];

        let map = new google.maps.Map(document.getElementById('casino-items-map'), {
            zoom: 1,
            center: new google.maps.LatLng(41.626734, 41.600175),
            styles: '' 
            // mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        infowindow = new google.maps.InfoWindow();


        for ( i = 0; i < locations.length; i++ ) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: normalIcon
            });

            markers.push(marker);

            bounds.extend(marker.position);

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {

                    for (let j = 0; j < markers.length; j++) {
                        markers[j].setIcon(normalIcon);
                    };

                    infowindow.setContent(locations[i][0]);
                    this.setIcon(activeIcon);
                    // infowindow.open(map, marker);

                    map.setZoom(15);
                    map.setCenter( marker.getPosition() );


                    $('.casino-items-list .casino-item[data-casino-id="' + i + '"]').addClass('active').siblings().removeClass('active');

                }
            })(marker, i));


            $('.casino-items-list .casino-item').each( function( index ) {
                $(this).attr('data-casino-id', index);
            });

            $('.casino-items-list .casino-item .map-link').on('click', function () {
                $(this).closest('.casino-items-list .casino-item').addClass('active').siblings().removeClass('active');
                google.maps.event.trigger(markers[$(this).closest('.casino-items-list .casino-item').attr('data-casino-id')], 'click');
            });

            // google.maps.event.addListener(map, 'click', function() {
            //     // infowindow.close();
            //     for (let j = 0; j < markers.length; j++) {
            //         markers[j].setIcon(normalIcon);
            //     };
            //     $('.casino-items-list .casino-item').removeClass('active');
            // });

        };

        map.fitBounds(bounds);

        let listener = google.maps.event.addListener(map, 'idle', function () {
            // map.setZoom(3);
            // google.maps.event.removeListener(listener);
        });

    };
});
// Страница карта





































