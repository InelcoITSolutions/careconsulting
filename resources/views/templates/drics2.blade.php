@extends('templates.main')
@section('title','DRICS 2.0')

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
        
@include('partials.SliderDrics-02')

<!-- start about Section -->
<section id="abt_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>ACERCA DE DRICS 2.0</h1>
                    <h2>Hacemos que las cosas sucedan, en pro de el bienestar de todas 
                    las personas involucradas en la empresa.
                    </h2>
                </div>          
            </div>      
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="abt">
                    <p>DRICS 2.0 es una metodología
 				enfocada en resultados que le permite que la fuerza de ventas sea:
                <br> 
                <strong>productiva, rentable y proactiva</strong> 
				<br>
                Nuestra metodología es una guía, un INSTRUCTIVO de lo que toda empresa operando profesionalmente 
                <br>debe poseer en su área comercial. 
                    </p>

                </div>
            </div>          
        </div>
    </div>
</section>
<!-- End About Section -->


<!-- start empresa Section -->
<section id="empresa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="todos-empresa">
                    
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-user-o"></i>
                        <h3>Tu gerente:</h3>
                        <p>¿Tú gerente del área de ventas es un león (líder, inspirador, ejemplo a seguir, sabe a enseñar, sabe guíar)?</p>
                                        
                    </div>
                </div>  
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-money"></i>
                        <h3>Fuerza de ventas</h3>
                        <p>¿Sabes actualmente lo qué está haciendo tu fuerza de ventas en estos momentos o tienes métricas para medir la eficiencia de tus vendedores?
                       
                        </p>              
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
                    <br>
                    <p>Se documentan las operaciones mediante mapeos de procesos generales y específicos .</p>
                    <br>
                    <p>Está basada en el uso de mejores prácticas.</p>
                                     
                </div>
            </div>      
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="lts_pst">                       
                    <i class="fa fa-puzzle-piece fa-5x" aria-hidden="true"></i>
                    <h2>Integración</h2>
                    <p>Es la implementación de las mejoras realizadas en la reingeniería.</p>
                    <br>
                    <p>Se muestra al personal cómo deben realizarse las actividades propuestas.</p>
                    <br>
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
                    <br>
                    <p>Permite pasar a una segunda etapa donde se trabajan otros departamentos como el área de Talento y Cultura (Recursos Humanos) o el Departamento Comercial.
                    </p>
                    <br>

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
                        <i class="fa fa-comment"></i>
                        <h3>Piensas que:</h3>
                        <p>¿Hay días que piensas en que sólo trabajas para pagarle a proveedores, empleados, a todo mundo menos a ti? 
                        <br>
                        Mantienes a decenas de familias y sin embargo tú no estás tranquilo.</p>
                                        
                    </div>
                </div>  
                <div class="descripciones">
                    <div class="singular_descripcion">
                        <i class="fa fa-dollar"></i>
                        <h3>Conoces tus ventas:</h3>
                        <p>¿Sabes actualmente lo qué está haciendo tu fuerza de ventas en estos momentos o sabes cuánto vas a vender el siguiente mes?
                      
                        </p>              
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