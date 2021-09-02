var smallerCursor = document.querySelector('.smallerCursor');
var largerCursor = document.querySelector('.largerCursor');

document.onmousemove = function(e) {

    smallerCursor.style.left = (e.pageX - 5) + 'px';
    smallerCursor.style.top = (e.pageY - 5) + 'px';

    smallerCursor.style.display = 'block';

    largerCursor.style.left = (e.pageX - 22) + 'px';
    largerCursor.style.top = (e.pageY - 22) + 'px';

    largerCursor.style.display = 'block';
    
    e.preventDefault();
}