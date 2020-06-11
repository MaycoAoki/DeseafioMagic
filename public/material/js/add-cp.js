$(function () {


    // configuration

    // button
    var addCp = $('#addCp');

    // list container
    var listContainer = $('#listCp');



    // click event for button

    addCp.on('click', function () {

        event.preventDefault(); // stop default behaviour of submit button
        // value of input
        inputValue2 = $('#input2').val();

        // add new list item
        listContainer.prepend(
            //'<li>'+ inputValue1 + inputValue2 +'</li>'
            '<table>'+

            '<tr>' +
            '<th>' + inputValue2 + '</th>'+
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