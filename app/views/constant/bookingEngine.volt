<div id="booking" class="book-engine">
    <div class="row">
        <div class="book-back">
            <h3 class="titBookings">¡Compra ahora!<br>
                <span class="precompra-txt">Y obtén hasta un <strong>15% de descuento *</strong></span>
            </h3>
            <div class="clear"></div>
            <div class="book-box" >
            </div>
            <span>Precios sujetos a cambios sin previo aviso. Aplican restricciones.</span>
            <div class="row">
                <div id="legalestoggle2" class="legaleshome clearfix hidden-xs">
                    <p class="col-md-12 toggle-title">¿Cómo ahorrar?</p>
                    <div class="clear"></div>
                    <a href="#opt1" class="link-opts col-sm-4"><p>-10%</p></a>
                    <a href="#opt2" class="link-opts col-sm-4"><p>-15%</p></a>
                    <a href="#opt3" class="link-opts col-sm-4 noborder"><p><small>Niños</small></p></a>
                    <div class="clearfix"></div>
                    <div class="legal" id="opt1">
                        <span>-10%</span> Comprando con 7-20 días de anticipación. <small>No aplica en Paquetes ni en Pasaporte Xperience</small>
                    </div>
                    <div class="legal" id="opt2">
                        <span>-15%</span> Comprando con 21 o más de anticipación. <small>No aplica en Paquetes ni en Pasaporte Xperience</small>
                    </div>
                    <div class="legal" id="opt3">
                        <span>-50%</span> Niños de 5 a 11 años <br> <small>Niños de 0 a 4 años entran gratis. <br>No aplica en actividades opcionales.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    (function($) {
        $(".book-box").booking(
                {
                    calendar: 'calendar3',
                    loading: 'loading2',
                    bookVersion: "default",
                    tabActive: "1",
                    lang: "es",
                    currency: "{{ moneda[0] }}",
                    config: [
                        {action : "getAll"},
                        {bookingType : "complete"},
                        {typeProducts : "Entradas,Tours"},
                        {
                            parks : [

                                {"key1" : "XEL-H"},

                            ]

                        },
                        {
                            labels : [

                                {"key1" : "Entradas Xel-Há, Tour Xel-Há"},

                            ]
                        }
                    ],
                    tabConfig:[]
                }
        );
    })(bA);
</script>