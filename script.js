function responsivehamburger() {
    document.getElementById('listresponsive').classList.toggle('menudisplay');
};

document.getElementById('ham').addEventListener('click', function() {
    responsivehamburger();
});