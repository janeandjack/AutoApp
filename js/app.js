(() => {

$(document).foundation()

function getData(){
    fetch('./includes/config.php')
    .then(res => res.json())
    .then(data => {
        console.log(data);
        loadDoc(data);
    })
    .catch(function(error){
        console.log(error);
    });
}
$(function() {
    $(window).scroll(function() {
      var winTop = $(window).scrollTop();
      if (winTop >= 30) {
        $("body").addClass("sticky-shrinknav-wrapper");
      } else{
        $("body").removeClass("sticky-shrinknav-wrapper");
      }
    });
  });

})();