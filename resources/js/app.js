require('./jquery_ext');
import { RandomBootstrapColors } from './color';
window.$ = window.jQuery = require('jquery');

// Button color change
const rbc = new RandomBootstrapColors();
$('#changeColorBtn').on('click', function() {
    $(this).removeClassStartingWith('btn-');
    $(this).addClass('btn-' + rbc.getNewColorClass());
});

// Button that adds another button
$('#addBtn').on('click', function(){
    // Change the text of the 'adder' button
    $('#addBtn').html('Refresh button');

    // Empty the inner html of the dynamic button and put a dummy text while we don't get a response from our ajax request
    $('#dynamicBtnHolder').html('Loading...');

    // Send an ajax request and display the result on this button
    const url = window.location;
    const subdirs = url.pathname.split('/');
    $.ajax({
        url: url.protocol + '//' + url.host + '/' + subdirs[1] + '/public/api/GetNewTextForDynBtn',
        type: 'get',
        success: function(response) {
            $('#dynamicBtnHolder').empty();
            $('#dynamicBtnHolder').append(`
                <button id="dynamicBtn" type="button" class="btn btn-danger">` + response.msg + `</button>
            `);
        }
    });
});

// Fake form
$('#dashForm').submit(function(event){
    // Prevent default submit behaviour
    event.preventDefault();

    // Log the stuff
    console.log("First name: " + $('#firstName').val());
    console.log("Last name: " + $('#lastName').val());

    // Reset the fields
    $('#firstName').val("");
    $('#lastName').val("");
});

// Product form
$('#productForm').submit(function(event){
    // Prevent default submit behaviour
    event.preventDefault();

    // Log the stuff
    console.log("Product name: " + $('#productName').val());
    console.log("Serial number: " + $('#productSerial').val());

    // Reset the fields
    $('#productName').val("");
    $('#productSerial').val("");
});


// User form
$('#userForm').submit(function(event){
    // Prevent default submit behaviour
    event.preventDefault();

    const usersTable = $('#tBody');
    const newName = $('#userFormName').val();
    const newAge = $('#userFormAge').val();
    const newUsername = "add_to_dom";

    // Add the entry to the table
    usersTable.append(`
        <tr id="add_to_dom_`+newUsername+`">
            <th scope="row">` + newName + `</th>
            <td>` + newAge + `</td>
            <td>` + newUsername + `</td>
        </tr>
    `);

    // Reset the fields
    $('#userFormName').val("");
    $('#userFormAge').val("");

    // Scroll to the bottom of the table
    $([document.documentElement, document.body]).animate({
        scrollTop: $('#compSix').offset().top + 100
    }, 500);
});

// Listen on document because if we change the dom the new tr will not be found
$(document).on('click', 'tr', function(){
    // Get the textarea target and clear it if we find it
    const textarea = $('#compSix');
    if(!textarea.length)
        return;
    textarea.empty();

    // Loop through our TR children and add their inner texts to the textarea
    $(this).children().each(function(){
        console.log('Add ' + $(this).text() + ' to textarea.');
        textarea.append($(this).text() + "\n")
    });

    // Go to the textarea pos
    $([document.documentElement, document.body]).animate({
        scrollTop: textarea.offset().top - 100
    }, 500);
});