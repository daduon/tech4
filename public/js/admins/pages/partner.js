/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 10);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/pages/partner.js":
/*!**********************************************!*\
  !*** ./resources/js/admins/pages/partner.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var PartnerContainer = $('#partner');\n  var PartnerDatatable = $('#partner-table', PartnerContainer);\n  var t = PartnerDatatable.DataTable({\n    processing: true,\n    serverSide: true,\n    deferRender: true,\n    ajax: {\n      url: PartnerDatatable.data('route')\n    },\n    columns: [{\n      data: 'DT_RowIndex',\n      name: 'DT_RowIndex',\n      className: 'text-center',\n      width: \"30px\"\n    }, {\n      data: 'img',\n      name: 'img'\n    }, {\n      data: 'name_en',\n      name: 'name_en'\n    }, {\n      data: 'action',\n      name: 'action',\n      className: 'w-12',\n      searchable: false,\n      orderable: false\n    }]\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL3BhcnRuZXIuanM/M2ZlNyJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsIlBhcnRuZXJDb250YWluZXIiLCJQYXJ0bmVyRGF0YXRhYmxlIiwidCIsIkRhdGFUYWJsZSIsInByb2Nlc3NpbmciLCJzZXJ2ZXJTaWRlIiwiZGVmZXJSZW5kZXIiLCJhamF4IiwidXJsIiwiZGF0YSIsImNvbHVtbnMiLCJuYW1lIiwiY2xhc3NOYW1lIiwid2lkdGgiLCJzZWFyY2hhYmxlIiwib3JkZXJhYmxlIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFZO0FBQzFCLE1BQU1DLGdCQUFnQixHQUFHSCxDQUFDLENBQUMsVUFBRCxDQUExQjtBQUNBLE1BQU1JLGdCQUFnQixHQUFHSixDQUFDLENBQUMsZ0JBQUQsRUFBbUJHLGdCQUFuQixDQUExQjtBQUVBLE1BQUlFLENBQUMsR0FBR0QsZ0JBQWdCLENBQUNFLFNBQWpCLENBQTJCO0FBQy9CQyxjQUFVLEVBQUUsSUFEbUI7QUFFL0JDLGNBQVUsRUFBRSxJQUZtQjtBQUcvQkMsZUFBVyxFQUFFLElBSGtCO0FBSS9CQyxRQUFJLEVBQUU7QUFDRkMsU0FBRyxFQUFFUCxnQkFBZ0IsQ0FBQ1EsSUFBakIsQ0FBc0IsT0FBdEI7QUFESCxLQUp5QjtBQU8vQkMsV0FBTyxFQUFFLENBQ0w7QUFBQ0QsVUFBSSxFQUFFLGFBQVA7QUFBc0JFLFVBQUksRUFBRSxhQUE1QjtBQUEyQ0MsZUFBUyxFQUFFLGFBQXREO0FBQXFFQyxXQUFLLEVBQUU7QUFBNUUsS0FESyxFQUVMO0FBQUNKLFVBQUksRUFBRSxLQUFQO0FBQWNFLFVBQUksRUFBRTtBQUFwQixLQUZLLEVBR0w7QUFBQ0YsVUFBSSxFQUFFLFNBQVA7QUFBa0JFLFVBQUksRUFBRTtBQUF4QixLQUhLLEVBSUw7QUFBQ0YsVUFBSSxFQUFFLFFBQVA7QUFBaUJFLFVBQUksRUFBRSxRQUF2QjtBQUFnQ0MsZUFBUyxFQUFFLE1BQTNDO0FBQW1ERSxnQkFBVSxFQUFFLEtBQS9EO0FBQXNFQyxlQUFTLEVBQUU7QUFBakYsS0FKSztBQVBzQixHQUEzQixDQUFSO0FBY0gsQ0FsQkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL3BhcnRuZXIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XHJcbiAgICBjb25zdCBQYXJ0bmVyQ29udGFpbmVyID0gJCgnI3BhcnRuZXInKTtcclxuICAgIGNvbnN0IFBhcnRuZXJEYXRhdGFibGUgPSAkKCcjcGFydG5lci10YWJsZScsIFBhcnRuZXJDb250YWluZXIpO1xyXG5cclxuICAgIGxldCB0ID0gUGFydG5lckRhdGF0YWJsZS5EYXRhVGFibGUoe1xyXG4gICAgICAgIHByb2Nlc3Npbmc6IHRydWUsXHJcbiAgICAgICAgc2VydmVyU2lkZTogdHJ1ZSxcclxuICAgICAgICBkZWZlclJlbmRlcjogdHJ1ZSxcclxuICAgICAgICBhamF4OiB7XHJcbiAgICAgICAgICAgIHVybDogUGFydG5lckRhdGF0YWJsZS5kYXRhKCdyb3V0ZScpLFxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgY29sdW1uczogW1xyXG4gICAgICAgICAgICB7ZGF0YTogJ0RUX1Jvd0luZGV4JywgbmFtZTogJ0RUX1Jvd0luZGV4JywgY2xhc3NOYW1lOiAndGV4dC1jZW50ZXInLCB3aWR0aDogXCIzMHB4XCJ9LFxyXG4gICAgICAgICAgICB7ZGF0YTogJ2ltZycsIG5hbWU6ICdpbWcnfSxcclxuICAgICAgICAgICAge2RhdGE6ICduYW1lX2VuJywgbmFtZTogJ25hbWVfZW4nfSxcclxuICAgICAgICAgICAge2RhdGE6ICdhY3Rpb24nLCBuYW1lOiAnYWN0aW9uJyxjbGFzc05hbWU6ICd3LTEyJywgc2VhcmNoYWJsZTogZmFsc2UsIG9yZGVyYWJsZTogZmFsc2V9LFxyXG4gICAgICAgIF0sXHJcbiAgICB9KTtcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admins/pages/partner.js\n");

/***/ }),

/***/ 10:
/*!****************************************************!*\
  !*** multi ./resources/js/admins/pages/partner.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\pages\partner.js */"./resources/js/admins/pages/partner.js");


/***/ })

/******/ });