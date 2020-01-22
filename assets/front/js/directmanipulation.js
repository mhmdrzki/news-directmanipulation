/*! jQuery Direct Manipulation 10/23/2019*/

// jQuery FontSize
  
  textResizer = $(function (){
      
  // Set Cookie
  var docCookies = {
    getItem: function (sKey) {
      if (!sKey) { return null; }
      return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
    },
    setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
      if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
      var sExpires = "";
      if (vEnd) {
        switch (vEnd.constructor) {
          case Number:
            sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
            break;
          case String:
            sExpires = "; expires=" + vEnd;
            break;
          case Date:
            sExpires = "; expires=" + vEnd.toUTCString();
            break;
        }
      }
      document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
      return true;
    },
    removeItem: function (sKey, sPath, sDomain) {
      if (!this.hasItem(sKey)) { return false; }
      document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
      return true;
    },
    hasItem: function (sKey) {
      if (!sKey) { return false; }
      return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
    },
    keys: function () {
      var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
      for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
      return aKeys;
    }
  };

  function changeSize(element, size) {
      var current = parseInt(docCookies.getItem("FontSize"));
      var newSize;
      if (current !== "") {
          current = parseInt(element.css('font-size'));
      }
      if (size === 'decrease') {
          if (current > 8) {
              newSize = current - 2;
          }
      } else if (size === 'increase') {
          if (current < 72) {
              newSize = current + 2;
          }
      }
      
      element.css('font-size', newSize + 'px');
      docCookies.setItem("FontSize", newSize, Infinity);
  }

  $('#decreaseFont').click(function (e) {
    
    changeSize(text, 'decrease');
    e.preventDefault();
  });

  $('#increaseFont').click(function (e) {
     changeSize(text, 'increase');
     e.preventDefault();
  });

  var text = $("p"),
     fontSize = docCookies.getItem("FontSize");
  if (fontSize) {
      text.css('font-size', fontSize + 'px');
  }
});
     
// jQuery Navigasi ToTop
jQuery(document).ready(function($) {
  $(".scroll").click(function(event){   
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
  });
});


// jQuery Change Theme    
  jQuery(function ($) {
      var color = $.cookie('color');
      $('.colchange li').on('click', function (e) {
          color = $(this).attr('class')
          $("html").attr("class", color)
          $.cookie('color', color, {
              expires: 365,
              path: '/'
          });
          return false;
      }).filter(function () {
          return $(this).attr('class') === color
      }).click()
  });
    
// jQuery Drag and Drop    
  jQuery(function($) {
      $.cookie.json = true;
      var list = $.cookie('list')
      var children = $("#sortable").children().each(function(i) {
          $(this).data('number', i) // number the children
      })
      if (list && list.length) { // cookie order
          $.each(list, function(v, i) {
              $("#sortable").append(children.eq(i))
          })
      }
      $("#sortable").sortable({
          update: function(e, ui) {
              var list = $(this).children().map(function() {
                  return $(this).data('number')
              }).get()
              $.cookie('list', list) // save new order
          }
      }).disableSelection()

      var list2 = $.cookie('list2')

      var children = $("#sortable2").children().each(function(i) {
          $(this).data('number', i) // number the children
      })
      if (list2 && list2.length) { // cookie order
          $.each(list2, function(v, i) {
              $("#sortable2").append(children.eq(i))
          })
      }
      $("#sortable2").sortable({
          update: function(e, ui) {
              var list2 = $(this).children().map(function() {
                  return $(this).data('number')
              }).get()
              $.cookie('list2', list2) // save new order
          }
      }).disableSelection()

      var list3 = $.cookie('list3')

      var children = $("#sortable3").children().each(function(i) {
          $(this).data('number', i) // number the children
      })
      if (list3 && list3.length) { // cookie order
          $.each(list3, function(v, i) {
              $("#sortable3").append(children.eq(i))
          })
      }
      $("#sortable3").sortable({
          update: function(e, ui) {
              var list3 = $(this).children().map(function() {
                  return $(this).data('number')
              }).get()
              $.cookie('list3', list3) // save new order
          }
      }).disableSelection() 

      var list4 = $.cookie('list4')

      var children = $("#sortable4").children().each(function(i) {
          $(this).data('number', i) // number the children
      })
      if (list4 && list4.length) { // cookie order
          $.each(list4, function(v, i) {
              $("#sortable4").append(children.eq(i))
          })
      }
      $("#sortable4").sortable({
          update: function(e, ui) {
              var list4 = $(this).children().map(function() {
                  return $(this).data('number')
              }).get()
              $.cookie('list4', list4) // save new order
          }
      }).disableSelection() 

      var list5 = $.cookie('list5')

      var children = $("#sortable5").children().each(function(i) {
          $(this).data('number', i) // number the children
      })
      if (list5 && list5.length) { // cookie order
          $.each(list5, function(v, i) {
              $("#sortable5").append(children.eq(i))
          })
      }
      $("#sortable5").sortable({
          update: function(e, ui) {
              var list5 = $(this).children().map(function() {
                  return $(this).data('number')
              }).get()
              $.cookie('list5', list5) // save new order
          }
      }).disableSelection()

      var list7 = $.cookie('list7')

      var children = $("#sortable7").children().each(function(i) {
          $(this).data('number', i) // number the children
      })
      if (list7 && list7.length) { // cookie order
          $.each(list7, function(v, i) {
              $("#sortable7").append(children.eq(i))
          })
      }
      $("#sortable7").sortable({
          update: function(e, ui) {
              var list7 = $(this).children().map(function() {
                  return $(this).data('number')
              }).get()
              $.cookie('list7', list7) // save new order
          }
      }).disableSelection()              
  });

    