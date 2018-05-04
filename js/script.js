

$.getJSON('../get_data.php', function(data){
    $.each(data, function(key, val){
        $('.contents').append("<div>" + (++key) + ") Сумма: " +val.summ+ "<br>Метод оплаты: " + val.pay_method +"</div>");
    });
}).always(function(){
    $('.contents').pagination({
        items: 10,
        previous: 'Previous',
        next: 'Next',
        position: 'bottom'
    });
});