let id;
$('.js-modal-target').click(function(){
    id=$(this).attr('id');
    console.log(id);
    $('.modal').addClass('is-active');
}),
$('.modal-background').click(function(){
   
    $('.modal').removeClass('is-active');
}),
$('.yes').click(function(){
    id="#form"+String(id);
    console.log(id);
 $(id).submit();
}),
$('.no').click(function(){
    $('.modal').removeClass('is-active');
}),
$('#logout').click(function(event){
    console.log('hogehoge');
    event.preventDefault();
    $("#logout-form").submit();
})
