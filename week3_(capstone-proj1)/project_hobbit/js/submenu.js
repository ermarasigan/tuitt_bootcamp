// Multi-level dropdown from www.w3schools.com
$(document).ready(function(){
  $('.dropdown-submenu a.dropregion').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});

// Close submenu when clicking other submenu
// stackoverflow.com/questions/19198835
// $(document).ready(function () {
//     var $links = $('.dropdown-submenu a.dropregion').click(function () {
//         var submenu = $(this).next();
//         $subs.not(submenu).hide()
//         submenu.toggle();
//     });
//     var $subs = $links.next();
// });