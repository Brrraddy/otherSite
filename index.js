const images = [
    "./images/1.jpg",
    "./images/2.jpg",
    "./images/3.jpg",
    "./images/4.jpg",
    "./images/5.jpg"
]
let imagesArray = [];
let selectedImage;
let sameImagesCount = 1;

function randomInteger(min, max) {
    let rand = min + Math.random() * (max - min);
    return Math.round(rand);
}

function posY(elm) {
    let test = elm, top = 0;

    while(!!test && test.tagName.toLowerCase() !== "body") {
        top += test.offsetTop;
        test = test.offsetParent;
    }

    return top;
}

function viewPortHeight() {
    let de = document.documentElement;

    if(!!window.innerWidth)
    { return window.innerHeight; }
    else if( de && !isNaN(de.clientHeight) )
    { return de.clientHeight; }

    return 0;
}

function scrollY() {
    if( window.pageYOffset ) { return window.pageYOffset; }
    return Math.max(document.documentElement.scrollTop, document.body.scrollTop);
}

function checkvisible( elm ) {
    let vpH = viewPortHeight(),
        st = scrollY(),
        y = posY(elm);

    return (y < (vpH + st)) && (y > st);
}

document.addEventListener("DOMContentLoaded", function() {    
    const TOTAL_IMAGES_COUNT = randomInteger(20, 40);

    for(let i = 0; i < TOTAL_IMAGES_COUNT; i++) {
        let imgElement = document.createElement("img");
        imgElement.onclick = () => {
            imagesArray.forEach(element => element.checked = false);
            sameImagesCount = 1;
            imgElement.checked = true;
            document.getElementById("image-counter").innerHTML = sameImagesCount;
            selectedImage = imgElement.src;
            checkImages();
        }
        imgElement.src = images[randomInteger(0, images.length - 1)];
        imgElement.classList.add("custom-image");
        document.getElementById("root").prepend(imgElement);
        imagesArray.push(imgElement)
    }
});

function checkImages() {
    if (selectedImage) {
        imagesArray.forEach(element => {
            if (!element.checked && element.src === selectedImage && checkvisible(element)) {
                sameImagesCount++;
                document.getElementById("image-counter").innerHTML = sameImagesCount;
                element.checked = true;
            }
        });
    }
}

window.addEventListener("scroll", checkImages);