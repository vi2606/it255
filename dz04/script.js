 // log loading
 function on_load_greeting() {
     console.log("Loading finished !!!");
 }

 // clicking enable shadow change
 function change_shadow() {
     // this handler will be executed every time the cursor is moved over a different list item
     var text = document.getElementById("header_text");
     text.style.textShadow = "0.15rem 0.15rem 1rem white";


     text.addEventListener("mouseover", function (event) {
         // highlight the mouseover target
         text.style.textShadow = "0.15rem 0.15rem 1rem white";

         // reset the color after a short delay
         //  setTimeout(function () {
         //      test.style.textShadow = "0.15rem 0.15rem white";
         //  }, 5000);
     }, false);

     text.addEventListener("mouseleave", function (event) {
         // highlight the mouseover target
         text.style.textShadow = "0.15rem 0.15rem .15rem gray";

     }, false);
 }


 // function to change text in element by id
 function change_text() {
     var element = document.getElementById("text_to_change");
     var text = element.innerText.toUpperCase();
     element.innerHTML = "<strong style=\"color:orange;\">" + text + "</strong>";
     element.style.fontSize = "larger";
     element.style.fontStyle = "italic";
 }



 // change color of span, select by tag name
 function highlight_spans() {
     var section_var = document.getElementById("gr_text");
     var select_span_tag = section_var.getElementsByTagName("SPAN");
     var i;
     for (i = 0; i < select_span_tag.length; i++) {
         select_span_tag[i].style.backgroundColor = "orange";
         select_span_tag[i].style.color = "blue";
     }
 }

 // change color of span, select by class
 function highlight_spans_class() {
     var select_var = document.getElementsByClassName("gr_text");
     var i;
     var j;
     var select_span_tag_var;
     //  console.log(select_var.length);
     for (i = 0; i < select_var.length; i++) {
         select_span_tag_var = select_var[i].getElementsByTagName("SPAN");
         //  console.log(select_var);
         //  console.log(select_span_tag_var[i]);
         for (j = 0; j < select_span_tag_var.length; j++) {
             select_span_tag_var[j].style.backgroundColor = "white";
             select_span_tag_var[j].style.color = "blue";
             select_span_tag_var[j].style.fontWeight = "900";

         }
     }
 }

 // change color of title and revert on timer  
 var header_class = document.getElementsByClassName("header-text");
 var header_img = document.getElementById("header_img");

 header_img.addEventListener("mouseover", function (event) {
     // highlight the mouseover target
     header_class[0].style.color = "rgb(39, 39, 39)";

     //  reset the color after a short delay
     setTimeout(function () {
         header_class[0].style.color = "rgb(0, 0, 0)";
     }, 2000);
 }, false);

 // Load more than one functions with window.onload
 function start() {
     on_load_greeting();
     highlight_spans_class();
     alert("\nPowered by javascript: \n\nalert, \non load console log and highlight spans, \nhover on header img, \nclick and mouse over on header logo text, \nclick buttons");
 }
 window.onload = start;