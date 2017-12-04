$('#check').click(function() {
    var val = $('#address').val();
    var url = "https://blockchain.info/multiaddr?cors=true&active=" + val;
   
     $.ajax({
      type: "GET",
      url: "https://blockchain.info/multiaddr?cors=true&active=" + val ,
      beforeSend: function(msg){
     
        $(".contain").show();
      },
       complete: function(){
        $(".contain").hide();
           $('.sb').css({"float":"left", "width":"100%", "overflow-y": "auto","height": "190px"});
    },
      success: function(data){
       var recieved = data.wallet.total_received;
        var sent = data.wallet.total_sent;
        var balance = data.wallet.final_balance;
        var transactions = data.wallet.n_tx;
        $('#recieved').text(divide(recieved));
        $('#sent').text(divide(sent));
        $('#balance').text(divide(balance));
        $('#transactions').text(transactions);
        $('.tll').show();
      
        for (var i = 0; i < data.txs.length; i++) {
            $('.tab').append('<tr><td>' + myFormat(data.txs[i].time) + '</td><td>' + divide(data.txs[i].result) + '</td><td>' + divide(data.txs[i].balance) + '</td></tr>')
        }
        $('.tab').show();
      }
    });
   
});
/*.sb {
    float: left;
    width: 100%;
    overflow-y: auto;
    height: 190px;
}*/


function divide(number) {
    return (number / 100000000).toFixed(8);
}

function myFormat(date) {
    var date2 = new Date(date * 1000);
    return checkSingle(date2.getDate()) + '-' + checkSingle(date2.getMonth()) + '-' + date2.getFullYear() + ' ' + checkSingle(date2.getHours()) + ':' + checkSingle(date2.getMinutes()) + ':' + checkSingle(date2.getSeconds());
}

function checkSingle(number) {
    return number < 10 ? '0' + number : number;
}

$(document).ready(function(){
    var limitWord = 12;
   var maxchars = 0;
 $("#max").keyup(function() {
   $this = $(this);
   var wordcount = $this.val().split(/\b[\s,\.-:;]*/).length - 1;
   if (wordcount < limitWord) {
      chars = $this.val().length;
    }
   else{
    var text = $(this).val();
    var new_text = text.substr(0,chars);
    $(this).val(new_text);
     $(".err").empty();
    $(".err").append("Enter twelve words key")
   }
});
})