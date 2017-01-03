    $('w0').click(function(date, jsEvent, view) {
        alert('Clicked on: ' + date.format());
        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        alert('Current view: ' + view.name);
    
        $(this).css('background-color', 'red');
    });
