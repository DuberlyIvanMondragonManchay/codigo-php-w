<!-- Loading CSS -->
<style>
    .loading {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #E5E5E5;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: 1s all;
        opacity: 0;
    }
    .lds-ellipsis {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ellipsis div {
  position: absolute;
  top: 33px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: #22506F;
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}
.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}
.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}
.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}
@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }
  100% {
    transform: scale(1);
  }
}
@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0);
  }
}
@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }
  100% {
    transform: translate(24px, 0);
  }
}

    .loading.show {
        opacity: 1;
    }

</style>

<!-- Loading HTML -->
<div class="loading show">

    <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
</div>

<!-- Loading Javascript -->
<script>
//======================================================================
// LOADING
//======================================================================
var Loading = (loadingDelayHidden = 0) => {

//-----------------------------------------------------
// Variables
//-----------------------------------------------------
// HTML
let loading = null;
// Retardo para borrar
const myLoadingDelayHidden = loadingDelayHidden;
// Imágenes
let imgs = [];
let lenImgs = 0;
let counterImgsLoading = 0;

//-----------------------------------------------------
// Funciones
//-----------------------------------------------------

/**
 * Método que aumenta el contador de las imágenes cargadas
 */
function incrementCounterImgs() {
    counterImgsLoading += 1;
    // Comprueba si todas las imágenes están cargadas
    if (counterImgsLoading === lenImgs) hideLoading();
}

/**
 * Ocultar HTML
 */
function hideLoading() {
    // Comprueba que exista el HTML
    if(loading !== null) {
        // Oculta el HTML de "cargando..." quitando la clase .show
        loading.classList.remove('show');

        // Borra el HTML
        setTimeout(function () {
            loading.remove();
        }, myLoadingDelayHidden);
    }

}

/**
 * Método que inicia la lógica
 */
function init() {
    /* Comprobar que el HTML esté cargadas */
    document.addEventListener('DOMContentLoaded', function () {
        loading = document.querySelector('.loading');
        imgs = Array.from(document.images);
        lenImgs = imgs.length;

        /* Comprobar que todas las imágenes estén cargadas */
        if(imgs.length === 0) {
            // No hay ninguna
            hideLoading();
        } else {
            // Una o más
            imgs.forEach(function (img) {
                // A cada una le añade un evento que cuando se carge la imagen llame a la funcion incrementCounterImgs
                img.addEventListener('load', incrementCounterImgs, false);
            });
        }
    });
}

return {
    'init': init
}
}

// Para usarlo se declara e inicia. El número es el tiempo transcurrido para borra el HTML una vez cargado todos los elementos, en este caso 1 segundo: 1000 milisegundos,
Loading(2000).init();
</script>
