O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:72:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\js\bootstrap.bundle.js";s:10:"publicPath";s:80:"/assets/vendor/bootstrap/js/bootstrap.bundle-3c5525eca3fb0e858f63913f04641f6f.js";s:23:"publicPathWithoutDigest";s:47:"/assets/vendor/bootstrap/js/bootstrap.bundle.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:243942:"/*!
  * Bootstrap v4.6.0 (https://getbootstrap.com/)
  * Copyright 2011-2021 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
  */
(function (global, factory) {
  typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('jquery')) :
  typeof define === 'function' && define.amd ? define(['exports', 'jquery'], factory) :
  (global = typeof globalThis !== 'undefined' ? globalThis : global || self, factory(global.bootstrap = {}, global.jQuery));
}(this, (function (exports, $) { 'use strict';

  function _interopDefaultLegacy (e) { return e && typeof e === 'object' && 'default' in e ? e : { 'default': e }; }

  var $__default = /*#__PURE__*/_interopDefaultLegacy($);

  function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    return Constructor;
  }

  function _extends() {
    _extends = Object.assign || function (target) {
      for (var i = 1; i < arguments.length; i++) {
        var source = arguments[i];

        for (var key in source) {
          if (Object.prototype.hasOwnProperty.call(source, key)) {
            target[key] = source[key];
          }
        }
      }

      return target;
    };

    return _extends.apply(this, arguments);
  }

  function _inheritsLoose(subClass, superClass) {
    subClass.prototype = Object.create(superClass.prototype);
    subClass.prototype.constructor = subClass;
    subClass.__proto__ = superClass;
  }

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.6.0): util.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  /**
   * ------------------------------------------------------------------------
   * Private TransitionEnd Helpers
   * ------------------------------------------------------------------------
   */

  var TRANSITION_END = 'transitionend';
  var MAX_UID = 1000000;
  var MILLISECONDS_MULTIPLIER = 1000; // Shoutout AngusCroll (https://goo.gl/pxwQGp)

  function toType(obj) {
    if (obj === null || typeof obj === 'undefined') {
      return "" + obj;
    }

    return {}.toString.call(obj).match(/\s([a-z]+)/i)[1].toLowerCase();
  }

  function getSpecialTransitionEndEvent() {
    return {
      bindType: TRANSITION_END,
      delegateType: TRANSITION_END,
      handle: function handle(event) {
        if ($__default['default'](event.target).is(this)) {
          return event.handleObj.handler.apply(this, arguments); // eslint-disable-line prefer-rest-params
        }

        return undefined;
      }
    };
  }

  function transitionEndEmulator(duration) {
    var _this = this;

    var called = false;
    $__default['default'](this).one(Util.TRANSITION_END, function () {
      called = true;
    });
    setTimeout(function () {
      if (!called) {
        Util.triggerTransitionEnd(_this);
      }
    }, duration);
    return this;
  }

  function setTransitionEndSupport() {
    $__default['default'].fn.emulateTransitionEnd = transitionEndEmulator;
    $__default['default'].event.special[Util.TRANSITION_END] = getSpecialTransitionEndEvent();
  }
  /**
   * --------------------------------------------------------------------------
   * Public Util Api
   * --------------------------------------------------------------------------
   */


  var Util = {
    TRANSITION_END: 'bsTransitionEnd',
    getUID: function getUID(prefix) {
      do {
        prefix += ~~(Math.random() * MAX_UID); // "~~" acts like a faster Math.floor() here
      } while (document.getElementById(prefix));

      return prefix;
    },
    getSelectorFromElement: function getSelectorFromElement(element) {
      var selector = element.getAttribute('data-target');

      if (!selector || selector === '#') {
        var hrefAttr = element.getAttribute('href');
        selector = hrefAttr && hrefAttr !== '#' ? hrefAttr.trim() : '';
      }

      try {
        return document.querySelector(selector) ? selector : null;
      } catch (_) {
        return null;
      }
    },
    getTransitionDurationFromElement: function getTransitionDurationFromElement(element) {
      if (!element) {
        return 0;
      } // Get transition-duration of the element


      var transitionDuration = $__default['default'](element).css('transition-duration');
      var transitionDelay = $__default['default'](element).css('transition-delay');
      var floatTransitionDuration = parseFloat(transitionDuration);
      var floatTransitionDelay = parseFloat(transitionDelay); // Return 0 if element or transition duration is not found

      if (!floatTransitionDuration && !floatTransitionDelay) {
        return 0;
      } // If multiple durations are defined, take the first


      transitionDuration = transitionDuration.split(',')[0];
      transitionDelay = transitionDelay.split(',')[0];
      return (parseFloat(transitionDuration) + parseFloat(transitionDelay)) * MILLISECONDS_MULTIPLIER;
    },
    reflow: function reflow(element) {
      return element.offsetHeight;
    },
    triggerTransitionEnd: function triggerTransitionEnd(element) {
      $__default['default'](element).trigger(TRANSITION_END);
    },
    supportsTransitionEnd: function supportsTransitionEnd() {
      return Boolean(TRANSITION_END);
    },
    isElement: function isElement(obj) {
      return (obj[0] || obj).nodeType;
    },
    typeCheckConfig: function typeCheckConfig(componentName, config, configTypes) {
      for (var property in configTypes) {
        if (Object.prototype.hasOwnProperty.call(configTypes, property)) {
          var expectedTypes = configTypes[property];
          var value = config[property];
          var valueType = value && Util.isElement(value) ? 'element' : toType(value);

          if (!new RegExp(expectedTypes).test(valueType)) {
            throw new Error(componentName.toUpperCase() + ": " + ("Option \"" + property + "\" provided type \"" + valueType + "\" ") + ("but expected type \"" + expectedTypes + "\"."));
          }
        }
      }
    },
    findShadowRoot: function findShadowRoot(element) {
      if (!document.documentElement.attachShadow) {
        return null;
      } // Can find the shadow root otherwise it'll return the document


      if (typeof element.getRootNode === 'function') {
        var root = element.getRootNode();
        return root instanceof ShadowRoot ? root : null;
      }

      if (element instanceof ShadowRoot) {
        return element;
      } // when we don't find a shadow root


      if (!element.parentNode) {
        return null;
      }

      return Util.findShadowRoot(element.parentNode);
    },
    jQueryDetection: function jQueryDetection() {
      if (typeof $__default['default'] === 'undefined') {
        throw new TypeError('Bootstrap\'s JavaScript requires jQuery. jQuery must be included before Bootstrap\'s JavaScript.');
      }

      var version = $__default['default'].fn.jquery.split(' ')[0].split('.');
      var minMajor = 1;
      var ltMajor = 2;
      var minMinor = 9;
      var minPatch = 1;
      var maxMajor = 4;

      if (version[0] < ltMajor && version[1] < minMinor || version[0] === minMajor && version[1] === minMinor && version[2] < minPatch || version[0] >= maxMajor) {
        throw new Error('Bootstrap\'s JavaScript requires at least jQuery v1.9.1 but less than v4.0.0');
      }
    }
  };
  Util.jQueryDetection();
  setTransitionEndSupport();

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME = 'alert';
  var VERSION = '4.6.0';
  var DATA_KEY = 'bs.alert';
  var EVENT_KEY = "." + DATA_KEY;
  var DATA_API_KEY = '.data-api';
  var JQUERY_NO_CONFLICT = $__default['default'].fn[NAME];
  var SELECTOR_DISMISS = '[data-dismiss="alert"]';
  var EVENT_CLOSE = "close" + EVENT_KEY;
  var EVENT_CLOSED = "closed" + EVENT_KEY;
  var EVENT_CLICK_DATA_API = "click" + EVENT_KEY + DATA_API_KEY;
  var CLASS_NAME_ALERT = 'alert';
  var CLASS_NAME_FADE = 'fade';
  var CLASS_NAME_SHOW = 'show';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Alert = /*#__PURE__*/function () {
    function Alert(element) {
      this._element = element;
    } // Getters


    var _proto = Alert.prototype;

    // Public
    _proto.close = function close(element) {
      var rootElement = this._element;

      if (element) {
        rootElement = this._getRootElement(element);
      }

      var customEvent = this._triggerCloseEvent(rootElement);

      if (customEvent.isDefaultPrevented()) {
        return;
      }

      this._removeElement(rootElement);
    };

    _proto.dispose = function dispose() {
      $__default['default'].removeData(this._element, DATA_KEY);
      this._element = null;
    } // Private
    ;

    _proto._getRootElement = function _getRootElement(element) {
      var selector = Util.getSelectorFromElement(element);
      var parent = false;

      if (selector) {
        parent = document.querySelector(selector);
      }

      if (!parent) {
        parent = $__default['default'](element).closest("." + CLASS_NAME_ALERT)[0];
      }

      return parent;
    };

    _proto._triggerCloseEvent = function _triggerCloseEvent(element) {
      var closeEvent = $__default['default'].Event(EVENT_CLOSE);
      $__default['default'](element).trigger(closeEvent);
      return closeEvent;
    };

    _proto._removeElement = function _removeElement(element) {
      var _this = this;

      $__default['default'](element).removeClass(CLASS_NAME_SHOW);

      if (!$__default['default'](element).hasClass(CLASS_NAME_FADE)) {
        this._destroyElement(element);

        return;
      }

      var transitionDuration = Util.getTransitionDurationFromElement(element);
      $__default['default'](element).one(Util.TRANSITION_END, function (event) {
        return _this._destroyElement(element, event);
      }).emulateTransitionEnd(transitionDuration);
    };

    _proto._destroyElement = function _destroyElement(element) {
      $__default['default'](element).detach().trigger(EVENT_CLOSED).remove();
    } // Static
    ;

    Alert._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var $element = $__default['default'](this);
        var data = $element.data(DATA_KEY);

        if (!data) {
          data = new Alert(this);
          $element.data(DATA_KEY, data);
        }

        if (config === 'close') {
          data[config](this);
        }
      });
    };

    Alert._handleDismiss = function _handleDismiss(alertInstance) {
      return function (event) {
        if (event) {
          event.preventDefault();
        }

        alertInstance.close(this);
      };
    };

    _createClass(Alert, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION;
      }
    }]);

    return Alert;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */


  $__default['default'](document).on(EVENT_CLICK_DATA_API, SELECTOR_DISMISS, Alert._handleDismiss(new Alert()));
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  $__default['default'].fn[NAME] = Alert._jQueryInterface;
  $__default['default'].fn[NAME].Constructor = Alert;

  $__default['default'].fn[NAME].noConflict = function () {
    $__default['default'].fn[NAME] = JQUERY_NO_CONFLICT;
    return Alert._jQueryInterface;
  };

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$1 = 'button';
  var VERSION$1 = '4.6.0';
  var DATA_KEY$1 = 'bs.button';
  var EVENT_KEY$1 = "." + DATA_KEY$1;
  var DATA_API_KEY$1 = '.data-api';
  var JQUERY_NO_CONFLICT$1 = $__default['default'].fn[NAME$1];
  var CLASS_NAME_ACTIVE = 'active';
  var CLASS_NAME_BUTTON = 'btn';
  var CLASS_NAME_FOCUS = 'focus';
  var SELECTOR_DATA_TOGGLE_CARROT = '[data-toggle^="button"]';
  var SELECTOR_DATA_TOGGLES = '[data-toggle="buttons"]';
  var SELECTOR_DATA_TOGGLE = '[data-toggle="button"]';
  var SELECTOR_DATA_TOGGLES_BUTTONS = '[data-toggle="buttons"] .btn';
  var SELECTOR_INPUT = 'input:not([type="hidden"])';
  var SELECTOR_ACTIVE = '.active';
  var SELECTOR_BUTTON = '.btn';
  var EVENT_CLICK_DATA_API$1 = "click" + EVENT_KEY$1 + DATA_API_KEY$1;
  var EVENT_FOCUS_BLUR_DATA_API = "focus" + EVENT_KEY$1 + DATA_API_KEY$1 + " " + ("blur" + EVENT_KEY$1 + DATA_API_KEY$1);
  var EVENT_LOAD_DATA_API = "load" + EVENT_KEY$1 + DATA_API_KEY$1;
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Button = /*#__PURE__*/function () {
    function Button(element) {
      this._element = element;
      this.shouldAvoidTriggerChange = false;
    } // Getters


    var _proto = Button.prototype;

    // Public
    _proto.toggle = function toggle() {
      var triggerChangeEvent = true;
      var addAriaPressed = true;
      var rootElement = $__default['default'](this._element).closest(SELECTOR_DATA_TOGGLES)[0];

      if (rootElement) {
        var input = this._element.querySelector(SELECTOR_INPUT);

        if (input) {
          if (input.type === 'radio') {
            if (input.checked && this._element.classList.contains(CLASS_NAME_ACTIVE)) {
              triggerChangeEvent = false;
            } else {
              var activeElement = rootElement.querySelector(SELECTOR_ACTIVE);

              if (activeElement) {
                $__default['default'](activeElement).removeClass(CLASS_NAME_ACTIVE);
              }
            }
          }

          if (triggerChangeEvent) {
            // if it's not a radio button or checkbox don't add a pointless/invalid checked property to the input
            if (input.type === 'checkbox' || input.type === 'radio') {
              input.checked = !this._element.classList.contains(CLASS_NAME_ACTIVE);
            }

            if (!this.shouldAvoidTriggerChange) {
              $__default['default'](input).trigger('change');
            }
          }

          input.focus();
          addAriaPressed = false;
        }
      }

      if (!(this._element.hasAttribute('disabled') || this._element.classList.contains('disabled'))) {
        if (addAriaPressed) {
          this._element.setAttribute('aria-pressed', !this._element.classList.contains(CLASS_NAME_ACTIVE));
        }

        if (triggerChangeEvent) {
          $__default['default'](this._element).toggleClass(CLASS_NAME_ACTIVE);
        }
      }
    };

    _proto.dispose = function dispose() {
      $__default['default'].removeData(this._element, DATA_KEY$1);
      this._element = null;
    } // Static
    ;

    Button._jQueryInterface = function _jQueryInterface(config, avoidTriggerChange) {
      return this.each(function () {
        var $element = $__default['default'](this);
        var data = $element.data(DATA_KEY$1);

        if (!data) {
          data = new Button(this);
          $element.data(DATA_KEY$1, data);
        }

        data.shouldAvoidTriggerChange = avoidTriggerChange;

        if (config === 'toggle') {
          data[config]();
        }
      });
    };

    _createClass(Button, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$1;
      }
    }]);

    return Button;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */


  $__default['default'](document).on(EVENT_CLICK_DATA_API$1, SELECTOR_DATA_TOGGLE_CARROT, function (event) {
    var button = event.target;
    var initialButton = button;

    if (!$__default['default'](button).hasClass(CLASS_NAME_BUTTON)) {
      button = $__default['default'](button).closest(SELECTOR_BUTTON)[0];
    }

    if (!button || button.hasAttribute('disabled') || button.classList.contains('disabled')) {
      event.preventDefault(); // work around Firefox bug #1540995
    } else {
      var inputBtn = button.querySelector(SELECTOR_INPUT);

      if (inputBtn && (inputBtn.hasAttribute('disabled') || inputBtn.classList.contains('disabled'))) {
        event.preventDefault(); // work around Firefox bug #1540995

        return;
      }

      if (initialButton.tagName === 'INPUT' || button.tagName !== 'LABEL') {
        Button._jQueryInterface.call($__default['default'](button), 'toggle', initialButton.tagName === 'INPUT');
      }
    }
  }).on(EVENT_FOCUS_BLUR_DATA_API, SELECTOR_DATA_TOGGLE_CARROT, function (event) {
    var button = $__default['default'](event.target).closest(SELECTOR_BUTTON)[0];
    $__default['default'](button).toggleClass(CLASS_NAME_FOCUS, /^focus(in)?$/.test(event.type));
  });
  $__default['default'](window).on(EVENT_LOAD_DATA_API, function () {
    // ensure correct active class is set to match the controls' actual values/states
    // find all checkboxes/readio buttons inside data-toggle groups
    var buttons = [].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLES_BUTTONS));

    for (var i = 0, len = buttons.length; i < len; i++) {
      var button = buttons[i];
      var input = button.querySelector(SELECTOR_INPUT);

      if (input.checked || input.hasAttribute('checked')) {
        button.classList.add(CLASS_NAME_ACTIVE);
      } else {
        button.classList.remove(CLASS_NAME_ACTIVE);
      }
    } // find all button toggles


    buttons = [].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLE));

    for (var _i = 0, _len = buttons.length; _i < _len; _i++) {
      var _button = buttons[_i];

      if (_button.getAttribute('aria-pressed') === 'true') {
        _button.classList.add(CLASS_NAME_ACTIVE);
      } else {
        _button.classList.remove(CLASS_NAME_ACTIVE);
      }
    }
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  $__default['default'].fn[NAME$1] = Button._jQueryInterface;
  $__default['default'].fn[NAME$1].Constructor = Button;

  $__default['default'].fn[NAME$1].noConflict = function () {
    $__default['default'].fn[NAME$1] = JQUERY_NO_CONFLICT$1;
    return Button._jQueryInterface;
  };

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$2 = 'carousel';
  var VERSION$2 = '4.6.0';
  var DATA_KEY$2 = 'bs.carousel';
  var EVENT_KEY$2 = "." + DATA_KEY$2;
  var DATA_API_KEY$2 = '.data-api';
  var JQUERY_NO_CONFLICT$2 = $__default['default'].fn[NAME$2];
  var ARROW_LEFT_KEYCODE = 37; // KeyboardEvent.which value for left arrow key

  var ARROW_RIGHT_KEYCODE = 39; // KeyboardEvent.which value for right arrow key

  var TOUCHEVENT_COMPAT_WAIT = 500; // Time for mouse compat events to fire after touch

  var SWIPE_THRESHOLD = 40;
  var Default = {
    interval: 5000,
    keyboard: true,
    slide: false,
    pause: 'hover',
    wrap: true,
    touch: true
  };
  var DefaultType = {
    interval: '(number|boolean)',
    keyboard: 'boolean',
    slide: '(boolean|string)',
    pause: '(string|boolean)',
    wrap: 'boolean',
    touch: 'boolean'
  };
  var DIRECTION_NEXT = 'next';
  var DIRECTION_PREV = 'prev';
  var DIRECTION_LEFT = 'left';
  var DIRECTION_RIGHT = 'right';
  var EVENT_SLIDE = "slide" + EVENT_KEY$2;
  var EVENT_SLID = "slid" + EVENT_KEY$2;
  var EVENT_KEYDOWN = "keydown" + EVENT_KEY$2;
  var EVENT_MOUSEENTER = "mouseenter" + EVENT_KEY$2;
  var EVENT_MOUSELEAVE = "mouseleave" + EVENT_KEY$2;
  var EVENT_TOUCHSTART = "touchstart" + EVENT_KEY$2;
  var EVENT_TOUCHMOVE = "touchmove" + EVENT_KEY$2;
  var EVENT_TOUCHEND = "touchend" + EVENT_KEY$2;
  var EVENT_POINTERDOWN = "pointerdown" + EVENT_KEY$2;
  var EVENT_POINTERUP = "pointerup" + EVENT_KEY$2;
  var EVENT_DRAG_START = "dragstart" + EVENT_KEY$2;
  var EVENT_LOAD_DATA_API$1 = "load" + EVENT_KEY$2 + DATA_API_KEY$2;
  var EVENT_CLICK_DATA_API$2 = "click" + EVENT_KEY$2 + DATA_API_KEY$2;
  var CLASS_NAME_CAROUSEL = 'carousel';
  var CLASS_NAME_ACTIVE$1 = 'active';
  var CLASS_NAME_SLIDE = 'slide';
  var CLASS_NAME_RIGHT = 'carousel-item-right';
  var CLASS_NAME_LEFT = 'carousel-item-left';
  var CLASS_NAME_NEXT = 'carousel-item-next';
  var CLASS_NAME_PREV = 'carousel-item-prev';
  var CLASS_NAME_POINTER_EVENT = 'pointer-event';
  var SELECTOR_ACTIVE$1 = '.active';
  var SELECTOR_ACTIVE_ITEM = '.active.carousel-item';
  var SELECTOR_ITEM = '.carousel-item';
  var SELECTOR_ITEM_IMG = '.carousel-item img';
  var SELECTOR_NEXT_PREV = '.carousel-item-next, .carousel-item-prev';
  var SELECTOR_INDICATORS = '.carousel-indicators';
  var SELECTOR_DATA_SLIDE = '[data-slide], [data-slide-to]';
  var SELECTOR_DATA_RIDE = '[data-ride="carousel"]';
  var PointerType = {
    TOUCH: 'touch',
    PEN: 'pen'
  };
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Carousel = /*#__PURE__*/function () {
    function Carousel(element, config) {
      this._items = null;
      this._interval = null;
      this._activeElement = null;
      this._isPaused = false;
      this._isSliding = false;
      this.touchTimeout = null;
      this.touchStartX = 0;
      this.touchDeltaX = 0;
      this._config = this._getConfig(config);
      this._element = element;
      this._indicatorsElement = this._element.querySelector(SELECTOR_INDICATORS);
      this._touchSupported = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0;
      this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent);

      this._addEventListeners();
    } // Getters


    var _proto = Carousel.prototype;

    // Public
    _proto.next = function next() {
      if (!this._isSliding) {
        this._slide(DIRECTION_NEXT);
      }
    };

    _proto.nextWhenVisible = function nextWhenVisible() {
      var $element = $__default['default'](this._element); // Don't call next when the page isn't visible
      // or the carousel or its parent isn't visible

      if (!document.hidden && $element.is(':visible') && $element.css('visibility') !== 'hidden') {
        this.next();
      }
    };

    _proto.prev = function prev() {
      if (!this._isSliding) {
        this._slide(DIRECTION_PREV);
      }
    };

    _proto.pause = function pause(event) {
      if (!event) {
        this._isPaused = true;
      }

      if (this._element.querySelector(SELECTOR_NEXT_PREV)) {
        Util.triggerTransitionEnd(this._element);
        this.cycle(true);
      }

      clearInterval(this._interval);
      this._interval = null;
    };

    _proto.cycle = function cycle(event) {
      if (!event) {
        this._isPaused = false;
      }

      if (this._interval) {
        clearInterval(this._interval);
        this._interval = null;
      }

      if (this._config.interval && !this._isPaused) {
        this._updateInterval();

        this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval);
      }
    };

    _proto.to = function to(index) {
      var _this = this;

      this._activeElement = this._element.querySelector(SELECTOR_ACTIVE_ITEM);

      var activeIndex = this._getItemIndex(this._activeElement);

      if (index > this._items.length - 1 || index < 0) {
        return;
      }

      if (this._isSliding) {
        $__default['default'](this._element).one(EVENT_SLID, function () {
          return _this.to(index);
        });
        return;
      }

      if (activeIndex === index) {
        this.pause();
        this.cycle();
        return;
      }

      var direction = index > activeIndex ? DIRECTION_NEXT : DIRECTION_PREV;

      this._slide(direction, this._items[index]);
    };

    _proto.dispose = function dispose() {
      $__default['default'](this._element).off(EVENT_KEY$2);
      $__default['default'].removeData(this._element, DATA_KEY$2);
      this._items = null;
      this._config = null;
      this._element = null;
      this._interval = null;
      this._isPaused = null;
      this._isSliding = null;
      this._activeElement = null;
      this._indicatorsElement = null;
    } // Private
    ;

    _proto._getConfig = function _getConfig(config) {
      config = _extends({}, Default, config);
      Util.typeCheckConfig(NAME$2, config, DefaultType);
      return config;
    };

    _proto._handleSwipe = function _handleSwipe() {
      var absDeltax = Math.abs(this.touchDeltaX);

      if (absDeltax <= SWIPE_THRESHOLD) {
        return;
      }

      var direction = absDeltax / this.touchDeltaX;
      this.touchDeltaX = 0; // swipe left

      if (direction > 0) {
        this.prev();
      } // swipe right


      if (direction < 0) {
        this.next();
      }
    };

    _proto._addEventListeners = function _addEventListeners() {
      var _this2 = this;

      if (this._config.keyboard) {
        $__default['default'](this._element).on(EVENT_KEYDOWN, function (event) {
          return _this2._keydown(event);
        });
      }

      if (this._config.pause === 'hover') {
        $__default['default'](this._element).on(EVENT_MOUSEENTER, function (event) {
          return _this2.pause(event);
        }).on(EVENT_MOUSELEAVE, function (event) {
          return _this2.cycle(event);
        });
      }

      if (this._config.touch) {
        this._addTouchEventListeners();
      }
    };

    _proto._addTouchEventListeners = function _addTouchEventListeners() {
      var _this3 = this;

      if (!this._touchSupported) {
        return;
      }

      var start = function start(event) {
        if (_this3._pointerEvent && PointerType[event.originalEvent.pointerType.toUpperCase()]) {
          _this3.touchStartX = event.originalEvent.clientX;
        } else if (!_this3._pointerEvent) {
          _this3.touchStartX = event.originalEvent.touches[0].clientX;
        }
      };

      var move = function move(event) {
        // ensure swiping with one touch and not pinching
        if (event.originalEvent.touches && event.originalEvent.touches.length > 1) {
          _this3.touchDeltaX = 0;
        } else {
          _this3.touchDeltaX = event.originalEvent.touches[0].clientX - _this3.touchStartX;
        }
      };

      var end = function end(event) {
        if (_this3._pointerEvent && PointerType[event.originalEvent.pointerType.toUpperCase()]) {
          _this3.touchDeltaX = event.originalEvent.clientX - _this3.touchStartX;
        }

        _this3._handleSwipe();

        if (_this3._config.pause === 'hover') {
          // If it's a touch-enabled device, mouseenter/leave are fired as
          // part of the mouse compatibility events on first tap - the carousel
          // would stop cycling until user tapped out of it;
          // here, we listen for touchend, explicitly pause the carousel
          // (as if it's the second time we tap on it, mouseenter compat event
          // is NOT fired) and after a timeout (to allow for mouse compatibility
          // events to fire) we explicitly restart cycling
          _this3.pause();

          if (_this3.touchTimeout) {
            clearTimeout(_this3.touchTimeout);
          }

          _this3.touchTimeout = setTimeout(function (event) {
            return _this3.cycle(event);
          }, TOUCHEVENT_COMPAT_WAIT + _this3._config.interval);
        }
      };

      $__default['default'](this._element.querySelectorAll(SELECTOR_ITEM_IMG)).on(EVENT_DRAG_START, function (e) {
        return e.preventDefault();
      });

      if (this._pointerEvent) {
        $__default['default'](this._element).on(EVENT_POINTERDOWN, function (event) {
          return start(event);
        });
        $__default['default'](this._element).on(EVENT_POINTERUP, function (event) {
          return end(event);
        });

        this._element.classList.add(CLASS_NAME_POINTER_EVENT);
      } else {
        $__default['default'](this._element).on(EVENT_TOUCHSTART, function (event) {
          return start(event);
        });
        $__default['default'](this._element).on(EVENT_TOUCHMOVE, function (event) {
          return move(event);
        });
        $__default['default'](this._element).on(EVENT_TOUCHEND, function (event) {
          return end(event);
        });
      }
    };

    _proto._keydown = function _keydown(event) {
      if (/input|textarea/i.test(event.target.tagName)) {
        return;
      }

      switch (event.which) {
        case ARROW_LEFT_KEYCODE:
          event.preventDefault();
          this.prev();
          break;

        case ARROW_RIGHT_KEYCODE:
          event.preventDefault();
          this.next();
          break;
      }
    };

    _proto._getItemIndex = function _getItemIndex(element) {
      this._items = element && element.parentNode ? [].slice.call(element.parentNode.querySelectorAll(SELECTOR_ITEM)) : [];
      return this._items.indexOf(element);
    };

    _proto._getItemByDirection = function _getItemByDirection(direction, activeElement) {
      var isNextDirection = direction === DIRECTION_NEXT;
      var isPrevDirection = direction === DIRECTION_PREV;

      var activeIndex = this._getItemIndex(activeElement);

      var lastItemIndex = this._items.length - 1;
      var isGoingToWrap = isPrevDirection && activeIndex === 0 || isNextDirection && activeIndex === lastItemIndex;

      if (isGoingToWrap && !this._config.wrap) {
        return activeElement;
      }

      var delta = direction === DIRECTION_PREV ? -1 : 1;
      var itemIndex = (activeIndex + delta) % this._items.length;
      return itemIndex === -1 ? this._items[this._items.length - 1] : this._items[itemIndex];
    };

    _proto._triggerSlideEvent = function _triggerSlideEvent(relatedTarget, eventDirectionName) {
      var targetIndex = this._getItemIndex(relatedTarget);

      var fromIndex = this._getItemIndex(this._element.querySelector(SELECTOR_ACTIVE_ITEM));

      var slideEvent = $__default['default'].Event(EVENT_SLIDE, {
        relatedTarget: relatedTarget,
        direction: eventDirectionName,
        from: fromIndex,
        to: targetIndex
      });
      $__default['default'](this._element).trigger(slideEvent);
      return slideEvent;
    };

    _proto._setActiveIndicatorElement = function _setActiveIndicatorElement(element) {
      if (this._indicatorsElement) {
        var indicators = [].slice.call(this._indicatorsElement.querySelectorAll(SELECTOR_ACTIVE$1));
        $__default['default'](indicators).removeClass(CLASS_NAME_ACTIVE$1);

        var nextIndicator = this._indicatorsElement.children[this._getItemIndex(element)];

        if (nextIndicator) {
          $__default['default'](nextIndicator).addClass(CLASS_NAME_ACTIVE$1);
        }
      }
    };

    _proto._updateInterval = function _updateInterval() {
      var element = this._activeElement || this._element.querySelector(SELECTOR_ACTIVE_ITEM);

      if (!element) {
        return;
      }

      var elementInterval = parseInt(element.getAttribute('data-interval'), 10);

      if (elementInterval) {
        this._config.defaultInterval = this._config.defaultInterval || this._config.interval;
        this._config.interval = elementInterval;
      } else {
        this._config.interval = this._config.defaultInterval || this._config.interval;
      }
    };

    _proto._slide = function _slide(direction, element) {
      var _this4 = this;

      var activeElement = this._element.querySelector(SELECTOR_ACTIVE_ITEM);

      var activeElementIndex = this._getItemIndex(activeElement);

      var nextElement = element || activeElement && this._getItemByDirection(direction, activeElement);

      var nextElementIndex = this._getItemIndex(nextElement);

      var isCycling = Boolean(this._interval);
      var directionalClassName;
      var orderClassName;
      var eventDirectionName;

      if (direction === DIRECTION_NEXT) {
        directionalClassName = CLASS_NAME_LEFT;
        orderClassName = CLASS_NAME_NEXT;
        eventDirectionName = DIRECTION_LEFT;
      } else {
        directionalClassName = CLASS_NAME_RIGHT;
        orderClassName = CLASS_NAME_PREV;
        eventDirectionName = DIRECTION_RIGHT;
      }

      if (nextElement && $__default['default'](nextElement).hasClass(CLASS_NAME_ACTIVE$1)) {
        this._isSliding = false;
        return;
      }

      var slideEvent = this._triggerSlideEvent(nextElement, eventDirectionName);

      if (slideEvent.isDefaultPrevented()) {
        return;
      }

      if (!activeElement || !nextElement) {
        // Some weirdness is happening, so we bail
        return;
      }

      this._isSliding = true;

      if (isCycling) {
        this.pause();
      }

      this._setActiveIndicatorElement(nextElement);

      this._activeElement = nextElement;
      var slidEvent = $__default['default'].Event(EVENT_SLID, {
        relatedTarget: nextElement,
        direction: eventDirectionName,
        from: activeElementIndex,
        to: nextElementIndex
      });

      if ($__default['default'](this._element).hasClass(CLASS_NAME_SLIDE)) {
        $__default['default'](nextElement).addClass(orderClassName);
        Util.reflow(nextElement);
        $__default['default'](activeElement).addClass(directionalClassName);
        $__default['default'](nextElement).addClass(directionalClassName);
        var transitionDuration = Util.getTransitionDurationFromElement(activeElement);
        $__default['default'](activeElement).one(Util.TRANSITION_END, function () {
          $__default['default'](nextElement).removeClass(directionalClassName + " " + orderClassName).addClass(CLASS_NAME_ACTIVE$1);
          $__default['default'](activeElement).removeClass(CLASS_NAME_ACTIVE$1 + " " + orderClassName + " " + directionalClassName);
          _this4._isSliding = false;
          setTimeout(function () {
            return $__default['default'](_this4._element).trigger(slidEvent);
          }, 0);
        }).emulateTransitionEnd(transitionDuration);
      } else {
        $__default['default'](activeElement).removeClass(CLASS_NAME_ACTIVE$1);
        $__default['default'](nextElement).addClass(CLASS_NAME_ACTIVE$1);
        this._isSliding = false;
        $__default['default'](this._element).trigger(slidEvent);
      }

      if (isCycling) {
        this.cycle();
      }
    } // Static
    ;

    Carousel._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var data = $__default['default'](this).data(DATA_KEY$2);

        var _config = _extends({}, Default, $__default['default'](this).data());

        if (typeof config === 'object') {
          _config = _extends({}, _config, config);
        }

        var action = typeof config === 'string' ? config : _config.slide;

        if (!data) {
          data = new Carousel(this, _config);
          $__default['default'](this).data(DATA_KEY$2, data);
        }

        if (typeof config === 'number') {
          data.to(config);
        } else if (typeof action === 'string') {
          if (typeof data[action] === 'undefined') {
            throw new TypeError("No method named \"" + action + "\"");
          }

          data[action]();
        } else if (_config.interval && _config.ride) {
          data.pause();
          data.cycle();
        }
      });
    };

    Carousel._dataApiClickHandler = function _dataApiClickHandler(event) {
      var selector = Util.getSelectorFromElement(this);

      if (!selector) {
        return;
      }

      var target = $__default['default'](selector)[0];

      if (!target || !$__default['default'](target).hasClass(CLASS_NAME_CAROUSEL)) {
        return;
      }

      var config = _extends({}, $__default['default'](target).data(), $__default['default'](this).data());

      var slideIndex = this.getAttribute('data-slide-to');

      if (slideIndex) {
        config.interval = false;
      }

      Carousel._jQueryInterface.call($__default['default'](target), config);

      if (slideIndex) {
        $__default['default'](target).data(DATA_KEY$2).to(slideIndex);
      }

      event.preventDefault();
    };

    _createClass(Carousel, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$2;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default;
      }
    }]);

    return Carousel;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */


  $__default['default'](document).on(EVENT_CLICK_DATA_API$2, SELECTOR_DATA_SLIDE, Carousel._dataApiClickHandler);
  $__default['default'](window).on(EVENT_LOAD_DATA_API$1, function () {
    var carousels = [].slice.call(document.querySelectorAll(SELECTOR_DATA_RIDE));

    for (var i = 0, len = carousels.length; i < len; i++) {
      var $carousel = $__default['default'](carousels[i]);

      Carousel._jQueryInterface.call($carousel, $carousel.data());
    }
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  $__default['default'].fn[NAME$2] = Carousel._jQueryInterface;
  $__default['default'].fn[NAME$2].Constructor = Carousel;

  $__default['default'].fn[NAME$2].noConflict = function () {
    $__default['default'].fn[NAME$2] = JQUERY_NO_CONFLICT$2;
    return Carousel._jQueryInterface;
  };

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$3 = 'collapse';
  var VERSION$3 = '4.6.0';
  var DATA_KEY$3 = 'bs.collapse';
  var EVENT_KEY$3 = "." + DATA_KEY$3;
  var DATA_API_KEY$3 = '.data-api';
  var JQUERY_NO_CONFLICT$3 = $__default['default'].fn[NAME$3];
  var Default$1 = {
    toggle: true,
    parent: ''
  };
  var DefaultType$1 = {
    toggle: 'boolean',
    parent: '(string|element)'
  };
  var EVENT_SHOW = "show" + EVENT_KEY$3;
  var EVENT_SHOWN = "shown" + EVENT_KEY$3;
  var EVENT_HIDE = "hide" + EVENT_KEY$3;
  var EVENT_HIDDEN = "hidden" + EVENT_KEY$3;
  var EVENT_CLICK_DATA_API$3 = "click" + EVENT_KEY$3 + DATA_API_KEY$3;
  var CLASS_NAME_SHOW$1 = 'show';
  var CLASS_NAME_COLLAPSE = 'collapse';
  var CLASS_NAME_COLLAPSING = 'collapsing';
  var CLASS_NAME_COLLAPSED = 'collapsed';
  var DIMENSION_WIDTH = 'width';
  var DIMENSION_HEIGHT = 'height';
  var SELECTOR_ACTIVES = '.show, .collapsing';
  var SELECTOR_DATA_TOGGLE$1 = '[data-toggle="collapse"]';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Collapse = /*#__PURE__*/function () {
    function Collapse(element, config) {
      this._isTransitioning = false;
      this._element = element;
      this._config = this._getConfig(config);
      this._triggerArray = [].slice.call(document.querySelectorAll("[data-toggle=\"collapse\"][href=\"#" + element.id + "\"]," + ("[data-toggle=\"collapse\"][data-target=\"#" + element.id + "\"]")));
      var toggleList = [].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLE$1));

      for (var i = 0, len = toggleList.length; i < len; i++) {
        var elem = toggleList[i];
        var selector = Util.getSelectorFromElement(elem);
        var filterElement = [].slice.call(document.querySelectorAll(selector)).filter(function (foundElem) {
          return foundElem === element;
        });

        if (selector !== null && filterElement.length > 0) {
          this._selector = selector;

          this._triggerArray.push(elem);
        }
      }

      this._parent = this._config.parent ? this._getParent() : null;

      if (!this._config.parent) {
        this._addAriaAndCollapsedClass(this._element, this._triggerArray);
      }

      if (this._config.toggle) {
        this.toggle();
      }
    } // Getters


    var _proto = Collapse.prototype;

    // Public
    _proto.toggle = function toggle() {
      if ($__default['default'](this._element).hasClass(CLASS_NAME_SHOW$1)) {
        this.hide();
      } else {
        this.show();
      }
    };

    _proto.show = function show() {
      var _this = this;

      if (this._isTransitioning || $__default['default'](this._element).hasClass(CLASS_NAME_SHOW$1)) {
        return;
      }

      var actives;
      var activesData;

      if (this._parent) {
        actives = [].slice.call(this._parent.querySelectorAll(SELECTOR_ACTIVES)).filter(function (elem) {
          if (typeof _this._config.parent === 'string') {
            return elem.getAttribute('data-parent') === _this._config.parent;
          }

          return elem.classList.contains(CLASS_NAME_COLLAPSE);
        });

        if (actives.length === 0) {
          actives = null;
        }
      }

      if (actives) {
        activesData = $__default['default'](actives).not(this._selector).data(DATA_KEY$3);

        if (activesData && activesData._isTransitioning) {
          return;
        }
      }

      var startEvent = $__default['default'].Event(EVENT_SHOW);
      $__default['default'](this._element).trigger(startEvent);

      if (startEvent.isDefaultPrevented()) {
        return;
      }

      if (actives) {
        Collapse._jQueryInterface.call($__default['default'](actives).not(this._selector), 'hide');

        if (!activesData) {
          $__default['default'](actives).data(DATA_KEY$3, null);
        }
      }

      var dimension = this._getDimension();

      $__default['default'](this._element).removeClass(CLASS_NAME_COLLAPSE).addClass(CLASS_NAME_COLLAPSING);
      this._element.style[dimension] = 0;

      if (this._triggerArray.length) {
        $__default['default'](this._triggerArray).removeClass(CLASS_NAME_COLLAPSED).attr('aria-expanded', true);
      }

      this.setTransitioning(true);

      var complete = function complete() {
        $__default['default'](_this._element).removeClass(CLASS_NAME_COLLAPSING).addClass(CLASS_NAME_COLLAPSE + " " + CLASS_NAME_SHOW$1);
        _this._element.style[dimension] = '';

        _this.setTransitioning(false);

        $__default['default'](_this._element).trigger(EVENT_SHOWN);
      };

      var capitalizedDimension = dimension[0].toUpperCase() + dimension.slice(1);
      var scrollSize = "scroll" + capitalizedDimension;
      var transitionDuration = Util.getTransitionDurationFromElement(this._element);
      $__default['default'](this._element).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
      this._element.style[dimension] = this._element[scrollSize] + "px";
    };

    _proto.hide = function hide() {
      var _this2 = this;

      if (this._isTransitioning || !$__default['default'](this._element).hasClass(CLASS_NAME_SHOW$1)) {
        return;
      }

      var startEvent = $__default['default'].Event(EVENT_HIDE);
      $__default['default'](this._element).trigger(startEvent);

      if (startEvent.isDefaultPrevented()) {
        return;
      }

      var dimension = this._getDimension();

      this._element.style[dimension] = this._element.getBoundingClientRect()[dimension] + "px";
      Util.reflow(this._element);
      $__default['default'](this._element).addClass(CLASS_NAME_COLLAPSING).removeClass(CLASS_NAME_COLLAPSE + " " + CLASS_NAME_SHOW$1);
      var triggerArrayLength = this._triggerArray.length;

      if (triggerArrayLength > 0) {
        for (var i = 0; i < triggerArrayLength; i++) {
          var trigger = this._triggerArray[i];
          var selector = Util.getSelectorFromElement(trigger);

          if (selector !== null) {
            var $elem = $__default['default']([].slice.call(document.querySelectorAll(selector)));

            if (!$elem.hasClass(CLASS_NAME_SHOW$1)) {
              $__default['default'](trigger).addClass(CLASS_NAME_COLLAPSED).attr('aria-expanded', false);
            }
          }
        }
      }

      this.setTransitioning(true);

      var complete = function complete() {
        _this2.setTransitioning(false);

        $__default['default'](_this2._element).removeClass(CLASS_NAME_COLLAPSING).addClass(CLASS_NAME_COLLAPSE).trigger(EVENT_HIDDEN);
      };

      this._element.style[dimension] = '';
      var transitionDuration = Util.getTransitionDurationFromElement(this._element);
      $__default['default'](this._element).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
    };

    _proto.setTransitioning = function setTransitioning(isTransitioning) {
      this._isTransitioning = isTransitioning;
    };

    _proto.dispose = function dispose() {
      $__default['default'].removeData(this._element, DATA_KEY$3);
      this._config = null;
      this._parent = null;
      this._element = null;
      this._triggerArray = null;
      this._isTransitioning = null;
    } // Private
    ;

    _proto._getConfig = function _getConfig(config) {
      config = _extends({}, Default$1, config);
      config.toggle = Boolean(config.toggle); // Coerce string values

      Util.typeCheckConfig(NAME$3, config, DefaultType$1);
      return config;
    };

    _proto._getDimension = function _getDimension() {
      var hasWidth = $__default['default'](this._element).hasClass(DIMENSION_WIDTH);
      return hasWidth ? DIMENSION_WIDTH : DIMENSION_HEIGHT;
    };

    _proto._getParent = function _getParent() {
      var _this3 = this;

      var parent;

      if (Util.isElement(this._config.parent)) {
        parent = this._config.parent; // It's a jQuery object

        if (typeof this._config.parent.jquery !== 'undefined') {
          parent = this._config.parent[0];
        }
      } else {
        parent = document.querySelector(this._config.parent);
      }

      var selector = "[data-toggle=\"collapse\"][data-parent=\"" + this._config.parent + "\"]";
      var children = [].slice.call(parent.querySelectorAll(selector));
      $__default['default'](children).each(function (i, element) {
        _this3._addAriaAndCollapsedClass(Collapse._getTargetFromElement(element), [element]);
      });
      return parent;
    };

    _proto._addAriaAndCollapsedClass = function _addAriaAndCollapsedClass(element, triggerArray) {
      var isOpen = $__default['default'](element).hasClass(CLASS_NAME_SHOW$1);

      if (triggerArray.length) {
        $__default['default'](triggerArray).toggleClass(CLASS_NAME_COLLAPSED, !isOpen).attr('aria-expanded', isOpen);
      }
    } // Static
    ;

    Collapse._getTargetFromElement = function _getTargetFromElement(element) {
      var selector = Util.getSelectorFromElement(element);
      return selector ? document.querySelector(selector) : null;
    };

    Collapse._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var $element = $__default['default'](this);
        var data = $element.data(DATA_KEY$3);

        var _config = _extends({}, Default$1, $element.data(), typeof config === 'object' && config ? config : {});

        if (!data && _config.toggle && typeof config === 'string' && /show|hide/.test(config)) {
          _config.toggle = false;
        }

        if (!data) {
          data = new Collapse(this, _config);
          $element.data(DATA_KEY$3, data);
        }

        if (typeof config === 'string') {
          if (typeof data[config] === 'undefined') {
            throw new TypeError("No method named \"" + config + "\"");
          }

          data[config]();
        }
      });
    };

    _createClass(Collapse, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$3;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$1;
      }
    }]);

    return Collapse;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */


  $__default['default'](document).on(EVENT_CLICK_DATA_API$3, SELECTOR_DATA_TOGGLE$1, function (event) {
    // preventDefault only for <a> elements (which change the URL) not inside the collapsible element
    if (event.currentTarget.tagName === 'A') {
      event.preventDefault();
    }

    var $trigger = $__default['default'](this);
    var selector = Util.getSelectorFromElement(this);
    var selectors = [].slice.call(document.querySelectorAll(selector));
    $__default['default'](selectors).each(function () {
      var $target = $__default['default'](this);
      var data = $target.data(DATA_KEY$3);
      var config = data ? 'toggle' : $trigger.data();

      Collapse._jQueryInterface.call($target, config);
    });
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  $__default['default'].fn[NAME$3] = Collapse._jQueryInterface;
  $__default['default'].fn[NAME$3].Constructor = Collapse;

  $__default['default'].fn[NAME$3].noConflict = function () {
    $__default['default'].fn[NAME$3] = JQUERY_NO_CONFLICT$3;
    return Collapse._jQueryInterface;
  };

  /**!
   * @fileOverview Kickass library to create and place poppers near their reference elements.
   * @version 1.16.1
   * @license
   * Copyright (c) 2016 Federico Zivolo and contributors
   *
   * Permission is hereby granted, free of charge, to any person obtaining a copy
   * of this software and associated documentation files (the "Software"), to deal
   * in the Software without restriction, including without limitation the rights
   * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
   * copies of the Software, and to permit persons to whom the Software is
   * furnished to do so, subject to the following conditions:
   *
   * The above copyright notice and this permission notice shall be included in all
   * copies or substantial portions of the Software.
   *
   * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
   * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
   * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
   * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
   * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
   * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
   * SOFTWARE.
   */
  var isBrowser = typeof window !== 'undefined' && typeof document !== 'undefined' && typeof navigator !== 'undefined';

  var timeoutDuration = function () {
    var longerTimeoutBrowsers = ['Edge', 'Trident', 'Firefox'];
    for (var i = 0; i < longerTimeoutBrowsers.length; i += 1) {
      if (isBrowser && navigator.userAgent.indexOf(longerTimeoutBrowsers[i]) >= 0) {
        return 1;
      }
    }
    return 0;
  }();

  function microtaskDebounce(fn) {
    var called = false;
    return function () {
      if (called) {
        return;
      }
      called = true;
      window.Promise.resolve().then(function () {
        called = false;
        fn();
      });
    };
  }

  function taskDebounce(fn) {
    var scheduled = false;
    return function () {
      if (!scheduled) {
        scheduled = true;
        setTimeout(function () {
          scheduled = false;
          fn();
        }, timeoutDuration);
      }
    };
  }

  var supportsMicroTasks = isBrowser && window.Promise;

  /**
  * Create a debounced version of a method, that's asynchronously deferred
  * but called in the minimum time possible.
  *
  * @method
  * @memberof Popper.Utils
  * @argument {Function} fn
  * @returns {Function}
  */
  var debounce = supportsMicroTasks ? microtaskDebounce : taskDebounce;

  /**
   * Check if the given variable is a function
   * @method
   * @memberof Popper.Utils
   * @argument {Any} functionToCheck - variable to check
   * @returns {Boolean} answer to: is a function?
   */
  function isFunction(functionToCheck) {
    var getType = {};
    return functionToCheck && getType.toString.call(functionToCheck) === '[object Function]';
  }

  /**
   * Get CSS computed property of the given element
   * @method
   * @memberof Popper.Utils
   * @argument {Eement} element
   * @argument {String} property
   */
  function getStyleComputedProperty(element, property) {
    if (element.nodeType !== 1) {
      return [];
    }
    // NOTE: 1 DOM access here
    var window = element.ownerDocument.defaultView;
    var css = window.getComputedStyle(element, null);
    return property ? css[property] : css;
  }

  /**
   * Returns the parentNode or the host of the element
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Element} parent
   */
  function getParentNode(element) {
    if (element.nodeName === 'HTML') {
      return element;
    }
    return element.parentNode || element.host;
  }

  /**
   * Returns the scrolling parent of the given element
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Element} scroll parent
   */
  function getScrollParent(element) {
    // Return body, `getScroll` will take care to get the correct `scrollTop` from it
    if (!element) {
      return document.body;
    }

    switch (element.nodeName) {
      case 'HTML':
      case 'BODY':
        return element.ownerDocument.body;
      case '#document':
        return element.body;
    }

    // Firefox want us to check `-x` and `-y` variations as well

    var _getStyleComputedProp = getStyleComputedProperty(element),
        overflow = _getStyleComputedProp.overflow,
        overflowX = _getStyleComputedProp.overflowX,
        overflowY = _getStyleComputedProp.overflowY;

    if (/(auto|scroll|overlay)/.test(overflow + overflowY + overflowX)) {
      return element;
    }

    return getScrollParent(getParentNode(element));
  }

  /**
   * Returns the reference node of the reference object, or the reference object itself.
   * @method
   * @memberof Popper.Utils
   * @param {Element|Object} reference - the reference element (the popper will be relative to this)
   * @returns {Element} parent
   */
  function getReferenceNode(reference) {
    return reference && reference.referenceNode ? reference.referenceNode : reference;
  }

  var isIE11 = isBrowser && !!(window.MSInputMethodContext && document.documentMode);
  var isIE10 = isBrowser && /MSIE 10/.test(navigator.userAgent);

  /**
   * Determines if the browser is Internet Explorer
   * @method
   * @memberof Popper.Utils
   * @param {Number} version to check
   * @returns {Boolean} isIE
   */
  function isIE(version) {
    if (version === 11) {
      return isIE11;
    }
    if (version === 10) {
      return isIE10;
    }
    return isIE11 || isIE10;
  }

  /**
   * Returns the offset parent of the given element
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Element} offset parent
   */
  function getOffsetParent(element) {
    if (!element) {
      return document.documentElement;
    }

    var noOffsetParent = isIE(10) ? document.body : null;

    // NOTE: 1 DOM access here
    var offsetParent = element.offsetParent || null;
    // Skip hidden elements which don't have an offsetParent
    while (offsetParent === noOffsetParent && element.nextElementSibling) {
      offsetParent = (element = element.nextElementSibling).offsetParent;
    }

    var nodeName = offsetParent && offsetParent.nodeName;

    if (!nodeName || nodeName === 'BODY' || nodeName === 'HTML') {
      return element ? element.ownerDocument.documentElement : document.documentElement;
    }

    // .offsetParent will return the closest TH, TD or TABLE in case
    // no offsetParent is present, I hate this job...
    if (['TH', 'TD', 'TABLE'].indexOf(offsetParent.nodeName) !== -1 && getStyleComputedProperty(offsetParent, 'position') === 'static') {
      return getOffsetParent(offsetParent);
    }

    return offsetParent;
  }

  function isOffsetContainer(element) {
    var nodeName = element.nodeName;

    if (nodeName === 'BODY') {
      return false;
    }
    return nodeName === 'HTML' || getOffsetParent(element.firstElementChild) === element;
  }

  /**
   * Finds the root node (document, shadowDOM root) of the given element
   * @method
   * @memberof Popper.Utils
   * @argument {Element} node
   * @returns {Element} root node
   */
  function getRoot(node) {
    if (node.parentNode !== null) {
      return getRoot(node.parentNode);
    }

    return node;
  }

  /**
   * Finds the offset parent common to the two provided nodes
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element1
   * @argument {Element} element2
   * @returns {Element} common offset parent
   */
  function findCommonOffsetParent(element1, element2) {
    // This check is needed to avoid errors in case one of the elements isn't defined for any reason
    if (!element1 || !element1.nodeType || !element2 || !element2.nodeType) {
      return document.documentElement;
    }

    // Here we make sure to give as "start" the element that comes first in the DOM
    var order = element1.compareDocumentPosition(element2) & Node.DOCUMENT_POSITION_FOLLOWING;
    var start = order ? element1 : element2;
    var end = order ? element2 : element1;

    // Get common ancestor container
    var range = document.createRange();
    range.setStart(start, 0);
    range.setEnd(end, 0);
    var commonAncestorContainer = range.commonAncestorContainer;

    // Both nodes are inside #document

    if (element1 !== commonAncestorContainer && element2 !== commonAncestorContainer || start.contains(end)) {
      if (isOffsetContainer(commonAncestorContainer)) {
        return commonAncestorContainer;
      }

      return getOffsetParent(commonAncestorContainer);
    }

    // one of the nodes is inside shadowDOM, find which one
    var element1root = getRoot(element1);
    if (element1root.host) {
      return findCommonOffsetParent(element1root.host, element2);
    } else {
      return findCommonOffsetParent(element1, getRoot(element2).host);
    }
  }

  /**
   * Gets the scroll value of the given element in the given side (top and left)
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @argument {String} side `top` or `left`
   * @returns {number} amount of scrolled pixels
   */
  function getScroll(element) {
    var side = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'top';

    var upperSide = side === 'top' ? 'scrollTop' : 'scrollLeft';
    var nodeName = element.nodeName;

    if (nodeName === 'BODY' || nodeName === 'HTML') {
      var html = element.ownerDocument.documentElement;
      var scrollingElement = element.ownerDocument.scrollingElement || html;
      return scrollingElement[upperSide];
    }

    return element[upperSide];
  }

  /*
   * Sum or subtract the element scroll values (left and top) from a given rect object
   * @method
   * @memberof Popper.Utils
   * @param {Object} rect - Rect object you want to change
   * @param {HTMLElement} element - The element from the function reads the scroll values
   * @param {Boolean} subtract - set to true if you want to subtract the scroll values
   * @return {Object} rect - The modifier rect object
   */
  function includeScroll(rect, element) {
    var subtract = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

    var scrollTop = getScroll(element, 'top');
    var scrollLeft = getScroll(element, 'left');
    var modifier = subtract ? -1 : 1;
    rect.top += scrollTop * modifier;
    rect.bottom += scrollTop * modifier;
    rect.left += scrollLeft * modifier;
    rect.right += scrollLeft * modifier;
    return rect;
  }

  /*
   * Helper to detect borders of a given element
   * @method
   * @memberof Popper.Utils
   * @param {CSSStyleDeclaration} styles
   * Result of `getStyleComputedProperty` on the given element
   * @param {String} axis - `x` or `y`
   * @return {number} borders - The borders size of the given axis
   */

  function getBordersSize(styles, axis) {
    var sideA = axis === 'x' ? 'Left' : 'Top';
    var sideB = sideA === 'Left' ? 'Right' : 'Bottom';

    return parseFloat(styles['border' + sideA + 'Width']) + parseFloat(styles['border' + sideB + 'Width']);
  }

  function getSize(axis, body, html, computedStyle) {
    return Math.max(body['offset' + axis], body['scroll' + axis], html['client' + axis], html['offset' + axis], html['scroll' + axis], isIE(10) ? parseInt(html['offset' + axis]) + parseInt(computedStyle['margin' + (axis === 'Height' ? 'Top' : 'Left')]) + parseInt(computedStyle['margin' + (axis === 'Height' ? 'Bottom' : 'Right')]) : 0);
  }

  function getWindowSizes(document) {
    var body = document.body;
    var html = document.documentElement;
    var computedStyle = isIE(10) && getComputedStyle(html);

    return {
      height: getSize('Height', body, html, computedStyle),
      width: getSize('Width', body, html, computedStyle)
    };
  }

  var classCallCheck = function (instance, Constructor) {
    if (!(instance instanceof Constructor)) {
      throw new TypeError("Cannot call a class as a function");
    }
  };

  var createClass = function () {
    function defineProperties(target, props) {
      for (var i = 0; i < props.length; i++) {
        var descriptor = props[i];
        descriptor.enumerable = descriptor.enumerable || false;
        descriptor.configurable = true;
        if ("value" in descriptor) descriptor.writable = true;
        Object.defineProperty(target, descriptor.key, descriptor);
      }
    }

    return function (Constructor, protoProps, staticProps) {
      if (protoProps) defineProperties(Constructor.prototype, protoProps);
      if (staticProps) defineProperties(Constructor, staticProps);
      return Constructor;
    };
  }();





  var defineProperty = function (obj, key, value) {
    if (key in obj) {
      Object.defineProperty(obj, key, {
        value: value,
        enumerable: true,
        configurable: true,
        writable: true
      });
    } else {
      obj[key] = value;
    }

    return obj;
  };

  var _extends$1 = Object.assign || function (target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];

      for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }

    return target;
  };

  /**
   * Given element offsets, generate an output similar to getBoundingClientRect
   * @method
   * @memberof Popper.Utils
   * @argument {Object} offsets
   * @returns {Object} ClientRect like output
   */
  function getClientRect(offsets) {
    return _extends$1({}, offsets, {
      right: offsets.left + offsets.width,
      bottom: offsets.top + offsets.height
    });
  }

  /**
   * Get bounding client rect of given element
   * @method
   * @memberof Popper.Utils
   * @param {HTMLElement} element
   * @return {Object} client rect
   */
  function getBoundingClientRect(element) {
    var rect = {};

    // IE10 10 FIX: Please, don't ask, the element isn't
    // considered in DOM in some circumstances...
    // This isn't reproducible in IE10 compatibility mode of IE11
    try {
      if (isIE(10)) {
        rect = element.getBoundingClientRect();
        var scrollTop = getScroll(element, 'top');
        var scrollLeft = getScroll(element, 'left');
        rect.top += scrollTop;
        rect.left += scrollLeft;
        rect.bottom += scrollTop;
        rect.right += scrollLeft;
      } else {
        rect = element.getBoundingClientRect();
      }
    } catch (e) {}

    var result = {
      left: rect.left,
      top: rect.top,
      width: rect.right - rect.left,
      height: rect.bottom - rect.top
    };

    // subtract scrollbar size from sizes
    var sizes = element.nodeName === 'HTML' ? getWindowSizes(element.ownerDocument) : {};
    var width = sizes.width || element.clientWidth || result.width;
    var height = sizes.height || element.clientHeight || result.height;

    var horizScrollbar = element.offsetWidth - width;
    var vertScrollbar = element.offsetHeight - height;

    // if an hypothetical scrollbar is detected, we must be sure it's not a `border`
    // we make this check conditional for performance reasons
    if (horizScrollbar || vertScrollbar) {
      var styles = getStyleComputedProperty(element);
      horizScrollbar -= getBordersSize(styles, 'x');
      vertScrollbar -= getBordersSize(styles, 'y');

      result.width -= horizScrollbar;
      result.height -= vertScrollbar;
    }

    return getClientRect(result);
  }

  function getOffsetRectRelativeToArbitraryNode(children, parent) {
    var fixedPosition = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

    var isIE10 = isIE(10);
    var isHTML = parent.nodeName === 'HTML';
    var childrenRect = getBoundingClientRect(children);
    var parentRect = getBoundingClientRect(parent);
    var scrollParent = getScrollParent(children);

    var styles = getStyleComputedProperty(parent);
    var borderTopWidth = parseFloat(styles.borderTopWidth);
    var borderLeftWidth = parseFloat(styles.borderLeftWidth);

    // In cases where the parent is fixed, we must ignore negative scroll in offset calc
    if (fixedPosition && isHTML) {
      parentRect.top = Math.max(parentRect.top, 0);
      parentRect.left = Math.max(parentRect.left, 0);
    }
    var offsets = getClientRect({
      top: childrenRect.top - parentRect.top - borderTopWidth,
      left: childrenRect.left - parentRect.left - borderLeftWidth,
      width: childrenRect.width,
      height: childrenRect.height
    });
    offsets.marginTop = 0;
    offsets.marginLeft = 0;

    // Subtract margins of documentElement in case it's being used as parent
    // we do this only on HTML because it's the only element that behaves
    // differently when margins are applied to it. The margins are included in
    // the box of the documentElement, in the other cases not.
    if (!isIE10 && isHTML) {
      var marginTop = parseFloat(styles.marginTop);
      var marginLeft = parseFloat(styles.marginLeft);

      offsets.top -= borderTopWidth - marginTop;
      offsets.bottom -= borderTopWidth - marginTop;
      offsets.left -= borderLeftWidth - marginLeft;
      offsets.right -= borderLeftWidth - marginLeft;

      // Attach marginTop and marginLeft because in some circumstances we may need them
      offsets.marginTop = marginTop;
      offsets.marginLeft = marginLeft;
    }

    if (isIE10 && !fixedPosition ? parent.contains(scrollParent) : parent === scrollParent && scrollParent.nodeName !== 'BODY') {
      offsets = includeScroll(offsets, parent);
    }

    return offsets;
  }

  function getViewportOffsetRectRelativeToArtbitraryNode(element) {
    var excludeScroll = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

    var html = element.ownerDocument.documentElement;
    var relativeOffset = getOffsetRectRelativeToArbitraryNode(element, html);
    var width = Math.max(html.clientWidth, window.innerWidth || 0);
    var height = Math.max(html.clientHeight, window.innerHeight || 0);

    var scrollTop = !excludeScroll ? getScroll(html) : 0;
    var scrollLeft = !excludeScroll ? getScroll(html, 'left') : 0;

    var offset = {
      top: scrollTop - relativeOffset.top + relativeOffset.marginTop,
      left: scrollLeft - relativeOffset.left + relativeOffset.marginLeft,
      width: width,
      height: height
    };

    return getClientRect(offset);
  }

  /**
   * Check if the given element is fixed or is inside a fixed parent
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @argument {Element} customContainer
   * @returns {Boolean} answer to "isFixed?"
   */
  function isFixed(element) {
    var nodeName = element.nodeName;
    if (nodeName === 'BODY' || nodeName === 'HTML') {
      return false;
    }
    if (getStyleComputedProperty(element, 'position') === 'fixed') {
      return true;
    }
    var parentNode = getParentNode(element);
    if (!parentNode) {
      return false;
    }
    return isFixed(parentNode);
  }

  /**
   * Finds the first parent of an element that has a transformed property defined
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Element} first transformed parent or documentElement
   */

  function getFixedPositionOffsetParent(element) {
    // This check is needed to avoid errors in case one of the elements isn't defined for any reason
    if (!element || !element.parentElement || isIE()) {
      return document.documentElement;
    }
    var el = element.parentElement;
    while (el && getStyleComputedProperty(el, 'transform') === 'none') {
      el = el.parentElement;
    }
    return el || document.documentElement;
  }

  /**
   * Computed the boundaries limits and return them
   * @method
   * @memberof Popper.Utils
   * @param {HTMLElement} popper
   * @param {HTMLElement} reference
   * @param {number} padding
   * @param {HTMLElement} boundariesElement - Element used to define the boundaries
   * @param {Boolean} fixedPosition - Is in fixed position mode
   * @returns {Object} Coordinates of the boundaries
   */
  function getBoundaries(popper, reference, padding, boundariesElement) {
    var fixedPosition = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : false;

    // NOTE: 1 DOM access here

    var boundaries = { top: 0, left: 0 };
    var offsetParent = fixedPosition ? getFixedPositionOffsetParent(popper) : findCommonOffsetParent(popper, getReferenceNode(reference));

    // Handle viewport case
    if (boundariesElement === 'viewport') {
      boundaries = getViewportOffsetRectRelativeToArtbitraryNode(offsetParent, fixedPosition);
    } else {
      // Handle other cases based on DOM element used as boundaries
      var boundariesNode = void 0;
      if (boundariesElement === 'scrollParent') {
        boundariesNode = getScrollParent(getParentNode(reference));
        if (boundariesNode.nodeName === 'BODY') {
          boundariesNode = popper.ownerDocument.documentElement;
        }
      } else if (boundariesElement === 'window') {
        boundariesNode = popper.ownerDocument.documentElement;
      } else {
        boundariesNode = boundariesElement;
      }

      var offsets = getOffsetRectRelativeToArbitraryNode(boundariesNode, offsetParent, fixedPosition);

      // In case of HTML, we need a different computation
      if (boundariesNode.nodeName === 'HTML' && !isFixed(offsetParent)) {
        var _getWindowSizes = getWindowSizes(popper.ownerDocument),
            height = _getWindowSizes.height,
            width = _getWindowSizes.width;

        boundaries.top += offsets.top - offsets.marginTop;
        boundaries.bottom = height + offsets.top;
        boundaries.left += offsets.left - offsets.marginLeft;
        boundaries.right = width + offsets.left;
      } else {
        // for all the other DOM elements, this one is good
        boundaries = offsets;
      }
    }

    // Add paddings
    padding = padding || 0;
    var isPaddingNumber = typeof padding === 'number';
    boundaries.left += isPaddingNumber ? padding : padding.left || 0;
    boundaries.top += isPaddingNumber ? padding : padding.top || 0;
    boundaries.right -= isPaddingNumber ? padding : padding.right || 0;
    boundaries.bottom -= isPaddingNumber ? padding : padding.bottom || 0;

    return boundaries;
  }

  function getArea(_ref) {
    var width = _ref.width,
        height = _ref.height;

    return width * height;
  }

  /**
   * Utility used to transform the `auto` placement to the placement with more
   * available space.
   * @method
   * @memberof Popper.Utils
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function computeAutoPlacement(placement, refRect, popper, reference, boundariesElement) {
    var padding = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : 0;

    if (placement.indexOf('auto') === -1) {
      return placement;
    }

    var boundaries = getBoundaries(popper, reference, padding, boundariesElement);

    var rects = {
      top: {
        width: boundaries.width,
        height: refRect.top - boundaries.top
      },
      right: {
        width: boundaries.right - refRect.right,
        height: boundaries.height
      },
      bottom: {
        width: boundaries.width,
        height: boundaries.bottom - refRect.bottom
      },
      left: {
        width: refRect.left - boundaries.left,
        height: boundaries.height
      }
    };

    var sortedAreas = Object.keys(rects).map(function (key) {
      return _extends$1({
        key: key
      }, rects[key], {
        area: getArea(rects[key])
      });
    }).sort(function (a, b) {
      return b.area - a.area;
    });

    var filteredAreas = sortedAreas.filter(function (_ref2) {
      var width = _ref2.width,
          height = _ref2.height;
      return width >= popper.clientWidth && height >= popper.clientHeight;
    });

    var computedPlacement = filteredAreas.length > 0 ? filteredAreas[0].key : sortedAreas[0].key;

    var variation = placement.split('-')[1];

    return computedPlacement + (variation ? '-' + variation : '');
  }

  /**
   * Get offsets to the reference element
   * @method
   * @memberof Popper.Utils
   * @param {Object} state
   * @param {Element} popper - the popper element
   * @param {Element} reference - the reference element (the popper will be relative to this)
   * @param {Element} fixedPosition - is in fixed position mode
   * @returns {Object} An object containing the offsets which will be applied to the popper
   */
  function getReferenceOffsets(state, popper, reference) {
    var fixedPosition = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;

    var commonOffsetParent = fixedPosition ? getFixedPositionOffsetParent(popper) : findCommonOffsetParent(popper, getReferenceNode(reference));
    return getOffsetRectRelativeToArbitraryNode(reference, commonOffsetParent, fixedPosition);
  }

  /**
   * Get the outer sizes of the given element (offset size + margins)
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element
   * @returns {Object} object containing width and height properties
   */
  function getOuterSizes(element) {
    var window = element.ownerDocument.defaultView;
    var styles = window.getComputedStyle(element);
    var x = parseFloat(styles.marginTop || 0) + parseFloat(styles.marginBottom || 0);
    var y = parseFloat(styles.marginLeft || 0) + parseFloat(styles.marginRight || 0);
    var result = {
      width: element.offsetWidth + y,
      height: element.offsetHeight + x
    };
    return result;
  }

  /**
   * Get the opposite placement of the given one
   * @method
   * @memberof Popper.Utils
   * @argument {String} placement
   * @returns {String} flipped placement
   */
  function getOppositePlacement(placement) {
    var hash = { left: 'right', right: 'left', bottom: 'top', top: 'bottom' };
    return placement.replace(/left|right|bottom|top/g, function (matched) {
      return hash[matched];
    });
  }

  /**
   * Get offsets to the popper
   * @method
   * @memberof Popper.Utils
   * @param {Object} position - CSS position the Popper will get applied
   * @param {HTMLElement} popper - the popper element
   * @param {Object} referenceOffsets - the reference offsets (the popper will be relative to this)
   * @param {String} placement - one of the valid placement options
   * @returns {Object} popperOffsets - An object containing the offsets which will be applied to the popper
   */
  function getPopperOffsets(popper, referenceOffsets, placement) {
    placement = placement.split('-')[0];

    // Get popper node sizes
    var popperRect = getOuterSizes(popper);

    // Add position, width and height to our offsets object
    var popperOffsets = {
      width: popperRect.width,
      height: popperRect.height
    };

    // depending by the popper placement we have to compute its offsets slightly differently
    var isHoriz = ['right', 'left'].indexOf(placement) !== -1;
    var mainSide = isHoriz ? 'top' : 'left';
    var secondarySide = isHoriz ? 'left' : 'top';
    var measurement = isHoriz ? 'height' : 'width';
    var secondaryMeasurement = !isHoriz ? 'height' : 'width';

    popperOffsets[mainSide] = referenceOffsets[mainSide] + referenceOffsets[measurement] / 2 - popperRect[measurement] / 2;
    if (placement === secondarySide) {
      popperOffsets[secondarySide] = referenceOffsets[secondarySide] - popperRect[secondaryMeasurement];
    } else {
      popperOffsets[secondarySide] = referenceOffsets[getOppositePlacement(secondarySide)];
    }

    return popperOffsets;
  }

  /**
   * Mimics the `find` method of Array
   * @method
   * @memberof Popper.Utils
   * @argument {Array} arr
   * @argument prop
   * @argument value
   * @returns index or -1
   */
  function find(arr, check) {
    // use native find if supported
    if (Array.prototype.find) {
      return arr.find(check);
    }

    // use `filter` to obtain the same behavior of `find`
    return arr.filter(check)[0];
  }

  /**
   * Return the index of the matching object
   * @method
   * @memberof Popper.Utils
   * @argument {Array} arr
   * @argument prop
   * @argument value
   * @returns index or -1
   */
  function findIndex(arr, prop, value) {
    // use native findIndex if supported
    if (Array.prototype.findIndex) {
      return arr.findIndex(function (cur) {
        return cur[prop] === value;
      });
    }

    // use `find` + `indexOf` if `findIndex` isn't supported
    var match = find(arr, function (obj) {
      return obj[prop] === value;
    });
    return arr.indexOf(match);
  }

  /**
   * Loop trough the list of modifiers and run them in order,
   * each of them will then edit the data object.
   * @method
   * @memberof Popper.Utils
   * @param {dataObject} data
   * @param {Array} modifiers
   * @param {String} ends - Optional modifier name used as stopper
   * @returns {dataObject}
   */
  function runModifiers(modifiers, data, ends) {
    var modifiersToRun = ends === undefined ? modifiers : modifiers.slice(0, findIndex(modifiers, 'name', ends));

    modifiersToRun.forEach(function (modifier) {
      if (modifier['function']) {
        // eslint-disable-line dot-notation
        console.warn('`modifier.function` is deprecated, use `modifier.fn`!');
      }
      var fn = modifier['function'] || modifier.fn; // eslint-disable-line dot-notation
      if (modifier.enabled && isFunction(fn)) {
        // Add properties to offsets to make them a complete clientRect object
        // we do this before each modifier to make sure the previous one doesn't
        // mess with these values
        data.offsets.popper = getClientRect(data.offsets.popper);
        data.offsets.reference = getClientRect(data.offsets.reference);

        data = fn(data, modifier);
      }
    });

    return data;
  }

  /**
   * Updates the position of the popper, computing the new offsets and applying
   * the new style.<br />
   * Prefer `scheduleUpdate` over `update` because of performance reasons.
   * @method
   * @memberof Popper
   */
  function update() {
    // if popper is destroyed, don't perform any further update
    if (this.state.isDestroyed) {
      return;
    }

    var data = {
      instance: this,
      styles: {},
      arrowStyles: {},
      attributes: {},
      flipped: false,
      offsets: {}
    };

    // compute reference element offsets
    data.offsets.reference = getReferenceOffsets(this.state, this.popper, this.reference, this.options.positionFixed);

    // compute auto placement, store placement inside the data object,
    // modifiers will be able to edit `placement` if needed
    // and refer to originalPlacement to know the original value
    data.placement = computeAutoPlacement(this.options.placement, data.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding);

    // store the computed placement inside `originalPlacement`
    data.originalPlacement = data.placement;

    data.positionFixed = this.options.positionFixed;

    // compute the popper offsets
    data.offsets.popper = getPopperOffsets(this.popper, data.offsets.reference, data.placement);

    data.offsets.popper.position = this.options.positionFixed ? 'fixed' : 'absolute';

    // run the modifiers
    data = runModifiers(this.modifiers, data);

    // the first `update` will call `onCreate` callback
    // the other ones will call `onUpdate` callback
    if (!this.state.isCreated) {
      this.state.isCreated = true;
      this.options.onCreate(data);
    } else {
      this.options.onUpdate(data);
    }
  }

  /**
   * Helper used to know if the given modifier is enabled.
   * @method
   * @memberof Popper.Utils
   * @returns {Boolean}
   */
  function isModifierEnabled(modifiers, modifierName) {
    return modifiers.some(function (_ref) {
      var name = _ref.name,
          enabled = _ref.enabled;
      return enabled && name === modifierName;
    });
  }

  /**
   * Get the prefixed supported property name
   * @method
   * @memberof Popper.Utils
   * @argument {String} property (camelCase)
   * @returns {String} prefixed property (camelCase or PascalCase, depending on the vendor prefix)
   */
  function getSupportedPropertyName(property) {
    var prefixes = [false, 'ms', 'Webkit', 'Moz', 'O'];
    var upperProp = property.charAt(0).toUpperCase() + property.slice(1);

    for (var i = 0; i < prefixes.length; i++) {
      var prefix = prefixes[i];
      var toCheck = prefix ? '' + prefix + upperProp : property;
      if (typeof document.body.style[toCheck] !== 'undefined') {
        return toCheck;
      }
    }
    return null;
  }

  /**
   * Destroys the popper.
   * @method
   * @memberof Popper
   */
  function destroy() {
    this.state.isDestroyed = true;

    // touch DOM only if `applyStyle` modifier is enabled
    if (isModifierEnabled(this.modifiers, 'applyStyle')) {
      this.popper.removeAttribute('x-placement');
      this.popper.style.position = '';
      this.popper.style.top = '';
      this.popper.style.left = '';
      this.popper.style.right = '';
      this.popper.style.bottom = '';
      this.popper.style.willChange = '';
      this.popper.style[getSupportedPropertyName('transform')] = '';
    }

    this.disableEventListeners();

    // remove the popper if user explicitly asked for the deletion on destroy
    // do not use `remove` because IE11 doesn't support it
    if (this.options.removeOnDestroy) {
      this.popper.parentNode.removeChild(this.popper);
    }
    return this;
  }

  /**
   * Get the window associated with the element
   * @argument {Element} element
   * @returns {Window}
   */
  function getWindow(element) {
    var ownerDocument = element.ownerDocument;
    return ownerDocument ? ownerDocument.defaultView : window;
  }

  function attachToScrollParents(scrollParent, event, callback, scrollParents) {
    var isBody = scrollParent.nodeName === 'BODY';
    var target = isBody ? scrollParent.ownerDocument.defaultView : scrollParent;
    target.addEventListener(event, callback, { passive: true });

    if (!isBody) {
      attachToScrollParents(getScrollParent(target.parentNode), event, callback, scrollParents);
    }
    scrollParents.push(target);
  }

  /**
   * Setup needed event listeners used to update the popper position
   * @method
   * @memberof Popper.Utils
   * @private
   */
  function setupEventListeners(reference, options, state, updateBound) {
    // Resize event listener on window
    state.updateBound = updateBound;
    getWindow(reference).addEventListener('resize', state.updateBound, { passive: true });

    // Scroll event listener on scroll parents
    var scrollElement = getScrollParent(reference);
    attachToScrollParents(scrollElement, 'scroll', state.updateBound, state.scrollParents);
    state.scrollElement = scrollElement;
    state.eventsEnabled = true;

    return state;
  }

  /**
   * It will add resize/scroll events and start recalculating
   * position of the popper element when they are triggered.
   * @method
   * @memberof Popper
   */
  function enableEventListeners() {
    if (!this.state.eventsEnabled) {
      this.state = setupEventListeners(this.reference, this.options, this.state, this.scheduleUpdate);
    }
  }

  /**
   * Remove event listeners used to update the popper position
   * @method
   * @memberof Popper.Utils
   * @private
   */
  function removeEventListeners(reference, state) {
    // Remove resize event listener on window
    getWindow(reference).removeEventListener('resize', state.updateBound);

    // Remove scroll event listener on scroll parents
    state.scrollParents.forEach(function (target) {
      target.removeEventListener('scroll', state.updateBound);
    });

    // Reset state
    state.updateBound = null;
    state.scrollParents = [];
    state.scrollElement = null;
    state.eventsEnabled = false;
    return state;
  }

  /**
   * It will remove resize/scroll events and won't recalculate popper position
   * when they are triggered. It also won't trigger `onUpdate` callback anymore,
   * unless you call `update` method manually.
   * @method
   * @memberof Popper
   */
  function disableEventListeners() {
    if (this.state.eventsEnabled) {
      cancelAnimationFrame(this.scheduleUpdate);
      this.state = removeEventListeners(this.reference, this.state);
    }
  }

  /**
   * Tells if a given input is a number
   * @method
   * @memberof Popper.Utils
   * @param {*} input to check
   * @return {Boolean}
   */
  function isNumeric(n) {
    return n !== '' && !isNaN(parseFloat(n)) && isFinite(n);
  }

  /**
   * Set the style to the given popper
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element - Element to apply the style to
   * @argument {Object} styles
   * Object with a list of properties and values which will be applied to the element
   */
  function setStyles(element, styles) {
    Object.keys(styles).forEach(function (prop) {
      var unit = '';
      // add unit if the value is numeric and is one of the following
      if (['width', 'height', 'top', 'right', 'bottom', 'left'].indexOf(prop) !== -1 && isNumeric(styles[prop])) {
        unit = 'px';
      }
      element.style[prop] = styles[prop] + unit;
    });
  }

  /**
   * Set the attributes to the given popper
   * @method
   * @memberof Popper.Utils
   * @argument {Element} element - Element to apply the attributes to
   * @argument {Object} styles
   * Object with a list of properties and values which will be applied to the element
   */
  function setAttributes(element, attributes) {
    Object.keys(attributes).forEach(function (prop) {
      var value = attributes[prop];
      if (value !== false) {
        element.setAttribute(prop, attributes[prop]);
      } else {
        element.removeAttribute(prop);
      }
    });
  }

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} data.styles - List of style properties - values to apply to popper element
   * @argument {Object} data.attributes - List of attribute properties - values to apply to popper element
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The same data object
   */
  function applyStyle(data) {
    // any property present in `data.styles` will be applied to the popper,
    // in this way we can make the 3rd party modifiers add custom styles to it
    // Be aware, modifiers could override the properties defined in the previous
    // lines of this modifier!
    setStyles(data.instance.popper, data.styles);

    // any property present in `data.attributes` will be applied to the popper,
    // they will be set as HTML attributes of the element
    setAttributes(data.instance.popper, data.attributes);

    // if arrowElement is defined and arrowStyles has some properties
    if (data.arrowElement && Object.keys(data.arrowStyles).length) {
      setStyles(data.arrowElement, data.arrowStyles);
    }

    return data;
  }

  /**
   * Set the x-placement attribute before everything else because it could be used
   * to add margins to the popper margins needs to be calculated to get the
   * correct popper offsets.
   * @method
   * @memberof Popper.modifiers
   * @param {HTMLElement} reference - The reference element used to position the popper
   * @param {HTMLElement} popper - The HTML element used as popper
   * @param {Object} options - Popper.js options
   */
  function applyStyleOnLoad(reference, popper, options, modifierOptions, state) {
    // compute reference element offsets
    var referenceOffsets = getReferenceOffsets(state, popper, reference, options.positionFixed);

    // compute auto placement, store placement inside the data object,
    // modifiers will be able to edit `placement` if needed
    // and refer to originalPlacement to know the original value
    var placement = computeAutoPlacement(options.placement, referenceOffsets, popper, reference, options.modifiers.flip.boundariesElement, options.modifiers.flip.padding);

    popper.setAttribute('x-placement', placement);

    // Apply `position` to popper before anything else because
    // without the position applied we can't guarantee correct computations
    setStyles(popper, { position: options.positionFixed ? 'fixed' : 'absolute' });

    return options;
  }

  /**
   * @function
   * @memberof Popper.Utils
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Boolean} shouldRound - If the offsets should be rounded at all
   * @returns {Object} The popper's position offsets rounded
   *
   * The tale of pixel-perfect positioning. It's still not 100% perfect, but as
   * good as it can be within reason.
   * Discussion here: https://github.com/FezVrasta/popper.js/pull/715
   *
   * Low DPI screens cause a popper to be blurry if not using full pixels (Safari
   * as well on High DPI screens).
   *
   * Firefox prefers no rounding for positioning and does not have blurriness on
   * high DPI screens.
   *
   * Only horizontal placement and left/right values need to be considered.
   */
  function getRoundedOffsets(data, shouldRound) {
    var _data$offsets = data.offsets,
        popper = _data$offsets.popper,
        reference = _data$offsets.reference;
    var round = Math.round,
        floor = Math.floor;

    var noRound = function noRound(v) {
      return v;
    };

    var referenceWidth = round(reference.width);
    var popperWidth = round(popper.width);

    var isVertical = ['left', 'right'].indexOf(data.placement) !== -1;
    var isVariation = data.placement.indexOf('-') !== -1;
    var sameWidthParity = referenceWidth % 2 === popperWidth % 2;
    var bothOddWidth = referenceWidth % 2 === 1 && popperWidth % 2 === 1;

    var horizontalToInteger = !shouldRound ? noRound : isVertical || isVariation || sameWidthParity ? round : floor;
    var verticalToInteger = !shouldRound ? noRound : round;

    return {
      left: horizontalToInteger(bothOddWidth && !isVariation && shouldRound ? popper.left - 1 : popper.left),
      top: verticalToInteger(popper.top),
      bottom: verticalToInteger(popper.bottom),
      right: horizontalToInteger(popper.right)
    };
  }

  var isFirefox = isBrowser && /Firefox/i.test(navigator.userAgent);

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function computeStyle(data, options) {
    var x = options.x,
        y = options.y;
    var popper = data.offsets.popper;

    // Remove this legacy support in Popper.js v2

    var legacyGpuAccelerationOption = find(data.instance.modifiers, function (modifier) {
      return modifier.name === 'applyStyle';
    }).gpuAcceleration;
    if (legacyGpuAccelerationOption !== undefined) {
      console.warn('WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!');
    }
    var gpuAcceleration = legacyGpuAccelerationOption !== undefined ? legacyGpuAccelerationOption : options.gpuAcceleration;

    var offsetParent = getOffsetParent(data.instance.popper);
    var offsetParentRect = getBoundingClientRect(offsetParent);

    // Styles
    var styles = {
      position: popper.position
    };

    var offsets = getRoundedOffsets(data, window.devicePixelRatio < 2 || !isFirefox);

    var sideA = x === 'bottom' ? 'top' : 'bottom';
    var sideB = y === 'right' ? 'left' : 'right';

    // if gpuAcceleration is set to `true` and transform is supported,
    //  we use `translate3d` to apply the position to the popper we
    // automatically use the supported prefixed version if needed
    var prefixedProperty = getSupportedPropertyName('transform');

    // now, let's make a step back and look at this code closely (wtf?)
    // If the content of the popper grows once it's been positioned, it
    // may happen that the popper gets misplaced because of the new content
    // overflowing its reference element
    // To avoid this problem, we provide two options (x and y), which allow
    // the consumer to define the offset origin.
    // If we position a popper on top of a reference element, we can set
    // `x` to `top` to make the popper grow towards its top instead of
    // its bottom.
    var left = void 0,
        top = void 0;
    if (sideA === 'bottom') {
      // when offsetParent is <html> the positioning is relative to the bottom of the screen (excluding the scrollbar)
      // and not the bottom of the html element
      if (offsetParent.nodeName === 'HTML') {
        top = -offsetParent.clientHeight + offsets.bottom;
      } else {
        top = -offsetParentRect.height + offsets.bottom;
      }
    } else {
      top = offsets.top;
    }
    if (sideB === 'right') {
      if (offsetParent.nodeName === 'HTML') {
        left = -offsetParent.clientWidth + offsets.right;
      } else {
        left = -offsetParentRect.width + offsets.right;
      }
    } else {
      left = offsets.left;
    }
    if (gpuAcceleration && prefixedProperty) {
      styles[prefixedProperty] = 'translate3d(' + left + 'px, ' + top + 'px, 0)';
      styles[sideA] = 0;
      styles[sideB] = 0;
      styles.willChange = 'transform';
    } else {
      // othwerise, we use the standard `top`, `left`, `bottom` and `right` properties
      var invertTop = sideA === 'bottom' ? -1 : 1;
      var invertLeft = sideB === 'right' ? -1 : 1;
      styles[sideA] = top * invertTop;
      styles[sideB] = left * invertLeft;
      styles.willChange = sideA + ', ' + sideB;
    }

    // Attributes
    var attributes = {
      'x-placement': data.placement
    };

    // Update `data` attributes, styles and arrowStyles
    data.attributes = _extends$1({}, attributes, data.attributes);
    data.styles = _extends$1({}, styles, data.styles);
    data.arrowStyles = _extends$1({}, data.offsets.arrow, data.arrowStyles);

    return data;
  }

  /**
   * Helper used to know if the given modifier depends from another one.<br />
   * It checks if the needed modifier is listed and enabled.
   * @method
   * @memberof Popper.Utils
   * @param {Array} modifiers - list of modifiers
   * @param {String} requestingName - name of requesting modifier
   * @param {String} requestedName - name of requested modifier
   * @returns {Boolean}
   */
  function isModifierRequired(modifiers, requestingName, requestedName) {
    var requesting = find(modifiers, function (_ref) {
      var name = _ref.name;
      return name === requestingName;
    });

    var isRequired = !!requesting && modifiers.some(function (modifier) {
      return modifier.name === requestedName && modifier.enabled && modifier.order < requesting.order;
    });

    if (!isRequired) {
      var _requesting = '`' + requestingName + '`';
      var requested = '`' + requestedName + '`';
      console.warn(requested + ' modifier is required by ' + _requesting + ' modifier in order to work, be sure to include it before ' + _requesting + '!');
    }
    return isRequired;
  }

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function arrow(data, options) {
    var _data$offsets$arrow;

    // arrow depends on keepTogether in order to work
    if (!isModifierRequired(data.instance.modifiers, 'arrow', 'keepTogether')) {
      return data;
    }

    var arrowElement = options.element;

    // if arrowElement is a string, suppose it's a CSS selector
    if (typeof arrowElement === 'string') {
      arrowElement = data.instance.popper.querySelector(arrowElement);

      // if arrowElement is not found, don't run the modifier
      if (!arrowElement) {
        return data;
      }
    } else {
      // if the arrowElement isn't a query selector we must check that the
      // provided DOM node is child of its popper node
      if (!data.instance.popper.contains(arrowElement)) {
        console.warn('WARNING: `arrow.element` must be child of its popper element!');
        return data;
      }
    }

    var placement = data.placement.split('-')[0];
    var _data$offsets = data.offsets,
        popper = _data$offsets.popper,
        reference = _data$offsets.reference;

    var isVertical = ['left', 'right'].indexOf(placement) !== -1;

    var len = isVertical ? 'height' : 'width';
    var sideCapitalized = isVertical ? 'Top' : 'Left';
    var side = sideCapitalized.toLowerCase();
    var altSide = isVertical ? 'left' : 'top';
    var opSide = isVertical ? 'bottom' : 'right';
    var arrowElementSize = getOuterSizes(arrowElement)[len];

    //
    // extends keepTogether behavior making sure the popper and its
    // reference have enough pixels in conjunction
    //

    // top/left side
    if (reference[opSide] - arrowElementSize < popper[side]) {
      data.offsets.popper[side] -= popper[side] - (reference[opSide] - arrowElementSize);
    }
    // bottom/right side
    if (reference[side] + arrowElementSize > popper[opSide]) {
      data.offsets.popper[side] += reference[side] + arrowElementSize - popper[opSide];
    }
    data.offsets.popper = getClientRect(data.offsets.popper);

    // compute center of the popper
    var center = reference[side] + reference[len] / 2 - arrowElementSize / 2;

    // Compute the sideValue using the updated popper offsets
    // take popper margin in account because we don't have this info available
    var css = getStyleComputedProperty(data.instance.popper);
    var popperMarginSide = parseFloat(css['margin' + sideCapitalized]);
    var popperBorderSide = parseFloat(css['border' + sideCapitalized + 'Width']);
    var sideValue = center - data.offsets.popper[side] - popperMarginSide - popperBorderSide;

    // prevent arrowElement from being placed not contiguously to its popper
    sideValue = Math.max(Math.min(popper[len] - arrowElementSize, sideValue), 0);

    data.arrowElement = arrowElement;
    data.offsets.arrow = (_data$offsets$arrow = {}, defineProperty(_data$offsets$arrow, side, Math.round(sideValue)), defineProperty(_data$offsets$arrow, altSide, ''), _data$offsets$arrow);

    return data;
  }

  /**
   * Get the opposite placement variation of the given one
   * @method
   * @memberof Popper.Utils
   * @argument {String} placement variation
   * @returns {String} flipped placement variation
   */
  function getOppositeVariation(variation) {
    if (variation === 'end') {
      return 'start';
    } else if (variation === 'start') {
      return 'end';
    }
    return variation;
  }

  /**
   * List of accepted placements to use as values of the `placement` option.<br />
   * Valid placements are:
   * - `auto`
   * - `top`
   * - `right`
   * - `bottom`
   * - `left`
   *
   * Each placement can have a variation from this list:
   * - `-start`
   * - `-end`
   *
   * Variations are interpreted easily if you think of them as the left to right
   * written languages. Horizontally (`top` and `bottom`), `start` is left and `end`
   * is right.<br />
   * Vertically (`left` and `right`), `start` is top and `end` is bottom.
   *
   * Some valid examples are:
   * - `top-end` (on top of reference, right aligned)
   * - `right-start` (on right of reference, top aligned)
   * - `bottom` (on bottom, centered)
   * - `auto-end` (on the side with more space available, alignment depends by placement)
   *
   * @static
   * @type {Array}
   * @enum {String}
   * @readonly
   * @method placements
   * @memberof Popper
   */
  var placements = ['auto-start', 'auto', 'auto-end', 'top-start', 'top', 'top-end', 'right-start', 'right', 'right-end', 'bottom-end', 'bottom', 'bottom-start', 'left-end', 'left', 'left-start'];

  // Get rid of `auto` `auto-start` and `auto-end`
  var validPlacements = placements.slice(3);

  /**
   * Given an initial placement, returns all the subsequent placements
   * clockwise (or counter-clockwise).
   *
   * @method
   * @memberof Popper.Utils
   * @argument {String} placement - A valid placement (it accepts variations)
   * @argument {Boolean} counter - Set to true to walk the placements counterclockwise
   * @returns {Array} placements including their variations
   */
  function clockwise(placement) {
    var counter = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

    var index = validPlacements.indexOf(placement);
    var arr = validPlacements.slice(index + 1).concat(validPlacements.slice(0, index));
    return counter ? arr.reverse() : arr;
  }

  var BEHAVIORS = {
    FLIP: 'flip',
    CLOCKWISE: 'clockwise',
    COUNTERCLOCKWISE: 'counterclockwise'
  };

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function flip(data, options) {
    // if `inner` modifier is enabled, we can't use the `flip` modifier
    if (isModifierEnabled(data.instance.modifiers, 'inner')) {
      return data;
    }

    if (data.flipped && data.placement === data.originalPlacement) {
      // seems like flip is trying to loop, probably there's not enough space on any of the flippable sides
      return data;
    }

    var boundaries = getBoundaries(data.instance.popper, data.instance.reference, options.padding, options.boundariesElement, data.positionFixed);

    var placement = data.placement.split('-')[0];
    var placementOpposite = getOppositePlacement(placement);
    var variation = data.placement.split('-')[1] || '';

    var flipOrder = [];

    switch (options.behavior) {
      case BEHAVIORS.FLIP:
        flipOrder = [placement, placementOpposite];
        break;
      case BEHAVIORS.CLOCKWISE:
        flipOrder = clockwise(placement);
        break;
      case BEHAVIORS.COUNTERCLOCKWISE:
        flipOrder = clockwise(placement, true);
        break;
      default:
        flipOrder = options.behavior;
    }

    flipOrder.forEach(function (step, index) {
      if (placement !== step || flipOrder.length === index + 1) {
        return data;
      }

      placement = data.placement.split('-')[0];
      placementOpposite = getOppositePlacement(placement);

      var popperOffsets = data.offsets.popper;
      var refOffsets = data.offsets.reference;

      // using floor because the reference offsets may contain decimals we are not going to consider here
      var floor = Math.floor;
      var overlapsRef = placement === 'left' && floor(popperOffsets.right) > floor(refOffsets.left) || placement === 'right' && floor(popperOffsets.left) < floor(refOffsets.right) || placement === 'top' && floor(popperOffsets.bottom) > floor(refOffsets.top) || placement === 'bottom' && floor(popperOffsets.top) < floor(refOffsets.bottom);

      var overflowsLeft = floor(popperOffsets.left) < floor(boundaries.left);
      var overflowsRight = floor(popperOffsets.right) > floor(boundaries.right);
      var overflowsTop = floor(popperOffsets.top) < floor(boundaries.top);
      var overflowsBottom = floor(popperOffsets.bottom) > floor(boundaries.bottom);

      var overflowsBoundaries = placement === 'left' && overflowsLeft || placement === 'right' && overflowsRight || placement === 'top' && overflowsTop || placement === 'bottom' && overflowsBottom;

      // flip the variation if required
      var isVertical = ['top', 'bottom'].indexOf(placement) !== -1;

      // flips variation if reference element overflows boundaries
      var flippedVariationByRef = !!options.flipVariations && (isVertical && variation === 'start' && overflowsLeft || isVertical && variation === 'end' && overflowsRight || !isVertical && variation === 'start' && overflowsTop || !isVertical && variation === 'end' && overflowsBottom);

      // flips variation if popper content overflows boundaries
      var flippedVariationByContent = !!options.flipVariationsByContent && (isVertical && variation === 'start' && overflowsRight || isVertical && variation === 'end' && overflowsLeft || !isVertical && variation === 'start' && overflowsBottom || !isVertical && variation === 'end' && overflowsTop);

      var flippedVariation = flippedVariationByRef || flippedVariationByContent;

      if (overlapsRef || overflowsBoundaries || flippedVariation) {
        // this boolean to detect any flip loop
        data.flipped = true;

        if (overlapsRef || overflowsBoundaries) {
          placement = flipOrder[index + 1];
        }

        if (flippedVariation) {
          variation = getOppositeVariation(variation);
        }

        data.placement = placement + (variation ? '-' + variation : '');

        // this object contains `position`, we want to preserve it along with
        // any additional property we may add in the future
        data.offsets.popper = _extends$1({}, data.offsets.popper, getPopperOffsets(data.instance.popper, data.offsets.reference, data.placement));

        data = runModifiers(data.instance.modifiers, data, 'flip');
      }
    });
    return data;
  }

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function keepTogether(data) {
    var _data$offsets = data.offsets,
        popper = _data$offsets.popper,
        reference = _data$offsets.reference;

    var placement = data.placement.split('-')[0];
    var floor = Math.floor;
    var isVertical = ['top', 'bottom'].indexOf(placement) !== -1;
    var side = isVertical ? 'right' : 'bottom';
    var opSide = isVertical ? 'left' : 'top';
    var measurement = isVertical ? 'width' : 'height';

    if (popper[side] < floor(reference[opSide])) {
      data.offsets.popper[opSide] = floor(reference[opSide]) - popper[measurement];
    }
    if (popper[opSide] > floor(reference[side])) {
      data.offsets.popper[opSide] = floor(reference[side]);
    }

    return data;
  }

  /**
   * Converts a string containing value + unit into a px value number
   * @function
   * @memberof {modifiers~offset}
   * @private
   * @argument {String} str - Value + unit string
   * @argument {String} measurement - `height` or `width`
   * @argument {Object} popperOffsets
   * @argument {Object} referenceOffsets
   * @returns {Number|String}
   * Value in pixels, or original string if no values were extracted
   */
  function toValue(str, measurement, popperOffsets, referenceOffsets) {
    // separate value from unit
    var split = str.match(/((?:\-|\+)?\d*\.?\d*)(.*)/);
    var value = +split[1];
    var unit = split[2];

    // If it's not a number it's an operator, I guess
    if (!value) {
      return str;
    }

    if (unit.indexOf('%') === 0) {
      var element = void 0;
      switch (unit) {
        case '%p':
          element = popperOffsets;
          break;
        case '%':
        case '%r':
        default:
          element = referenceOffsets;
      }

      var rect = getClientRect(element);
      return rect[measurement] / 100 * value;
    } else if (unit === 'vh' || unit === 'vw') {
      // if is a vh or vw, we calculate the size based on the viewport
      var size = void 0;
      if (unit === 'vh') {
        size = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
      } else {
        size = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
      }
      return size / 100 * value;
    } else {
      // if is an explicit pixel unit, we get rid of the unit and keep the value
      // if is an implicit unit, it's px, and we return just the value
      return value;
    }
  }

  /**
   * Parse an `offset` string to extrapolate `x` and `y` numeric offsets.
   * @function
   * @memberof {modifiers~offset}
   * @private
   * @argument {String} offset
   * @argument {Object} popperOffsets
   * @argument {Object} referenceOffsets
   * @argument {String} basePlacement
   * @returns {Array} a two cells array with x and y offsets in numbers
   */
  function parseOffset(offset, popperOffsets, referenceOffsets, basePlacement) {
    var offsets = [0, 0];

    // Use height if placement is left or right and index is 0 otherwise use width
    // in this way the first offset will use an axis and the second one
    // will use the other one
    var useHeight = ['right', 'left'].indexOf(basePlacement) !== -1;

    // Split the offset string to obtain a list of values and operands
    // The regex addresses values with the plus or minus sign in front (+10, -20, etc)
    var fragments = offset.split(/(\+|\-)/).map(function (frag) {
      return frag.trim();
    });

    // Detect if the offset string contains a pair of values or a single one
    // they could be separated by comma or space
    var divider = fragments.indexOf(find(fragments, function (frag) {
      return frag.search(/,|\s/) !== -1;
    }));

    if (fragments[divider] && fragments[divider].indexOf(',') === -1) {
      console.warn('Offsets separated by white space(s) are deprecated, use a comma (,) instead.');
    }

    // If divider is found, we divide the list of values and operands to divide
    // them by ofset X and Y.
    var splitRegex = /\s*,\s*|\s+/;
    var ops = divider !== -1 ? [fragments.slice(0, divider).concat([fragments[divider].split(splitRegex)[0]]), [fragments[divider].split(splitRegex)[1]].concat(fragments.slice(divider + 1))] : [fragments];

    // Convert the values with units to absolute pixels to allow our computations
    ops = ops.map(function (op, index) {
      // Most of the units rely on the orientation of the popper
      var measurement = (index === 1 ? !useHeight : useHeight) ? 'height' : 'width';
      var mergeWithPrevious = false;
      return op
      // This aggregates any `+` or `-` sign that aren't considered operators
      // e.g.: 10 + +5 => [10, +, +5]
      .reduce(function (a, b) {
        if (a[a.length - 1] === '' && ['+', '-'].indexOf(b) !== -1) {
          a[a.length - 1] = b;
          mergeWithPrevious = true;
          return a;
        } else if (mergeWithPrevious) {
          a[a.length - 1] += b;
          mergeWithPrevious = false;
          return a;
        } else {
          return a.concat(b);
        }
      }, [])
      // Here we convert the string values into number values (in px)
      .map(function (str) {
        return toValue(str, measurement, popperOffsets, referenceOffsets);
      });
    });

    // Loop trough the offsets arrays and execute the operations
    ops.forEach(function (op, index) {
      op.forEach(function (frag, index2) {
        if (isNumeric(frag)) {
          offsets[index] += frag * (op[index2 - 1] === '-' ? -1 : 1);
        }
      });
    });
    return offsets;
  }

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @argument {Number|String} options.offset=0
   * The offset value as described in the modifier description
   * @returns {Object} The data object, properly modified
   */
  function offset(data, _ref) {
    var offset = _ref.offset;
    var placement = data.placement,
        _data$offsets = data.offsets,
        popper = _data$offsets.popper,
        reference = _data$offsets.reference;

    var basePlacement = placement.split('-')[0];

    var offsets = void 0;
    if (isNumeric(+offset)) {
      offsets = [+offset, 0];
    } else {
      offsets = parseOffset(offset, popper, reference, basePlacement);
    }

    if (basePlacement === 'left') {
      popper.top += offsets[0];
      popper.left -= offsets[1];
    } else if (basePlacement === 'right') {
      popper.top += offsets[0];
      popper.left += offsets[1];
    } else if (basePlacement === 'top') {
      popper.left += offsets[0];
      popper.top -= offsets[1];
    } else if (basePlacement === 'bottom') {
      popper.left += offsets[0];
      popper.top += offsets[1];
    }

    data.popper = popper;
    return data;
  }

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function preventOverflow(data, options) {
    var boundariesElement = options.boundariesElement || getOffsetParent(data.instance.popper);

    // If offsetParent is the reference element, we really want to
    // go one step up and use the next offsetParent as reference to
    // avoid to make this modifier completely useless and look like broken
    if (data.instance.reference === boundariesElement) {
      boundariesElement = getOffsetParent(boundariesElement);
    }

    // NOTE: DOM access here
    // resets the popper's position so that the document size can be calculated excluding
    // the size of the popper element itself
    var transformProp = getSupportedPropertyName('transform');
    var popperStyles = data.instance.popper.style; // assignment to help minification
    var top = popperStyles.top,
        left = popperStyles.left,
        transform = popperStyles[transformProp];

    popperStyles.top = '';
    popperStyles.left = '';
    popperStyles[transformProp] = '';

    var boundaries = getBoundaries(data.instance.popper, data.instance.reference, options.padding, boundariesElement, data.positionFixed);

    // NOTE: DOM access here
    // restores the original style properties after the offsets have been computed
    popperStyles.top = top;
    popperStyles.left = left;
    popperStyles[transformProp] = transform;

    options.boundaries = boundaries;

    var order = options.priority;
    var popper = data.offsets.popper;

    var check = {
      primary: function primary(placement) {
        var value = popper[placement];
        if (popper[placement] < boundaries[placement] && !options.escapeWithReference) {
          value = Math.max(popper[placement], boundaries[placement]);
        }
        return defineProperty({}, placement, value);
      },
      secondary: function secondary(placement) {
        var mainSide = placement === 'right' ? 'left' : 'top';
        var value = popper[mainSide];
        if (popper[placement] > boundaries[placement] && !options.escapeWithReference) {
          value = Math.min(popper[mainSide], boundaries[placement] - (placement === 'right' ? popper.width : popper.height));
        }
        return defineProperty({}, mainSide, value);
      }
    };

    order.forEach(function (placement) {
      var side = ['left', 'top'].indexOf(placement) !== -1 ? 'primary' : 'secondary';
      popper = _extends$1({}, popper, check[side](placement));
    });

    data.offsets.popper = popper;

    return data;
  }

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function shift(data) {
    var placement = data.placement;
    var basePlacement = placement.split('-')[0];
    var shiftvariation = placement.split('-')[1];

    // if shift shiftvariation is specified, run the modifier
    if (shiftvariation) {
      var _data$offsets = data.offsets,
          reference = _data$offsets.reference,
          popper = _data$offsets.popper;

      var isVertical = ['bottom', 'top'].indexOf(basePlacement) !== -1;
      var side = isVertical ? 'left' : 'top';
      var measurement = isVertical ? 'width' : 'height';

      var shiftOffsets = {
        start: defineProperty({}, side, reference[side]),
        end: defineProperty({}, side, reference[side] + reference[measurement] - popper[measurement])
      };

      data.offsets.popper = _extends$1({}, popper, shiftOffsets[shiftvariation]);
    }

    return data;
  }

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by update method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function hide(data) {
    if (!isModifierRequired(data.instance.modifiers, 'hide', 'preventOverflow')) {
      return data;
    }

    var refRect = data.offsets.reference;
    var bound = find(data.instance.modifiers, function (modifier) {
      return modifier.name === 'preventOverflow';
    }).boundaries;

    if (refRect.bottom < bound.top || refRect.left > bound.right || refRect.top > bound.bottom || refRect.right < bound.left) {
      // Avoid unnecessary DOM access if visibility hasn't changed
      if (data.hide === true) {
        return data;
      }

      data.hide = true;
      data.attributes['x-out-of-boundaries'] = '';
    } else {
      // Avoid unnecessary DOM access if visibility hasn't changed
      if (data.hide === false) {
        return data;
      }

      data.hide = false;
      data.attributes['x-out-of-boundaries'] = false;
    }

    return data;
  }

  /**
   * @function
   * @memberof Modifiers
   * @argument {Object} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {Object} The data object, properly modified
   */
  function inner(data) {
    var placement = data.placement;
    var basePlacement = placement.split('-')[0];
    var _data$offsets = data.offsets,
        popper = _data$offsets.popper,
        reference = _data$offsets.reference;

    var isHoriz = ['left', 'right'].indexOf(basePlacement) !== -1;

    var subtractLength = ['top', 'left'].indexOf(basePlacement) === -1;

    popper[isHoriz ? 'left' : 'top'] = reference[basePlacement] - (subtractLength ? popper[isHoriz ? 'width' : 'height'] : 0);

    data.placement = getOppositePlacement(placement);
    data.offsets.popper = getClientRect(popper);

    return data;
  }

  /**
   * Modifier function, each modifier can have a function of this type assigned
   * to its `fn` property.<br />
   * These functions will be called on each update, this means that you must
   * make sure they are performant enough to avoid performance bottlenecks.
   *
   * @function ModifierFn
   * @argument {dataObject} data - The data object generated by `update` method
   * @argument {Object} options - Modifiers configuration and options
   * @returns {dataObject} The data object, properly modified
   */

  /**
   * Modifiers are plugins used to alter the behavior of your poppers.<br />
   * Popper.js uses a set of 9 modifiers to provide all the basic functionalities
   * needed by the library.
   *
   * Usually you don't want to override the `order`, `fn` and `onLoad` props.
   * All the other properties are configurations that could be tweaked.
   * @namespace modifiers
   */
  var modifiers = {
    /**
     * Modifier used to shift the popper on the start or end of its reference
     * element.<br />
     * It will read the variation of the `placement` property.<br />
     * It can be one either `-end` or `-start`.
     * @memberof modifiers
     * @inner
     */
    shift: {
      /** @prop {number} order=100 - Index used to define the order of execution */
      order: 100,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: shift
    },

    /**
     * The `offset` modifier can shift your popper on both its axis.
     *
     * It accepts the following units:
     * - `px` or unit-less, interpreted as pixels
     * - `%` or `%r`, percentage relative to the length of the reference element
     * - `%p`, percentage relative to the length of the popper element
     * - `vw`, CSS viewport width unit
     * - `vh`, CSS viewport height unit
     *
     * For length is intended the main axis relative to the placement of the popper.<br />
     * This means that if the placement is `top` or `bottom`, the length will be the
     * `width`. In case of `left` or `right`, it will be the `height`.
     *
     * You can provide a single value (as `Number` or `String`), or a pair of values
     * as `String` divided by a comma or one (or more) white spaces.<br />
     * The latter is a deprecated method because it leads to confusion and will be
     * removed in v2.<br />
     * Additionally, it accepts additions and subtractions between different units.
     * Note that multiplications and divisions aren't supported.
     *
     * Valid examples are:
     * ```
     * 10
     * '10%'
     * '10, 10'
     * '10%, 10'
     * '10 + 10%'
     * '10 - 5vh + 3%'
     * '-10px + 5vh, 5px - 6%'
     * ```
     * > **NB**: If you desire to apply offsets to your poppers in a way that may make them overlap
     * > with their reference element, unfortunately, you will have to disable the `flip` modifier.
     * > You can read more on this at this [issue](https://github.com/FezVrasta/popper.js/issues/373).
     *
     * @memberof modifiers
     * @inner
     */
    offset: {
      /** @prop {number} order=200 - Index used to define the order of execution */
      order: 200,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: offset,
      /** @prop {Number|String} offset=0
       * The offset value as described in the modifier description
       */
      offset: 0
    },

    /**
     * Modifier used to prevent the popper from being positioned outside the boundary.
     *
     * A scenario exists where the reference itself is not within the boundaries.<br />
     * We can say it has "escaped the boundaries" — or just "escaped".<br />
     * In this case we need to decide whether the popper should either:
     *
     * - detach from the reference and remain "trapped" in the boundaries, or
     * - if it should ignore the boundary and "escape with its reference"
     *
     * When `escapeWithReference` is set to`true` and reference is completely
     * outside its boundaries, the popper will overflow (or completely leave)
     * the boundaries in order to remain attached to the edge of the reference.
     *
     * @memberof modifiers
     * @inner
     */
    preventOverflow: {
      /** @prop {number} order=300 - Index used to define the order of execution */
      order: 300,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: preventOverflow,
      /**
       * @prop {Array} [priority=['left','right','top','bottom']]
       * Popper will try to prevent overflow following these priorities by default,
       * then, it could overflow on the left and on top of the `boundariesElement`
       */
      priority: ['left', 'right', 'top', 'bottom'],
      /**
       * @prop {number} padding=5
       * Amount of pixel used to define a minimum distance between the boundaries
       * and the popper. This makes sure the popper always has a little padding
       * between the edges of its container
       */
      padding: 5,
      /**
       * @prop {String|HTMLElement} boundariesElement='scrollParent'
       * Boundaries used by the modifier. Can be `scrollParent`, `window`,
       * `viewport` or any DOM element.
       */
      boundariesElement: 'scrollParent'
    },

    /**
     * Modifier used to make sure the reference and its popper stay near each other
     * without leaving any gap between the two. Especially useful when the arrow is
     * enabled and you want to ensure that it points to its reference element.
     * It cares only about the first axis. You can still have poppers with margin
     * between the popper and its reference element.
     * @memberof modifiers
     * @inner
     */
    keepTogether: {
      /** @prop {number} order=400 - Index used to define the order of execution */
      order: 400,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: keepTogether
    },

    /**
     * This modifier is used to move the `arrowElement` of the popper to make
     * sure it is positioned between the reference element and its popper element.
     * It will read the outer size of the `arrowElement` node to detect how many
     * pixels of conjunction are needed.
     *
     * It has no effect if no `arrowElement` is provided.
     * @memberof modifiers
     * @inner
     */
    arrow: {
      /** @prop {number} order=500 - Index used to define the order of execution */
      order: 500,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: arrow,
      /** @prop {String|HTMLElement} element='[x-arrow]' - Selector or node used as arrow */
      element: '[x-arrow]'
    },

    /**
     * Modifier used to flip the popper's placement when it starts to overlap its
     * reference element.
     *
     * Requires the `preventOverflow` modifier before it in order to work.
     *
     * **NOTE:** this modifier will interrupt the current update cycle and will
     * restart it if it detects the need to flip the placement.
     * @memberof modifiers
     * @inner
     */
    flip: {
      /** @prop {number} order=600 - Index used to define the order of execution */
      order: 600,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: flip,
      /**
       * @prop {String|Array} behavior='flip'
       * The behavior used to change the popper's placement. It can be one of
       * `flip`, `clockwise`, `counterclockwise` or an array with a list of valid
       * placements (with optional variations)
       */
      behavior: 'flip',
      /**
       * @prop {number} padding=5
       * The popper will flip if it hits the edges of the `boundariesElement`
       */
      padding: 5,
      /**
       * @prop {String|HTMLElement} boundariesElement='viewport'
       * The element which will define the boundaries of the popper position.
       * The popper will never be placed outside of the defined boundaries
       * (except if `keepTogether` is enabled)
       */
      boundariesElement: 'viewport',
      /**
       * @prop {Boolean} flipVariations=false
       * The popper will switch placement variation between `-start` and `-end` when
       * the reference element overlaps its boundaries.
       *
       * The original placement should have a set variation.
       */
      flipVariations: false,
      /**
       * @prop {Boolean} flipVariationsByContent=false
       * The popper will switch placement variation between `-start` and `-end` when
       * the popper element overlaps its reference boundaries.
       *
       * The original placement should have a set variation.
       */
      flipVariationsByContent: false
    },

    /**
     * Modifier used to make the popper flow toward the inner of the reference element.
     * By default, when this modifier is disabled, the popper will be placed outside
     * the reference element.
     * @memberof modifiers
     * @inner
     */
    inner: {
      /** @prop {number} order=700 - Index used to define the order of execution */
      order: 700,
      /** @prop {Boolean} enabled=false - Whether the modifier is enabled or not */
      enabled: false,
      /** @prop {ModifierFn} */
      fn: inner
    },

    /**
     * Modifier used to hide the popper when its reference element is outside of the
     * popper boundaries. It will set a `x-out-of-boundaries` attribute which can
     * be used to hide with a CSS selector the popper when its reference is
     * out of boundaries.
     *
     * Requires the `preventOverflow` modifier before it in order to work.
     * @memberof modifiers
     * @inner
     */
    hide: {
      /** @prop {number} order=800 - Index used to define the order of execution */
      order: 800,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: hide
    },

    /**
     * Computes the style that will be applied to the popper element to gets
     * properly positioned.
     *
     * Note that this modifier will not touch the DOM, it just prepares the styles
     * so that `applyStyle` modifier can apply it. This separation is useful
     * in case you need to replace `applyStyle` with a custom implementation.
     *
     * This modifier has `850` as `order` value to maintain backward compatibility
     * with previous versions of Popper.js. Expect the modifiers ordering method
     * to change in future major versions of the library.
     *
     * @memberof modifiers
     * @inner
     */
    computeStyle: {
      /** @prop {number} order=850 - Index used to define the order of execution */
      order: 850,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: computeStyle,
      /**
       * @prop {Boolean} gpuAcceleration=true
       * If true, it uses the CSS 3D transformation to position the popper.
       * Otherwise, it will use the `top` and `left` properties
       */
      gpuAcceleration: true,
      /**
       * @prop {string} [x='bottom']
       * Where to anchor the X axis (`bottom` or `top`). AKA X offset origin.
       * Change this if your popper should grow in a direction different from `bottom`
       */
      x: 'bottom',
      /**
       * @prop {string} [x='left']
       * Where to anchor the Y axis (`left` or `right`). AKA Y offset origin.
       * Change this if your popper should grow in a direction different from `right`
       */
      y: 'right'
    },

    /**
     * Applies the computed styles to the popper element.
     *
     * All the DOM manipulations are limited to this modifier. This is useful in case
     * you want to integrate Popper.js inside a framework or view library and you
     * want to delegate all the DOM manipulations to it.
     *
     * Note that if you disable this modifier, you must make sure the popper element
     * has its position set to `absolute` before Popper.js can do its work!
     *
     * Just disable this modifier and define your own to achieve the desired effect.
     *
     * @memberof modifiers
     * @inner
     */
    applyStyle: {
      /** @prop {number} order=900 - Index used to define the order of execution */
      order: 900,
      /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */
      enabled: true,
      /** @prop {ModifierFn} */
      fn: applyStyle,
      /** @prop {Function} */
      onLoad: applyStyleOnLoad,
      /**
       * @deprecated since version 1.10.0, the property moved to `computeStyle` modifier
       * @prop {Boolean} gpuAcceleration=true
       * If true, it uses the CSS 3D transformation to position the popper.
       * Otherwise, it will use the `top` and `left` properties
       */
      gpuAcceleration: undefined
    }
  };

  /**
   * The `dataObject` is an object containing all the information used by Popper.js.
   * This object is passed to modifiers and to the `onCreate` and `onUpdate` callbacks.
   * @name dataObject
   * @property {Object} data.instance The Popper.js instance
   * @property {String} data.placement Placement applied to popper
   * @property {String} data.originalPlacement Placement originally defined on init
   * @property {Boolean} data.flipped True if popper has been flipped by flip modifier
   * @property {Boolean} data.hide True if the reference element is out of boundaries, useful to know when to hide the popper
   * @property {HTMLElement} data.arrowElement Node used as arrow by arrow modifier
   * @property {Object} data.styles Any CSS property defined here will be applied to the popper. It expects the JavaScript nomenclature (eg. `marginBottom`)
   * @property {Object} data.arrowStyles Any CSS property defined here will be applied to the popper arrow. It expects the JavaScript nomenclature (eg. `marginBottom`)
   * @property {Object} data.boundaries Offsets of the popper boundaries
   * @property {Object} data.offsets The measurements of popper, reference and arrow elements
   * @property {Object} data.offsets.popper `top`, `left`, `width`, `height` values
   * @property {Object} data.offsets.reference `top`, `left`, `width`, `height` values
   * @property {Object} data.offsets.arrow] `top` and `left` offsets, only one of them will be different from 0
   */

  /**
   * Default options provided to Popper.js constructor.<br />
   * These can be overridden using the `options` argument of Popper.js.<br />
   * To override an option, simply pass an object with the same
   * structure of the `options` object, as the 3rd argument. For example:
   * ```
   * new Popper(ref, pop, {
   *   modifiers: {
   *     preventOverflow: { enabled: false }
   *   }
   * })
   * ```
   * @type {Object}
   * @static
   * @memberof Popper
   */
  var Defaults = {
    /**
     * Popper's placement.
     * @prop {Popper.placements} placement='bottom'
     */
    placement: 'bottom',

    /**
     * Set this to true if you want popper to position it self in 'fixed' mode
     * @prop {Boolean} positionFixed=false
     */
    positionFixed: false,

    /**
     * Whether events (resize, scroll) are initially enabled.
     * @prop {Boolean} eventsEnabled=true
     */
    eventsEnabled: true,

    /**
     * Set to true if you want to automatically remove the popper when
     * you call the `destroy` method.
     * @prop {Boolean} removeOnDestroy=false
     */
    removeOnDestroy: false,

    /**
     * Callback called when the popper is created.<br />
     * By default, it is set to no-op.<br />
     * Access Popper.js instance with `data.instance`.
     * @prop {onCreate}
     */
    onCreate: function onCreate() {},

    /**
     * Callback called when the popper is updated. This callback is not called
     * on the initialization/creation of the popper, but only on subsequent
     * updates.<br />
     * By default, it is set to no-op.<br />
     * Access Popper.js instance with `data.instance`.
     * @prop {onUpdate}
     */
    onUpdate: function onUpdate() {},

    /**
     * List of modifiers used to modify the offsets before they are applied to the popper.
     * They provide most of the functionalities of Popper.js.
     * @prop {modifiers}
     */
    modifiers: modifiers
  };

  /**
   * @callback onCreate
   * @param {dataObject} data
   */

  /**
   * @callback onUpdate
   * @param {dataObject} data
   */

  // Utils
  // Methods
  var Popper = function () {
    /**
     * Creates a new Popper.js instance.
     * @class Popper
     * @param {Element|referenceObject} reference - The reference element used to position the popper
     * @param {Element} popper - The HTML / XML element used as the popper
     * @param {Object} options - Your custom options to override the ones defined in [Defaults](#defaults)
     * @return {Object} instance - The generated Popper.js instance
     */
    function Popper(reference, popper) {
      var _this = this;

      var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};
      classCallCheck(this, Popper);

      this.scheduleUpdate = function () {
        return requestAnimationFrame(_this.update);
      };

      // make update() debounced, so that it only runs at most once-per-tick
      this.update = debounce(this.update.bind(this));

      // with {} we create a new object with the options inside it
      this.options = _extends$1({}, Popper.Defaults, options);

      // init state
      this.state = {
        isDestroyed: false,
        isCreated: false,
        scrollParents: []
      };

      // get reference and popper elements (allow jQuery wrappers)
      this.reference = reference && reference.jquery ? reference[0] : reference;
      this.popper = popper && popper.jquery ? popper[0] : popper;

      // Deep merge modifiers options
      this.options.modifiers = {};
      Object.keys(_extends$1({}, Popper.Defaults.modifiers, options.modifiers)).forEach(function (name) {
        _this.options.modifiers[name] = _extends$1({}, Popper.Defaults.modifiers[name] || {}, options.modifiers ? options.modifiers[name] : {});
      });

      // Refactoring modifiers' list (Object => Array)
      this.modifiers = Object.keys(this.options.modifiers).map(function (name) {
        return _extends$1({
          name: name
        }, _this.options.modifiers[name]);
      })
      // sort the modifiers by order
      .sort(function (a, b) {
        return a.order - b.order;
      });

      // modifiers have the ability to execute arbitrary code when Popper.js get inited
      // such code is executed in the same order of its modifier
      // they could add new properties to their options configuration
      // BE AWARE: don't add options to `options.modifiers.name` but to `modifierOptions`!
      this.modifiers.forEach(function (modifierOptions) {
        if (modifierOptions.enabled && isFunction(modifierOptions.onLoad)) {
          modifierOptions.onLoad(_this.reference, _this.popper, _this.options, modifierOptions, _this.state);
        }
      });

      // fire the first update to position the popper in the right place
      this.update();

      var eventsEnabled = this.options.eventsEnabled;
      if (eventsEnabled) {
        // setup event listeners, they will take care of update the position in specific situations
        this.enableEventListeners();
      }

      this.state.eventsEnabled = eventsEnabled;
    }

    // We can't use class properties because they don't get listed in the
    // class prototype and break stuff like Sinon stubs


    createClass(Popper, [{
      key: 'update',
      value: function update$$1() {
        return update.call(this);
      }
    }, {
      key: 'destroy',
      value: function destroy$$1() {
        return destroy.call(this);
      }
    }, {
      key: 'enableEventListeners',
      value: function enableEventListeners$$1() {
        return enableEventListeners.call(this);
      }
    }, {
      key: 'disableEventListeners',
      value: function disableEventListeners$$1() {
        return disableEventListeners.call(this);
      }

      /**
       * Schedules an update. It will run on the next UI update available.
       * @method scheduleUpdate
       * @memberof Popper
       */


      /**
       * Collection of utilities useful when writing custom modifiers.
       * Starting from version 1.7, this method is available only if you
       * include `popper-utils.js` before `popper.js`.
       *
       * **DEPRECATION**: This way to access PopperUtils is deprecated
       * and will be removed in v2! Use the PopperUtils module directly instead.
       * Due to the high instability of the methods contained in Utils, we can't
       * guarantee them to follow semver. Use them at your own risk!
       * @static
       * @private
       * @type {Object}
       * @deprecated since version 1.8
       * @member Utils
       * @memberof Popper
       */

    }]);
    return Popper;
  }();

  /**
   * The `referenceObject` is an object that provides an interface compatible with Popper.js
   * and lets you use it as replacement of a real DOM node.<br />
   * You can use this method to position a popper relatively to a set of coordinates
   * in case you don't have a DOM node to use as reference.
   *
   * ```
   * new Popper(referenceObject, popperNode);
   * ```
   *
   * NB: This feature isn't supported in Internet Explorer 10.
   * @name referenceObject
   * @property {Function} data.getBoundingClientRect
   * A function that returns a set of coordinates compatible with the native `getBoundingClientRect` method.
   * @property {number} data.clientWidth
   * An ES6 getter that will return the width of the virtual reference element.
   * @property {number} data.clientHeight
   * An ES6 getter that will return the height of the virtual reference element.
   */


  Popper.Utils = (typeof window !== 'undefined' ? window : global).PopperUtils;
  Popper.placements = placements;
  Popper.Defaults = Defaults;

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$4 = 'dropdown';
  var VERSION$4 = '4.6.0';
  var DATA_KEY$4 = 'bs.dropdown';
  var EVENT_KEY$4 = "." + DATA_KEY$4;
  var DATA_API_KEY$4 = '.data-api';
  var JQUERY_NO_CONFLICT$4 = $__default['default'].fn[NAME$4];
  var ESCAPE_KEYCODE = 27; // KeyboardEvent.which value for Escape (Esc) key

  var SPACE_KEYCODE = 32; // KeyboardEvent.which value for space key

  var TAB_KEYCODE = 9; // KeyboardEvent.which value for tab key

  var ARROW_UP_KEYCODE = 38; // KeyboardEvent.which value for up arrow key

  var ARROW_DOWN_KEYCODE = 40; // KeyboardEvent.which value for down arrow key

  var RIGHT_MOUSE_BUTTON_WHICH = 3; // MouseEvent.which value for the right button (assuming a right-handed mouse)

  var REGEXP_KEYDOWN = new RegExp(ARROW_UP_KEYCODE + "|" + ARROW_DOWN_KEYCODE + "|" + ESCAPE_KEYCODE);
  var EVENT_HIDE$1 = "hide" + EVENT_KEY$4;
  var EVENT_HIDDEN$1 = "hidden" + EVENT_KEY$4;
  var EVENT_SHOW$1 = "show" + EVENT_KEY$4;
  var EVENT_SHOWN$1 = "shown" + EVENT_KEY$4;
  var EVENT_CLICK = "click" + EVENT_KEY$4;
  var EVENT_CLICK_DATA_API$4 = "click" + EVENT_KEY$4 + DATA_API_KEY$4;
  var EVENT_KEYDOWN_DATA_API = "keydown" + EVENT_KEY$4 + DATA_API_KEY$4;
  var EVENT_KEYUP_DATA_API = "keyup" + EVENT_KEY$4 + DATA_API_KEY$4;
  var CLASS_NAME_DISABLED = 'disabled';
  var CLASS_NAME_SHOW$2 = 'show';
  var CLASS_NAME_DROPUP = 'dropup';
  var CLASS_NAME_DROPRIGHT = 'dropright';
  var CLASS_NAME_DROPLEFT = 'dropleft';
  var CLASS_NAME_MENURIGHT = 'dropdown-menu-right';
  var CLASS_NAME_POSITION_STATIC = 'position-static';
  var SELECTOR_DATA_TOGGLE$2 = '[data-toggle="dropdown"]';
  var SELECTOR_FORM_CHILD = '.dropdown form';
  var SELECTOR_MENU = '.dropdown-menu';
  var SELECTOR_NAVBAR_NAV = '.navbar-nav';
  var SELECTOR_VISIBLE_ITEMS = '.dropdown-menu .dropdown-item:not(.disabled):not(:disabled)';
  var PLACEMENT_TOP = 'top-start';
  var PLACEMENT_TOPEND = 'top-end';
  var PLACEMENT_BOTTOM = 'bottom-start';
  var PLACEMENT_BOTTOMEND = 'bottom-end';
  var PLACEMENT_RIGHT = 'right-start';
  var PLACEMENT_LEFT = 'left-start';
  var Default$2 = {
    offset: 0,
    flip: true,
    boundary: 'scrollParent',
    reference: 'toggle',
    display: 'dynamic',
    popperConfig: null
  };
  var DefaultType$2 = {
    offset: '(number|string|function)',
    flip: 'boolean',
    boundary: '(string|element)',
    reference: '(string|element)',
    display: 'string',
    popperConfig: '(null|object)'
  };
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Dropdown = /*#__PURE__*/function () {
    function Dropdown(element, config) {
      this._element = element;
      this._popper = null;
      this._config = this._getConfig(config);
      this._menu = this._getMenuElement();
      this._inNavbar = this._detectNavbar();

      this._addEventListeners();
    } // Getters


    var _proto = Dropdown.prototype;

    // Public
    _proto.toggle = function toggle() {
      if (this._element.disabled || $__default['default'](this._element).hasClass(CLASS_NAME_DISABLED)) {
        return;
      }

      var isActive = $__default['default'](this._menu).hasClass(CLASS_NAME_SHOW$2);

      Dropdown._clearMenus();

      if (isActive) {
        return;
      }

      this.show(true);
    };

    _proto.show = function show(usePopper) {
      if (usePopper === void 0) {
        usePopper = false;
      }

      if (this._element.disabled || $__default['default'](this._element).hasClass(CLASS_NAME_DISABLED) || $__default['default'](this._menu).hasClass(CLASS_NAME_SHOW$2)) {
        return;
      }

      var relatedTarget = {
        relatedTarget: this._element
      };
      var showEvent = $__default['default'].Event(EVENT_SHOW$1, relatedTarget);

      var parent = Dropdown._getParentFromElement(this._element);

      $__default['default'](parent).trigger(showEvent);

      if (showEvent.isDefaultPrevented()) {
        return;
      } // Totally disable Popper for Dropdowns in Navbar


      if (!this._inNavbar && usePopper) {
        /**
         * Check for Popper dependency
         * Popper - https://popper.js.org
         */
        if (typeof Popper === 'undefined') {
          throw new TypeError('Bootstrap\'s dropdowns require Popper (https://popper.js.org)');
        }

        var referenceElement = this._element;

        if (this._config.reference === 'parent') {
          referenceElement = parent;
        } else if (Util.isElement(this._config.reference)) {
          referenceElement = this._config.reference; // Check if it's jQuery element

          if (typeof this._config.reference.jquery !== 'undefined') {
            referenceElement = this._config.reference[0];
          }
        } // If boundary is not `scrollParent`, then set position to `static`
        // to allow the menu to "escape" the scroll parent's boundaries
        // https://github.com/twbs/bootstrap/issues/24251


        if (this._config.boundary !== 'scrollParent') {
          $__default['default'](parent).addClass(CLASS_NAME_POSITION_STATIC);
        }

        this._popper = new Popper(referenceElement, this._menu, this._getPopperConfig());
      } // If this is a touch-enabled device we add extra
      // empty mouseover listeners to the body's immediate children;
      // only needed because of broken event delegation on iOS
      // https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html


      if ('ontouchstart' in document.documentElement && $__default['default'](parent).closest(SELECTOR_NAVBAR_NAV).length === 0) {
        $__default['default'](document.body).children().on('mouseover', null, $__default['default'].noop);
      }

      this._element.focus();

      this._element.setAttribute('aria-expanded', true);

      $__default['default'](this._menu).toggleClass(CLASS_NAME_SHOW$2);
      $__default['default'](parent).toggleClass(CLASS_NAME_SHOW$2).trigger($__default['default'].Event(EVENT_SHOWN$1, relatedTarget));
    };

    _proto.hide = function hide() {
      if (this._element.disabled || $__default['default'](this._element).hasClass(CLASS_NAME_DISABLED) || !$__default['default'](this._menu).hasClass(CLASS_NAME_SHOW$2)) {
        return;
      }

      var relatedTarget = {
        relatedTarget: this._element
      };
      var hideEvent = $__default['default'].Event(EVENT_HIDE$1, relatedTarget);

      var parent = Dropdown._getParentFromElement(this._element);

      $__default['default'](parent).trigger(hideEvent);

      if (hideEvent.isDefaultPrevented()) {
        return;
      }

      if (this._popper) {
        this._popper.destroy();
      }

      $__default['default'](this._menu).toggleClass(CLASS_NAME_SHOW$2);
      $__default['default'](parent).toggleClass(CLASS_NAME_SHOW$2).trigger($__default['default'].Event(EVENT_HIDDEN$1, relatedTarget));
    };

    _proto.dispose = function dispose() {
      $__default['default'].removeData(this._element, DATA_KEY$4);
      $__default['default'](this._element).off(EVENT_KEY$4);
      this._element = null;
      this._menu = null;

      if (this._popper !== null) {
        this._popper.destroy();

        this._popper = null;
      }
    };

    _proto.update = function update() {
      this._inNavbar = this._detectNavbar();

      if (this._popper !== null) {
        this._popper.scheduleUpdate();
      }
    } // Private
    ;

    _proto._addEventListeners = function _addEventListeners() {
      var _this = this;

      $__default['default'](this._element).on(EVENT_CLICK, function (event) {
        event.preventDefault();
        event.stopPropagation();

        _this.toggle();
      });
    };

    _proto._getConfig = function _getConfig(config) {
      config = _extends({}, this.constructor.Default, $__default['default'](this._element).data(), config);
      Util.typeCheckConfig(NAME$4, config, this.constructor.DefaultType);
      return config;
    };

    _proto._getMenuElement = function _getMenuElement() {
      if (!this._menu) {
        var parent = Dropdown._getParentFromElement(this._element);

        if (parent) {
          this._menu = parent.querySelector(SELECTOR_MENU);
        }
      }

      return this._menu;
    };

    _proto._getPlacement = function _getPlacement() {
      var $parentDropdown = $__default['default'](this._element.parentNode);
      var placement = PLACEMENT_BOTTOM; // Handle dropup

      if ($parentDropdown.hasClass(CLASS_NAME_DROPUP)) {
        placement = $__default['default'](this._menu).hasClass(CLASS_NAME_MENURIGHT) ? PLACEMENT_TOPEND : PLACEMENT_TOP;
      } else if ($parentDropdown.hasClass(CLASS_NAME_DROPRIGHT)) {
        placement = PLACEMENT_RIGHT;
      } else if ($parentDropdown.hasClass(CLASS_NAME_DROPLEFT)) {
        placement = PLACEMENT_LEFT;
      } else if ($__default['default'](this._menu).hasClass(CLASS_NAME_MENURIGHT)) {
        placement = PLACEMENT_BOTTOMEND;
      }

      return placement;
    };

    _proto._detectNavbar = function _detectNavbar() {
      return $__default['default'](this._element).closest('.navbar').length > 0;
    };

    _proto._getOffset = function _getOffset() {
      var _this2 = this;

      var offset = {};

      if (typeof this._config.offset === 'function') {
        offset.fn = function (data) {
          data.offsets = _extends({}, data.offsets, _this2._config.offset(data.offsets, _this2._element) || {});
          return data;
        };
      } else {
        offset.offset = this._config.offset;
      }

      return offset;
    };

    _proto._getPopperConfig = function _getPopperConfig() {
      var popperConfig = {
        placement: this._getPlacement(),
        modifiers: {
          offset: this._getOffset(),
          flip: {
            enabled: this._config.flip
          },
          preventOverflow: {
            boundariesElement: this._config.boundary
          }
        }
      }; // Disable Popper if we have a static display

      if (this._config.display === 'static') {
        popperConfig.modifiers.applyStyle = {
          enabled: false
        };
      }

      return _extends({}, popperConfig, this._config.popperConfig);
    } // Static
    ;

    Dropdown._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var data = $__default['default'](this).data(DATA_KEY$4);

        var _config = typeof config === 'object' ? config : null;

        if (!data) {
          data = new Dropdown(this, _config);
          $__default['default'](this).data(DATA_KEY$4, data);
        }

        if (typeof config === 'string') {
          if (typeof data[config] === 'undefined') {
            throw new TypeError("No method named \"" + config + "\"");
          }

          data[config]();
        }
      });
    };

    Dropdown._clearMenus = function _clearMenus(event) {
      if (event && (event.which === RIGHT_MOUSE_BUTTON_WHICH || event.type === 'keyup' && event.which !== TAB_KEYCODE)) {
        return;
      }

      var toggles = [].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLE$2));

      for (var i = 0, len = toggles.length; i < len; i++) {
        var parent = Dropdown._getParentFromElement(toggles[i]);

        var context = $__default['default'](toggles[i]).data(DATA_KEY$4);
        var relatedTarget = {
          relatedTarget: toggles[i]
        };

        if (event && event.type === 'click') {
          relatedTarget.clickEvent = event;
        }

        if (!context) {
          continue;
        }

        var dropdownMenu = context._menu;

        if (!$__default['default'](parent).hasClass(CLASS_NAME_SHOW$2)) {
          continue;
        }

        if (event && (event.type === 'click' && /input|textarea/i.test(event.target.tagName) || event.type === 'keyup' && event.which === TAB_KEYCODE) && $__default['default'].contains(parent, event.target)) {
          continue;
        }

        var hideEvent = $__default['default'].Event(EVENT_HIDE$1, relatedTarget);
        $__default['default'](parent).trigger(hideEvent);

        if (hideEvent.isDefaultPrevented()) {
          continue;
        } // If this is a touch-enabled device we remove the extra
        // empty mouseover listeners we added for iOS support


        if ('ontouchstart' in document.documentElement) {
          $__default['default'](document.body).children().off('mouseover', null, $__default['default'].noop);
        }

        toggles[i].setAttribute('aria-expanded', 'false');

        if (context._popper) {
          context._popper.destroy();
        }

        $__default['default'](dropdownMenu).removeClass(CLASS_NAME_SHOW$2);
        $__default['default'](parent).removeClass(CLASS_NAME_SHOW$2).trigger($__default['default'].Event(EVENT_HIDDEN$1, relatedTarget));
      }
    };

    Dropdown._getParentFromElement = function _getParentFromElement(element) {
      var parent;
      var selector = Util.getSelectorFromElement(element);

      if (selector) {
        parent = document.querySelector(selector);
      }

      return parent || element.parentNode;
    } // eslint-disable-next-line complexity
    ;

    Dropdown._dataApiKeydownHandler = function _dataApiKeydownHandler(event) {
      // If not input/textarea:
      //  - And not a key in REGEXP_KEYDOWN => not a dropdown command
      // If input/textarea:
      //  - If space key => not a dropdown command
      //  - If key is other than escape
      //    - If key is not up or down => not a dropdown command
      //    - If trigger inside the menu => not a dropdown command
      if (/input|textarea/i.test(event.target.tagName) ? event.which === SPACE_KEYCODE || event.which !== ESCAPE_KEYCODE && (event.which !== ARROW_DOWN_KEYCODE && event.which !== ARROW_UP_KEYCODE || $__default['default'](event.target).closest(SELECTOR_MENU).length) : !REGEXP_KEYDOWN.test(event.which)) {
        return;
      }

      if (this.disabled || $__default['default'](this).hasClass(CLASS_NAME_DISABLED)) {
        return;
      }

      var parent = Dropdown._getParentFromElement(this);

      var isActive = $__default['default'](parent).hasClass(CLASS_NAME_SHOW$2);

      if (!isActive && event.which === ESCAPE_KEYCODE) {
        return;
      }

      event.preventDefault();
      event.stopPropagation();

      if (!isActive || event.which === ESCAPE_KEYCODE || event.which === SPACE_KEYCODE) {
        if (event.which === ESCAPE_KEYCODE) {
          $__default['default'](parent.querySelector(SELECTOR_DATA_TOGGLE$2)).trigger('focus');
        }

        $__default['default'](this).trigger('click');
        return;
      }

      var items = [].slice.call(parent.querySelectorAll(SELECTOR_VISIBLE_ITEMS)).filter(function (item) {
        return $__default['default'](item).is(':visible');
      });

      if (items.length === 0) {
        return;
      }

      var index = items.indexOf(event.target);

      if (event.which === ARROW_UP_KEYCODE && index > 0) {
        // Up
        index--;
      }

      if (event.which === ARROW_DOWN_KEYCODE && index < items.length - 1) {
        // Down
        index++;
      }

      if (index < 0) {
        index = 0;
      }

      items[index].focus();
    };

    _createClass(Dropdown, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$4;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$2;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$2;
      }
    }]);

    return Dropdown;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */


  $__default['default'](document).on(EVENT_KEYDOWN_DATA_API, SELECTOR_DATA_TOGGLE$2, Dropdown._dataApiKeydownHandler).on(EVENT_KEYDOWN_DATA_API, SELECTOR_MENU, Dropdown._dataApiKeydownHandler).on(EVENT_CLICK_DATA_API$4 + " " + EVENT_KEYUP_DATA_API, Dropdown._clearMenus).on(EVENT_CLICK_DATA_API$4, SELECTOR_DATA_TOGGLE$2, function (event) {
    event.preventDefault();
    event.stopPropagation();

    Dropdown._jQueryInterface.call($__default['default'](this), 'toggle');
  }).on(EVENT_CLICK_DATA_API$4, SELECTOR_FORM_CHILD, function (e) {
    e.stopPropagation();
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  $__default['default'].fn[NAME$4] = Dropdown._jQueryInterface;
  $__default['default'].fn[NAME$4].Constructor = Dropdown;

  $__default['default'].fn[NAME$4].noConflict = function () {
    $__default['default'].fn[NAME$4] = JQUERY_NO_CONFLICT$4;
    return Dropdown._jQueryInterface;
  };

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$5 = 'modal';
  var VERSION$5 = '4.6.0';
  var DATA_KEY$5 = 'bs.modal';
  var EVENT_KEY$5 = "." + DATA_KEY$5;
  var DATA_API_KEY$5 = '.data-api';
  var JQUERY_NO_CONFLICT$5 = $__default['default'].fn[NAME$5];
  var ESCAPE_KEYCODE$1 = 27; // KeyboardEvent.which value for Escape (Esc) key

  var Default$3 = {
    backdrop: true,
    keyboard: true,
    focus: true,
    show: true
  };
  var DefaultType$3 = {
    backdrop: '(boolean|string)',
    keyboard: 'boolean',
    focus: 'boolean',
    show: 'boolean'
  };
  var EVENT_HIDE$2 = "hide" + EVENT_KEY$5;
  var EVENT_HIDE_PREVENTED = "hidePrevented" + EVENT_KEY$5;
  var EVENT_HIDDEN$2 = "hidden" + EVENT_KEY$5;
  var EVENT_SHOW$2 = "show" + EVENT_KEY$5;
  var EVENT_SHOWN$2 = "shown" + EVENT_KEY$5;
  var EVENT_FOCUSIN = "focusin" + EVENT_KEY$5;
  var EVENT_RESIZE = "resize" + EVENT_KEY$5;
  var EVENT_CLICK_DISMISS = "click.dismiss" + EVENT_KEY$5;
  var EVENT_KEYDOWN_DISMISS = "keydown.dismiss" + EVENT_KEY$5;
  var EVENT_MOUSEUP_DISMISS = "mouseup.dismiss" + EVENT_KEY$5;
  var EVENT_MOUSEDOWN_DISMISS = "mousedown.dismiss" + EVENT_KEY$5;
  var EVENT_CLICK_DATA_API$5 = "click" + EVENT_KEY$5 + DATA_API_KEY$5;
  var CLASS_NAME_SCROLLABLE = 'modal-dialog-scrollable';
  var CLASS_NAME_SCROLLBAR_MEASURER = 'modal-scrollbar-measure';
  var CLASS_NAME_BACKDROP = 'modal-backdrop';
  var CLASS_NAME_OPEN = 'modal-open';
  var CLASS_NAME_FADE$1 = 'fade';
  var CLASS_NAME_SHOW$3 = 'show';
  var CLASS_NAME_STATIC = 'modal-static';
  var SELECTOR_DIALOG = '.modal-dialog';
  var SELECTOR_MODAL_BODY = '.modal-body';
  var SELECTOR_DATA_TOGGLE$3 = '[data-toggle="modal"]';
  var SELECTOR_DATA_DISMISS = '[data-dismiss="modal"]';
  var SELECTOR_FIXED_CONTENT = '.fixed-top, .fixed-bottom, .is-fixed, .sticky-top';
  var SELECTOR_STICKY_CONTENT = '.sticky-top';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Modal = /*#__PURE__*/function () {
    function Modal(element, config) {
      this._config = this._getConfig(config);
      this._element = element;
      this._dialog = element.querySelector(SELECTOR_DIALOG);
      this._backdrop = null;
      this._isShown = false;
      this._isBodyOverflowing = false;
      this._ignoreBackdropClick = false;
      this._isTransitioning = false;
      this._scrollbarWidth = 0;
    } // Getters


    var _proto = Modal.prototype;

    // Public
    _proto.toggle = function toggle(relatedTarget) {
      return this._isShown ? this.hide() : this.show(relatedTarget);
    };

    _proto.show = function show(relatedTarget) {
      var _this = this;

      if (this._isShown || this._isTransitioning) {
        return;
      }

      if ($__default['default'](this._element).hasClass(CLASS_NAME_FADE$1)) {
        this._isTransitioning = true;
      }

      var showEvent = $__default['default'].Event(EVENT_SHOW$2, {
        relatedTarget: relatedTarget
      });
      $__default['default'](this._element).trigger(showEvent);

      if (this._isShown || showEvent.isDefaultPrevented()) {
        return;
      }

      this._isShown = true;

      this._checkScrollbar();

      this._setScrollbar();

      this._adjustDialog();

      this._setEscapeEvent();

      this._setResizeEvent();

      $__default['default'](this._element).on(EVENT_CLICK_DISMISS, SELECTOR_DATA_DISMISS, function (event) {
        return _this.hide(event);
      });
      $__default['default'](this._dialog).on(EVENT_MOUSEDOWN_DISMISS, function () {
        $__default['default'](_this._element).one(EVENT_MOUSEUP_DISMISS, function (event) {
          if ($__default['default'](event.target).is(_this._element)) {
            _this._ignoreBackdropClick = true;
          }
        });
      });

      this._showBackdrop(function () {
        return _this._showElement(relatedTarget);
      });
    };

    _proto.hide = function hide(event) {
      var _this2 = this;

      if (event) {
        event.preventDefault();
      }

      if (!this._isShown || this._isTransitioning) {
        return;
      }

      var hideEvent = $__default['default'].Event(EVENT_HIDE$2);
      $__default['default'](this._element).trigger(hideEvent);

      if (!this._isShown || hideEvent.isDefaultPrevented()) {
        return;
      }

      this._isShown = false;
      var transition = $__default['default'](this._element).hasClass(CLASS_NAME_FADE$1);

      if (transition) {
        this._isTransitioning = true;
      }

      this._setEscapeEvent();

      this._setResizeEvent();

      $__default['default'](document).off(EVENT_FOCUSIN);
      $__default['default'](this._element).removeClass(CLASS_NAME_SHOW$3);
      $__default['default'](this._element).off(EVENT_CLICK_DISMISS);
      $__default['default'](this._dialog).off(EVENT_MOUSEDOWN_DISMISS);

      if (transition) {
        var transitionDuration = Util.getTransitionDurationFromElement(this._element);
        $__default['default'](this._element).one(Util.TRANSITION_END, function (event) {
          return _this2._hideModal(event);
        }).emulateTransitionEnd(transitionDuration);
      } else {
        this._hideModal();
      }
    };

    _proto.dispose = function dispose() {
      [window, this._element, this._dialog].forEach(function (htmlElement) {
        return $__default['default'](htmlElement).off(EVENT_KEY$5);
      });
      /**
       * `document` has 2 events `EVENT_FOCUSIN` and `EVENT_CLICK_DATA_API`
       * Do not move `document` in `htmlElements` array
       * It will remove `EVENT_CLICK_DATA_API` event that should remain
       */

      $__default['default'](document).off(EVENT_FOCUSIN);
      $__default['default'].removeData(this._element, DATA_KEY$5);
      this._config = null;
      this._element = null;
      this._dialog = null;
      this._backdrop = null;
      this._isShown = null;
      this._isBodyOverflowing = null;
      this._ignoreBackdropClick = null;
      this._isTransitioning = null;
      this._scrollbarWidth = null;
    };

    _proto.handleUpdate = function handleUpdate() {
      this._adjustDialog();
    } // Private
    ;

    _proto._getConfig = function _getConfig(config) {
      config = _extends({}, Default$3, config);
      Util.typeCheckConfig(NAME$5, config, DefaultType$3);
      return config;
    };

    _proto._triggerBackdropTransition = function _triggerBackdropTransition() {
      var _this3 = this;

      var hideEventPrevented = $__default['default'].Event(EVENT_HIDE_PREVENTED);
      $__default['default'](this._element).trigger(hideEventPrevented);

      if (hideEventPrevented.isDefaultPrevented()) {
        return;
      }

      var isModalOverflowing = this._element.scrollHeight > document.documentElement.clientHeight;

      if (!isModalOverflowing) {
        this._element.style.overflowY = 'hidden';
      }

      this._element.classList.add(CLASS_NAME_STATIC);

      var modalTransitionDuration = Util.getTransitionDurationFromElement(this._dialog);
      $__default['default'](this._element).off(Util.TRANSITION_END);
      $__default['default'](this._element).one(Util.TRANSITION_END, function () {
        _this3._element.classList.remove(CLASS_NAME_STATIC);

        if (!isModalOverflowing) {
          $__default['default'](_this3._element).one(Util.TRANSITION_END, function () {
            _this3._element.style.overflowY = '';
          }).emulateTransitionEnd(_this3._element, modalTransitionDuration);
        }
      }).emulateTransitionEnd(modalTransitionDuration);

      this._element.focus();
    };

    _proto._showElement = function _showElement(relatedTarget) {
      var _this4 = this;

      var transition = $__default['default'](this._element).hasClass(CLASS_NAME_FADE$1);
      var modalBody = this._dialog ? this._dialog.querySelector(SELECTOR_MODAL_BODY) : null;

      if (!this._element.parentNode || this._element.parentNode.nodeType !== Node.ELEMENT_NODE) {
        // Don't move modal's DOM position
        document.body.appendChild(this._element);
      }

      this._element.style.display = 'block';

      this._element.removeAttribute('aria-hidden');

      this._element.setAttribute('aria-modal', true);

      this._element.setAttribute('role', 'dialog');

      if ($__default['default'](this._dialog).hasClass(CLASS_NAME_SCROLLABLE) && modalBody) {
        modalBody.scrollTop = 0;
      } else {
        this._element.scrollTop = 0;
      }

      if (transition) {
        Util.reflow(this._element);
      }

      $__default['default'](this._element).addClass(CLASS_NAME_SHOW$3);

      if (this._config.focus) {
        this._enforceFocus();
      }

      var shownEvent = $__default['default'].Event(EVENT_SHOWN$2, {
        relatedTarget: relatedTarget
      });

      var transitionComplete = function transitionComplete() {
        if (_this4._config.focus) {
          _this4._element.focus();
        }

        _this4._isTransitioning = false;
        $__default['default'](_this4._element).trigger(shownEvent);
      };

      if (transition) {
        var transitionDuration = Util.getTransitionDurationFromElement(this._dialog);
        $__default['default'](this._dialog).one(Util.TRANSITION_END, transitionComplete).emulateTransitionEnd(transitionDuration);
      } else {
        transitionComplete();
      }
    };

    _proto._enforceFocus = function _enforceFocus() {
      var _this5 = this;

      $__default['default'](document).off(EVENT_FOCUSIN) // Guard against infinite focus loop
      .on(EVENT_FOCUSIN, function (event) {
        if (document !== event.target && _this5._element !== event.target && $__default['default'](_this5._element).has(event.target).length === 0) {
          _this5._element.focus();
        }
      });
    };

    _proto._setEscapeEvent = function _setEscapeEvent() {
      var _this6 = this;

      if (this._isShown) {
        $__default['default'](this._element).on(EVENT_KEYDOWN_DISMISS, function (event) {
          if (_this6._config.keyboard && event.which === ESCAPE_KEYCODE$1) {
            event.preventDefault();

            _this6.hide();
          } else if (!_this6._config.keyboard && event.which === ESCAPE_KEYCODE$1) {
            _this6._triggerBackdropTransition();
          }
        });
      } else if (!this._isShown) {
        $__default['default'](this._element).off(EVENT_KEYDOWN_DISMISS);
      }
    };

    _proto._setResizeEvent = function _setResizeEvent() {
      var _this7 = this;

      if (this._isShown) {
        $__default['default'](window).on(EVENT_RESIZE, function (event) {
          return _this7.handleUpdate(event);
        });
      } else {
        $__default['default'](window).off(EVENT_RESIZE);
      }
    };

    _proto._hideModal = function _hideModal() {
      var _this8 = this;

      this._element.style.display = 'none';

      this._element.setAttribute('aria-hidden', true);

      this._element.removeAttribute('aria-modal');

      this._element.removeAttribute('role');

      this._isTransitioning = false;

      this._showBackdrop(function () {
        $__default['default'](document.body).removeClass(CLASS_NAME_OPEN);

        _this8._resetAdjustments();

        _this8._resetScrollbar();

        $__default['default'](_this8._element).trigger(EVENT_HIDDEN$2);
      });
    };

    _proto._removeBackdrop = function _removeBackdrop() {
      if (this._backdrop) {
        $__default['default'](this._backdrop).remove();
        this._backdrop = null;
      }
    };

    _proto._showBackdrop = function _showBackdrop(callback) {
      var _this9 = this;

      var animate = $__default['default'](this._element).hasClass(CLASS_NAME_FADE$1) ? CLASS_NAME_FADE$1 : '';

      if (this._isShown && this._config.backdrop) {
        this._backdrop = document.createElement('div');
        this._backdrop.className = CLASS_NAME_BACKDROP;

        if (animate) {
          this._backdrop.classList.add(animate);
        }

        $__default['default'](this._backdrop).appendTo(document.body);
        $__default['default'](this._element).on(EVENT_CLICK_DISMISS, function (event) {
          if (_this9._ignoreBackdropClick) {
            _this9._ignoreBackdropClick = false;
            return;
          }

          if (event.target !== event.currentTarget) {
            return;
          }

          if (_this9._config.backdrop === 'static') {
            _this9._triggerBackdropTransition();
          } else {
            _this9.hide();
          }
        });

        if (animate) {
          Util.reflow(this._backdrop);
        }

        $__default['default'](this._backdrop).addClass(CLASS_NAME_SHOW$3);

        if (!callback) {
          return;
        }

        if (!animate) {
          callback();
          return;
        }

        var backdropTransitionDuration = Util.getTransitionDurationFromElement(this._backdrop);
        $__default['default'](this._backdrop).one(Util.TRANSITION_END, callback).emulateTransitionEnd(backdropTransitionDuration);
      } else if (!this._isShown && this._backdrop) {
        $__default['default'](this._backdrop).removeClass(CLASS_NAME_SHOW$3);

        var callbackRemove = function callbackRemove() {
          _this9._removeBackdrop();

          if (callback) {
            callback();
          }
        };

        if ($__default['default'](this._element).hasClass(CLASS_NAME_FADE$1)) {
          var _backdropTransitionDuration = Util.getTransitionDurationFromElement(this._backdrop);

          $__default['default'](this._backdrop).one(Util.TRANSITION_END, callbackRemove).emulateTransitionEnd(_backdropTransitionDuration);
        } else {
          callbackRemove();
        }
      } else if (callback) {
        callback();
      }
    } // ----------------------------------------------------------------------
    // the following methods are used to handle overflowing modals
    // todo (fat): these should probably be refactored out of modal.js
    // ----------------------------------------------------------------------
    ;

    _proto._adjustDialog = function _adjustDialog() {
      var isModalOverflowing = this._element.scrollHeight > document.documentElement.clientHeight;

      if (!this._isBodyOverflowing && isModalOverflowing) {
        this._element.style.paddingLeft = this._scrollbarWidth + "px";
      }

      if (this._isBodyOverflowing && !isModalOverflowing) {
        this._element.style.paddingRight = this._scrollbarWidth + "px";
      }
    };

    _proto._resetAdjustments = function _resetAdjustments() {
      this._element.style.paddingLeft = '';
      this._element.style.paddingRight = '';
    };

    _proto._checkScrollbar = function _checkScrollbar() {
      var rect = document.body.getBoundingClientRect();
      this._isBodyOverflowing = Math.round(rect.left + rect.right) < window.innerWidth;
      this._scrollbarWidth = this._getScrollbarWidth();
    };

    _proto._setScrollbar = function _setScrollbar() {
      var _this10 = this;

      if (this._isBodyOverflowing) {
        // Note: DOMNode.style.paddingRight returns the actual value or '' if not set
        //   while $(DOMNode).css('padding-right') returns the calculated value or 0 if not set
        var fixedContent = [].slice.call(document.querySelectorAll(SELECTOR_FIXED_CONTENT));
        var stickyContent = [].slice.call(document.querySelectorAll(SELECTOR_STICKY_CONTENT)); // Adjust fixed content padding

        $__default['default'](fixedContent).each(function (index, element) {
          var actualPadding = element.style.paddingRight;
          var calculatedPadding = $__default['default'](element).css('padding-right');
          $__default['default'](element).data('padding-right', actualPadding).css('padding-right', parseFloat(calculatedPadding) + _this10._scrollbarWidth + "px");
        }); // Adjust sticky content margin

        $__default['default'](stickyContent).each(function (index, element) {
          var actualMargin = element.style.marginRight;
          var calculatedMargin = $__default['default'](element).css('margin-right');
          $__default['default'](element).data('margin-right', actualMargin).css('margin-right', parseFloat(calculatedMargin) - _this10._scrollbarWidth + "px");
        }); // Adjust body padding

        var actualPadding = document.body.style.paddingRight;
        var calculatedPadding = $__default['default'](document.body).css('padding-right');
        $__default['default'](document.body).data('padding-right', actualPadding).css('padding-right', parseFloat(calculatedPadding) + this._scrollbarWidth + "px");
      }

      $__default['default'](document.body).addClass(CLASS_NAME_OPEN);
    };

    _proto._resetScrollbar = function _resetScrollbar() {
      // Restore fixed content padding
      var fixedContent = [].slice.call(document.querySelectorAll(SELECTOR_FIXED_CONTENT));
      $__default['default'](fixedContent).each(function (index, element) {
        var padding = $__default['default'](element).data('padding-right');
        $__default['default'](element).removeData('padding-right');
        element.style.paddingRight = padding ? padding : '';
      }); // Restore sticky content

      var elements = [].slice.call(document.querySelectorAll("" + SELECTOR_STICKY_CONTENT));
      $__default['default'](elements).each(function (index, element) {
        var margin = $__default['default'](element).data('margin-right');

        if (typeof margin !== 'undefined') {
          $__default['default'](element).css('margin-right', margin).removeData('margin-right');
        }
      }); // Restore body padding

      var padding = $__default['default'](document.body).data('padding-right');
      $__default['default'](document.body).removeData('padding-right');
      document.body.style.paddingRight = padding ? padding : '';
    };

    _proto._getScrollbarWidth = function _getScrollbarWidth() {
      // thx d.walsh
      var scrollDiv = document.createElement('div');
      scrollDiv.className = CLASS_NAME_SCROLLBAR_MEASURER;
      document.body.appendChild(scrollDiv);
      var scrollbarWidth = scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth;
      document.body.removeChild(scrollDiv);
      return scrollbarWidth;
    } // Static
    ;

    Modal._jQueryInterface = function _jQueryInterface(config, relatedTarget) {
      return this.each(function () {
        var data = $__default['default'](this).data(DATA_KEY$5);

        var _config = _extends({}, Default$3, $__default['default'](this).data(), typeof config === 'object' && config ? config : {});

        if (!data) {
          data = new Modal(this, _config);
          $__default['default'](this).data(DATA_KEY$5, data);
        }

        if (typeof config === 'string') {
          if (typeof data[config] === 'undefined') {
            throw new TypeError("No method named \"" + config + "\"");
          }

          data[config](relatedTarget);
        } else if (_config.show) {
          data.show(relatedTarget);
        }
      });
    };

    _createClass(Modal, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$5;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$3;
      }
    }]);

    return Modal;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */


  $__default['default'](document).on(EVENT_CLICK_DATA_API$5, SELECTOR_DATA_TOGGLE$3, function (event) {
    var _this11 = this;

    var target;
    var selector = Util.getSelectorFromElement(this);

    if (selector) {
      target = document.querySelector(selector);
    }

    var config = $__default['default'](target).data(DATA_KEY$5) ? 'toggle' : _extends({}, $__default['default'](target).data(), $__default['default'](this).data());

    if (this.tagName === 'A' || this.tagName === 'AREA') {
      event.preventDefault();
    }

    var $target = $__default['default'](target).one(EVENT_SHOW$2, function (showEvent) {
      if (showEvent.isDefaultPrevented()) {
        // Only register focus restorer if modal will actually get shown
        return;
      }

      $target.one(EVENT_HIDDEN$2, function () {
        if ($__default['default'](_this11).is(':visible')) {
          _this11.focus();
        }
      });
    });

    Modal._jQueryInterface.call($__default['default'](target), config, this);
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  $__default['default'].fn[NAME$5] = Modal._jQueryInterface;
  $__default['default'].fn[NAME$5].Constructor = Modal;

  $__default['default'].fn[NAME$5].noConflict = function () {
    $__default['default'].fn[NAME$5] = JQUERY_NO_CONFLICT$5;
    return Modal._jQueryInterface;
  };

  /**
   * --------------------------------------------------------------------------
   * Bootstrap (v4.6.0): tools/sanitizer.js
   * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
   * --------------------------------------------------------------------------
   */
  var uriAttrs = ['background', 'cite', 'href', 'itemtype', 'longdesc', 'poster', 'src', 'xlink:href'];
  var ARIA_ATTRIBUTE_PATTERN = /^aria-[\w-]*$/i;
  var DefaultWhitelist = {
    // Global attributes allowed on any supplied element below.
    '*': ['class', 'dir', 'id', 'lang', 'role', ARIA_ATTRIBUTE_PATTERN],
    a: ['target', 'href', 'title', 'rel'],
    area: [],
    b: [],
    br: [],
    col: [],
    code: [],
    div: [],
    em: [],
    hr: [],
    h1: [],
    h2: [],
    h3: [],
    h4: [],
    h5: [],
    h6: [],
    i: [],
    img: ['src', 'srcset', 'alt', 'title', 'width', 'height'],
    li: [],
    ol: [],
    p: [],
    pre: [],
    s: [],
    small: [],
    span: [],
    sub: [],
    sup: [],
    strong: [],
    u: [],
    ul: []
  };
  /**
   * A pattern that recognizes a commonly useful subset of URLs that are safe.
   *
   * Shoutout to Angular 7 https://github.com/angular/angular/blob/7.2.4/packages/core/src/sanitization/url_sanitizer.ts
   */

  var SAFE_URL_PATTERN = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi;
  /**
   * A pattern that matches safe data URLs. Only matches image, video and audio types.
   *
   * Shoutout to Angular 7 https://github.com/angular/angular/blob/7.2.4/packages/core/src/sanitization/url_sanitizer.ts
   */

  var DATA_URL_PATTERN = /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i;

  function allowedAttribute(attr, allowedAttributeList) {
    var attrName = attr.nodeName.toLowerCase();

    if (allowedAttributeList.indexOf(attrName) !== -1) {
      if (uriAttrs.indexOf(attrName) !== -1) {
        return Boolean(attr.nodeValue.match(SAFE_URL_PATTERN) || attr.nodeValue.match(DATA_URL_PATTERN));
      }

      return true;
    }

    var regExp = allowedAttributeList.filter(function (attrRegex) {
      return attrRegex instanceof RegExp;
    }); // Check if a regular expression validates the attribute.

    for (var i = 0, len = regExp.length; i < len; i++) {
      if (attrName.match(regExp[i])) {
        return true;
      }
    }

    return false;
  }

  function sanitizeHtml(unsafeHtml, whiteList, sanitizeFn) {
    if (unsafeHtml.length === 0) {
      return unsafeHtml;
    }

    if (sanitizeFn && typeof sanitizeFn === 'function') {
      return sanitizeFn(unsafeHtml);
    }

    var domParser = new window.DOMParser();
    var createdDocument = domParser.parseFromString(unsafeHtml, 'text/html');
    var whitelistKeys = Object.keys(whiteList);
    var elements = [].slice.call(createdDocument.body.querySelectorAll('*'));

    var _loop = function _loop(i, len) {
      var el = elements[i];
      var elName = el.nodeName.toLowerCase();

      if (whitelistKeys.indexOf(el.nodeName.toLowerCase()) === -1) {
        el.parentNode.removeChild(el);
        return "continue";
      }

      var attributeList = [].slice.call(el.attributes);
      var whitelistedAttributes = [].concat(whiteList['*'] || [], whiteList[elName] || []);
      attributeList.forEach(function (attr) {
        if (!allowedAttribute(attr, whitelistedAttributes)) {
          el.removeAttribute(attr.nodeName);
        }
      });
    };

    for (var i = 0, len = elements.length; i < len; i++) {
      var _ret = _loop(i);

      if (_ret === "continue") continue;
    }

    return createdDocument.body.innerHTML;
  }

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$6 = 'tooltip';
  var VERSION$6 = '4.6.0';
  var DATA_KEY$6 = 'bs.tooltip';
  var EVENT_KEY$6 = "." + DATA_KEY$6;
  var JQUERY_NO_CONFLICT$6 = $__default['default'].fn[NAME$6];
  var CLASS_PREFIX = 'bs-tooltip';
  var BSCLS_PREFIX_REGEX = new RegExp("(^|\\s)" + CLASS_PREFIX + "\\S+", 'g');
  var DISALLOWED_ATTRIBUTES = ['sanitize', 'whiteList', 'sanitizeFn'];
  var DefaultType$4 = {
    animation: 'boolean',
    template: 'string',
    title: '(string|element|function)',
    trigger: 'string',
    delay: '(number|object)',
    html: 'boolean',
    selector: '(string|boolean)',
    placement: '(string|function)',
    offset: '(number|string|function)',
    container: '(string|element|boolean)',
    fallbackPlacement: '(string|array)',
    boundary: '(string|element)',
    customClass: '(string|function)',
    sanitize: 'boolean',
    sanitizeFn: '(null|function)',
    whiteList: 'object',
    popperConfig: '(null|object)'
  };
  var AttachmentMap = {
    AUTO: 'auto',
    TOP: 'top',
    RIGHT: 'right',
    BOTTOM: 'bottom',
    LEFT: 'left'
  };
  var Default$4 = {
    animation: true,
    template: '<div class="tooltip" role="tooltip">' + '<div class="arrow"></div>' + '<div class="tooltip-inner"></div></div>',
    trigger: 'hover focus',
    title: '',
    delay: 0,
    html: false,
    selector: false,
    placement: 'top',
    offset: 0,
    container: false,
    fallbackPlacement: 'flip',
    boundary: 'scrollParent',
    customClass: '',
    sanitize: true,
    sanitizeFn: null,
    whiteList: DefaultWhitelist,
    popperConfig: null
  };
  var HOVER_STATE_SHOW = 'show';
  var HOVER_STATE_OUT = 'out';
  var Event = {
    HIDE: "hide" + EVENT_KEY$6,
    HIDDEN: "hidden" + EVENT_KEY$6,
    SHOW: "show" + EVENT_KEY$6,
    SHOWN: "shown" + EVENT_KEY$6,
    INSERTED: "inserted" + EVENT_KEY$6,
    CLICK: "click" + EVENT_KEY$6,
    FOCUSIN: "focusin" + EVENT_KEY$6,
    FOCUSOUT: "focusout" + EVENT_KEY$6,
    MOUSEENTER: "mouseenter" + EVENT_KEY$6,
    MOUSELEAVE: "mouseleave" + EVENT_KEY$6
  };
  var CLASS_NAME_FADE$2 = 'fade';
  var CLASS_NAME_SHOW$4 = 'show';
  var SELECTOR_TOOLTIP_INNER = '.tooltip-inner';
  var SELECTOR_ARROW = '.arrow';
  var TRIGGER_HOVER = 'hover';
  var TRIGGER_FOCUS = 'focus';
  var TRIGGER_CLICK = 'click';
  var TRIGGER_MANUAL = 'manual';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Tooltip = /*#__PURE__*/function () {
    function Tooltip(element, config) {
      if (typeof Popper === 'undefined') {
        throw new TypeError('Bootstrap\'s tooltips require Popper (https://popper.js.org)');
      } // private


      this._isEnabled = true;
      this._timeout = 0;
      this._hoverState = '';
      this._activeTrigger = {};
      this._popper = null; // Protected

      this.element = element;
      this.config = this._getConfig(config);
      this.tip = null;

      this._setListeners();
    } // Getters


    var _proto = Tooltip.prototype;

    // Public
    _proto.enable = function enable() {
      this._isEnabled = true;
    };

    _proto.disable = function disable() {
      this._isEnabled = false;
    };

    _proto.toggleEnabled = function toggleEnabled() {
      this._isEnabled = !this._isEnabled;
    };

    _proto.toggle = function toggle(event) {
      if (!this._isEnabled) {
        return;
      }

      if (event) {
        var dataKey = this.constructor.DATA_KEY;
        var context = $__default['default'](event.currentTarget).data(dataKey);

        if (!context) {
          context = new this.constructor(event.currentTarget, this._getDelegateConfig());
          $__default['default'](event.currentTarget).data(dataKey, context);
        }

        context._activeTrigger.click = !context._activeTrigger.click;

        if (context._isWithActiveTrigger()) {
          context._enter(null, context);
        } else {
          context._leave(null, context);
        }
      } else {
        if ($__default['default'](this.getTipElement()).hasClass(CLASS_NAME_SHOW$4)) {
          this._leave(null, this);

          return;
        }

        this._enter(null, this);
      }
    };

    _proto.dispose = function dispose() {
      clearTimeout(this._timeout);
      $__default['default'].removeData(this.element, this.constructor.DATA_KEY);
      $__default['default'](this.element).off(this.constructor.EVENT_KEY);
      $__default['default'](this.element).closest('.modal').off('hide.bs.modal', this._hideModalHandler);

      if (this.tip) {
        $__default['default'](this.tip).remove();
      }

      this._isEnabled = null;
      this._timeout = null;
      this._hoverState = null;
      this._activeTrigger = null;

      if (this._popper) {
        this._popper.destroy();
      }

      this._popper = null;
      this.element = null;
      this.config = null;
      this.tip = null;
    };

    _proto.show = function show() {
      var _this = this;

      if ($__default['default'](this.element).css('display') === 'none') {
        throw new Error('Please use show on visible elements');
      }

      var showEvent = $__default['default'].Event(this.constructor.Event.SHOW);

      if (this.isWithContent() && this._isEnabled) {
        $__default['default'](this.element).trigger(showEvent);
        var shadowRoot = Util.findShadowRoot(this.element);
        var isInTheDom = $__default['default'].contains(shadowRoot !== null ? shadowRoot : this.element.ownerDocument.documentElement, this.element);

        if (showEvent.isDefaultPrevented() || !isInTheDom) {
          return;
        }

        var tip = this.getTipElement();
        var tipId = Util.getUID(this.constructor.NAME);
        tip.setAttribute('id', tipId);
        this.element.setAttribute('aria-describedby', tipId);
        this.setContent();

        if (this.config.animation) {
          $__default['default'](tip).addClass(CLASS_NAME_FADE$2);
        }

        var placement = typeof this.config.placement === 'function' ? this.config.placement.call(this, tip, this.element) : this.config.placement;

        var attachment = this._getAttachment(placement);

        this.addAttachmentClass(attachment);

        var container = this._getContainer();

        $__default['default'](tip).data(this.constructor.DATA_KEY, this);

        if (!$__default['default'].contains(this.element.ownerDocument.documentElement, this.tip)) {
          $__default['default'](tip).appendTo(container);
        }

        $__default['default'](this.element).trigger(this.constructor.Event.INSERTED);
        this._popper = new Popper(this.element, tip, this._getPopperConfig(attachment));
        $__default['default'](tip).addClass(CLASS_NAME_SHOW$4);
        $__default['default'](tip).addClass(this.config.customClass); // If this is a touch-enabled device we add extra
        // empty mouseover listeners to the body's immediate children;
        // only needed because of broken event delegation on iOS
        // https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html

        if ('ontouchstart' in document.documentElement) {
          $__default['default'](document.body).children().on('mouseover', null, $__default['default'].noop);
        }

        var complete = function complete() {
          if (_this.config.animation) {
            _this._fixTransition();
          }

          var prevHoverState = _this._hoverState;
          _this._hoverState = null;
          $__default['default'](_this.element).trigger(_this.constructor.Event.SHOWN);

          if (prevHoverState === HOVER_STATE_OUT) {
            _this._leave(null, _this);
          }
        };

        if ($__default['default'](this.tip).hasClass(CLASS_NAME_FADE$2)) {
          var transitionDuration = Util.getTransitionDurationFromElement(this.tip);
          $__default['default'](this.tip).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
        } else {
          complete();
        }
      }
    };

    _proto.hide = function hide(callback) {
      var _this2 = this;

      var tip = this.getTipElement();
      var hideEvent = $__default['default'].Event(this.constructor.Event.HIDE);

      var complete = function complete() {
        if (_this2._hoverState !== HOVER_STATE_SHOW && tip.parentNode) {
          tip.parentNode.removeChild(tip);
        }

        _this2._cleanTipClass();

        _this2.element.removeAttribute('aria-describedby');

        $__default['default'](_this2.element).trigger(_this2.constructor.Event.HIDDEN);

        if (_this2._popper !== null) {
          _this2._popper.destroy();
        }

        if (callback) {
          callback();
        }
      };

      $__default['default'](this.element).trigger(hideEvent);

      if (hideEvent.isDefaultPrevented()) {
        return;
      }

      $__default['default'](tip).removeClass(CLASS_NAME_SHOW$4); // If this is a touch-enabled device we remove the extra
      // empty mouseover listeners we added for iOS support

      if ('ontouchstart' in document.documentElement) {
        $__default['default'](document.body).children().off('mouseover', null, $__default['default'].noop);
      }

      this._activeTrigger[TRIGGER_CLICK] = false;
      this._activeTrigger[TRIGGER_FOCUS] = false;
      this._activeTrigger[TRIGGER_HOVER] = false;

      if ($__default['default'](this.tip).hasClass(CLASS_NAME_FADE$2)) {
        var transitionDuration = Util.getTransitionDurationFromElement(tip);
        $__default['default'](tip).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
      } else {
        complete();
      }

      this._hoverState = '';
    };

    _proto.update = function update() {
      if (this._popper !== null) {
        this._popper.scheduleUpdate();
      }
    } // Protected
    ;

    _proto.isWithContent = function isWithContent() {
      return Boolean(this.getTitle());
    };

    _proto.addAttachmentClass = function addAttachmentClass(attachment) {
      $__default['default'](this.getTipElement()).addClass(CLASS_PREFIX + "-" + attachment);
    };

    _proto.getTipElement = function getTipElement() {
      this.tip = this.tip || $__default['default'](this.config.template)[0];
      return this.tip;
    };

    _proto.setContent = function setContent() {
      var tip = this.getTipElement();
      this.setElementContent($__default['default'](tip.querySelectorAll(SELECTOR_TOOLTIP_INNER)), this.getTitle());
      $__default['default'](tip).removeClass(CLASS_NAME_FADE$2 + " " + CLASS_NAME_SHOW$4);
    };

    _proto.setElementContent = function setElementContent($element, content) {
      if (typeof content === 'object' && (content.nodeType || content.jquery)) {
        // Content is a DOM node or a jQuery
        if (this.config.html) {
          if (!$__default['default'](content).parent().is($element)) {
            $element.empty().append(content);
          }
        } else {
          $element.text($__default['default'](content).text());
        }

        return;
      }

      if (this.config.html) {
        if (this.config.sanitize) {
          content = sanitizeHtml(content, this.config.whiteList, this.config.sanitizeFn);
        }

        $element.html(content);
      } else {
        $element.text(content);
      }
    };

    _proto.getTitle = function getTitle() {
      var title = this.element.getAttribute('data-original-title');

      if (!title) {
        title = typeof this.config.title === 'function' ? this.config.title.call(this.element) : this.config.title;
      }

      return title;
    } // Private
    ;

    _proto._getPopperConfig = function _getPopperConfig(attachment) {
      var _this3 = this;

      var defaultBsConfig = {
        placement: attachment,
        modifiers: {
          offset: this._getOffset(),
          flip: {
            behavior: this.config.fallbackPlacement
          },
          arrow: {
            element: SELECTOR_ARROW
          },
          preventOverflow: {
            boundariesElement: this.config.boundary
          }
        },
        onCreate: function onCreate(data) {
          if (data.originalPlacement !== data.placement) {
            _this3._handlePopperPlacementChange(data);
          }
        },
        onUpdate: function onUpdate(data) {
          return _this3._handlePopperPlacementChange(data);
        }
      };
      return _extends({}, defaultBsConfig, this.config.popperConfig);
    };

    _proto._getOffset = function _getOffset() {
      var _this4 = this;

      var offset = {};

      if (typeof this.config.offset === 'function') {
        offset.fn = function (data) {
          data.offsets = _extends({}, data.offsets, _this4.config.offset(data.offsets, _this4.element) || {});
          return data;
        };
      } else {
        offset.offset = this.config.offset;
      }

      return offset;
    };

    _proto._getContainer = function _getContainer() {
      if (this.config.container === false) {
        return document.body;
      }

      if (Util.isElement(this.config.container)) {
        return $__default['default'](this.config.container);
      }

      return $__default['default'](document).find(this.config.container);
    };

    _proto._getAttachment = function _getAttachment(placement) {
      return AttachmentMap[placement.toUpperCase()];
    };

    _proto._setListeners = function _setListeners() {
      var _this5 = this;

      var triggers = this.config.trigger.split(' ');
      triggers.forEach(function (trigger) {
        if (trigger === 'click') {
          $__default['default'](_this5.element).on(_this5.constructor.Event.CLICK, _this5.config.selector, function (event) {
            return _this5.toggle(event);
          });
        } else if (trigger !== TRIGGER_MANUAL) {
          var eventIn = trigger === TRIGGER_HOVER ? _this5.constructor.Event.MOUSEENTER : _this5.constructor.Event.FOCUSIN;
          var eventOut = trigger === TRIGGER_HOVER ? _this5.constructor.Event.MOUSELEAVE : _this5.constructor.Event.FOCUSOUT;
          $__default['default'](_this5.element).on(eventIn, _this5.config.selector, function (event) {
            return _this5._enter(event);
          }).on(eventOut, _this5.config.selector, function (event) {
            return _this5._leave(event);
          });
        }
      });

      this._hideModalHandler = function () {
        if (_this5.element) {
          _this5.hide();
        }
      };

      $__default['default'](this.element).closest('.modal').on('hide.bs.modal', this._hideModalHandler);

      if (this.config.selector) {
        this.config = _extends({}, this.config, {
          trigger: 'manual',
          selector: ''
        });
      } else {
        this._fixTitle();
      }
    };

    _proto._fixTitle = function _fixTitle() {
      var titleType = typeof this.element.getAttribute('data-original-title');

      if (this.element.getAttribute('title') || titleType !== 'string') {
        this.element.setAttribute('data-original-title', this.element.getAttribute('title') || '');
        this.element.setAttribute('title', '');
      }
    };

    _proto._enter = function _enter(event, context) {
      var dataKey = this.constructor.DATA_KEY;
      context = context || $__default['default'](event.currentTarget).data(dataKey);

      if (!context) {
        context = new this.constructor(event.currentTarget, this._getDelegateConfig());
        $__default['default'](event.currentTarget).data(dataKey, context);
      }

      if (event) {
        context._activeTrigger[event.type === 'focusin' ? TRIGGER_FOCUS : TRIGGER_HOVER] = true;
      }

      if ($__default['default'](context.getTipElement()).hasClass(CLASS_NAME_SHOW$4) || context._hoverState === HOVER_STATE_SHOW) {
        context._hoverState = HOVER_STATE_SHOW;
        return;
      }

      clearTimeout(context._timeout);
      context._hoverState = HOVER_STATE_SHOW;

      if (!context.config.delay || !context.config.delay.show) {
        context.show();
        return;
      }

      context._timeout = setTimeout(function () {
        if (context._hoverState === HOVER_STATE_SHOW) {
          context.show();
        }
      }, context.config.delay.show);
    };

    _proto._leave = function _leave(event, context) {
      var dataKey = this.constructor.DATA_KEY;
      context = context || $__default['default'](event.currentTarget).data(dataKey);

      if (!context) {
        context = new this.constructor(event.currentTarget, this._getDelegateConfig());
        $__default['default'](event.currentTarget).data(dataKey, context);
      }

      if (event) {
        context._activeTrigger[event.type === 'focusout' ? TRIGGER_FOCUS : TRIGGER_HOVER] = false;
      }

      if (context._isWithActiveTrigger()) {
        return;
      }

      clearTimeout(context._timeout);
      context._hoverState = HOVER_STATE_OUT;

      if (!context.config.delay || !context.config.delay.hide) {
        context.hide();
        return;
      }

      context._timeout = setTimeout(function () {
        if (context._hoverState === HOVER_STATE_OUT) {
          context.hide();
        }
      }, context.config.delay.hide);
    };

    _proto._isWithActiveTrigger = function _isWithActiveTrigger() {
      for (var trigger in this._activeTrigger) {
        if (this._activeTrigger[trigger]) {
          return true;
        }
      }

      return false;
    };

    _proto._getConfig = function _getConfig(config) {
      var dataAttributes = $__default['default'](this.element).data();
      Object.keys(dataAttributes).forEach(function (dataAttr) {
        if (DISALLOWED_ATTRIBUTES.indexOf(dataAttr) !== -1) {
          delete dataAttributes[dataAttr];
        }
      });
      config = _extends({}, this.constructor.Default, dataAttributes, typeof config === 'object' && config ? config : {});

      if (typeof config.delay === 'number') {
        config.delay = {
          show: config.delay,
          hide: config.delay
        };
      }

      if (typeof config.title === 'number') {
        config.title = config.title.toString();
      }

      if (typeof config.content === 'number') {
        config.content = config.content.toString();
      }

      Util.typeCheckConfig(NAME$6, config, this.constructor.DefaultType);

      if (config.sanitize) {
        config.template = sanitizeHtml(config.template, config.whiteList, config.sanitizeFn);
      }

      return config;
    };

    _proto._getDelegateConfig = function _getDelegateConfig() {
      var config = {};

      if (this.config) {
        for (var key in this.config) {
          if (this.constructor.Default[key] !== this.config[key]) {
            config[key] = this.config[key];
          }
        }
      }

      return config;
    };

    _proto._cleanTipClass = function _cleanTipClass() {
      var $tip = $__default['default'](this.getTipElement());
      var tabClass = $tip.attr('class').match(BSCLS_PREFIX_REGEX);

      if (tabClass !== null && tabClass.length) {
        $tip.removeClass(tabClass.join(''));
      }
    };

    _proto._handlePopperPlacementChange = function _handlePopperPlacementChange(popperData) {
      this.tip = popperData.instance.popper;

      this._cleanTipClass();

      this.addAttachmentClass(this._getAttachment(popperData.placement));
    };

    _proto._fixTransition = function _fixTransition() {
      var tip = this.getTipElement();
      var initConfigAnimation = this.config.animation;

      if (tip.getAttribute('x-placement') !== null) {
        return;
      }

      $__default['default'](tip).removeClass(CLASS_NAME_FADE$2);
      this.config.animation = false;
      this.hide();
      this.show();
      this.config.animation = initConfigAnimation;
    } // Static
    ;

    Tooltip._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var $element = $__default['default'](this);
        var data = $element.data(DATA_KEY$6);

        var _config = typeof config === 'object' && config;

        if (!data && /dispose|hide/.test(config)) {
          return;
        }

        if (!data) {
          data = new Tooltip(this, _config);
          $element.data(DATA_KEY$6, data);
        }

        if (typeof config === 'string') {
          if (typeof data[config] === 'undefined') {
            throw new TypeError("No method named \"" + config + "\"");
          }

          data[config]();
        }
      });
    };

    _createClass(Tooltip, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$6;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$4;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$6;
      }
    }, {
      key: "DATA_KEY",
      get: function get() {
        return DATA_KEY$6;
      }
    }, {
      key: "Event",
      get: function get() {
        return Event;
      }
    }, {
      key: "EVENT_KEY",
      get: function get() {
        return EVENT_KEY$6;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$4;
      }
    }]);

    return Tooltip;
  }();
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */


  $__default['default'].fn[NAME$6] = Tooltip._jQueryInterface;
  $__default['default'].fn[NAME$6].Constructor = Tooltip;

  $__default['default'].fn[NAME$6].noConflict = function () {
    $__default['default'].fn[NAME$6] = JQUERY_NO_CONFLICT$6;
    return Tooltip._jQueryInterface;
  };

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$7 = 'popover';
  var VERSION$7 = '4.6.0';
  var DATA_KEY$7 = 'bs.popover';
  var EVENT_KEY$7 = "." + DATA_KEY$7;
  var JQUERY_NO_CONFLICT$7 = $__default['default'].fn[NAME$7];
  var CLASS_PREFIX$1 = 'bs-popover';
  var BSCLS_PREFIX_REGEX$1 = new RegExp("(^|\\s)" + CLASS_PREFIX$1 + "\\S+", 'g');

  var Default$5 = _extends({}, Tooltip.Default, {
    placement: 'right',
    trigger: 'click',
    content: '',
    template: '<div class="popover" role="tooltip">' + '<div class="arrow"></div>' + '<h3 class="popover-header"></h3>' + '<div class="popover-body"></div></div>'
  });

  var DefaultType$5 = _extends({}, Tooltip.DefaultType, {
    content: '(string|element|function)'
  });

  var CLASS_NAME_FADE$3 = 'fade';
  var CLASS_NAME_SHOW$5 = 'show';
  var SELECTOR_TITLE = '.popover-header';
  var SELECTOR_CONTENT = '.popover-body';
  var Event$1 = {
    HIDE: "hide" + EVENT_KEY$7,
    HIDDEN: "hidden" + EVENT_KEY$7,
    SHOW: "show" + EVENT_KEY$7,
    SHOWN: "shown" + EVENT_KEY$7,
    INSERTED: "inserted" + EVENT_KEY$7,
    CLICK: "click" + EVENT_KEY$7,
    FOCUSIN: "focusin" + EVENT_KEY$7,
    FOCUSOUT: "focusout" + EVENT_KEY$7,
    MOUSEENTER: "mouseenter" + EVENT_KEY$7,
    MOUSELEAVE: "mouseleave" + EVENT_KEY$7
  };
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Popover = /*#__PURE__*/function (_Tooltip) {
    _inheritsLoose(Popover, _Tooltip);

    function Popover() {
      return _Tooltip.apply(this, arguments) || this;
    }

    var _proto = Popover.prototype;

    // Overrides
    _proto.isWithContent = function isWithContent() {
      return this.getTitle() || this._getContent();
    };

    _proto.addAttachmentClass = function addAttachmentClass(attachment) {
      $__default['default'](this.getTipElement()).addClass(CLASS_PREFIX$1 + "-" + attachment);
    };

    _proto.getTipElement = function getTipElement() {
      this.tip = this.tip || $__default['default'](this.config.template)[0];
      return this.tip;
    };

    _proto.setContent = function setContent() {
      var $tip = $__default['default'](this.getTipElement()); // We use append for html objects to maintain js events

      this.setElementContent($tip.find(SELECTOR_TITLE), this.getTitle());

      var content = this._getContent();

      if (typeof content === 'function') {
        content = content.call(this.element);
      }

      this.setElementContent($tip.find(SELECTOR_CONTENT), content);
      $tip.removeClass(CLASS_NAME_FADE$3 + " " + CLASS_NAME_SHOW$5);
    } // Private
    ;

    _proto._getContent = function _getContent() {
      return this.element.getAttribute('data-content') || this.config.content;
    };

    _proto._cleanTipClass = function _cleanTipClass() {
      var $tip = $__default['default'](this.getTipElement());
      var tabClass = $tip.attr('class').match(BSCLS_PREFIX_REGEX$1);

      if (tabClass !== null && tabClass.length > 0) {
        $tip.removeClass(tabClass.join(''));
      }
    } // Static
    ;

    Popover._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var data = $__default['default'](this).data(DATA_KEY$7);

        var _config = typeof config === 'object' ? config : null;

        if (!data && /dispose|hide/.test(config)) {
          return;
        }

        if (!data) {
          data = new Popover(this, _config);
          $__default['default'](this).data(DATA_KEY$7, data);
        }

        if (typeof config === 'string') {
          if (typeof data[config] === 'undefined') {
            throw new TypeError("No method named \"" + config + "\"");
          }

          data[config]();
        }
      });
    };

    _createClass(Popover, null, [{
      key: "VERSION",
      // Getters
      get: function get() {
        return VERSION$7;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$5;
      }
    }, {
      key: "NAME",
      get: function get() {
        return NAME$7;
      }
    }, {
      key: "DATA_KEY",
      get: function get() {
        return DATA_KEY$7;
      }
    }, {
      key: "Event",
      get: function get() {
        return Event$1;
      }
    }, {
      key: "EVENT_KEY",
      get: function get() {
        return EVENT_KEY$7;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$5;
      }
    }]);

    return Popover;
  }(Tooltip);
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */


  $__default['default'].fn[NAME$7] = Popover._jQueryInterface;
  $__default['default'].fn[NAME$7].Constructor = Popover;

  $__default['default'].fn[NAME$7].noConflict = function () {
    $__default['default'].fn[NAME$7] = JQUERY_NO_CONFLICT$7;
    return Popover._jQueryInterface;
  };

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$8 = 'scrollspy';
  var VERSION$8 = '4.6.0';
  var DATA_KEY$8 = 'bs.scrollspy';
  var EVENT_KEY$8 = "." + DATA_KEY$8;
  var DATA_API_KEY$6 = '.data-api';
  var JQUERY_NO_CONFLICT$8 = $__default['default'].fn[NAME$8];
  var Default$6 = {
    offset: 10,
    method: 'auto',
    target: ''
  };
  var DefaultType$6 = {
    offset: 'number',
    method: 'string',
    target: '(string|element)'
  };
  var EVENT_ACTIVATE = "activate" + EVENT_KEY$8;
  var EVENT_SCROLL = "scroll" + EVENT_KEY$8;
  var EVENT_LOAD_DATA_API$2 = "load" + EVENT_KEY$8 + DATA_API_KEY$6;
  var CLASS_NAME_DROPDOWN_ITEM = 'dropdown-item';
  var CLASS_NAME_ACTIVE$2 = 'active';
  var SELECTOR_DATA_SPY = '[data-spy="scroll"]';
  var SELECTOR_NAV_LIST_GROUP = '.nav, .list-group';
  var SELECTOR_NAV_LINKS = '.nav-link';
  var SELECTOR_NAV_ITEMS = '.nav-item';
  var SELECTOR_LIST_ITEMS = '.list-group-item';
  var SELECTOR_DROPDOWN = '.dropdown';
  var SELECTOR_DROPDOWN_ITEMS = '.dropdown-item';
  var SELECTOR_DROPDOWN_TOGGLE = '.dropdown-toggle';
  var METHOD_OFFSET = 'offset';
  var METHOD_POSITION = 'position';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var ScrollSpy = /*#__PURE__*/function () {
    function ScrollSpy(element, config) {
      var _this = this;

      this._element = element;
      this._scrollElement = element.tagName === 'BODY' ? window : element;
      this._config = this._getConfig(config);
      this._selector = this._config.target + " " + SELECTOR_NAV_LINKS + "," + (this._config.target + " " + SELECTOR_LIST_ITEMS + ",") + (this._config.target + " " + SELECTOR_DROPDOWN_ITEMS);
      this._offsets = [];
      this._targets = [];
      this._activeTarget = null;
      this._scrollHeight = 0;
      $__default['default'](this._scrollElement).on(EVENT_SCROLL, function (event) {
        return _this._process(event);
      });
      this.refresh();

      this._process();
    } // Getters


    var _proto = ScrollSpy.prototype;

    // Public
    _proto.refresh = function refresh() {
      var _this2 = this;

      var autoMethod = this._scrollElement === this._scrollElement.window ? METHOD_OFFSET : METHOD_POSITION;
      var offsetMethod = this._config.method === 'auto' ? autoMethod : this._config.method;
      var offsetBase = offsetMethod === METHOD_POSITION ? this._getScrollTop() : 0;
      this._offsets = [];
      this._targets = [];
      this._scrollHeight = this._getScrollHeight();
      var targets = [].slice.call(document.querySelectorAll(this._selector));
      targets.map(function (element) {
        var target;
        var targetSelector = Util.getSelectorFromElement(element);

        if (targetSelector) {
          target = document.querySelector(targetSelector);
        }

        if (target) {
          var targetBCR = target.getBoundingClientRect();

          if (targetBCR.width || targetBCR.height) {
            // TODO (fat): remove sketch reliance on jQuery position/offset
            return [$__default['default'](target)[offsetMethod]().top + offsetBase, targetSelector];
          }
        }

        return null;
      }).filter(function (item) {
        return item;
      }).sort(function (a, b) {
        return a[0] - b[0];
      }).forEach(function (item) {
        _this2._offsets.push(item[0]);

        _this2._targets.push(item[1]);
      });
    };

    _proto.dispose = function dispose() {
      $__default['default'].removeData(this._element, DATA_KEY$8);
      $__default['default'](this._scrollElement).off(EVENT_KEY$8);
      this._element = null;
      this._scrollElement = null;
      this._config = null;
      this._selector = null;
      this._offsets = null;
      this._targets = null;
      this._activeTarget = null;
      this._scrollHeight = null;
    } // Private
    ;

    _proto._getConfig = function _getConfig(config) {
      config = _extends({}, Default$6, typeof config === 'object' && config ? config : {});

      if (typeof config.target !== 'string' && Util.isElement(config.target)) {
        var id = $__default['default'](config.target).attr('id');

        if (!id) {
          id = Util.getUID(NAME$8);
          $__default['default'](config.target).attr('id', id);
        }

        config.target = "#" + id;
      }

      Util.typeCheckConfig(NAME$8, config, DefaultType$6);
      return config;
    };

    _proto._getScrollTop = function _getScrollTop() {
      return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop;
    };

    _proto._getScrollHeight = function _getScrollHeight() {
      return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
    };

    _proto._getOffsetHeight = function _getOffsetHeight() {
      return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height;
    };

    _proto._process = function _process() {
      var scrollTop = this._getScrollTop() + this._config.offset;

      var scrollHeight = this._getScrollHeight();

      var maxScroll = this._config.offset + scrollHeight - this._getOffsetHeight();

      if (this._scrollHeight !== scrollHeight) {
        this.refresh();
      }

      if (scrollTop >= maxScroll) {
        var target = this._targets[this._targets.length - 1];

        if (this._activeTarget !== target) {
          this._activate(target);
        }

        return;
      }

      if (this._activeTarget && scrollTop < this._offsets[0] && this._offsets[0] > 0) {
        this._activeTarget = null;

        this._clear();

        return;
      }

      for (var i = this._offsets.length; i--;) {
        var isActiveTarget = this._activeTarget !== this._targets[i] && scrollTop >= this._offsets[i] && (typeof this._offsets[i + 1] === 'undefined' || scrollTop < this._offsets[i + 1]);

        if (isActiveTarget) {
          this._activate(this._targets[i]);
        }
      }
    };

    _proto._activate = function _activate(target) {
      this._activeTarget = target;

      this._clear();

      var queries = this._selector.split(',').map(function (selector) {
        return selector + "[data-target=\"" + target + "\"]," + selector + "[href=\"" + target + "\"]";
      });

      var $link = $__default['default']([].slice.call(document.querySelectorAll(queries.join(','))));

      if ($link.hasClass(CLASS_NAME_DROPDOWN_ITEM)) {
        $link.closest(SELECTOR_DROPDOWN).find(SELECTOR_DROPDOWN_TOGGLE).addClass(CLASS_NAME_ACTIVE$2);
        $link.addClass(CLASS_NAME_ACTIVE$2);
      } else {
        // Set triggered link as active
        $link.addClass(CLASS_NAME_ACTIVE$2); // Set triggered links parents as active
        // With both <ul> and <nav> markup a parent is the previous sibling of any nav ancestor

        $link.parents(SELECTOR_NAV_LIST_GROUP).prev(SELECTOR_NAV_LINKS + ", " + SELECTOR_LIST_ITEMS).addClass(CLASS_NAME_ACTIVE$2); // Handle special case when .nav-link is inside .nav-item

        $link.parents(SELECTOR_NAV_LIST_GROUP).prev(SELECTOR_NAV_ITEMS).children(SELECTOR_NAV_LINKS).addClass(CLASS_NAME_ACTIVE$2);
      }

      $__default['default'](this._scrollElement).trigger(EVENT_ACTIVATE, {
        relatedTarget: target
      });
    };

    _proto._clear = function _clear() {
      [].slice.call(document.querySelectorAll(this._selector)).filter(function (node) {
        return node.classList.contains(CLASS_NAME_ACTIVE$2);
      }).forEach(function (node) {
        return node.classList.remove(CLASS_NAME_ACTIVE$2);
      });
    } // Static
    ;

    ScrollSpy._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var data = $__default['default'](this).data(DATA_KEY$8);

        var _config = typeof config === 'object' && config;

        if (!data) {
          data = new ScrollSpy(this, _config);
          $__default['default'](this).data(DATA_KEY$8, data);
        }

        if (typeof config === 'string') {
          if (typeof data[config] === 'undefined') {
            throw new TypeError("No method named \"" + config + "\"");
          }

          data[config]();
        }
      });
    };

    _createClass(ScrollSpy, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$8;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$6;
      }
    }]);

    return ScrollSpy;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */


  $__default['default'](window).on(EVENT_LOAD_DATA_API$2, function () {
    var scrollSpys = [].slice.call(document.querySelectorAll(SELECTOR_DATA_SPY));
    var scrollSpysLength = scrollSpys.length;

    for (var i = scrollSpysLength; i--;) {
      var $spy = $__default['default'](scrollSpys[i]);

      ScrollSpy._jQueryInterface.call($spy, $spy.data());
    }
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  $__default['default'].fn[NAME$8] = ScrollSpy._jQueryInterface;
  $__default['default'].fn[NAME$8].Constructor = ScrollSpy;

  $__default['default'].fn[NAME$8].noConflict = function () {
    $__default['default'].fn[NAME$8] = JQUERY_NO_CONFLICT$8;
    return ScrollSpy._jQueryInterface;
  };

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$9 = 'tab';
  var VERSION$9 = '4.6.0';
  var DATA_KEY$9 = 'bs.tab';
  var EVENT_KEY$9 = "." + DATA_KEY$9;
  var DATA_API_KEY$7 = '.data-api';
  var JQUERY_NO_CONFLICT$9 = $__default['default'].fn[NAME$9];
  var EVENT_HIDE$3 = "hide" + EVENT_KEY$9;
  var EVENT_HIDDEN$3 = "hidden" + EVENT_KEY$9;
  var EVENT_SHOW$3 = "show" + EVENT_KEY$9;
  var EVENT_SHOWN$3 = "shown" + EVENT_KEY$9;
  var EVENT_CLICK_DATA_API$6 = "click" + EVENT_KEY$9 + DATA_API_KEY$7;
  var CLASS_NAME_DROPDOWN_MENU = 'dropdown-menu';
  var CLASS_NAME_ACTIVE$3 = 'active';
  var CLASS_NAME_DISABLED$1 = 'disabled';
  var CLASS_NAME_FADE$4 = 'fade';
  var CLASS_NAME_SHOW$6 = 'show';
  var SELECTOR_DROPDOWN$1 = '.dropdown';
  var SELECTOR_NAV_LIST_GROUP$1 = '.nav, .list-group';
  var SELECTOR_ACTIVE$2 = '.active';
  var SELECTOR_ACTIVE_UL = '> li > .active';
  var SELECTOR_DATA_TOGGLE$4 = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]';
  var SELECTOR_DROPDOWN_TOGGLE$1 = '.dropdown-toggle';
  var SELECTOR_DROPDOWN_ACTIVE_CHILD = '> .dropdown-menu .active';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Tab = /*#__PURE__*/function () {
    function Tab(element) {
      this._element = element;
    } // Getters


    var _proto = Tab.prototype;

    // Public
    _proto.show = function show() {
      var _this = this;

      if (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && $__default['default'](this._element).hasClass(CLASS_NAME_ACTIVE$3) || $__default['default'](this._element).hasClass(CLASS_NAME_DISABLED$1)) {
        return;
      }

      var target;
      var previous;
      var listElement = $__default['default'](this._element).closest(SELECTOR_NAV_LIST_GROUP$1)[0];
      var selector = Util.getSelectorFromElement(this._element);

      if (listElement) {
        var itemSelector = listElement.nodeName === 'UL' || listElement.nodeName === 'OL' ? SELECTOR_ACTIVE_UL : SELECTOR_ACTIVE$2;
        previous = $__default['default'].makeArray($__default['default'](listElement).find(itemSelector));
        previous = previous[previous.length - 1];
      }

      var hideEvent = $__default['default'].Event(EVENT_HIDE$3, {
        relatedTarget: this._element
      });
      var showEvent = $__default['default'].Event(EVENT_SHOW$3, {
        relatedTarget: previous
      });

      if (previous) {
        $__default['default'](previous).trigger(hideEvent);
      }

      $__default['default'](this._element).trigger(showEvent);

      if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) {
        return;
      }

      if (selector) {
        target = document.querySelector(selector);
      }

      this._activate(this._element, listElement);

      var complete = function complete() {
        var hiddenEvent = $__default['default'].Event(EVENT_HIDDEN$3, {
          relatedTarget: _this._element
        });
        var shownEvent = $__default['default'].Event(EVENT_SHOWN$3, {
          relatedTarget: previous
        });
        $__default['default'](previous).trigger(hiddenEvent);
        $__default['default'](_this._element).trigger(shownEvent);
      };

      if (target) {
        this._activate(target, target.parentNode, complete);
      } else {
        complete();
      }
    };

    _proto.dispose = function dispose() {
      $__default['default'].removeData(this._element, DATA_KEY$9);
      this._element = null;
    } // Private
    ;

    _proto._activate = function _activate(element, container, callback) {
      var _this2 = this;

      var activeElements = container && (container.nodeName === 'UL' || container.nodeName === 'OL') ? $__default['default'](container).find(SELECTOR_ACTIVE_UL) : $__default['default'](container).children(SELECTOR_ACTIVE$2);
      var active = activeElements[0];
      var isTransitioning = callback && active && $__default['default'](active).hasClass(CLASS_NAME_FADE$4);

      var complete = function complete() {
        return _this2._transitionComplete(element, active, callback);
      };

      if (active && isTransitioning) {
        var transitionDuration = Util.getTransitionDurationFromElement(active);
        $__default['default'](active).removeClass(CLASS_NAME_SHOW$6).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
      } else {
        complete();
      }
    };

    _proto._transitionComplete = function _transitionComplete(element, active, callback) {
      if (active) {
        $__default['default'](active).removeClass(CLASS_NAME_ACTIVE$3);
        var dropdownChild = $__default['default'](active.parentNode).find(SELECTOR_DROPDOWN_ACTIVE_CHILD)[0];

        if (dropdownChild) {
          $__default['default'](dropdownChild).removeClass(CLASS_NAME_ACTIVE$3);
        }

        if (active.getAttribute('role') === 'tab') {
          active.setAttribute('aria-selected', false);
        }
      }

      $__default['default'](element).addClass(CLASS_NAME_ACTIVE$3);

      if (element.getAttribute('role') === 'tab') {
        element.setAttribute('aria-selected', true);
      }

      Util.reflow(element);

      if (element.classList.contains(CLASS_NAME_FADE$4)) {
        element.classList.add(CLASS_NAME_SHOW$6);
      }

      if (element.parentNode && $__default['default'](element.parentNode).hasClass(CLASS_NAME_DROPDOWN_MENU)) {
        var dropdownElement = $__default['default'](element).closest(SELECTOR_DROPDOWN$1)[0];

        if (dropdownElement) {
          var dropdownToggleList = [].slice.call(dropdownElement.querySelectorAll(SELECTOR_DROPDOWN_TOGGLE$1));
          $__default['default'](dropdownToggleList).addClass(CLASS_NAME_ACTIVE$3);
        }

        element.setAttribute('aria-expanded', true);
      }

      if (callback) {
        callback();
      }
    } // Static
    ;

    Tab._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var $this = $__default['default'](this);
        var data = $this.data(DATA_KEY$9);

        if (!data) {
          data = new Tab(this);
          $this.data(DATA_KEY$9, data);
        }

        if (typeof config === 'string') {
          if (typeof data[config] === 'undefined') {
            throw new TypeError("No method named \"" + config + "\"");
          }

          data[config]();
        }
      });
    };

    _createClass(Tab, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$9;
      }
    }]);

    return Tab;
  }();
  /**
   * ------------------------------------------------------------------------
   * Data Api implementation
   * ------------------------------------------------------------------------
   */


  $__default['default'](document).on(EVENT_CLICK_DATA_API$6, SELECTOR_DATA_TOGGLE$4, function (event) {
    event.preventDefault();

    Tab._jQueryInterface.call($__default['default'](this), 'show');
  });
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */

  $__default['default'].fn[NAME$9] = Tab._jQueryInterface;
  $__default['default'].fn[NAME$9].Constructor = Tab;

  $__default['default'].fn[NAME$9].noConflict = function () {
    $__default['default'].fn[NAME$9] = JQUERY_NO_CONFLICT$9;
    return Tab._jQueryInterface;
  };

  /**
   * ------------------------------------------------------------------------
   * Constants
   * ------------------------------------------------------------------------
   */

  var NAME$a = 'toast';
  var VERSION$a = '4.6.0';
  var DATA_KEY$a = 'bs.toast';
  var EVENT_KEY$a = "." + DATA_KEY$a;
  var JQUERY_NO_CONFLICT$a = $__default['default'].fn[NAME$a];
  var EVENT_CLICK_DISMISS$1 = "click.dismiss" + EVENT_KEY$a;
  var EVENT_HIDE$4 = "hide" + EVENT_KEY$a;
  var EVENT_HIDDEN$4 = "hidden" + EVENT_KEY$a;
  var EVENT_SHOW$4 = "show" + EVENT_KEY$a;
  var EVENT_SHOWN$4 = "shown" + EVENT_KEY$a;
  var CLASS_NAME_FADE$5 = 'fade';
  var CLASS_NAME_HIDE = 'hide';
  var CLASS_NAME_SHOW$7 = 'show';
  var CLASS_NAME_SHOWING = 'showing';
  var DefaultType$7 = {
    animation: 'boolean',
    autohide: 'boolean',
    delay: 'number'
  };
  var Default$7 = {
    animation: true,
    autohide: true,
    delay: 500
  };
  var SELECTOR_DATA_DISMISS$1 = '[data-dismiss="toast"]';
  /**
   * ------------------------------------------------------------------------
   * Class Definition
   * ------------------------------------------------------------------------
   */

  var Toast = /*#__PURE__*/function () {
    function Toast(element, config) {
      this._element = element;
      this._config = this._getConfig(config);
      this._timeout = null;

      this._setListeners();
    } // Getters


    var _proto = Toast.prototype;

    // Public
    _proto.show = function show() {
      var _this = this;

      var showEvent = $__default['default'].Event(EVENT_SHOW$4);
      $__default['default'](this._element).trigger(showEvent);

      if (showEvent.isDefaultPrevented()) {
        return;
      }

      this._clearTimeout();

      if (this._config.animation) {
        this._element.classList.add(CLASS_NAME_FADE$5);
      }

      var complete = function complete() {
        _this._element.classList.remove(CLASS_NAME_SHOWING);

        _this._element.classList.add(CLASS_NAME_SHOW$7);

        $__default['default'](_this._element).trigger(EVENT_SHOWN$4);

        if (_this._config.autohide) {
          _this._timeout = setTimeout(function () {
            _this.hide();
          }, _this._config.delay);
        }
      };

      this._element.classList.remove(CLASS_NAME_HIDE);

      Util.reflow(this._element);

      this._element.classList.add(CLASS_NAME_SHOWING);

      if (this._config.animation) {
        var transitionDuration = Util.getTransitionDurationFromElement(this._element);
        $__default['default'](this._element).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
      } else {
        complete();
      }
    };

    _proto.hide = function hide() {
      if (!this._element.classList.contains(CLASS_NAME_SHOW$7)) {
        return;
      }

      var hideEvent = $__default['default'].Event(EVENT_HIDE$4);
      $__default['default'](this._element).trigger(hideEvent);

      if (hideEvent.isDefaultPrevented()) {
        return;
      }

      this._close();
    };

    _proto.dispose = function dispose() {
      this._clearTimeout();

      if (this._element.classList.contains(CLASS_NAME_SHOW$7)) {
        this._element.classList.remove(CLASS_NAME_SHOW$7);
      }

      $__default['default'](this._element).off(EVENT_CLICK_DISMISS$1);
      $__default['default'].removeData(this._element, DATA_KEY$a);
      this._element = null;
      this._config = null;
    } // Private
    ;

    _proto._getConfig = function _getConfig(config) {
      config = _extends({}, Default$7, $__default['default'](this._element).data(), typeof config === 'object' && config ? config : {});
      Util.typeCheckConfig(NAME$a, config, this.constructor.DefaultType);
      return config;
    };

    _proto._setListeners = function _setListeners() {
      var _this2 = this;

      $__default['default'](this._element).on(EVENT_CLICK_DISMISS$1, SELECTOR_DATA_DISMISS$1, function () {
        return _this2.hide();
      });
    };

    _proto._close = function _close() {
      var _this3 = this;

      var complete = function complete() {
        _this3._element.classList.add(CLASS_NAME_HIDE);

        $__default['default'](_this3._element).trigger(EVENT_HIDDEN$4);
      };

      this._element.classList.remove(CLASS_NAME_SHOW$7);

      if (this._config.animation) {
        var transitionDuration = Util.getTransitionDurationFromElement(this._element);
        $__default['default'](this._element).one(Util.TRANSITION_END, complete).emulateTransitionEnd(transitionDuration);
      } else {
        complete();
      }
    };

    _proto._clearTimeout = function _clearTimeout() {
      clearTimeout(this._timeout);
      this._timeout = null;
    } // Static
    ;

    Toast._jQueryInterface = function _jQueryInterface(config) {
      return this.each(function () {
        var $element = $__default['default'](this);
        var data = $element.data(DATA_KEY$a);

        var _config = typeof config === 'object' && config;

        if (!data) {
          data = new Toast(this, _config);
          $element.data(DATA_KEY$a, data);
        }

        if (typeof config === 'string') {
          if (typeof data[config] === 'undefined') {
            throw new TypeError("No method named \"" + config + "\"");
          }

          data[config](this);
        }
      });
    };

    _createClass(Toast, null, [{
      key: "VERSION",
      get: function get() {
        return VERSION$a;
      }
    }, {
      key: "DefaultType",
      get: function get() {
        return DefaultType$7;
      }
    }, {
      key: "Default",
      get: function get() {
        return Default$7;
      }
    }]);

    return Toast;
  }();
  /**
   * ------------------------------------------------------------------------
   * jQuery
   * ------------------------------------------------------------------------
   */


  $__default['default'].fn[NAME$a] = Toast._jQueryInterface;
  $__default['default'].fn[NAME$a].Constructor = Toast;

  $__default['default'].fn[NAME$a].noConflict = function () {
    $__default['default'].fn[NAME$a] = JQUERY_NO_CONFLICT$a;
    return Toast._jQueryInterface;
  };

  exports.Alert = Alert;
  exports.Button = Button;
  exports.Carousel = Carousel;
  exports.Collapse = Collapse;
  exports.Dropdown = Dropdown;
  exports.Modal = Modal;
  exports.Popover = Popover;
  exports.Scrollspy = ScrollSpy;
  exports.Tab = Tab;
  exports.Toast = Toast;
  exports.Tooltip = Tooltip;
  exports.Util = Util;

  Object.defineProperty(exports, '__esModule', { value: true });

})));
//# sourceMappingURL=bootstrap.bundle.js-2d6c6bf475892e48c2debe0ef7b08c50.map
";s:6:"digest";s:32:"3c5525eca3fb0e858f63913f04641f6f";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:45:"Symfony\Component\AssetMapper\AssetDependency":3:{s:5:"asset";O:41:"Symfony\Component\AssetMapper\MappedAsset":10:{s:10:"sourcePath";s:76:"C:\wamp64\www\kardini_app\assets\vendor\bootstrap\js\bootstrap.bundle.js.map";s:10:"publicPath";s:84:"/assets/vendor/bootstrap/js/bootstrap.bundle.js-2d6c6bf475892e48c2debe0ef7b08c50.map";s:23:"publicPathWithoutDigest";s:51:"/assets/vendor/bootstrap/js/bootstrap.bundle.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";s:409586:"{"version":3,"file":"bootstrap.bundle.js","sources":["../../js/src/util.js","../../js/src/alert.js","../../js/src/button.js","../../js/src/carousel.js","../../js/src/collapse.js","../../node_modules/popper.js/dist/esm/popper.js","../../js/src/dropdown.js","../../js/src/modal.js","../../js/src/tools/sanitizer.js","../../js/src/tooltip.js","../../js/src/popover.js","../../js/src/scrollspy.js","../../js/src/tab.js","../../js/src/toast.js"],"sourcesContent":["/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): util.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\n\n/**\n * ------------------------------------------------------------------------\n * Private TransitionEnd Helpers\n * ------------------------------------------------------------------------\n */\n\nconst TRANSITION_END = 'transitionend'\nconst MAX_UID = 1000000\nconst MILLISECONDS_MULTIPLIER = 1000\n\n// Shoutout AngusCroll (https://goo.gl/pxwQGp)\nfunction toType(obj) {\n  if (obj === null || typeof obj === 'undefined') {\n    return `${obj}`\n  }\n\n  return {}.toString.call(obj).match(/\\s([a-z]+)/i)[1].toLowerCase()\n}\n\nfunction getSpecialTransitionEndEvent() {\n  return {\n    bindType: TRANSITION_END,\n    delegateType: TRANSITION_END,\n    handle(event) {\n      if ($(event.target).is(this)) {\n        return event.handleObj.handler.apply(this, arguments) // eslint-disable-line prefer-rest-params\n      }\n\n      return undefined\n    }\n  }\n}\n\nfunction transitionEndEmulator(duration) {\n  let called = false\n\n  $(this).one(Util.TRANSITION_END, () => {\n    called = true\n  })\n\n  setTimeout(() => {\n    if (!called) {\n      Util.triggerTransitionEnd(this)\n    }\n  }, duration)\n\n  return this\n}\n\nfunction setTransitionEndSupport() {\n  $.fn.emulateTransitionEnd = transitionEndEmulator\n  $.event.special[Util.TRANSITION_END] = getSpecialTransitionEndEvent()\n}\n\n/**\n * --------------------------------------------------------------------------\n * Public Util Api\n * --------------------------------------------------------------------------\n */\n\nconst Util = {\n  TRANSITION_END: 'bsTransitionEnd',\n\n  getUID(prefix) {\n    do {\n      prefix += ~~(Math.random() * MAX_UID) // \"~~\" acts like a faster Math.floor() here\n    } while (document.getElementById(prefix))\n\n    return prefix\n  },\n\n  getSelectorFromElement(element) {\n    let selector = element.getAttribute('data-target')\n\n    if (!selector || selector === '#') {\n      const hrefAttr = element.getAttribute('href')\n      selector = hrefAttr && hrefAttr !== '#' ? hrefAttr.trim() : ''\n    }\n\n    try {\n      return document.querySelector(selector) ? selector : null\n    } catch (_) {\n      return null\n    }\n  },\n\n  getTransitionDurationFromElement(element) {\n    if (!element) {\n      return 0\n    }\n\n    // Get transition-duration of the element\n    let transitionDuration = $(element).css('transition-duration')\n    let transitionDelay = $(element).css('transition-delay')\n\n    const floatTransitionDuration = parseFloat(transitionDuration)\n    const floatTransitionDelay = parseFloat(transitionDelay)\n\n    // Return 0 if element or transition duration is not found\n    if (!floatTransitionDuration && !floatTransitionDelay) {\n      return 0\n    }\n\n    // If multiple durations are defined, take the first\n    transitionDuration = transitionDuration.split(',')[0]\n    transitionDelay = transitionDelay.split(',')[0]\n\n    return (parseFloat(transitionDuration) + parseFloat(transitionDelay)) * MILLISECONDS_MULTIPLIER\n  },\n\n  reflow(element) {\n    return element.offsetHeight\n  },\n\n  triggerTransitionEnd(element) {\n    $(element).trigger(TRANSITION_END)\n  },\n\n  supportsTransitionEnd() {\n    return Boolean(TRANSITION_END)\n  },\n\n  isElement(obj) {\n    return (obj[0] || obj).nodeType\n  },\n\n  typeCheckConfig(componentName, config, configTypes) {\n    for (const property in configTypes) {\n      if (Object.prototype.hasOwnProperty.call(configTypes, property)) {\n        const expectedTypes = configTypes[property]\n        const value = config[property]\n        const valueType = value && Util.isElement(value) ?\n          'element' : toType(value)\n\n        if (!new RegExp(expectedTypes).test(valueType)) {\n          throw new Error(\n            `${componentName.toUpperCase()}: ` +\n            `Option \"${property}\" provided type \"${valueType}\" ` +\n            `but expected type \"${expectedTypes}\".`)\n        }\n      }\n    }\n  },\n\n  findShadowRoot(element) {\n    if (!document.documentElement.attachShadow) {\n      return null\n    }\n\n    // Can find the shadow root otherwise it'll return the document\n    if (typeof element.getRootNode === 'function') {\n      const root = element.getRootNode()\n      return root instanceof ShadowRoot ? root : null\n    }\n\n    if (element instanceof ShadowRoot) {\n      return element\n    }\n\n    // when we don't find a shadow root\n    if (!element.parentNode) {\n      return null\n    }\n\n    return Util.findShadowRoot(element.parentNode)\n  },\n\n  jQueryDetection() {\n    if (typeof $ === 'undefined') {\n      throw new TypeError('Bootstrap\\'s JavaScript requires jQuery. jQuery must be included before Bootstrap\\'s JavaScript.')\n    }\n\n    const version = $.fn.jquery.split(' ')[0].split('.')\n    const minMajor = 1\n    const ltMajor = 2\n    const minMinor = 9\n    const minPatch = 1\n    const maxMajor = 4\n\n    if (version[0] < ltMajor && version[1] < minMinor || version[0] === minMajor && version[1] === minMinor && version[2] < minPatch || version[0] >= maxMajor) {\n      throw new Error('Bootstrap\\'s JavaScript requires at least jQuery v1.9.1 but less than v4.0.0')\n    }\n  }\n}\n\nUtil.jQueryDetection()\nsetTransitionEndSupport()\n\nexport default Util\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): alert.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'alert'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.alert'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst DATA_API_KEY = '.data-api'\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\n\nconst SELECTOR_DISMISS = '[data-dismiss=\"alert\"]'\n\nconst EVENT_CLOSE = `close${EVENT_KEY}`\nconst EVENT_CLOSED = `closed${EVENT_KEY}`\nconst EVENT_CLICK_DATA_API = `click${EVENT_KEY}${DATA_API_KEY}`\n\nconst CLASS_NAME_ALERT = 'alert'\nconst CLASS_NAME_FADE = 'fade'\nconst CLASS_NAME_SHOW = 'show'\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Alert {\n  constructor(element) {\n    this._element = element\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  // Public\n\n  close(element) {\n    let rootElement = this._element\n    if (element) {\n      rootElement = this._getRootElement(element)\n    }\n\n    const customEvent = this._triggerCloseEvent(rootElement)\n\n    if (customEvent.isDefaultPrevented()) {\n      return\n    }\n\n    this._removeElement(rootElement)\n  }\n\n  dispose() {\n    $.removeData(this._element, DATA_KEY)\n    this._element = null\n  }\n\n  // Private\n\n  _getRootElement(element) {\n    const selector = Util.getSelectorFromElement(element)\n    let parent = false\n\n    if (selector) {\n      parent = document.querySelector(selector)\n    }\n\n    if (!parent) {\n      parent = $(element).closest(`.${CLASS_NAME_ALERT}`)[0]\n    }\n\n    return parent\n  }\n\n  _triggerCloseEvent(element) {\n    const closeEvent = $.Event(EVENT_CLOSE)\n\n    $(element).trigger(closeEvent)\n    return closeEvent\n  }\n\n  _removeElement(element) {\n    $(element).removeClass(CLASS_NAME_SHOW)\n\n    if (!$(element).hasClass(CLASS_NAME_FADE)) {\n      this._destroyElement(element)\n      return\n    }\n\n    const transitionDuration = Util.getTransitionDurationFromElement(element)\n\n    $(element)\n      .one(Util.TRANSITION_END, event => this._destroyElement(element, event))\n      .emulateTransitionEnd(transitionDuration)\n  }\n\n  _destroyElement(element) {\n    $(element)\n      .detach()\n      .trigger(EVENT_CLOSED)\n      .remove()\n  }\n\n  // Static\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      const $element = $(this)\n      let data = $element.data(DATA_KEY)\n\n      if (!data) {\n        data = new Alert(this)\n        $element.data(DATA_KEY, data)\n      }\n\n      if (config === 'close') {\n        data[config](this)\n      }\n    })\n  }\n\n  static _handleDismiss(alertInstance) {\n    return function (event) {\n      if (event) {\n        event.preventDefault()\n      }\n\n      alertInstance.close(this)\n    }\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * Data Api implementation\n * ------------------------------------------------------------------------\n */\n\n$(document).on(\n  EVENT_CLICK_DATA_API,\n  SELECTOR_DISMISS,\n  Alert._handleDismiss(new Alert())\n)\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Alert._jQueryInterface\n$.fn[NAME].Constructor = Alert\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Alert._jQueryInterface\n}\n\nexport default Alert\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): button.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'button'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.button'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst DATA_API_KEY = '.data-api'\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\n\nconst CLASS_NAME_ACTIVE = 'active'\nconst CLASS_NAME_BUTTON = 'btn'\nconst CLASS_NAME_FOCUS = 'focus'\n\nconst SELECTOR_DATA_TOGGLE_CARROT = '[data-toggle^=\"button\"]'\nconst SELECTOR_DATA_TOGGLES = '[data-toggle=\"buttons\"]'\nconst SELECTOR_DATA_TOGGLE = '[data-toggle=\"button\"]'\nconst SELECTOR_DATA_TOGGLES_BUTTONS = '[data-toggle=\"buttons\"] .btn'\nconst SELECTOR_INPUT = 'input:not([type=\"hidden\"])'\nconst SELECTOR_ACTIVE = '.active'\nconst SELECTOR_BUTTON = '.btn'\n\nconst EVENT_CLICK_DATA_API = `click${EVENT_KEY}${DATA_API_KEY}`\nconst EVENT_FOCUS_BLUR_DATA_API = `focus${EVENT_KEY}${DATA_API_KEY} ` +\n                          `blur${EVENT_KEY}${DATA_API_KEY}`\nconst EVENT_LOAD_DATA_API = `load${EVENT_KEY}${DATA_API_KEY}`\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Button {\n  constructor(element) {\n    this._element = element\n    this.shouldAvoidTriggerChange = false\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  // Public\n\n  toggle() {\n    let triggerChangeEvent = true\n    let addAriaPressed = true\n    const rootElement = $(this._element).closest(SELECTOR_DATA_TOGGLES)[0]\n\n    if (rootElement) {\n      const input = this._element.querySelector(SELECTOR_INPUT)\n\n      if (input) {\n        if (input.type === 'radio') {\n          if (input.checked && this._element.classList.contains(CLASS_NAME_ACTIVE)) {\n            triggerChangeEvent = false\n          } else {\n            const activeElement = rootElement.querySelector(SELECTOR_ACTIVE)\n\n            if (activeElement) {\n              $(activeElement).removeClass(CLASS_NAME_ACTIVE)\n            }\n          }\n        }\n\n        if (triggerChangeEvent) {\n          // if it's not a radio button or checkbox don't add a pointless/invalid checked property to the input\n          if (input.type === 'checkbox' || input.type === 'radio') {\n            input.checked = !this._element.classList.contains(CLASS_NAME_ACTIVE)\n          }\n\n          if (!this.shouldAvoidTriggerChange) {\n            $(input).trigger('change')\n          }\n        }\n\n        input.focus()\n        addAriaPressed = false\n      }\n    }\n\n    if (!(this._element.hasAttribute('disabled') || this._element.classList.contains('disabled'))) {\n      if (addAriaPressed) {\n        this._element.setAttribute('aria-pressed', !this._element.classList.contains(CLASS_NAME_ACTIVE))\n      }\n\n      if (triggerChangeEvent) {\n        $(this._element).toggleClass(CLASS_NAME_ACTIVE)\n      }\n    }\n  }\n\n  dispose() {\n    $.removeData(this._element, DATA_KEY)\n    this._element = null\n  }\n\n  // Static\n\n  static _jQueryInterface(config, avoidTriggerChange) {\n    return this.each(function () {\n      const $element = $(this)\n      let data = $element.data(DATA_KEY)\n\n      if (!data) {\n        data = new Button(this)\n        $element.data(DATA_KEY, data)\n      }\n\n      data.shouldAvoidTriggerChange = avoidTriggerChange\n\n      if (config === 'toggle') {\n        data[config]()\n      }\n    })\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * Data Api implementation\n * ------------------------------------------------------------------------\n */\n\n$(document)\n  .on(EVENT_CLICK_DATA_API, SELECTOR_DATA_TOGGLE_CARROT, event => {\n    let button = event.target\n    const initialButton = button\n\n    if (!$(button).hasClass(CLASS_NAME_BUTTON)) {\n      button = $(button).closest(SELECTOR_BUTTON)[0]\n    }\n\n    if (!button || button.hasAttribute('disabled') || button.classList.contains('disabled')) {\n      event.preventDefault() // work around Firefox bug #1540995\n    } else {\n      const inputBtn = button.querySelector(SELECTOR_INPUT)\n\n      if (inputBtn && (inputBtn.hasAttribute('disabled') || inputBtn.classList.contains('disabled'))) {\n        event.preventDefault() // work around Firefox bug #1540995\n        return\n      }\n\n      if (initialButton.tagName === 'INPUT' || button.tagName !== 'LABEL') {\n        Button._jQueryInterface.call($(button), 'toggle', initialButton.tagName === 'INPUT')\n      }\n    }\n  })\n  .on(EVENT_FOCUS_BLUR_DATA_API, SELECTOR_DATA_TOGGLE_CARROT, event => {\n    const button = $(event.target).closest(SELECTOR_BUTTON)[0]\n    $(button).toggleClass(CLASS_NAME_FOCUS, /^focus(in)?$/.test(event.type))\n  })\n\n$(window).on(EVENT_LOAD_DATA_API, () => {\n  // ensure correct active class is set to match the controls' actual values/states\n\n  // find all checkboxes/readio buttons inside data-toggle groups\n  let buttons = [].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLES_BUTTONS))\n  for (let i = 0, len = buttons.length; i < len; i++) {\n    const button = buttons[i]\n    const input = button.querySelector(SELECTOR_INPUT)\n    if (input.checked || input.hasAttribute('checked')) {\n      button.classList.add(CLASS_NAME_ACTIVE)\n    } else {\n      button.classList.remove(CLASS_NAME_ACTIVE)\n    }\n  }\n\n  // find all button toggles\n  buttons = [].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLE))\n  for (let i = 0, len = buttons.length; i < len; i++) {\n    const button = buttons[i]\n    if (button.getAttribute('aria-pressed') === 'true') {\n      button.classList.add(CLASS_NAME_ACTIVE)\n    } else {\n      button.classList.remove(CLASS_NAME_ACTIVE)\n    }\n  }\n})\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Button._jQueryInterface\n$.fn[NAME].Constructor = Button\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Button._jQueryInterface\n}\n\nexport default Button\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): carousel.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'carousel'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.carousel'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst DATA_API_KEY = '.data-api'\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\nconst ARROW_LEFT_KEYCODE = 37 // KeyboardEvent.which value for left arrow key\nconst ARROW_RIGHT_KEYCODE = 39 // KeyboardEvent.which value for right arrow key\nconst TOUCHEVENT_COMPAT_WAIT = 500 // Time for mouse compat events to fire after touch\nconst SWIPE_THRESHOLD = 40\n\nconst Default = {\n  interval: 5000,\n  keyboard: true,\n  slide: false,\n  pause: 'hover',\n  wrap: true,\n  touch: true\n}\n\nconst DefaultType = {\n  interval: '(number|boolean)',\n  keyboard: 'boolean',\n  slide: '(boolean|string)',\n  pause: '(string|boolean)',\n  wrap: 'boolean',\n  touch: 'boolean'\n}\n\nconst DIRECTION_NEXT = 'next'\nconst DIRECTION_PREV = 'prev'\nconst DIRECTION_LEFT = 'left'\nconst DIRECTION_RIGHT = 'right'\n\nconst EVENT_SLIDE = `slide${EVENT_KEY}`\nconst EVENT_SLID = `slid${EVENT_KEY}`\nconst EVENT_KEYDOWN = `keydown${EVENT_KEY}`\nconst EVENT_MOUSEENTER = `mouseenter${EVENT_KEY}`\nconst EVENT_MOUSELEAVE = `mouseleave${EVENT_KEY}`\nconst EVENT_TOUCHSTART = `touchstart${EVENT_KEY}`\nconst EVENT_TOUCHMOVE = `touchmove${EVENT_KEY}`\nconst EVENT_TOUCHEND = `touchend${EVENT_KEY}`\nconst EVENT_POINTERDOWN = `pointerdown${EVENT_KEY}`\nconst EVENT_POINTERUP = `pointerup${EVENT_KEY}`\nconst EVENT_DRAG_START = `dragstart${EVENT_KEY}`\nconst EVENT_LOAD_DATA_API = `load${EVENT_KEY}${DATA_API_KEY}`\nconst EVENT_CLICK_DATA_API = `click${EVENT_KEY}${DATA_API_KEY}`\n\nconst CLASS_NAME_CAROUSEL = 'carousel'\nconst CLASS_NAME_ACTIVE = 'active'\nconst CLASS_NAME_SLIDE = 'slide'\nconst CLASS_NAME_RIGHT = 'carousel-item-right'\nconst CLASS_NAME_LEFT = 'carousel-item-left'\nconst CLASS_NAME_NEXT = 'carousel-item-next'\nconst CLASS_NAME_PREV = 'carousel-item-prev'\nconst CLASS_NAME_POINTER_EVENT = 'pointer-event'\n\nconst SELECTOR_ACTIVE = '.active'\nconst SELECTOR_ACTIVE_ITEM = '.active.carousel-item'\nconst SELECTOR_ITEM = '.carousel-item'\nconst SELECTOR_ITEM_IMG = '.carousel-item img'\nconst SELECTOR_NEXT_PREV = '.carousel-item-next, .carousel-item-prev'\nconst SELECTOR_INDICATORS = '.carousel-indicators'\nconst SELECTOR_DATA_SLIDE = '[data-slide], [data-slide-to]'\nconst SELECTOR_DATA_RIDE = '[data-ride=\"carousel\"]'\n\nconst PointerType = {\n  TOUCH: 'touch',\n  PEN: 'pen'\n}\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\nclass Carousel {\n  constructor(element, config) {\n    this._items = null\n    this._interval = null\n    this._activeElement = null\n    this._isPaused = false\n    this._isSliding = false\n    this.touchTimeout = null\n    this.touchStartX = 0\n    this.touchDeltaX = 0\n\n    this._config = this._getConfig(config)\n    this._element = element\n    this._indicatorsElement = this._element.querySelector(SELECTOR_INDICATORS)\n    this._touchSupported = 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0\n    this._pointerEvent = Boolean(window.PointerEvent || window.MSPointerEvent)\n\n    this._addEventListeners()\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  static get Default() {\n    return Default\n  }\n\n  // Public\n\n  next() {\n    if (!this._isSliding) {\n      this._slide(DIRECTION_NEXT)\n    }\n  }\n\n  nextWhenVisible() {\n    const $element = $(this._element)\n    // Don't call next when the page isn't visible\n    // or the carousel or its parent isn't visible\n    if (!document.hidden &&\n      ($element.is(':visible') && $element.css('visibility') !== 'hidden')) {\n      this.next()\n    }\n  }\n\n  prev() {\n    if (!this._isSliding) {\n      this._slide(DIRECTION_PREV)\n    }\n  }\n\n  pause(event) {\n    if (!event) {\n      this._isPaused = true\n    }\n\n    if (this._element.querySelector(SELECTOR_NEXT_PREV)) {\n      Util.triggerTransitionEnd(this._element)\n      this.cycle(true)\n    }\n\n    clearInterval(this._interval)\n    this._interval = null\n  }\n\n  cycle(event) {\n    if (!event) {\n      this._isPaused = false\n    }\n\n    if (this._interval) {\n      clearInterval(this._interval)\n      this._interval = null\n    }\n\n    if (this._config.interval && !this._isPaused) {\n      this._updateInterval()\n\n      this._interval = setInterval(\n        (document.visibilityState ? this.nextWhenVisible : this.next).bind(this),\n        this._config.interval\n      )\n    }\n  }\n\n  to(index) {\n    this._activeElement = this._element.querySelector(SELECTOR_ACTIVE_ITEM)\n\n    const activeIndex = this._getItemIndex(this._activeElement)\n\n    if (index > this._items.length - 1 || index < 0) {\n      return\n    }\n\n    if (this._isSliding) {\n      $(this._element).one(EVENT_SLID, () => this.to(index))\n      return\n    }\n\n    if (activeIndex === index) {\n      this.pause()\n      this.cycle()\n      return\n    }\n\n    const direction = index > activeIndex ?\n      DIRECTION_NEXT :\n      DIRECTION_PREV\n\n    this._slide(direction, this._items[index])\n  }\n\n  dispose() {\n    $(this._element).off(EVENT_KEY)\n    $.removeData(this._element, DATA_KEY)\n\n    this._items = null\n    this._config = null\n    this._element = null\n    this._interval = null\n    this._isPaused = null\n    this._isSliding = null\n    this._activeElement = null\n    this._indicatorsElement = null\n  }\n\n  // Private\n\n  _getConfig(config) {\n    config = {\n      ...Default,\n      ...config\n    }\n    Util.typeCheckConfig(NAME, config, DefaultType)\n    return config\n  }\n\n  _handleSwipe() {\n    const absDeltax = Math.abs(this.touchDeltaX)\n\n    if (absDeltax <= SWIPE_THRESHOLD) {\n      return\n    }\n\n    const direction = absDeltax / this.touchDeltaX\n\n    this.touchDeltaX = 0\n\n    // swipe left\n    if (direction > 0) {\n      this.prev()\n    }\n\n    // swipe right\n    if (direction < 0) {\n      this.next()\n    }\n  }\n\n  _addEventListeners() {\n    if (this._config.keyboard) {\n      $(this._element).on(EVENT_KEYDOWN, event => this._keydown(event))\n    }\n\n    if (this._config.pause === 'hover') {\n      $(this._element)\n        .on(EVENT_MOUSEENTER, event => this.pause(event))\n        .on(EVENT_MOUSELEAVE, event => this.cycle(event))\n    }\n\n    if (this._config.touch) {\n      this._addTouchEventListeners()\n    }\n  }\n\n  _addTouchEventListeners() {\n    if (!this._touchSupported) {\n      return\n    }\n\n    const start = event => {\n      if (this._pointerEvent && PointerType[event.originalEvent.pointerType.toUpperCase()]) {\n        this.touchStartX = event.originalEvent.clientX\n      } else if (!this._pointerEvent) {\n        this.touchStartX = event.originalEvent.touches[0].clientX\n      }\n    }\n\n    const move = event => {\n      // ensure swiping with one touch and not pinching\n      if (event.originalEvent.touches && event.originalEvent.touches.length > 1) {\n        this.touchDeltaX = 0\n      } else {\n        this.touchDeltaX = event.originalEvent.touches[0].clientX - this.touchStartX\n      }\n    }\n\n    const end = event => {\n      if (this._pointerEvent && PointerType[event.originalEvent.pointerType.toUpperCase()]) {\n        this.touchDeltaX = event.originalEvent.clientX - this.touchStartX\n      }\n\n      this._handleSwipe()\n      if (this._config.pause === 'hover') {\n        // If it's a touch-enabled device, mouseenter/leave are fired as\n        // part of the mouse compatibility events on first tap - the carousel\n        // would stop cycling until user tapped out of it;\n        // here, we listen for touchend, explicitly pause the carousel\n        // (as if it's the second time we tap on it, mouseenter compat event\n        // is NOT fired) and after a timeout (to allow for mouse compatibility\n        // events to fire) we explicitly restart cycling\n\n        this.pause()\n        if (this.touchTimeout) {\n          clearTimeout(this.touchTimeout)\n        }\n\n        this.touchTimeout = setTimeout(event => this.cycle(event), TOUCHEVENT_COMPAT_WAIT + this._config.interval)\n      }\n    }\n\n    $(this._element.querySelectorAll(SELECTOR_ITEM_IMG))\n      .on(EVENT_DRAG_START, e => e.preventDefault())\n\n    if (this._pointerEvent) {\n      $(this._element).on(EVENT_POINTERDOWN, event => start(event))\n      $(this._element).on(EVENT_POINTERUP, event => end(event))\n\n      this._element.classList.add(CLASS_NAME_POINTER_EVENT)\n    } else {\n      $(this._element).on(EVENT_TOUCHSTART, event => start(event))\n      $(this._element).on(EVENT_TOUCHMOVE, event => move(event))\n      $(this._element).on(EVENT_TOUCHEND, event => end(event))\n    }\n  }\n\n  _keydown(event) {\n    if (/input|textarea/i.test(event.target.tagName)) {\n      return\n    }\n\n    switch (event.which) {\n      case ARROW_LEFT_KEYCODE:\n        event.preventDefault()\n        this.prev()\n        break\n      case ARROW_RIGHT_KEYCODE:\n        event.preventDefault()\n        this.next()\n        break\n      default:\n    }\n  }\n\n  _getItemIndex(element) {\n    this._items = element && element.parentNode ?\n      [].slice.call(element.parentNode.querySelectorAll(SELECTOR_ITEM)) :\n      []\n    return this._items.indexOf(element)\n  }\n\n  _getItemByDirection(direction, activeElement) {\n    const isNextDirection = direction === DIRECTION_NEXT\n    const isPrevDirection = direction === DIRECTION_PREV\n    const activeIndex = this._getItemIndex(activeElement)\n    const lastItemIndex = this._items.length - 1\n    const isGoingToWrap = isPrevDirection && activeIndex === 0 ||\n                            isNextDirection && activeIndex === lastItemIndex\n\n    if (isGoingToWrap && !this._config.wrap) {\n      return activeElement\n    }\n\n    const delta = direction === DIRECTION_PREV ? -1 : 1\n    const itemIndex = (activeIndex + delta) % this._items.length\n\n    return itemIndex === -1 ?\n      this._items[this._items.length - 1] : this._items[itemIndex]\n  }\n\n  _triggerSlideEvent(relatedTarget, eventDirectionName) {\n    const targetIndex = this._getItemIndex(relatedTarget)\n    const fromIndex = this._getItemIndex(this._element.querySelector(SELECTOR_ACTIVE_ITEM))\n    const slideEvent = $.Event(EVENT_SLIDE, {\n      relatedTarget,\n      direction: eventDirectionName,\n      from: fromIndex,\n      to: targetIndex\n    })\n\n    $(this._element).trigger(slideEvent)\n\n    return slideEvent\n  }\n\n  _setActiveIndicatorElement(element) {\n    if (this._indicatorsElement) {\n      const indicators = [].slice.call(this._indicatorsElement.querySelectorAll(SELECTOR_ACTIVE))\n      $(indicators).removeClass(CLASS_NAME_ACTIVE)\n\n      const nextIndicator = this._indicatorsElement.children[\n        this._getItemIndex(element)\n      ]\n\n      if (nextIndicator) {\n        $(nextIndicator).addClass(CLASS_NAME_ACTIVE)\n      }\n    }\n  }\n\n  _updateInterval() {\n    const element = this._activeElement || this._element.querySelector(SELECTOR_ACTIVE_ITEM)\n\n    if (!element) {\n      return\n    }\n\n    const elementInterval = parseInt(element.getAttribute('data-interval'), 10)\n\n    if (elementInterval) {\n      this._config.defaultInterval = this._config.defaultInterval || this._config.interval\n      this._config.interval = elementInterval\n    } else {\n      this._config.interval = this._config.defaultInterval || this._config.interval\n    }\n  }\n\n  _slide(direction, element) {\n    const activeElement = this._element.querySelector(SELECTOR_ACTIVE_ITEM)\n    const activeElementIndex = this._getItemIndex(activeElement)\n    const nextElement = element || activeElement &&\n      this._getItemByDirection(direction, activeElement)\n    const nextElementIndex = this._getItemIndex(nextElement)\n    const isCycling = Boolean(this._interval)\n\n    let directionalClassName\n    let orderClassName\n    let eventDirectionName\n\n    if (direction === DIRECTION_NEXT) {\n      directionalClassName = CLASS_NAME_LEFT\n      orderClassName = CLASS_NAME_NEXT\n      eventDirectionName = DIRECTION_LEFT\n    } else {\n      directionalClassName = CLASS_NAME_RIGHT\n      orderClassName = CLASS_NAME_PREV\n      eventDirectionName = DIRECTION_RIGHT\n    }\n\n    if (nextElement && $(nextElement).hasClass(CLASS_NAME_ACTIVE)) {\n      this._isSliding = false\n      return\n    }\n\n    const slideEvent = this._triggerSlideEvent(nextElement, eventDirectionName)\n    if (slideEvent.isDefaultPrevented()) {\n      return\n    }\n\n    if (!activeElement || !nextElement) {\n      // Some weirdness is happening, so we bail\n      return\n    }\n\n    this._isSliding = true\n\n    if (isCycling) {\n      this.pause()\n    }\n\n    this._setActiveIndicatorElement(nextElement)\n    this._activeElement = nextElement\n\n    const slidEvent = $.Event(EVENT_SLID, {\n      relatedTarget: nextElement,\n      direction: eventDirectionName,\n      from: activeElementIndex,\n      to: nextElementIndex\n    })\n\n    if ($(this._element).hasClass(CLASS_NAME_SLIDE)) {\n      $(nextElement).addClass(orderClassName)\n\n      Util.reflow(nextElement)\n\n      $(activeElement).addClass(directionalClassName)\n      $(nextElement).addClass(directionalClassName)\n\n      const transitionDuration = Util.getTransitionDurationFromElement(activeElement)\n\n      $(activeElement)\n        .one(Util.TRANSITION_END, () => {\n          $(nextElement)\n            .removeClass(`${directionalClassName} ${orderClassName}`)\n            .addClass(CLASS_NAME_ACTIVE)\n\n          $(activeElement).removeClass(`${CLASS_NAME_ACTIVE} ${orderClassName} ${directionalClassName}`)\n\n          this._isSliding = false\n\n          setTimeout(() => $(this._element).trigger(slidEvent), 0)\n        })\n        .emulateTransitionEnd(transitionDuration)\n    } else {\n      $(activeElement).removeClass(CLASS_NAME_ACTIVE)\n      $(nextElement).addClass(CLASS_NAME_ACTIVE)\n\n      this._isSliding = false\n      $(this._element).trigger(slidEvent)\n    }\n\n    if (isCycling) {\n      this.cycle()\n    }\n  }\n\n  // Static\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      let data = $(this).data(DATA_KEY)\n      let _config = {\n        ...Default,\n        ...$(this).data()\n      }\n\n      if (typeof config === 'object') {\n        _config = {\n          ..._config,\n          ...config\n        }\n      }\n\n      const action = typeof config === 'string' ? config : _config.slide\n\n      if (!data) {\n        data = new Carousel(this, _config)\n        $(this).data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'number') {\n        data.to(config)\n      } else if (typeof action === 'string') {\n        if (typeof data[action] === 'undefined') {\n          throw new TypeError(`No method named \"${action}\"`)\n        }\n\n        data[action]()\n      } else if (_config.interval && _config.ride) {\n        data.pause()\n        data.cycle()\n      }\n    })\n  }\n\n  static _dataApiClickHandler(event) {\n    const selector = Util.getSelectorFromElement(this)\n\n    if (!selector) {\n      return\n    }\n\n    const target = $(selector)[0]\n\n    if (!target || !$(target).hasClass(CLASS_NAME_CAROUSEL)) {\n      return\n    }\n\n    const config = {\n      ...$(target).data(),\n      ...$(this).data()\n    }\n    const slideIndex = this.getAttribute('data-slide-to')\n\n    if (slideIndex) {\n      config.interval = false\n    }\n\n    Carousel._jQueryInterface.call($(target), config)\n\n    if (slideIndex) {\n      $(target).data(DATA_KEY).to(slideIndex)\n    }\n\n    event.preventDefault()\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * Data Api implementation\n * ------------------------------------------------------------------------\n */\n\n$(document).on(EVENT_CLICK_DATA_API, SELECTOR_DATA_SLIDE, Carousel._dataApiClickHandler)\n\n$(window).on(EVENT_LOAD_DATA_API, () => {\n  const carousels = [].slice.call(document.querySelectorAll(SELECTOR_DATA_RIDE))\n  for (let i = 0, len = carousels.length; i < len; i++) {\n    const $carousel = $(carousels[i])\n    Carousel._jQueryInterface.call($carousel, $carousel.data())\n  }\n})\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Carousel._jQueryInterface\n$.fn[NAME].Constructor = Carousel\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Carousel._jQueryInterface\n}\n\nexport default Carousel\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): collapse.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'collapse'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.collapse'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst DATA_API_KEY = '.data-api'\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\n\nconst Default = {\n  toggle: true,\n  parent: ''\n}\n\nconst DefaultType = {\n  toggle: 'boolean',\n  parent: '(string|element)'\n}\n\nconst EVENT_SHOW = `show${EVENT_KEY}`\nconst EVENT_SHOWN = `shown${EVENT_KEY}`\nconst EVENT_HIDE = `hide${EVENT_KEY}`\nconst EVENT_HIDDEN = `hidden${EVENT_KEY}`\nconst EVENT_CLICK_DATA_API = `click${EVENT_KEY}${DATA_API_KEY}`\n\nconst CLASS_NAME_SHOW = 'show'\nconst CLASS_NAME_COLLAPSE = 'collapse'\nconst CLASS_NAME_COLLAPSING = 'collapsing'\nconst CLASS_NAME_COLLAPSED = 'collapsed'\n\nconst DIMENSION_WIDTH = 'width'\nconst DIMENSION_HEIGHT = 'height'\n\nconst SELECTOR_ACTIVES = '.show, .collapsing'\nconst SELECTOR_DATA_TOGGLE = '[data-toggle=\"collapse\"]'\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Collapse {\n  constructor(element, config) {\n    this._isTransitioning = false\n    this._element = element\n    this._config = this._getConfig(config)\n    this._triggerArray = [].slice.call(document.querySelectorAll(\n      `[data-toggle=\"collapse\"][href=\"#${element.id}\"],` +\n      `[data-toggle=\"collapse\"][data-target=\"#${element.id}\"]`\n    ))\n\n    const toggleList = [].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLE))\n    for (let i = 0, len = toggleList.length; i < len; i++) {\n      const elem = toggleList[i]\n      const selector = Util.getSelectorFromElement(elem)\n      const filterElement = [].slice.call(document.querySelectorAll(selector))\n        .filter(foundElem => foundElem === element)\n\n      if (selector !== null && filterElement.length > 0) {\n        this._selector = selector\n        this._triggerArray.push(elem)\n      }\n    }\n\n    this._parent = this._config.parent ? this._getParent() : null\n\n    if (!this._config.parent) {\n      this._addAriaAndCollapsedClass(this._element, this._triggerArray)\n    }\n\n    if (this._config.toggle) {\n      this.toggle()\n    }\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  static get Default() {\n    return Default\n  }\n\n  // Public\n\n  toggle() {\n    if ($(this._element).hasClass(CLASS_NAME_SHOW)) {\n      this.hide()\n    } else {\n      this.show()\n    }\n  }\n\n  show() {\n    if (this._isTransitioning ||\n      $(this._element).hasClass(CLASS_NAME_SHOW)) {\n      return\n    }\n\n    let actives\n    let activesData\n\n    if (this._parent) {\n      actives = [].slice.call(this._parent.querySelectorAll(SELECTOR_ACTIVES))\n        .filter(elem => {\n          if (typeof this._config.parent === 'string') {\n            return elem.getAttribute('data-parent') === this._config.parent\n          }\n\n          return elem.classList.contains(CLASS_NAME_COLLAPSE)\n        })\n\n      if (actives.length === 0) {\n        actives = null\n      }\n    }\n\n    if (actives) {\n      activesData = $(actives).not(this._selector).data(DATA_KEY)\n      if (activesData && activesData._isTransitioning) {\n        return\n      }\n    }\n\n    const startEvent = $.Event(EVENT_SHOW)\n    $(this._element).trigger(startEvent)\n    if (startEvent.isDefaultPrevented()) {\n      return\n    }\n\n    if (actives) {\n      Collapse._jQueryInterface.call($(actives).not(this._selector), 'hide')\n      if (!activesData) {\n        $(actives).data(DATA_KEY, null)\n      }\n    }\n\n    const dimension = this._getDimension()\n\n    $(this._element)\n      .removeClass(CLASS_NAME_COLLAPSE)\n      .addClass(CLASS_NAME_COLLAPSING)\n\n    this._element.style[dimension] = 0\n\n    if (this._triggerArray.length) {\n      $(this._triggerArray)\n        .removeClass(CLASS_NAME_COLLAPSED)\n        .attr('aria-expanded', true)\n    }\n\n    this.setTransitioning(true)\n\n    const complete = () => {\n      $(this._element)\n        .removeClass(CLASS_NAME_COLLAPSING)\n        .addClass(`${CLASS_NAME_COLLAPSE} ${CLASS_NAME_SHOW}`)\n\n      this._element.style[dimension] = ''\n\n      this.setTransitioning(false)\n\n      $(this._element).trigger(EVENT_SHOWN)\n    }\n\n    const capitalizedDimension = dimension[0].toUpperCase() + dimension.slice(1)\n    const scrollSize = `scroll${capitalizedDimension}`\n    const transitionDuration = Util.getTransitionDurationFromElement(this._element)\n\n    $(this._element)\n      .one(Util.TRANSITION_END, complete)\n      .emulateTransitionEnd(transitionDuration)\n\n    this._element.style[dimension] = `${this._element[scrollSize]}px`\n  }\n\n  hide() {\n    if (this._isTransitioning ||\n      !$(this._element).hasClass(CLASS_NAME_SHOW)) {\n      return\n    }\n\n    const startEvent = $.Event(EVENT_HIDE)\n    $(this._element).trigger(startEvent)\n    if (startEvent.isDefaultPrevented()) {\n      return\n    }\n\n    const dimension = this._getDimension()\n\n    this._element.style[dimension] = `${this._element.getBoundingClientRect()[dimension]}px`\n\n    Util.reflow(this._element)\n\n    $(this._element)\n      .addClass(CLASS_NAME_COLLAPSING)\n      .removeClass(`${CLASS_NAME_COLLAPSE} ${CLASS_NAME_SHOW}`)\n\n    const triggerArrayLength = this._triggerArray.length\n    if (triggerArrayLength > 0) {\n      for (let i = 0; i < triggerArrayLength; i++) {\n        const trigger = this._triggerArray[i]\n        const selector = Util.getSelectorFromElement(trigger)\n\n        if (selector !== null) {\n          const $elem = $([].slice.call(document.querySelectorAll(selector)))\n          if (!$elem.hasClass(CLASS_NAME_SHOW)) {\n            $(trigger).addClass(CLASS_NAME_COLLAPSED)\n              .attr('aria-expanded', false)\n          }\n        }\n      }\n    }\n\n    this.setTransitioning(true)\n\n    const complete = () => {\n      this.setTransitioning(false)\n      $(this._element)\n        .removeClass(CLASS_NAME_COLLAPSING)\n        .addClass(CLASS_NAME_COLLAPSE)\n        .trigger(EVENT_HIDDEN)\n    }\n\n    this._element.style[dimension] = ''\n    const transitionDuration = Util.getTransitionDurationFromElement(this._element)\n\n    $(this._element)\n      .one(Util.TRANSITION_END, complete)\n      .emulateTransitionEnd(transitionDuration)\n  }\n\n  setTransitioning(isTransitioning) {\n    this._isTransitioning = isTransitioning\n  }\n\n  dispose() {\n    $.removeData(this._element, DATA_KEY)\n\n    this._config = null\n    this._parent = null\n    this._element = null\n    this._triggerArray = null\n    this._isTransitioning = null\n  }\n\n  // Private\n\n  _getConfig(config) {\n    config = {\n      ...Default,\n      ...config\n    }\n    config.toggle = Boolean(config.toggle) // Coerce string values\n    Util.typeCheckConfig(NAME, config, DefaultType)\n    return config\n  }\n\n  _getDimension() {\n    const hasWidth = $(this._element).hasClass(DIMENSION_WIDTH)\n    return hasWidth ? DIMENSION_WIDTH : DIMENSION_HEIGHT\n  }\n\n  _getParent() {\n    let parent\n\n    if (Util.isElement(this._config.parent)) {\n      parent = this._config.parent\n\n      // It's a jQuery object\n      if (typeof this._config.parent.jquery !== 'undefined') {\n        parent = this._config.parent[0]\n      }\n    } else {\n      parent = document.querySelector(this._config.parent)\n    }\n\n    const selector = `[data-toggle=\"collapse\"][data-parent=\"${this._config.parent}\"]`\n    const children = [].slice.call(parent.querySelectorAll(selector))\n\n    $(children).each((i, element) => {\n      this._addAriaAndCollapsedClass(\n        Collapse._getTargetFromElement(element),\n        [element]\n      )\n    })\n\n    return parent\n  }\n\n  _addAriaAndCollapsedClass(element, triggerArray) {\n    const isOpen = $(element).hasClass(CLASS_NAME_SHOW)\n\n    if (triggerArray.length) {\n      $(triggerArray)\n        .toggleClass(CLASS_NAME_COLLAPSED, !isOpen)\n        .attr('aria-expanded', isOpen)\n    }\n  }\n\n  // Static\n\n  static _getTargetFromElement(element) {\n    const selector = Util.getSelectorFromElement(element)\n    return selector ? document.querySelector(selector) : null\n  }\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      const $element = $(this)\n      let data = $element.data(DATA_KEY)\n      const _config = {\n        ...Default,\n        ...$element.data(),\n        ...(typeof config === 'object' && config ? config : {})\n      }\n\n      if (!data && _config.toggle && typeof config === 'string' && /show|hide/.test(config)) {\n        _config.toggle = false\n      }\n\n      if (!data) {\n        data = new Collapse(this, _config)\n        $element.data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'string') {\n        if (typeof data[config] === 'undefined') {\n          throw new TypeError(`No method named \"${config}\"`)\n        }\n\n        data[config]()\n      }\n    })\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * Data Api implementation\n * ------------------------------------------------------------------------\n */\n\n$(document).on(EVENT_CLICK_DATA_API, SELECTOR_DATA_TOGGLE, function (event) {\n  // preventDefault only for <a> elements (which change the URL) not inside the collapsible element\n  if (event.currentTarget.tagName === 'A') {\n    event.preventDefault()\n  }\n\n  const $trigger = $(this)\n  const selector = Util.getSelectorFromElement(this)\n  const selectors = [].slice.call(document.querySelectorAll(selector))\n\n  $(selectors).each(function () {\n    const $target = $(this)\n    const data = $target.data(DATA_KEY)\n    const config = data ? 'toggle' : $trigger.data()\n    Collapse._jQueryInterface.call($target, config)\n  })\n})\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Collapse._jQueryInterface\n$.fn[NAME].Constructor = Collapse\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Collapse._jQueryInterface\n}\n\nexport default Collapse\n","/**!\n * @fileOverview Kickass library to create and place poppers near their reference elements.\n * @version 1.16.1\n * @license\n * Copyright (c) 2016 Federico Zivolo and contributors\n *\n * Permission is hereby granted, free of charge, to any person obtaining a copy\n * of this software and associated documentation files (the \"Software\"), to deal\n * in the Software without restriction, including without limitation the rights\n * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell\n * copies of the Software, and to permit persons to whom the Software is\n * furnished to do so, subject to the following conditions:\n *\n * The above copyright notice and this permission notice shall be included in all\n * copies or substantial portions of the Software.\n *\n * THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR\n * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,\n * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE\n * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER\n * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,\n * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE\n * SOFTWARE.\n */\nvar isBrowser = typeof window !== 'undefined' && typeof document !== 'undefined' && typeof navigator !== 'undefined';\n\nvar timeoutDuration = function () {\n  var longerTimeoutBrowsers = ['Edge', 'Trident', 'Firefox'];\n  for (var i = 0; i < longerTimeoutBrowsers.length; i += 1) {\n    if (isBrowser && navigator.userAgent.indexOf(longerTimeoutBrowsers[i]) >= 0) {\n      return 1;\n    }\n  }\n  return 0;\n}();\n\nfunction microtaskDebounce(fn) {\n  var called = false;\n  return function () {\n    if (called) {\n      return;\n    }\n    called = true;\n    window.Promise.resolve().then(function () {\n      called = false;\n      fn();\n    });\n  };\n}\n\nfunction taskDebounce(fn) {\n  var scheduled = false;\n  return function () {\n    if (!scheduled) {\n      scheduled = true;\n      setTimeout(function () {\n        scheduled = false;\n        fn();\n      }, timeoutDuration);\n    }\n  };\n}\n\nvar supportsMicroTasks = isBrowser && window.Promise;\n\n/**\n* Create a debounced version of a method, that's asynchronously deferred\n* but called in the minimum time possible.\n*\n* @method\n* @memberof Popper.Utils\n* @argument {Function} fn\n* @returns {Function}\n*/\nvar debounce = supportsMicroTasks ? microtaskDebounce : taskDebounce;\n\n/**\n * Check if the given variable is a function\n * @method\n * @memberof Popper.Utils\n * @argument {Any} functionToCheck - variable to check\n * @returns {Boolean} answer to: is a function?\n */\nfunction isFunction(functionToCheck) {\n  var getType = {};\n  return functionToCheck && getType.toString.call(functionToCheck) === '[object Function]';\n}\n\n/**\n * Get CSS computed property of the given element\n * @method\n * @memberof Popper.Utils\n * @argument {Eement} element\n * @argument {String} property\n */\nfunction getStyleComputedProperty(element, property) {\n  if (element.nodeType !== 1) {\n    return [];\n  }\n  // NOTE: 1 DOM access here\n  var window = element.ownerDocument.defaultView;\n  var css = window.getComputedStyle(element, null);\n  return property ? css[property] : css;\n}\n\n/**\n * Returns the parentNode or the host of the element\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element\n * @returns {Element} parent\n */\nfunction getParentNode(element) {\n  if (element.nodeName === 'HTML') {\n    return element;\n  }\n  return element.parentNode || element.host;\n}\n\n/**\n * Returns the scrolling parent of the given element\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element\n * @returns {Element} scroll parent\n */\nfunction getScrollParent(element) {\n  // Return body, `getScroll` will take care to get the correct `scrollTop` from it\n  if (!element) {\n    return document.body;\n  }\n\n  switch (element.nodeName) {\n    case 'HTML':\n    case 'BODY':\n      return element.ownerDocument.body;\n    case '#document':\n      return element.body;\n  }\n\n  // Firefox want us to check `-x` and `-y` variations as well\n\n  var _getStyleComputedProp = getStyleComputedProperty(element),\n      overflow = _getStyleComputedProp.overflow,\n      overflowX = _getStyleComputedProp.overflowX,\n      overflowY = _getStyleComputedProp.overflowY;\n\n  if (/(auto|scroll|overlay)/.test(overflow + overflowY + overflowX)) {\n    return element;\n  }\n\n  return getScrollParent(getParentNode(element));\n}\n\n/**\n * Returns the reference node of the reference object, or the reference object itself.\n * @method\n * @memberof Popper.Utils\n * @param {Element|Object} reference - the reference element (the popper will be relative to this)\n * @returns {Element} parent\n */\nfunction getReferenceNode(reference) {\n  return reference && reference.referenceNode ? reference.referenceNode : reference;\n}\n\nvar isIE11 = isBrowser && !!(window.MSInputMethodContext && document.documentMode);\nvar isIE10 = isBrowser && /MSIE 10/.test(navigator.userAgent);\n\n/**\n * Determines if the browser is Internet Explorer\n * @method\n * @memberof Popper.Utils\n * @param {Number} version to check\n * @returns {Boolean} isIE\n */\nfunction isIE(version) {\n  if (version === 11) {\n    return isIE11;\n  }\n  if (version === 10) {\n    return isIE10;\n  }\n  return isIE11 || isIE10;\n}\n\n/**\n * Returns the offset parent of the given element\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element\n * @returns {Element} offset parent\n */\nfunction getOffsetParent(element) {\n  if (!element) {\n    return document.documentElement;\n  }\n\n  var noOffsetParent = isIE(10) ? document.body : null;\n\n  // NOTE: 1 DOM access here\n  var offsetParent = element.offsetParent || null;\n  // Skip hidden elements which don't have an offsetParent\n  while (offsetParent === noOffsetParent && element.nextElementSibling) {\n    offsetParent = (element = element.nextElementSibling).offsetParent;\n  }\n\n  var nodeName = offsetParent && offsetParent.nodeName;\n\n  if (!nodeName || nodeName === 'BODY' || nodeName === 'HTML') {\n    return element ? element.ownerDocument.documentElement : document.documentElement;\n  }\n\n  // .offsetParent will return the closest TH, TD or TABLE in case\n  // no offsetParent is present, I hate this job...\n  if (['TH', 'TD', 'TABLE'].indexOf(offsetParent.nodeName) !== -1 && getStyleComputedProperty(offsetParent, 'position') === 'static') {\n    return getOffsetParent(offsetParent);\n  }\n\n  return offsetParent;\n}\n\nfunction isOffsetContainer(element) {\n  var nodeName = element.nodeName;\n\n  if (nodeName === 'BODY') {\n    return false;\n  }\n  return nodeName === 'HTML' || getOffsetParent(element.firstElementChild) === element;\n}\n\n/**\n * Finds the root node (document, shadowDOM root) of the given element\n * @method\n * @memberof Popper.Utils\n * @argument {Element} node\n * @returns {Element} root node\n */\nfunction getRoot(node) {\n  if (node.parentNode !== null) {\n    return getRoot(node.parentNode);\n  }\n\n  return node;\n}\n\n/**\n * Finds the offset parent common to the two provided nodes\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element1\n * @argument {Element} element2\n * @returns {Element} common offset parent\n */\nfunction findCommonOffsetParent(element1, element2) {\n  // This check is needed to avoid errors in case one of the elements isn't defined for any reason\n  if (!element1 || !element1.nodeType || !element2 || !element2.nodeType) {\n    return document.documentElement;\n  }\n\n  // Here we make sure to give as \"start\" the element that comes first in the DOM\n  var order = element1.compareDocumentPosition(element2) & Node.DOCUMENT_POSITION_FOLLOWING;\n  var start = order ? element1 : element2;\n  var end = order ? element2 : element1;\n\n  // Get common ancestor container\n  var range = document.createRange();\n  range.setStart(start, 0);\n  range.setEnd(end, 0);\n  var commonAncestorContainer = range.commonAncestorContainer;\n\n  // Both nodes are inside #document\n\n  if (element1 !== commonAncestorContainer && element2 !== commonAncestorContainer || start.contains(end)) {\n    if (isOffsetContainer(commonAncestorContainer)) {\n      return commonAncestorContainer;\n    }\n\n    return getOffsetParent(commonAncestorContainer);\n  }\n\n  // one of the nodes is inside shadowDOM, find which one\n  var element1root = getRoot(element1);\n  if (element1root.host) {\n    return findCommonOffsetParent(element1root.host, element2);\n  } else {\n    return findCommonOffsetParent(element1, getRoot(element2).host);\n  }\n}\n\n/**\n * Gets the scroll value of the given element in the given side (top and left)\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element\n * @argument {String} side `top` or `left`\n * @returns {number} amount of scrolled pixels\n */\nfunction getScroll(element) {\n  var side = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'top';\n\n  var upperSide = side === 'top' ? 'scrollTop' : 'scrollLeft';\n  var nodeName = element.nodeName;\n\n  if (nodeName === 'BODY' || nodeName === 'HTML') {\n    var html = element.ownerDocument.documentElement;\n    var scrollingElement = element.ownerDocument.scrollingElement || html;\n    return scrollingElement[upperSide];\n  }\n\n  return element[upperSide];\n}\n\n/*\n * Sum or subtract the element scroll values (left and top) from a given rect object\n * @method\n * @memberof Popper.Utils\n * @param {Object} rect - Rect object you want to change\n * @param {HTMLElement} element - The element from the function reads the scroll values\n * @param {Boolean} subtract - set to true if you want to subtract the scroll values\n * @return {Object} rect - The modifier rect object\n */\nfunction includeScroll(rect, element) {\n  var subtract = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;\n\n  var scrollTop = getScroll(element, 'top');\n  var scrollLeft = getScroll(element, 'left');\n  var modifier = subtract ? -1 : 1;\n  rect.top += scrollTop * modifier;\n  rect.bottom += scrollTop * modifier;\n  rect.left += scrollLeft * modifier;\n  rect.right += scrollLeft * modifier;\n  return rect;\n}\n\n/*\n * Helper to detect borders of a given element\n * @method\n * @memberof Popper.Utils\n * @param {CSSStyleDeclaration} styles\n * Result of `getStyleComputedProperty` on the given element\n * @param {String} axis - `x` or `y`\n * @return {number} borders - The borders size of the given axis\n */\n\nfunction getBordersSize(styles, axis) {\n  var sideA = axis === 'x' ? 'Left' : 'Top';\n  var sideB = sideA === 'Left' ? 'Right' : 'Bottom';\n\n  return parseFloat(styles['border' + sideA + 'Width']) + parseFloat(styles['border' + sideB + 'Width']);\n}\n\nfunction getSize(axis, body, html, computedStyle) {\n  return Math.max(body['offset' + axis], body['scroll' + axis], html['client' + axis], html['offset' + axis], html['scroll' + axis], isIE(10) ? parseInt(html['offset' + axis]) + parseInt(computedStyle['margin' + (axis === 'Height' ? 'Top' : 'Left')]) + parseInt(computedStyle['margin' + (axis === 'Height' ? 'Bottom' : 'Right')]) : 0);\n}\n\nfunction getWindowSizes(document) {\n  var body = document.body;\n  var html = document.documentElement;\n  var computedStyle = isIE(10) && getComputedStyle(html);\n\n  return {\n    height: getSize('Height', body, html, computedStyle),\n    width: getSize('Width', body, html, computedStyle)\n  };\n}\n\nvar classCallCheck = function (instance, Constructor) {\n  if (!(instance instanceof Constructor)) {\n    throw new TypeError(\"Cannot call a class as a function\");\n  }\n};\n\nvar createClass = function () {\n  function defineProperties(target, props) {\n    for (var i = 0; i < props.length; i++) {\n      var descriptor = props[i];\n      descriptor.enumerable = descriptor.enumerable || false;\n      descriptor.configurable = true;\n      if (\"value\" in descriptor) descriptor.writable = true;\n      Object.defineProperty(target, descriptor.key, descriptor);\n    }\n  }\n\n  return function (Constructor, protoProps, staticProps) {\n    if (protoProps) defineProperties(Constructor.prototype, protoProps);\n    if (staticProps) defineProperties(Constructor, staticProps);\n    return Constructor;\n  };\n}();\n\n\n\n\n\nvar defineProperty = function (obj, key, value) {\n  if (key in obj) {\n    Object.defineProperty(obj, key, {\n      value: value,\n      enumerable: true,\n      configurable: true,\n      writable: true\n    });\n  } else {\n    obj[key] = value;\n  }\n\n  return obj;\n};\n\nvar _extends = Object.assign || function (target) {\n  for (var i = 1; i < arguments.length; i++) {\n    var source = arguments[i];\n\n    for (var key in source) {\n      if (Object.prototype.hasOwnProperty.call(source, key)) {\n        target[key] = source[key];\n      }\n    }\n  }\n\n  return target;\n};\n\n/**\n * Given element offsets, generate an output similar to getBoundingClientRect\n * @method\n * @memberof Popper.Utils\n * @argument {Object} offsets\n * @returns {Object} ClientRect like output\n */\nfunction getClientRect(offsets) {\n  return _extends({}, offsets, {\n    right: offsets.left + offsets.width,\n    bottom: offsets.top + offsets.height\n  });\n}\n\n/**\n * Get bounding client rect of given element\n * @method\n * @memberof Popper.Utils\n * @param {HTMLElement} element\n * @return {Object} client rect\n */\nfunction getBoundingClientRect(element) {\n  var rect = {};\n\n  // IE10 10 FIX: Please, don't ask, the element isn't\n  // considered in DOM in some circumstances...\n  // This isn't reproducible in IE10 compatibility mode of IE11\n  try {\n    if (isIE(10)) {\n      rect = element.getBoundingClientRect();\n      var scrollTop = getScroll(element, 'top');\n      var scrollLeft = getScroll(element, 'left');\n      rect.top += scrollTop;\n      rect.left += scrollLeft;\n      rect.bottom += scrollTop;\n      rect.right += scrollLeft;\n    } else {\n      rect = element.getBoundingClientRect();\n    }\n  } catch (e) {}\n\n  var result = {\n    left: rect.left,\n    top: rect.top,\n    width: rect.right - rect.left,\n    height: rect.bottom - rect.top\n  };\n\n  // subtract scrollbar size from sizes\n  var sizes = element.nodeName === 'HTML' ? getWindowSizes(element.ownerDocument) : {};\n  var width = sizes.width || element.clientWidth || result.width;\n  var height = sizes.height || element.clientHeight || result.height;\n\n  var horizScrollbar = element.offsetWidth - width;\n  var vertScrollbar = element.offsetHeight - height;\n\n  // if an hypothetical scrollbar is detected, we must be sure it's not a `border`\n  // we make this check conditional for performance reasons\n  if (horizScrollbar || vertScrollbar) {\n    var styles = getStyleComputedProperty(element);\n    horizScrollbar -= getBordersSize(styles, 'x');\n    vertScrollbar -= getBordersSize(styles, 'y');\n\n    result.width -= horizScrollbar;\n    result.height -= vertScrollbar;\n  }\n\n  return getClientRect(result);\n}\n\nfunction getOffsetRectRelativeToArbitraryNode(children, parent) {\n  var fixedPosition = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;\n\n  var isIE10 = isIE(10);\n  var isHTML = parent.nodeName === 'HTML';\n  var childrenRect = getBoundingClientRect(children);\n  var parentRect = getBoundingClientRect(parent);\n  var scrollParent = getScrollParent(children);\n\n  var styles = getStyleComputedProperty(parent);\n  var borderTopWidth = parseFloat(styles.borderTopWidth);\n  var borderLeftWidth = parseFloat(styles.borderLeftWidth);\n\n  // In cases where the parent is fixed, we must ignore negative scroll in offset calc\n  if (fixedPosition && isHTML) {\n    parentRect.top = Math.max(parentRect.top, 0);\n    parentRect.left = Math.max(parentRect.left, 0);\n  }\n  var offsets = getClientRect({\n    top: childrenRect.top - parentRect.top - borderTopWidth,\n    left: childrenRect.left - parentRect.left - borderLeftWidth,\n    width: childrenRect.width,\n    height: childrenRect.height\n  });\n  offsets.marginTop = 0;\n  offsets.marginLeft = 0;\n\n  // Subtract margins of documentElement in case it's being used as parent\n  // we do this only on HTML because it's the only element that behaves\n  // differently when margins are applied to it. The margins are included in\n  // the box of the documentElement, in the other cases not.\n  if (!isIE10 && isHTML) {\n    var marginTop = parseFloat(styles.marginTop);\n    var marginLeft = parseFloat(styles.marginLeft);\n\n    offsets.top -= borderTopWidth - marginTop;\n    offsets.bottom -= borderTopWidth - marginTop;\n    offsets.left -= borderLeftWidth - marginLeft;\n    offsets.right -= borderLeftWidth - marginLeft;\n\n    // Attach marginTop and marginLeft because in some circumstances we may need them\n    offsets.marginTop = marginTop;\n    offsets.marginLeft = marginLeft;\n  }\n\n  if (isIE10 && !fixedPosition ? parent.contains(scrollParent) : parent === scrollParent && scrollParent.nodeName !== 'BODY') {\n    offsets = includeScroll(offsets, parent);\n  }\n\n  return offsets;\n}\n\nfunction getViewportOffsetRectRelativeToArtbitraryNode(element) {\n  var excludeScroll = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;\n\n  var html = element.ownerDocument.documentElement;\n  var relativeOffset = getOffsetRectRelativeToArbitraryNode(element, html);\n  var width = Math.max(html.clientWidth, window.innerWidth || 0);\n  var height = Math.max(html.clientHeight, window.innerHeight || 0);\n\n  var scrollTop = !excludeScroll ? getScroll(html) : 0;\n  var scrollLeft = !excludeScroll ? getScroll(html, 'left') : 0;\n\n  var offset = {\n    top: scrollTop - relativeOffset.top + relativeOffset.marginTop,\n    left: scrollLeft - relativeOffset.left + relativeOffset.marginLeft,\n    width: width,\n    height: height\n  };\n\n  return getClientRect(offset);\n}\n\n/**\n * Check if the given element is fixed or is inside a fixed parent\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element\n * @argument {Element} customContainer\n * @returns {Boolean} answer to \"isFixed?\"\n */\nfunction isFixed(element) {\n  var nodeName = element.nodeName;\n  if (nodeName === 'BODY' || nodeName === 'HTML') {\n    return false;\n  }\n  if (getStyleComputedProperty(element, 'position') === 'fixed') {\n    return true;\n  }\n  var parentNode = getParentNode(element);\n  if (!parentNode) {\n    return false;\n  }\n  return isFixed(parentNode);\n}\n\n/**\n * Finds the first parent of an element that has a transformed property defined\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element\n * @returns {Element} first transformed parent or documentElement\n */\n\nfunction getFixedPositionOffsetParent(element) {\n  // This check is needed to avoid errors in case one of the elements isn't defined for any reason\n  if (!element || !element.parentElement || isIE()) {\n    return document.documentElement;\n  }\n  var el = element.parentElement;\n  while (el && getStyleComputedProperty(el, 'transform') === 'none') {\n    el = el.parentElement;\n  }\n  return el || document.documentElement;\n}\n\n/**\n * Computed the boundaries limits and return them\n * @method\n * @memberof Popper.Utils\n * @param {HTMLElement} popper\n * @param {HTMLElement} reference\n * @param {number} padding\n * @param {HTMLElement} boundariesElement - Element used to define the boundaries\n * @param {Boolean} fixedPosition - Is in fixed position mode\n * @returns {Object} Coordinates of the boundaries\n */\nfunction getBoundaries(popper, reference, padding, boundariesElement) {\n  var fixedPosition = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : false;\n\n  // NOTE: 1 DOM access here\n\n  var boundaries = { top: 0, left: 0 };\n  var offsetParent = fixedPosition ? getFixedPositionOffsetParent(popper) : findCommonOffsetParent(popper, getReferenceNode(reference));\n\n  // Handle viewport case\n  if (boundariesElement === 'viewport') {\n    boundaries = getViewportOffsetRectRelativeToArtbitraryNode(offsetParent, fixedPosition);\n  } else {\n    // Handle other cases based on DOM element used as boundaries\n    var boundariesNode = void 0;\n    if (boundariesElement === 'scrollParent') {\n      boundariesNode = getScrollParent(getParentNode(reference));\n      if (boundariesNode.nodeName === 'BODY') {\n        boundariesNode = popper.ownerDocument.documentElement;\n      }\n    } else if (boundariesElement === 'window') {\n      boundariesNode = popper.ownerDocument.documentElement;\n    } else {\n      boundariesNode = boundariesElement;\n    }\n\n    var offsets = getOffsetRectRelativeToArbitraryNode(boundariesNode, offsetParent, fixedPosition);\n\n    // In case of HTML, we need a different computation\n    if (boundariesNode.nodeName === 'HTML' && !isFixed(offsetParent)) {\n      var _getWindowSizes = getWindowSizes(popper.ownerDocument),\n          height = _getWindowSizes.height,\n          width = _getWindowSizes.width;\n\n      boundaries.top += offsets.top - offsets.marginTop;\n      boundaries.bottom = height + offsets.top;\n      boundaries.left += offsets.left - offsets.marginLeft;\n      boundaries.right = width + offsets.left;\n    } else {\n      // for all the other DOM elements, this one is good\n      boundaries = offsets;\n    }\n  }\n\n  // Add paddings\n  padding = padding || 0;\n  var isPaddingNumber = typeof padding === 'number';\n  boundaries.left += isPaddingNumber ? padding : padding.left || 0;\n  boundaries.top += isPaddingNumber ? padding : padding.top || 0;\n  boundaries.right -= isPaddingNumber ? padding : padding.right || 0;\n  boundaries.bottom -= isPaddingNumber ? padding : padding.bottom || 0;\n\n  return boundaries;\n}\n\nfunction getArea(_ref) {\n  var width = _ref.width,\n      height = _ref.height;\n\n  return width * height;\n}\n\n/**\n * Utility used to transform the `auto` placement to the placement with more\n * available space.\n * @method\n * @memberof Popper.Utils\n * @argument {Object} data - The data object generated by update method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction computeAutoPlacement(placement, refRect, popper, reference, boundariesElement) {\n  var padding = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : 0;\n\n  if (placement.indexOf('auto') === -1) {\n    return placement;\n  }\n\n  var boundaries = getBoundaries(popper, reference, padding, boundariesElement);\n\n  var rects = {\n    top: {\n      width: boundaries.width,\n      height: refRect.top - boundaries.top\n    },\n    right: {\n      width: boundaries.right - refRect.right,\n      height: boundaries.height\n    },\n    bottom: {\n      width: boundaries.width,\n      height: boundaries.bottom - refRect.bottom\n    },\n    left: {\n      width: refRect.left - boundaries.left,\n      height: boundaries.height\n    }\n  };\n\n  var sortedAreas = Object.keys(rects).map(function (key) {\n    return _extends({\n      key: key\n    }, rects[key], {\n      area: getArea(rects[key])\n    });\n  }).sort(function (a, b) {\n    return b.area - a.area;\n  });\n\n  var filteredAreas = sortedAreas.filter(function (_ref2) {\n    var width = _ref2.width,\n        height = _ref2.height;\n    return width >= popper.clientWidth && height >= popper.clientHeight;\n  });\n\n  var computedPlacement = filteredAreas.length > 0 ? filteredAreas[0].key : sortedAreas[0].key;\n\n  var variation = placement.split('-')[1];\n\n  return computedPlacement + (variation ? '-' + variation : '');\n}\n\n/**\n * Get offsets to the reference element\n * @method\n * @memberof Popper.Utils\n * @param {Object} state\n * @param {Element} popper - the popper element\n * @param {Element} reference - the reference element (the popper will be relative to this)\n * @param {Element} fixedPosition - is in fixed position mode\n * @returns {Object} An object containing the offsets which will be applied to the popper\n */\nfunction getReferenceOffsets(state, popper, reference) {\n  var fixedPosition = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;\n\n  var commonOffsetParent = fixedPosition ? getFixedPositionOffsetParent(popper) : findCommonOffsetParent(popper, getReferenceNode(reference));\n  return getOffsetRectRelativeToArbitraryNode(reference, commonOffsetParent, fixedPosition);\n}\n\n/**\n * Get the outer sizes of the given element (offset size + margins)\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element\n * @returns {Object} object containing width and height properties\n */\nfunction getOuterSizes(element) {\n  var window = element.ownerDocument.defaultView;\n  var styles = window.getComputedStyle(element);\n  var x = parseFloat(styles.marginTop || 0) + parseFloat(styles.marginBottom || 0);\n  var y = parseFloat(styles.marginLeft || 0) + parseFloat(styles.marginRight || 0);\n  var result = {\n    width: element.offsetWidth + y,\n    height: element.offsetHeight + x\n  };\n  return result;\n}\n\n/**\n * Get the opposite placement of the given one\n * @method\n * @memberof Popper.Utils\n * @argument {String} placement\n * @returns {String} flipped placement\n */\nfunction getOppositePlacement(placement) {\n  var hash = { left: 'right', right: 'left', bottom: 'top', top: 'bottom' };\n  return placement.replace(/left|right|bottom|top/g, function (matched) {\n    return hash[matched];\n  });\n}\n\n/**\n * Get offsets to the popper\n * @method\n * @memberof Popper.Utils\n * @param {Object} position - CSS position the Popper will get applied\n * @param {HTMLElement} popper - the popper element\n * @param {Object} referenceOffsets - the reference offsets (the popper will be relative to this)\n * @param {String} placement - one of the valid placement options\n * @returns {Object} popperOffsets - An object containing the offsets which will be applied to the popper\n */\nfunction getPopperOffsets(popper, referenceOffsets, placement) {\n  placement = placement.split('-')[0];\n\n  // Get popper node sizes\n  var popperRect = getOuterSizes(popper);\n\n  // Add position, width and height to our offsets object\n  var popperOffsets = {\n    width: popperRect.width,\n    height: popperRect.height\n  };\n\n  // depending by the popper placement we have to compute its offsets slightly differently\n  var isHoriz = ['right', 'left'].indexOf(placement) !== -1;\n  var mainSide = isHoriz ? 'top' : 'left';\n  var secondarySide = isHoriz ? 'left' : 'top';\n  var measurement = isHoriz ? 'height' : 'width';\n  var secondaryMeasurement = !isHoriz ? 'height' : 'width';\n\n  popperOffsets[mainSide] = referenceOffsets[mainSide] + referenceOffsets[measurement] / 2 - popperRect[measurement] / 2;\n  if (placement === secondarySide) {\n    popperOffsets[secondarySide] = referenceOffsets[secondarySide] - popperRect[secondaryMeasurement];\n  } else {\n    popperOffsets[secondarySide] = referenceOffsets[getOppositePlacement(secondarySide)];\n  }\n\n  return popperOffsets;\n}\n\n/**\n * Mimics the `find` method of Array\n * @method\n * @memberof Popper.Utils\n * @argument {Array} arr\n * @argument prop\n * @argument value\n * @returns index or -1\n */\nfunction find(arr, check) {\n  // use native find if supported\n  if (Array.prototype.find) {\n    return arr.find(check);\n  }\n\n  // use `filter` to obtain the same behavior of `find`\n  return arr.filter(check)[0];\n}\n\n/**\n * Return the index of the matching object\n * @method\n * @memberof Popper.Utils\n * @argument {Array} arr\n * @argument prop\n * @argument value\n * @returns index or -1\n */\nfunction findIndex(arr, prop, value) {\n  // use native findIndex if supported\n  if (Array.prototype.findIndex) {\n    return arr.findIndex(function (cur) {\n      return cur[prop] === value;\n    });\n  }\n\n  // use `find` + `indexOf` if `findIndex` isn't supported\n  var match = find(arr, function (obj) {\n    return obj[prop] === value;\n  });\n  return arr.indexOf(match);\n}\n\n/**\n * Loop trough the list of modifiers and run them in order,\n * each of them will then edit the data object.\n * @method\n * @memberof Popper.Utils\n * @param {dataObject} data\n * @param {Array} modifiers\n * @param {String} ends - Optional modifier name used as stopper\n * @returns {dataObject}\n */\nfunction runModifiers(modifiers, data, ends) {\n  var modifiersToRun = ends === undefined ? modifiers : modifiers.slice(0, findIndex(modifiers, 'name', ends));\n\n  modifiersToRun.forEach(function (modifier) {\n    if (modifier['function']) {\n      // eslint-disable-line dot-notation\n      console.warn('`modifier.function` is deprecated, use `modifier.fn`!');\n    }\n    var fn = modifier['function'] || modifier.fn; // eslint-disable-line dot-notation\n    if (modifier.enabled && isFunction(fn)) {\n      // Add properties to offsets to make them a complete clientRect object\n      // we do this before each modifier to make sure the previous one doesn't\n      // mess with these values\n      data.offsets.popper = getClientRect(data.offsets.popper);\n      data.offsets.reference = getClientRect(data.offsets.reference);\n\n      data = fn(data, modifier);\n    }\n  });\n\n  return data;\n}\n\n/**\n * Updates the position of the popper, computing the new offsets and applying\n * the new style.<br />\n * Prefer `scheduleUpdate` over `update` because of performance reasons.\n * @method\n * @memberof Popper\n */\nfunction update() {\n  // if popper is destroyed, don't perform any further update\n  if (this.state.isDestroyed) {\n    return;\n  }\n\n  var data = {\n    instance: this,\n    styles: {},\n    arrowStyles: {},\n    attributes: {},\n    flipped: false,\n    offsets: {}\n  };\n\n  // compute reference element offsets\n  data.offsets.reference = getReferenceOffsets(this.state, this.popper, this.reference, this.options.positionFixed);\n\n  // compute auto placement, store placement inside the data object,\n  // modifiers will be able to edit `placement` if needed\n  // and refer to originalPlacement to know the original value\n  data.placement = computeAutoPlacement(this.options.placement, data.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding);\n\n  // store the computed placement inside `originalPlacement`\n  data.originalPlacement = data.placement;\n\n  data.positionFixed = this.options.positionFixed;\n\n  // compute the popper offsets\n  data.offsets.popper = getPopperOffsets(this.popper, data.offsets.reference, data.placement);\n\n  data.offsets.popper.position = this.options.positionFixed ? 'fixed' : 'absolute';\n\n  // run the modifiers\n  data = runModifiers(this.modifiers, data);\n\n  // the first `update` will call `onCreate` callback\n  // the other ones will call `onUpdate` callback\n  if (!this.state.isCreated) {\n    this.state.isCreated = true;\n    this.options.onCreate(data);\n  } else {\n    this.options.onUpdate(data);\n  }\n}\n\n/**\n * Helper used to know if the given modifier is enabled.\n * @method\n * @memberof Popper.Utils\n * @returns {Boolean}\n */\nfunction isModifierEnabled(modifiers, modifierName) {\n  return modifiers.some(function (_ref) {\n    var name = _ref.name,\n        enabled = _ref.enabled;\n    return enabled && name === modifierName;\n  });\n}\n\n/**\n * Get the prefixed supported property name\n * @method\n * @memberof Popper.Utils\n * @argument {String} property (camelCase)\n * @returns {String} prefixed property (camelCase or PascalCase, depending on the vendor prefix)\n */\nfunction getSupportedPropertyName(property) {\n  var prefixes = [false, 'ms', 'Webkit', 'Moz', 'O'];\n  var upperProp = property.charAt(0).toUpperCase() + property.slice(1);\n\n  for (var i = 0; i < prefixes.length; i++) {\n    var prefix = prefixes[i];\n    var toCheck = prefix ? '' + prefix + upperProp : property;\n    if (typeof document.body.style[toCheck] !== 'undefined') {\n      return toCheck;\n    }\n  }\n  return null;\n}\n\n/**\n * Destroys the popper.\n * @method\n * @memberof Popper\n */\nfunction destroy() {\n  this.state.isDestroyed = true;\n\n  // touch DOM only if `applyStyle` modifier is enabled\n  if (isModifierEnabled(this.modifiers, 'applyStyle')) {\n    this.popper.removeAttribute('x-placement');\n    this.popper.style.position = '';\n    this.popper.style.top = '';\n    this.popper.style.left = '';\n    this.popper.style.right = '';\n    this.popper.style.bottom = '';\n    this.popper.style.willChange = '';\n    this.popper.style[getSupportedPropertyName('transform')] = '';\n  }\n\n  this.disableEventListeners();\n\n  // remove the popper if user explicitly asked for the deletion on destroy\n  // do not use `remove` because IE11 doesn't support it\n  if (this.options.removeOnDestroy) {\n    this.popper.parentNode.removeChild(this.popper);\n  }\n  return this;\n}\n\n/**\n * Get the window associated with the element\n * @argument {Element} element\n * @returns {Window}\n */\nfunction getWindow(element) {\n  var ownerDocument = element.ownerDocument;\n  return ownerDocument ? ownerDocument.defaultView : window;\n}\n\nfunction attachToScrollParents(scrollParent, event, callback, scrollParents) {\n  var isBody = scrollParent.nodeName === 'BODY';\n  var target = isBody ? scrollParent.ownerDocument.defaultView : scrollParent;\n  target.addEventListener(event, callback, { passive: true });\n\n  if (!isBody) {\n    attachToScrollParents(getScrollParent(target.parentNode), event, callback, scrollParents);\n  }\n  scrollParents.push(target);\n}\n\n/**\n * Setup needed event listeners used to update the popper position\n * @method\n * @memberof Popper.Utils\n * @private\n */\nfunction setupEventListeners(reference, options, state, updateBound) {\n  // Resize event listener on window\n  state.updateBound = updateBound;\n  getWindow(reference).addEventListener('resize', state.updateBound, { passive: true });\n\n  // Scroll event listener on scroll parents\n  var scrollElement = getScrollParent(reference);\n  attachToScrollParents(scrollElement, 'scroll', state.updateBound, state.scrollParents);\n  state.scrollElement = scrollElement;\n  state.eventsEnabled = true;\n\n  return state;\n}\n\n/**\n * It will add resize/scroll events and start recalculating\n * position of the popper element when they are triggered.\n * @method\n * @memberof Popper\n */\nfunction enableEventListeners() {\n  if (!this.state.eventsEnabled) {\n    this.state = setupEventListeners(this.reference, this.options, this.state, this.scheduleUpdate);\n  }\n}\n\n/**\n * Remove event listeners used to update the popper position\n * @method\n * @memberof Popper.Utils\n * @private\n */\nfunction removeEventListeners(reference, state) {\n  // Remove resize event listener on window\n  getWindow(reference).removeEventListener('resize', state.updateBound);\n\n  // Remove scroll event listener on scroll parents\n  state.scrollParents.forEach(function (target) {\n    target.removeEventListener('scroll', state.updateBound);\n  });\n\n  // Reset state\n  state.updateBound = null;\n  state.scrollParents = [];\n  state.scrollElement = null;\n  state.eventsEnabled = false;\n  return state;\n}\n\n/**\n * It will remove resize/scroll events and won't recalculate popper position\n * when they are triggered. It also won't trigger `onUpdate` callback anymore,\n * unless you call `update` method manually.\n * @method\n * @memberof Popper\n */\nfunction disableEventListeners() {\n  if (this.state.eventsEnabled) {\n    cancelAnimationFrame(this.scheduleUpdate);\n    this.state = removeEventListeners(this.reference, this.state);\n  }\n}\n\n/**\n * Tells if a given input is a number\n * @method\n * @memberof Popper.Utils\n * @param {*} input to check\n * @return {Boolean}\n */\nfunction isNumeric(n) {\n  return n !== '' && !isNaN(parseFloat(n)) && isFinite(n);\n}\n\n/**\n * Set the style to the given popper\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element - Element to apply the style to\n * @argument {Object} styles\n * Object with a list of properties and values which will be applied to the element\n */\nfunction setStyles(element, styles) {\n  Object.keys(styles).forEach(function (prop) {\n    var unit = '';\n    // add unit if the value is numeric and is one of the following\n    if (['width', 'height', 'top', 'right', 'bottom', 'left'].indexOf(prop) !== -1 && isNumeric(styles[prop])) {\n      unit = 'px';\n    }\n    element.style[prop] = styles[prop] + unit;\n  });\n}\n\n/**\n * Set the attributes to the given popper\n * @method\n * @memberof Popper.Utils\n * @argument {Element} element - Element to apply the attributes to\n * @argument {Object} styles\n * Object with a list of properties and values which will be applied to the element\n */\nfunction setAttributes(element, attributes) {\n  Object.keys(attributes).forEach(function (prop) {\n    var value = attributes[prop];\n    if (value !== false) {\n      element.setAttribute(prop, attributes[prop]);\n    } else {\n      element.removeAttribute(prop);\n    }\n  });\n}\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by `update` method\n * @argument {Object} data.styles - List of style properties - values to apply to popper element\n * @argument {Object} data.attributes - List of attribute properties - values to apply to popper element\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The same data object\n */\nfunction applyStyle(data) {\n  // any property present in `data.styles` will be applied to the popper,\n  // in this way we can make the 3rd party modifiers add custom styles to it\n  // Be aware, modifiers could override the properties defined in the previous\n  // lines of this modifier!\n  setStyles(data.instance.popper, data.styles);\n\n  // any property present in `data.attributes` will be applied to the popper,\n  // they will be set as HTML attributes of the element\n  setAttributes(data.instance.popper, data.attributes);\n\n  // if arrowElement is defined and arrowStyles has some properties\n  if (data.arrowElement && Object.keys(data.arrowStyles).length) {\n    setStyles(data.arrowElement, data.arrowStyles);\n  }\n\n  return data;\n}\n\n/**\n * Set the x-placement attribute before everything else because it could be used\n * to add margins to the popper margins needs to be calculated to get the\n * correct popper offsets.\n * @method\n * @memberof Popper.modifiers\n * @param {HTMLElement} reference - The reference element used to position the popper\n * @param {HTMLElement} popper - The HTML element used as popper\n * @param {Object} options - Popper.js options\n */\nfunction applyStyleOnLoad(reference, popper, options, modifierOptions, state) {\n  // compute reference element offsets\n  var referenceOffsets = getReferenceOffsets(state, popper, reference, options.positionFixed);\n\n  // compute auto placement, store placement inside the data object,\n  // modifiers will be able to edit `placement` if needed\n  // and refer to originalPlacement to know the original value\n  var placement = computeAutoPlacement(options.placement, referenceOffsets, popper, reference, options.modifiers.flip.boundariesElement, options.modifiers.flip.padding);\n\n  popper.setAttribute('x-placement', placement);\n\n  // Apply `position` to popper before anything else because\n  // without the position applied we can't guarantee correct computations\n  setStyles(popper, { position: options.positionFixed ? 'fixed' : 'absolute' });\n\n  return options;\n}\n\n/**\n * @function\n * @memberof Popper.Utils\n * @argument {Object} data - The data object generated by `update` method\n * @argument {Boolean} shouldRound - If the offsets should be rounded at all\n * @returns {Object} The popper's position offsets rounded\n *\n * The tale of pixel-perfect positioning. It's still not 100% perfect, but as\n * good as it can be within reason.\n * Discussion here: https://github.com/FezVrasta/popper.js/pull/715\n *\n * Low DPI screens cause a popper to be blurry if not using full pixels (Safari\n * as well on High DPI screens).\n *\n * Firefox prefers no rounding for positioning and does not have blurriness on\n * high DPI screens.\n *\n * Only horizontal placement and left/right values need to be considered.\n */\nfunction getRoundedOffsets(data, shouldRound) {\n  var _data$offsets = data.offsets,\n      popper = _data$offsets.popper,\n      reference = _data$offsets.reference;\n  var round = Math.round,\n      floor = Math.floor;\n\n  var noRound = function noRound(v) {\n    return v;\n  };\n\n  var referenceWidth = round(reference.width);\n  var popperWidth = round(popper.width);\n\n  var isVertical = ['left', 'right'].indexOf(data.placement) !== -1;\n  var isVariation = data.placement.indexOf('-') !== -1;\n  var sameWidthParity = referenceWidth % 2 === popperWidth % 2;\n  var bothOddWidth = referenceWidth % 2 === 1 && popperWidth % 2 === 1;\n\n  var horizontalToInteger = !shouldRound ? noRound : isVertical || isVariation || sameWidthParity ? round : floor;\n  var verticalToInteger = !shouldRound ? noRound : round;\n\n  return {\n    left: horizontalToInteger(bothOddWidth && !isVariation && shouldRound ? popper.left - 1 : popper.left),\n    top: verticalToInteger(popper.top),\n    bottom: verticalToInteger(popper.bottom),\n    right: horizontalToInteger(popper.right)\n  };\n}\n\nvar isFirefox = isBrowser && /Firefox/i.test(navigator.userAgent);\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by `update` method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction computeStyle(data, options) {\n  var x = options.x,\n      y = options.y;\n  var popper = data.offsets.popper;\n\n  // Remove this legacy support in Popper.js v2\n\n  var legacyGpuAccelerationOption = find(data.instance.modifiers, function (modifier) {\n    return modifier.name === 'applyStyle';\n  }).gpuAcceleration;\n  if (legacyGpuAccelerationOption !== undefined) {\n    console.warn('WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!');\n  }\n  var gpuAcceleration = legacyGpuAccelerationOption !== undefined ? legacyGpuAccelerationOption : options.gpuAcceleration;\n\n  var offsetParent = getOffsetParent(data.instance.popper);\n  var offsetParentRect = getBoundingClientRect(offsetParent);\n\n  // Styles\n  var styles = {\n    position: popper.position\n  };\n\n  var offsets = getRoundedOffsets(data, window.devicePixelRatio < 2 || !isFirefox);\n\n  var sideA = x === 'bottom' ? 'top' : 'bottom';\n  var sideB = y === 'right' ? 'left' : 'right';\n\n  // if gpuAcceleration is set to `true` and transform is supported,\n  //  we use `translate3d` to apply the position to the popper we\n  // automatically use the supported prefixed version if needed\n  var prefixedProperty = getSupportedPropertyName('transform');\n\n  // now, let's make a step back and look at this code closely (wtf?)\n  // If the content of the popper grows once it's been positioned, it\n  // may happen that the popper gets misplaced because of the new content\n  // overflowing its reference element\n  // To avoid this problem, we provide two options (x and y), which allow\n  // the consumer to define the offset origin.\n  // If we position a popper on top of a reference element, we can set\n  // `x` to `top` to make the popper grow towards its top instead of\n  // its bottom.\n  var left = void 0,\n      top = void 0;\n  if (sideA === 'bottom') {\n    // when offsetParent is <html> the positioning is relative to the bottom of the screen (excluding the scrollbar)\n    // and not the bottom of the html element\n    if (offsetParent.nodeName === 'HTML') {\n      top = -offsetParent.clientHeight + offsets.bottom;\n    } else {\n      top = -offsetParentRect.height + offsets.bottom;\n    }\n  } else {\n    top = offsets.top;\n  }\n  if (sideB === 'right') {\n    if (offsetParent.nodeName === 'HTML') {\n      left = -offsetParent.clientWidth + offsets.right;\n    } else {\n      left = -offsetParentRect.width + offsets.right;\n    }\n  } else {\n    left = offsets.left;\n  }\n  if (gpuAcceleration && prefixedProperty) {\n    styles[prefixedProperty] = 'translate3d(' + left + 'px, ' + top + 'px, 0)';\n    styles[sideA] = 0;\n    styles[sideB] = 0;\n    styles.willChange = 'transform';\n  } else {\n    // othwerise, we use the standard `top`, `left`, `bottom` and `right` properties\n    var invertTop = sideA === 'bottom' ? -1 : 1;\n    var invertLeft = sideB === 'right' ? -1 : 1;\n    styles[sideA] = top * invertTop;\n    styles[sideB] = left * invertLeft;\n    styles.willChange = sideA + ', ' + sideB;\n  }\n\n  // Attributes\n  var attributes = {\n    'x-placement': data.placement\n  };\n\n  // Update `data` attributes, styles and arrowStyles\n  data.attributes = _extends({}, attributes, data.attributes);\n  data.styles = _extends({}, styles, data.styles);\n  data.arrowStyles = _extends({}, data.offsets.arrow, data.arrowStyles);\n\n  return data;\n}\n\n/**\n * Helper used to know if the given modifier depends from another one.<br />\n * It checks if the needed modifier is listed and enabled.\n * @method\n * @memberof Popper.Utils\n * @param {Array} modifiers - list of modifiers\n * @param {String} requestingName - name of requesting modifier\n * @param {String} requestedName - name of requested modifier\n * @returns {Boolean}\n */\nfunction isModifierRequired(modifiers, requestingName, requestedName) {\n  var requesting = find(modifiers, function (_ref) {\n    var name = _ref.name;\n    return name === requestingName;\n  });\n\n  var isRequired = !!requesting && modifiers.some(function (modifier) {\n    return modifier.name === requestedName && modifier.enabled && modifier.order < requesting.order;\n  });\n\n  if (!isRequired) {\n    var _requesting = '`' + requestingName + '`';\n    var requested = '`' + requestedName + '`';\n    console.warn(requested + ' modifier is required by ' + _requesting + ' modifier in order to work, be sure to include it before ' + _requesting + '!');\n  }\n  return isRequired;\n}\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by update method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction arrow(data, options) {\n  var _data$offsets$arrow;\n\n  // arrow depends on keepTogether in order to work\n  if (!isModifierRequired(data.instance.modifiers, 'arrow', 'keepTogether')) {\n    return data;\n  }\n\n  var arrowElement = options.element;\n\n  // if arrowElement is a string, suppose it's a CSS selector\n  if (typeof arrowElement === 'string') {\n    arrowElement = data.instance.popper.querySelector(arrowElement);\n\n    // if arrowElement is not found, don't run the modifier\n    if (!arrowElement) {\n      return data;\n    }\n  } else {\n    // if the arrowElement isn't a query selector we must check that the\n    // provided DOM node is child of its popper node\n    if (!data.instance.popper.contains(arrowElement)) {\n      console.warn('WARNING: `arrow.element` must be child of its popper element!');\n      return data;\n    }\n  }\n\n  var placement = data.placement.split('-')[0];\n  var _data$offsets = data.offsets,\n      popper = _data$offsets.popper,\n      reference = _data$offsets.reference;\n\n  var isVertical = ['left', 'right'].indexOf(placement) !== -1;\n\n  var len = isVertical ? 'height' : 'width';\n  var sideCapitalized = isVertical ? 'Top' : 'Left';\n  var side = sideCapitalized.toLowerCase();\n  var altSide = isVertical ? 'left' : 'top';\n  var opSide = isVertical ? 'bottom' : 'right';\n  var arrowElementSize = getOuterSizes(arrowElement)[len];\n\n  //\n  // extends keepTogether behavior making sure the popper and its\n  // reference have enough pixels in conjunction\n  //\n\n  // top/left side\n  if (reference[opSide] - arrowElementSize < popper[side]) {\n    data.offsets.popper[side] -= popper[side] - (reference[opSide] - arrowElementSize);\n  }\n  // bottom/right side\n  if (reference[side] + arrowElementSize > popper[opSide]) {\n    data.offsets.popper[side] += reference[side] + arrowElementSize - popper[opSide];\n  }\n  data.offsets.popper = getClientRect(data.offsets.popper);\n\n  // compute center of the popper\n  var center = reference[side] + reference[len] / 2 - arrowElementSize / 2;\n\n  // Compute the sideValue using the updated popper offsets\n  // take popper margin in account because we don't have this info available\n  var css = getStyleComputedProperty(data.instance.popper);\n  var popperMarginSide = parseFloat(css['margin' + sideCapitalized]);\n  var popperBorderSide = parseFloat(css['border' + sideCapitalized + 'Width']);\n  var sideValue = center - data.offsets.popper[side] - popperMarginSide - popperBorderSide;\n\n  // prevent arrowElement from being placed not contiguously to its popper\n  sideValue = Math.max(Math.min(popper[len] - arrowElementSize, sideValue), 0);\n\n  data.arrowElement = arrowElement;\n  data.offsets.arrow = (_data$offsets$arrow = {}, defineProperty(_data$offsets$arrow, side, Math.round(sideValue)), defineProperty(_data$offsets$arrow, altSide, ''), _data$offsets$arrow);\n\n  return data;\n}\n\n/**\n * Get the opposite placement variation of the given one\n * @method\n * @memberof Popper.Utils\n * @argument {String} placement variation\n * @returns {String} flipped placement variation\n */\nfunction getOppositeVariation(variation) {\n  if (variation === 'end') {\n    return 'start';\n  } else if (variation === 'start') {\n    return 'end';\n  }\n  return variation;\n}\n\n/**\n * List of accepted placements to use as values of the `placement` option.<br />\n * Valid placements are:\n * - `auto`\n * - `top`\n * - `right`\n * - `bottom`\n * - `left`\n *\n * Each placement can have a variation from this list:\n * - `-start`\n * - `-end`\n *\n * Variations are interpreted easily if you think of them as the left to right\n * written languages. Horizontally (`top` and `bottom`), `start` is left and `end`\n * is right.<br />\n * Vertically (`left` and `right`), `start` is top and `end` is bottom.\n *\n * Some valid examples are:\n * - `top-end` (on top of reference, right aligned)\n * - `right-start` (on right of reference, top aligned)\n * - `bottom` (on bottom, centered)\n * - `auto-end` (on the side with more space available, alignment depends by placement)\n *\n * @static\n * @type {Array}\n * @enum {String}\n * @readonly\n * @method placements\n * @memberof Popper\n */\nvar placements = ['auto-start', 'auto', 'auto-end', 'top-start', 'top', 'top-end', 'right-start', 'right', 'right-end', 'bottom-end', 'bottom', 'bottom-start', 'left-end', 'left', 'left-start'];\n\n// Get rid of `auto` `auto-start` and `auto-end`\nvar validPlacements = placements.slice(3);\n\n/**\n * Given an initial placement, returns all the subsequent placements\n * clockwise (or counter-clockwise).\n *\n * @method\n * @memberof Popper.Utils\n * @argument {String} placement - A valid placement (it accepts variations)\n * @argument {Boolean} counter - Set to true to walk the placements counterclockwise\n * @returns {Array} placements including their variations\n */\nfunction clockwise(placement) {\n  var counter = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;\n\n  var index = validPlacements.indexOf(placement);\n  var arr = validPlacements.slice(index + 1).concat(validPlacements.slice(0, index));\n  return counter ? arr.reverse() : arr;\n}\n\nvar BEHAVIORS = {\n  FLIP: 'flip',\n  CLOCKWISE: 'clockwise',\n  COUNTERCLOCKWISE: 'counterclockwise'\n};\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by update method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction flip(data, options) {\n  // if `inner` modifier is enabled, we can't use the `flip` modifier\n  if (isModifierEnabled(data.instance.modifiers, 'inner')) {\n    return data;\n  }\n\n  if (data.flipped && data.placement === data.originalPlacement) {\n    // seems like flip is trying to loop, probably there's not enough space on any of the flippable sides\n    return data;\n  }\n\n  var boundaries = getBoundaries(data.instance.popper, data.instance.reference, options.padding, options.boundariesElement, data.positionFixed);\n\n  var placement = data.placement.split('-')[0];\n  var placementOpposite = getOppositePlacement(placement);\n  var variation = data.placement.split('-')[1] || '';\n\n  var flipOrder = [];\n\n  switch (options.behavior) {\n    case BEHAVIORS.FLIP:\n      flipOrder = [placement, placementOpposite];\n      break;\n    case BEHAVIORS.CLOCKWISE:\n      flipOrder = clockwise(placement);\n      break;\n    case BEHAVIORS.COUNTERCLOCKWISE:\n      flipOrder = clockwise(placement, true);\n      break;\n    default:\n      flipOrder = options.behavior;\n  }\n\n  flipOrder.forEach(function (step, index) {\n    if (placement !== step || flipOrder.length === index + 1) {\n      return data;\n    }\n\n    placement = data.placement.split('-')[0];\n    placementOpposite = getOppositePlacement(placement);\n\n    var popperOffsets = data.offsets.popper;\n    var refOffsets = data.offsets.reference;\n\n    // using floor because the reference offsets may contain decimals we are not going to consider here\n    var floor = Math.floor;\n    var overlapsRef = placement === 'left' && floor(popperOffsets.right) > floor(refOffsets.left) || placement === 'right' && floor(popperOffsets.left) < floor(refOffsets.right) || placement === 'top' && floor(popperOffsets.bottom) > floor(refOffsets.top) || placement === 'bottom' && floor(popperOffsets.top) < floor(refOffsets.bottom);\n\n    var overflowsLeft = floor(popperOffsets.left) < floor(boundaries.left);\n    var overflowsRight = floor(popperOffsets.right) > floor(boundaries.right);\n    var overflowsTop = floor(popperOffsets.top) < floor(boundaries.top);\n    var overflowsBottom = floor(popperOffsets.bottom) > floor(boundaries.bottom);\n\n    var overflowsBoundaries = placement === 'left' && overflowsLeft || placement === 'right' && overflowsRight || placement === 'top' && overflowsTop || placement === 'bottom' && overflowsBottom;\n\n    // flip the variation if required\n    var isVertical = ['top', 'bottom'].indexOf(placement) !== -1;\n\n    // flips variation if reference element overflows boundaries\n    var flippedVariationByRef = !!options.flipVariations && (isVertical && variation === 'start' && overflowsLeft || isVertical && variation === 'end' && overflowsRight || !isVertical && variation === 'start' && overflowsTop || !isVertical && variation === 'end' && overflowsBottom);\n\n    // flips variation if popper content overflows boundaries\n    var flippedVariationByContent = !!options.flipVariationsByContent && (isVertical && variation === 'start' && overflowsRight || isVertical && variation === 'end' && overflowsLeft || !isVertical && variation === 'start' && overflowsBottom || !isVertical && variation === 'end' && overflowsTop);\n\n    var flippedVariation = flippedVariationByRef || flippedVariationByContent;\n\n    if (overlapsRef || overflowsBoundaries || flippedVariation) {\n      // this boolean to detect any flip loop\n      data.flipped = true;\n\n      if (overlapsRef || overflowsBoundaries) {\n        placement = flipOrder[index + 1];\n      }\n\n      if (flippedVariation) {\n        variation = getOppositeVariation(variation);\n      }\n\n      data.placement = placement + (variation ? '-' + variation : '');\n\n      // this object contains `position`, we want to preserve it along with\n      // any additional property we may add in the future\n      data.offsets.popper = _extends({}, data.offsets.popper, getPopperOffsets(data.instance.popper, data.offsets.reference, data.placement));\n\n      data = runModifiers(data.instance.modifiers, data, 'flip');\n    }\n  });\n  return data;\n}\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by update method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction keepTogether(data) {\n  var _data$offsets = data.offsets,\n      popper = _data$offsets.popper,\n      reference = _data$offsets.reference;\n\n  var placement = data.placement.split('-')[0];\n  var floor = Math.floor;\n  var isVertical = ['top', 'bottom'].indexOf(placement) !== -1;\n  var side = isVertical ? 'right' : 'bottom';\n  var opSide = isVertical ? 'left' : 'top';\n  var measurement = isVertical ? 'width' : 'height';\n\n  if (popper[side] < floor(reference[opSide])) {\n    data.offsets.popper[opSide] = floor(reference[opSide]) - popper[measurement];\n  }\n  if (popper[opSide] > floor(reference[side])) {\n    data.offsets.popper[opSide] = floor(reference[side]);\n  }\n\n  return data;\n}\n\n/**\n * Converts a string containing value + unit into a px value number\n * @function\n * @memberof {modifiers~offset}\n * @private\n * @argument {String} str - Value + unit string\n * @argument {String} measurement - `height` or `width`\n * @argument {Object} popperOffsets\n * @argument {Object} referenceOffsets\n * @returns {Number|String}\n * Value in pixels, or original string if no values were extracted\n */\nfunction toValue(str, measurement, popperOffsets, referenceOffsets) {\n  // separate value from unit\n  var split = str.match(/((?:\\-|\\+)?\\d*\\.?\\d*)(.*)/);\n  var value = +split[1];\n  var unit = split[2];\n\n  // If it's not a number it's an operator, I guess\n  if (!value) {\n    return str;\n  }\n\n  if (unit.indexOf('%') === 0) {\n    var element = void 0;\n    switch (unit) {\n      case '%p':\n        element = popperOffsets;\n        break;\n      case '%':\n      case '%r':\n      default:\n        element = referenceOffsets;\n    }\n\n    var rect = getClientRect(element);\n    return rect[measurement] / 100 * value;\n  } else if (unit === 'vh' || unit === 'vw') {\n    // if is a vh or vw, we calculate the size based on the viewport\n    var size = void 0;\n    if (unit === 'vh') {\n      size = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);\n    } else {\n      size = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);\n    }\n    return size / 100 * value;\n  } else {\n    // if is an explicit pixel unit, we get rid of the unit and keep the value\n    // if is an implicit unit, it's px, and we return just the value\n    return value;\n  }\n}\n\n/**\n * Parse an `offset` string to extrapolate `x` and `y` numeric offsets.\n * @function\n * @memberof {modifiers~offset}\n * @private\n * @argument {String} offset\n * @argument {Object} popperOffsets\n * @argument {Object} referenceOffsets\n * @argument {String} basePlacement\n * @returns {Array} a two cells array with x and y offsets in numbers\n */\nfunction parseOffset(offset, popperOffsets, referenceOffsets, basePlacement) {\n  var offsets = [0, 0];\n\n  // Use height if placement is left or right and index is 0 otherwise use width\n  // in this way the first offset will use an axis and the second one\n  // will use the other one\n  var useHeight = ['right', 'left'].indexOf(basePlacement) !== -1;\n\n  // Split the offset string to obtain a list of values and operands\n  // The regex addresses values with the plus or minus sign in front (+10, -20, etc)\n  var fragments = offset.split(/(\\+|\\-)/).map(function (frag) {\n    return frag.trim();\n  });\n\n  // Detect if the offset string contains a pair of values or a single one\n  // they could be separated by comma or space\n  var divider = fragments.indexOf(find(fragments, function (frag) {\n    return frag.search(/,|\\s/) !== -1;\n  }));\n\n  if (fragments[divider] && fragments[divider].indexOf(',') === -1) {\n    console.warn('Offsets separated by white space(s) are deprecated, use a comma (,) instead.');\n  }\n\n  // If divider is found, we divide the list of values and operands to divide\n  // them by ofset X and Y.\n  var splitRegex = /\\s*,\\s*|\\s+/;\n  var ops = divider !== -1 ? [fragments.slice(0, divider).concat([fragments[divider].split(splitRegex)[0]]), [fragments[divider].split(splitRegex)[1]].concat(fragments.slice(divider + 1))] : [fragments];\n\n  // Convert the values with units to absolute pixels to allow our computations\n  ops = ops.map(function (op, index) {\n    // Most of the units rely on the orientation of the popper\n    var measurement = (index === 1 ? !useHeight : useHeight) ? 'height' : 'width';\n    var mergeWithPrevious = false;\n    return op\n    // This aggregates any `+` or `-` sign that aren't considered operators\n    // e.g.: 10 + +5 => [10, +, +5]\n    .reduce(function (a, b) {\n      if (a[a.length - 1] === '' && ['+', '-'].indexOf(b) !== -1) {\n        a[a.length - 1] = b;\n        mergeWithPrevious = true;\n        return a;\n      } else if (mergeWithPrevious) {\n        a[a.length - 1] += b;\n        mergeWithPrevious = false;\n        return a;\n      } else {\n        return a.concat(b);\n      }\n    }, [])\n    // Here we convert the string values into number values (in px)\n    .map(function (str) {\n      return toValue(str, measurement, popperOffsets, referenceOffsets);\n    });\n  });\n\n  // Loop trough the offsets arrays and execute the operations\n  ops.forEach(function (op, index) {\n    op.forEach(function (frag, index2) {\n      if (isNumeric(frag)) {\n        offsets[index] += frag * (op[index2 - 1] === '-' ? -1 : 1);\n      }\n    });\n  });\n  return offsets;\n}\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by update method\n * @argument {Object} options - Modifiers configuration and options\n * @argument {Number|String} options.offset=0\n * The offset value as described in the modifier description\n * @returns {Object} The data object, properly modified\n */\nfunction offset(data, _ref) {\n  var offset = _ref.offset;\n  var placement = data.placement,\n      _data$offsets = data.offsets,\n      popper = _data$offsets.popper,\n      reference = _data$offsets.reference;\n\n  var basePlacement = placement.split('-')[0];\n\n  var offsets = void 0;\n  if (isNumeric(+offset)) {\n    offsets = [+offset, 0];\n  } else {\n    offsets = parseOffset(offset, popper, reference, basePlacement);\n  }\n\n  if (basePlacement === 'left') {\n    popper.top += offsets[0];\n    popper.left -= offsets[1];\n  } else if (basePlacement === 'right') {\n    popper.top += offsets[0];\n    popper.left += offsets[1];\n  } else if (basePlacement === 'top') {\n    popper.left += offsets[0];\n    popper.top -= offsets[1];\n  } else if (basePlacement === 'bottom') {\n    popper.left += offsets[0];\n    popper.top += offsets[1];\n  }\n\n  data.popper = popper;\n  return data;\n}\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by `update` method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction preventOverflow(data, options) {\n  var boundariesElement = options.boundariesElement || getOffsetParent(data.instance.popper);\n\n  // If offsetParent is the reference element, we really want to\n  // go one step up and use the next offsetParent as reference to\n  // avoid to make this modifier completely useless and look like broken\n  if (data.instance.reference === boundariesElement) {\n    boundariesElement = getOffsetParent(boundariesElement);\n  }\n\n  // NOTE: DOM access here\n  // resets the popper's position so that the document size can be calculated excluding\n  // the size of the popper element itself\n  var transformProp = getSupportedPropertyName('transform');\n  var popperStyles = data.instance.popper.style; // assignment to help minification\n  var top = popperStyles.top,\n      left = popperStyles.left,\n      transform = popperStyles[transformProp];\n\n  popperStyles.top = '';\n  popperStyles.left = '';\n  popperStyles[transformProp] = '';\n\n  var boundaries = getBoundaries(data.instance.popper, data.instance.reference, options.padding, boundariesElement, data.positionFixed);\n\n  // NOTE: DOM access here\n  // restores the original style properties after the offsets have been computed\n  popperStyles.top = top;\n  popperStyles.left = left;\n  popperStyles[transformProp] = transform;\n\n  options.boundaries = boundaries;\n\n  var order = options.priority;\n  var popper = data.offsets.popper;\n\n  var check = {\n    primary: function primary(placement) {\n      var value = popper[placement];\n      if (popper[placement] < boundaries[placement] && !options.escapeWithReference) {\n        value = Math.max(popper[placement], boundaries[placement]);\n      }\n      return defineProperty({}, placement, value);\n    },\n    secondary: function secondary(placement) {\n      var mainSide = placement === 'right' ? 'left' : 'top';\n      var value = popper[mainSide];\n      if (popper[placement] > boundaries[placement] && !options.escapeWithReference) {\n        value = Math.min(popper[mainSide], boundaries[placement] - (placement === 'right' ? popper.width : popper.height));\n      }\n      return defineProperty({}, mainSide, value);\n    }\n  };\n\n  order.forEach(function (placement) {\n    var side = ['left', 'top'].indexOf(placement) !== -1 ? 'primary' : 'secondary';\n    popper = _extends({}, popper, check[side](placement));\n  });\n\n  data.offsets.popper = popper;\n\n  return data;\n}\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by `update` method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction shift(data) {\n  var placement = data.placement;\n  var basePlacement = placement.split('-')[0];\n  var shiftvariation = placement.split('-')[1];\n\n  // if shift shiftvariation is specified, run the modifier\n  if (shiftvariation) {\n    var _data$offsets = data.offsets,\n        reference = _data$offsets.reference,\n        popper = _data$offsets.popper;\n\n    var isVertical = ['bottom', 'top'].indexOf(basePlacement) !== -1;\n    var side = isVertical ? 'left' : 'top';\n    var measurement = isVertical ? 'width' : 'height';\n\n    var shiftOffsets = {\n      start: defineProperty({}, side, reference[side]),\n      end: defineProperty({}, side, reference[side] + reference[measurement] - popper[measurement])\n    };\n\n    data.offsets.popper = _extends({}, popper, shiftOffsets[shiftvariation]);\n  }\n\n  return data;\n}\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by update method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction hide(data) {\n  if (!isModifierRequired(data.instance.modifiers, 'hide', 'preventOverflow')) {\n    return data;\n  }\n\n  var refRect = data.offsets.reference;\n  var bound = find(data.instance.modifiers, function (modifier) {\n    return modifier.name === 'preventOverflow';\n  }).boundaries;\n\n  if (refRect.bottom < bound.top || refRect.left > bound.right || refRect.top > bound.bottom || refRect.right < bound.left) {\n    // Avoid unnecessary DOM access if visibility hasn't changed\n    if (data.hide === true) {\n      return data;\n    }\n\n    data.hide = true;\n    data.attributes['x-out-of-boundaries'] = '';\n  } else {\n    // Avoid unnecessary DOM access if visibility hasn't changed\n    if (data.hide === false) {\n      return data;\n    }\n\n    data.hide = false;\n    data.attributes['x-out-of-boundaries'] = false;\n  }\n\n  return data;\n}\n\n/**\n * @function\n * @memberof Modifiers\n * @argument {Object} data - The data object generated by `update` method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {Object} The data object, properly modified\n */\nfunction inner(data) {\n  var placement = data.placement;\n  var basePlacement = placement.split('-')[0];\n  var _data$offsets = data.offsets,\n      popper = _data$offsets.popper,\n      reference = _data$offsets.reference;\n\n  var isHoriz = ['left', 'right'].indexOf(basePlacement) !== -1;\n\n  var subtractLength = ['top', 'left'].indexOf(basePlacement) === -1;\n\n  popper[isHoriz ? 'left' : 'top'] = reference[basePlacement] - (subtractLength ? popper[isHoriz ? 'width' : 'height'] : 0);\n\n  data.placement = getOppositePlacement(placement);\n  data.offsets.popper = getClientRect(popper);\n\n  return data;\n}\n\n/**\n * Modifier function, each modifier can have a function of this type assigned\n * to its `fn` property.<br />\n * These functions will be called on each update, this means that you must\n * make sure they are performant enough to avoid performance bottlenecks.\n *\n * @function ModifierFn\n * @argument {dataObject} data - The data object generated by `update` method\n * @argument {Object} options - Modifiers configuration and options\n * @returns {dataObject} The data object, properly modified\n */\n\n/**\n * Modifiers are plugins used to alter the behavior of your poppers.<br />\n * Popper.js uses a set of 9 modifiers to provide all the basic functionalities\n * needed by the library.\n *\n * Usually you don't want to override the `order`, `fn` and `onLoad` props.\n * All the other properties are configurations that could be tweaked.\n * @namespace modifiers\n */\nvar modifiers = {\n  /**\n   * Modifier used to shift the popper on the start or end of its reference\n   * element.<br />\n   * It will read the variation of the `placement` property.<br />\n   * It can be one either `-end` or `-start`.\n   * @memberof modifiers\n   * @inner\n   */\n  shift: {\n    /** @prop {number} order=100 - Index used to define the order of execution */\n    order: 100,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: shift\n  },\n\n  /**\n   * The `offset` modifier can shift your popper on both its axis.\n   *\n   * It accepts the following units:\n   * - `px` or unit-less, interpreted as pixels\n   * - `%` or `%r`, percentage relative to the length of the reference element\n   * - `%p`, percentage relative to the length of the popper element\n   * - `vw`, CSS viewport width unit\n   * - `vh`, CSS viewport height unit\n   *\n   * For length is intended the main axis relative to the placement of the popper.<br />\n   * This means that if the placement is `top` or `bottom`, the length will be the\n   * `width`. In case of `left` or `right`, it will be the `height`.\n   *\n   * You can provide a single value (as `Number` or `String`), or a pair of values\n   * as `String` divided by a comma or one (or more) white spaces.<br />\n   * The latter is a deprecated method because it leads to confusion and will be\n   * removed in v2.<br />\n   * Additionally, it accepts additions and subtractions between different units.\n   * Note that multiplications and divisions aren't supported.\n   *\n   * Valid examples are:\n   * ```\n   * 10\n   * '10%'\n   * '10, 10'\n   * '10%, 10'\n   * '10 + 10%'\n   * '10 - 5vh + 3%'\n   * '-10px + 5vh, 5px - 6%'\n   * ```\n   * > **NB**: If you desire to apply offsets to your poppers in a way that may make them overlap\n   * > with their reference element, unfortunately, you will have to disable the `flip` modifier.\n   * > You can read more on this at this [issue](https://github.com/FezVrasta/popper.js/issues/373).\n   *\n   * @memberof modifiers\n   * @inner\n   */\n  offset: {\n    /** @prop {number} order=200 - Index used to define the order of execution */\n    order: 200,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: offset,\n    /** @prop {Number|String} offset=0\n     * The offset value as described in the modifier description\n     */\n    offset: 0\n  },\n\n  /**\n   * Modifier used to prevent the popper from being positioned outside the boundary.\n   *\n   * A scenario exists where the reference itself is not within the boundaries.<br />\n   * We can say it has \"escaped the boundaries\" — or just \"escaped\".<br />\n   * In this case we need to decide whether the popper should either:\n   *\n   * - detach from the reference and remain \"trapped\" in the boundaries, or\n   * - if it should ignore the boundary and \"escape with its reference\"\n   *\n   * When `escapeWithReference` is set to`true` and reference is completely\n   * outside its boundaries, the popper will overflow (or completely leave)\n   * the boundaries in order to remain attached to the edge of the reference.\n   *\n   * @memberof modifiers\n   * @inner\n   */\n  preventOverflow: {\n    /** @prop {number} order=300 - Index used to define the order of execution */\n    order: 300,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: preventOverflow,\n    /**\n     * @prop {Array} [priority=['left','right','top','bottom']]\n     * Popper will try to prevent overflow following these priorities by default,\n     * then, it could overflow on the left and on top of the `boundariesElement`\n     */\n    priority: ['left', 'right', 'top', 'bottom'],\n    /**\n     * @prop {number} padding=5\n     * Amount of pixel used to define a minimum distance between the boundaries\n     * and the popper. This makes sure the popper always has a little padding\n     * between the edges of its container\n     */\n    padding: 5,\n    /**\n     * @prop {String|HTMLElement} boundariesElement='scrollParent'\n     * Boundaries used by the modifier. Can be `scrollParent`, `window`,\n     * `viewport` or any DOM element.\n     */\n    boundariesElement: 'scrollParent'\n  },\n\n  /**\n   * Modifier used to make sure the reference and its popper stay near each other\n   * without leaving any gap between the two. Especially useful when the arrow is\n   * enabled and you want to ensure that it points to its reference element.\n   * It cares only about the first axis. You can still have poppers with margin\n   * between the popper and its reference element.\n   * @memberof modifiers\n   * @inner\n   */\n  keepTogether: {\n    /** @prop {number} order=400 - Index used to define the order of execution */\n    order: 400,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: keepTogether\n  },\n\n  /**\n   * This modifier is used to move the `arrowElement` of the popper to make\n   * sure it is positioned between the reference element and its popper element.\n   * It will read the outer size of the `arrowElement` node to detect how many\n   * pixels of conjunction are needed.\n   *\n   * It has no effect if no `arrowElement` is provided.\n   * @memberof modifiers\n   * @inner\n   */\n  arrow: {\n    /** @prop {number} order=500 - Index used to define the order of execution */\n    order: 500,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: arrow,\n    /** @prop {String|HTMLElement} element='[x-arrow]' - Selector or node used as arrow */\n    element: '[x-arrow]'\n  },\n\n  /**\n   * Modifier used to flip the popper's placement when it starts to overlap its\n   * reference element.\n   *\n   * Requires the `preventOverflow` modifier before it in order to work.\n   *\n   * **NOTE:** this modifier will interrupt the current update cycle and will\n   * restart it if it detects the need to flip the placement.\n   * @memberof modifiers\n   * @inner\n   */\n  flip: {\n    /** @prop {number} order=600 - Index used to define the order of execution */\n    order: 600,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: flip,\n    /**\n     * @prop {String|Array} behavior='flip'\n     * The behavior used to change the popper's placement. It can be one of\n     * `flip`, `clockwise`, `counterclockwise` or an array with a list of valid\n     * placements (with optional variations)\n     */\n    behavior: 'flip',\n    /**\n     * @prop {number} padding=5\n     * The popper will flip if it hits the edges of the `boundariesElement`\n     */\n    padding: 5,\n    /**\n     * @prop {String|HTMLElement} boundariesElement='viewport'\n     * The element which will define the boundaries of the popper position.\n     * The popper will never be placed outside of the defined boundaries\n     * (except if `keepTogether` is enabled)\n     */\n    boundariesElement: 'viewport',\n    /**\n     * @prop {Boolean} flipVariations=false\n     * The popper will switch placement variation between `-start` and `-end` when\n     * the reference element overlaps its boundaries.\n     *\n     * The original placement should have a set variation.\n     */\n    flipVariations: false,\n    /**\n     * @prop {Boolean} flipVariationsByContent=false\n     * The popper will switch placement variation between `-start` and `-end` when\n     * the popper element overlaps its reference boundaries.\n     *\n     * The original placement should have a set variation.\n     */\n    flipVariationsByContent: false\n  },\n\n  /**\n   * Modifier used to make the popper flow toward the inner of the reference element.\n   * By default, when this modifier is disabled, the popper will be placed outside\n   * the reference element.\n   * @memberof modifiers\n   * @inner\n   */\n  inner: {\n    /** @prop {number} order=700 - Index used to define the order of execution */\n    order: 700,\n    /** @prop {Boolean} enabled=false - Whether the modifier is enabled or not */\n    enabled: false,\n    /** @prop {ModifierFn} */\n    fn: inner\n  },\n\n  /**\n   * Modifier used to hide the popper when its reference element is outside of the\n   * popper boundaries. It will set a `x-out-of-boundaries` attribute which can\n   * be used to hide with a CSS selector the popper when its reference is\n   * out of boundaries.\n   *\n   * Requires the `preventOverflow` modifier before it in order to work.\n   * @memberof modifiers\n   * @inner\n   */\n  hide: {\n    /** @prop {number} order=800 - Index used to define the order of execution */\n    order: 800,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: hide\n  },\n\n  /**\n   * Computes the style that will be applied to the popper element to gets\n   * properly positioned.\n   *\n   * Note that this modifier will not touch the DOM, it just prepares the styles\n   * so that `applyStyle` modifier can apply it. This separation is useful\n   * in case you need to replace `applyStyle` with a custom implementation.\n   *\n   * This modifier has `850` as `order` value to maintain backward compatibility\n   * with previous versions of Popper.js. Expect the modifiers ordering method\n   * to change in future major versions of the library.\n   *\n   * @memberof modifiers\n   * @inner\n   */\n  computeStyle: {\n    /** @prop {number} order=850 - Index used to define the order of execution */\n    order: 850,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: computeStyle,\n    /**\n     * @prop {Boolean} gpuAcceleration=true\n     * If true, it uses the CSS 3D transformation to position the popper.\n     * Otherwise, it will use the `top` and `left` properties\n     */\n    gpuAcceleration: true,\n    /**\n     * @prop {string} [x='bottom']\n     * Where to anchor the X axis (`bottom` or `top`). AKA X offset origin.\n     * Change this if your popper should grow in a direction different from `bottom`\n     */\n    x: 'bottom',\n    /**\n     * @prop {string} [x='left']\n     * Where to anchor the Y axis (`left` or `right`). AKA Y offset origin.\n     * Change this if your popper should grow in a direction different from `right`\n     */\n    y: 'right'\n  },\n\n  /**\n   * Applies the computed styles to the popper element.\n   *\n   * All the DOM manipulations are limited to this modifier. This is useful in case\n   * you want to integrate Popper.js inside a framework or view library and you\n   * want to delegate all the DOM manipulations to it.\n   *\n   * Note that if you disable this modifier, you must make sure the popper element\n   * has its position set to `absolute` before Popper.js can do its work!\n   *\n   * Just disable this modifier and define your own to achieve the desired effect.\n   *\n   * @memberof modifiers\n   * @inner\n   */\n  applyStyle: {\n    /** @prop {number} order=900 - Index used to define the order of execution */\n    order: 900,\n    /** @prop {Boolean} enabled=true - Whether the modifier is enabled or not */\n    enabled: true,\n    /** @prop {ModifierFn} */\n    fn: applyStyle,\n    /** @prop {Function} */\n    onLoad: applyStyleOnLoad,\n    /**\n     * @deprecated since version 1.10.0, the property moved to `computeStyle` modifier\n     * @prop {Boolean} gpuAcceleration=true\n     * If true, it uses the CSS 3D transformation to position the popper.\n     * Otherwise, it will use the `top` and `left` properties\n     */\n    gpuAcceleration: undefined\n  }\n};\n\n/**\n * The `dataObject` is an object containing all the information used by Popper.js.\n * This object is passed to modifiers and to the `onCreate` and `onUpdate` callbacks.\n * @name dataObject\n * @property {Object} data.instance The Popper.js instance\n * @property {String} data.placement Placement applied to popper\n * @property {String} data.originalPlacement Placement originally defined on init\n * @property {Boolean} data.flipped True if popper has been flipped by flip modifier\n * @property {Boolean} data.hide True if the reference element is out of boundaries, useful to know when to hide the popper\n * @property {HTMLElement} data.arrowElement Node used as arrow by arrow modifier\n * @property {Object} data.styles Any CSS property defined here will be applied to the popper. It expects the JavaScript nomenclature (eg. `marginBottom`)\n * @property {Object} data.arrowStyles Any CSS property defined here will be applied to the popper arrow. It expects the JavaScript nomenclature (eg. `marginBottom`)\n * @property {Object} data.boundaries Offsets of the popper boundaries\n * @property {Object} data.offsets The measurements of popper, reference and arrow elements\n * @property {Object} data.offsets.popper `top`, `left`, `width`, `height` values\n * @property {Object} data.offsets.reference `top`, `left`, `width`, `height` values\n * @property {Object} data.offsets.arrow] `top` and `left` offsets, only one of them will be different from 0\n */\n\n/**\n * Default options provided to Popper.js constructor.<br />\n * These can be overridden using the `options` argument of Popper.js.<br />\n * To override an option, simply pass an object with the same\n * structure of the `options` object, as the 3rd argument. For example:\n * ```\n * new Popper(ref, pop, {\n *   modifiers: {\n *     preventOverflow: { enabled: false }\n *   }\n * })\n * ```\n * @type {Object}\n * @static\n * @memberof Popper\n */\nvar Defaults = {\n  /**\n   * Popper's placement.\n   * @prop {Popper.placements} placement='bottom'\n   */\n  placement: 'bottom',\n\n  /**\n   * Set this to true if you want popper to position it self in 'fixed' mode\n   * @prop {Boolean} positionFixed=false\n   */\n  positionFixed: false,\n\n  /**\n   * Whether events (resize, scroll) are initially enabled.\n   * @prop {Boolean} eventsEnabled=true\n   */\n  eventsEnabled: true,\n\n  /**\n   * Set to true if you want to automatically remove the popper when\n   * you call the `destroy` method.\n   * @prop {Boolean} removeOnDestroy=false\n   */\n  removeOnDestroy: false,\n\n  /**\n   * Callback called when the popper is created.<br />\n   * By default, it is set to no-op.<br />\n   * Access Popper.js instance with `data.instance`.\n   * @prop {onCreate}\n   */\n  onCreate: function onCreate() {},\n\n  /**\n   * Callback called when the popper is updated. This callback is not called\n   * on the initialization/creation of the popper, but only on subsequent\n   * updates.<br />\n   * By default, it is set to no-op.<br />\n   * Access Popper.js instance with `data.instance`.\n   * @prop {onUpdate}\n   */\n  onUpdate: function onUpdate() {},\n\n  /**\n   * List of modifiers used to modify the offsets before they are applied to the popper.\n   * They provide most of the functionalities of Popper.js.\n   * @prop {modifiers}\n   */\n  modifiers: modifiers\n};\n\n/**\n * @callback onCreate\n * @param {dataObject} data\n */\n\n/**\n * @callback onUpdate\n * @param {dataObject} data\n */\n\n// Utils\n// Methods\nvar Popper = function () {\n  /**\n   * Creates a new Popper.js instance.\n   * @class Popper\n   * @param {Element|referenceObject} reference - The reference element used to position the popper\n   * @param {Element} popper - The HTML / XML element used as the popper\n   * @param {Object} options - Your custom options to override the ones defined in [Defaults](#defaults)\n   * @return {Object} instance - The generated Popper.js instance\n   */\n  function Popper(reference, popper) {\n    var _this = this;\n\n    var options = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : {};\n    classCallCheck(this, Popper);\n\n    this.scheduleUpdate = function () {\n      return requestAnimationFrame(_this.update);\n    };\n\n    // make update() debounced, so that it only runs at most once-per-tick\n    this.update = debounce(this.update.bind(this));\n\n    // with {} we create a new object with the options inside it\n    this.options = _extends({}, Popper.Defaults, options);\n\n    // init state\n    this.state = {\n      isDestroyed: false,\n      isCreated: false,\n      scrollParents: []\n    };\n\n    // get reference and popper elements (allow jQuery wrappers)\n    this.reference = reference && reference.jquery ? reference[0] : reference;\n    this.popper = popper && popper.jquery ? popper[0] : popper;\n\n    // Deep merge modifiers options\n    this.options.modifiers = {};\n    Object.keys(_extends({}, Popper.Defaults.modifiers, options.modifiers)).forEach(function (name) {\n      _this.options.modifiers[name] = _extends({}, Popper.Defaults.modifiers[name] || {}, options.modifiers ? options.modifiers[name] : {});\n    });\n\n    // Refactoring modifiers' list (Object => Array)\n    this.modifiers = Object.keys(this.options.modifiers).map(function (name) {\n      return _extends({\n        name: name\n      }, _this.options.modifiers[name]);\n    })\n    // sort the modifiers by order\n    .sort(function (a, b) {\n      return a.order - b.order;\n    });\n\n    // modifiers have the ability to execute arbitrary code when Popper.js get inited\n    // such code is executed in the same order of its modifier\n    // they could add new properties to their options configuration\n    // BE AWARE: don't add options to `options.modifiers.name` but to `modifierOptions`!\n    this.modifiers.forEach(function (modifierOptions) {\n      if (modifierOptions.enabled && isFunction(modifierOptions.onLoad)) {\n        modifierOptions.onLoad(_this.reference, _this.popper, _this.options, modifierOptions, _this.state);\n      }\n    });\n\n    // fire the first update to position the popper in the right place\n    this.update();\n\n    var eventsEnabled = this.options.eventsEnabled;\n    if (eventsEnabled) {\n      // setup event listeners, they will take care of update the position in specific situations\n      this.enableEventListeners();\n    }\n\n    this.state.eventsEnabled = eventsEnabled;\n  }\n\n  // We can't use class properties because they don't get listed in the\n  // class prototype and break stuff like Sinon stubs\n\n\n  createClass(Popper, [{\n    key: 'update',\n    value: function update$$1() {\n      return update.call(this);\n    }\n  }, {\n    key: 'destroy',\n    value: function destroy$$1() {\n      return destroy.call(this);\n    }\n  }, {\n    key: 'enableEventListeners',\n    value: function enableEventListeners$$1() {\n      return enableEventListeners.call(this);\n    }\n  }, {\n    key: 'disableEventListeners',\n    value: function disableEventListeners$$1() {\n      return disableEventListeners.call(this);\n    }\n\n    /**\n     * Schedules an update. It will run on the next UI update available.\n     * @method scheduleUpdate\n     * @memberof Popper\n     */\n\n\n    /**\n     * Collection of utilities useful when writing custom modifiers.\n     * Starting from version 1.7, this method is available only if you\n     * include `popper-utils.js` before `popper.js`.\n     *\n     * **DEPRECATION**: This way to access PopperUtils is deprecated\n     * and will be removed in v2! Use the PopperUtils module directly instead.\n     * Due to the high instability of the methods contained in Utils, we can't\n     * guarantee them to follow semver. Use them at your own risk!\n     * @static\n     * @private\n     * @type {Object}\n     * @deprecated since version 1.8\n     * @member Utils\n     * @memberof Popper\n     */\n\n  }]);\n  return Popper;\n}();\n\n/**\n * The `referenceObject` is an object that provides an interface compatible with Popper.js\n * and lets you use it as replacement of a real DOM node.<br />\n * You can use this method to position a popper relatively to a set of coordinates\n * in case you don't have a DOM node to use as reference.\n *\n * ```\n * new Popper(referenceObject, popperNode);\n * ```\n *\n * NB: This feature isn't supported in Internet Explorer 10.\n * @name referenceObject\n * @property {Function} data.getBoundingClientRect\n * A function that returns a set of coordinates compatible with the native `getBoundingClientRect` method.\n * @property {number} data.clientWidth\n * An ES6 getter that will return the width of the virtual reference element.\n * @property {number} data.clientHeight\n * An ES6 getter that will return the height of the virtual reference element.\n */\n\n\nPopper.Utils = (typeof window !== 'undefined' ? window : global).PopperUtils;\nPopper.placements = placements;\nPopper.Defaults = Defaults;\n\nexport default Popper;\n//# sourceMappingURL=popper.js.map\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): dropdown.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Popper from 'popper.js'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'dropdown'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.dropdown'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst DATA_API_KEY = '.data-api'\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\nconst ESCAPE_KEYCODE = 27 // KeyboardEvent.which value for Escape (Esc) key\nconst SPACE_KEYCODE = 32 // KeyboardEvent.which value for space key\nconst TAB_KEYCODE = 9 // KeyboardEvent.which value for tab key\nconst ARROW_UP_KEYCODE = 38 // KeyboardEvent.which value for up arrow key\nconst ARROW_DOWN_KEYCODE = 40 // KeyboardEvent.which value for down arrow key\nconst RIGHT_MOUSE_BUTTON_WHICH = 3 // MouseEvent.which value for the right button (assuming a right-handed mouse)\nconst REGEXP_KEYDOWN = new RegExp(`${ARROW_UP_KEYCODE}|${ARROW_DOWN_KEYCODE}|${ESCAPE_KEYCODE}`)\n\nconst EVENT_HIDE = `hide${EVENT_KEY}`\nconst EVENT_HIDDEN = `hidden${EVENT_KEY}`\nconst EVENT_SHOW = `show${EVENT_KEY}`\nconst EVENT_SHOWN = `shown${EVENT_KEY}`\nconst EVENT_CLICK = `click${EVENT_KEY}`\nconst EVENT_CLICK_DATA_API = `click${EVENT_KEY}${DATA_API_KEY}`\nconst EVENT_KEYDOWN_DATA_API = `keydown${EVENT_KEY}${DATA_API_KEY}`\nconst EVENT_KEYUP_DATA_API = `keyup${EVENT_KEY}${DATA_API_KEY}`\n\nconst CLASS_NAME_DISABLED = 'disabled'\nconst CLASS_NAME_SHOW = 'show'\nconst CLASS_NAME_DROPUP = 'dropup'\nconst CLASS_NAME_DROPRIGHT = 'dropright'\nconst CLASS_NAME_DROPLEFT = 'dropleft'\nconst CLASS_NAME_MENURIGHT = 'dropdown-menu-right'\nconst CLASS_NAME_POSITION_STATIC = 'position-static'\n\nconst SELECTOR_DATA_TOGGLE = '[data-toggle=\"dropdown\"]'\nconst SELECTOR_FORM_CHILD = '.dropdown form'\nconst SELECTOR_MENU = '.dropdown-menu'\nconst SELECTOR_NAVBAR_NAV = '.navbar-nav'\nconst SELECTOR_VISIBLE_ITEMS = '.dropdown-menu .dropdown-item:not(.disabled):not(:disabled)'\n\nconst PLACEMENT_TOP = 'top-start'\nconst PLACEMENT_TOPEND = 'top-end'\nconst PLACEMENT_BOTTOM = 'bottom-start'\nconst PLACEMENT_BOTTOMEND = 'bottom-end'\nconst PLACEMENT_RIGHT = 'right-start'\nconst PLACEMENT_LEFT = 'left-start'\n\nconst Default = {\n  offset: 0,\n  flip: true,\n  boundary: 'scrollParent',\n  reference: 'toggle',\n  display: 'dynamic',\n  popperConfig: null\n}\n\nconst DefaultType = {\n  offset: '(number|string|function)',\n  flip: 'boolean',\n  boundary: '(string|element)',\n  reference: '(string|element)',\n  display: 'string',\n  popperConfig: '(null|object)'\n}\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Dropdown {\n  constructor(element, config) {\n    this._element = element\n    this._popper = null\n    this._config = this._getConfig(config)\n    this._menu = this._getMenuElement()\n    this._inNavbar = this._detectNavbar()\n\n    this._addEventListeners()\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  static get Default() {\n    return Default\n  }\n\n  static get DefaultType() {\n    return DefaultType\n  }\n\n  // Public\n\n  toggle() {\n    if (this._element.disabled || $(this._element).hasClass(CLASS_NAME_DISABLED)) {\n      return\n    }\n\n    const isActive = $(this._menu).hasClass(CLASS_NAME_SHOW)\n\n    Dropdown._clearMenus()\n\n    if (isActive) {\n      return\n    }\n\n    this.show(true)\n  }\n\n  show(usePopper = false) {\n    if (this._element.disabled || $(this._element).hasClass(CLASS_NAME_DISABLED) || $(this._menu).hasClass(CLASS_NAME_SHOW)) {\n      return\n    }\n\n    const relatedTarget = {\n      relatedTarget: this._element\n    }\n    const showEvent = $.Event(EVENT_SHOW, relatedTarget)\n    const parent = Dropdown._getParentFromElement(this._element)\n\n    $(parent).trigger(showEvent)\n\n    if (showEvent.isDefaultPrevented()) {\n      return\n    }\n\n    // Totally disable Popper for Dropdowns in Navbar\n    if (!this._inNavbar && usePopper) {\n      /**\n       * Check for Popper dependency\n       * Popper - https://popper.js.org\n       */\n      if (typeof Popper === 'undefined') {\n        throw new TypeError('Bootstrap\\'s dropdowns require Popper (https://popper.js.org)')\n      }\n\n      let referenceElement = this._element\n\n      if (this._config.reference === 'parent') {\n        referenceElement = parent\n      } else if (Util.isElement(this._config.reference)) {\n        referenceElement = this._config.reference\n\n        // Check if it's jQuery element\n        if (typeof this._config.reference.jquery !== 'undefined') {\n          referenceElement = this._config.reference[0]\n        }\n      }\n\n      // If boundary is not `scrollParent`, then set position to `static`\n      // to allow the menu to \"escape\" the scroll parent's boundaries\n      // https://github.com/twbs/bootstrap/issues/24251\n      if (this._config.boundary !== 'scrollParent') {\n        $(parent).addClass(CLASS_NAME_POSITION_STATIC)\n      }\n\n      this._popper = new Popper(referenceElement, this._menu, this._getPopperConfig())\n    }\n\n    // If this is a touch-enabled device we add extra\n    // empty mouseover listeners to the body's immediate children;\n    // only needed because of broken event delegation on iOS\n    // https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html\n    if ('ontouchstart' in document.documentElement &&\n        $(parent).closest(SELECTOR_NAVBAR_NAV).length === 0) {\n      $(document.body).children().on('mouseover', null, $.noop)\n    }\n\n    this._element.focus()\n    this._element.setAttribute('aria-expanded', true)\n\n    $(this._menu).toggleClass(CLASS_NAME_SHOW)\n    $(parent)\n      .toggleClass(CLASS_NAME_SHOW)\n      .trigger($.Event(EVENT_SHOWN, relatedTarget))\n  }\n\n  hide() {\n    if (this._element.disabled || $(this._element).hasClass(CLASS_NAME_DISABLED) || !$(this._menu).hasClass(CLASS_NAME_SHOW)) {\n      return\n    }\n\n    const relatedTarget = {\n      relatedTarget: this._element\n    }\n    const hideEvent = $.Event(EVENT_HIDE, relatedTarget)\n    const parent = Dropdown._getParentFromElement(this._element)\n\n    $(parent).trigger(hideEvent)\n\n    if (hideEvent.isDefaultPrevented()) {\n      return\n    }\n\n    if (this._popper) {\n      this._popper.destroy()\n    }\n\n    $(this._menu).toggleClass(CLASS_NAME_SHOW)\n    $(parent)\n      .toggleClass(CLASS_NAME_SHOW)\n      .trigger($.Event(EVENT_HIDDEN, relatedTarget))\n  }\n\n  dispose() {\n    $.removeData(this._element, DATA_KEY)\n    $(this._element).off(EVENT_KEY)\n    this._element = null\n    this._menu = null\n    if (this._popper !== null) {\n      this._popper.destroy()\n      this._popper = null\n    }\n  }\n\n  update() {\n    this._inNavbar = this._detectNavbar()\n    if (this._popper !== null) {\n      this._popper.scheduleUpdate()\n    }\n  }\n\n  // Private\n\n  _addEventListeners() {\n    $(this._element).on(EVENT_CLICK, event => {\n      event.preventDefault()\n      event.stopPropagation()\n      this.toggle()\n    })\n  }\n\n  _getConfig(config) {\n    config = {\n      ...this.constructor.Default,\n      ...$(this._element).data(),\n      ...config\n    }\n\n    Util.typeCheckConfig(\n      NAME,\n      config,\n      this.constructor.DefaultType\n    )\n\n    return config\n  }\n\n  _getMenuElement() {\n    if (!this._menu) {\n      const parent = Dropdown._getParentFromElement(this._element)\n\n      if (parent) {\n        this._menu = parent.querySelector(SELECTOR_MENU)\n      }\n    }\n\n    return this._menu\n  }\n\n  _getPlacement() {\n    const $parentDropdown = $(this._element.parentNode)\n    let placement = PLACEMENT_BOTTOM\n\n    // Handle dropup\n    if ($parentDropdown.hasClass(CLASS_NAME_DROPUP)) {\n      placement = $(this._menu).hasClass(CLASS_NAME_MENURIGHT) ?\n        PLACEMENT_TOPEND :\n        PLACEMENT_TOP\n    } else if ($parentDropdown.hasClass(CLASS_NAME_DROPRIGHT)) {\n      placement = PLACEMENT_RIGHT\n    } else if ($parentDropdown.hasClass(CLASS_NAME_DROPLEFT)) {\n      placement = PLACEMENT_LEFT\n    } else if ($(this._menu).hasClass(CLASS_NAME_MENURIGHT)) {\n      placement = PLACEMENT_BOTTOMEND\n    }\n\n    return placement\n  }\n\n  _detectNavbar() {\n    return $(this._element).closest('.navbar').length > 0\n  }\n\n  _getOffset() {\n    const offset = {}\n\n    if (typeof this._config.offset === 'function') {\n      offset.fn = data => {\n        data.offsets = {\n          ...data.offsets,\n          ...(this._config.offset(data.offsets, this._element) || {})\n        }\n\n        return data\n      }\n    } else {\n      offset.offset = this._config.offset\n    }\n\n    return offset\n  }\n\n  _getPopperConfig() {\n    const popperConfig = {\n      placement: this._getPlacement(),\n      modifiers: {\n        offset: this._getOffset(),\n        flip: {\n          enabled: this._config.flip\n        },\n        preventOverflow: {\n          boundariesElement: this._config.boundary\n        }\n      }\n    }\n\n    // Disable Popper if we have a static display\n    if (this._config.display === 'static') {\n      popperConfig.modifiers.applyStyle = {\n        enabled: false\n      }\n    }\n\n    return {\n      ...popperConfig,\n      ...this._config.popperConfig\n    }\n  }\n\n  // Static\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      let data = $(this).data(DATA_KEY)\n      const _config = typeof config === 'object' ? config : null\n\n      if (!data) {\n        data = new Dropdown(this, _config)\n        $(this).data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'string') {\n        if (typeof data[config] === 'undefined') {\n          throw new TypeError(`No method named \"${config}\"`)\n        }\n\n        data[config]()\n      }\n    })\n  }\n\n  static _clearMenus(event) {\n    if (event && (event.which === RIGHT_MOUSE_BUTTON_WHICH ||\n      event.type === 'keyup' && event.which !== TAB_KEYCODE)) {\n      return\n    }\n\n    const toggles = [].slice.call(document.querySelectorAll(SELECTOR_DATA_TOGGLE))\n\n    for (let i = 0, len = toggles.length; i < len; i++) {\n      const parent = Dropdown._getParentFromElement(toggles[i])\n      const context = $(toggles[i]).data(DATA_KEY)\n      const relatedTarget = {\n        relatedTarget: toggles[i]\n      }\n\n      if (event && event.type === 'click') {\n        relatedTarget.clickEvent = event\n      }\n\n      if (!context) {\n        continue\n      }\n\n      const dropdownMenu = context._menu\n      if (!$(parent).hasClass(CLASS_NAME_SHOW)) {\n        continue\n      }\n\n      if (event && (event.type === 'click' &&\n          /input|textarea/i.test(event.target.tagName) || event.type === 'keyup' && event.which === TAB_KEYCODE) &&\n          $.contains(parent, event.target)) {\n        continue\n      }\n\n      const hideEvent = $.Event(EVENT_HIDE, relatedTarget)\n      $(parent).trigger(hideEvent)\n      if (hideEvent.isDefaultPrevented()) {\n        continue\n      }\n\n      // If this is a touch-enabled device we remove the extra\n      // empty mouseover listeners we added for iOS support\n      if ('ontouchstart' in document.documentElement) {\n        $(document.body).children().off('mouseover', null, $.noop)\n      }\n\n      toggles[i].setAttribute('aria-expanded', 'false')\n\n      if (context._popper) {\n        context._popper.destroy()\n      }\n\n      $(dropdownMenu).removeClass(CLASS_NAME_SHOW)\n      $(parent)\n        .removeClass(CLASS_NAME_SHOW)\n        .trigger($.Event(EVENT_HIDDEN, relatedTarget))\n    }\n  }\n\n  static _getParentFromElement(element) {\n    let parent\n    const selector = Util.getSelectorFromElement(element)\n\n    if (selector) {\n      parent = document.querySelector(selector)\n    }\n\n    return parent || element.parentNode\n  }\n\n  // eslint-disable-next-line complexity\n  static _dataApiKeydownHandler(event) {\n    // If not input/textarea:\n    //  - And not a key in REGEXP_KEYDOWN => not a dropdown command\n    // If input/textarea:\n    //  - If space key => not a dropdown command\n    //  - If key is other than escape\n    //    - If key is not up or down => not a dropdown command\n    //    - If trigger inside the menu => not a dropdown command\n    if (/input|textarea/i.test(event.target.tagName) ?\n      event.which === SPACE_KEYCODE || event.which !== ESCAPE_KEYCODE &&\n      (event.which !== ARROW_DOWN_KEYCODE && event.which !== ARROW_UP_KEYCODE ||\n        $(event.target).closest(SELECTOR_MENU).length) : !REGEXP_KEYDOWN.test(event.which)) {\n      return\n    }\n\n    if (this.disabled || $(this).hasClass(CLASS_NAME_DISABLED)) {\n      return\n    }\n\n    const parent = Dropdown._getParentFromElement(this)\n    const isActive = $(parent).hasClass(CLASS_NAME_SHOW)\n\n    if (!isActive && event.which === ESCAPE_KEYCODE) {\n      return\n    }\n\n    event.preventDefault()\n    event.stopPropagation()\n\n    if (!isActive || (event.which === ESCAPE_KEYCODE || event.which === SPACE_KEYCODE)) {\n      if (event.which === ESCAPE_KEYCODE) {\n        $(parent.querySelector(SELECTOR_DATA_TOGGLE)).trigger('focus')\n      }\n\n      $(this).trigger('click')\n      return\n    }\n\n    const items = [].slice.call(parent.querySelectorAll(SELECTOR_VISIBLE_ITEMS))\n      .filter(item => $(item).is(':visible'))\n\n    if (items.length === 0) {\n      return\n    }\n\n    let index = items.indexOf(event.target)\n\n    if (event.which === ARROW_UP_KEYCODE && index > 0) { // Up\n      index--\n    }\n\n    if (event.which === ARROW_DOWN_KEYCODE && index < items.length - 1) { // Down\n      index++\n    }\n\n    if (index < 0) {\n      index = 0\n    }\n\n    items[index].focus()\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * Data Api implementation\n * ------------------------------------------------------------------------\n */\n\n$(document)\n  .on(EVENT_KEYDOWN_DATA_API, SELECTOR_DATA_TOGGLE, Dropdown._dataApiKeydownHandler)\n  .on(EVENT_KEYDOWN_DATA_API, SELECTOR_MENU, Dropdown._dataApiKeydownHandler)\n  .on(`${EVENT_CLICK_DATA_API} ${EVENT_KEYUP_DATA_API}`, Dropdown._clearMenus)\n  .on(EVENT_CLICK_DATA_API, SELECTOR_DATA_TOGGLE, function (event) {\n    event.preventDefault()\n    event.stopPropagation()\n    Dropdown._jQueryInterface.call($(this), 'toggle')\n  })\n  .on(EVENT_CLICK_DATA_API, SELECTOR_FORM_CHILD, e => {\n    e.stopPropagation()\n  })\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Dropdown._jQueryInterface\n$.fn[NAME].Constructor = Dropdown\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Dropdown._jQueryInterface\n}\n\nexport default Dropdown\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): modal.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'modal'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.modal'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst DATA_API_KEY = '.data-api'\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\nconst ESCAPE_KEYCODE = 27 // KeyboardEvent.which value for Escape (Esc) key\n\nconst Default = {\n  backdrop: true,\n  keyboard: true,\n  focus: true,\n  show: true\n}\n\nconst DefaultType = {\n  backdrop: '(boolean|string)',\n  keyboard: 'boolean',\n  focus: 'boolean',\n  show: 'boolean'\n}\n\nconst EVENT_HIDE = `hide${EVENT_KEY}`\nconst EVENT_HIDE_PREVENTED = `hidePrevented${EVENT_KEY}`\nconst EVENT_HIDDEN = `hidden${EVENT_KEY}`\nconst EVENT_SHOW = `show${EVENT_KEY}`\nconst EVENT_SHOWN = `shown${EVENT_KEY}`\nconst EVENT_FOCUSIN = `focusin${EVENT_KEY}`\nconst EVENT_RESIZE = `resize${EVENT_KEY}`\nconst EVENT_CLICK_DISMISS = `click.dismiss${EVENT_KEY}`\nconst EVENT_KEYDOWN_DISMISS = `keydown.dismiss${EVENT_KEY}`\nconst EVENT_MOUSEUP_DISMISS = `mouseup.dismiss${EVENT_KEY}`\nconst EVENT_MOUSEDOWN_DISMISS = `mousedown.dismiss${EVENT_KEY}`\nconst EVENT_CLICK_DATA_API = `click${EVENT_KEY}${DATA_API_KEY}`\n\nconst CLASS_NAME_SCROLLABLE = 'modal-dialog-scrollable'\nconst CLASS_NAME_SCROLLBAR_MEASURER = 'modal-scrollbar-measure'\nconst CLASS_NAME_BACKDROP = 'modal-backdrop'\nconst CLASS_NAME_OPEN = 'modal-open'\nconst CLASS_NAME_FADE = 'fade'\nconst CLASS_NAME_SHOW = 'show'\nconst CLASS_NAME_STATIC = 'modal-static'\n\nconst SELECTOR_DIALOG = '.modal-dialog'\nconst SELECTOR_MODAL_BODY = '.modal-body'\nconst SELECTOR_DATA_TOGGLE = '[data-toggle=\"modal\"]'\nconst SELECTOR_DATA_DISMISS = '[data-dismiss=\"modal\"]'\nconst SELECTOR_FIXED_CONTENT = '.fixed-top, .fixed-bottom, .is-fixed, .sticky-top'\nconst SELECTOR_STICKY_CONTENT = '.sticky-top'\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Modal {\n  constructor(element, config) {\n    this._config = this._getConfig(config)\n    this._element = element\n    this._dialog = element.querySelector(SELECTOR_DIALOG)\n    this._backdrop = null\n    this._isShown = false\n    this._isBodyOverflowing = false\n    this._ignoreBackdropClick = false\n    this._isTransitioning = false\n    this._scrollbarWidth = 0\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  static get Default() {\n    return Default\n  }\n\n  // Public\n\n  toggle(relatedTarget) {\n    return this._isShown ? this.hide() : this.show(relatedTarget)\n  }\n\n  show(relatedTarget) {\n    if (this._isShown || this._isTransitioning) {\n      return\n    }\n\n    if ($(this._element).hasClass(CLASS_NAME_FADE)) {\n      this._isTransitioning = true\n    }\n\n    const showEvent = $.Event(EVENT_SHOW, {\n      relatedTarget\n    })\n\n    $(this._element).trigger(showEvent)\n\n    if (this._isShown || showEvent.isDefaultPrevented()) {\n      return\n    }\n\n    this._isShown = true\n\n    this._checkScrollbar()\n    this._setScrollbar()\n\n    this._adjustDialog()\n\n    this._setEscapeEvent()\n    this._setResizeEvent()\n\n    $(this._element).on(\n      EVENT_CLICK_DISMISS,\n      SELECTOR_DATA_DISMISS,\n      event => this.hide(event)\n    )\n\n    $(this._dialog).on(EVENT_MOUSEDOWN_DISMISS, () => {\n      $(this._element).one(EVENT_MOUSEUP_DISMISS, event => {\n        if ($(event.target).is(this._element)) {\n          this._ignoreBackdropClick = true\n        }\n      })\n    })\n\n    this._showBackdrop(() => this._showElement(relatedTarget))\n  }\n\n  hide(event) {\n    if (event) {\n      event.preventDefault()\n    }\n\n    if (!this._isShown || this._isTransitioning) {\n      return\n    }\n\n    const hideEvent = $.Event(EVENT_HIDE)\n\n    $(this._element).trigger(hideEvent)\n\n    if (!this._isShown || hideEvent.isDefaultPrevented()) {\n      return\n    }\n\n    this._isShown = false\n    const transition = $(this._element).hasClass(CLASS_NAME_FADE)\n\n    if (transition) {\n      this._isTransitioning = true\n    }\n\n    this._setEscapeEvent()\n    this._setResizeEvent()\n\n    $(document).off(EVENT_FOCUSIN)\n\n    $(this._element).removeClass(CLASS_NAME_SHOW)\n\n    $(this._element).off(EVENT_CLICK_DISMISS)\n    $(this._dialog).off(EVENT_MOUSEDOWN_DISMISS)\n\n    if (transition) {\n      const transitionDuration = Util.getTransitionDurationFromElement(this._element)\n\n      $(this._element)\n        .one(Util.TRANSITION_END, event => this._hideModal(event))\n        .emulateTransitionEnd(transitionDuration)\n    } else {\n      this._hideModal()\n    }\n  }\n\n  dispose() {\n    [window, this._element, this._dialog]\n      .forEach(htmlElement => $(htmlElement).off(EVENT_KEY))\n\n    /**\n     * `document` has 2 events `EVENT_FOCUSIN` and `EVENT_CLICK_DATA_API`\n     * Do not move `document` in `htmlElements` array\n     * It will remove `EVENT_CLICK_DATA_API` event that should remain\n     */\n    $(document).off(EVENT_FOCUSIN)\n\n    $.removeData(this._element, DATA_KEY)\n\n    this._config = null\n    this._element = null\n    this._dialog = null\n    this._backdrop = null\n    this._isShown = null\n    this._isBodyOverflowing = null\n    this._ignoreBackdropClick = null\n    this._isTransitioning = null\n    this._scrollbarWidth = null\n  }\n\n  handleUpdate() {\n    this._adjustDialog()\n  }\n\n  // Private\n\n  _getConfig(config) {\n    config = {\n      ...Default,\n      ...config\n    }\n    Util.typeCheckConfig(NAME, config, DefaultType)\n    return config\n  }\n\n  _triggerBackdropTransition() {\n    const hideEventPrevented = $.Event(EVENT_HIDE_PREVENTED)\n\n    $(this._element).trigger(hideEventPrevented)\n    if (hideEventPrevented.isDefaultPrevented()) {\n      return\n    }\n\n    const isModalOverflowing = this._element.scrollHeight > document.documentElement.clientHeight\n\n    if (!isModalOverflowing) {\n      this._element.style.overflowY = 'hidden'\n    }\n\n    this._element.classList.add(CLASS_NAME_STATIC)\n\n    const modalTransitionDuration = Util.getTransitionDurationFromElement(this._dialog)\n    $(this._element).off(Util.TRANSITION_END)\n\n    $(this._element).one(Util.TRANSITION_END, () => {\n      this._element.classList.remove(CLASS_NAME_STATIC)\n      if (!isModalOverflowing) {\n        $(this._element).one(Util.TRANSITION_END, () => {\n          this._element.style.overflowY = ''\n        })\n          .emulateTransitionEnd(this._element, modalTransitionDuration)\n      }\n    })\n      .emulateTransitionEnd(modalTransitionDuration)\n    this._element.focus()\n  }\n\n  _showElement(relatedTarget) {\n    const transition = $(this._element).hasClass(CLASS_NAME_FADE)\n    const modalBody = this._dialog ? this._dialog.querySelector(SELECTOR_MODAL_BODY) : null\n\n    if (!this._element.parentNode ||\n        this._element.parentNode.nodeType !== Node.ELEMENT_NODE) {\n      // Don't move modal's DOM position\n      document.body.appendChild(this._element)\n    }\n\n    this._element.style.display = 'block'\n    this._element.removeAttribute('aria-hidden')\n    this._element.setAttribute('aria-modal', true)\n    this._element.setAttribute('role', 'dialog')\n\n    if ($(this._dialog).hasClass(CLASS_NAME_SCROLLABLE) && modalBody) {\n      modalBody.scrollTop = 0\n    } else {\n      this._element.scrollTop = 0\n    }\n\n    if (transition) {\n      Util.reflow(this._element)\n    }\n\n    $(this._element).addClass(CLASS_NAME_SHOW)\n\n    if (this._config.focus) {\n      this._enforceFocus()\n    }\n\n    const shownEvent = $.Event(EVENT_SHOWN, {\n      relatedTarget\n    })\n\n    const transitionComplete = () => {\n      if (this._config.focus) {\n        this._element.focus()\n      }\n\n      this._isTransitioning = false\n      $(this._element).trigger(shownEvent)\n    }\n\n    if (transition) {\n      const transitionDuration = Util.getTransitionDurationFromElement(this._dialog)\n\n      $(this._dialog)\n        .one(Util.TRANSITION_END, transitionComplete)\n        .emulateTransitionEnd(transitionDuration)\n    } else {\n      transitionComplete()\n    }\n  }\n\n  _enforceFocus() {\n    $(document)\n      .off(EVENT_FOCUSIN) // Guard against infinite focus loop\n      .on(EVENT_FOCUSIN, event => {\n        if (document !== event.target &&\n            this._element !== event.target &&\n            $(this._element).has(event.target).length === 0) {\n          this._element.focus()\n        }\n      })\n  }\n\n  _setEscapeEvent() {\n    if (this._isShown) {\n      $(this._element).on(EVENT_KEYDOWN_DISMISS, event => {\n        if (this._config.keyboard && event.which === ESCAPE_KEYCODE) {\n          event.preventDefault()\n          this.hide()\n        } else if (!this._config.keyboard && event.which === ESCAPE_KEYCODE) {\n          this._triggerBackdropTransition()\n        }\n      })\n    } else if (!this._isShown) {\n      $(this._element).off(EVENT_KEYDOWN_DISMISS)\n    }\n  }\n\n  _setResizeEvent() {\n    if (this._isShown) {\n      $(window).on(EVENT_RESIZE, event => this.handleUpdate(event))\n    } else {\n      $(window).off(EVENT_RESIZE)\n    }\n  }\n\n  _hideModal() {\n    this._element.style.display = 'none'\n    this._element.setAttribute('aria-hidden', true)\n    this._element.removeAttribute('aria-modal')\n    this._element.removeAttribute('role')\n    this._isTransitioning = false\n    this._showBackdrop(() => {\n      $(document.body).removeClass(CLASS_NAME_OPEN)\n      this._resetAdjustments()\n      this._resetScrollbar()\n      $(this._element).trigger(EVENT_HIDDEN)\n    })\n  }\n\n  _removeBackdrop() {\n    if (this._backdrop) {\n      $(this._backdrop).remove()\n      this._backdrop = null\n    }\n  }\n\n  _showBackdrop(callback) {\n    const animate = $(this._element).hasClass(CLASS_NAME_FADE) ?\n      CLASS_NAME_FADE : ''\n\n    if (this._isShown && this._config.backdrop) {\n      this._backdrop = document.createElement('div')\n      this._backdrop.className = CLASS_NAME_BACKDROP\n\n      if (animate) {\n        this._backdrop.classList.add(animate)\n      }\n\n      $(this._backdrop).appendTo(document.body)\n\n      $(this._element).on(EVENT_CLICK_DISMISS, event => {\n        if (this._ignoreBackdropClick) {\n          this._ignoreBackdropClick = false\n          return\n        }\n\n        if (event.target !== event.currentTarget) {\n          return\n        }\n\n        if (this._config.backdrop === 'static') {\n          this._triggerBackdropTransition()\n        } else {\n          this.hide()\n        }\n      })\n\n      if (animate) {\n        Util.reflow(this._backdrop)\n      }\n\n      $(this._backdrop).addClass(CLASS_NAME_SHOW)\n\n      if (!callback) {\n        return\n      }\n\n      if (!animate) {\n        callback()\n        return\n      }\n\n      const backdropTransitionDuration = Util.getTransitionDurationFromElement(this._backdrop)\n\n      $(this._backdrop)\n        .one(Util.TRANSITION_END, callback)\n        .emulateTransitionEnd(backdropTransitionDuration)\n    } else if (!this._isShown && this._backdrop) {\n      $(this._backdrop).removeClass(CLASS_NAME_SHOW)\n\n      const callbackRemove = () => {\n        this._removeBackdrop()\n        if (callback) {\n          callback()\n        }\n      }\n\n      if ($(this._element).hasClass(CLASS_NAME_FADE)) {\n        const backdropTransitionDuration = Util.getTransitionDurationFromElement(this._backdrop)\n\n        $(this._backdrop)\n          .one(Util.TRANSITION_END, callbackRemove)\n          .emulateTransitionEnd(backdropTransitionDuration)\n      } else {\n        callbackRemove()\n      }\n    } else if (callback) {\n      callback()\n    }\n  }\n\n  // ----------------------------------------------------------------------\n  // the following methods are used to handle overflowing modals\n  // todo (fat): these should probably be refactored out of modal.js\n  // ----------------------------------------------------------------------\n\n  _adjustDialog() {\n    const isModalOverflowing = this._element.scrollHeight > document.documentElement.clientHeight\n\n    if (!this._isBodyOverflowing && isModalOverflowing) {\n      this._element.style.paddingLeft = `${this._scrollbarWidth}px`\n    }\n\n    if (this._isBodyOverflowing && !isModalOverflowing) {\n      this._element.style.paddingRight = `${this._scrollbarWidth}px`\n    }\n  }\n\n  _resetAdjustments() {\n    this._element.style.paddingLeft = ''\n    this._element.style.paddingRight = ''\n  }\n\n  _checkScrollbar() {\n    const rect = document.body.getBoundingClientRect()\n    this._isBodyOverflowing = Math.round(rect.left + rect.right) < window.innerWidth\n    this._scrollbarWidth = this._getScrollbarWidth()\n  }\n\n  _setScrollbar() {\n    if (this._isBodyOverflowing) {\n      // Note: DOMNode.style.paddingRight returns the actual value or '' if not set\n      //   while $(DOMNode).css('padding-right') returns the calculated value or 0 if not set\n      const fixedContent = [].slice.call(document.querySelectorAll(SELECTOR_FIXED_CONTENT))\n      const stickyContent = [].slice.call(document.querySelectorAll(SELECTOR_STICKY_CONTENT))\n\n      // Adjust fixed content padding\n      $(fixedContent).each((index, element) => {\n        const actualPadding = element.style.paddingRight\n        const calculatedPadding = $(element).css('padding-right')\n        $(element)\n          .data('padding-right', actualPadding)\n          .css('padding-right', `${parseFloat(calculatedPadding) + this._scrollbarWidth}px`)\n      })\n\n      // Adjust sticky content margin\n      $(stickyContent).each((index, element) => {\n        const actualMargin = element.style.marginRight\n        const calculatedMargin = $(element).css('margin-right')\n        $(element)\n          .data('margin-right', actualMargin)\n          .css('margin-right', `${parseFloat(calculatedMargin) - this._scrollbarWidth}px`)\n      })\n\n      // Adjust body padding\n      const actualPadding = document.body.style.paddingRight\n      const calculatedPadding = $(document.body).css('padding-right')\n      $(document.body)\n        .data('padding-right', actualPadding)\n        .css('padding-right', `${parseFloat(calculatedPadding) + this._scrollbarWidth}px`)\n    }\n\n    $(document.body).addClass(CLASS_NAME_OPEN)\n  }\n\n  _resetScrollbar() {\n    // Restore fixed content padding\n    const fixedContent = [].slice.call(document.querySelectorAll(SELECTOR_FIXED_CONTENT))\n    $(fixedContent).each((index, element) => {\n      const padding = $(element).data('padding-right')\n      $(element).removeData('padding-right')\n      element.style.paddingRight = padding ? padding : ''\n    })\n\n    // Restore sticky content\n    const elements = [].slice.call(document.querySelectorAll(`${SELECTOR_STICKY_CONTENT}`))\n    $(elements).each((index, element) => {\n      const margin = $(element).data('margin-right')\n      if (typeof margin !== 'undefined') {\n        $(element).css('margin-right', margin).removeData('margin-right')\n      }\n    })\n\n    // Restore body padding\n    const padding = $(document.body).data('padding-right')\n    $(document.body).removeData('padding-right')\n    document.body.style.paddingRight = padding ? padding : ''\n  }\n\n  _getScrollbarWidth() { // thx d.walsh\n    const scrollDiv = document.createElement('div')\n    scrollDiv.className = CLASS_NAME_SCROLLBAR_MEASURER\n    document.body.appendChild(scrollDiv)\n    const scrollbarWidth = scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth\n    document.body.removeChild(scrollDiv)\n    return scrollbarWidth\n  }\n\n  // Static\n\n  static _jQueryInterface(config, relatedTarget) {\n    return this.each(function () {\n      let data = $(this).data(DATA_KEY)\n      const _config = {\n        ...Default,\n        ...$(this).data(),\n        ...(typeof config === 'object' && config ? config : {})\n      }\n\n      if (!data) {\n        data = new Modal(this, _config)\n        $(this).data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'string') {\n        if (typeof data[config] === 'undefined') {\n          throw new TypeError(`No method named \"${config}\"`)\n        }\n\n        data[config](relatedTarget)\n      } else if (_config.show) {\n        data.show(relatedTarget)\n      }\n    })\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * Data Api implementation\n * ------------------------------------------------------------------------\n */\n\n$(document).on(EVENT_CLICK_DATA_API, SELECTOR_DATA_TOGGLE, function (event) {\n  let target\n  const selector = Util.getSelectorFromElement(this)\n\n  if (selector) {\n    target = document.querySelector(selector)\n  }\n\n  const config = $(target).data(DATA_KEY) ?\n    'toggle' : {\n      ...$(target).data(),\n      ...$(this).data()\n    }\n\n  if (this.tagName === 'A' || this.tagName === 'AREA') {\n    event.preventDefault()\n  }\n\n  const $target = $(target).one(EVENT_SHOW, showEvent => {\n    if (showEvent.isDefaultPrevented()) {\n      // Only register focus restorer if modal will actually get shown\n      return\n    }\n\n    $target.one(EVENT_HIDDEN, () => {\n      if ($(this).is(':visible')) {\n        this.focus()\n      }\n    })\n  })\n\n  Modal._jQueryInterface.call($(target), config, this)\n})\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Modal._jQueryInterface\n$.fn[NAME].Constructor = Modal\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Modal._jQueryInterface\n}\n\nexport default Modal\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): tools/sanitizer.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nconst uriAttrs = [\n  'background',\n  'cite',\n  'href',\n  'itemtype',\n  'longdesc',\n  'poster',\n  'src',\n  'xlink:href'\n]\n\nconst ARIA_ATTRIBUTE_PATTERN = /^aria-[\\w-]*$/i\n\nexport const DefaultWhitelist = {\n  // Global attributes allowed on any supplied element below.\n  '*': ['class', 'dir', 'id', 'lang', 'role', ARIA_ATTRIBUTE_PATTERN],\n  a: ['target', 'href', 'title', 'rel'],\n  area: [],\n  b: [],\n  br: [],\n  col: [],\n  code: [],\n  div: [],\n  em: [],\n  hr: [],\n  h1: [],\n  h2: [],\n  h3: [],\n  h4: [],\n  h5: [],\n  h6: [],\n  i: [],\n  img: ['src', 'srcset', 'alt', 'title', 'width', 'height'],\n  li: [],\n  ol: [],\n  p: [],\n  pre: [],\n  s: [],\n  small: [],\n  span: [],\n  sub: [],\n  sup: [],\n  strong: [],\n  u: [],\n  ul: []\n}\n\n/**\n * A pattern that recognizes a commonly useful subset of URLs that are safe.\n *\n * Shoutout to Angular 7 https://github.com/angular/angular/blob/7.2.4/packages/core/src/sanitization/url_sanitizer.ts\n */\nconst SAFE_URL_PATTERN = /^(?:(?:https?|mailto|ftp|tel|file):|[^#&/:?]*(?:[#/?]|$))/gi\n\n/**\n * A pattern that matches safe data URLs. Only matches image, video and audio types.\n *\n * Shoutout to Angular 7 https://github.com/angular/angular/blob/7.2.4/packages/core/src/sanitization/url_sanitizer.ts\n */\nconst DATA_URL_PATTERN = /^data:(?:image\\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\\/(?:mpeg|mp4|ogg|webm)|audio\\/(?:mp3|oga|ogg|opus));base64,[\\d+/a-z]+=*$/i\n\nfunction allowedAttribute(attr, allowedAttributeList) {\n  const attrName = attr.nodeName.toLowerCase()\n\n  if (allowedAttributeList.indexOf(attrName) !== -1) {\n    if (uriAttrs.indexOf(attrName) !== -1) {\n      return Boolean(attr.nodeValue.match(SAFE_URL_PATTERN) || attr.nodeValue.match(DATA_URL_PATTERN))\n    }\n\n    return true\n  }\n\n  const regExp = allowedAttributeList.filter(attrRegex => attrRegex instanceof RegExp)\n\n  // Check if a regular expression validates the attribute.\n  for (let i = 0, len = regExp.length; i < len; i++) {\n    if (attrName.match(regExp[i])) {\n      return true\n    }\n  }\n\n  return false\n}\n\nexport function sanitizeHtml(unsafeHtml, whiteList, sanitizeFn) {\n  if (unsafeHtml.length === 0) {\n    return unsafeHtml\n  }\n\n  if (sanitizeFn && typeof sanitizeFn === 'function') {\n    return sanitizeFn(unsafeHtml)\n  }\n\n  const domParser = new window.DOMParser()\n  const createdDocument = domParser.parseFromString(unsafeHtml, 'text/html')\n  const whitelistKeys = Object.keys(whiteList)\n  const elements = [].slice.call(createdDocument.body.querySelectorAll('*'))\n\n  for (let i = 0, len = elements.length; i < len; i++) {\n    const el = elements[i]\n    const elName = el.nodeName.toLowerCase()\n\n    if (whitelistKeys.indexOf(el.nodeName.toLowerCase()) === -1) {\n      el.parentNode.removeChild(el)\n\n      continue\n    }\n\n    const attributeList = [].slice.call(el.attributes)\n    const whitelistedAttributes = [].concat(whiteList['*'] || [], whiteList[elName] || [])\n\n    attributeList.forEach(attr => {\n      if (!allowedAttribute(attr, whitelistedAttributes)) {\n        el.removeAttribute(attr.nodeName)\n      }\n    })\n  }\n\n  return createdDocument.body.innerHTML\n}\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): tooltip.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport {\n  DefaultWhitelist,\n  sanitizeHtml\n} from './tools/sanitizer'\nimport $ from 'jquery'\nimport Popper from 'popper.js'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'tooltip'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.tooltip'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\nconst CLASS_PREFIX = 'bs-tooltip'\nconst BSCLS_PREFIX_REGEX = new RegExp(`(^|\\\\s)${CLASS_PREFIX}\\\\S+`, 'g')\nconst DISALLOWED_ATTRIBUTES = ['sanitize', 'whiteList', 'sanitizeFn']\n\nconst DefaultType = {\n  animation: 'boolean',\n  template: 'string',\n  title: '(string|element|function)',\n  trigger: 'string',\n  delay: '(number|object)',\n  html: 'boolean',\n  selector: '(string|boolean)',\n  placement: '(string|function)',\n  offset: '(number|string|function)',\n  container: '(string|element|boolean)',\n  fallbackPlacement: '(string|array)',\n  boundary: '(string|element)',\n  customClass: '(string|function)',\n  sanitize: 'boolean',\n  sanitizeFn: '(null|function)',\n  whiteList: 'object',\n  popperConfig: '(null|object)'\n}\n\nconst AttachmentMap = {\n  AUTO: 'auto',\n  TOP: 'top',\n  RIGHT: 'right',\n  BOTTOM: 'bottom',\n  LEFT: 'left'\n}\n\nconst Default = {\n  animation: true,\n  template: '<div class=\"tooltip\" role=\"tooltip\">' +\n                    '<div class=\"arrow\"></div>' +\n                    '<div class=\"tooltip-inner\"></div></div>',\n  trigger: 'hover focus',\n  title: '',\n  delay: 0,\n  html: false,\n  selector: false,\n  placement: 'top',\n  offset: 0,\n  container: false,\n  fallbackPlacement: 'flip',\n  boundary: 'scrollParent',\n  customClass: '',\n  sanitize: true,\n  sanitizeFn: null,\n  whiteList: DefaultWhitelist,\n  popperConfig: null\n}\n\nconst HOVER_STATE_SHOW = 'show'\nconst HOVER_STATE_OUT = 'out'\n\nconst Event = {\n  HIDE: `hide${EVENT_KEY}`,\n  HIDDEN: `hidden${EVENT_KEY}`,\n  SHOW: `show${EVENT_KEY}`,\n  SHOWN: `shown${EVENT_KEY}`,\n  INSERTED: `inserted${EVENT_KEY}`,\n  CLICK: `click${EVENT_KEY}`,\n  FOCUSIN: `focusin${EVENT_KEY}`,\n  FOCUSOUT: `focusout${EVENT_KEY}`,\n  MOUSEENTER: `mouseenter${EVENT_KEY}`,\n  MOUSELEAVE: `mouseleave${EVENT_KEY}`\n}\n\nconst CLASS_NAME_FADE = 'fade'\nconst CLASS_NAME_SHOW = 'show'\n\nconst SELECTOR_TOOLTIP_INNER = '.tooltip-inner'\nconst SELECTOR_ARROW = '.arrow'\n\nconst TRIGGER_HOVER = 'hover'\nconst TRIGGER_FOCUS = 'focus'\nconst TRIGGER_CLICK = 'click'\nconst TRIGGER_MANUAL = 'manual'\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Tooltip {\n  constructor(element, config) {\n    if (typeof Popper === 'undefined') {\n      throw new TypeError('Bootstrap\\'s tooltips require Popper (https://popper.js.org)')\n    }\n\n    // private\n    this._isEnabled = true\n    this._timeout = 0\n    this._hoverState = ''\n    this._activeTrigger = {}\n    this._popper = null\n\n    // Protected\n    this.element = element\n    this.config = this._getConfig(config)\n    this.tip = null\n\n    this._setListeners()\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  static get Default() {\n    return Default\n  }\n\n  static get NAME() {\n    return NAME\n  }\n\n  static get DATA_KEY() {\n    return DATA_KEY\n  }\n\n  static get Event() {\n    return Event\n  }\n\n  static get EVENT_KEY() {\n    return EVENT_KEY\n  }\n\n  static get DefaultType() {\n    return DefaultType\n  }\n\n  // Public\n\n  enable() {\n    this._isEnabled = true\n  }\n\n  disable() {\n    this._isEnabled = false\n  }\n\n  toggleEnabled() {\n    this._isEnabled = !this._isEnabled\n  }\n\n  toggle(event) {\n    if (!this._isEnabled) {\n      return\n    }\n\n    if (event) {\n      const dataKey = this.constructor.DATA_KEY\n      let context = $(event.currentTarget).data(dataKey)\n\n      if (!context) {\n        context = new this.constructor(\n          event.currentTarget,\n          this._getDelegateConfig()\n        )\n        $(event.currentTarget).data(dataKey, context)\n      }\n\n      context._activeTrigger.click = !context._activeTrigger.click\n\n      if (context._isWithActiveTrigger()) {\n        context._enter(null, context)\n      } else {\n        context._leave(null, context)\n      }\n    } else {\n      if ($(this.getTipElement()).hasClass(CLASS_NAME_SHOW)) {\n        this._leave(null, this)\n        return\n      }\n\n      this._enter(null, this)\n    }\n  }\n\n  dispose() {\n    clearTimeout(this._timeout)\n\n    $.removeData(this.element, this.constructor.DATA_KEY)\n\n    $(this.element).off(this.constructor.EVENT_KEY)\n    $(this.element).closest('.modal').off('hide.bs.modal', this._hideModalHandler)\n\n    if (this.tip) {\n      $(this.tip).remove()\n    }\n\n    this._isEnabled = null\n    this._timeout = null\n    this._hoverState = null\n    this._activeTrigger = null\n    if (this._popper) {\n      this._popper.destroy()\n    }\n\n    this._popper = null\n    this.element = null\n    this.config = null\n    this.tip = null\n  }\n\n  show() {\n    if ($(this.element).css('display') === 'none') {\n      throw new Error('Please use show on visible elements')\n    }\n\n    const showEvent = $.Event(this.constructor.Event.SHOW)\n    if (this.isWithContent() && this._isEnabled) {\n      $(this.element).trigger(showEvent)\n\n      const shadowRoot = Util.findShadowRoot(this.element)\n      const isInTheDom = $.contains(\n        shadowRoot !== null ? shadowRoot : this.element.ownerDocument.documentElement,\n        this.element\n      )\n\n      if (showEvent.isDefaultPrevented() || !isInTheDom) {\n        return\n      }\n\n      const tip = this.getTipElement()\n      const tipId = Util.getUID(this.constructor.NAME)\n\n      tip.setAttribute('id', tipId)\n      this.element.setAttribute('aria-describedby', tipId)\n\n      this.setContent()\n\n      if (this.config.animation) {\n        $(tip).addClass(CLASS_NAME_FADE)\n      }\n\n      const placement = typeof this.config.placement === 'function' ?\n        this.config.placement.call(this, tip, this.element) :\n        this.config.placement\n\n      const attachment = this._getAttachment(placement)\n      this.addAttachmentClass(attachment)\n\n      const container = this._getContainer()\n      $(tip).data(this.constructor.DATA_KEY, this)\n\n      if (!$.contains(this.element.ownerDocument.documentElement, this.tip)) {\n        $(tip).appendTo(container)\n      }\n\n      $(this.element).trigger(this.constructor.Event.INSERTED)\n\n      this._popper = new Popper(this.element, tip, this._getPopperConfig(attachment))\n\n      $(tip).addClass(CLASS_NAME_SHOW)\n      $(tip).addClass(this.config.customClass)\n\n      // If this is a touch-enabled device we add extra\n      // empty mouseover listeners to the body's immediate children;\n      // only needed because of broken event delegation on iOS\n      // https://www.quirksmode.org/blog/archives/2014/02/mouse_event_bub.html\n      if ('ontouchstart' in document.documentElement) {\n        $(document.body).children().on('mouseover', null, $.noop)\n      }\n\n      const complete = () => {\n        if (this.config.animation) {\n          this._fixTransition()\n        }\n\n        const prevHoverState = this._hoverState\n        this._hoverState = null\n\n        $(this.element).trigger(this.constructor.Event.SHOWN)\n\n        if (prevHoverState === HOVER_STATE_OUT) {\n          this._leave(null, this)\n        }\n      }\n\n      if ($(this.tip).hasClass(CLASS_NAME_FADE)) {\n        const transitionDuration = Util.getTransitionDurationFromElement(this.tip)\n\n        $(this.tip)\n          .one(Util.TRANSITION_END, complete)\n          .emulateTransitionEnd(transitionDuration)\n      } else {\n        complete()\n      }\n    }\n  }\n\n  hide(callback) {\n    const tip = this.getTipElement()\n    const hideEvent = $.Event(this.constructor.Event.HIDE)\n    const complete = () => {\n      if (this._hoverState !== HOVER_STATE_SHOW && tip.parentNode) {\n        tip.parentNode.removeChild(tip)\n      }\n\n      this._cleanTipClass()\n      this.element.removeAttribute('aria-describedby')\n      $(this.element).trigger(this.constructor.Event.HIDDEN)\n      if (this._popper !== null) {\n        this._popper.destroy()\n      }\n\n      if (callback) {\n        callback()\n      }\n    }\n\n    $(this.element).trigger(hideEvent)\n\n    if (hideEvent.isDefaultPrevented()) {\n      return\n    }\n\n    $(tip).removeClass(CLASS_NAME_SHOW)\n\n    // If this is a touch-enabled device we remove the extra\n    // empty mouseover listeners we added for iOS support\n    if ('ontouchstart' in document.documentElement) {\n      $(document.body).children().off('mouseover', null, $.noop)\n    }\n\n    this._activeTrigger[TRIGGER_CLICK] = false\n    this._activeTrigger[TRIGGER_FOCUS] = false\n    this._activeTrigger[TRIGGER_HOVER] = false\n\n    if ($(this.tip).hasClass(CLASS_NAME_FADE)) {\n      const transitionDuration = Util.getTransitionDurationFromElement(tip)\n\n      $(tip)\n        .one(Util.TRANSITION_END, complete)\n        .emulateTransitionEnd(transitionDuration)\n    } else {\n      complete()\n    }\n\n    this._hoverState = ''\n  }\n\n  update() {\n    if (this._popper !== null) {\n      this._popper.scheduleUpdate()\n    }\n  }\n\n  // Protected\n\n  isWithContent() {\n    return Boolean(this.getTitle())\n  }\n\n  addAttachmentClass(attachment) {\n    $(this.getTipElement()).addClass(`${CLASS_PREFIX}-${attachment}`)\n  }\n\n  getTipElement() {\n    this.tip = this.tip || $(this.config.template)[0]\n    return this.tip\n  }\n\n  setContent() {\n    const tip = this.getTipElement()\n    this.setElementContent($(tip.querySelectorAll(SELECTOR_TOOLTIP_INNER)), this.getTitle())\n    $(tip).removeClass(`${CLASS_NAME_FADE} ${CLASS_NAME_SHOW}`)\n  }\n\n  setElementContent($element, content) {\n    if (typeof content === 'object' && (content.nodeType || content.jquery)) {\n      // Content is a DOM node or a jQuery\n      if (this.config.html) {\n        if (!$(content).parent().is($element)) {\n          $element.empty().append(content)\n        }\n      } else {\n        $element.text($(content).text())\n      }\n\n      return\n    }\n\n    if (this.config.html) {\n      if (this.config.sanitize) {\n        content = sanitizeHtml(content, this.config.whiteList, this.config.sanitizeFn)\n      }\n\n      $element.html(content)\n    } else {\n      $element.text(content)\n    }\n  }\n\n  getTitle() {\n    let title = this.element.getAttribute('data-original-title')\n\n    if (!title) {\n      title = typeof this.config.title === 'function' ?\n        this.config.title.call(this.element) :\n        this.config.title\n    }\n\n    return title\n  }\n\n  // Private\n\n  _getPopperConfig(attachment) {\n    const defaultBsConfig = {\n      placement: attachment,\n      modifiers: {\n        offset: this._getOffset(),\n        flip: {\n          behavior: this.config.fallbackPlacement\n        },\n        arrow: {\n          element: SELECTOR_ARROW\n        },\n        preventOverflow: {\n          boundariesElement: this.config.boundary\n        }\n      },\n      onCreate: data => {\n        if (data.originalPlacement !== data.placement) {\n          this._handlePopperPlacementChange(data)\n        }\n      },\n      onUpdate: data => this._handlePopperPlacementChange(data)\n    }\n\n    return {\n      ...defaultBsConfig,\n      ...this.config.popperConfig\n    }\n  }\n\n  _getOffset() {\n    const offset = {}\n\n    if (typeof this.config.offset === 'function') {\n      offset.fn = data => {\n        data.offsets = {\n          ...data.offsets,\n          ...(this.config.offset(data.offsets, this.element) || {})\n        }\n\n        return data\n      }\n    } else {\n      offset.offset = this.config.offset\n    }\n\n    return offset\n  }\n\n  _getContainer() {\n    if (this.config.container === false) {\n      return document.body\n    }\n\n    if (Util.isElement(this.config.container)) {\n      return $(this.config.container)\n    }\n\n    return $(document).find(this.config.container)\n  }\n\n  _getAttachment(placement) {\n    return AttachmentMap[placement.toUpperCase()]\n  }\n\n  _setListeners() {\n    const triggers = this.config.trigger.split(' ')\n\n    triggers.forEach(trigger => {\n      if (trigger === 'click') {\n        $(this.element).on(\n          this.constructor.Event.CLICK,\n          this.config.selector,\n          event => this.toggle(event)\n        )\n      } else if (trigger !== TRIGGER_MANUAL) {\n        const eventIn = trigger === TRIGGER_HOVER ?\n          this.constructor.Event.MOUSEENTER :\n          this.constructor.Event.FOCUSIN\n        const eventOut = trigger === TRIGGER_HOVER ?\n          this.constructor.Event.MOUSELEAVE :\n          this.constructor.Event.FOCUSOUT\n\n        $(this.element)\n          .on(eventIn, this.config.selector, event => this._enter(event))\n          .on(eventOut, this.config.selector, event => this._leave(event))\n      }\n    })\n\n    this._hideModalHandler = () => {\n      if (this.element) {\n        this.hide()\n      }\n    }\n\n    $(this.element).closest('.modal').on('hide.bs.modal', this._hideModalHandler)\n\n    if (this.config.selector) {\n      this.config = {\n        ...this.config,\n        trigger: 'manual',\n        selector: ''\n      }\n    } else {\n      this._fixTitle()\n    }\n  }\n\n  _fixTitle() {\n    const titleType = typeof this.element.getAttribute('data-original-title')\n\n    if (this.element.getAttribute('title') || titleType !== 'string') {\n      this.element.setAttribute(\n        'data-original-title',\n        this.element.getAttribute('title') || ''\n      )\n\n      this.element.setAttribute('title', '')\n    }\n  }\n\n  _enter(event, context) {\n    const dataKey = this.constructor.DATA_KEY\n    context = context || $(event.currentTarget).data(dataKey)\n\n    if (!context) {\n      context = new this.constructor(\n        event.currentTarget,\n        this._getDelegateConfig()\n      )\n      $(event.currentTarget).data(dataKey, context)\n    }\n\n    if (event) {\n      context._activeTrigger[\n        event.type === 'focusin' ? TRIGGER_FOCUS : TRIGGER_HOVER\n      ] = true\n    }\n\n    if ($(context.getTipElement()).hasClass(CLASS_NAME_SHOW) || context._hoverState === HOVER_STATE_SHOW) {\n      context._hoverState = HOVER_STATE_SHOW\n      return\n    }\n\n    clearTimeout(context._timeout)\n\n    context._hoverState = HOVER_STATE_SHOW\n\n    if (!context.config.delay || !context.config.delay.show) {\n      context.show()\n      return\n    }\n\n    context._timeout = setTimeout(() => {\n      if (context._hoverState === HOVER_STATE_SHOW) {\n        context.show()\n      }\n    }, context.config.delay.show)\n  }\n\n  _leave(event, context) {\n    const dataKey = this.constructor.DATA_KEY\n    context = context || $(event.currentTarget).data(dataKey)\n\n    if (!context) {\n      context = new this.constructor(\n        event.currentTarget,\n        this._getDelegateConfig()\n      )\n      $(event.currentTarget).data(dataKey, context)\n    }\n\n    if (event) {\n      context._activeTrigger[\n        event.type === 'focusout' ? TRIGGER_FOCUS : TRIGGER_HOVER\n      ] = false\n    }\n\n    if (context._isWithActiveTrigger()) {\n      return\n    }\n\n    clearTimeout(context._timeout)\n\n    context._hoverState = HOVER_STATE_OUT\n\n    if (!context.config.delay || !context.config.delay.hide) {\n      context.hide()\n      return\n    }\n\n    context._timeout = setTimeout(() => {\n      if (context._hoverState === HOVER_STATE_OUT) {\n        context.hide()\n      }\n    }, context.config.delay.hide)\n  }\n\n  _isWithActiveTrigger() {\n    for (const trigger in this._activeTrigger) {\n      if (this._activeTrigger[trigger]) {\n        return true\n      }\n    }\n\n    return false\n  }\n\n  _getConfig(config) {\n    const dataAttributes = $(this.element).data()\n\n    Object.keys(dataAttributes)\n      .forEach(dataAttr => {\n        if (DISALLOWED_ATTRIBUTES.indexOf(dataAttr) !== -1) {\n          delete dataAttributes[dataAttr]\n        }\n      })\n\n    config = {\n      ...this.constructor.Default,\n      ...dataAttributes,\n      ...(typeof config === 'object' && config ? config : {})\n    }\n\n    if (typeof config.delay === 'number') {\n      config.delay = {\n        show: config.delay,\n        hide: config.delay\n      }\n    }\n\n    if (typeof config.title === 'number') {\n      config.title = config.title.toString()\n    }\n\n    if (typeof config.content === 'number') {\n      config.content = config.content.toString()\n    }\n\n    Util.typeCheckConfig(\n      NAME,\n      config,\n      this.constructor.DefaultType\n    )\n\n    if (config.sanitize) {\n      config.template = sanitizeHtml(config.template, config.whiteList, config.sanitizeFn)\n    }\n\n    return config\n  }\n\n  _getDelegateConfig() {\n    const config = {}\n\n    if (this.config) {\n      for (const key in this.config) {\n        if (this.constructor.Default[key] !== this.config[key]) {\n          config[key] = this.config[key]\n        }\n      }\n    }\n\n    return config\n  }\n\n  _cleanTipClass() {\n    const $tip = $(this.getTipElement())\n    const tabClass = $tip.attr('class').match(BSCLS_PREFIX_REGEX)\n    if (tabClass !== null && tabClass.length) {\n      $tip.removeClass(tabClass.join(''))\n    }\n  }\n\n  _handlePopperPlacementChange(popperData) {\n    this.tip = popperData.instance.popper\n    this._cleanTipClass()\n    this.addAttachmentClass(this._getAttachment(popperData.placement))\n  }\n\n  _fixTransition() {\n    const tip = this.getTipElement()\n    const initConfigAnimation = this.config.animation\n\n    if (tip.getAttribute('x-placement') !== null) {\n      return\n    }\n\n    $(tip).removeClass(CLASS_NAME_FADE)\n    this.config.animation = false\n    this.hide()\n    this.show()\n    this.config.animation = initConfigAnimation\n  }\n\n  // Static\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      const $element = $(this)\n      let data = $element.data(DATA_KEY)\n      const _config = typeof config === 'object' && config\n\n      if (!data && /dispose|hide/.test(config)) {\n        return\n      }\n\n      if (!data) {\n        data = new Tooltip(this, _config)\n        $element.data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'string') {\n        if (typeof data[config] === 'undefined') {\n          throw new TypeError(`No method named \"${config}\"`)\n        }\n\n        data[config]()\n      }\n    })\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Tooltip._jQueryInterface\n$.fn[NAME].Constructor = Tooltip\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Tooltip._jQueryInterface\n}\n\nexport default Tooltip\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): popover.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Tooltip from './tooltip'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'popover'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.popover'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\nconst CLASS_PREFIX = 'bs-popover'\nconst BSCLS_PREFIX_REGEX = new RegExp(`(^|\\\\s)${CLASS_PREFIX}\\\\S+`, 'g')\n\nconst Default = {\n  ...Tooltip.Default,\n  placement: 'right',\n  trigger: 'click',\n  content: '',\n  template: '<div class=\"popover\" role=\"tooltip\">' +\n              '<div class=\"arrow\"></div>' +\n              '<h3 class=\"popover-header\"></h3>' +\n              '<div class=\"popover-body\"></div></div>'\n}\n\nconst DefaultType = {\n  ...Tooltip.DefaultType,\n  content: '(string|element|function)'\n}\n\nconst CLASS_NAME_FADE = 'fade'\nconst CLASS_NAME_SHOW = 'show'\n\nconst SELECTOR_TITLE = '.popover-header'\nconst SELECTOR_CONTENT = '.popover-body'\n\nconst Event = {\n  HIDE: `hide${EVENT_KEY}`,\n  HIDDEN: `hidden${EVENT_KEY}`,\n  SHOW: `show${EVENT_KEY}`,\n  SHOWN: `shown${EVENT_KEY}`,\n  INSERTED: `inserted${EVENT_KEY}`,\n  CLICK: `click${EVENT_KEY}`,\n  FOCUSIN: `focusin${EVENT_KEY}`,\n  FOCUSOUT: `focusout${EVENT_KEY}`,\n  MOUSEENTER: `mouseenter${EVENT_KEY}`,\n  MOUSELEAVE: `mouseleave${EVENT_KEY}`\n}\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Popover extends Tooltip {\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  static get Default() {\n    return Default\n  }\n\n  static get NAME() {\n    return NAME\n  }\n\n  static get DATA_KEY() {\n    return DATA_KEY\n  }\n\n  static get Event() {\n    return Event\n  }\n\n  static get EVENT_KEY() {\n    return EVENT_KEY\n  }\n\n  static get DefaultType() {\n    return DefaultType\n  }\n\n  // Overrides\n\n  isWithContent() {\n    return this.getTitle() || this._getContent()\n  }\n\n  addAttachmentClass(attachment) {\n    $(this.getTipElement()).addClass(`${CLASS_PREFIX}-${attachment}`)\n  }\n\n  getTipElement() {\n    this.tip = this.tip || $(this.config.template)[0]\n    return this.tip\n  }\n\n  setContent() {\n    const $tip = $(this.getTipElement())\n\n    // We use append for html objects to maintain js events\n    this.setElementContent($tip.find(SELECTOR_TITLE), this.getTitle())\n    let content = this._getContent()\n    if (typeof content === 'function') {\n      content = content.call(this.element)\n    }\n\n    this.setElementContent($tip.find(SELECTOR_CONTENT), content)\n\n    $tip.removeClass(`${CLASS_NAME_FADE} ${CLASS_NAME_SHOW}`)\n  }\n\n  // Private\n\n  _getContent() {\n    return this.element.getAttribute('data-content') ||\n      this.config.content\n  }\n\n  _cleanTipClass() {\n    const $tip = $(this.getTipElement())\n    const tabClass = $tip.attr('class').match(BSCLS_PREFIX_REGEX)\n    if (tabClass !== null && tabClass.length > 0) {\n      $tip.removeClass(tabClass.join(''))\n    }\n  }\n\n  // Static\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      let data = $(this).data(DATA_KEY)\n      const _config = typeof config === 'object' ? config : null\n\n      if (!data && /dispose|hide/.test(config)) {\n        return\n      }\n\n      if (!data) {\n        data = new Popover(this, _config)\n        $(this).data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'string') {\n        if (typeof data[config] === 'undefined') {\n          throw new TypeError(`No method named \"${config}\"`)\n        }\n\n        data[config]()\n      }\n    })\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Popover._jQueryInterface\n$.fn[NAME].Constructor = Popover\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Popover._jQueryInterface\n}\n\nexport default Popover\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): scrollspy.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'scrollspy'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.scrollspy'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst DATA_API_KEY = '.data-api'\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\n\nconst Default = {\n  offset: 10,\n  method: 'auto',\n  target: ''\n}\n\nconst DefaultType = {\n  offset: 'number',\n  method: 'string',\n  target: '(string|element)'\n}\n\nconst EVENT_ACTIVATE = `activate${EVENT_KEY}`\nconst EVENT_SCROLL = `scroll${EVENT_KEY}`\nconst EVENT_LOAD_DATA_API = `load${EVENT_KEY}${DATA_API_KEY}`\n\nconst CLASS_NAME_DROPDOWN_ITEM = 'dropdown-item'\nconst CLASS_NAME_ACTIVE = 'active'\n\nconst SELECTOR_DATA_SPY = '[data-spy=\"scroll\"]'\nconst SELECTOR_NAV_LIST_GROUP = '.nav, .list-group'\nconst SELECTOR_NAV_LINKS = '.nav-link'\nconst SELECTOR_NAV_ITEMS = '.nav-item'\nconst SELECTOR_LIST_ITEMS = '.list-group-item'\nconst SELECTOR_DROPDOWN = '.dropdown'\nconst SELECTOR_DROPDOWN_ITEMS = '.dropdown-item'\nconst SELECTOR_DROPDOWN_TOGGLE = '.dropdown-toggle'\n\nconst METHOD_OFFSET = 'offset'\nconst METHOD_POSITION = 'position'\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass ScrollSpy {\n  constructor(element, config) {\n    this._element = element\n    this._scrollElement = element.tagName === 'BODY' ? window : element\n    this._config = this._getConfig(config)\n    this._selector = `${this._config.target} ${SELECTOR_NAV_LINKS},` +\n                          `${this._config.target} ${SELECTOR_LIST_ITEMS},` +\n                          `${this._config.target} ${SELECTOR_DROPDOWN_ITEMS}`\n    this._offsets = []\n    this._targets = []\n    this._activeTarget = null\n    this._scrollHeight = 0\n\n    $(this._scrollElement).on(EVENT_SCROLL, event => this._process(event))\n\n    this.refresh()\n    this._process()\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  static get Default() {\n    return Default\n  }\n\n  // Public\n\n  refresh() {\n    const autoMethod = this._scrollElement === this._scrollElement.window ?\n      METHOD_OFFSET : METHOD_POSITION\n\n    const offsetMethod = this._config.method === 'auto' ?\n      autoMethod : this._config.method\n\n    const offsetBase = offsetMethod === METHOD_POSITION ?\n      this._getScrollTop() : 0\n\n    this._offsets = []\n    this._targets = []\n\n    this._scrollHeight = this._getScrollHeight()\n\n    const targets = [].slice.call(document.querySelectorAll(this._selector))\n\n    targets\n      .map(element => {\n        let target\n        const targetSelector = Util.getSelectorFromElement(element)\n\n        if (targetSelector) {\n          target = document.querySelector(targetSelector)\n        }\n\n        if (target) {\n          const targetBCR = target.getBoundingClientRect()\n          if (targetBCR.width || targetBCR.height) {\n            // TODO (fat): remove sketch reliance on jQuery position/offset\n            return [\n              $(target)[offsetMethod]().top + offsetBase,\n              targetSelector\n            ]\n          }\n        }\n\n        return null\n      })\n      .filter(item => item)\n      .sort((a, b) => a[0] - b[0])\n      .forEach(item => {\n        this._offsets.push(item[0])\n        this._targets.push(item[1])\n      })\n  }\n\n  dispose() {\n    $.removeData(this._element, DATA_KEY)\n    $(this._scrollElement).off(EVENT_KEY)\n\n    this._element = null\n    this._scrollElement = null\n    this._config = null\n    this._selector = null\n    this._offsets = null\n    this._targets = null\n    this._activeTarget = null\n    this._scrollHeight = null\n  }\n\n  // Private\n\n  _getConfig(config) {\n    config = {\n      ...Default,\n      ...(typeof config === 'object' && config ? config : {})\n    }\n\n    if (typeof config.target !== 'string' && Util.isElement(config.target)) {\n      let id = $(config.target).attr('id')\n      if (!id) {\n        id = Util.getUID(NAME)\n        $(config.target).attr('id', id)\n      }\n\n      config.target = `#${id}`\n    }\n\n    Util.typeCheckConfig(NAME, config, DefaultType)\n\n    return config\n  }\n\n  _getScrollTop() {\n    return this._scrollElement === window ?\n      this._scrollElement.pageYOffset : this._scrollElement.scrollTop\n  }\n\n  _getScrollHeight() {\n    return this._scrollElement.scrollHeight || Math.max(\n      document.body.scrollHeight,\n      document.documentElement.scrollHeight\n    )\n  }\n\n  _getOffsetHeight() {\n    return this._scrollElement === window ?\n      window.innerHeight : this._scrollElement.getBoundingClientRect().height\n  }\n\n  _process() {\n    const scrollTop = this._getScrollTop() + this._config.offset\n    const scrollHeight = this._getScrollHeight()\n    const maxScroll = this._config.offset + scrollHeight - this._getOffsetHeight()\n\n    if (this._scrollHeight !== scrollHeight) {\n      this.refresh()\n    }\n\n    if (scrollTop >= maxScroll) {\n      const target = this._targets[this._targets.length - 1]\n\n      if (this._activeTarget !== target) {\n        this._activate(target)\n      }\n\n      return\n    }\n\n    if (this._activeTarget && scrollTop < this._offsets[0] && this._offsets[0] > 0) {\n      this._activeTarget = null\n      this._clear()\n      return\n    }\n\n    for (let i = this._offsets.length; i--;) {\n      const isActiveTarget = this._activeTarget !== this._targets[i] &&\n          scrollTop >= this._offsets[i] &&\n          (typeof this._offsets[i + 1] === 'undefined' ||\n              scrollTop < this._offsets[i + 1])\n\n      if (isActiveTarget) {\n        this._activate(this._targets[i])\n      }\n    }\n  }\n\n  _activate(target) {\n    this._activeTarget = target\n\n    this._clear()\n\n    const queries = this._selector\n      .split(',')\n      .map(selector => `${selector}[data-target=\"${target}\"],${selector}[href=\"${target}\"]`)\n\n    const $link = $([].slice.call(document.querySelectorAll(queries.join(','))))\n\n    if ($link.hasClass(CLASS_NAME_DROPDOWN_ITEM)) {\n      $link.closest(SELECTOR_DROPDOWN)\n        .find(SELECTOR_DROPDOWN_TOGGLE)\n        .addClass(CLASS_NAME_ACTIVE)\n      $link.addClass(CLASS_NAME_ACTIVE)\n    } else {\n      // Set triggered link as active\n      $link.addClass(CLASS_NAME_ACTIVE)\n      // Set triggered links parents as active\n      // With both <ul> and <nav> markup a parent is the previous sibling of any nav ancestor\n      $link.parents(SELECTOR_NAV_LIST_GROUP)\n        .prev(`${SELECTOR_NAV_LINKS}, ${SELECTOR_LIST_ITEMS}`)\n        .addClass(CLASS_NAME_ACTIVE)\n      // Handle special case when .nav-link is inside .nav-item\n      $link.parents(SELECTOR_NAV_LIST_GROUP)\n        .prev(SELECTOR_NAV_ITEMS)\n        .children(SELECTOR_NAV_LINKS)\n        .addClass(CLASS_NAME_ACTIVE)\n    }\n\n    $(this._scrollElement).trigger(EVENT_ACTIVATE, {\n      relatedTarget: target\n    })\n  }\n\n  _clear() {\n    [].slice.call(document.querySelectorAll(this._selector))\n      .filter(node => node.classList.contains(CLASS_NAME_ACTIVE))\n      .forEach(node => node.classList.remove(CLASS_NAME_ACTIVE))\n  }\n\n  // Static\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      let data = $(this).data(DATA_KEY)\n      const _config = typeof config === 'object' && config\n\n      if (!data) {\n        data = new ScrollSpy(this, _config)\n        $(this).data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'string') {\n        if (typeof data[config] === 'undefined') {\n          throw new TypeError(`No method named \"${config}\"`)\n        }\n\n        data[config]()\n      }\n    })\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * Data Api implementation\n * ------------------------------------------------------------------------\n */\n\n$(window).on(EVENT_LOAD_DATA_API, () => {\n  const scrollSpys = [].slice.call(document.querySelectorAll(SELECTOR_DATA_SPY))\n  const scrollSpysLength = scrollSpys.length\n\n  for (let i = scrollSpysLength; i--;) {\n    const $spy = $(scrollSpys[i])\n    ScrollSpy._jQueryInterface.call($spy, $spy.data())\n  }\n})\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = ScrollSpy._jQueryInterface\n$.fn[NAME].Constructor = ScrollSpy\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return ScrollSpy._jQueryInterface\n}\n\nexport default ScrollSpy\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): tab.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'tab'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.tab'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst DATA_API_KEY = '.data-api'\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\n\nconst EVENT_HIDE = `hide${EVENT_KEY}`\nconst EVENT_HIDDEN = `hidden${EVENT_KEY}`\nconst EVENT_SHOW = `show${EVENT_KEY}`\nconst EVENT_SHOWN = `shown${EVENT_KEY}`\nconst EVENT_CLICK_DATA_API = `click${EVENT_KEY}${DATA_API_KEY}`\n\nconst CLASS_NAME_DROPDOWN_MENU = 'dropdown-menu'\nconst CLASS_NAME_ACTIVE = 'active'\nconst CLASS_NAME_DISABLED = 'disabled'\nconst CLASS_NAME_FADE = 'fade'\nconst CLASS_NAME_SHOW = 'show'\n\nconst SELECTOR_DROPDOWN = '.dropdown'\nconst SELECTOR_NAV_LIST_GROUP = '.nav, .list-group'\nconst SELECTOR_ACTIVE = '.active'\nconst SELECTOR_ACTIVE_UL = '> li > .active'\nconst SELECTOR_DATA_TOGGLE = '[data-toggle=\"tab\"], [data-toggle=\"pill\"], [data-toggle=\"list\"]'\nconst SELECTOR_DROPDOWN_TOGGLE = '.dropdown-toggle'\nconst SELECTOR_DROPDOWN_ACTIVE_CHILD = '> .dropdown-menu .active'\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Tab {\n  constructor(element) {\n    this._element = element\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  // Public\n\n  show() {\n    if (this._element.parentNode &&\n        this._element.parentNode.nodeType === Node.ELEMENT_NODE &&\n        $(this._element).hasClass(CLASS_NAME_ACTIVE) ||\n        $(this._element).hasClass(CLASS_NAME_DISABLED)) {\n      return\n    }\n\n    let target\n    let previous\n    const listElement = $(this._element).closest(SELECTOR_NAV_LIST_GROUP)[0]\n    const selector = Util.getSelectorFromElement(this._element)\n\n    if (listElement) {\n      const itemSelector = listElement.nodeName === 'UL' || listElement.nodeName === 'OL' ? SELECTOR_ACTIVE_UL : SELECTOR_ACTIVE\n      previous = $.makeArray($(listElement).find(itemSelector))\n      previous = previous[previous.length - 1]\n    }\n\n    const hideEvent = $.Event(EVENT_HIDE, {\n      relatedTarget: this._element\n    })\n\n    const showEvent = $.Event(EVENT_SHOW, {\n      relatedTarget: previous\n    })\n\n    if (previous) {\n      $(previous).trigger(hideEvent)\n    }\n\n    $(this._element).trigger(showEvent)\n\n    if (showEvent.isDefaultPrevented() ||\n        hideEvent.isDefaultPrevented()) {\n      return\n    }\n\n    if (selector) {\n      target = document.querySelector(selector)\n    }\n\n    this._activate(\n      this._element,\n      listElement\n    )\n\n    const complete = () => {\n      const hiddenEvent = $.Event(EVENT_HIDDEN, {\n        relatedTarget: this._element\n      })\n\n      const shownEvent = $.Event(EVENT_SHOWN, {\n        relatedTarget: previous\n      })\n\n      $(previous).trigger(hiddenEvent)\n      $(this._element).trigger(shownEvent)\n    }\n\n    if (target) {\n      this._activate(target, target.parentNode, complete)\n    } else {\n      complete()\n    }\n  }\n\n  dispose() {\n    $.removeData(this._element, DATA_KEY)\n    this._element = null\n  }\n\n  // Private\n\n  _activate(element, container, callback) {\n    const activeElements = container && (container.nodeName === 'UL' || container.nodeName === 'OL') ?\n      $(container).find(SELECTOR_ACTIVE_UL) :\n      $(container).children(SELECTOR_ACTIVE)\n\n    const active = activeElements[0]\n    const isTransitioning = callback && (active && $(active).hasClass(CLASS_NAME_FADE))\n    const complete = () => this._transitionComplete(\n      element,\n      active,\n      callback\n    )\n\n    if (active && isTransitioning) {\n      const transitionDuration = Util.getTransitionDurationFromElement(active)\n\n      $(active)\n        .removeClass(CLASS_NAME_SHOW)\n        .one(Util.TRANSITION_END, complete)\n        .emulateTransitionEnd(transitionDuration)\n    } else {\n      complete()\n    }\n  }\n\n  _transitionComplete(element, active, callback) {\n    if (active) {\n      $(active).removeClass(CLASS_NAME_ACTIVE)\n\n      const dropdownChild = $(active.parentNode).find(\n        SELECTOR_DROPDOWN_ACTIVE_CHILD\n      )[0]\n\n      if (dropdownChild) {\n        $(dropdownChild).removeClass(CLASS_NAME_ACTIVE)\n      }\n\n      if (active.getAttribute('role') === 'tab') {\n        active.setAttribute('aria-selected', false)\n      }\n    }\n\n    $(element).addClass(CLASS_NAME_ACTIVE)\n    if (element.getAttribute('role') === 'tab') {\n      element.setAttribute('aria-selected', true)\n    }\n\n    Util.reflow(element)\n\n    if (element.classList.contains(CLASS_NAME_FADE)) {\n      element.classList.add(CLASS_NAME_SHOW)\n    }\n\n    if (element.parentNode && $(element.parentNode).hasClass(CLASS_NAME_DROPDOWN_MENU)) {\n      const dropdownElement = $(element).closest(SELECTOR_DROPDOWN)[0]\n\n      if (dropdownElement) {\n        const dropdownToggleList = [].slice.call(dropdownElement.querySelectorAll(SELECTOR_DROPDOWN_TOGGLE))\n\n        $(dropdownToggleList).addClass(CLASS_NAME_ACTIVE)\n      }\n\n      element.setAttribute('aria-expanded', true)\n    }\n\n    if (callback) {\n      callback()\n    }\n  }\n\n  // Static\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      const $this = $(this)\n      let data = $this.data(DATA_KEY)\n\n      if (!data) {\n        data = new Tab(this)\n        $this.data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'string') {\n        if (typeof data[config] === 'undefined') {\n          throw new TypeError(`No method named \"${config}\"`)\n        }\n\n        data[config]()\n      }\n    })\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * Data Api implementation\n * ------------------------------------------------------------------------\n */\n\n$(document)\n  .on(EVENT_CLICK_DATA_API, SELECTOR_DATA_TOGGLE, function (event) {\n    event.preventDefault()\n    Tab._jQueryInterface.call($(this), 'show')\n  })\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Tab._jQueryInterface\n$.fn[NAME].Constructor = Tab\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Tab._jQueryInterface\n}\n\nexport default Tab\n","/**\n * --------------------------------------------------------------------------\n * Bootstrap (v4.6.0): toast.js\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)\n * --------------------------------------------------------------------------\n */\n\nimport $ from 'jquery'\nimport Util from './util'\n\n/**\n * ------------------------------------------------------------------------\n * Constants\n * ------------------------------------------------------------------------\n */\n\nconst NAME = 'toast'\nconst VERSION = '4.6.0'\nconst DATA_KEY = 'bs.toast'\nconst EVENT_KEY = `.${DATA_KEY}`\nconst JQUERY_NO_CONFLICT = $.fn[NAME]\n\nconst EVENT_CLICK_DISMISS = `click.dismiss${EVENT_KEY}`\nconst EVENT_HIDE = `hide${EVENT_KEY}`\nconst EVENT_HIDDEN = `hidden${EVENT_KEY}`\nconst EVENT_SHOW = `show${EVENT_KEY}`\nconst EVENT_SHOWN = `shown${EVENT_KEY}`\n\nconst CLASS_NAME_FADE = 'fade'\nconst CLASS_NAME_HIDE = 'hide'\nconst CLASS_NAME_SHOW = 'show'\nconst CLASS_NAME_SHOWING = 'showing'\n\nconst DefaultType = {\n  animation: 'boolean',\n  autohide: 'boolean',\n  delay: 'number'\n}\n\nconst Default = {\n  animation: true,\n  autohide: true,\n  delay: 500\n}\n\nconst SELECTOR_DATA_DISMISS = '[data-dismiss=\"toast\"]'\n\n/**\n * ------------------------------------------------------------------------\n * Class Definition\n * ------------------------------------------------------------------------\n */\n\nclass Toast {\n  constructor(element, config) {\n    this._element = element\n    this._config = this._getConfig(config)\n    this._timeout = null\n    this._setListeners()\n  }\n\n  // Getters\n\n  static get VERSION() {\n    return VERSION\n  }\n\n  static get DefaultType() {\n    return DefaultType\n  }\n\n  static get Default() {\n    return Default\n  }\n\n  // Public\n\n  show() {\n    const showEvent = $.Event(EVENT_SHOW)\n\n    $(this._element).trigger(showEvent)\n    if (showEvent.isDefaultPrevented()) {\n      return\n    }\n\n    this._clearTimeout()\n\n    if (this._config.animation) {\n      this._element.classList.add(CLASS_NAME_FADE)\n    }\n\n    const complete = () => {\n      this._element.classList.remove(CLASS_NAME_SHOWING)\n      this._element.classList.add(CLASS_NAME_SHOW)\n\n      $(this._element).trigger(EVENT_SHOWN)\n\n      if (this._config.autohide) {\n        this._timeout = setTimeout(() => {\n          this.hide()\n        }, this._config.delay)\n      }\n    }\n\n    this._element.classList.remove(CLASS_NAME_HIDE)\n    Util.reflow(this._element)\n    this._element.classList.add(CLASS_NAME_SHOWING)\n    if (this._config.animation) {\n      const transitionDuration = Util.getTransitionDurationFromElement(this._element)\n\n      $(this._element)\n        .one(Util.TRANSITION_END, complete)\n        .emulateTransitionEnd(transitionDuration)\n    } else {\n      complete()\n    }\n  }\n\n  hide() {\n    if (!this._element.classList.contains(CLASS_NAME_SHOW)) {\n      return\n    }\n\n    const hideEvent = $.Event(EVENT_HIDE)\n\n    $(this._element).trigger(hideEvent)\n    if (hideEvent.isDefaultPrevented()) {\n      return\n    }\n\n    this._close()\n  }\n\n  dispose() {\n    this._clearTimeout()\n\n    if (this._element.classList.contains(CLASS_NAME_SHOW)) {\n      this._element.classList.remove(CLASS_NAME_SHOW)\n    }\n\n    $(this._element).off(EVENT_CLICK_DISMISS)\n\n    $.removeData(this._element, DATA_KEY)\n    this._element = null\n    this._config = null\n  }\n\n  // Private\n\n  _getConfig(config) {\n    config = {\n      ...Default,\n      ...$(this._element).data(),\n      ...(typeof config === 'object' && config ? config : {})\n    }\n\n    Util.typeCheckConfig(\n      NAME,\n      config,\n      this.constructor.DefaultType\n    )\n\n    return config\n  }\n\n  _setListeners() {\n    $(this._element).on(EVENT_CLICK_DISMISS, SELECTOR_DATA_DISMISS, () => this.hide())\n  }\n\n  _close() {\n    const complete = () => {\n      this._element.classList.add(CLASS_NAME_HIDE)\n      $(this._element).trigger(EVENT_HIDDEN)\n    }\n\n    this._element.classList.remove(CLASS_NAME_SHOW)\n    if (this._config.animation) {\n      const transitionDuration = Util.getTransitionDurationFromElement(this._element)\n\n      $(this._element)\n        .one(Util.TRANSITION_END, complete)\n        .emulateTransitionEnd(transitionDuration)\n    } else {\n      complete()\n    }\n  }\n\n  _clearTimeout() {\n    clearTimeout(this._timeout)\n    this._timeout = null\n  }\n\n  // Static\n\n  static _jQueryInterface(config) {\n    return this.each(function () {\n      const $element = $(this)\n      let data = $element.data(DATA_KEY)\n      const _config = typeof config === 'object' && config\n\n      if (!data) {\n        data = new Toast(this, _config)\n        $element.data(DATA_KEY, data)\n      }\n\n      if (typeof config === 'string') {\n        if (typeof data[config] === 'undefined') {\n          throw new TypeError(`No method named \"${config}\"`)\n        }\n\n        data[config](this)\n      }\n    })\n  }\n}\n\n/**\n * ------------------------------------------------------------------------\n * jQuery\n * ------------------------------------------------------------------------\n */\n\n$.fn[NAME] = Toast._jQueryInterface\n$.fn[NAME].Constructor = Toast\n$.fn[NAME].noConflict = () => {\n  $.fn[NAME] = JQUERY_NO_CONFLICT\n  return Toast._jQueryInterface\n}\n\nexport default Toast\n"],"names":["TRANSITION_END","MAX_UID","MILLISECONDS_MULTIPLIER","toType","obj","toString","call","match","toLowerCase","getSpecialTransitionEndEvent","bindType","delegateType","handle","event","$","target","is","handleObj","handler","apply","arguments","undefined","transitionEndEmulator","duration","called","one","Util","setTimeout","triggerTransitionEnd","setTransitionEndSupport","fn","emulateTransitionEnd","special","getUID","prefix","Math","random","document","getElementById","getSelectorFromElement","element","selector","getAttribute","hrefAttr","trim","querySelector","_","getTransitionDurationFromElement","transitionDuration","css","transitionDelay","floatTransitionDuration","parseFloat","floatTransitionDelay","split","reflow","offsetHeight","trigger","supportsTransitionEnd","Boolean","isElement","nodeType","typeCheckConfig","componentName","config","configTypes","property","Object","prototype","hasOwnProperty","expectedTypes","value","valueType","RegExp","test","Error","toUpperCase","findShadowRoot","documentElement","attachShadow","getRootNode","root","ShadowRoot","parentNode","jQueryDetection","TypeError","version","jquery","minMajor","ltMajor","minMinor","minPatch","maxMajor","NAME","VERSION","DATA_KEY","EVENT_KEY","DATA_API_KEY","JQUERY_NO_CONFLICT","SELECTOR_DISMISS","EVENT_CLOSE","EVENT_CLOSED","EVENT_CLICK_DATA_API","CLASS_NAME_ALERT","CLASS_NAME_FADE","CLASS_NAME_SHOW","Alert","_element","close","rootElement","_getRootElement","customEvent","_triggerCloseEvent","isDefaultPrevented","_removeElement","dispose","removeData","parent","closest","closeEvent","Event","removeClass","hasClass","_destroyElement","detach","remove","_jQueryInterface","each","$element","data","_handleDismiss","alertInstance","preventDefault","on","Constructor","noConflict","CLASS_NAME_ACTIVE","CLASS_NAME_BUTTON","CLASS_NAME_FOCUS","SELECTOR_DATA_TOGGLE_CARROT","SELECTOR_DATA_TOGGLES","SELECTOR_DATA_TOGGLE","SELECTOR_DATA_TOGGLES_BUTTONS","SELECTOR_INPUT","SELECTOR_ACTIVE","SELECTOR_BUTTON","EVENT_FOCUS_BLUR_DATA_API","EVENT_LOAD_DATA_API","Button","shouldAvoidTriggerChange","toggle","triggerChangeEvent","addAriaPressed","input","type","checked","classList","contains","activeElement","focus","hasAttribute","setAttribute","toggleClass","avoidTriggerChange","button","initialButton","inputBtn","tagName","window","buttons","slice","querySelectorAll","i","len","length","add","ARROW_LEFT_KEYCODE","ARROW_RIGHT_KEYCODE","TOUCHEVENT_COMPAT_WAIT","SWIPE_THRESHOLD","Default","interval","keyboard","slide","pause","wrap","touch","DefaultType","DIRECTION_NEXT","DIRECTION_PREV","DIRECTION_LEFT","DIRECTION_RIGHT","EVENT_SLIDE","EVENT_SLID","EVENT_KEYDOWN","EVENT_MOUSEENTER","EVENT_MOUSELEAVE","EVENT_TOUCHSTART","EVENT_TOUCHMOVE","EVENT_TOUCHEND","EVENT_POINTERDOWN","EVENT_POINTERUP","EVENT_DRAG_START","CLASS_NAME_CAROUSEL","CLASS_NAME_SLIDE","CLASS_NAME_RIGHT","CLASS_NAME_LEFT","CLASS_NAME_NEXT","CLASS_NAME_PREV","CLASS_NAME_POINTER_EVENT","SELECTOR_ACTIVE_ITEM","SELECTOR_ITEM","SELECTOR_ITEM_IMG","SELECTOR_NEXT_PREV","SELECTOR_INDICATORS","SELECTOR_DATA_SLIDE","SELECTOR_DATA_RIDE","PointerType","TOUCH","PEN","Carousel","_items","_interval","_activeElement","_isPaused","_isSliding","touchTimeout","touchStartX","touchDeltaX","_config","_getConfig","_indicatorsElement","_touchSupported","navigator","maxTouchPoints","_pointerEvent","PointerEvent","MSPointerEvent","_addEventListeners","next","_slide","nextWhenVisible","hidden","prev","cycle","clearInterval","_updateInterval","setInterval","visibilityState","bind","to","index","activeIndex","_getItemIndex","direction","off","_handleSwipe","absDeltax","abs","_keydown","_addTouchEventListeners","start","originalEvent","pointerType","clientX","touches","move","end","clearTimeout","e","which","indexOf","_getItemByDirection","isNextDirection","isPrevDirection","lastItemIndex","isGoingToWrap","delta","itemIndex","_triggerSlideEvent","relatedTarget","eventDirectionName","targetIndex","fromIndex","slideEvent","from","_setActiveIndicatorElement","indicators","nextIndicator","children","addClass","elementInterval","parseInt","defaultInterval","activeElementIndex","nextElement","nextElementIndex","isCycling","directionalClassName","orderClassName","slidEvent","action","ride","_dataApiClickHandler","slideIndex","carousels","$carousel","EVENT_SHOW","EVENT_SHOWN","EVENT_HIDE","EVENT_HIDDEN","CLASS_NAME_COLLAPSE","CLASS_NAME_COLLAPSING","CLASS_NAME_COLLAPSED","DIMENSION_WIDTH","DIMENSION_HEIGHT","SELECTOR_ACTIVES","Collapse","_isTransitioning","_triggerArray","id","toggleList","elem","filterElement","filter","foundElem","_selector","push","_parent","_getParent","_addAriaAndCollapsedClass","hide","show","actives","activesData","not","startEvent","dimension","_getDimension","style","attr","setTransitioning","complete","capitalizedDimension","scrollSize","getBoundingClientRect","triggerArrayLength","$elem","isTransitioning","hasWidth","_getTargetFromElement","triggerArray","isOpen","currentTarget","$trigger","selectors","$target","_extends","ESCAPE_KEYCODE","SPACE_KEYCODE","TAB_KEYCODE","ARROW_UP_KEYCODE","ARROW_DOWN_KEYCODE","RIGHT_MOUSE_BUTTON_WHICH","REGEXP_KEYDOWN","EVENT_CLICK","EVENT_KEYDOWN_DATA_API","EVENT_KEYUP_DATA_API","CLASS_NAME_DISABLED","CLASS_NAME_DROPUP","CLASS_NAME_DROPRIGHT","CLASS_NAME_DROPLEFT","CLASS_NAME_MENURIGHT","CLASS_NAME_POSITION_STATIC","SELECTOR_FORM_CHILD","SELECTOR_MENU","SELECTOR_NAVBAR_NAV","SELECTOR_VISIBLE_ITEMS","PLACEMENT_TOP","PLACEMENT_TOPEND","PLACEMENT_BOTTOM","PLACEMENT_BOTTOMEND","PLACEMENT_RIGHT","PLACEMENT_LEFT","offset","flip","boundary","reference","display","popperConfig","Dropdown","_popper","_menu","_getMenuElement","_inNavbar","_detectNavbar","disabled","isActive","_clearMenus","usePopper","showEvent","_getParentFromElement","Popper","referenceElement","_getPopperConfig","body","noop","hideEvent","destroy","update","scheduleUpdate","stopPropagation","constructor","_getPlacement","$parentDropdown","placement","_getOffset","offsets","modifiers","enabled","preventOverflow","boundariesElement","applyStyle","toggles","context","clickEvent","dropdownMenu","_dataApiKeydownHandler","items","item","backdrop","EVENT_HIDE_PREVENTED","EVENT_FOCUSIN","EVENT_RESIZE","EVENT_CLICK_DISMISS","EVENT_KEYDOWN_DISMISS","EVENT_MOUSEUP_DISMISS","EVENT_MOUSEDOWN_DISMISS","CLASS_NAME_SCROLLABLE","CLASS_NAME_SCROLLBAR_MEASURER","CLASS_NAME_BACKDROP","CLASS_NAME_OPEN","CLASS_NAME_STATIC","SELECTOR_DIALOG","SELECTOR_MODAL_BODY","SELECTOR_DATA_DISMISS","SELECTOR_FIXED_CONTENT","SELECTOR_STICKY_CONTENT","Modal","_dialog","_backdrop","_isShown","_isBodyOverflowing","_ignoreBackdropClick","_scrollbarWidth","_checkScrollbar","_setScrollbar","_adjustDialog","_setEscapeEvent","_setResizeEvent","_showBackdrop","_showElement","transition","_hideModal","forEach","htmlElement","handleUpdate","_triggerBackdropTransition","hideEventPrevented","isModalOverflowing","scrollHeight","clientHeight","overflowY","modalTransitionDuration","modalBody","Node","ELEMENT_NODE","appendChild","removeAttribute","scrollTop","_enforceFocus","shownEvent","transitionComplete","has","_resetAdjustments","_resetScrollbar","_removeBackdrop","callback","animate","createElement","className","appendTo","backdropTransitionDuration","callbackRemove","paddingLeft","paddingRight","rect","round","left","right","innerWidth","_getScrollbarWidth","fixedContent","stickyContent","actualPadding","calculatedPadding","actualMargin","marginRight","calculatedMargin","padding","elements","margin","scrollDiv","scrollbarWidth","width","clientWidth","removeChild","uriAttrs","ARIA_ATTRIBUTE_PATTERN","DefaultWhitelist","a","area","b","br","col","code","div","em","hr","h1","h2","h3","h4","h5","h6","img","li","ol","p","pre","s","small","span","sub","sup","strong","u","ul","SAFE_URL_PATTERN","DATA_URL_PATTERN","allowedAttribute","allowedAttributeList","attrName","nodeName","nodeValue","regExp","attrRegex","sanitizeHtml","unsafeHtml","whiteList","sanitizeFn","domParser","DOMParser","createdDocument","parseFromString","whitelistKeys","keys","el","elName","attributeList","attributes","whitelistedAttributes","concat","innerHTML","CLASS_PREFIX","BSCLS_PREFIX_REGEX","DISALLOWED_ATTRIBUTES","animation","template","title","delay","html","container","fallbackPlacement","customClass","sanitize","AttachmentMap","AUTO","TOP","RIGHT","BOTTOM","LEFT","HOVER_STATE_SHOW","HOVER_STATE_OUT","HIDE","HIDDEN","SHOW","SHOWN","INSERTED","CLICK","FOCUSIN","FOCUSOUT","MOUSEENTER","MOUSELEAVE","SELECTOR_TOOLTIP_INNER","SELECTOR_ARROW","TRIGGER_HOVER","TRIGGER_FOCUS","TRIGGER_CLICK","TRIGGER_MANUAL","Tooltip","_isEnabled","_timeout","_hoverState","_activeTrigger","tip","_setListeners","enable","disable","toggleEnabled","dataKey","_getDelegateConfig","click","_isWithActiveTrigger","_enter","_leave","getTipElement","_hideModalHandler","isWithContent","shadowRoot","isInTheDom","ownerDocument","tipId","setContent","attachment","_getAttachment","addAttachmentClass","_getContainer","_fixTransition","prevHoverState","_cleanTipClass","getTitle","setElementContent","content","empty","append","text","defaultBsConfig","behavior","arrow","onCreate","originalPlacement","_handlePopperPlacementChange","onUpdate","find","triggers","eventIn","eventOut","_fixTitle","titleType","dataAttributes","dataAttr","key","$tip","tabClass","join","popperData","instance","popper","initConfigAnimation","SELECTOR_TITLE","SELECTOR_CONTENT","Popover","_getContent","method","EVENT_ACTIVATE","EVENT_SCROLL","CLASS_NAME_DROPDOWN_ITEM","SELECTOR_DATA_SPY","SELECTOR_NAV_LIST_GROUP","SELECTOR_NAV_LINKS","SELECTOR_NAV_ITEMS","SELECTOR_LIST_ITEMS","SELECTOR_DROPDOWN","SELECTOR_DROPDOWN_ITEMS","SELECTOR_DROPDOWN_TOGGLE","METHOD_OFFSET","METHOD_POSITION","ScrollSpy","_scrollElement","_offsets","_targets","_activeTarget","_scrollHeight","_process","refresh","autoMethod","offsetMethod","offsetBase","_getScrollTop","_getScrollHeight","targets","map","targetSelector","targetBCR","height","top","sort","pageYOffset","max","_getOffsetHeight","innerHeight","maxScroll","_activate","_clear","isActiveTarget","queries","$link","parents","node","scrollSpys","scrollSpysLength","$spy","CLASS_NAME_DROPDOWN_MENU","SELECTOR_ACTIVE_UL","SELECTOR_DROPDOWN_ACTIVE_CHILD","Tab","previous","listElement","itemSelector","makeArray","hiddenEvent","activeElements","active","_transitionComplete","dropdownChild","dropdownElement","dropdownToggleList","$this","CLASS_NAME_HIDE","CLASS_NAME_SHOWING","autohide","Toast","_clearTimeout","_close"],"mappings":"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;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,EAAE,eAAe,EAAE;EACnB;EACA,IAAI,KAAK,EAAE,GAAG;EACd;EACA,IAAI,OAAO,EAAE,IAAI;EACjB;EACA,IAAI,EAAE,EAAE,eAAe;EACvB;EACA;EACA;EACA;EACA;EACA,IAAI,QAAQ,EAAE,CAAC,MAAM,EAAE,OAAO,EAAE,KAAK,EAAE,QAAQ,CAAC;EAChD;EACA;EACA;EACA;EACA;EACA;EACA,IAAI,OAAO,EAAE,CAAC;EACd;EACA;EACA;EACA;EACA;EACA,IAAI,iBAAiB,EAAE,cAAc;EACrC,GAAG;AACH;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,EAAE,YAAY,EAAE;EAChB;EACA,IAAI,KAAK,EAAE,GAAG;EACd;EACA,IAAI,OAAO,EAAE,IAAI;EACjB;EACA,IAAI,EAAE,EAAE,YAAY;EACpB,GAAG;AACH;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,EAAE,KAAK,EAAE;EACT;EACA,IAAI,KAAK,EAAE,GAAG;EACd;EACA,IAAI,OAAO,EAAE,IAAI;EACjB;EACA,IAAI,EAAE,EAAE,KAAK;EACb;EACA,IAAI,OAAO,EAAE,WAAW;EACxB,GAAG;AACH;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,EAAE,IAAI,EAAE;EACR;EACA,IAAI,KAAK,EAAE,GAAG;EACd;EACA,IAAI,OAAO,EAAE,IAAI;EACjB;EACA,IAAI,EAAE,EAAE,IAAI;EACZ;EACA;EACA;EACA;EACA;EACA;EACA,IAAI,QAAQ,EAAE,MAAM;EACpB;EACA;EACA;EACA;EACA,IAAI,OAAO,EAAE,CAAC;EACd;EACA;EACA;EACA;EACA;EACA;EACA,IAAI,iBAAiB,EAAE,UAAU;EACjC;EACA;EACA;EACA;EACA;EACA;EACA;EACA,IAAI,cAAc,EAAE,KAAK;EACzB;EACA;EACA;EACA;EACA;EACA;EACA;EACA,IAAI,uBAAuB,EAAE,KAAK;EAClC,GAAG;AACH;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,EAAE,KAAK,EAAE;EACT;EACA,IAAI,KAAK,EAAE,GAAG;EACd;EACA,IAAI,OAAO,EAAE,KAAK;EAClB;EACA,IAAI,EAAE,EAAE,KAAK;EACb,GAAG;AACH;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,EAAE,IAAI,EAAE;EACR;EACA,IAAI,KAAK,EAAE,GAAG;EACd;EACA,IAAI,OAAO,EAAE,IAAI;EACjB;EACA,IAAI,EAAE,EAAE,IAAI;EACZ,GAAG;AACH;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,EAAE,YAAY,EAAE;EAChB;EACA,IAAI,KAAK,EAAE,GAAG;EACd;EACA,IAAI,OAAO,EAAE,IAAI;EACjB;EACA,IAAI,EAAE,EAAE,YAAY;EACpB;EACA;EACA;EACA;EACA;EACA,IAAI,eAAe,EAAE,IAAI;EACzB;EACA;EACA;EACA;EACA;EACA,IAAI,CAAC,EAAE,QAAQ;EACf;EACA;EACA;EACA;EACA;EACA,IAAI,CAAC,EAAE,OAAO;EACd,GAAG;AACH;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA,EAAE,UAAU,EAAE;EACd;EACA,IAAI,KAAK,EAAE,GAAG;EACd;EACA,IAAI,OAAO,EAAE,IAAI;EACjB;EACA,IAAI,EAAE,EAAE,UAAU;EAClB;EACA,IAAI,MAAM,EAAE,gBAAgB;EAC5B;EACA;EACA;EACA;EACA;EACA;EACA,IAAI,eAAe,EAAE,SAAS;EAC9B,GAAG;EACH,CAAC,CAAC;AACF;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;AACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;EACA;E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"}";s:6:"digest";s:32:"2d6c6bf475892e48c2debe0ef7b08c50";s:13:"isPredigested";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:43:"vendor/bootstrap/js/bootstrap.bundle.js.map";}s:6:"isLazy";b:0;s:19:"isContentDependency";b:1;}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:11:"logicalPath";s:39:"vendor/bootstrap/js/bootstrap.bundle.js";}