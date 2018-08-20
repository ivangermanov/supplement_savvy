$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("../php/backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    // Set search input value on click of result item
	$(document).on("click", ".result p", event => {
		clickedElement = $(event.target);
		
		var xhr = new XMLHttpRequest();
		xhr.open('GET', '../php/getIdByName.php?name='+clickedElement.html());
		xhr.onload = function() {
			if (xhr.readyState === 4 && xhr.status === 200) {
				window.location.href = xhr.responseText;
			}
			else
			{
				alert("ERROR!");
			}
		};
		xhr.send();
		$(this).parent(".result").empty();
	});
});