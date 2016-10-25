jQuery(document).ready(function() {
console.log("Ready TRANS");
// Aggiungere tweenLite
  var FadeTransition = Barba.BaseTransition.extend({
    start: function() {
        console.log("Start Trans");
      /**
       * This function is automatically called as soon the Transition starts
       * this.newContainerLoading is a Promise for the loading of the new container
       * (Barba.js also comes with an handy Promise polyfill!)
       */

      // As soon the loading is finished and the old page is faded out, let's fade the new page
      Promise
        .all([this.newContainerLoading, this.fadeOut()])
        .then(this.fadeIn.bind(this));
    },

    fadeOut: function() {
      /**
       * this.oldContainer is the HTMLElement of the old Container
       */
        console.log("fadeout");
       var deferred = Barba.Utils.deferred();
       ricaLoader.show(deferred.resolve,500);
       return deferred.promise;
      //  jQuery(".is-off-canvas-open").toggleClass('is-off-canvas-open is-open-left');;
      // return jQuery(this.oldContainer).velocity("slideUp", { duration: 1500 }).promise();
    },

    fadeIn: function() {
      /**
       * this.newContainer is the HTMLElement of the new Container
       * At this stage newContainer is on the DOM (inside our #barba-container and with visibility: hidden)
       * Please note, newContainer is available just after newContainerLoading is resolved!
       */

       console.log("fadeIn");
      var _this = this;
      jQuery(this.oldContainer).hide();
      jQuery(this.newContainer).css('visibility','visible');
      ricaLoader.hide(function () {
        console.log("endTrans");
        _this.done();
      }, 500);

      // $el.velocity("slideDown", {visibility : 'visible', duration: 1500, complete: function(elements) {
      //   console.log("endTrans");
      //   _this.done();
      //   }});
    }
  });
  var Homepage = Barba.BaseView.extend({
    namespace: 'page',
    onEnter: function() {
        console.log("onEnter");
        // The new Container is ready and attached to the DOM.
    },
    onEnterCompleted: function() {
        // The Transition has just finished.
        console.log("onEnterCompleted");
        jQuery(document).foundation();

    },
    onLeave: function() {
        console.log("onLeave");
        // A new Transition toward a new page has just started.
    },
    onLeaveCompleted: function() {
        console.log("onLeaveCompleted");
        // The Container has just been removed from the DOM.
    }
  });

  // Don't forget to init the view!
  Homepage.init();



  /**
   * Next step, you have to tell Barba to use the new Transition
   */

  Barba.Pjax.getTransition = function() {
    /**
     * Here you can use your own logic!
     * For example you can use different Transition based on the current page or link...
     */

    return FadeTransition;
  };
  Barba.Dispatcher.on("linkClicked", function() {
    console.log("linkClicked", arguments)
  });
  Barba.Dispatcher.on("initStateChange", function() {
    console.log("initStateChange", arguments)
  });
  Barba.Dispatcher.on("newPageReady", function() {
    console.log("newPageReady", arguments);
  });
  Barba.Dispatcher.on("transitionCompleted", function() {
    console.log("transitionCompleted", arguments);
    //Questo metodo viene sempre eseguito anche al caricamento della prima pagina
    //SE il barba container è hidden sono nella prima pagina!!
    var localAnim = function () {
            // jQuery("#more").velocity({
            //     translateX: "200px",
            //     rotateZ: "360deg"
            // },{complete: function (){ console.log("animazione velocity finita")}}).velocity("reverse", {delay:500 });
            // jQuery("#less").velocity({
            //     translateX: "-200px",
            //     rotateZ: "-360deg"
            // }).velocity("reverse", {delay:500 });
        }
    if (jQuery(".barba-container").css('visibility') == 'hidden') {

        f_d.promise.then(function () {
            jQuery(".barba-container").css('visibility', 'visible');
            ricaLoader.hide(localAnim, 500);
        })
    }else {
        localAnim();
   }
  // jQuery("#barba-container").velocity("slideUp",   {delay: 900, duration: 1000});
  });
  Barba.Pjax.originalPreventCheck = Barba.Pjax.preventCheck;

Barba.Pjax.preventCheck = function(evt, element) {
  if (!Barba.Pjax.originalPreventCheck(evt, element)) {
    return false;
  }

  // No need to check for element.href -
  // originalPreventCheck does this for us! (and more!)
  if (/wp-admin/.test(element.href.toLowerCase())) {
    return false;
  }

  return true;
};

  //Please note, the DOM should be ready
  Barba.Pjax.start();
  Barba.Prefetch.init();

});
