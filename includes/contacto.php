 <script>
    function sendContact(){
        var valid;
        valid = validateContact();
        if(valid) {
            jQuery.ajax({
                url: "contact_form.php",
                data:'nombres='+$("#nombres").val()+'&email='+$("#email").val()+'&telefono='+$("#telefono").val()+'&mensaje='+$("#mensaje").val(),
                type: "POST",
                success:function(data){
                    $("#mail-status").html(data);
                },
                error:function (){}
            });
        }
    }

    function validateContact() {
        var valid = true;
        if(!$("#nombres").val()) {
            $("#nombres").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val()) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#telefono").val()) {
            $("#telefono").css('background-color','#f28282');
            valid = false;
        }
        if(!$("#mensaje").val()) {
            $("#mensaje").css('background-color','#f28282');
            valid = false;
        }
        return valid;
    }
</script>
<!--Contact Section-->
<section id="contacto" class="contact-section" style="background-image:url('images/background/1.jpg')">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Info Column-->
            <div class="info-column col-md-4 col-sm-12 col-xs-12">
                <div class="inner-column wow fadeInLeft">
                    <h2>Solicita Informes <br>o Visítanos</h2>
                    <ul>
                        <li><span>Dirección</span>Av. Grau 355 Miraflores</li>
                        <li><span>Teléfono</span>(51)2751241</li>
                        <li><span>Email</span>octaviopedraza@yoctaviopedraza.com</li>
                        <li><span>Atención</span>Lunes - Domingo<br> 09:00 - 18:00</li>
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
                        <div>
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
                                    <div id="mail-status"></div>
                                </div>
                                <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                    <button name="submit" onClick="sendContact();" class="theme-btn btn-style-one">Contactarme</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Default Form-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section-->