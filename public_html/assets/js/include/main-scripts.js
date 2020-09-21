// $(document).ready(function() {  
//     $('#cookieModal').modal('show');
//     $("#closeButton").click(function(){
//       $("#cookieModal").hide();
//     });
//   });


$(document).ready(function () {



  var cooky = sessionStorage.getItem('cookieAlertOnce');
  if (!cooky) {
    setTimeout(function () {
      $("#cookieConsent").fadeIn(200);
    }, 4000);

  }
  var pathname = window.location.pathname;
  var langStyleElements = document.getElementsByClassName("lang-style");
  for (var i = 0; i < langStyleElements.length; i++) {
    var lsElem = langStyleElements[i];
    var innerLsElem = $(lsElem).attr('href');
    if (pathname.includes(innerLsElem.toLowerCase())) {
      $(lsElem).addClass('lang_style_focused');
    } else {
      $(lsElem).removeClass('lang_style_focused');
    }
  };

  $("#closeCookieConsent, .cookieConsentOK").click(function () {
    $("#cookieConsent").fadeOut(200);
    sessionStorage.setItem('cookieAlertOnce', 'true');
  });
});