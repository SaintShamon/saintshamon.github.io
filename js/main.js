// check webp
Modernizr.on('webp', function (result) {
    if (result) {
        // supported
    } else {
        // not-supported
    }
});

(function () {
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header');

    burger.onclick = function () {
        header.classList.toggle('menu-opened');
    }
}

    ());

const tabs = document.querySelectorAll('.title_tabs_block .tab_top');

tabs.forEach(tab => {
    tab.addEventListener('click', event => {
        console.log(event.currentTarget); // show what element was clicked in the console
        console.log(event.currentTarget.dataset); // get .dataset Object key from HTML element 

        // Remove 'active' class style from previously selected tab
        document.querySelector('.tab_top.active')?.classList.remove('active'); // optional chaining

        // Add 'active' class style to selected tab
        event.currentTarget.classList.add('active');

        // Hide previously selected tab's content
        document.querySelector('.content_tabs_block .content.show').classList.remove('show');

        // Show selected tab's respective content
        const selectedContent = event.currentTarget.dataset.content; // see .dataset console.log() above
        document.querySelector(selectedContent).classList.add('show');
    })
})

$(".accordion_block .title_block").on("click", function (e) {

    e.preventDefault();
    var $this = $(this);

    if ($(".accordion_block .title-block").hasClass("accordion-active")) {
        $(".accordion_block .content_block").slideUp(400);
        $(".accordion_block .title-block").removeClass("accordion-active");
    }

    $this.toggleClass("accordion-active");

    $this.next().slideToggle('medium', function () {
        if ($(this).is(':visible'))
            $(this).css('display', 'flex');
    });
});


