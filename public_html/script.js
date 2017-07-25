function pageLoad()
{
    // Check the script has been loaded successfully
    console.info('Script Loaded');
}

function ajax()
{
    // Check to see if the button press is being picked up
    console.log('Button Pressed');
    // Return the form element as an object - Used later for the form data
    var form = document.getElementsByClassName('form')[0];
    // Create an object for the AJAX request
    var request = new XMLHttpRequest();
    // Define the file to accessed by the AJAX request, whether it be asyncronus or not
    request.open('POST', 'form.php', true);
    
    // Add the styling rules for the animations to be shown
    document.getElementsByClassName('message')[0].classList.add('loaded');
    document.getElementsByClassName('message')[0].style.display = 'block';
    
    // Function for when the request has been sent
    request.onreadystatechange = function() {
        if (request.readyState > 3)
            {
                // When the request has been proccessed and the results have been returned
                 document.getElementsByClassName('message')[0].classList.remove('loaded');
                 // Hide the loading animation
                 document.getElementsByClassName('message')[0].style.display = 'none';
                 // Console information - for debugging purposes
                 console.info('AJAX request proccessed!');
                 // Display the feedback provided by the PHP Script
                 document.getElementsByClassName('footer')[0].innerHTML = request.responseText;
                 // Set the background color of the where the response is outputted
                 document.getElementsByClassName('footer')[0].style.backgroundColor = 'rgba(255,10,10,0.6)';
            }
    }
    // Create the from data object, passing in the form object we created earlier
    var data = new FormData(form);
    // Send the AJAX request with the data inputted from the form
    request.send(data);
}

// Listen for when the document tree has been passed by the browser
document.addEventListener('DOMContentLoaded', pageLoad);