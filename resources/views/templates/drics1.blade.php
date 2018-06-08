@extends('templates.main')
@section('title','DRICS 1.0')

@section('content')
@include('partials.MenuPrincipal')
{{--
        <!-- start preloader -->
        <div id="loader-wrapper">
            <div class="logo"></div>
            <div id="loader">
            </div>
        </div>
        <!-- end preloader -->
--}}
@include('partials.MenuPrincipal')
        
@include('partials.SliderDrics-1')

<!-- start about Section -->
<section id="abt_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>ACERCA DE DRICS 1.0</h1>
                    <h2>Hacemos que las cosas sucedan, en pro de el bienestar de todas 
                    las personas involucradas en la empresa.
                    </h2>
                </div>          
            </div>      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="abt">
                    <p>DRICS 1.0 es una metodología
 				enfocada en PYMES que le permite a la dirección tomar el control de la empresa en 3 áreas clave: 
                <br>
                <strong>compras, inventarios y administración</strong>.
                <br>
                Nuestra metodología es una guía, un INSTRUCTIVO de lo que toda empresa operando profesionalmente debe poseer, en todos sus departamentos. 
				
                    </p>

                </div>
            </div>          
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- start empresa Section -->
<section id="logistica">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="todos-empresa">
                    
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-cogs"></i>
                        <h3>Alguna vez:</h3>
                        <p>¿Alguna vez te has preguntado cómo lograr que tu empresa esté automatizada en su operación de tal forma que todo funcione correctamente sin ti?</p>
                                        
                    </div>
                </div>                                      
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-line-chart"></i>
                        <h3>Te ha pasado que:</h3>
                        <p>¿Has contratado personal que te ayude a completar el trabajo (que nunca acaba), y al final terminar haciéndolo tú mismo, frustrado y pensando que estás tirando la nómina a la basura?</p>
                                        
                    </div>
                </div>    
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- End empresa Section -->

<section id="pr_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>DRICS 1.0</h1>
                    <h2>Enfocada en PYMES que le permite a la dirección tomar el control de la empresa en 3 áreas clave:
					</h2>
                </div>          
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service">                       
                    <i class="fa fa-shopping-cart "></i>
                    <h2>Compras</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-shopping-cart "></i>
                        <h2>Compras</h2>
                        <p>¿Sabes  TODO lo que adquieres en tu empresa?</p>
                    </div>
                </div>
            </div> 

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service">                       
                    <i class="fa fa-list-ol"></i>
                    <h2>Inventarios</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-list-ol"></i>
                        <h2>Inventarios</h2>
                        <p>¿Sabes TODO lo que tienes en tu empresa?</p>
                    </div>
                </div>
            </div>  

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="service">                       
                    <i class="fa fa-calculator"></i>
                    <h2>Administración</h2>
                    <div class="service_hoverly">
                        <i class="fa fa-calculator"></i>
                        <h2>Administración</h2>
                        <p>¿Sabes organizar TOTALMENTE  tu empresa?</p>
                    </div>
                </div>
            </div>  

           

        </div>
    </div>
</section>
<!-- End Service Section -->

<!-- start empresa Section -->
<section id="empresa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="todos-empresa">
                    
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-user"></i>
                        <h3>Sientes que:</h3>
                        <p>¿Sientes que si te ausentas de tu negocio las cosas no se hacen correctamente, por lo que NUNCA apagas tu celular… y cuando te atreves a hacerlo, la incertidumbre te abruma?</p>
                                        
                    </div>
                </div>                                      
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-comment"></i>
                        <h3>Piensas que:</h3>
                        <p>¿Hay días que piensas en que sólo trabajas para pagarle a proveedores, empleados, a todo mundo menos a ti? Mantienes a decenas de familias y sin embargo tú no estás tranquilo.</p>
                                        
                    </div>
                </div>    
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- End empresa Section -->

<!-- start Latest post Section -->
<section id="lts_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>METODOLOGÍA DE GESTIÓN Y DESARROLLO EMPRESARIAL</h1>
                    <h2></h2>
                </div>          
            </div>      
            
            </div>
            <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">                       
                    <i class="fa fa-map-pin fa-5x" aria-hidden="true"></i>
                    <h2>Diagnóstico</h2>
                    <p>
					    Dirección general
					    <br>
					    <br>
    					Funcionamiento de la empresa
    					<br>
    					<br>
    					Equipo de trabajo, el talento
                    </p>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">                       
                    <i class="fa fa-cog fa-5x" aria-hidden="true"></i>
                    <h2>Reingeniería
                    </h2>
                    <p>Es la creación de nuevos procesos que sustituyen a los que no funcionan adecuadamente.</p>
                 
                    <p>Se documentan las operaciones mediante mapeos de procesos generales y específicos .</p>
                   
                    <p>Está basada en el uso de mejores prácticas.</p>
                                     
                </div>
            </div>      
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">                       
                    <i class="fa fa-puzzle-piece fa-5x" aria-hidden="true"></i>
                    <h2>Integración</h2>
                    <p>Es la implementación de las mejoras realizadas en la reingeniería.</p>
                   
                    <p>Se muestra al personal cómo deben realizarse las actividades propuestas.</p>
                  
                    <p>Se establece la plantilla ideal de acuerdo a los requerimientos operacionales.</p>

                </div>
            </div>
            
            </div>          
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">                       
                    <i class="fa fa-users fa-5x" aria-hidden="true"></i>
                    <h2>Capacitación</h2>
                    <p>Es el proceso de alinear las competencias y habilidades de los colaboradores con las necesidades de operación de la empresa.</p>
                    <br>
                    <p>Se fortalece el desempeño de los líderes en las áreas críticas del negocio.</p>
                    <br>
                    

                </div>
            </div>	
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">                       
                    <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>
                    <h2>Seguimiento</h2>
                    <p>Son las auditorías posteriores al trabajo de consultoría, en donde nos cercioramos de que las mejoras implementadas continúan operando.</p>
                 
                    <p>Permite pasar a una segunda etapa donde se trabajan otros departamentos como el área de Talento y Cultura (Recursos Humanos) o el Departamento Comercial.
					</p>
                   

                </div>
            </div>
            {{--
            <div class="post_btn">
                <div class="hover_effect_btn" id="hover_effect_btn">
                    <a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
                </div>
            </div>          
			--}}
        </div>
    </div>
</section>

<!-- start empresa Section -->
<section id="empresa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="todos-empresa">
                    
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-asterisk "></i>
                        <h3>Te has resignado a:</h3>
                        <p>¿Te has resignado a que cuadre el inventario, e incluso finges realizarlo sólo para que tus empleados “piensen que si algo hace falta te darás cuenta”?</p>
                                        
                    </div>
                </div>                                      
                 
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- End empresa Section -->
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