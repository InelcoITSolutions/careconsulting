@extends('templates.main')

@section('title','Inicio')

@section('slider')
    
@stop
@section('content')

      

@include('partials.MenuPrincipal')
<body >
        
@include('partials.SliderPrincipal')

<!-- start acerca de Section -->
<section id="abt_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Acerca de CARE CONSULTING</h1>
                    <h2>Hacemos que las cosas sucedan, en pro de el bienestar de todas 
                    las personas involucradas en la empresa.
                    </h2>
                </div>          
            </div>      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="abt">
                    <p>La realidad es que el empresario por más ganas y actitud que tenga, no puede generar cambios significativos por el mismo. CARE CONSULTING ofrece la ayuda y el apoyo de un grupo multidisciplinario con el único objetivo de alcanzar las metas de la empresa sin olvidar el factor humano.
                    </p>
                </div>
            </div>          
        </div>
    </div>
</section>
<!-- start empresa Section -->
<section id="antecedentes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="todos-empresa">
                    
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-building-o"></i>
                        <h3>Antecedentes</h3>
                        <p>Hemos observado que, en la actualidad los dueños de las empresas quieren una máquina perfecta que controle y tome las mejores decisiones, sin olvidar el desarrollo humano de las personas que trabajan en la organización con el objetivo de superar a la competencia del mercado.</p>
                                        
                    </div>
                </div>                                      
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-line-chart"></i>
                        <h3>¿Por qué existe CARE CONSULTING?</h3>
                        <p>La realidad es que el empresario por más ganas y actitud que tenga, no puede generar cambios significativos por el mismo. CARE ofrece la ayuda y el apoyo de un grupo multidisciplinario con el único objetivo de alcanzar las metas de la empresa sin olvidar el factor humano.</p>
                                        
                    </div>
                </div>              
                
                    
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- End empresa Section -->
{{-- --}}
<!-- start Service Section -->
<section id="pr_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Metódologias</h1>
                    <h2>Te brindamos las siguientes metódologias</h2>
                </div>          
            </div> 

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="service">                       
                    <i class="fa fa-bar-chart"></i>
                    <h2>DRICS 1.0</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-bar-chart"></i>
                        <h2>DRICS 1.0</h2>

                        <p>Es una metodología que te proporciona <strong>herramientas</strong> necesarias para conocer de manera EXACTA el estado real de tu empresa en aspectos clave como <strong>finanzas</strong> y valor del <strong>inventario</strong>.</p>
                    </div>
                </div>
            </div>  

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="service">                       
                    <i class="fa fa-bar-chart "></i>
                    <h2>DRICS 2.0</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-users"></i>
                        <h2>DRICS 2.0</h2>
                        <p>Es una metodología que te proporciona <strong>herramientas</strong> necesarias para llevar a tu departamento comercial a la excelencia en aspectos como atención al cliente, marketing, seguimiento a prospectos, políticas de venta, etc. </p>
                    </div>
                </div>
            </div> 

        </div>
    </div>
</section>
<!-- End Service Section -->
--}}
<!-- start empresa Section -->
<section id="antecedentes">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="todos-empresa">
                          
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-wrench"></i>
                        <h3>¿Cómo trabajamos en CARE CONSULTING?</h3>
                        <p>Utilizamos un enfoque sistémico con el cual observamos y analizamos al individuo y a la empresa como un todo</p>
                                           
                    </div>
                </div>              
                            
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-plane"></i>
                        <h3>¿Hacia dónde vamos en CARE CONSULTING?</h3>
                        <p>Somos personas de familia y de tiempo, que entendemos en su totalidad que existen prioridades más allá del factor económico, como lo es el disfrutar el tiempo con sus familias.Para lograrlo, en CARE buscamos la sistematización y la automatización de los procesos, mediante la aplicación de una metodología adaptable a cualquier PYME.</p>
                                        
                    </div>
                </div>  
                    
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- End empresa Section -->
{{-- 
<!-- start Happy Client Section -->
<section id="alianzas_sec">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Nuestras alianzas</h1>
                    <h2>Empresas que estan alianados con nosotros </h2>
                </div>          
            </div>      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
                <div class="al_clt">                        
                    <div class="sngl_clt">
                        <a href=""><img src="../image/logos/logo-syca.png" alt="loogo inelco"/></a>
                    </div>
                    <div class="sngl_clt">
                        <a href=""><img src="../image/logos/aspelsoluciones.png" alt="logo-aspelsoluciones"/></a>
                    </div>                     
                    <div class="sngl_clt">
                        <a href=""><img src="../image/logos/inelco.png" alt=""/></a>
                    </div>              
                    <div class="sngl_clt">
                        <a href=""><img src="../image/logos/comprobantes.png" alt="comprobantesfiscales-org"/></a>
                    </div>              
                    <div class="sngl_clt">
                        <a href=""><img src="../image/logos/soluciones.png" alt=""/></a>
                    </div>                  
                    <div class="sngl_clt">
                        <a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
                    </div>              
                                  
                                    

                </div>
            </div>  
        </div>
    </div>
</section>
<!-- End Happy Client  Section -->
--}}
{{-- 
@include('partials.Contacto')
--}}
<section class="secciones-noi" id="barra-solida">
    <div class="fondo-morado">
        <div class="container">
            <h2 class="text-center wow fadeInDown" data-wow-delay="0.5s">
                ¿Tienes dudas? Puedes contactarnos y brindarte información
            </h2>
            {{--
            <h3 class="frase-gratis">
                Solicita una licencia y prueba toda su funcionalidad por 30 dias ¡gratis!
            </h3>
            --}}
            <div class="row">
                <div align="center" class="col-xs-6 col-sm-6 col-md-6">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">

                        <a class="button-gratis large radius goContrata ancla2" 
                        data-target="#suscripcion" data-toggle="modal" href='https://survey.zohopublic.com/zs/1mCupE' title='' 
                        target='_blank' onclick='zs_open_window(this.href, 648, 700); 
                        return false;'>
                        Contactarnos
                        </a>
                    </div>
                </div>
                <div align="center" class="col-xs-6 col-sm-6 col-md-6">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">
                        <a class="button-gratis large radius goContrata ancla2" href="https://inelco.mx/care-calendario" target="_blank">
                            <span style="visibility: hidden;">
                                abc
                            </span>
                            Ver eventos
                            <span style="visibility: hidden;">
                                abc
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.MapFooter')
    </body>
@stop

            {{-- popup de la encuesta--}}
            <script type='text/javascript'>function zs_open_window(url, height, width)
            {
                var leftPos = 0;var topPos = 0;if(screen)
                {
                    leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');
                }
            }
            </script>

        