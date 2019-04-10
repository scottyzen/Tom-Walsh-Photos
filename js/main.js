const hashtag = 'graiguenamanagh';
const imagesToShow = 12;
const instafeed = document.querySelector('.instafeed');


setTimeout(() => {
    axios
        .get("https://www.instagram.com/explore/tags/" + hashtag + "/?__a=1")
        .then(response => {
            let images = response.data.graphql.hashtag.edge_hashtag_to_media.edges;

            for (let i = 0; i < images.length; i++) {
                let img = images[i];
                if (i < imagesToShow) {
                    let url = img.node.display_url;
                    let id = img.node.shortcode;
                    let description = img.node.edge_media_to_caption.edges[0].node.text;

                    instafeed.insertAdjacentHTML('beforeend', `<a href="https://www.instagram.com/p/${id}" target="_blank"><img src="${url}" alt="${description}" title="${description}"></a>`);

                }
            }
        })
}, 500);