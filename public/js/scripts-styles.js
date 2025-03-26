window.onload = function activeItem() {
    const links = [
        {
            item: document.getElementById("home"),
            url: "/"
        },
        {
            item: document.getElementById("about"),
            url: "/about"
        },
        {
            item: document.getElementById("contact"),
            url: "/contact"
        }
    ]
    let urlActive = window.location.pathname;

    return links.map((link) => (
        link.url === urlActive ? link.item.className = "active" : link.item.className = ""
    ))
}