
<script>
    function Validar(){
        
        if(document.contacto.nombres.value==""){
            alert("Debe ingresar su nombres");
            document.contacto.nombres.focus();
            return; 
        }
        if(document.contacto.email.value==""){
            alert("Debe ingresar su email");
            document.contacto.email.focus();
            return; 
        }
        if(document.contacto.telefono.value==""){
            alert("Debe ingresar su telefono");
            document.contacto.telefono.focus();
            return; 
        }
        if(document.contacto.mensaje.value==""){
            alert("Debe ingresar su mensaje");
            document.contacto.mensaje.focus();
            return; 
        }
        document.contacto.proceso.value="Registrar";
        document.contacto.action="index.php";
        document.contacto.submit();
    }
</script>
<!--Contact Section-->
<section id="contacto" class="contact-section" style="background-image:url('/images/background/1.jpg')">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Info Column-->
            <div class="info-column col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column wow fadeInLeft">
                    <h2>Solicita Informes <br>o Visítanos</h2>
                    <ul>
                        <li><span>Dirección</span>Av. Grau 355 Miraflores</li>
                        <li><span>Teléfono</span>(51)2751241</li>
                        <li><span>Email</span>octaviopedraza@octaviopedraza.com</li>
                        <li><span>Atención</span>Lunes - Domingo<br> 09:30 - 18:00</li>
                    </ul>
                </div>
            </div>
            <!--Form Column-->
            <div class="form-column col-md-8 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <h2>¡Bríndanos tus datos!</h2>
                    <p>Un asesor se comunicará contigo a la brevedad</p>
                    <!--Default Form-->
                    <div class="default-form">
                        <form name="contacto" id="contacto" method="post" action="">
                            <div class="row clearfix">
                                <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                    <input type="text" id="nombres" name="nombres" placeholder="Bríndanos tu nombre y apellido" required />
                                </div>
                                <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                    <input type="text" id="telefono" name="telefono" placeholder="Déjanos tu celular" required />
                                </div>
                                <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                    <input type="email" id="email" name="email" placeholder="Tu Email" required />
                                </div>
                                <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                    <textarea id="mensaje" name="mensaje" placeholder="Algún Mensaje"></textarea>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                    <input type="button" onClick="javascript:Validar();" class="theme-btn btn-style-one" value="Contactarme" />
                                    <input type="hidden" name="proceso" />
                                    <?php $fecha = date("Y-m-d"); ?>
                                    <input type="hidden" name="fecha_ingreso" value="<?php echo $fecha ?>">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--End Default Form-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section-->