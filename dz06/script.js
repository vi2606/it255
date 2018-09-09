$("document").ready(function () {
    getData();
});

function getData() {
    $.ajax({
        // the URL for the request
        url: "http://api.icndb.com/jokes/random",


        // whether this is a POST or GET request
        type: "GET",

        // the type of data we expect back
        dataType: "json",

        // function to call for success
        success: successFn,

        // function to call on an error
        error: errorFn,

        // code to run regardless of success or failure
        complete: function (xhr, status) {
            console.log("The request is complete!");
        }
    });
}

function successFn(result) {
    console.log("Setting result");
    console.log(result.value.id);
    var output = "";
    output += '<span class="joke-id">Joke no: ' + result.value.id + '</span></br>';
    output += ' <h2 class="joke">' + result.value.joke + "</h2> </br>";

    if (typeof result.value.categories[0] !== 'undefined') {
        var output_cat = "";
        var l = result.value.categories.length;
        output_cat += 'Category: <span class="joke-cat">';
        var i;
        for (i = 0; i < l; i++) {
            output_cat += result.value.categories[i] + " ";
        }

        output_cat += "</span></br>";
        $("#ajaxContent-cat").append(output_cat);

    }
    $("#ajaxContent").append(output);
}

function errorFn(xhr, status, strErr) {
    console.log("There was an error!");
}


setInterval(function () {
    setTimeout(function () {
        $("#heading").toggleClass("flash-shadow-up");
    }, 300);

    setTimeout(function () {
        $("#heading").toggleClass("flash-shadow");
    }, 600);

}, 900);


// $("#heading").on("click", getData());