$(function() {
               
            var LocsA = [
                {
                    lat: 40.740178,
                    lon: -74.190194,
                    title: 'Property 1',
                    html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Marvel de Villa</a></h6>',
                            '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                           
                        ].join(''),
                    animation: google.maps.Animation.BOUNCE,
                    icon: 'assets/img/icon/place.png'
                },
                {
                    lat: 40.733617,
                    lon: -74.171150,
                    title: 'Property 2',
                    html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Marvel de Villa</a></h6>',
                             '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                    icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                },
                {
                    lat: 40.743011,
                    lon: -74.247100,
                    title: 'Property 3',
                     html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Duplex Queen</a></h6>',
                             '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                    icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                },
                {
                    lat: 40.711150,
                    lon: -74.214998,
                    title: 'Property 4',
                    html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Radison de Villa</a></h6>',
                            '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                    icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                },
                {
                    lat: 40.690010,
                    lon: -74.151753,
                    title: 'Property 5',
                    html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Duplex Queen</a></h6>',
                             '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                    icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                },
                {
                    lat: 40.697590,
                    lon: -74.263164,
                    title: 'Property 6',
                    html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Radison de Villa</a></h6>',
                            '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                   icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                },
                {
                    lat: 40.729979,
                    lon: -74.271992,
                    title: 'Property 7',
                    html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Radison de Villa</a></h6>',
                             '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                    icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                },
                {
                    lat: 40.727660,
                    lon: -74.156292,
                    title: 'property 8',
                   html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Duplex Queen</a></h6>',
                            '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                     icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                },
                {
                    lat: 40.749702,
                    lon: -74.163631,
                    title: 'Property 9',
                     html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="#">Radison de Villa</a></h6>',
                            '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                    icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                },
                {
                    lat: 40.718971,
                    lon: -74.323219,
                    title: 'Property 10',
                     html: ['<a href="#"><img style="width: 250px;" alt="" src="assets/img/properties/properties1.png"></a>',
                           '<h6 style="font-size: 15px; line-height: 18px; font-weight: 700;margin: 10px 0 5px;color: #000000;"><a href="single-properties.html">Radison de Villa</a></h6>',
                            '<p style="margin-bottom: 5px;color: #000000; font-weight: 300;">245 West City Central Town New York USA</p>',
                            '<h5 style="margin: 0;font-weight:700; color: #FF5A5F;" class="price">$52,354</h5>'
                        ].join(''),
                    icon: 'assets/img/icon/place.png',
                    animation: google.maps.Animation.BOUNCE
                }

                
            ];
            new Maplace({
                locations: LocsA,
                controls_on_map: true,
                map_options: {
                    zoom: 13,
                    scrollwheel: false,
                    stopover: true
                }
            }).Load();

        });

