/******************Add the story ******************/
const image_profile = [
    ['https://cdn-icons-png.flaticon.com/256/4661/4661320.png', 'Mohamed'],
    ['https://cdn-icons-png.flaticon.com/256/5072/5072860.png', 'Mahmoud'],
    ['https://cdn-icons-png.freepik.com/256/10771/10771017.png', 'Marwan'],
    ['https://cdn-icons-png.flaticon.com/256/3597/3597892.png', 'Hosny'],
    ['https://cdn-icons-png.flaticon.com/256/6009/6009435.png', 'Norhan'],
    ['https://cdn-icons-png.flaticon.com/256/6009/6009435.png', 'Zeinab'],
    ['https://cdn-icons-png.flaticon.com/256/4661/4661320.png', 'Mohamed'],
    ['https://cdn-icons-png.flaticon.com/256/5072/5072860.png', 'Mahmoud'],
    ['https://cdn-icons-png.freepik.com/256/10771/10771017.png', 'Marwan'],
    ['https://cdn-icons-png.flaticon.com/256/3597/3597892.png', 'Hosny'],
    ['https://cdn-icons-png.flaticon.com/256/6009/6009435.png', 'Norhan'],
    ['https://cdn-icons-png.flaticon.com/256/6009/6009435.png', 'Zeinab'],
    ['https://cdn-icons-png.flaticon.com/256/4661/4661320.png', 'Mohamed'],
    ['https://cdn-icons-png.flaticon.com/256/5072/5072860.png', 'Mahmoud'],
    ['https://cdn-icons-png.freepik.com/256/10771/10771017.png', 'Marwan'],
    ['https://cdn-icons-png.flaticon.com/256/3597/3597892.png', 'Hosny'],
    ['https://cdn-icons-png.flaticon.com/256/6009/6009435.png', 'Norhan'],
    ['https://cdn-icons-png.flaticon.com/256/6009/6009435.png', 'Zeinab'],
    ['https://cdn-icons-png.flaticon.com/256/4661/4661320.png', 'Mohamed'],
    ['https://cdn-icons-png.flaticon.com/256/5072/5072860.png', 'Mahmoud'],
    ['https://cdn-icons-png.freepik.com/256/10771/10771017.png', 'Marwan'],
    ['https://cdn-icons-png.flaticon.com/256/3597/3597892.png', 'Hosny'],
    ['https://cdn-icons-png.flaticon.com/256/6009/6009435.png', 'Norhan'],
    ['https://cdn-icons-png.flaticon.com/256/6009/6009435.png', 'Zeinab'],
]
const story_container = document.querySelector('.owl-carousel.items');
if (story_container) {
    for (var i = 0; i < image_profile.length; i++) {
        const parentDiv = document.createElement('div');
        parentDiv.classList.add("item_s");
        parentDiv.innerHTML = `
            <img src="${image_profile[i][0]}">
            <p>${image_profile[i][1]}</p>
            `;
        story_container.appendChild(parentDiv);
    }
}


$(document).ready(function () {
    $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 5,
    responsiveClass: true,
    responsive: {
        0: {
            items: 5,
            nav: true
        },
        500: {
            items: 7,
            nav: false
        }
    }
})
