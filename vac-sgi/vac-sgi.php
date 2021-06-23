<?php
/*
Plugin Name:       Vac-sgi
Plugin URI:        
Description:       Vacinometro
Version:           1.0.0
Requires at least: 5.2
Requires PHP:      7.2
Author:            bbento
Author URI:        
License:           
License URI:       
Text Domain:       Vac-sgi
Domain Path:       
*/
function vac_style(){

wp_enqueue_style( 'vac-style',plugins_url('/public/css/vac-style.css',__FILE__));

}
add_action( 'wp_enqueue_scripts', 'vac_style' );

function vacinometro(){
    ?>


        <div class="vac-titulo">
        
                <p>Vacinômetro </p>
        </div>

                <div class="vacinometro">

                    <div class="vac-interno">

                        <div class="part-1">
                            
                                <p class="txt-atualizado">Atualizado Em:</p>
                            

                            <div class="tempo">
                                
                                    <iframe class="atualizado-em" src="https://mais.saude.ms.gov.br:444/single/?appid=d3edb27b-8f52-4dff-a2e0-fc82bfc3fb6a&obj=fRdVtG&theme=hayward's%20paul%20alberto&opt=nointeraction,noselections"></iframe>
                            
                            </div>
                        </div>

                        <div class="part-2">
                            <p >Doses Aplicadas </p>

                                <div class="doses">
                                    
                                        <iframe src="https://mais.saude.ms.gov.br:444/single/?appid=d3edb27b-8f52-4dff-a2e0-fc82bfc3fb6a&obj=RGxrv&opt=nointeraction,noselections"></iframe>
                                
                                </div>
                        </div>           
                        
                        <div class="part-3">                            
                                <p>Percentual das pessoas de MS</br> que ja receberam a segunda dose</p>
                            
                                <div class="porcentagem">    
                        
                                    <iframe src="https://mais.saude.ms.gov.br:444/single/?appid=d3edb27b-8f52-4dff-a2e0-fc82bfc3fb6a&obj=wMcDP&opt=nointeraction,noselections"></iframe>
                                    
                                </div>

                        </div>

                    </div>
                </div>/
                
<?php

}

