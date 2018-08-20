window.onload = function() {

    var rating = this.document.getElementById('rating').lastChild.innerText;
    var stars = (Math.round(rating));
    var icon = document.createElement('i');
    icon.className += "fas fa-star";
    for(var i = 0; i < stars; i++) {
        this.document.getElementById('rating-stars').prepend(icon);
        icon = icon.cloneNode(true);
    }
}
