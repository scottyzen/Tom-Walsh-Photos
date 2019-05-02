const hashtag = 'tomwalshphotos';
const imagesToShow = 12;
const instafeed = document.querySelector('.instafeed');
const blockedUsers = ['9257754658'];

// If instagram feed is on page
if (instafeed) {
    setTimeout(() => {
        axios
            .get("https://www.instagram.com/explore/tags/" + hashtag + "/?__a=1")
            .then(response => {
                let images = response.data.graphql.hashtag.edge_hashtag_to_media.edges;

                for (let i = 0; i < images.length; i++) {
                    let img = images[i];
                    let userId = img.node.owner.id;

                    // Check if user id is banned
                    if (!blockedUsers.includes(userId)) {
                        if (i < imagesToShow) {
                            let url = img.node.display_url;
                            let id = img.node.shortcode;
                            let description = img.node.edge_media_to_caption.edges[0].node.text;
                            instafeed.innerHTML += `<a href="https://www.instagram.com/p/${id}" target="_blank"><img src="${url}" alt="${description}" title="${description}"></a>`;
                        }
                    }
                }
            })
    }, 500);
}


const header = document.querySelector('header');

// Burger Button
const burgerButton = document.querySelector('.hamburger');

burgerButton.addEventListener('click', function () {
    // Toggle active state
    this.classList.toggle('is-active');
    header.classList.toggle('show-mobile-nav');
})