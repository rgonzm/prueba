<div class="row-fluid">
    <div class="span12">
        <h1 class="form-signin-heading" id="contactanos">Contáctanos</h1>
    </div>
</div>
<div class="row-fluid">
    <div class="span6 well" id="respuesta_mail">   

        <form class="form" onsubmit="return envia_mensaje();">            

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Nombre</label>
                <div class="controls">
                    <input id="nombre" name="nombre" placeholder="" class="input-xlarge" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">E-mail</label>
                <!--
                <div class="controls">
                    <input id="mail" name="mail" placeholder="" class="input-xlarge"  type="text">
    
                </div>-->
                <div class="controls input-append">                    
                    <input class="input-xlarge correo" id="mail" name="mail" type="text" placeholder="Correo...">
                    <span class="add-on">@</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Fono/Celular</label>
                <div class="controls">
                    <input id="fono" name="fono" placeholder="" class="input-xlarge"  type="text">

                </div>
            </div>

            <!-- Textarea -->
            <div class="control-group">
                <label class="control-label">Mensaje</label>
                <div class="controls">                     
                    <textarea id="mensaje" name="mensaje" rows="5" class="input-xlarge"></textarea>
                </div>
            </div>

            <!-- Button -->
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <button id="singlebutton" name="singlebutton" class="btn btn-inverse">Enviar</button>
                </div>
            </div>

        </form>

    </div>
    <div class="span6 well">        
            <h3>VRIN Consultores Informáticos</h3>
            <p>Estamos comprometidos a ayudarte con tus proyectos.</p>

            <h4>Servicios</h4>
            <ul class="unstyled">
                <li><i class="icon-check"> </i>Desarrollo de sistemas</li>
                <li><i class="icon-check"> </i>Migración de sistemas</li>
                <li><i class="icon-check"> </i>Asesorías en informática</li>
            </ul>        
    </div>
</div>