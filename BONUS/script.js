
function takeinput(){
  $("#btn").click(function(){
    var val = $("#inp").val();
    console.log(val);
    getMyServer(val);
  })
}

function getMyServer(input){

  $.ajax({
    url : "http://127.0.0.1/es/php-badwords/BONUS/index.php",
    method : "GET",
    data : {"word" : input},

    success: function(data) {
      var censured = data;
      write2doc(data);


    },
    error:function (error) {
      console.log('error from API');
    }
  }) // ajax
}


function write2doc(data){
  var target = $(".txt");
  target.text(data);
}

takeinput();
