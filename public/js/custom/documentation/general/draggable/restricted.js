/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/core/js/custom/documentation/general/draggable/restricted.js":
/*!***************************************************************************************!*\
  !*** ./resources/assets/core/js/custom/documentation/general/draggable/restricted.js ***!
  \***************************************************************************************/
/***/ (() => {

eval(" // Class definition\n\nvar KTDraggableRestricted = function () {\n  // Private functions\n  var exampleRestricted = function exampleRestricted() {\n    var containers = document.querySelectorAll('.draggable-zone');\n    var restrcitedWrapper = document.querySelector('[data-kt-draggable-level=\"restricted\"]');\n\n    if (containers.length === 0) {\n      return false;\n    }\n\n    var droppable = new Droppable[\"default\"](containers, {\n      draggable: '.draggable',\n      dropzone: '.draggable-zone',\n      handle: '.draggable .draggable-handle',\n      mirror: {\n        //appendTo: selector,\n        appendTo: 'body',\n        constrainDimensions: true\n      }\n    }); // Define draggable element variable for permissions level\n\n    var droppableOrigin; // Handle drag start event -- more info: https://shopify.github.io/draggable/docs/class/src/Draggable/DragEvent/DragEvent.js~DragEvent.html\n\n    droppable.on('drag:start', function (e) {\n      droppableOrigin = e.originalSource.getAttribute('data-kt-draggable-level');\n    }); // Handle drag over event -- more info: https://shopify.github.io/draggable/docs/class/src/Draggable/DragEvent/DragEvent.js~DragOverEvent.html\n\n    droppable.on('drag:over', function (e) {\n      var isRestricted = e.overContainer.closest('[data-kt-draggable-level=\"restricted\"]');\n\n      if (isRestricted) {\n        if (droppableOrigin !== 'admin') {\n          restrcitedWrapper.classList.add('bg-light-danger');\n        } else {\n          restrcitedWrapper.classList.remove('bg-light-danger');\n        }\n      } else {\n        restrcitedWrapper.classList.remove('bg-light-danger');\n      }\n    }); // Handle drag stop event -- more info: https://shopify.github.io/draggable/docs/class/src/Draggable/DragEvent/DragEvent.js~DragStopEvent.html\n\n    droppable.on('drag:stop', function (e) {\n      // remove all draggable occupied limit\n      containers.forEach(function (c) {\n        c.classList.remove('draggable-dropzone--occupied');\n      }); // Remove restricted alert\n\n      restrcitedWrapper.classList.remove('bg-light-danger');\n    }); // Handle drop event -- https://shopify.github.io/draggable/docs/class/src/Droppable/DroppableEvent/DroppableEvent.js~DroppableDroppedEvent.html\n\n    droppable.on('droppable:dropped', function (e) {\n      var isRestricted = e.dropzone.closest('[data-kt-draggable-level=\"restricted\"]'); // Detect if drop container is restricted\n\n      if (isRestricted) {\n        // Check if dragged element has permission level\n        if (droppableOrigin !== 'admin') {\n          restrcitedWrapper.classList.add('bg-light-danger');\n          e.cancel();\n        }\n      }\n    });\n  };\n\n  return {\n    // Public Functions\n    init: function init() {\n      exampleRestricted();\n    }\n  };\n}(); // On document ready\n\n\nKTUtil.onDOMContentLoaded(function () {\n  KTDraggableRestricted.init();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvYXNzZXRzL2NvcmUvanMvY3VzdG9tL2RvY3VtZW50YXRpb24vZ2VuZXJhbC9kcmFnZ2FibGUvcmVzdHJpY3RlZC5qcy5qcyIsIm1hcHBpbmdzIjoiQ0FFQTs7QUFDQSxJQUFJQSxxQkFBcUIsR0FBRyxZQUFZO0FBQ3BDO0FBQ0EsTUFBSUMsaUJBQWlCLEdBQUcsU0FBcEJBLGlCQUFvQixHQUFZO0FBQ2hDLFFBQUlDLFVBQVUsR0FBR0MsUUFBUSxDQUFDQyxnQkFBVCxDQUEwQixpQkFBMUIsQ0FBakI7QUFDQSxRQUFNQyxpQkFBaUIsR0FBR0YsUUFBUSxDQUFDRyxhQUFULENBQXVCLHdDQUF2QixDQUExQjs7QUFFQSxRQUFJSixVQUFVLENBQUNLLE1BQVgsS0FBc0IsQ0FBMUIsRUFBNkI7QUFDekIsYUFBTyxLQUFQO0FBQ0g7O0FBRUQsUUFBSUMsU0FBUyxHQUFHLElBQUlDLFNBQVMsV0FBYixDQUFzQlAsVUFBdEIsRUFBa0M7QUFDOUNRLE1BQUFBLFNBQVMsRUFBRSxZQURtQztBQUU5Q0MsTUFBQUEsUUFBUSxFQUFFLGlCQUZvQztBQUc5Q0MsTUFBQUEsTUFBTSxFQUFFLDhCQUhzQztBQUk5Q0MsTUFBQUEsTUFBTSxFQUFFO0FBQ0o7QUFDQUMsUUFBQUEsUUFBUSxFQUFFLE1BRk47QUFHSkMsUUFBQUEsbUJBQW1CLEVBQUU7QUFIakI7QUFKc0MsS0FBbEMsQ0FBaEIsQ0FSZ0MsQ0FtQmhDOztBQUNBLFFBQUlDLGVBQUosQ0FwQmdDLENBc0JoQzs7QUFDQVIsSUFBQUEsU0FBUyxDQUFDUyxFQUFWLENBQWEsWUFBYixFQUEyQixVQUFDQyxDQUFELEVBQU87QUFDOUJGLE1BQUFBLGVBQWUsR0FBR0UsQ0FBQyxDQUFDQyxjQUFGLENBQWlCQyxZQUFqQixDQUE4Qix5QkFBOUIsQ0FBbEI7QUFDSCxLQUZELEVBdkJnQyxDQTJCaEM7O0FBQ0FaLElBQUFBLFNBQVMsQ0FBQ1MsRUFBVixDQUFhLFdBQWIsRUFBMEIsVUFBQ0MsQ0FBRCxFQUFPO0FBQzdCLFVBQU1HLFlBQVksR0FBR0gsQ0FBQyxDQUFDSSxhQUFGLENBQWdCQyxPQUFoQixDQUF3Qix3Q0FBeEIsQ0FBckI7O0FBQ0EsVUFBSUYsWUFBSixFQUFrQjtBQUNkLFlBQUlMLGVBQWUsS0FBSyxPQUF4QixFQUFpQztBQUM3QlgsVUFBQUEsaUJBQWlCLENBQUNtQixTQUFsQixDQUE0QkMsR0FBNUIsQ0FBZ0MsaUJBQWhDO0FBQ0gsU0FGRCxNQUVPO0FBQ0hwQixVQUFBQSxpQkFBaUIsQ0FBQ21CLFNBQWxCLENBQTRCRSxNQUE1QixDQUFtQyxpQkFBbkM7QUFDSDtBQUNKLE9BTkQsTUFNTztBQUNIckIsUUFBQUEsaUJBQWlCLENBQUNtQixTQUFsQixDQUE0QkUsTUFBNUIsQ0FBbUMsaUJBQW5DO0FBQ0g7QUFDSixLQVhELEVBNUJnQyxDQXlDaEM7O0FBQ0FsQixJQUFBQSxTQUFTLENBQUNTLEVBQVYsQ0FBYSxXQUFiLEVBQTBCLFVBQUNDLENBQUQsRUFBTztBQUM3QjtBQUNBaEIsTUFBQUEsVUFBVSxDQUFDeUIsT0FBWCxDQUFtQixVQUFBQyxDQUFDLEVBQUk7QUFDcEJBLFFBQUFBLENBQUMsQ0FBQ0osU0FBRixDQUFZRSxNQUFaLENBQW1CLDhCQUFuQjtBQUNILE9BRkQsRUFGNkIsQ0FNN0I7O0FBQ0FyQixNQUFBQSxpQkFBaUIsQ0FBQ21CLFNBQWxCLENBQTRCRSxNQUE1QixDQUFtQyxpQkFBbkM7QUFDSCxLQVJELEVBMUNnQyxDQW9EaEM7O0FBQ0FsQixJQUFBQSxTQUFTLENBQUNTLEVBQVYsQ0FBYSxtQkFBYixFQUFrQyxVQUFDQyxDQUFELEVBQU87QUFDckMsVUFBTUcsWUFBWSxHQUFHSCxDQUFDLENBQUNQLFFBQUYsQ0FBV1ksT0FBWCxDQUFtQix3Q0FBbkIsQ0FBckIsQ0FEcUMsQ0FFckM7O0FBQ0EsVUFBSUYsWUFBSixFQUFrQjtBQUNkO0FBQ0EsWUFBSUwsZUFBZSxLQUFLLE9BQXhCLEVBQWlDO0FBQzdCWCxVQUFBQSxpQkFBaUIsQ0FBQ21CLFNBQWxCLENBQTRCQyxHQUE1QixDQUFnQyxpQkFBaEM7QUFDQVAsVUFBQUEsQ0FBQyxDQUFDVyxNQUFGO0FBQ0g7QUFDSjtBQUNKLEtBVkQ7QUFXSCxHQWhFRDs7QUFrRUEsU0FBTztBQUNIO0FBQ0FDLElBQUFBLElBQUksRUFBRSxnQkFBWTtBQUNkN0IsTUFBQUEsaUJBQWlCO0FBQ3BCO0FBSkUsR0FBUDtBQU1ILENBMUUyQixFQUE1QixDLENBNEVBOzs7QUFDQThCLE1BQU0sQ0FBQ0Msa0JBQVAsQ0FBMEIsWUFBWTtBQUNsQ2hDLEVBQUFBLHFCQUFxQixDQUFDOEIsSUFBdEI7QUFDSCxDQUZEIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Fzc2V0cy9jb3JlL2pzL2N1c3RvbS9kb2N1bWVudGF0aW9uL2dlbmVyYWwvZHJhZ2dhYmxlL3Jlc3RyaWN0ZWQuanM/NjVjYyJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcclxuXHJcbi8vIENsYXNzIGRlZmluaXRpb25cclxudmFyIEtURHJhZ2dhYmxlUmVzdHJpY3RlZCA9IGZ1bmN0aW9uICgpIHtcclxuICAgIC8vIFByaXZhdGUgZnVuY3Rpb25zXHJcbiAgICB2YXIgZXhhbXBsZVJlc3RyaWN0ZWQgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgdmFyIGNvbnRhaW5lcnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuZHJhZ2dhYmxlLXpvbmUnKTtcclxuICAgICAgICBjb25zdCByZXN0cmNpdGVkV3JhcHBlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWt0LWRyYWdnYWJsZS1sZXZlbD1cInJlc3RyaWN0ZWRcIl0nKTtcclxuXHJcbiAgICAgICAgaWYgKGNvbnRhaW5lcnMubGVuZ3RoID09PSAwKSB7XHJcbiAgICAgICAgICAgIHJldHVybiBmYWxzZTtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIHZhciBkcm9wcGFibGUgPSBuZXcgRHJvcHBhYmxlLmRlZmF1bHQoY29udGFpbmVycywge1xyXG4gICAgICAgICAgICBkcmFnZ2FibGU6ICcuZHJhZ2dhYmxlJyxcclxuICAgICAgICAgICAgZHJvcHpvbmU6ICcuZHJhZ2dhYmxlLXpvbmUnLFxyXG4gICAgICAgICAgICBoYW5kbGU6ICcuZHJhZ2dhYmxlIC5kcmFnZ2FibGUtaGFuZGxlJyxcclxuICAgICAgICAgICAgbWlycm9yOiB7XHJcbiAgICAgICAgICAgICAgICAvL2FwcGVuZFRvOiBzZWxlY3RvcixcclxuICAgICAgICAgICAgICAgIGFwcGVuZFRvOiAnYm9keScsXHJcbiAgICAgICAgICAgICAgICBjb25zdHJhaW5EaW1lbnNpb25zOiB0cnVlXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgLy8gRGVmaW5lIGRyYWdnYWJsZSBlbGVtZW50IHZhcmlhYmxlIGZvciBwZXJtaXNzaW9ucyBsZXZlbFxyXG4gICAgICAgIGxldCBkcm9wcGFibGVPcmlnaW47XHJcblxyXG4gICAgICAgIC8vIEhhbmRsZSBkcmFnIHN0YXJ0IGV2ZW50IC0tIG1vcmUgaW5mbzogaHR0cHM6Ly9zaG9waWZ5LmdpdGh1Yi5pby9kcmFnZ2FibGUvZG9jcy9jbGFzcy9zcmMvRHJhZ2dhYmxlL0RyYWdFdmVudC9EcmFnRXZlbnQuanN+RHJhZ0V2ZW50Lmh0bWxcclxuICAgICAgICBkcm9wcGFibGUub24oJ2RyYWc6c3RhcnQnLCAoZSkgPT4ge1xyXG4gICAgICAgICAgICBkcm9wcGFibGVPcmlnaW4gPSBlLm9yaWdpbmFsU291cmNlLmdldEF0dHJpYnV0ZSgnZGF0YS1rdC1kcmFnZ2FibGUtbGV2ZWwnKTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgLy8gSGFuZGxlIGRyYWcgb3ZlciBldmVudCAtLSBtb3JlIGluZm86IGh0dHBzOi8vc2hvcGlmeS5naXRodWIuaW8vZHJhZ2dhYmxlL2RvY3MvY2xhc3Mvc3JjL0RyYWdnYWJsZS9EcmFnRXZlbnQvRHJhZ0V2ZW50LmpzfkRyYWdPdmVyRXZlbnQuaHRtbFxyXG4gICAgICAgIGRyb3BwYWJsZS5vbignZHJhZzpvdmVyJywgKGUpID0+IHtcclxuICAgICAgICAgICAgY29uc3QgaXNSZXN0cmljdGVkID0gZS5vdmVyQ29udGFpbmVyLmNsb3Nlc3QoJ1tkYXRhLWt0LWRyYWdnYWJsZS1sZXZlbD1cInJlc3RyaWN0ZWRcIl0nKTtcclxuICAgICAgICAgICAgaWYgKGlzUmVzdHJpY3RlZCkge1xyXG4gICAgICAgICAgICAgICAgaWYgKGRyb3BwYWJsZU9yaWdpbiAhPT0gJ2FkbWluJykge1xyXG4gICAgICAgICAgICAgICAgICAgIHJlc3RyY2l0ZWRXcmFwcGVyLmNsYXNzTGlzdC5hZGQoJ2JnLWxpZ2h0LWRhbmdlcicpO1xyXG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgICAgICByZXN0cmNpdGVkV3JhcHBlci5jbGFzc0xpc3QucmVtb3ZlKCdiZy1saWdodC1kYW5nZXInKTtcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHJlc3RyY2l0ZWRXcmFwcGVyLmNsYXNzTGlzdC5yZW1vdmUoJ2JnLWxpZ2h0LWRhbmdlcicpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgIC8vIEhhbmRsZSBkcmFnIHN0b3AgZXZlbnQgLS0gbW9yZSBpbmZvOiBodHRwczovL3Nob3BpZnkuZ2l0aHViLmlvL2RyYWdnYWJsZS9kb2NzL2NsYXNzL3NyYy9EcmFnZ2FibGUvRHJhZ0V2ZW50L0RyYWdFdmVudC5qc35EcmFnU3RvcEV2ZW50Lmh0bWxcclxuICAgICAgICBkcm9wcGFibGUub24oJ2RyYWc6c3RvcCcsIChlKSA9PiB7XHJcbiAgICAgICAgICAgIC8vIHJlbW92ZSBhbGwgZHJhZ2dhYmxlIG9jY3VwaWVkIGxpbWl0XHJcbiAgICAgICAgICAgIGNvbnRhaW5lcnMuZm9yRWFjaChjID0+IHtcclxuICAgICAgICAgICAgICAgIGMuY2xhc3NMaXN0LnJlbW92ZSgnZHJhZ2dhYmxlLWRyb3B6b25lLS1vY2N1cGllZCcpO1xyXG4gICAgICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgICAgIC8vIFJlbW92ZSByZXN0cmljdGVkIGFsZXJ0XHJcbiAgICAgICAgICAgIHJlc3RyY2l0ZWRXcmFwcGVyLmNsYXNzTGlzdC5yZW1vdmUoJ2JnLWxpZ2h0LWRhbmdlcicpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICAvLyBIYW5kbGUgZHJvcCBldmVudCAtLSBodHRwczovL3Nob3BpZnkuZ2l0aHViLmlvL2RyYWdnYWJsZS9kb2NzL2NsYXNzL3NyYy9Ecm9wcGFibGUvRHJvcHBhYmxlRXZlbnQvRHJvcHBhYmxlRXZlbnQuanN+RHJvcHBhYmxlRHJvcHBlZEV2ZW50Lmh0bWxcclxuICAgICAgICBkcm9wcGFibGUub24oJ2Ryb3BwYWJsZTpkcm9wcGVkJywgKGUpID0+IHtcclxuICAgICAgICAgICAgY29uc3QgaXNSZXN0cmljdGVkID0gZS5kcm9wem9uZS5jbG9zZXN0KCdbZGF0YS1rdC1kcmFnZ2FibGUtbGV2ZWw9XCJyZXN0cmljdGVkXCJdJyk7XHJcbiAgICAgICAgICAgIC8vIERldGVjdCBpZiBkcm9wIGNvbnRhaW5lciBpcyByZXN0cmljdGVkXHJcbiAgICAgICAgICAgIGlmIChpc1Jlc3RyaWN0ZWQpIHtcclxuICAgICAgICAgICAgICAgIC8vIENoZWNrIGlmIGRyYWdnZWQgZWxlbWVudCBoYXMgcGVybWlzc2lvbiBsZXZlbFxyXG4gICAgICAgICAgICAgICAgaWYgKGRyb3BwYWJsZU9yaWdpbiAhPT0gJ2FkbWluJykge1xyXG4gICAgICAgICAgICAgICAgICAgIHJlc3RyY2l0ZWRXcmFwcGVyLmNsYXNzTGlzdC5hZGQoJ2JnLWxpZ2h0LWRhbmdlcicpO1xyXG4gICAgICAgICAgICAgICAgICAgIGUuY2FuY2VsKCk7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICByZXR1cm4ge1xyXG4gICAgICAgIC8vIFB1YmxpYyBGdW5jdGlvbnNcclxuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGV4YW1wbGVSZXN0cmljdGVkKCk7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxufSgpO1xyXG5cclxuLy8gT24gZG9jdW1lbnQgcmVhZHlcclxuS1RVdGlsLm9uRE9NQ29udGVudExvYWRlZChmdW5jdGlvbiAoKSB7XHJcbiAgICBLVERyYWdnYWJsZVJlc3RyaWN0ZWQuaW5pdCgpO1xyXG59KTtcclxuIl0sIm5hbWVzIjpbIktURHJhZ2dhYmxlUmVzdHJpY3RlZCIsImV4YW1wbGVSZXN0cmljdGVkIiwiY29udGFpbmVycyIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsInJlc3RyY2l0ZWRXcmFwcGVyIiwicXVlcnlTZWxlY3RvciIsImxlbmd0aCIsImRyb3BwYWJsZSIsIkRyb3BwYWJsZSIsImRyYWdnYWJsZSIsImRyb3B6b25lIiwiaGFuZGxlIiwibWlycm9yIiwiYXBwZW5kVG8iLCJjb25zdHJhaW5EaW1lbnNpb25zIiwiZHJvcHBhYmxlT3JpZ2luIiwib24iLCJlIiwib3JpZ2luYWxTb3VyY2UiLCJnZXRBdHRyaWJ1dGUiLCJpc1Jlc3RyaWN0ZWQiLCJvdmVyQ29udGFpbmVyIiwiY2xvc2VzdCIsImNsYXNzTGlzdCIsImFkZCIsInJlbW92ZSIsImZvckVhY2giLCJjIiwiY2FuY2VsIiwiaW5pdCIsIktUVXRpbCIsIm9uRE9NQ29udGVudExvYWRlZCJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/assets/core/js/custom/documentation/general/draggable/restricted.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/assets/core/js/custom/documentation/general/draggable/restricted.js"]();
/******/ 	
/******/ })()
;