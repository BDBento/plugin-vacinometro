<?php
/*
Plugin Name:       Vac-sgi
Plugin URI:        https://gitlabs.ms.gov.br/ucqi/wordpress/plugins/vacinometro.git
Description:       Vacinometro
Version:           2.0.0
Requires at least: 5.2
Requires PHP:      7.2
Author:            bbento, muzzera - Equipe UCQI, SGI
Text Domain:       Vac-sgi
*/
function vac_style(){

wp_enqueue_style( 'vac-style',plugins_url('/public/css/vac-style.css',__FILE__));

}
add_action( 'wp_enqueue_scripts', 'vac_style' );

function vacinometro(){
    ?>


<div class="vacinometro">
            <div class="interno">

                <div class="titulo_vacinometro">

                    <p>VACINÔMETRO</p>
    <!-----------------------------------------------seringa ----------------------------------->
                    <div class="seringa">
                        <div class="seringa-interno">
                            <div class="embulo"></div>
                            <div class="cabo-embulo"></div>
                            <div class="embulo"></div>
                            <div class="corpo">
                                <div class="cabo-embulo-interno"></div>
                                <div class="embulo-interno"></div>
                                <div class="liquido">
                                    <div class="marcas-volume"></div>
                                    <div class="marcas-volume"></div>
                                    <div class="marcas-volume"></div>
                                    <div class="marcas-volume"></div>
                                    <div class="marcas-volume"></div>
                                </div>
                            </div>
                            <div class="agulha"></div>
                            <div class="agulha-1"></div>
                            <div class="agulha-2"></div>
                            <div class="agulha-3"></div>
                        </div>
                    </div>
                    <p class="atualizado_em">atualizado em </p>
                </div>
    <!-----------------------------------------------fim seringa ----------------------------------->
    <!-------------------------------------------doses aplicadas ----------------------------------->
                <div class="doses_aplicadas">
                    <p id="txt_doses_aplicadas">DOSES APLICADAS</p>
                    <div class="doses_aplicadas_box">

                    </div>

                    
                    <div class="dados">
                        <div class="dados-1">
                            <p id="txt_resultado">PRIMEIRA DOSE</p>
                            <div class="resultado_1">

                            </div>
                        </div>

                        <div class="dados-2">
                            <p id="txt_resultado">SEGUNDA DOSE</p>
                            <div class="resultado_2">
                                    
                            </div>
                        </div>

                        <div class="dados-3">
                            <p id="txt_resultado">DOSE ÚNICA</p>
                            <div class="resultado_3">
                                    
                            </div>
                        </div>
                    </div>
                </div>
<!------------------------------------fim doses aplicadas ----------------------------------->
                <div class="percentual">
                    <p id="txt_resultado">percemtual população de MS com esquema vacinal completo.</p>
                    <div class="percentual_dados">

                    </div>
                </div>
            </div>  
        </div>
<?php

}

add_action( 'wp_body_open', 'vacinometro' );