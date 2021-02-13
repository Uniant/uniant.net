
function imageGuard(selector){

      var guard_selector = document.querySelectorAll(selector);
    
      for(var n = 0; n < guard_selector.length; n++){
        guard_selector[n].addEventListener("contextmenu", function(e){
          e.preventDefault();
        }, false);
      }
    
      var guard_style = {
        '-webkit-touch-callout':'none',
        '-moz-touch-callout':'none',
        'touch-callout':'none',
        '-webkit-user-select':'none',
        '-moz-user-select':'none',
        'user-select':'none',
        'onselectstart':'return false',
        'onmousedown':'return false' ,
        'oncontextmenu':'return false'
            }
    
      Object.keys(guard_style).forEach(function(v, i, a){
        for(var n = 0; n < guard_selector.length; n++){
          guard_selector[n].style[v] = guard_style[v];
        }
      });
    
    }
    
    document.addEventListener("DOMContentLoaded", function() {
      imageGuard('#profile img,#name img,#c1 img,#wall img,.video-line-up,.item-img,nav img');
    });

    