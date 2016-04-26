/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var VRIN = {};
var Utils = Utils || {};
var Messages = Messages || {};

VRIN.dom = {};
VRIN.globals = {};
VRIN.globals.jqXHR = null;
VRIN.globals.kkeys = [],
VRIN.globals.konami = "38,38,40,40,37,39,37,39,66,65";
Messages.alert = {};

VRIN.Cache = function() {
  VRIN.dom.$spin = $('img').add('ul>li'),
  VRIN.dom.doc = $(document),
  VRIN.dom.win = $(window);
};

VRIN.BindEvents = function(){
  VRIN.dom.doc.on('keydown',function(e) {
    VRIN.globals.kkeys.push( e.keyCode );
    if ( VRIN.globals.kkeys.toString().indexOf( VRIN.globals.konami ) >= 0 ){
      VRIN.dom.doc.unbind('keydown',arguments.callee);
      VRIN.dom.$spin.addClass('icon-spin');
      window.setTimeout(function(){
        VRIN.dom.$spin.removeClass('icon-spin');
      },10*1000);
      VRIN.globals.kkeys = [];
    } 
  });
};

VRIN.Init = function() {
  VRIN.Cache();
  VRIN.BindEvents();
};

$(function(){
  VRIN.Init();
});