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
/******/ 	return __webpack_require__(__webpack_require__.s = 19);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/pages/parent.js":
/*!*********************************************!*\
  !*** ./resources/js/admins/pages/parent.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var parentContainer = $('#parent');\n  parentContainer.on('click', '.btn-add-benefit', function () {\n    parentContainer.find('#benefit').append(\"<div class=\\\"form-row\\\">\\n                                                <div class=\\\"form-group col-md-5\\\">\\n                                                    <label>Title<span class=\\\"note\\\">*</span> <img class=\\\"img-flag\\\" src=\\\"/images/flag/en.jpg\\\"></label>\\n                                                    <input name=\\\"title_en[]\\\"  type=\\\"text\\\" class=\\\"form-control mb-3\\\">\\n                                                   <label>Text <img class=\\\"img-flag\\\" src=\\\"/images/flag/en.jpg\\\"></label>\\n                                                    <textarea name=\\\"text_en[]\\\" cols=\\\"30\\\" class=\\\"form-control\\\" id=\\\"text_en\\\"rows=\\\"4\\\"></textarea>\\n                                                </div>\\n                                                <div class=\\\"form-group col-md-5\\\">\\n                                                    <label>Title <img class=\\\"img-flag\\\" src=\\\"/images/flag/kh.jpg\\\"></label>\\n                                                    <input name=\\\"title_kh[]\\\" type=\\\"text\\\" class=\\\"form-control mb-3\\\">\\n            \\n                                                    <label>Text <img class=\\\"img-flag\\\" src=\\\"/images/flag/kh.jpg\\\"></label>\\n                                                    <textarea name=\\\"text_kh\\\" cols=\\\"30\\\" class=\\\"form-control\\\" id=\\\"text_kh\\\" rows=\\\"4\\\"></textarea>\\n                                                </div>\\n                                                <div class=\\\"col-md-2\\\">\\n                                                   <div class=\\\"form-group text-center mb-1\\\">\\n                                                        <h6>Icon Image </h6>\\n                                                        <p class=\\\"note mb-1\\\">(500px * 500px)</p>\\n                                                        <img class=\\\"img-fluid\\\" src=\\\"/images/benefit.png\\\" alt=\\\"Image\\\">\\n                                                       <input type=\\\"file\\\" name=\\\"icon_img\\\" accept=\\\"image/x-png,image/jpg\\\" class=\\\"file-hidden preview-image \\\" value=\\\"submit\\\" id=\\\"icon_img\\\">\\n                                                    </div>\\n                                                    <div class=\\\"text-center\\\">\\n                                                        <label for=\\\"icon_img\\\" class=\\\"btn btn-info text-white btn-sm mt-2\\\"><i class=\\\"fa fa-window-maximize\\\"></i> Browse</label>\\n                                                    </div>\\n                                                   <div class=\\\"btn-add text-center\\\">\\n                                                       <div class=\\\"input-group-append\\\">\\n                                                           <span class=\\\"btn btn-danger btn-add-benefit\\\">Remove</span>\\n                                                       </div>\\n                                                   </div>\\n                                                </div>\\n                                            </div>\");\n  });\n  parentContainer.on('click', '.btn-remove', function () {\n    $(this).closest('tr').remove();\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL3BhcmVudC5qcz81MGNiIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwicGFyZW50Q29udGFpbmVyIiwib24iLCJmaW5kIiwiYXBwZW5kIiwiY2xvc2VzdCIsInJlbW92ZSJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUMxQixNQUFNQyxlQUFlLEdBQUdILENBQUMsQ0FBQyxTQUFELENBQXpCO0FBRUFHLGlCQUFlLENBQUNDLEVBQWhCLENBQW1CLE9BQW5CLEVBQTJCLGtCQUEzQixFQUErQyxZQUFVO0FBQ3JERCxtQkFBZSxDQUFDRSxJQUFoQixDQUFxQixVQUFyQixFQUFpQ0MsTUFBakM7QUErQkgsR0FoQ0Q7QUFrQ0FILGlCQUFlLENBQUNDLEVBQWhCLENBQW1CLE9BQW5CLEVBQTRCLGFBQTVCLEVBQTJDLFlBQVk7QUFDbkRKLEtBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUU8sT0FBUixDQUFnQixJQUFoQixFQUFzQkMsTUFBdEI7QUFFSCxHQUhEO0FBSUgsQ0F6Q0QiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL3BhcmVudC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAgIGNvbnN0IHBhcmVudENvbnRhaW5lciA9ICQoJyNwYXJlbnQnKTtcclxuXHJcbiAgICBwYXJlbnRDb250YWluZXIub24oJ2NsaWNrJywnLmJ0bi1hZGQtYmVuZWZpdCcsIGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgcGFyZW50Q29udGFpbmVyLmZpbmQoJyNiZW5lZml0JykuYXBwZW5kKGA8ZGl2IGNsYXNzPVwiZm9ybS1yb3dcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImZvcm0tZ3JvdXAgY29sLW1kLTVcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxsYWJlbD5UaXRsZTxzcGFuIGNsYXNzPVwibm90ZVwiPio8L3NwYW4+IDxpbWcgY2xhc3M9XCJpbWctZmxhZ1wiIHNyYz1cIi9pbWFnZXMvZmxhZy9lbi5qcGdcIj48L2xhYmVsPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGlucHV0IG5hbWU9XCJ0aXRsZV9lbltdXCIgIHR5cGU9XCJ0ZXh0XCIgY2xhc3M9XCJmb3JtLWNvbnRyb2wgbWItM1wiPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+VGV4dCA8aW1nIGNsYXNzPVwiaW1nLWZsYWdcIiBzcmM9XCIvaW1hZ2VzL2ZsYWcvZW4uanBnXCI+PC9sYWJlbD5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZXh0YXJlYSBuYW1lPVwidGV4dF9lbltdXCIgY29scz1cIjMwXCIgY2xhc3M9XCJmb3JtLWNvbnRyb2xcIiBpZD1cInRleHRfZW5cInJvd3M9XCI0XCI+PC90ZXh0YXJlYT5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJmb3JtLWdyb3VwIGNvbC1tZC01XCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+VGl0bGUgPGltZyBjbGFzcz1cImltZy1mbGFnXCIgc3JjPVwiL2ltYWdlcy9mbGFnL2toLmpwZ1wiPjwvbGFiZWw+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aW5wdXQgbmFtZT1cInRpdGxlX2toW11cIiB0eXBlPVwidGV4dFwiIGNsYXNzPVwiZm9ybS1jb250cm9sIG1iLTNcIj5cclxuICAgICAgICAgICAgXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8bGFiZWw+VGV4dCA8aW1nIGNsYXNzPVwiaW1nLWZsYWdcIiBzcmM9XCIvaW1hZ2VzL2ZsYWcva2guanBnXCI+PC9sYWJlbD5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZXh0YXJlYSBuYW1lPVwidGV4dF9raFwiIGNvbHM9XCIzMFwiIGNsYXNzPVwiZm9ybS1jb250cm9sXCIgaWQ9XCJ0ZXh0X2toXCIgcm93cz1cIjRcIj48L3RleHRhcmVhPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cImNvbC1tZC0yXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJmb3JtLWdyb3VwIHRleHQtY2VudGVyIG1iLTFcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8aDY+SWNvbiBJbWFnZSA8L2g2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwIGNsYXNzPVwibm90ZSBtYi0xXCI+KDUwMHB4ICogNTAwcHgpPC9wPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbWcgY2xhc3M9XCJpbWctZmx1aWRcIiBzcmM9XCIvaW1hZ2VzL2JlbmVmaXQucG5nXCIgYWx0PVwiSW1hZ2VcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpbnB1dCB0eXBlPVwiZmlsZVwiIG5hbWU9XCJpY29uX2ltZ1wiIGFjY2VwdD1cImltYWdlL3gtcG5nLGltYWdlL2pwZ1wiIGNsYXNzPVwiZmlsZS1oaWRkZW4gcHJldmlldy1pbWFnZSBcIiB2YWx1ZT1cInN1Ym1pdFwiIGlkPVwiaWNvbl9pbWdcIj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cInRleHQtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGxhYmVsIGZvcj1cImljb25faW1nXCIgY2xhc3M9XCJidG4gYnRuLWluZm8gdGV4dC13aGl0ZSBidG4tc20gbXQtMlwiPjxpIGNsYXNzPVwiZmEgZmEtd2luZG93LW1heGltaXplXCI+PC9pPiBCcm93c2U8L2xhYmVsPlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XCJidG4tYWRkIHRleHQtY2VudGVyXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVwiaW5wdXQtZ3JvdXAtYXBwZW5kXCI+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XCJidG4gYnRuLWRhbmdlciBidG4tYWRkLWJlbmVmaXRcIj5SZW1vdmU8L3NwYW4+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9kaXY+XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PlxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvZGl2PmApXHJcbiAgICB9KTtcclxuXHJcbiAgICBwYXJlbnRDb250YWluZXIub24oJ2NsaWNrJywgJy5idG4tcmVtb3ZlJywgZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICQodGhpcykuY2xvc2VzdCgndHInKS5yZW1vdmUoKTtcclxuXHJcbiAgICB9KTtcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admins/pages/parent.js\n");

/***/ }),

/***/ 19:
/*!***************************************************!*\
  !*** multi ./resources/js/admins/pages/parent.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\pages\parent.js */"./resources/js/admins/pages/parent.js");


/***/ })

/******/ });