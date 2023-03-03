/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/register.js ***!
  \**********************************/
function registerApplicant() {
  return {
    step: 1,
    passwordStrengthText: '',
    togglePassword: false,
    password: '',
    terms: '',
    showModal: false,
    showModal2: false,
    //funcion para checar complejidad de password
    checkPasswordStrength: function checkPasswordStrength() {
      var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
      var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
      var value = this.password;

      if (strongRegex.test(value)) {
        this.passwordStrengthText = "Contraseña Fuerte";
      } else if (mediumRegex.test(value)) {
        this.passwordStrengthText = "Podria ser mas fuerte";
      } else {
        this.passwordStrengthText = "Muy debil";
      }
    }
  };
}
/******/ })()
;