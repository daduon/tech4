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
/******/ 	return __webpack_require__(__webpack_require__.s = 14);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/pages/press.js":
/*!********************************************!*\
  !*** ./resources/js/admins/pages/press.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var PressContainer = $('#press');\n  var PressDatatable = $('#press-table', PressContainer);\n  var t = PressDatatable.DataTable({\n    processing: true,\n    serverSide: true,\n    deferRender: true,\n    ajax: {\n      url: PressDatatable.data('route')\n    },\n    columns: [{\n      data: 'DT_RowIndex',\n      name: 'DT_RowIndex',\n      className: 'text-center',\n      width: \"30px\"\n    }, {\n      data: 'thumbnail',\n      name: 'thumbnail'\n    }, {\n      data: 'title_en',\n      name: 'title_en'\n    }, {\n      data: 'text_en',\n      name: 'text_en'\n    }, {\n      data: 'action',\n      name: 'action',\n      className: 'w-12',\n      searchable: false,\n      orderable: false\n    }]\n  });\n  PressContainer.on('click', '.remove-img', function () {\n    var _this = $(this);\n\n    var id = $(this).data('id');\n    $.confirm({\n      title: 'Are you sure?',\n      type: 'red',\n      typeAnimated: true,\n      buttons: {\n        tryAgain: {\n          text: 'Confirm',\n          btnClass: 'btn-red',\n          action: function action() {\n            _this.closest('.preview-img').hide();\n\n            apiGalleryRemovePressGallery({\n              id: id\n            }).done(function (res) {\n              _this.closest('.preview-img').remove();\n\n              iziToast.success({\n                title: 'Success!',\n                message: \"Image has been deleted.\",\n                position: 'topRight'\n              });\n            });\n          }\n        },\n        close: function close() {}\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL3ByZXNzLmpzPzEyOGEiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJQcmVzc0NvbnRhaW5lciIsIlByZXNzRGF0YXRhYmxlIiwidCIsIkRhdGFUYWJsZSIsInByb2Nlc3NpbmciLCJzZXJ2ZXJTaWRlIiwiZGVmZXJSZW5kZXIiLCJhamF4IiwidXJsIiwiZGF0YSIsImNvbHVtbnMiLCJuYW1lIiwiY2xhc3NOYW1lIiwid2lkdGgiLCJzZWFyY2hhYmxlIiwib3JkZXJhYmxlIiwib24iLCJfdGhpcyIsImlkIiwiY29uZmlybSIsInRpdGxlIiwidHlwZSIsInR5cGVBbmltYXRlZCIsImJ1dHRvbnMiLCJ0cnlBZ2FpbiIsInRleHQiLCJidG5DbGFzcyIsImFjdGlvbiIsImNsb3Nlc3QiLCJoaWRlIiwiYXBpR2FsbGVyeVJlbW92ZVByZXNzR2FsbGVyeSIsImRvbmUiLCJyZXMiLCJyZW1vdmUiLCJpemlUb2FzdCIsInN1Y2Nlc3MiLCJtZXNzYWdlIiwicG9zaXRpb24iLCJjbG9zZSJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUMxQixNQUFNQyxjQUFjLEdBQUdILENBQUMsQ0FBQyxRQUFELENBQXhCO0FBQ0EsTUFBTUksY0FBYyxHQUFHSixDQUFDLENBQUMsY0FBRCxFQUFpQkcsY0FBakIsQ0FBeEI7QUFFQSxNQUFJRSxDQUFDLEdBQUdELGNBQWMsQ0FBQ0UsU0FBZixDQUF5QjtBQUM3QkMsY0FBVSxFQUFFLElBRGlCO0FBRTdCQyxjQUFVLEVBQUUsSUFGaUI7QUFHN0JDLGVBQVcsRUFBRSxJQUhnQjtBQUk3QkMsUUFBSSxFQUFFO0FBQ0ZDLFNBQUcsRUFBRVAsY0FBYyxDQUFDUSxJQUFmLENBQW9CLE9BQXBCO0FBREgsS0FKdUI7QUFPN0JDLFdBQU8sRUFBRSxDQUNMO0FBQUNELFVBQUksRUFBRSxhQUFQO0FBQXNCRSxVQUFJLEVBQUUsYUFBNUI7QUFBMkNDLGVBQVMsRUFBRSxhQUF0RDtBQUFxRUMsV0FBSyxFQUFFO0FBQTVFLEtBREssRUFFTDtBQUFDSixVQUFJLEVBQUUsV0FBUDtBQUFvQkUsVUFBSSxFQUFFO0FBQTFCLEtBRkssRUFHTDtBQUFDRixVQUFJLEVBQUUsVUFBUDtBQUFtQkUsVUFBSSxFQUFFO0FBQXpCLEtBSEssRUFJTDtBQUFDRixVQUFJLEVBQUUsU0FBUDtBQUFrQkUsVUFBSSxFQUFFO0FBQXhCLEtBSkssRUFLTDtBQUFDRixVQUFJLEVBQUUsUUFBUDtBQUFpQkUsVUFBSSxFQUFFLFFBQXZCO0FBQWdDQyxlQUFTLEVBQUUsTUFBM0M7QUFBbURFLGdCQUFVLEVBQUUsS0FBL0Q7QUFBc0VDLGVBQVMsRUFBRTtBQUFqRixLQUxLO0FBUG9CLEdBQXpCLENBQVI7QUFnQkFmLGdCQUFjLENBQUNnQixFQUFmLENBQWtCLE9BQWxCLEVBQTBCLGFBQTFCLEVBQXdDLFlBQVk7QUFFaEQsUUFBSUMsS0FBSyxHQUFHcEIsQ0FBQyxDQUFDLElBQUQsQ0FBYjs7QUFDQSxRQUFJcUIsRUFBRSxHQUFHckIsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRWSxJQUFSLENBQWEsSUFBYixDQUFUO0FBQ0FaLEtBQUMsQ0FBQ3NCLE9BQUYsQ0FBVTtBQUNOQyxXQUFLLEVBQUUsZUFERDtBQUVOQyxVQUFJLEVBQUUsS0FGQTtBQUdOQyxrQkFBWSxFQUFFLElBSFI7QUFJTkMsYUFBTyxFQUFFO0FBQ0xDLGdCQUFRLEVBQUU7QUFDTkMsY0FBSSxFQUFFLFNBREE7QUFFTkMsa0JBQVEsRUFBRSxTQUZKO0FBR05DLGdCQUFNLEVBQUUsa0JBQVU7QUFDZFYsaUJBQUssQ0FBQ1csT0FBTixDQUFjLGNBQWQsRUFBOEJDLElBQTlCOztBQUNBQyx3Q0FBNEIsQ0FBQztBQUFDWixnQkFBRSxFQUFHQTtBQUFOLGFBQUQsQ0FBNUIsQ0FBd0NhLElBQXhDLENBQTZDLFVBQVVDLEdBQVYsRUFBYztBQUN2RGYsbUJBQUssQ0FBQ1csT0FBTixDQUFjLGNBQWQsRUFBOEJLLE1BQTlCOztBQUNBQyxzQkFBUSxDQUFDQyxPQUFULENBQWlCO0FBQ2JmLHFCQUFLLEVBQUUsVUFETTtBQUViZ0IsdUJBQU8sRUFBRSx5QkFGSTtBQUdiQyx3QkFBUSxFQUFFO0FBSEcsZUFBakI7QUFLSCxhQVBEO0FBUUg7QUFiSyxTQURMO0FBZ0JMQyxhQUFLLEVBQUUsaUJBQVksQ0FDbEI7QUFqQkk7QUFKSCxLQUFWO0FBd0JILEdBNUJEO0FBNkJILENBakREIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2FkbWlucy9wYWdlcy9wcmVzcy5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAgIGNvbnN0IFByZXNzQ29udGFpbmVyID0gJCgnI3ByZXNzJyk7XHJcbiAgICBjb25zdCBQcmVzc0RhdGF0YWJsZSA9ICQoJyNwcmVzcy10YWJsZScsIFByZXNzQ29udGFpbmVyKTtcclxuXHJcbiAgICBsZXQgdCA9IFByZXNzRGF0YXRhYmxlLkRhdGFUYWJsZSh7XHJcbiAgICAgICAgcHJvY2Vzc2luZzogdHJ1ZSxcclxuICAgICAgICBzZXJ2ZXJTaWRlOiB0cnVlLFxyXG4gICAgICAgIGRlZmVyUmVuZGVyOiB0cnVlLFxyXG4gICAgICAgIGFqYXg6IHtcclxuICAgICAgICAgICAgdXJsOiBQcmVzc0RhdGF0YWJsZS5kYXRhKCdyb3V0ZScpLFxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgY29sdW1uczogW1xyXG4gICAgICAgICAgICB7ZGF0YTogJ0RUX1Jvd0luZGV4JywgbmFtZTogJ0RUX1Jvd0luZGV4JywgY2xhc3NOYW1lOiAndGV4dC1jZW50ZXInLCB3aWR0aDogXCIzMHB4XCJ9LFxyXG4gICAgICAgICAgICB7ZGF0YTogJ3RodW1ibmFpbCcsIG5hbWU6ICd0aHVtYm5haWwnfSxcclxuICAgICAgICAgICAge2RhdGE6ICd0aXRsZV9lbicsIG5hbWU6ICd0aXRsZV9lbid9LFxyXG4gICAgICAgICAgICB7ZGF0YTogJ3RleHRfZW4nLCBuYW1lOiAndGV4dF9lbid9LFxyXG4gICAgICAgICAgICB7ZGF0YTogJ2FjdGlvbicsIG5hbWU6ICdhY3Rpb24nLGNsYXNzTmFtZTogJ3ctMTInLCBzZWFyY2hhYmxlOiBmYWxzZSwgb3JkZXJhYmxlOiBmYWxzZX0sXHJcbiAgICAgICAgXSxcclxuICAgIH0pO1xyXG5cclxuICAgIFByZXNzQ29udGFpbmVyLm9uKCdjbGljaycsJy5yZW1vdmUtaW1nJyxmdW5jdGlvbiAoKSB7XHJcblxyXG4gICAgICAgIGxldCBfdGhpcyA9ICQodGhpcyk7XHJcbiAgICAgICAgbGV0IGlkID0gJCh0aGlzKS5kYXRhKCdpZCcpO1xyXG4gICAgICAgICQuY29uZmlybSh7XHJcbiAgICAgICAgICAgIHRpdGxlOiAnQXJlIHlvdSBzdXJlPycsXHJcbiAgICAgICAgICAgIHR5cGU6ICdyZWQnLFxyXG4gICAgICAgICAgICB0eXBlQW5pbWF0ZWQ6IHRydWUsXHJcbiAgICAgICAgICAgIGJ1dHRvbnM6IHtcclxuICAgICAgICAgICAgICAgIHRyeUFnYWluOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgdGV4dDogJ0NvbmZpcm0nLFxyXG4gICAgICAgICAgICAgICAgICAgIGJ0bkNsYXNzOiAnYnRuLXJlZCcsXHJcbiAgICAgICAgICAgICAgICAgICAgYWN0aW9uOiBmdW5jdGlvbigpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBfdGhpcy5jbG9zZXN0KCcucHJldmlldy1pbWcnKS5oaWRlKCk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIGFwaUdhbGxlcnlSZW1vdmVQcmVzc0dhbGxlcnkoe2lkIDogaWR9KS5kb25lKGZ1bmN0aW9uIChyZXMpe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgX3RoaXMuY2xvc2VzdCgnLnByZXZpZXctaW1nJykucmVtb3ZlKCk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpemlUb2FzdC5zdWNjZXNzKHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0aXRsZTogJ1N1Y2Nlc3MhJyxcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXNzYWdlOiBcIkltYWdlIGhhcyBiZWVuIGRlbGV0ZWQuXCIsXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgcG9zaXRpb246ICd0b3BSaWdodCdcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcclxuICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB9LFxyXG4gICAgICAgICAgICAgICAgY2xvc2U6IGZ1bmN0aW9uICgpIHtcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/admins/pages/press.js\n");

/***/ }),

/***/ 14:
/*!**************************************************!*\
  !*** multi ./resources/js/admins/pages/press.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\pages\press.js */"./resources/js/admins/pages/press.js");


/***/ })

/******/ });