$('#check').click(function() {
    var val = $('#address').val();
    var url = "https://blockchain.info/multiaddr?cors=true&active=" + val;
    $.get(url, function(data, status) {
        var recieved = data.wallet.total_received;
        var sent = data.wallet.total_sent;
        var balance = data.wallet.final_balance;
        var transactions = data.wallet.n_tx;
        $('#recieved').text(divide(recieved));
        $('#sent').text(divide(sent));
        $('#balance').text(divide(balance));
        $('#transactions').text(transactions);
        $('.tl').show();
        /*  $('.tab').css("height", "190px");*/
        for (var i = 0; i < data.txs.length; i++) {
            $('.tab').append('<tr><td>' + myFormat(data.txs[i].time) + '</td><td>' + divide(data.txs[i].result) + '</td><td>' + divide(data.txs[i].balance) + '</td></tr>')
        }
        $('.tab').show();

    });
});



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