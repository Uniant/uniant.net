function responsivehamburger() {
    document.getElementById('listresponsive').classList.toggle('menudisplay');
    document.getElementById('hamline1').classList.toggle('open');
    document.getElementById('hamline2').classList.toggle('open');
    document.getElementById('hamline3').classList.toggle('open');
};

document.getElementById('ham').addEventListener('click', function() {
    responsivehamburger();
});