$('.video1-play').click(function () {
    video = '<iframe src="' + $(this).attr('data-video') + '"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    $(this).replaceWith(video);
});

$(' .video2-play').click(function () {
    video = '<iframe src="' + $(this).attr('data-video') + '"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    $(this).replaceWith(video);
});
