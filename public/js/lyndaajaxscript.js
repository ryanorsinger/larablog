var request = new XMLHttpRequest();

//          request type, filename, asynchronous or not?
request.open('GET', 'data.txt');
request.onreadystatechange = function() {

    if ((request.readyState===4) && (request.status===200)) {
        console.log(request);
        // document.writeln(request.responseText);
        var modify =
            document.getElementsByTagName('li');
        modify[2].innerHTML = request.responseText;
    }
}
request.send();
