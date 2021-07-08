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
/******/ 	return __webpack_require__(__webpack_require__.s = 12);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/pages/gallery.js":
/*!**********************************************!*\
  !*** ./resources/js/admins/pages/gallery.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var GalleryContainer = $('#gallery');\n  var GalleryDatatable = $('#gallery-table', GalleryContainer);\n  var t = GalleryDatatable.DataTable({\n    processing: true,\n    serverSide: true,\n    deferRender: true,\n    ajax: {\n      url: GalleryDatatable.data('route')\n    },\n    columns: [{\n      data: 'DT_RowIndex',\n      name: 'DT_RowIndex',\n      className: 'text-center',\n      width: \"30px\"\n    }, {\n      data: 'page',\n      name: 'page'\n    }, {\n      data: 'action',\n      name: 'action',\n      className: 'w-12',\n      searchable: false,\n      orderable: false\n    }]\n  });\n  GalleryContainer.on('click', '.remove-img', function () {\n    var _this = $(this);\n\n    var id = $(this).data('id');\n    $.confirm({\n      title: 'Are you sure?',\n      type: 'red',\n      typeAnimated: true,\n      buttons: {\n        tryAgain: {\n          text: 'Confirm',\n          btnClass: 'btn-red',\n          action: function action() {\n            _this.closest('.preview-img').hide();\n\n            apiGalleryRemoveImg({\n              id: id\n            }).done(function (res) {\n              _this.closest('.preview-img').remove();\n\n              iziToast.success({\n                title: 'Success!',\n                message: \"Image has been deleted.\",\n                position: 'topRight'\n              });\n            });\n          }\n        },\n        close: function close() {}\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL2dhbGxlcnkuanM/NWI0OCJdLCJuYW1lcyI6WyIkIiwiZG9jdW1lbnQiLCJyZWFkeSIsIkdhbGxlcnlDb250YWluZXIiLCJHYWxsZXJ5RGF0YXRhYmxlIiwidCIsIkRhdGFUYWJsZSIsInByb2Nlc3NpbmciLCJzZXJ2ZXJTaWRlIiwiZGVmZXJSZW5kZXIiLCJhamF4IiwidXJsIiwiZGF0YSIsImNvbHVtbnMiLCJuYW1lIiwiY2xhc3NOYW1lIiwid2lkdGgiLCJzZWFyY2hhYmxlIiwib3JkZXJhYmxlIiwib24iLCJfdGhpcyIsImlkIiwiY29uZmlybSIsInRpdGxlIiwidHlwZSIsInR5cGVBbmltYXRlZCIsImJ1dHRvbnMiLCJ0cnlBZ2FpbiIsInRleHQiLCJidG5DbGFzcyIsImFjdGlvbiIsImNsb3Nlc3QiLCJoaWRlIiwiYXBpR2FsbGVyeVJlbW92ZUltZyIsImRvbmUiLCJyZXMiLCJyZW1vdmUiLCJpemlUb2FzdCIsInN1Y2Nlc3MiLCJtZXNzYWdlIiwicG9zaXRpb24iLCJjbG9zZSJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUMxQixNQUFNQyxnQkFBZ0IsR0FBR0gsQ0FBQyxDQUFDLFVBQUQsQ0FBMUI7QUFDQSxNQUFNSSxnQkFBZ0IsR0FBR0osQ0FBQyxDQUFDLGdCQUFELEVBQW1CRyxnQkFBbkIsQ0FBMUI7QUFFQSxNQUFJRSxDQUFDLEdBQUdELGdCQUFnQixDQUFDRSxTQUFqQixDQUEyQjtBQUMvQkMsY0FBVSxFQUFFLElBRG1CO0FBRS9CQyxjQUFVLEVBQUUsSUFGbUI7QUFHL0JDLGVBQVcsRUFBRSxJQUhrQjtBQUkvQkMsUUFBSSxFQUFFO0FBQ0ZDLFNBQUcsRUFBRVAsZ0JBQWdCLENBQUNRLElBQWpCLENBQXNCLE9BQXRCO0FBREgsS0FKeUI7QUFPL0JDLFdBQU8sRUFBRSxDQUNMO0FBQUNELFVBQUksRUFBRSxhQUFQO0FBQXNCRSxVQUFJLEVBQUUsYUFBNUI7QUFBMkNDLGVBQVMsRUFBRSxhQUF0RDtBQUFxRUMsV0FBSyxFQUFFO0FBQTVFLEtBREssRUFFTDtBQUFDSixVQUFJLEVBQUUsTUFBUDtBQUFlRSxVQUFJLEVBQUU7QUFBckIsS0FGSyxFQUdMO0FBQUNGLFVBQUksRUFBRSxRQUFQO0FBQWlCRSxVQUFJLEVBQUUsUUFBdkI7QUFBZ0NDLGVBQVMsRUFBRSxNQUEzQztBQUFtREUsZ0JBQVUsRUFBRSxLQUEvRDtBQUFzRUMsZUFBUyxFQUFFO0FBQWpGLEtBSEs7QUFQc0IsR0FBM0IsQ0FBUjtBQWNBZixrQkFBZ0IsQ0FBQ2dCLEVBQWpCLENBQW9CLE9BQXBCLEVBQTRCLGFBQTVCLEVBQTBDLFlBQVk7QUFDbEQsUUFBSUMsS0FBSyxHQUFHcEIsQ0FBQyxDQUFDLElBQUQsQ0FBYjs7QUFDQSxRQUFJcUIsRUFBRSxHQUFHckIsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRWSxJQUFSLENBQWEsSUFBYixDQUFUO0FBQ0FaLEtBQUMsQ0FBQ3NCLE9BQUYsQ0FBVTtBQUNOQyxXQUFLLEVBQUUsZUFERDtBQUVOQyxVQUFJLEVBQUUsS0FGQTtBQUdOQyxrQkFBWSxFQUFFLElBSFI7QUFJTkMsYUFBTyxFQUFFO0FBQ0xDLGdCQUFRLEVBQUU7QUFDTkMsY0FBSSxFQUFFLFNBREE7QUFFTkMsa0JBQVEsRUFBRSxTQUZKO0FBR05DLGdCQUFNLEVBQUUsa0JBQVU7QUFDZFYsaUJBQUssQ0FBQ1csT0FBTixDQUFjLGNBQWQsRUFBOEJDLElBQTlCOztBQUNBQywrQkFBbUIsQ0FBQztBQUFDWixnQkFBRSxFQUFHQTtBQUFOLGFBQUQsQ0FBbkIsQ0FBK0JhLElBQS9CLENBQW9DLFVBQVVDLEdBQVYsRUFBYztBQUM5Q2YsbUJBQUssQ0FBQ1csT0FBTixDQUFjLGNBQWQsRUFBOEJLLE1BQTlCOztBQUNBQyxzQkFBUSxDQUFDQyxPQUFULENBQWlCO0FBQ2JmLHFCQUFLLEVBQUUsVUFETTtBQUViZ0IsdUJBQU8sRUFBRSx5QkFGSTtBQUdiQyx3QkFBUSxFQUFFO0FBSEcsZUFBakI7QUFLSCxhQVBEO0FBUUg7QUFiSyxTQURMO0FBZ0JMQyxhQUFLLEVBQUUsaUJBQVksQ0FDbEI7QUFqQkk7QUFKSCxLQUFWO0FBd0JILEdBM0JEO0FBNEJILENBOUNEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2FkbWlucy9wYWdlcy9nYWxsZXJ5LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xyXG4gICAgY29uc3QgR2FsbGVyeUNvbnRhaW5lciA9ICQoJyNnYWxsZXJ5Jyk7XHJcbiAgICBjb25zdCBHYWxsZXJ5RGF0YXRhYmxlID0gJCgnI2dhbGxlcnktdGFibGUnLCBHYWxsZXJ5Q29udGFpbmVyKTtcclxuXHJcbiAgICBsZXQgdCA9IEdhbGxlcnlEYXRhdGFibGUuRGF0YVRhYmxlKHtcclxuICAgICAgICBwcm9jZXNzaW5nOiB0cnVlLFxyXG4gICAgICAgIHNlcnZlclNpZGU6IHRydWUsXHJcbiAgICAgICAgZGVmZXJSZW5kZXI6IHRydWUsXHJcbiAgICAgICAgYWpheDoge1xyXG4gICAgICAgICAgICB1cmw6IEdhbGxlcnlEYXRhdGFibGUuZGF0YSgncm91dGUnKSxcclxuICAgICAgICB9LFxyXG4gICAgICAgIGNvbHVtbnM6IFtcclxuICAgICAgICAgICAge2RhdGE6ICdEVF9Sb3dJbmRleCcsIG5hbWU6ICdEVF9Sb3dJbmRleCcsIGNsYXNzTmFtZTogJ3RleHQtY2VudGVyJywgd2lkdGg6IFwiMzBweFwifSxcclxuICAgICAgICAgICAge2RhdGE6ICdwYWdlJywgbmFtZTogJ3BhZ2UnfSxcclxuICAgICAgICAgICAge2RhdGE6ICdhY3Rpb24nLCBuYW1lOiAnYWN0aW9uJyxjbGFzc05hbWU6ICd3LTEyJywgc2VhcmNoYWJsZTogZmFsc2UsIG9yZGVyYWJsZTogZmFsc2V9LFxyXG4gICAgICAgIF0sXHJcbiAgICB9KTtcclxuXHJcbiAgICBHYWxsZXJ5Q29udGFpbmVyLm9uKCdjbGljaycsJy5yZW1vdmUtaW1nJyxmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgbGV0IF90aGlzID0gJCh0aGlzKTtcclxuICAgICAgICBsZXQgaWQgPSAkKHRoaXMpLmRhdGEoJ2lkJyk7XHJcbiAgICAgICAgJC5jb25maXJtKHtcclxuICAgICAgICAgICAgdGl0bGU6ICdBcmUgeW91IHN1cmU/JyxcclxuICAgICAgICAgICAgdHlwZTogJ3JlZCcsXHJcbiAgICAgICAgICAgIHR5cGVBbmltYXRlZDogdHJ1ZSxcclxuICAgICAgICAgICAgYnV0dG9uczoge1xyXG4gICAgICAgICAgICAgICAgdHJ5QWdhaW46IHtcclxuICAgICAgICAgICAgICAgICAgICB0ZXh0OiAnQ29uZmlybScsXHJcbiAgICAgICAgICAgICAgICAgICAgYnRuQ2xhc3M6ICdidG4tcmVkJyxcclxuICAgICAgICAgICAgICAgICAgICBhY3Rpb246IGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIF90aGlzLmNsb3Nlc3QoJy5wcmV2aWV3LWltZycpLmhpZGUoKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgYXBpR2FsbGVyeVJlbW92ZUltZyh7aWQgOiBpZH0pLmRvbmUoZnVuY3Rpb24gKHJlcyl7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBfdGhpcy5jbG9zZXN0KCcucHJldmlldy1pbWcnKS5yZW1vdmUoKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGl6aVRvYXN0LnN1Y2Nlc3Moe1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRpdGxlOiAnU3VjY2VzcyEnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIG1lc3NhZ2U6IFwiSW1hZ2UgaGFzIGJlZW4gZGVsZXRlZC5cIixcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBwb3NpdGlvbjogJ3RvcFJpZ2h0J1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICBjbG9zZTogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9KTtcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admins/pages/gallery.js\n");

/***/ }),

/***/ 12:
/*!****************************************************!*\
  !*** multi ./resources/js/admins/pages/gallery.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\pages\gallery.js */"./resources/js/admins/pages/gallery.js");


/***/ })

/******/ });