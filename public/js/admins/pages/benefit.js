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
/******/ 	return __webpack_require__(__webpack_require__.s = 11);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/pages/benefit.js":
/*!**********************************************!*\
  !*** ./resources/js/admins/pages/benefit.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var BenefitContainer = $('#benefit');\n  var BenefitDatatable = $('#benefit-table', BenefitContainer);\n  var t = BenefitDatatable.DataTable({\n    processing: true,\n    serverSide: true,\n    deferRender: true,\n    ajax: {\n      url: BenefitDatatable.data('route')\n    },\n    columns: [{\n      data: 'DT_RowIndex',\n      name: 'DT_RowIndex',\n      className: 'text-center',\n      width: \"30px\"\n    }, {\n      data: 'icon_img',\n      name: 'icon_img'\n    }, {\n      data: 'title_en',\n      name: 'title_en'\n    }, {\n      data: 'text_en',\n      name: 'text_en'\n    }, {\n      data: 'page',\n      name: 'page'\n    }, {\n      data: 'action',\n      name: 'action',\n      className: 'w-12',\n      searchable: false,\n      orderable: false\n    }]\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL2JlbmVmaXQuanM/OTVjNSJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsIkJlbmVmaXRDb250YWluZXIiLCJCZW5lZml0RGF0YXRhYmxlIiwidCIsIkRhdGFUYWJsZSIsInByb2Nlc3NpbmciLCJzZXJ2ZXJTaWRlIiwiZGVmZXJSZW5kZXIiLCJhamF4IiwidXJsIiwiZGF0YSIsImNvbHVtbnMiLCJuYW1lIiwiY2xhc3NOYW1lIiwid2lkdGgiLCJzZWFyY2hhYmxlIiwib3JkZXJhYmxlIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFZO0FBQzFCLE1BQU1DLGdCQUFnQixHQUFHSCxDQUFDLENBQUMsVUFBRCxDQUExQjtBQUNBLE1BQU1JLGdCQUFnQixHQUFHSixDQUFDLENBQUMsZ0JBQUQsRUFBbUJHLGdCQUFuQixDQUExQjtBQUVBLE1BQUlFLENBQUMsR0FBR0QsZ0JBQWdCLENBQUNFLFNBQWpCLENBQTJCO0FBQy9CQyxjQUFVLEVBQUUsSUFEbUI7QUFFL0JDLGNBQVUsRUFBRSxJQUZtQjtBQUcvQkMsZUFBVyxFQUFFLElBSGtCO0FBSS9CQyxRQUFJLEVBQUU7QUFDRkMsU0FBRyxFQUFFUCxnQkFBZ0IsQ0FBQ1EsSUFBakIsQ0FBc0IsT0FBdEI7QUFESCxLQUp5QjtBQU8vQkMsV0FBTyxFQUFFLENBQ0w7QUFBQ0QsVUFBSSxFQUFFLGFBQVA7QUFBc0JFLFVBQUksRUFBRSxhQUE1QjtBQUEyQ0MsZUFBUyxFQUFFLGFBQXREO0FBQXFFQyxXQUFLLEVBQUU7QUFBNUUsS0FESyxFQUVMO0FBQUNKLFVBQUksRUFBRSxVQUFQO0FBQW1CRSxVQUFJLEVBQUU7QUFBekIsS0FGSyxFQUdMO0FBQUNGLFVBQUksRUFBRSxVQUFQO0FBQW1CRSxVQUFJLEVBQUU7QUFBekIsS0FISyxFQUlMO0FBQUNGLFVBQUksRUFBRSxTQUFQO0FBQWtCRSxVQUFJLEVBQUU7QUFBeEIsS0FKSyxFQUtMO0FBQUNGLFVBQUksRUFBRSxNQUFQO0FBQWVFLFVBQUksRUFBRTtBQUFyQixLQUxLLEVBTUw7QUFBQ0YsVUFBSSxFQUFFLFFBQVA7QUFBaUJFLFVBQUksRUFBRSxRQUF2QjtBQUFnQ0MsZUFBUyxFQUFFLE1BQTNDO0FBQW1ERSxnQkFBVSxFQUFFLEtBQS9EO0FBQXNFQyxlQUFTLEVBQUU7QUFBakYsS0FOSztBQVBzQixHQUEzQixDQUFSO0FBZ0JILENBcEJEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2FkbWlucy9wYWdlcy9iZW5lZml0LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xyXG4gICAgY29uc3QgQmVuZWZpdENvbnRhaW5lciA9ICQoJyNiZW5lZml0Jyk7XHJcbiAgICBjb25zdCBCZW5lZml0RGF0YXRhYmxlID0gJCgnI2JlbmVmaXQtdGFibGUnLCBCZW5lZml0Q29udGFpbmVyKTtcclxuXHJcbiAgICBsZXQgdCA9IEJlbmVmaXREYXRhdGFibGUuRGF0YVRhYmxlKHtcclxuICAgICAgICBwcm9jZXNzaW5nOiB0cnVlLFxyXG4gICAgICAgIHNlcnZlclNpZGU6IHRydWUsXHJcbiAgICAgICAgZGVmZXJSZW5kZXI6IHRydWUsXHJcbiAgICAgICAgYWpheDoge1xyXG4gICAgICAgICAgICB1cmw6IEJlbmVmaXREYXRhdGFibGUuZGF0YSgncm91dGUnKSxcclxuICAgICAgICB9LFxyXG4gICAgICAgIGNvbHVtbnM6IFtcclxuICAgICAgICAgICAge2RhdGE6ICdEVF9Sb3dJbmRleCcsIG5hbWU6ICdEVF9Sb3dJbmRleCcsIGNsYXNzTmFtZTogJ3RleHQtY2VudGVyJywgd2lkdGg6IFwiMzBweFwifSxcclxuICAgICAgICAgICAge2RhdGE6ICdpY29uX2ltZycsIG5hbWU6ICdpY29uX2ltZyd9LFxyXG4gICAgICAgICAgICB7ZGF0YTogJ3RpdGxlX2VuJywgbmFtZTogJ3RpdGxlX2VuJ30sXHJcbiAgICAgICAgICAgIHtkYXRhOiAndGV4dF9lbicsIG5hbWU6ICd0ZXh0X2VuJ30sXHJcbiAgICAgICAgICAgIHtkYXRhOiAncGFnZScsIG5hbWU6ICdwYWdlJ30sXHJcbiAgICAgICAgICAgIHtkYXRhOiAnYWN0aW9uJywgbmFtZTogJ2FjdGlvbicsY2xhc3NOYW1lOiAndy0xMicsIHNlYXJjaGFibGU6IGZhbHNlLCBvcmRlcmFibGU6IGZhbHNlfSxcclxuICAgICAgICBdLFxyXG4gICAgfSk7XHJcbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/admins/pages/benefit.js\n");

/***/ }),

/***/ 11:
/*!****************************************************!*\
  !*** multi ./resources/js/admins/pages/benefit.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\pages\benefit.js */"./resources/js/admins/pages/benefit.js");


/***/ })

/******/ });