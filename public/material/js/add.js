$(function () {


    // configuration

    // button
    var add = $('#add');

    // list container
    var listContainer = $('#list');



    // click event for button

    add.on('click', function () {

        event.preventDefault(); // stop default behaviour of submit button
        // value of input
        inputValue1 = $('#input1').val();

        // add new list item
        listContainer.prepend(
            //'<li>'+ inputValue1 + inputValue2 +'</li>'
            '<table>'+

            '<tr>' +
            '<th>' + inputValue1 + '</th>'+
            '<th>' + 
            
            '<button class="btn btn-primary btn-fab btn-fab-mini btn-round">'+
            '<span class="material-icons">' +
            'clear' +
            '</span>'+ 
            '</button>'+ 
            '</th>' +
            '</tr>' + 

            '</table>'

            );
        // clear value input
        $('#input').val('');



    });

});