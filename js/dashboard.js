$(document).ready(function(){
  
    $('.removebtn').on('click', function(){
      var id1 = $(this).attr('id');
      var url = "remove.php?id=" + id1;
      window.location.href = url;
    });
  
  });