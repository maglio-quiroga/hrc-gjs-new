function setActive(clicked) {
    document.querySelectorAll('.sidebar-btn').forEach(btn => btn.classList.remove('selected'));
    clicked.classList.add('selected');
}