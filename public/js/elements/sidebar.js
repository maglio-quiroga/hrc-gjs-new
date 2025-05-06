function setActive(clicked) {
    document.querySelectorAll('.sidebtn').forEach(btn => btn.classList.remove('selected'));
    clicked.classList.add('selected');
}