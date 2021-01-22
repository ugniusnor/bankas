/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/accounts/addAccount.js":
/*!*********************************************!*\
  !*** ./resources/js/accounts/addAccount.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
function addAccount() {
  if (document.querySelector("#addClient")) {
    var button = document.querySelector("#addClient");
    var closeBtn = document.querySelector(".close-table");
    var submitBtn = document.querySelector("#create_acc_btn");
    var inputs = document.querySelectorAll(".create-input");
    var reg = /^[A-Za-z]+$/;
    button.addEventListener('click', function () {
      console.log(submitBtn);
      document.querySelector(".create-account-table").style.display = "flex";
    });
    closeBtn.addEventListener('click', function () {
      document.querySelector(".create-account-table").style.display = "none";
      inputs.forEach(function (input) {
        input.classList.remove('not-valid');
        input.classList.remove('err');
      });
    });
  } // submitBtn.addEventListener('click',(e)=>{
  //     inputs.forEach(input => {
  //         if (input.value.length<3 || input.value.length>100) {
  //             e.preventDefault();
  //             input.classList.add('not-valid')
  //             input.classList.add('err')
  //             return;
  //         }
  //     });
  //     if (!inputs[0].value.match(reg) || !inputs[1].value.match(reg)  ) {
  //         e.preventDefault();
  //         console.log(inputs[0].value);
  //         return;
  //     }
  //     inputs.forEach(element => {
  //         element.value="";
  //     });
  // })

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (addAccount);

/***/ }),

/***/ "./resources/js/accounts/editAccount.js":
/*!**********************************************!*\
  !*** ./resources/js/accounts/editAccount.js ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
function editAccount() {
  var editBtn = document.querySelectorAll('.edit');
  var forms = document.querySelectorAll('#update_funds');
  editBtn.forEach(function (item, i) {
    item.addEventListener('click', function () {
      forms[i].style.display = "block";
    });
  });
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (editAccount);

/***/ }),

/***/ "./resources/js/accounts/manageExtension.js":
/*!**************************************************!*\
  !*** ./resources/js/accounts/manageExtension.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => __WEBPACK_DEFAULT_EXPORT__
/* harmony export */ });
function manageExtension() {
  console.log("labas2222");

  if (document.getElementById("manage_acc")) {
    var manageBtn = document.querySelectorAll("#manage_acc");
    var manageExt = document.querySelectorAll(".manage-extension");
    var count = [];
    manageBtn.forEach(function (button, index) {
      count.push(0);
      button.addEventListener('click', function () {
        if (count[index] === 0) {
          manageExt[index].style.display = "block";
          setTimeout(function () {
            manageExt[index].style.height = "250px";
          }, 4);
          count[index]++;
        } else if (count[index] === 1) {
          manageExt[index].style.height = "0";
          setTimeout(function () {
            manageExt[index].style.display = "none";
          }, 800);
          count[index]--;
        }
      });
    });
  }
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (manageExtension);

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _accounts_addAccount_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./accounts/addAccount.js */ "./resources/js/accounts/addAccount.js");
/* harmony import */ var _accounts_manageExtension_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./accounts/manageExtension.js */ "./resources/js/accounts/manageExtension.js");
/* harmony import */ var _accounts_editAccount_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./accounts/editAccount.js */ "./resources/js/accounts/editAccount.js");
// require('./bootstrap');



(0,_accounts_addAccount_js__WEBPACK_IMPORTED_MODULE_0__.default)();
(0,_accounts_manageExtension_js__WEBPACK_IMPORTED_MODULE_1__.default)();
(0,_accounts_editAccount_js__WEBPACK_IMPORTED_MODULE_2__.default)();

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		if(__webpack_module_cache__[moduleId]) {
/******/ 			return __webpack_module_cache__[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => Object.prototype.hasOwnProperty.call(obj, prop)
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	// startup
/******/ 	// Load entry module
/******/ 	__webpack_require__("./resources/js/app.js");
/******/ 	// This entry module used 'exports' so it can't be inlined
/******/ })()
;